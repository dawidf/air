<?php

/* AirBlogBundle:Posts:postsList.html.twig */
class __TwigTemplate_14359b6a574017e73723bb4a1f49c298402d821f0d3911a83f6836c19aac7509 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("AirBlogBundle::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'contentTitle' => array($this, 'block_contentTitle'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AirBlogBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_contentTitle($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["listTitle"]) ? $context["listTitle"] : $this->getContext($context, "listTitle")), "html", null, true);
        echo "
";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 8
            echo "        <article class=\"post\">
            <header>
                <h1>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</h1>

                <div class=\"meta-data\">
                    <div class=\"author\">Autor <a href=\"#\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "author", array()), "username", array()), "html", null, true);
            echo "</a></div>
                    <div class=\"create-date\"></div>
                </div>
            </header>

            <div class=\"thumbnail\">
                <div class=\"meta-data\">
                    <div class=\"categories\">
                        Kategoria:
                        <a href=\"#\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "category", array()), "title", array()), "html", null, true);
            echo "</a>
                    </div>

                    <div class=\"tags\">
                        Tagi:
                        ";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 28
                echo "                            <a href=\"\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "title", array()), "html", null, true);
                echo "</a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "

                    </div>
                </div>

                <img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/airblog/images/default-thumbnail.jpg"), "html", null, true);
            echo "\" alt=\"\">
            </div>

            <p>";
            // line 38
            echo $this->env->getExtension('air_blog_extension')->shorten($this->getAttribute($context["post"], "content", array()), 200, "p");
            echo "</p>

            <footer>
                <a class=\"comments\" href=\"#\">Komentarzy (";
            // line 41
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["post"], "comments", array())), "html", null, true);
            echo ")</a>
                <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_post", array("slug" => $this->getAttribute($context["post"], "slug", array()))), "html", null, true);
            echo "\" class=\"btn-green\">Czytaj całość [...]</a>
            </footer>
        </article> <!-- .post -->
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    ";
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "AirBlogBundle:Pagination:pagination.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "AirBlogBundle:Posts:postsList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 46,  123 => 42,  119 => 41,  113 => 38,  107 => 35,  100 => 30,  91 => 28,  87 => 27,  79 => 22,  67 => 13,  61 => 10,  57 => 8,  53 => 7,  50 => 6,  47 => 5,  40 => 3,  37 => 2,  11 => 1,);
    }
}
