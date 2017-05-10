<?php

/* FadcoBundle:Distributeur:index.html.twig */
class __TwigTemplate_d7635d1642e82b5d46366c8a15d8820e610f601ab8af7d26145e1f6f17b0dfa5 extends Twig_Template
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
        $__internal_4d5da8586688a613f0e06d6ca1b4d1abfbfaf913f7eac41e35ef72c64b351e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d5da8586688a613f0e06d6ca1b4d1abfbfaf913f7eac41e35ef72c64b351e1d->enter($__internal_4d5da8586688a613f0e06d6ca1b4d1abfbfaf913f7eac41e35ef72c64b351e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Distributeur:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d5da8586688a613f0e06d6ca1b4d1abfbfaf913f7eac41e35ef72c64b351e1d->leave($__internal_4d5da8586688a613f0e06d6ca1b4d1abfbfaf913f7eac41e35ef72c64b351e1d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f4f2292fa6b6c2a6ffaa182632e59733ab6b5cba88eab3aa60573d3e2aa5280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f4f2292fa6b6c2a6ffaa182632e59733ab6b5cba88eab3aa60573d3e2aa5280->enter($__internal_9f4f2292fa6b6c2a6ffaa182632e59733ab6b5cba88eab3aa60573d3e2aa5280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Distributeur";
        
        $__internal_9f4f2292fa6b6c2a6ffaa182632e59733ab6b5cba88eab3aa60573d3e2aa5280->leave($__internal_9f4f2292fa6b6c2a6ffaa182632e59733ab6b5cba88eab3aa60573d3e2aa5280_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_3c0b73bbf66660e721be30ef5f4a115513b9db9fbb78d12619f3fb968d4cc6a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c0b73bbf66660e721be30ef5f4a115513b9db9fbb78d12619f3fb968d4cc6a4->enter($__internal_3c0b73bbf66660e721be30ef5f4a115513b9db9fbb78d12619f3fb968d4cc6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_3c0b73bbf66660e721be30ef5f4a115513b9db9fbb78d12619f3fb968d4cc6a4->leave($__internal_3c0b73bbf66660e721be30ef5f4a115513b9db9fbb78d12619f3fb968d4cc6a4_prof);

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

{% endblock %}", "FadcoBundle:Distributeur:index.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\src\\FadcoBundle/Resources/views/Distributeur/index.html.twig");
    }
}
