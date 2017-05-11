<?php

/* FadcoBundle:Distributeur:confirm-reabo.html.twig */
class __TwigTemplate_e745ca6a3380fcd5c2eaf38ae5c8eba373d03ff7edaaaf23700deea844f85460 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FadcoBundle:Default:menu.html.twig", "FadcoBundle:Distributeur:confirm-reabo.html.twig", 1);
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
        $__internal_34c7c9ddb1ce2afa3a7be5a01af059f652a75912bbde07a3fa6c00dc48bf99cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c7c9ddb1ce2afa3a7be5a01af059f652a75912bbde07a3fa6c00dc48bf99cc->enter($__internal_34c7c9ddb1ce2afa3a7be5a01af059f652a75912bbde07a3fa6c00dc48bf99cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Distributeur:confirm-reabo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34c7c9ddb1ce2afa3a7be5a01af059f652a75912bbde07a3fa6c00dc48bf99cc->leave($__internal_34c7c9ddb1ce2afa3a7be5a01af059f652a75912bbde07a3fa6c00dc48bf99cc_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_570e5d1003c5876b290f5a997d7cb273f64b1c162804a07df6736248d4c58cd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_570e5d1003c5876b290f5a997d7cb273f64b1c162804a07df6736248d4c58cd3->enter($__internal_570e5d1003c5876b290f5a997d7cb273f64b1c162804a07df6736248d4c58cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Confirmer le réabo. direct";
        
        $__internal_570e5d1003c5876b290f5a997d7cb273f64b1c162804a07df6736248d4c58cd3->leave($__internal_570e5d1003c5876b290f5a997d7cb273f64b1c162804a07df6736248d4c58cd3_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_0e1d632c144dee6f98ab068572176f933abe33387fdc200bb812891a32861e1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e1d632c144dee6f98ab068572176f933abe33387fdc200bb812891a32861e1a->enter($__internal_0e1d632c144dee6f98ab068572176f933abe33387fdc200bb812891a32861e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "account", array()), 0, ".", " "), "html", null, true);
        echo " F</span>
                                <span class=\"info-box-text\" style=\"color:white;\">777777662(";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo ")</span>
                                <span class=\"info-box-text\" style=\"color:white;\">7878787812(";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo ")</span>
                            
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

                            <h3 class=\"box-title\">Confirmation du réabonnement direct</h3>

                            <div class=\"modal-body\">
                                <span style=\"\">
                                   <h2><strong>";
        // line 39
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["resultats"] ?? $this->getContext($context, "resultats")), "montant", array()), 0, ".", " "), "html", null, true);
        echo " F</strong></h2><br/> 
                                   Réabonnement direct pour ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["resultats"] ?? $this->getContext($context, "resultats")), "numeroCarte", array()), "html", null, true);
        echo ".<br/>
                                   ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["resultats"] ?? $this->getContext($context, "resultats")), "formule", array()), "html", null, true);
        if ($this->getAttribute(($context["resultats"] ?? $this->getContext($context, "resultats")), "duree", array())) {
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["resultats"] ?? $this->getContext($context, "resultats")), "duree", array()), "html", null, true);
        }
        if ($this->getAttribute(($context["resultats"] ?? $this->getContext($context, "resultats")), "options", array())) {
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["resultats"] ?? $this->getContext($context, "resultats")), "options", array()), "html", null, true);
        } else {
            echo " / --";
        }
        // line 42
        echo "                                </span>
                                
                              </div>

                            <span>&nbsp;</span>
                        

                            <div class=\"modal-footer\">
                                <div class=\"input-group pull-right\">
                                    <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo_new");
        echo "\">
                                        <button type=\"button\" class=\"btn btn-default  pull-left\">Retour</button>
                                    </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo_new_confirm");
        echo "\">
                                        <button type=\"bouton\" class=\"btn btn-success\">Confirmer</button>
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
        
        $__internal_0e1d632c144dee6f98ab068572176f933abe33387fdc200bb812891a32861e1a->leave($__internal_0e1d632c144dee6f98ab068572176f933abe33387fdc200bb812891a32861e1a_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Distributeur:confirm-reabo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 54,  132 => 51,  121 => 42,  109 => 41,  105 => 40,  101 => 39,  76 => 17,  72 => 16,  68 => 15,  63 => 13,  53 => 5,  47 => 4,  35 => 2,  11 => 1,);
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
                                <span class=\"info-box-text\" style=\"color:white;\">777777662({{ app.user.username }})</span>
                                <span class=\"info-box-text\" style=\"color:white;\">7878787812({{ app.user.username }})</span>
                            
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

                            <h3 class=\"box-title\">Confirmation du réabonnement direct</h3>

                            <div class=\"modal-body\">
                                <span style=\"\">
                                   <h2><strong>{{ resultats.montant|number_format(0,'.',' ') }} F</strong></h2><br/> 
                                   Réabonnement direct pour {{ resultats.numeroCarte }}.<br/>
                                   {{ resultats.formule }}{% if resultats.duree %} / {{ resultats.duree }}{% endif %}{% if resultats.options %} / {{ resultats.options }}{% else %} / --{% endif %}
                                </span>
                                
                              </div>

                            <span>&nbsp;</span>
                        

                            <div class=\"modal-footer\">
                                <div class=\"input-group pull-right\">
                                    <a href=\"{{ path('fadco_espace_distributeur_reabo_new') }}\">
                                        <button type=\"button\" class=\"btn btn-default  pull-left\">Retour</button>
                                    </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href=\"{{ path('fadco_espace_distributeur_reabo_new_confirm') }}\">
                                        <button type=\"bouton\" class=\"btn btn-success\">Confirmer</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div> <!-- End div container -->
        </div>
        </div>
    </section>

{% endblock %}", "FadcoBundle:Distributeur:confirm-reabo.html.twig", "/var/www/html/fadcoplus/src/FadcoBundle/Resources/views/Distributeur/confirm-reabo.html.twig");
    }
}
