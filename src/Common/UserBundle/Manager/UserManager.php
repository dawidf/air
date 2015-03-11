<?php
/**
 * Created by PhpStorm.
 * User: ssss
 * Date: 23.02.15
 * Time: 00:19
 */

namespace Common\UserBundle\Manager;

use Common\UserBundle\Entity\User;
use Common\UserBundle\Exception\UserException;
use Common\UserBundle\Mailer\UserMailer;
use Doctrine\Bundle\DoctrineBundle\Registry as Doctrine;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface as Templating;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\Router;
use Symfony\Component\Security\Core\Encoder\EncoderFactory;


class UserManager {

    protected $doctrine;
    protected $router;
    protected $templating;
    protected $encoderFactory;
    protected $userMailer;
    // 6 minuta
    function __construct(Doctrine $doctrine, Router $router, Templating $templating, EncoderFactory $encoderFactory, UserMailer $userMailer)
    {
        $this->doctrine = $doctrine;
        $this->router = $router;
        $this->templating = $templating;
        $this->encoderFactory = $encoderFactory;
        $this->userMailer = $userMailer;
    }

    protected function generateActionToken(){
       return substr(md5(uniqid(NULL, TRUE)),0,20);
    }


    protected function getRandomPassword($length = 8){
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < $length; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }




    public function sendResetPasswordLink($userEmail)
    {
        $User = $this->doctrine->getRepository('CommonUserBundle:User')
            ->findOneByEmail($userEmail);

        if(null === $User)
        {
            //Klasa w Exception/UserException
            throw new UserException('Nie znaleziono takiego uzytkownika');
        }
        $User->setActionToken($this->generateActionToken());

        $em = $this->doctrine->getManager();
        $em->persist($User);
        $em->flush();

        $urlParams = array('actionToken'=> $User->getActionToken());
        //user_resetPassword to controller
        $resetUrl = $this->router->generate('user_resetPassword', $urlParams, UrlGeneratorInterface::ABSOLUTE_URL);

        //szablon html z linkiem do resetu
        $emailBody = $this->templating->render('CommonUserBundle:Email:passwdResetLink.html.twig', array(
            'resetUrl' => $resetUrl,
        ));

        $this->userMailer->send($User,'Link resetujący hasło', $emailBody);
        return true;

    }


    public function resetPassword($actionToken)
    {
        $User = $this->doctrine->getRepository('CommonUserBundle:User')
            ->findOneByActionToken($actionToken);
        
        if(null === $User)
        {
            //Klasa w Exception/UserException
            throw new UserException('Podano błędne parametry akcji');
        }
        $plainPasswd = $this->getRandomPassword();

        $encoder = $this->encoderFactory->getEncoder($User);
        $encoderPasswd = $encoder->encodePassword($plainPasswd, $User->getSalt());

        $User->setPassword($encoderPasswd);
        $User->setActionToken(null);

        $em = $this->doctrine->getManager();
        $em->persist($User);
        $em->flush();

        $emailBody = $this->templating->render('CommonUserBundle:Email:newPassword.html.twig', array(
            'plainPasswd' =>$plainPasswd
        ));

        $this->userMailer->send($User, 'Noew hasło do konta', $emailBody);

        return true;
    }

    public function registerUser(User $User)
    {
        if(null !== $User->getId())
        {
            throw new UserException('Użytkownik jest już zarejestrowany');
        }

        $encoder = $this->encoderFactory->getEncoder($User);
        $encoderPasswd = $encoder->encodePassword($User->getPlainPassword(), $User->getSalt());

        $User->setPassword($encoderPasswd);
        $User->setActionToken($this->generateActionToken());
        $User->setEnabled(false);

        $em = $this->doctrine->getManager();
        $em->persist($User);
        $em->flush();

        $urlParams = array(
            'actionToken' =>$User->getActionToken()
        );

        $activationUrl = $this->router->generate('user_activateAccount', $urlParams, UrlGeneratorInterface::ABSOLUTE_URL);

        $emailBody = $this->templating->render('CommonUserBundle:Email:accountActivation.html.twig', array(
            'activationUrl' => $activationUrl
        ));

        $this->userMailer->send($User, 'Aktywacja konta', $emailBody);

        return true;
    }

    public function activateAccount($actionToken)
    {
        $User = $this->doctrine->getRepository('CommonUserBundle:User')
            ->findOneByActionToken($actionToken);

        if(null === $User)
        {
            //Klasa w Exception/UserException
            throw new UserException('Podano błędne parametry akcji');
        }
        $User->setEnabled(true);
        $User->setActionToken(null);

        $em = $this->doctrine->getManager();
        $em->persist($User);
        $em->flush();

        return true;
    }

    public function changePassword(User $User)
    {
        if(null == $User->getPlainPassword())
        {
            throw new UserException('Nie ustawiono nowego hasła');
        }

        $encoder = $this->encoderFactory->getEncoder($User);
        $encoderPassword = $encoder->encodePassword($User->getPlainPassword(), $User->getSalt());
        $User->setPassword($encoderPassword);

        $em = $this->doctrine->getManager();
        $em->persist($User);
        $em->flush();

        return true;
    }
}