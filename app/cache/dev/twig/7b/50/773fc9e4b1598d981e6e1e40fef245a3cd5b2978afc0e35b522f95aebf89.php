<?php

/* AirBlogBundle:Template:categoriesList.html.twig */
class __TwigTemplate_7b50773fc9e4b1598d981e6e1e40fef245a3cd5b2978afc0e35b522f95aebf89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ul class=\"categories\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoriesList"]) ? $context["categoriesList"] : $this->getContext($context, "categoriesList")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 3
            echo "        ";
            // line 4
            echo "    ";
            if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "blog_category") && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "slug"), "method") == $this->getAttribute($context["category"], "slug", array())))) {
                // line 5
                echo "        <li class=\"active\">
    ";
            } else {
                // line 7
                echo "        <li>
    ";
            }
            // line 9
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_category", array("slug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
            echo "</a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "AirBlogBundle:Template:categoriesList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 12,  39 => 9,  35 => 7,  31 => 5,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
