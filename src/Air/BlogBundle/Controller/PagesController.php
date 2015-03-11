<?php

namespace Air\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PagesController extends Controller {
	
	/**
	 * @Route("o-mnie", name="o_mnie")
	 * @Template()
	 */
	function aboutAction() {
		return array ();
	}
	/**
	 * @Route("kontakt", name="kontakt")
	 * @Template()
	 */
	function kontaktAction() {


		$cos = "nie wiemco to jest";
		return array(
			'cos' => $cos
		);
	}
}
