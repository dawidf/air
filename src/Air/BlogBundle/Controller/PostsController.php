<?php

namespace Air\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PostsController extends Controller {
	
	/**
	 * @Route("/{nr_page}", name="blog_index", defaults={"nr_page"=1}, requirements={"nr_page" = "\d+"})
	 * @Template()
	 */
	function indexAction() {
		return array ();
	}
	/**
	 * @Route("/gowno")
	 * @Template()
	 */
	function kontaktAction() {
		return array ();
	}
}
