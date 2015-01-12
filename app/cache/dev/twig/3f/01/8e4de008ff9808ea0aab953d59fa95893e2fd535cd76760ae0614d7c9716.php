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
            'stylesheet' => array($this, 'block_stylesheet'),
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

\t\t<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=latin-ext,latin' rel='stylesheet' type='text/css'>
\t\t";
        // line 14
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 18
        echo "\t\t
\t</head>
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
\t\t\t\t\t\t\t\t<li><a href=\"#\">HOME</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">O MNIE</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">KONTAKT</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>

\t\t\t\t\t\t<ul class=\"categories\">
\t\t\t\t\t\t\t<li><a href=\"#\">Samoloty osobowe i pasażerskie</a></li>
\t\t\t\t\t\t\t<li><a class=\"active\" href=\"#\">Samoloty odrzutowe</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Samoloty wojskowe</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Proy kosmiczne</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Tajne rozwiązania</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- 
\t\t\t\t\t\t<div class=\"user-panel\">
\t\t\t\t\t\t\t<span class=\"user-name\">Zalogowany jako <a href=\"#\">macq</a></span>
\t\t\t\t\t\t\t<a class=\"btn-green\" href=\"#\">Wyloguj</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t -->
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"user-panel\">
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<a class=\"btn-green\" href=\"#\">Zaloguj</a>
\t\t\t\t\t\t\t\t<a class=\"btn-green\" href=\"#\">Zarejestruj</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> 
\t\t\t\t\t   
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 67
        $this->displayBlock('topImage', $context, $blocks);
        // line 82
        echo "\t\t</header>

\t\t<div id=\"main\">

\t\t\t<div class=\"header\">
\t\t\t\t<div class=\"pos-center\">
\t\t\t\t\t<h2 class=\"left-side\">";
        // line 88
        $this->displayBlock('contentTitle', $context, $blocks);
        echo "</h2>

\t\t\t\t\t";
        // line 90
        if ( !array_key_exists("hideSerch", $context)) {
            // line 91
            echo "\t\t\t\t\t\t<form class=\"right-side\" action=\"#\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"search\" placeholder=\"Wyszukaj\">
\t\t\t\t\t\t</form>
\t\t\t\t\t";
        }
        // line 95
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"content\">
\t\t\t\t<div class=\"pos-center\">
\t\t\t\t\t<div class=\"left-side\">
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 102
        $this->displayBlock('content', $context, $blocks);
        // line 185
        echo "\t\t\t\t\t
\t\t\t\t\t";
        // line 186
        if ( !array_key_exists("hideSidebar", $context)) {
            // line 187
            echo "\t\t\t\t\t\t<div class=\"right-side sidebar\">
\t\t\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t\t\t<h3>Kategorie</h3>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Samoloty osobowe i pasażerskie</a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"active\" href=\"#\">Samoloty odrzutowe</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Samoloty wojskowe</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Promy kosmiczne</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Tajne rozwiązania</a></li>
\t\t\t\t\t\t\t\t</ul>
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
        // line 226
        echo "\t\t\t\t</div> <!-- .content -->

\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div> <!-- .pos-center -->
\t\t</div> <!-- #main -->

\t\t<footer id=\"footer\">
\t\t\t<div class=\"top\">
\t\t\t\t<div class=\"pos-center\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">Home</a></li>
\t\t\t\t\t\t<li><a href=\"#\">O mnie</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Kontakt</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Admin</a></li>
\t\t\t\t\t</ul>
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
        // line 254
        $this->displayBlock('javascripts', $context, $blocks);
        // line 260
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
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 15
        echo "\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/airblog/css/normalize.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/airblog/css/main.css"), "html", null, true);
        echo "\">
\t\t";
    }

    // line 67
    public function block_topImage($context, array $blocks = array())
    {
        // line 68
        echo "\t\t\t\t<div class=\"slider\">
\t\t\t\t\t<div class=\"viewport\">
\t\t\t\t\t\t<div class=\"slides-container\">

\t\t\t\t\t\t\t<div style=\"background-image: url('";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/airblog/images/error404.png"), "html", null, true);
        echo "')\" class=\"slide\"></div>
\t\t\t\t\t\t\t<div style=\"background-image: url('";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/airblog/images/slide-2.jpg"), "html", null, true);
        echo "')\" class=\"slide\"></div>
\t\t\t\t\t\t\t<div style=\"background-image: url('";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/airblog/images/slide-3.jpg"), "html", null, true);
        echo "')\" class=\"slide\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<span class=\"nav prev\"></span>
\t\t\t\t\t<span class=\"nav next\"></span>
\t\t\t\t</div>
\t\t\t";
    }

    // line 88
    public function block_contentTitle($context, array $blocks = array())
    {
    }

    // line 102
    public function block_content($context, array $blocks = array())
    {
        // line 103
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
        // line 128
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
\t\t\t\t\t\t</div> <!-- .left-side -->
\t\t\t\t\t\t";
    }

    // line 254
    public function block_javascripts($context, array $blocks = array())
    {
        // line 255
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/airblog/js/vendor/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/airblog/js/vendor/jquery.responsiSlider.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/airblog/js/plugins.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 258
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
        return array (  389 => 258,  385 => 257,  381 => 256,  376 => 255,  373 => 254,  312 => 128,  285 => 103,  282 => 102,  277 => 88,  265 => 74,  261 => 73,  257 => 72,  251 => 68,  248 => 67,  242 => 16,  237 => 15,  234 => 14,  229 => 10,  224 => 7,  218 => 260,  216 => 254,  186 => 226,  145 => 187,  143 => 186,  140 => 185,  138 => 102,  129 => 95,  123 => 91,  121 => 90,  116 => 88,  108 => 82,  106 => 67,  55 => 18,  53 => 14,  46 => 10,  42 => 9,  39 => 8,  34 => 7,  26 => 1,);
    }
}
