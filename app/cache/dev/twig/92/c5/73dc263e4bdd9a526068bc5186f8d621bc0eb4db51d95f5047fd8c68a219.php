<?php

/* AirAdminBundle:AdminPanel:adminPosts.html.twig */
class __TwigTemplate_92c573dc263e4bdd9a526068bc5186f8d621bc0eb4db51d95f5047fd8c68a219 extends Twig_Template
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
        echo "

<table border=\"1\">
    <tr>
        <td>title</td>
        <td>content</td>
    </tr>

    ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 10
            echo "
        <tr>
            <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "content", array()), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "AirAdminBundle:AdminPanel:adminPosts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 16,  41 => 13,  37 => 12,  33 => 10,  29 => 9,  19 => 1,);
    }
}
