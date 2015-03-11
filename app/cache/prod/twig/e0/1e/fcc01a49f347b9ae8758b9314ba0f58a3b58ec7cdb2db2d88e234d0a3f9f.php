<?php

/* CommonUserBundle:User:accountSettings.html.twig */
class __TwigTemplate_e01efcc01a49f347b9ae8758b9314ba0f58a3b58ec7cdb2db2d88e234d0a3f9f extends Twig_Template
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
        );
    }

    protected function doGetParent(array $context)
    {
        return "AirBlogBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["hideSidebar"] = true;
        // line 4
        $context["hideSearch"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_pageTitle($context, array $blocks = array())
    {
        echo "Ustawienia konta";
    }

    // line 8
    public function block_contentTitle($context, array $blocks = array())
    {
        echo "Ustawienia konta";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "
    ";
        // line 12
        $this->env->loadTemplate("AirBlogBundle:Template:flashMsg.html.twig")->display($context);
        // line 13
        echo "<div class=\"two-cols account-settings\">
    <div class=\"col\">
        <h2 class=\"strong\">Zmień dane konta</h2>

        ";
        // line 18
        echo "            ";
        // line 19
        echo "                ";
        // line 20
        echo "                ";
        // line 21
        echo "                    ";
        // line 22
        echo "                    ";
        // line 23
        echo "                ";
        // line 24
        echo "            ";
        // line 25
        echo "
            ";
        // line 27
        echo "                ";
        // line 28
        echo "                ";
        // line 29
        echo "            ";
        // line 30
        echo "
            ";
        // line 32
        echo "        ";
        // line 33
        echo "        ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["accountSettingsForm"]) ? $context["accountSettingsForm"] : null), array(0 => "AirBlogBundle:Form:form_template.html.twig"));
        // line 34
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["accountSettingsForm"]) ? $context["accountSettingsForm"] : null), 'form_start');
        echo "
        <div class=\"avatar-row\">
            <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "avatar", array())), "html", null, true);
        echo "\" alt=\"\">
            ";
        // line 38
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["accountSettingsForm"]) ? $context["accountSettingsForm"] : null), "avatarFile", array()), 'row');
        echo "
        </div>
        ";
        // line 41
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["accountSettingsForm"]) ? $context["accountSettingsForm"] : null), 'rest');
        echo "
        ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["accountSettingsForm"]) ? $context["accountSettingsForm"] : null), 'form_end');
        echo "
    </div>

    <div class=\"col col-bdl\">
        <h2 class=\"strong\">Zmiana hasła</h2>

        ";
        // line 49
        echo "            ";
        // line 50
        echo "                ";
        // line 51
        echo "                ";
        // line 52
        echo "            ";
        // line 53
        echo "
            ";
        // line 55
        echo "                ";
        // line 56
        echo "                ";
        // line 57
        echo "            ";
        // line 58
        echo "
            ";
        // line 60
        echo "                ";
        // line 61
        echo "                ";
        // line 62
        echo "            ";
        // line 63
        echo "
            ";
        // line 65
        echo "        ";
        // line 66
        echo "        ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["changePasswordForm"]) ? $context["changePasswordForm"] : null), array(0 => "AirBlogBundle:Form:form_template.html.twig"));
        // line 67
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["changePasswordForm"]) ? $context["changePasswordForm"] : null), 'form');
        echo "
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "CommonUserBundle:User:accountSettings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 67,  161 => 66,  159 => 65,  156 => 63,  154 => 62,  152 => 61,  150 => 60,  147 => 58,  145 => 57,  143 => 56,  141 => 55,  138 => 53,  136 => 52,  134 => 51,  132 => 50,  130 => 49,  121 => 42,  116 => 41,  110 => 38,  106 => 36,  100 => 34,  97 => 33,  95 => 32,  92 => 30,  90 => 29,  88 => 28,  86 => 27,  83 => 25,  81 => 24,  79 => 23,  77 => 22,  75 => 21,  73 => 20,  71 => 19,  69 => 18,  63 => 13,  61 => 12,  58 => 11,  55 => 10,  49 => 8,  43 => 6,  39 => 1,  37 => 4,  35 => 3,  11 => 1,);
    }
}
