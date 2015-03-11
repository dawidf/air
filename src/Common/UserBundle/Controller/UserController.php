<?php

namespace Common\UserBundle\Controller;

use Common\UserBundle\Exception\UserException;
use Common\UserBundle\Form\Type\AccountSettingsType;
use Common\UserBundle\Form\Type\ChangePasswordType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    /**
     * @param Request $Request
     * @return array
     *
     * @Route("/account-settings", name="user_accountSettings")
     * @Template()
     */
    public function accountSettingsAction(Request $Request)
    {
        $User = $this->getUser();
        //tworzy formularz na podstawie encji User, drougi parametr uzupełnia początkowe dane jako
        //dane z encji już zapsanej
        $accountSettingsForm = $this->createForm(new AccountSettingsType(), $User);

        if($Request->isMethod('POST') && $Request->request->has('accountSettings'));
        {

            $accountSettingsForm->handleRequest($Request);

            if($accountSettingsForm->isValid())
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($User);
                $em->flush();


                $this->get('session')->getFlashBag()->add('success', 'Twoje dane zostały zmienione');
                return $this->redirect($this->generateUrl('user_accountSettings'));
            }
            else
            {
                $this->get('session')->getFlashBag()->add('error', 'Popraw błędy formularzarr');
            }
        }


        //Change Password


        $changePasswordForm = $this->createForm(new ChangePasswordType(), $User);

        if($Request->isMethod('POST') && $Request->request->has('changePassword'))
        {

            $changePasswordForm->handleRequest($Request);

            if($changePasswordForm->isValid())
            {



                try{
                    $userManager = $this->get('user_manager');
                    $userManager->changePassword($User);

                    $this->get('session')->getFlashBag()->add('success', 'Twoje hasło zostało zmienione');
                    return $this->redirect($this->generateUrl('user_accountSettings'));
                }catch (UserException $ex)
                {
                    $this->get('session')->getFlashBag()->add('error', $ex->getMessage());
                }
            }
            else
            {
                $this->get('session')->getFlashBag()->add('error', 'Popraw błędy formularza2');
            }
        }


        return array(
            'user' => $User,
            'accountSettingsForm' => $accountSettingsForm->createView(),
            'changePasswordForm' => $changePasswordForm->createView(),


        );
    }
}