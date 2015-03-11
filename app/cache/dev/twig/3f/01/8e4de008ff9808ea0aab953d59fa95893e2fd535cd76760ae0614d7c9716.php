<?php

/* AirBlogBundle::base.html.twig */
class __TwigTemplate_3f018e4de008ff9808ea0aab953d59fa95893e2fd535cd76760ae0614d7c9716 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'siteDescription' => array($this, 'block_siteDescription'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'topImage' => array($this, 'block_topImage'),
            'contentTitle' => array($this, 'block_contentTitle'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<title>
\t\t\t";
        // line 7
        ob_start();
        echo "AirBlog | ";
        $this->displayBlock('pageTitle', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 8
        echo "\t\t</title>
\t\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/airblog/favicon.png"), "html", null, true);
        echo "\">
\t\t<meta name=\"description\" content=\"";
        // line 10
        $this->displayBlock('siteDescription', $context, $blocks);
        echo "\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


\t\t";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "\t</head>
\t<body>        
\t\t<header id=\"header\">
\t\t\t<div class=\"top\">
\t\t\t\t<div class=\"pos-center\">

\t\t\t\t\t
\t\t\t\t\t<a class=\"mobile-menu-trigger\" href=\"#\">
\t\t\t\t\t\t<span class=\"bar\"></span>
\t\t\t\t\t\t<span class=\"bar\"></span>
\t\t\t\t\t\t<span class=\"bar\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t
\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
        // line 48
        echo "\t\t\t\t\t\t\t\t";
        // line 49
        echo "\t\t\t\t\t\t\t\t";
        // line 50
        echo "\t\t\t\t\t\t\t\t";
        echo $this->env->getExtension('air_blog_extension')->printMainMenu();
        echo "
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>

\t\t\t\t\t\t";
        // line 55
        echo "\t\t\t\t\t\t\t";
        // line 56
        echo "\t\t\t\t\t\t\t";
        // line 57
        echo "\t\t\t\t\t\t\t";
        // line 58
        echo "\t\t\t\t\t\t\t";
        // line 59
        echo "\t\t\t\t\t\t\t";
        // line 60
        echo "\t\t\t\t\t\t";
        // line 61
        echo "\t\t\t\t\t\t";
        echo $this->env->getExtension('air_blog_extension')->printCategoriesList();
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 64
        echo "\t\t\t\t\t\t";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 65
            echo "\t\t\t\t\t\t\t<div class=\"user-panel\">
\t\t\t\t\t\t\t\t<span class=\"user-name\">Zalogowany jako <a href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("user_accountSettings");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a></span>
\t\t\t\t\t\t\t\t<a class=\"btn-green\" href=\"";
            // line 67
            echo $this->env->getExtension('routing')->getPath("_logout");
            echo "\">Wyloguj</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        } else {
            // line 70
            echo "
\t\t\t\t\t\t\t<div class=\"user-panel\">
\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t";
            // line 73
            $context["loginUrl"] = $this->env->getExtension('routing')->getPath("blog_login");
            // line 74
            echo "\t\t\t\t\t\t\t\t\t<a class=\"btn-green\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["loginUrl"]) ? $context["loginUrl"] : $this->getContext($context, "loginUrl")), "html", null, true);
            echo "\">Zaloguj</a>
\t\t\t\t\t\t\t\t\t<a class=\"btn-green\" href=\"";
            // line 75
            echo twig_escape_filter($this->env, (isset($context["loginUrl"]) ? $context["loginUrl"] : $this->getContext($context, "loginUrl")), "html", null, true);
            echo "\">Zarejestruj</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        }
        // line 80
        echo "


\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 88
        $this->displayBlock('topImage', $context, $blocks);
        // line 103
        echo "\t\t</header>

\t\t<div id=\"main\">

\t\t\t<div class=\"header\">
\t\t\t\t<div class=\"pos-center\">
\t\t\t\t\t<h2 class=\"left-side\">";
        // line 109
        $this->displayBlock('contentTitle', $context, $blocks);
        echo "</h2>

\t\t\t\t\t";
        // line 111
        if ( !array_key_exists("hideSerch", $context)) {
            // line 112
            echo "\t\t\t\t\t\t<form class=\"right-side\" action=\"";
            echo $this->env->getExtension('routing')->getPath("blog_search");
            echo "\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"search\" placeholder=\"Wyszukaj\">

\t\t\t\t\t\t</form>
\t\t\t\t\t";
        }
        // line 117
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"content\">
\t\t\t\t<div class=\"pos-center\">
\t\t\t\t\t<div class=\"left-side\">

\t\t\t\t\t\t";
        // line 124
        $this->displayBlock('content', $context, $blocks);
        // line 207
        echo "\t\t\t\t\t</div> <!-- .left-side -->
\t\t\t\t\t";
        // line 208
        if ( !array_key_exists("hideSidebar", $context)) {
            // line 209
            echo "\t\t\t\t\t\t<div class=\"right-side sidebar\">
\t\t\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t\t\t<h3>Kategorie</h3>
\t\t\t\t\t\t\t\t";
            // line 213
            echo "\t\t\t\t\t\t\t\t\t";
            // line 214
            echo "\t\t\t\t\t\t\t\t\t";
            // line 215
            echo "\t\t\t\t\t\t\t\t\t";
            // line 216
            echo "\t\t\t\t\t\t\t\t\t";
            // line 217
            echo "\t\t\t\t\t\t\t\t\t";
            // line 218
            echo "\t\t\t\t\t\t\t\t";
            // line 219
            echo "\t\t\t\t\t\t\t\t";
            echo $this->env->getExtension('air_blog_extension')->printCategoriesList();
            echo "
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"tag-cloud\">
\t\t\t\t\t\t\t\t<h3>Chmura tagów</h3>
\t\t\t\t\t\t\t\t<div class=\"tags\">
\t\t\t\t\t\t\t\t\t<a style=\"font-size: 1.5rem\" href=\"#\">Advanced</a>
\t\t\t\t\t\t\t\t\t<a style=\"font-size: 2.3rem\" href=\"#\">Blackbird</a>
\t\t\t\t\t\t\t\t\t<a style=\"font-size: 1.3rem\" href=\"#\">Development</a>
\t\t\t\t\t\t\t\t\t<a style=\"font-size: 2.3rem\" href=\"#\">Dwa</a>
\t\t\t\t\t\t\t\t\t<a style=\"font-size: 2.3rem\" href=\"#\">Froom</a>
\t\t\t\t\t\t\t\t\t<a style=\"font-size: 2rem\" href=\"#\">Lockheed</a>
\t\t\t\t\t\t\t\t\t<a style=\"font-size: 1.5rem\" href=\"#\">Los</a>
\t\t\t\t\t\t\t\t\t<a style=\"font-size: 1.3rem\" href=\"#\">Newadzie</a>
\t\t\t\t\t\t\t\t\t<a style=\"font-size: 1.1rem\" href=\"#\">Palmdale</a>
\t\t\t\t\t\t\t\t\t<a style=\"font-size: 1.8rem\" href=\"#\">Plant SR</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"list-widget\">
\t\t\t\t\t\t\t\t<h3>Najczęściej komentowane</h3>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Tajne decyzje marki Boeing (13)</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Osiągnięto prędkość 6 mach (76)</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Nowa linia produkcyjna Airbus (53)</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div> <!-- .right-side -->
\t\t\t\t\t";
        }
        // line 249
        echo "\t\t\t\t</div> <!-- .content -->

\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div> <!-- .pos-center -->
\t\t</div> <!-- #main -->

\t\t<footer id=\"footer\">
\t\t\t<div class=\"top\">
\t\t\t\t<div class=\"pos-center\">
\t\t\t\t\t";
        // line 259
        echo "\t\t\t\t\t\t";
        // line 260
        echo "\t\t\t\t\t\t";
        // line 261
        echo "\t\t\t\t\t\t";
        // line 262
        echo "\t\t\t\t\t\t";
        // line 263
        echo "\t\t\t\t\t";
        // line 264
        echo "
\t\t\t\t\t";
        // line 265
        echo $this->env->getExtension('air_blog_extension')->printMainMenu();
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"bottom\">
\t\t\t\t<div class=\"pos-center\">
\t\t\t\t\t<div class=\"copyrights\">
\t\t\t\t\t\t<p>&copy; 2014 All rights reserved.</p>
\t\t\t\t\t\t<span>Autor kursu Maciej Żukiewicz</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>

\t\t";
        // line 279
        $this->displayBlock('javascripts', $context, $blocks);
        // line 285
        echo "\t</body>
</html>
";
    }

    // line 7
    public function block_pageTitle($context, array $blocks = array())
    {
    }

    // line 10
    public function block_siteDescription($context, array $blocks = array())
    {
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "\t\t\t<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=latin-ext,latin' rel='stylesheet' type='text/css'>

\t\t\t";
        // line 17
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "63fad83_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_63fad83_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/css/compiled_normalize_1.css");
            // line 23
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
\t\t\t";
            // asset "63fad83_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_63fad83_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/css/compiled_main_2.css");
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
\t\t\t";
        } else {
            // asset "63fad83"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_63fad83") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/css/compiled.css");
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
\t\t\t";
        }
        unset($context["asset_url"]);
        // line 25
        echo "
\t\t\t";
        // line 30
        echo "\t\t";
    }

    // line 88
    public function block_topImage($context, array $blocks = array())
    {
        // line 89
        echo "\t\t\t\t<div class=\"slider\">
\t\t\t\t\t<div class=\"viewport\">
\t\t\t\t\t\t<div class=\"slides-container\">

\t\t\t\t\t\t\t<div style=\"background-image: url('";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/airblog/images/error404.png"), "html", null, true);
        echo "')\" class=\"slide\"></div>
\t\t\t\t\t\t\t<div style=\"background-image: url('";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/airblog/images/slide-2.jpg"), "html", null, true);
        echo "')\" class=\"slide\"></div>
\t\t\t\t\t\t\t<div style=\"background-image: url('";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/airblog/images/slide-3.jpg"), "html", null, true);
        echo "')\" class=\"slide\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<span class=\"nav prev\"></span>
\t\t\t\t\t<span class=\"nav next\"></span>
\t\t\t\t</div>
\t\t\t";
    }

    // line 109
    public function block_contentTitle($context, array $blocks = array())
    {
    }

    // line 124
    public function block_content($context, array $blocks = array())
    {
        // line 125
        echo "\t\t\t\t\t\t\t<article class=\"post\">
\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t<h1>Suspendisse molestie vivamus fermentum</h1>

\t\t\t\t\t\t\t\t\t<div class=\"meta-data\">
\t\t\t\t\t\t\t\t\t\t<div class=\"author\">Autor <a href=\"#\">macq</a></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"create-date\">Dodano 11.12.2013</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</header>

\t\t\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t<div class=\"meta-data\"> 
\t\t\t\t\t\t\t\t\t\t<div class=\"categories\">
\t\t\t\t\t\t\t\t\t\t\tKategoria:
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Samoloty</a>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"tags\">
\t\t\t\t\t\t\t\t\t\t\tTagi:
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">A380</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">airbus</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">odrzutowe</a> 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/airblog/images/default-thumbnail.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, omnis asperiores maiores consequatur eligendi vitae veniam ab similique nulla ut necessitatibus error rem dolore architecto culpa magni aliquid ea! Consequuntur, harum, eum, laboriosam, sunt perspiciatis accusantium totam ea nostrum magni quia molestias odit ad repudiandae necessitatibus nemo autem vero. Quas, laudantium, ipsam, dicta, nihil amet ab veniam veritatis fugit ex repudiandae minima rerum illo! Harum nihil aliquam officia autem quam!</p>

\t\t\t\t\t\t\t\t<footer>
\t\t\t\t\t\t\t\t\t<a class=\"comments\" href=\"#\">Komentarzy (31)</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-green\">Czytaj całość [...]</a>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t</article> <!-- .post -->

\t\t\t\t\t\t\t<article class=\"post\">
\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t<h1>Donec sit amet eleifend purus laoreet</h1>

\t\t\t\t\t\t\t\t\t<div class=\"meta-data\">
\t\t\t\t\t\t\t\t\t\t<div class=\"author\">Autor <a href=\"#\">macq</a></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"create-date\">Dodano 11.12.2013</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</header>

\t\t\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t<div class=\"meta-data\">
\t\t\t\t\t\t\t\t\t\t<div class=\"categories\">
\t\t\t\t\t\t\t\t\t\t\tKategoria: 
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Samoloty</a>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"tags\">
\t\t\t\t\t\t\t\t\t\t\tTagi: 
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">#A380</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">airbus</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">odrzutowe</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<img src=\"img/default-thumbnail.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, omnis asperiores maiores consequatur eligendi vitae veniam ab similique nulla ut necessitatibus error rem dolore architecto culpa magni aliquid ea! Consequuntur, harum, eum, laboriosam, sunt perspiciatis accusantium totam ea nostrum magni quia molestias odit ad repudiandae necessitatibus nemo autem vero. Quas, laudantium, ipsam, dicta, nihil amet ab veniam veritatis fugit ex repudiandae minima rerum illo! Harum nihil aliquam officia autem quam!</p>

\t\t\t\t\t\t\t\t<footer>
\t\t\t\t\t\t\t\t\t<a class=\"comments\" href=\"#\">Komentarzy (31)</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-green\">Czytaj całość [...]</a>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t</article> <!-- .post -->
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">1</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">2</a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"current\" href=\"#\">3</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">4</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div> <!-- .pagination -->

\t\t\t\t\t\t";
    }

    // line 279
    public function block_javascripts($context, array $blocks = array())
    {
        // line 280
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/airblog/js/vendor/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/airblog/js/vendor/jquery.responsiSlider.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/airblog/js/plugins.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/airblog/js/main.js"), "html", null, true);
        echo "\"></script>
\t\t";
    }

    public function getTemplateName()
    {
        return "AirBlogBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 283,  478 => 282,  474 => 281,  469 => 280,  466 => 279,  405 => 150,  378 => 125,  375 => 124,  370 => 109,  358 => 95,  354 => 94,  350 => 93,  344 => 89,  341 => 88,  337 => 30,  334 => 25,  314 => 23,  310 => 17,  306 => 15,  303 => 14,  298 => 10,  293 => 7,  287 => 285,  285 => 279,  268 => 265,  265 => 264,  263 => 263,  261 => 262,  259 => 261,  257 => 260,  255 => 259,  244 => 249,  210 => 219,  208 => 218,  206 => 217,  204 => 216,  202 => 215,  200 => 214,  198 => 213,  193 => 209,  191 => 208,  188 => 207,  186 => 124,  177 => 117,  168 => 112,  166 => 111,  161 => 109,  153 => 103,  151 => 88,  141 => 80,  133 => 75,  128 => 74,  126 => 73,  121 => 70,  115 => 67,  109 => 66,  106 => 65,  103 => 64,  97 => 61,  95 => 60,  93 => 59,  91 => 58,  89 => 57,  87 => 56,  85 => 55,  77 => 50,  75 => 49,  73 => 48,  55 => 31,  53 => 14,  46 => 10,  42 => 9,  39 => 8,  34 => 7,  26 => 1,);
    }
}
