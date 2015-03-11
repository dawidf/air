<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'admin_panel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Air\\AdminBundle\\Controller\\AdminPanelController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin-panel/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_posts' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Air\\AdminBundle\\Controller\\AdminPanelController::adminPostsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin-panel/posts',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Common\\UserBundle\\Controller\\LoginController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_resetPassword' => array (  0 =>   array (    0 => 'actionToken',  ),  1 =>   array (    '_controller' => 'Common\\UserBundle\\Controller\\LoginController::resetPasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'actionToken',    ),    1 =>     array (      0 => 'text',      1 => '/reset-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_activateAccount' => array (  0 =>   array (    0 => 'actionToken',  ),  1 =>   array (    '_controller' => 'Common\\UserBundle\\Controller\\LoginController::activateAccountAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'actionToken',    ),    1 =>     array (      0 => 'text',      1 => '/account-activation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_accountSettings' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Common\\UserBundle\\Controller\\UserController::accountSettingsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/account-settings',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_check_path' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login-check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'o_mnie' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Air\\BlogBundle\\Controller\\PagesController::aboutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/o-mnie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'kontakt' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Air\\BlogBundle\\Controller\\PagesController::kontaktAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/kontakt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_index' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    'page' => 1,    '_controller' => 'Air\\BlogBundle\\Controller\\PostsController::indexAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_search' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    'page' => 1,    '_controller' => 'Air\\BlogBundle\\Controller\\PostsController::searchAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_post' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'Air\\BlogBundle\\Controller\\PostsController::postAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_deleteComment' => array (  0 =>   array (    0 => 'commentId',    1 => 'token',  ),  1 =>   array (    '_controller' => 'Air\\BlogBundle\\Controller\\PostsController::deleteCommentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'commentId',    ),    2 =>     array (      0 => 'text',      1 => '/post/comment/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_category' => array (  0 =>   array (    0 => 'slug',    1 => 'page',  ),  1 =>   array (    'page' => 1,    '_controller' => 'Air\\BlogBundle\\Controller\\PostsController::categoryAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    2 =>     array (      0 => 'text',      1 => '/category',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_tag' => array (  0 =>   array (    0 => 'slug',    1 => 'page',  ),  1 =>   array (    'page' => 1,    '_controller' => 'Air\\BlogBundle\\Controller\\PostsController::tagAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    2 =>     array (      0 => 'text',      1 => '/tag',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
