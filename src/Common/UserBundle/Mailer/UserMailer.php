<?php
/**
 * Created by PhpStorm.
 * User: ssss
 * Date: 23.02.15
 * Time: 00:21
 */

namespace Common\UserBundle\Mailer;


use Common\UserBundle\Entity\User;
// SERWIS ZAREJESTROWANYT W Resources/config/services.tml
class UserMailer {
    private $swiftMailer;
    private $formEmail;
    private $formName;

    function __construct(\Swift_Mailer $swiftMailer, $formEmail, $formName)
    {
        $this->swiftMailer = $swiftMailer;
        $this->formName = $formName;
        $this->formEmail = $formEmail;
    }

    public function send(User $User, $subject, $htmlBody)
    {
        $message = \Swift_Message::newInstance()
            ->setSubject($subject)
            ->setFrom($this->formEmail, $this->formName)
            ->setTo($User->getEmail(), $User->getUsername())
            ->setBody($htmlBody, 'text/html');

        $this->swiftMailer->send($message);
    }


}