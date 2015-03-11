<?php

namespace Air\BlogBundle\Controller;



use Air\BlogBundle\Entity\Comment;
use Air\BlogBundle\Form\Type\CommentType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


/**
 * Class PostsController
 * @package Air\BlogBundle\Controller
 */
class PostsController extends Controller {

	protected $itemLimit = 2;
	/**
	 * @Route("/{page}", name="blog_index", defaults={"page"=1}, requirements={"page" = "\d+"})
	 * @Template("AirBlogBundle:Posts:postsList.html.twig")
	 */
	function indexAction($page) {


		$pagination = $this->getPaginatedPosts(array(
			'status' => 'published',
			'orderBy' => 'p.publishedDate',
			'orderDir' => 'DESC'

		), $page);


		return array (
			'pagination' => $pagination,
			'listTitle' => 'Najnowsze wpisy'
		);
	}

	/**
	 * @Route("/search/{page}", name="blog_search", defaults={"page"=1}, requirements={"page" = "\d+"})
	 * @Template("AirBlogBundle:Posts:postsList.html.twig")
	 */
	function searchAction(Request $request, $page) {

		$searchParams  = $request->query->get('search');

		$pagination = $this->getPaginatedPosts(array(
			'status' => 'published',
			'orderBy' => 'p.publishedDate',
			'orderDir' => 'DESC',
			'search' => $searchParams

		), $page);


		return array (
			'pagination' => $pagination,
			'listTitle' => 'Wyniki wyszukiwania dla : "'. $searchParams.'"'
		);
	}



	/**
	 * @Route("/{slug}", name="blog_post")
	 * @Template()
	 */
	function postAction(Request $Request, $slug)
	{


		$PostRepo = $this->getDoctrine()->getRepository('AirBlogBundle:Post');
		$Post = $PostRepo->getPublishedPost($slug);

		if( null === $Post)
		{
			throw $this->createNotFoundException('Post nie znaleziony');
		}
		//jeśli jest zalogowany
		if(null !== $this->getUser())
		{
			$Comment = new Comment();
			$Comment->setAuthor($this->getUser())
				->setPost($Post);

			$commentForm = $this->createForm(new CommentType(), $Comment);


			if($Request->isMethod('POST'))
			{
				$commentForm->handleRequest($Request);

				if($commentForm->isValid())
				{
					$em = $this->getDoctrine()->getManager();
					$em->persist($Comment);
					$em->flush();

					$this->get('session')->getFlashBag()->add('success','Komantarz dodany!');

					$redirectUrl = $this->generateUrl('blog_post', array(
						'slug' =>$Post->getSlug()
					));

					return $this->redirect($redirectUrl);
				}
			}
		}

		//informuje o ataku cross script costam
		if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))
		{
			//Stare
			$csrfProvider = $this->get('form.csrf_provider');
			//Nowe, nie działa
//			$csrfProvider = $this->get('security.csrf.token_manager');
		}


		return array (
			'post' => $Post,
			'commentForm' => isset($commentForm) ? $commentForm->createView() : null,
			'csrfProvider' => isset($csrfProvider) ? $csrfProvider : null,
			'tokenName' => 'delCom%d'
		);

	}

	/**
	 * @param $commentId
	 * @return JsonResponse
	 * @Route("post/comment/delete/{commentId}/{token}", name="blog_deleteComment")
	 */
	public function deleteCommentAction($commentId,$token)
	{
		//sprawdzanie czy użytkownik ma uprawnienia do usuwania
		if(!$this->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))
		{
			throw $this->createAccessDeniedException('Nie masz uprawnien do tego zadania');
		}
		//sprawdza czy tkoeny się zgadazają;
		$validToken = sprintf('delCom%d', $commentId);
		if(!$this->get('form.csrf_provider')->isCsrfTokenValid($validToken, $token))
		{
			throw $this->createAccessDeniedException('Błędny token akcji');
		}
		$Comment = $this->getDoctrine()
			->getRepository('AirBlogBundle:Comment')
			->find($commentId);

		if(null == $Comment)
		{
			throw $this->createNotFoundException('Nie znaleziono takiego komentarza');
		}

		$em = $this->getDoctrine()->getManager();
		$em->remove($Comment);
		$em->flush();

		return new JsonResponse(array(
			'status' => 'ok',
			'message' => 'Wiadomość została usunięta'
		));


	}





	/**
	 * @Route("/category/{slug}/{page}",
	 * 		name="blog_category",
	 * 		defaults={"page"=1},
	 * 		requirements={"page"="\d+"}
	 *
	 * )
	 * @Template("AirBlogBundle:Posts:postsList.html.twig")
	 *
     */
	public function categoryAction($slug, $page)
	{

		$pagination = $this->getPaginatedPosts(array(
			'status' => 'published',
			'orderBy' => 'p.publishedDate',
			'orderDir' => 'DESC',
			'categorySlug' => $slug
		), $page);

		$CategoryRepo = $this->getDoctrine()->getRepository('AirBlogBundle:Category');
		$Category = $CategoryRepo->findOneBySlug($slug);




		return array(
			'pagination' => $pagination,
			'listTitle' => sprintf('Wpisy w kategorti %s', $Category->getTitle())
		);


	}

	/**
	 * @Route("/tag/{slug}/{page}",
	 * 		name="blog_tag",
	 * 		defaults={"page"=1},
	 * 		requirements={"page"="\d+"}
	 *
	 * )
	 * @Template("AirBlogBundle:Posts:postsList.html.twig")
	 *
	 */
	public function tagAction($slug, $page)
	{


		$TagRepo = $this->getDoctrine()->getRepository('AirBlogBundle:Tag');
		//nazwa encji
		$Tag = $TagRepo->findOneBySlug($slug);

		$pagination = $this->getPaginatedPosts(array(
			'status' => 'published',
			'orderBy' => 'p.publishedDate',
			'orderDir' => 'DESC',
			'tagSlug' => $slug
		), $page);


		return array(
			'pagination' => $pagination,
			'listTitle' => sprintf('Wpisy z tagiem %s', $Tag->getTitle())
		);
	}

	protected function getPaginatedPosts(array $params = array(), $page)
	{

		$PostRepo = $this->getDoctrine()->getRepository('AirBlogBundle:Post');
		$qb = $PostRepo->getQueryBuilder($params);


		$paginator = $this->get('knp_paginator');
		$pagination = $paginator->paginate($qb, $page, $this->itemLimit);

		return $pagination;
	}







}
