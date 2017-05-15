<?php

/* FadcoBundle:Distributeur:migration-complement.html.twig */
class __TwigTemplate_3ae0a91aa5901b1e4515d7babb9e32666165d0c26b04b741ba42cf44f1cad559 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FadcoBundle:Default:menu.html.twig", "FadcoBundle:Distributeur:migration-complement.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FadcoBundle:Default:menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25671d3f74ea61c3a0e8dcbab82346eca0aae672f9a962ffc42a245045bc63d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25671d3f74ea61c3a0e8dcbab82346eca0aae672f9a962ffc42a245045bc63d2->enter($__internal_25671d3f74ea61c3a0e8dcbab82346eca0aae672f9a962ffc42a245045bc63d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Distributeur:migration-complement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25671d3f74ea61c3a0e8dcbab82346eca0aae672f9a962ffc42a245045bc63d2->leave($__internal_25671d3f74ea61c3a0e8dcbab82346eca0aae672f9a962ffc42a245045bc63d2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e5fd4d84d6975066229c5c6c9b465f85995ec0038f2de95ba1a7346552e1f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e5fd4d84d6975066229c5c6c9b465f85995ec0038f2de95ba1a7346552e1f32->enter($__internal_7e5fd4d84d6975066229c5c6c9b465f85995ec0038f2de95ba1a7346552e1f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Confirmer le réabo. direct";
        
        $__internal_7e5fd4d84d6975066229c5c6c9b465f85995ec0038f2de95ba1a7346552e1f32->leave($__internal_7e5fd4d84d6975066229c5c6c9b465f85995ec0038f2de95ba1a7346552e1f32_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_68d43900d9a3a33cdfe39319e8240898cdbf85633be1bc48b7cf3e3e70fcacad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68d43900d9a3a33cdfe39319e8240898cdbf85633be1bc48b7cf3e3e70fcacad->enter($__internal_68d43900d9a3a33cdfe39319e8240898cdbf85633be1bc48b7cf3e3e70fcacad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    <section class=\"content\">
        
            <div class=\"box-body\" style=\"background-color:black;\">
                <!-- Info boxes -->
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-6 col-xs-12\">
                        <div class=\"info-box-content\" style=\"background-color:black;\">
                            <span><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/fadcoplus.jpg"), "html", null, true);
        echo "\" style=\"width:80px; heigth:5px;\" alt=\"edgar\"/></span>
                            
                                <span style=\"color:green;\" class=\"info-box-number\">";
        // line 15
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "account", array()), 0, ".", " "), "html", null, true);
        echo " F</span>
                                <span class=\"info-box-text\" style=\"color:white;\">(";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
        echo ")</span>
                                ";
        // line 19
        echo "                            
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                </div>
                <!-- /.row -->
            </div>

    <div class=\"box box-primary\">\t\t
\t\t<div class=\"box-body\">
\t\t    <div class=\"container modal-content\">
\t\t    \t<div class=\"col-sm-offset-2 col-sm-7\" >
\t\t\t\t\t
                    
                            <span>&nbsp;</span>

                            <h3 class=\"box-title\" style=\"color:red;\">AVERTISSEMENT !</h3>

                            <div class=\"modal-body\">
                                <span style=\"\">
                                    
                                   Désolé! vous ne pouvez pas effectuer ce genre de complément.

                                </span>
                                
                              </div>

                            <span>&nbsp;</span>
                        

                            <div class=\"modal-footer\">
                                <div class=\"input-group pull-right\">
                                    <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo_complement_new");
        echo "\">
                                        <button type=\"button\" class=\"btn btn-warning  pull-left\">Reprendre</button>
                                    </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo_complement");
        echo "\">
                                        <button type=\"bouton\" class=\"btn btn-default\">Annuler</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div> <!-- End div container -->
        </div>
        </div>
    </section>

";
        
        $__internal_68d43900d9a3a33cdfe39319e8240898cdbf85633be1bc48b7cf3e3e70fcacad->leave($__internal_68d43900d9a3a33cdfe39319e8240898cdbf85633be1bc48b7cf3e3e70fcacad_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Distributeur:migration-complement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 55,  111 => 52,  76 => 19,  72 => 16,  68 => 15,  63 => 13,  53 => 5,  47 => 4,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FadcoBundle:Default:menu.html.twig\" %}
{% block title %} Confirmer le réabo. direct{% endblock %}

{% block content %}

    <section class=\"content\">
        
            <div class=\"box-body\" style=\"background-color:black;\">
                <!-- Info boxes -->
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-6 col-xs-12\">
                        <div class=\"info-box-content\" style=\"background-color:black;\">
                            <span><img src=\"{{ asset('bundles/FadcoBundle/fadcoplus.jpg') }}\" style=\"width:80px; heigth:5px;\" alt=\"edgar\"/></span>
                            
                                <span style=\"color:green;\" class=\"info-box-number\">{{ app.user.account|number_format(0,'.',' ') }} F</span>
                                <span class=\"info-box-text\" style=\"color:white;\">({{ app.user.name }})</span>
                                {#<span class=\"info-box-text\" style=\"color:white;\">777777662({{ app.user.username }})</span>
                                <span class=\"info-box-text\" style=\"color:white;\">7878787812({{ app.user.username }})</span>#}
                            
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                </div>
                <!-- /.row -->
            </div>

    <div class=\"box box-primary\">\t\t
\t\t<div class=\"box-body\">
\t\t    <div class=\"container modal-content\">
\t\t    \t<div class=\"col-sm-offset-2 col-sm-7\" >
\t\t\t\t\t
                    
                            <span>&nbsp;</span>

                            <h3 class=\"box-title\" style=\"color:red;\">AVERTISSEMENT !</h3>

                            <div class=\"modal-body\">
                                <span style=\"\">
                                    
                                   Désolé! vous ne pouvez pas effectuer ce genre de complément.

                                </span>
                                
                              </div>

                            <span>&nbsp;</span>
                        

                            <div class=\"modal-footer\">
                                <div class=\"input-group pull-right\">
                                    <a href=\"{{ path('fadco_espace_distributeur_reabo_complement_new') }}\">
                                        <button type=\"button\" class=\"btn btn-warning  pull-left\">Reprendre</button>
                                    </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href=\"{{ path('fadco_espace_distributeur_reabo_complement') }}\">
                                        <button type=\"bouton\" class=\"btn btn-default\">Annuler</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div> <!-- End div container -->
        </div>
        </div>
    </section>

{% endblock %}", "FadcoBundle:Distributeur:migration-complement.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\src\\FadcoBundle/Resources/views/Distributeur/migration-complement.html.twig");
    }
}
