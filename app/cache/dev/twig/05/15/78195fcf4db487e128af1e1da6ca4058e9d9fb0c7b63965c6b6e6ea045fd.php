<?php

/* CommonUserBundle:Login:login.html.twig */
class __TwigTemplate_051578195fcf4db487e128af1e1da6ca4058e9d9fb0c7b63965c6b6e6ea045fd extends Twig_Template
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
            'topImage' => array($this, 'block_topImage'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AirBlogBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["hideSidebar"] = true;
        // line 3
        $context["hideSerch"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_contentTitle($context, array $blocks = array())
    {
        // line 5
        echo "    logowanie i rejestracja
";
    }

    // line 7
    public function block_topImage($context, array $blocks = array())
    {
        echo " ";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "
    ";
        // line 10
        $this->env->loadTemplate("AirBlogBundle:Template:flashMsg.html.twig")->display($context);
        // line 13
        echo "    ";
        // line 15
        echo "                    <div class=\"login-register two-cols\">
                        <div class=\"col col-bdr\">

                            <h2 class=\"strong\">Logowanie</h2>

                            ";
        // line 21
        echo "
                                ";
        // line 23
        echo "                                    ";
        // line 24
        echo "                                    ";
        // line 25
        echo "                                ";
        // line 26
        echo "
                                ";
        // line 28
        echo "                                    ";
        // line 29
        echo "                                    ";
        // line 30
        echo "                                ";
        // line 31
        echo "
                                ";
        // line 33
        echo "                                    ";
        // line 34
        echo "                                ";
        // line 35
        echo "
                                ";
        // line 37
        echo "                            ";
        // line 38
        echo "
                            ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["loginForm"]) ? $context["loginForm"] : $this->getContext($context, "loginForm")), 'form', array("action" => $this->env->getExtension('routing')->getPath("_check_path")));
        echo "


                            <div class=\"remember-pass-form\">
                                <h2 class=\"strong\">Przypomnij hasło</h2>

                                ";
        // line 46
        echo "
                                    ";
        // line 48
        echo "                                        ";
        // line 49
        echo "                                        ";
        // line 50
        echo "                                    ";
        // line 51
        echo "
                                    ";
        // line 53
        echo "                                ";
        // line 54
        echo "                                ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["rememberPasswordForm"]) ? $context["rememberPasswordForm"] : $this->getContext($context, "rememberPasswordForm")), array(0 => "AirBlogBundle:Form:form_template.html.twig"));
        // line 55
        echo "                                ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["rememberPasswordForm"]) ? $context["rememberPasswordForm"] : $this->getContext($context, "rememberPasswordForm")), 'form');
        echo "
                            </div>

                        </div>

                        <div class=\"col\">

                            <h2 class=\"strong\">Rejestracja</h2>

                            ";
        // line 65
        echo "
                                ";
        // line 67
        echo "                                    ";
        // line 68
        echo "                                    ";
        // line 69
        echo "                                ";
        // line 70
        echo "
                                ";
        // line 72
        echo "                                    ";
        // line 73
        echo "                                    ";
        // line 74
        echo "                                ";
        // line 75
        echo "
                                ";
        // line 77
        echo "                                    ";
        // line 78
        echo "                                    ";
        // line 79
        echo "                                ";
        // line 80
        echo "
                                ";
        // line 82
        echo "                                    ";
        // line 83
        echo "                                    ";
        // line 84
        echo "                                ";
        // line 85
        echo "
                                ";
        // line 87
        echo "                            ";
        // line 88
        echo "
                            ";
        // line 89
        $this->env->getExtension('form')->renderer->setTheme((isset($context["registerUserForm"]) ? $context["registerUserForm"] : $this->getContext($context, "registerUserForm")), array(0 => "AirBlogBundle:Form:form_template.html.twig"));
        // line 90
        echo "                            ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["registerUserForm"]) ? $context["registerUserForm"] : $this->getContext($context, "registerUserForm")), 'form');
        echo "
                        </div>
                    </div>
                </div> <!-- .content -->
                <div class=\"clearfix\"></div>


";
    }

    public function getTemplateName()
    {
        return "CommonUserBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 90,  190 => 89,  187 => 88,  185 => 87,  182 => 85,  180 => 84,  178 => 83,  176 => 82,  173 => 80,  171 => 79,  169 => 78,  167 => 77,  164 => 75,  162 => 74,  160 => 73,  158 => 72,  155 => 70,  153 => 69,  151 => 68,  149 => 67,  146 => 65,  133 => 55,  130 => 54,  128 => 53,  125 => 51,  123 => 50,  121 => 49,  119 => 48,  116 => 46,  107 => 39,  104 => 38,  102 => 37,  99 => 35,  97 => 34,  95 => 33,  92 => 31,  90 => 30,  88 => 29,  86 => 28,  83 => 26,  81 => 25,  79 => 24,  77 => 23,  74 => 21,  67 => 15,  65 => 13,  63 => 10,  60 => 9,  57 => 8,  51 => 7,  46 => 5,  43 => 4,  39 => 1,  37 => 3,  35 => 2,  11 => 1,);
    }
}
