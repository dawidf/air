<?php

/* AirBlogBundle:Default:index.html.twig */
class __TwigTemplate_93206579aa3a04aa55d8d627add475779df2b83260f44ea23c116261f3bd9e5a extends Twig_Template
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
        echo "<html>
<head>
</head>

<body>
Hello ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "!
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "AirBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }
}
