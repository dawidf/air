<?php

namespace Air\BlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TaxonomyController extends Controller
{
    /**
     * @Template()
     */
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }
}
