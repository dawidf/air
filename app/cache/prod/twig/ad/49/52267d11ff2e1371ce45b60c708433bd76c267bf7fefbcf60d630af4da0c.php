<?php

/* AirBlogBundle:Pages:kontakt.html.twig */
class __TwigTemplate_ad4952267d11ff2e1371ce45b60c708433bd76c267bf7fefbcf60d630af4da0c extends Twig_Template
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

    // line 4
    public function block_contentTitle($context, array $blocks = array())
    {
        echo "Kontakt";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "\t<article class=\"post\">
\t\t<h2>Kontakt niga</h2>
\t\t<p>Tu jest kontak</p>
\t</article>
";
    }

    public function getTemplateName()
    {
        return "AirBlogBundle:Pages:kontakt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  43 => 6,  37 => 4,  11 => 1,);
    }
}
