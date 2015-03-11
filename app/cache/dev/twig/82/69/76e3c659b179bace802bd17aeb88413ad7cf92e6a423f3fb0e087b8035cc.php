<?php

/* AirBlogBundle:Template:mainMenu.html.twig */
class __TwigTemplate_826976e3c659b179bace802bd17aeb88413ad7cf92e6a423f3fb0e087b8035cc extends Twig_Template
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
        echo "<ul>
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mainMenu"]) ? $context["mainMenu"] : $this->getContext($context, "mainMenu")));
        foreach ($context['_seq'] as $context["name"] => $context["route"]) {
            // line 3
            echo "        ";
            // line 4
            echo "    ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == $context["route"])) {
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
            echo $this->env->getExtension('routing')->getPath($context["route"]);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "AirBlogBundle:Template:mainMenu.html.twig";
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
