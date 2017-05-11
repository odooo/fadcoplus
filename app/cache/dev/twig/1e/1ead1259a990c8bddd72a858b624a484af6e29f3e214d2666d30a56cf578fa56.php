<?php

/* FadcoBundle:Distributeur:index.html.twig */
class __TwigTemplate_b99abfe55f714754f8ae8e01aeabce5bc49637ac378df1bdc050fe92b03d3a64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FadcoBundle:Distributeur:layout.html.twig", "FadcoBundle:Distributeur:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FadcoBundle:Distributeur:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e720f1b7f80ba494eb6afef3e0d1478f6795246f43a84ab89cba96e125ae907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e720f1b7f80ba494eb6afef3e0d1478f6795246f43a84ab89cba96e125ae907->enter($__internal_1e720f1b7f80ba494eb6afef3e0d1478f6795246f43a84ab89cba96e125ae907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Distributeur:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e720f1b7f80ba494eb6afef3e0d1478f6795246f43a84ab89cba96e125ae907->leave($__internal_1e720f1b7f80ba494eb6afef3e0d1478f6795246f43a84ab89cba96e125ae907_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d2e8eb948f2f5910fa69dee4af852fbe20d65dda4caf7b3a1401d5d759fe8cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d2e8eb948f2f5910fa69dee4af852fbe20d65dda4caf7b3a1401d5d759fe8cf->enter($__internal_5d2e8eb948f2f5910fa69dee4af852fbe20d65dda4caf7b3a1401d5d759fe8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Distributeur";
        
        $__internal_5d2e8eb948f2f5910fa69dee4af852fbe20d65dda4caf7b3a1401d5d759fe8cf->leave($__internal_5d2e8eb948f2f5910fa69dee4af852fbe20d65dda4caf7b3a1401d5d759fe8cf_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_a3ce1f6737c5b395c15a523aa7632d26ebe07680e7632fff719d75c9b1bf0e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ce1f6737c5b395c15a523aa7632d26ebe07680e7632fff719d75c9b1bf0e52->enter($__internal_a3ce1f6737c5b395c15a523aa7632d26ebe07680e7632fff719d75c9b1bf0e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <section class=\"content\">
        <div class=\"box box-primary\">
            <div class=\"box-header with-border\">
                <h1 class=\"box-title\">Tableau de bord</h1>

                <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\">
                        <i class=\"fa fa-minus\"></i>
                    </button>
                </div>
            </div>
            <div class=\"box-body\">
                <!-- Info boxes -->
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-6 col-xs-12\">
                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-aqua\"><i class=\"fa fa-user-plus\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Nombre de réabonnement <br/> direct aujourd'hui</span>
                                <span class=\"info-box-number\"><br/>12<small></small></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class=\"col-md-4 col-sm-6 col-xs-12\">
                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-red\"><i class=\"fa fa-users\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Nombre d'installation <br/> et réparation aujourd'hui<br/></span>
                                <span class=\"info-box-number\"><br/>41,410</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                </div>
                <!-- /.row -->
            </div>
        </div>
    </section>

";
        
        $__internal_a3ce1f6737c5b395c15a523aa7632d26ebe07680e7632fff719d75c9b1bf0e52->leave($__internal_a3ce1f6737c5b395c15a523aa7632d26ebe07680e7632fff719d75c9b1bf0e52_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Distributeur:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FadcoBundle:Distributeur:layout.html.twig\" %}

{% block title %}Distributeur{% endblock %}

{% block content %}

    <section class=\"content\">
        <div class=\"box box-primary\">
            <div class=\"box-header with-border\">
                <h1 class=\"box-title\">Tableau de bord</h1>

                <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\">
                        <i class=\"fa fa-minus\"></i>
                    </button>
                </div>
            </div>
            <div class=\"box-body\">
                <!-- Info boxes -->
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-6 col-xs-12\">
                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-aqua\"><i class=\"fa fa-user-plus\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Nombre de réabonnement <br/> direct aujourd'hui</span>
                                <span class=\"info-box-number\"><br/>12<small></small></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class=\"col-md-4 col-sm-6 col-xs-12\">
                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-red\"><i class=\"fa fa-users\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Nombre d'installation <br/> et réparation aujourd'hui<br/></span>
                                <span class=\"info-box-number\"><br/>41,410</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                </div>
                <!-- /.row -->
            </div>
        </div>
    </section>

{% endblock %}", "FadcoBundle:Distributeur:index.html.twig", "/var/www/html/fadcoplus/src/FadcoBundle/Resources/views/Distributeur/index.html.twig");
    }
}
