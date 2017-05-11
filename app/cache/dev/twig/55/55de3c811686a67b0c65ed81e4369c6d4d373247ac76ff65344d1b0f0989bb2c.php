<?php

/* FadcoBundle:Prestataire:main-page.html.twig */
class __TwigTemplate_e179ef5a9748577abded5d31547ecd23205172c5d85ab2483324972761c41d5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FadcoBundle:Prestataire:layout.html.twig", "FadcoBundle:Prestataire:main-page.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FadcoBundle:Prestataire:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_126be45acdbc85ad00db74956650e13734edb97d854c8dcabaf2a7a9c39272d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_126be45acdbc85ad00db74956650e13734edb97d854c8dcabaf2a7a9c39272d2->enter($__internal_126be45acdbc85ad00db74956650e13734edb97d854c8dcabaf2a7a9c39272d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Prestataire:main-page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_126be45acdbc85ad00db74956650e13734edb97d854c8dcabaf2a7a9c39272d2->leave($__internal_126be45acdbc85ad00db74956650e13734edb97d854c8dcabaf2a7a9c39272d2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_42f331bf349d47827b568506b6a2e6aaaeeaf828f3d0d4130ca88328b009909c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f331bf349d47827b568506b6a2e6aaaeeaf828f3d0d4130ca88328b009909c->enter($__internal_42f331bf349d47827b568506b6a2e6aaaeeaf828f3d0d4130ca88328b009909c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Statistiques";
        
        $__internal_42f331bf349d47827b568506b6a2e6aaaeeaf828f3d0d4130ca88328b009909c->leave($__internal_42f331bf349d47827b568506b6a2e6aaaeeaf828f3d0d4130ca88328b009909c_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_05d886715687e2b7b86347b9737bcc790b37476aa8af95f3b9640c1d61ca5cea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d886715687e2b7b86347b9737bcc790b37476aa8af95f3b9640c1d61ca5cea->enter($__internal_05d886715687e2b7b86347b9737bcc790b37476aa8af95f3b9640c1d61ca5cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <section class=\"content\">
        <div class=\"box box-primary\">
            <div class=\"box-header with-border\">
                <h1 class=\"box-title\">Indicateurs de Performance</h1>

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
                            <span class=\"info-box-icon bg-aqua\"><i class=\"ion ion-ios-gear-outline\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Nombre de clients en attente <br/> de biens non <br/>encore disoponibles</span>
                                <span class=\"info-box-number\">16<small>%</small></span>
                                ";
        // line 29
        echo "                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class=\"col-md-4 col-sm-6 col-xs-12\">
                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-red\"><i class=\"fa fa-google-plus\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Likes</span>
                                <span class=\"info-box-number\">41,410</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class=\"clearfix visible-sm-block\"></div>

                    <div class=\"col-md-4 col-sm-6 col-xs-12\">
                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-green\"><i class=\"ion ion-ios-cart-outline\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Sales</span>
                                <span class=\"info-box-number\">760</span>
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
        
        $__internal_05d886715687e2b7b86347b9737bcc790b37476aa8af95f3b9640c1d61ca5cea->leave($__internal_05d886715687e2b7b86347b9737bcc790b37476aa8af95f3b9640c1d61ca5cea_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Prestataire:main-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 29,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FadcoBundle:Prestataire:layout.html.twig\" %}

{% block title %}Statistiques{% endblock %}

{% block content %}

    <section class=\"content\">
        <div class=\"box box-primary\">
            <div class=\"box-header with-border\">
                <h1 class=\"box-title\">Indicateurs de Performance</h1>

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
                            <span class=\"info-box-icon bg-aqua\"><i class=\"ion ion-ios-gear-outline\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Nombre de clients en attente <br/> de biens non <br/>encore disoponibles</span>
                                <span class=\"info-box-number\">16<small>%</small></span>
                                {#{{ render(controller('FadcoBundle:IndicateurPerformance:nbrClientIndisponible', {'startDate': '2016-02-06 00:00:00', 'endDate': '2017-04-25 11:26:55' })) }}#}
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class=\"col-md-4 col-sm-6 col-xs-12\">
                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-red\"><i class=\"fa fa-google-plus\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Likes</span>
                                <span class=\"info-box-number\">41,410</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class=\"clearfix visible-sm-block\"></div>

                    <div class=\"col-md-4 col-sm-6 col-xs-12\">
                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-green\"><i class=\"ion ion-ios-cart-outline\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Sales</span>
                                <span class=\"info-box-number\">760</span>
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

{% endblock %}
{#
{% block javascript %}
    {{ parent() }}
{% endblock %}
#}
", "FadcoBundle:Prestataire:main-page.html.twig", "/var/www/html/fadcoplus/src/FadcoBundle/Resources/views/Prestataire/main-page.html.twig");
    }
}
