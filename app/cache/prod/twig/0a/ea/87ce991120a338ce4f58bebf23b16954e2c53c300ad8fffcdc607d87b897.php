<?php

/* AirBlogBundle:Posts:post.html.twig */
class __TwigTemplate_0aea87ce991120a338ce4f58bebf23b16954e2c53c300ad8fffcdc607d87b897 extends Twig_Template
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
            'pageTitle' => array($this, 'block_pageTitle'),
            'contentTitle' => array($this, 'block_contentTitle'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AirBlogBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 98
        $context["hideSidebar"] = null;
        // line 100
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_contentTitle($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo " ";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->env->loadTemplate("@AirBlog/Template/flashMsg.html.twig")->display($context);
        // line 9
        echo "    <article class=\"post\">
        <header>
            <h1>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo "</h1>

            <div class=\"meta-data\">
                <div class=\"author\">Autor <a href=\"#\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "author", array()), "username", array()), "html", null, true);
        echo "</a></div>
                <div class=\"create-date\">";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "publishedDate", array()), "d.m.Y, H:m"), "html", null, true);
        echo "</div>
            </div>
        </header>

        <div class=\"thumbnail\">
            <div class=\"meta-data\">
                <div class=\"categories\">
                    Kategoria:
                    <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_category", array("slug" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "category", array()), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "category", array()), "title", array()), "html", null, true);
        echo "</a>
                </div>

                <div class=\"tags\">
                    Tagi:
                    ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 29
            echo "                    <a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "title", array()), "html", null, true);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                </div>
            </div>

            <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/airblog/images/default-thumbnail.jpg"), "html", null, true);
        echo "\" alt=\"\">
        </div>

        <p>";
        // line 37
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content", array());
        echo "</p>


    </article> <!-- .post -->

    <section class=\"post-comments\" id=\"post-comments\">
        <header>
            <h3>Komentarze (";
        // line 44
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "comments", array())), "html", null, true);
        echo ")</h3>
        </header>
        ";
        // line 47
        echo "        ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 48
            echo "            <div class=\"comment\">
                <img class=\"thumbnail\" src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "avatar", array())), "html", null, true);
            echo "\" alt=\"\">

                <div class=\"body\">
                    <div class=\"author\">";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo "</div>
                    <div class=\"create-date\">";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env), "d/m/Y"), "html", null, true);
            echo "</div>

                    <div class=\"clearfix\"></div>

                    ";
            // line 65
            echo "
                    ";
            // line 66
            $this->env->getExtension('form')->renderer->setTheme((isset($context["commentForm"]) ? $context["commentForm"] : null), array(0 => "AirBlogBundle:Form:form_template.html.twig"));
            // line 67
            echo "                    ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["commentForm"]) ? $context["commentForm"] : null), 'form', array("action" => "#post-comments"));
            echo "
                </div>
            </div>
        ";
        }
        // line 71
        echo "
        ";
        // line 72
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "comments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 73
            echo "            <div class=\"comment\">
                <img class=\"thumbnail\" src=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["comment"], "author", array()), "avatar", array())), "html", null, true);
            echo "\" alt=\"\">

                <div class=\"body\">
                    <div class=\"author\">
                        ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "author", array()), "username", array()), "html", null, true);
            echo "
                        ";
            // line 79
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 80
                echo "                        <div class=\"divider\"></div>
                            ";
                // line 81
                $context["commentToken"] = $this->getAttribute((isset($context["csrfProvider"]) ? $context["csrfProvider"] : null), "generateCsrfToken", array(0 => sprintf((isset($context["tokenName"]) ? $context["tokenName"] : null), $this->getAttribute($context["comment"], "id", array()))), "method");
                // line 82
                echo "                            ";
                $context["deleteUrl"] = $this->env->getExtension('routing')->getPath("blog_deleteComment", array("commentId" => $this->getAttribute($context["comment"], "id", array()), "token" => (isset($context["commentToken"]) ? $context["commentToken"] : null)));
                // line 83
                echo "                        <a class=\"delete delete-comment\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["deleteUrl"]) ? $context["deleteUrl"] : null), "html", null, true);
                echo "\">Usuń</a>
                        ";
            }
            // line 85
            echo "
                    </div>
                    <div class=\"create-date\">";
            // line 87
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "createDate", array()), "d/m/Y"), "html", null, true);
            echo "</div>

                    <div class=\"clearfix\"></div>

                    <p>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "comment", array()), "html", null, true);
            echo "</p>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "    </section>
";
    }

    // line 101
    public function block_javascripts($context, array $blocks = array())
    {
        // line 102
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

        <script>
            \$(document).ready(function(){
               \$('body').on('click', '.delete-comment', function(e){
                   //blokuje dzałanie przycisku
                   e.preventDefault();
                   //przypisanie do zmiennej btn aktualnie klikniętego elementu
                   var \$btn = \$(this);
                   //pobiera atrybut href z przycisku
                   var deleteUrl = \$btn.attr('href');
                   //pobiera rządanie json, pobiera deleteurl i oczekuje odpowiedzi w formacie json
                   \$.getJSON(deleteUrl,function(json){
                       alert(json.message);

                       if('ok' === json.status)
                       {
                           //wyszukuje najbliższy .comment i usuwa go
                           //najblizszy jest rodzicem przycisku
                           \$btn.closest('.comment').remove();
                       }

                   });
               });
            });
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "AirBlogBundle:Posts:post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 102,  240 => 101,  235 => 95,  225 => 91,  218 => 87,  214 => 85,  208 => 83,  205 => 82,  203 => 81,  200 => 80,  198 => 79,  194 => 78,  187 => 74,  184 => 73,  180 => 72,  177 => 71,  169 => 67,  167 => 66,  164 => 65,  157 => 53,  153 => 52,  147 => 49,  144 => 48,  141 => 47,  136 => 44,  126 => 37,  120 => 34,  115 => 31,  106 => 29,  102 => 28,  92 => 23,  81 => 15,  77 => 14,  71 => 11,  67 => 9,  64 => 8,  61 => 7,  53 => 5,  45 => 3,  41 => 1,  38 => 100,  36 => 98,  11 => 1,);
    }
}
