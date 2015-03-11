<?php

/* CommonUserBundle:Email:base.html.twig */
class __TwigTemplate_22286ea5191d0b9deb399de34d8a4604dc35d04f19d60e09a00b4425b26ccc67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html lang=\"pl\"><head>
        <title></title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    </head>
    
    <body marginheight=\"0\" topmargin=\"0\" marginwidth=\"0\" leftmargin=\"0\" style=\"margin: 0; padding: 0; background-color: #eef8fa;\">

        <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"100%\">
            <tr>
                <td colspan=\"3\" style=\"height: 5px; background-color: #2bcb71\"></td>
            </tr>
            <tr>
                <td colspan=\"3\" style=\"height: 20px;\"></td>
            </tr>
            <tr>
                <td style=\"width: 25px;\"></td>
                <td style=\"font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 42px; color: #484848;\">";
        // line 18
        $this->displayBlock('header', $context, $blocks);
        echo "</td>
                <td style=\"width: 25px;\"></td>
            </tr>
            <tr>
                <td colspan=\"3\" style=\"height: 30px;\"></td>
            </tr>
            
            ";
        // line 25
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "
            <tr>
                <td colspan=\"3\" style=\"height: 55px;\"></td>
            </tr>
            <tr>
                <td colspan=\"3\" style=\"height: 5px; background-color: #2bcb71\"></td>
            </tr>
            <tr>
                <td colspan=\"3\">
                    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"100%\">
                        <tr>
                            ";
        // line 37
        $context["blogUrl"] = $this->env->getExtension('routing')->getUrl("blog_index");
        // line 38
        echo "                            <td style=\"width: 25px;\"></td>
                            <td style=\"height: 90px; text-align:left;\">
                                <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["blogUrl"]) ? $context["blogUrl"] : null), "html", null, true);
        echo "\" style=\"text-decoration: none;\">
                                    <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/airblog/img/email/icon-plane.jpg", null, true, null), "html", null, true);
        echo "\" alt=\"AirBlog\">
                                </a>
                            </td>
                            <td style=\"height: 90px; text-align: right;\">
                                <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["blogUrl"]) ? $context["blogUrl"] : null), "html", null, true);
        echo "\" style=\"font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 18px; color: #484848; text-decoration: none;\">
                                    www.airblog.eduweb.pl
                                </a>
                            </td>
                            <td style=\"width: 25px;\"></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>";
    }

    // line 18
    public function block_header($context, array $blocks = array())
    {
        echo "Witaj!";
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "CommonUserBundle:Email:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 25,  98 => 18,  82 => 45,  75 => 41,  71 => 40,  67 => 38,  65 => 37,  52 => 26,  50 => 25,  40 => 18,  21 => 1,);
    }
}
