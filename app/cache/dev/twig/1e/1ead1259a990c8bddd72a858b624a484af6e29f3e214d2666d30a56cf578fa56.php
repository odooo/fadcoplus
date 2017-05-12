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
        $__internal_c7ecdbd0084e8d34d009698cf240c77b4f3e302d6f438a2a3b18d3fc39d462c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7ecdbd0084e8d34d009698cf240c77b4f3e302d6f438a2a3b18d3fc39d462c6->enter($__internal_c7ecdbd0084e8d34d009698cf240c77b4f3e302d6f438a2a3b18d3fc39d462c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Distributeur:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7ecdbd0084e8d34d009698cf240c77b4f3e302d6f438a2a3b18d3fc39d462c6->leave($__internal_c7ecdbd0084e8d34d009698cf240c77b4f3e302d6f438a2a3b18d3fc39d462c6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fad1cf724db0bf9db1269bdd1fc86af00186cf0dd990b9b78e7f285d9b9a549d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fad1cf724db0bf9db1269bdd1fc86af00186cf0dd990b9b78e7f285d9b9a549d->enter($__internal_fad1cf724db0bf9db1269bdd1fc86af00186cf0dd990b9b78e7f285d9b9a549d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Distributeur";
        
        $__internal_fad1cf724db0bf9db1269bdd1fc86af00186cf0dd990b9b78e7f285d9b9a549d->leave($__internal_fad1cf724db0bf9db1269bdd1fc86af00186cf0dd990b9b78e7f285d9b9a549d_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_4d0a53596ee92560439bae79c08988166fad79e4371f2937e1ab78a37e184864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0a53596ee92560439bae79c08988166fad79e4371f2937e1ab78a37e184864->enter($__internal_4d0a53596ee92560439bae79c08988166fad79e4371f2937e1ab78a37e184864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_4d0a53596ee92560439bae79c08988166fad79e4371f2937e1ab78a37e184864->leave($__internal_4d0a53596ee92560439bae79c08988166fad79e4371f2937e1ab78a37e184864_prof);

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
