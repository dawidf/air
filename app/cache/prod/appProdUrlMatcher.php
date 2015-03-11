<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/admin-panel')) {
            // admin_panel
            if (rtrim($pathinfo, '/') === '/admin-panel') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_panel');
                }

                return array (  '_controller' => 'Air\\AdminBundle\\Controller\\AdminPanelController::indexAction',  '_route' => 'admin_panel',);
            }

            // admin_posts
            if ($pathinfo === '/admin-panel/posts') {
                return array (  '_controller' => 'Air\\AdminBundle\\Controller\\AdminPanelController::adminPostsAction',  '_route' => 'admin_posts',);
            }

        }

        // blog_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Common\\UserBundle\\Controller\\LoginController::loginAction',  '_route' => 'blog_login',);
        }

        // user_resetPassword
        if (0 === strpos($pathinfo, '/reset-password') && preg_match('#^/reset\\-password/(?P<actionToken>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_resetPassword')), array (  '_controller' => 'Common\\UserBundle\\Controller\\LoginController::resetPasswordAction',));
        }

        if (0 === strpos($pathinfo, '/account-')) {
            // user_activateAccount
            if (0 === strpos($pathinfo, '/account-activation') && preg_match('#^/account\\-activation/(?P<actionToken>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_activateAccount')), array (  '_controller' => 'Common\\UserBundle\\Controller\\LoginController::activateAccountAction',));
            }

            // user_accountSettings
            if ($pathinfo === '/account-settings') {
                return array (  '_controller' => 'Common\\UserBundle\\Controller\\UserController::accountSettingsAction',  '_route' => 'user_accountSettings',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            // _check_path
            if ($pathinfo === '/login-check') {
                return array('_route' => '_check_path');
            }

            // _logout
            if ($pathinfo === '/logout') {
                return array('_route' => '_logout');
            }

        }

        // o_mnie
        if ($pathinfo === '/o-mnie') {
            return array (  '_controller' => 'Air\\BlogBundle\\Controller\\PagesController::aboutAction',  '_route' => 'o_mnie',);
        }

        // kontakt
        if ($pathinfo === '/kontakt') {
            return array (  '_controller' => 'Air\\BlogBundle\\Controller\\PagesController::kontaktAction',  '_route' => 'kontakt',);
        }

        // blog_index
        if (preg_match('#^/(?P<page>\\d+)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_index')), array (  'page' => 1,  '_controller' => 'Air\\BlogBundle\\Controller\\PostsController::indexAction',));
        }

        // blog_search
        if (0 === strpos($pathinfo, '/search') && preg_match('#^/search(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_search')), array (  'page' => 1,  '_controller' => 'Air\\BlogBundle\\Controller\\PostsController::searchAction',));
        }

        // blog_post
        if (preg_match('#^/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_post')), array (  '_controller' => 'Air\\BlogBundle\\Controller\\PostsController::postAction',));
        }

        // blog_deleteComment
        if (0 === strpos($pathinfo, '/post/comment/delete') && preg_match('#^/post/comment/delete/(?P<commentId>[^/]++)/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_deleteComment')), array (  '_controller' => 'Air\\BlogBundle\\Controller\\PostsController::deleteCommentAction',));
        }

        // blog_category
        if (0 === strpos($pathinfo, '/category') && preg_match('#^/category/(?P<slug>[^/]++)(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_category')), array (  'page' => 1,  '_controller' => 'Air\\BlogBundle\\Controller\\PostsController::categoryAction',));
        }

        // blog_tag
        if (0 === strpos($pathinfo, '/tag') && preg_match('#^/tag/(?P<slug>[^/]++)(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_tag')), array (  'page' => 1,  '_controller' => 'Air\\BlogBundle\\Controller\\PostsController::tagAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
