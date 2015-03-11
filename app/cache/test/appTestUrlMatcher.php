<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appTestUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appTestUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/assets/css/compiled')) {
            // _assetic_63fad83
            if ($pathinfo === '/assets/css/compiled.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '63fad83',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_63fad83',);
            }

            if (0 === strpos($pathinfo, '/assets/css/compiled_')) {
                // _assetic_63fad83_0
                if ($pathinfo === '/assets/css/compiled_normalize_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '63fad83',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_63fad83_0',);
                }

                // _assetic_63fad83_1
                if ($pathinfo === '/assets/css/compiled_main_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '63fad83',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_63fad83_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

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
