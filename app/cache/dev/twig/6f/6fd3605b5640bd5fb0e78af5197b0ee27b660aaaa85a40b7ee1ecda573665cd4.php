<?php

/* ::gspbot.html.twig */
class __TwigTemplate_78c565d415c4f61df24388044aa156163daf70bdf91d9cf7895be0167c431768 extends Twig_Template
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
        $__internal_04df843dad7287469b951f08a66b815157f1dcd9a0853803252229be780741db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04df843dad7287469b951f08a66b815157f1dcd9a0853803252229be780741db->enter($__internal_04df843dad7287469b951f08a66b815157f1dcd9a0853803252229be780741db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::gspbot.html.twig"));

        // line 1
        echo "<div id=\"gspbot\">
    <div id=\"gspbot-overlay\"></div>
    <a id=\"gspbot-icon\"><i class=\"fa fa-meh-o\"></i></a>
    <span id=\"gspbot-counter\">23</span>
    <div id=\"gspbot-alert-box\">
        <div id=\"gspbot-alert-box-content\"></div>
        <div id=\"gspbot-alert-box-buttons\">
            <a href=\"#\" class=\"btn btn-primary btn-sm\" id=\"gspbot-alert-btn-ok\">oui</a>
            <a href=\"#\" class=\"btn btn-danger btn-sm\" id=\"gspbot-alert-btn-cancel\">Non</a>
        </div>
        <div id=\"triangle\"></div>
    </div>
    <div id=\"gspbot-zone\">
        <div class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
                <div class=\"navbar-section home\">home</div>
                <div class=\"navbar-section menu\">
                    <a href=\"#\" data-toggle=\"dropdown\">
                        <span class=\"menu-text\">Menu</span>
                        <span class=\"caret\"></span>
                    </a>
                    <ul class=\"dropdown-menu option\" id=\"gspbot-zone-menu\"></ul>
                </div>
                <div class=\"navbar-section\" id=\"gspbot-zone-close\">
                <a href=\"#\" class=\"gspbot-zone-close\"><i class=\"fa fa-minus\"></i></a>
                </div>                        
            </div>
        </div>
        <div id=\"gspbot-zone-content\"></div>
    </div>
    <audio id=\"gspbot-sound-beep\">
        <source src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/gsp/gspbot/notification/beep.mp3"), "html", null, true);
        echo "\"></source>
    </audio>
</div>";
        
        $__internal_04df843dad7287469b951f08a66b815157f1dcd9a0853803252229be780741db->leave($__internal_04df843dad7287469b951f08a66b815157f1dcd9a0853803252229be780741db_prof);

    }

    public function getTemplateName()
    {
        return "::gspbot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 32,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"gspbot\">
    <div id=\"gspbot-overlay\"></div>
    <a id=\"gspbot-icon\"><i class=\"fa fa-meh-o\"></i></a>
    <span id=\"gspbot-counter\">23</span>
    <div id=\"gspbot-alert-box\">
        <div id=\"gspbot-alert-box-content\"></div>
        <div id=\"gspbot-alert-box-buttons\">
            <a href=\"#\" class=\"btn btn-primary btn-sm\" id=\"gspbot-alert-btn-ok\">oui</a>
            <a href=\"#\" class=\"btn btn-danger btn-sm\" id=\"gspbot-alert-btn-cancel\">Non</a>
        </div>
        <div id=\"triangle\"></div>
    </div>
    <div id=\"gspbot-zone\">
        <div class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
                <div class=\"navbar-section home\">home</div>
                <div class=\"navbar-section menu\">
                    <a href=\"#\" data-toggle=\"dropdown\">
                        <span class=\"menu-text\">Menu</span>
                        <span class=\"caret\"></span>
                    </a>
                    <ul class=\"dropdown-menu option\" id=\"gspbot-zone-menu\"></ul>
                </div>
                <div class=\"navbar-section\" id=\"gspbot-zone-close\">
                <a href=\"#\" class=\"gspbot-zone-close\"><i class=\"fa fa-minus\"></i></a>
                </div>                        
            </div>
        </div>
        <div id=\"gspbot-zone-content\"></div>
    </div>
    <audio id=\"gspbot-sound-beep\">
        <source src=\"{{ asset('bundles/gsp/gspbot/notification/beep.mp3') }}\"></source>
    </audio>
</div>", "::gspbot.html.twig", "C:\\xampp\\htdocs\\fadco\\app/Resources\\views/gspbot.html.twig");
    }
}
