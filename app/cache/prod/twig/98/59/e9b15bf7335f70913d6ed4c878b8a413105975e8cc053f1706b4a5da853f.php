<?php

/* CommonUserBundle:Email:newPassword.html.twig */
class __TwigTemplate_9859e9b15bf7335f70913d6ed4c878b8a413105975e8cc053f1706b4a5da853f extends Twig_Template
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
        Twoje nowe hasło to: <span style=\"font-weight: bold\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["plainPasswd"]) ? $context["plainPasswd"] : null), "html", null, true);
        echo "</span>
    </td>
    <td style=\"width: 25px;\"></td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "CommonUserBundle:Email:newPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
