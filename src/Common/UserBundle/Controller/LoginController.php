<?php

namespace Common\UserBundle\Controller;

use Common\UserBundle\Entity\User;
use Common\UserBundle\Exception\UserException;
use Common\UserBundle\Form\Type\LoginType;
use Common\UserBundle\Form\Type\RegisterUserType;
use Common\UserBundle\Form\Type\RememberPasswordType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\SecurityContextInterface;


class LoginController extends Controller
{
    /**
     * @return array
     * @Route("/login", name="blog_login")
     * @Template()
     */
    public function loginAction(Request $Request)
    {
        $Session = $this->get('session');
        if($Request->attributes->has(Security::AUTHENTICATION_ERROR))
        {
            $loginError = $Request->attributes->get(Security::AUTHENTICATION_ERROR);

        }
        else
        {
            $loginError = $Session->remove(SecurityContextInterface::AUTHENTICATION_ERROR);
        }
        if(isset($loginError))
        {
            $this->get('session')->getFlashBag()->add('error', $loginError->getMessage());
        }

        //formularz Form/Type/LoginType.php


        $loginForm = $this->createForm(new LoginType(), array(
            'username' => $Session->get(SecurityContextInterface::LAST_USERNAME)
        ));

        //formularz Form/Type/RememberPasswordType.php
        $rememberPasswordForm = $this->createForm(new RememberPasswordType());

        if($Request->isMethod('POST'))
        {


            $rememberPasswordForm->handleRequest($Request);
            if($rememberPasswordForm->isValid())
            {
                //obsługa user Exception
                try{
                    //Pobranie emaila z requesta, przypisanie do zmiennej userEmail
                    $userEmail = $rememberPasswordForm->get('email')->getData();


                    //Servis user_manager, kalasa Manager/UserManager
                    $userManager = $this->get('user_manager');
                    $userManager->sendResetPasswordLink($userEmail);

                    $this->get('session')->getFlashBag()->add('success', 'Instrukcje resetowania hasła zostały wysłane na adres email');
                    return $this->redirect($this->generateUrl('blog_login'));

                } catch(UserException $exc)
                {
//                    echo $exc->getTraceAsString();
                    // wstrzyknięcie wiadomości błędu do pola z emailem
                    $error = new FormError($exc->getMessage());
                    $rememberPasswordForm->get('email')->addError($error);
                }

            }
        }

        //Register User Form -> formularz do tego jest w Form/Type/RegisterUserType.php
        $User = new User();

        //Tworzy formularz na podstawie RegisterUserType, z encją User
        $registerUserForm = $this->createForm(new RegisterUserType(), $User);

        if($Request->isMethod('POST'))
        {   //Do formularza wstrzykuje dane z niego
            $registerUserForm->handleRequest($Request);

            if($registerUserForm->isValid())
            {
                try{
                    //pobranie menagere użytkowników
                    $userManager = $this->get('user_manager');
                    //w nim uruchamia sie registerUser
                    $userManager->registerUser($User);

                    $this->get('session')->getFlashBag()->add('success','Konto zostało utworzone, na twoją poczte został wysłany link aktywacyjny');

                    return $this->redirect($this->generateUrl('blog_login'));
                }
                catch(UserException $ex){
                    $this->get('session')->getFlashBag()->add('error', $ex->getMessage());
                }
            }
        }





        return array(
//            'loginError' => $loginError,
            'loginForm'  => $loginForm->createView(),
            'rememberPasswordForm' => $rememberPasswordForm->createView(),
            'registerUserForm' => $registerUserForm->createView(),
        );
    }



    /**
     * @return array
     * @Route("/reset-password/{actionToken}", name="user_resetPassword")
     *
     */
    public function resetPasswordAction($actionToken)
    {
        try{
            $userManager = $this->get('user_manager');
            $userManager->resetPassword($actionToken);

            $this->get('session')->getFlashBag()->add('success','Na twój adres email zostało wysłane nowe hasło');
        } catch(UserException $ex)
        {
            $this->get('session')->getFlashBag()->add('error',$ex->getMessage());
        }

        return $this->redirect($this->generateUrl('blog_login'));
    }

    /**
     * @return array
     * @Route("/account-activation/{actionToken}", name="user_activateAccount")
     *
     */
    public function activateAccountAction($actionToken)
    {
        try{
            $userManager = $this->get('user_manager');
            $userManager->activateAccount($actionToken);

            $this->get('session')->getFlashBag()->add('success','Twoje konto zostało aktywowane');
        } catch(UserException $ex)
        {
            $this->get('session')->getFlashBag()->add('error',$ex->getMessage());
        }

        return $this->redirect($this->generateUrl('blog_login'));
    }
}
