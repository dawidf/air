<?php

/* AirBlogBundle:Pages:about.html.twig */
class __TwigTemplate_5c1272a15feba5123dce7a4d631afe28e8570d56cc98859368a04d970db78798 extends Twig_Template
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
            'content' => array($this, 'block_content'),
            'contentTitle' => array($this, 'block_contentTitle'),
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "O mnie ale nie wiem co o sobie powiedzieć, ha
";
    }

    // line 7
    public function block_contentTitle($context, array $blocks = array())
    {
        // line 8
        echo "O mnie
";
    }

    public function getTemplateName()
    {
        return "AirBlogBundle:Pages:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  45 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
