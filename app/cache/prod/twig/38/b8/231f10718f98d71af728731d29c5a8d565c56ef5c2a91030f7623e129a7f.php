<?php

/* CommonUserBundle:Email:accountActivation.html.twig */
class __TwigTemplate_38b8231f10718f98d71af728731d29c5a8d565c56ef5c2a91030f7623e129a7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("CommonUserBundle:Email:base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CommonUserBundle:Email:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<tr>
    <td style=\"width: 25px;\"></td>
    <td style=\"font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 21px; color: #484848;\">
        Aby aktywować konto kliknij w link poniżej:
    </td>
    <td style=\"width: 25px;\"></td>
</tr>
<tr>
    <td style=\"width: 25px;\"></td>
    <td style=\"font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 21px; color: #484848;\">
        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["activationUrl"]) ? $context["activationUrl"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["activationUrl"]) ? $context["activationUrl"] : null), "html", null, true);
        echo "</a>
    </td>
    <td style=\"width: 25px;\"></td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "CommonUserBundle:Email:accountActivation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  39 => 4,  36 => 3,  11 => 1,);
    }
}
