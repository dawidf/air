<?php

namespace Air\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PagesController extends Controller {
	
	/**
	 * @Route("o-mnie")
	 * @Template()
	 */
	function aboutAction() {
		return array ();
	}
	/**
	 * @Route("kontakt")
	 * @Template()
	 */
	function kontaktAction() {
		return array ();
	}
}
