<?php

namespace Air\AdminBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminPanelController extends Controller
{
    /**
     * @Route("/", name="admin_panel")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/posts", name="admin_posts")
     * @Template()
     */
    public function adminPostsAction()
    {
        $PostsRepo = $this->getDoctrine()->getRepository('AirBlogBundle:Post');
        $Post = $PostsRepo->findAll();
        $qb = $PostsRepo->getQueryBuilder();

        return array(
            'posts' => $Post
        );


    }
}