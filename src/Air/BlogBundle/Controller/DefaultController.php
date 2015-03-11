<?php

namespace Air\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/imie")
     * @Template()
     */
    public function indexAction()
    {
        return array('name' => 'moje piękne imie');
    }
}
