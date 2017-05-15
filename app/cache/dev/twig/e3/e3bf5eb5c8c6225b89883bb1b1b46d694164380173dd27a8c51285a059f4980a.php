<?php

/* FadcoBundle:Distributeur:confirm-reabo-complement.html.twig */
class __TwigTemplate_b6a71a8a732be2e9662a913eebb1d7de5bd5160915ad3c828fe28628b6cb0bf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FadcoBundle:Default:menu.html.twig", "FadcoBundle:Distributeur:confirm-reabo-complement.html.twig", 1);
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
        $__internal_335cf1bf1e34127eabcbea46e116f396d07cf2cd2e94035d7092794afcc14ab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_335cf1bf1e34127eabcbea46e116f396d07cf2cd2e94035d7092794afcc14ab1->enter($__internal_335cf1bf1e34127eabcbea46e116f396d07cf2cd2e94035d7092794afcc14ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Distributeur:confirm-reabo-complement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_335cf1bf1e34127eabcbea46e116f396d07cf2cd2e94035d7092794afcc14ab1->leave($__internal_335cf1bf1e34127eabcbea46e116f396d07cf2cd2e94035d7092794afcc14ab1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8d08ace25b55f91dc012887bcbcf9cb9c5b486037a774f0324c8c76287036b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8d08ace25b55f91dc012887bcbcf9cb9c5b486037a774f0324c8c76287036b9->enter($__internal_b8d08ace25b55f91dc012887bcbcf9cb9c5b486037a774f0324c8c76287036b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Confirmer le complément";
        
        $__internal_b8d08ace25b55f91dc012887bcbcf9cb9c5b486037a774f0324c8c76287036b9->leave($__internal_b8d08ace25b55f91dc012887bcbcf9cb9c5b486037a774f0324c8c76287036b9_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_b55806366f0610484b3b16f62a6fdb8c439409332cbc8d7c07e06b6622379cdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b55806366f0610484b3b16f62a6fdb8c439409332cbc8d7c07e06b6622379cdb->enter($__internal_b55806366f0610484b3b16f62a6fdb8c439409332cbc8d7c07e06b6622379cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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

                            <h3 class=\"box-title\">Confirmation du complément</h3>

                            ";
        // line 38
        $context["diff"] = ($this->getAttribute((isset($context["resultats"]) ? $context["resultats"] : $this->getContext($context, "resultats")), "montant", array()) - $this->getAttribute((isset($context["resultats"]) ? $context["resultats"] : $this->getContext($context, "resultats")), "montantOld", array()));
        // line 39
        echo "
                            <div class=\"modal-body\">
                                <span style=\"\">
                                   <h2><strong>";
        // line 42
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["diff"]) ? $context["diff"] : $this->getContext($context, "diff")), 0, ".", " "), "html", null, true);
        echo " F</strong></h2><br/> 
                                   Complément de ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resultats"]) ? $context["resultats"] : $this->getContext($context, "resultats")), "formuleOld", array()), "html", null, true);
        if ($this->getAttribute((isset($context["resultats"]) ? $context["resultats"] : $this->getContext($context, "resultats")), "optionsOld", array())) {
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resultats"]) ? $context["resultats"] : $this->getContext($context, "resultats")), "optionsOld", array()), "html", null, true);
        } else {
            echo " / --";
        }
        echo " vers ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resultats"]) ? $context["resultats"] : $this->getContext($context, "resultats")), "formule", array()), "html", null, true);
        if ($this->getAttribute((isset($context["resultats"]) ? $context["resultats"] : $this->getContext($context, "resultats")), "options", array())) {
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resultats"]) ? $context["resultats"] : $this->getContext($context, "resultats")), "options", array()), "html", null, true);
        } else {
            echo " / --";
        }
        // line 44
        echo "                                </span>
                                
                              </div>

                            <span>&nbsp;</span>
                        

                            <div class=\"modal-footer\">
                                <div class=\"input-group pull-right\">
                                    <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo_complement_new");
        echo "\">
                                        <button type=\"button\" class=\"btn btn-default  pull-left\">Retour</button>
                                    </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo_complement_new_confirm");
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
        
        $__internal_b55806366f0610484b3b16f62a6fdb8c439409332cbc8d7c07e06b6622379cdb->leave($__internal_b55806366f0610484b3b16f62a6fdb8c439409332cbc8d7c07e06b6622379cdb_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Distributeur:confirm-reabo-complement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 56,  135 => 53,  124 => 44,  108 => 43,  104 => 42,  99 => 39,  97 => 38,  76 => 19,  72 => 16,  68 => 15,  63 => 13,  53 => 5,  47 => 4,  35 => 2,  11 => 1,);
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
{% block title %} Confirmer le complément{% endblock %}

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

                            <h3 class=\"box-title\">Confirmation du complément</h3>

                            {% set diff = resultats.montant - resultats.montantOld %}

                            <div class=\"modal-body\">
                                <span style=\"\">
                                   <h2><strong>{{ diff|number_format(0,'.',' ') }} F</strong></h2><br/> 
                                   Complément de {{ resultats.formuleOld }}{% if resultats.optionsOld %} / {{ resultats.optionsOld }}{% else %} / --{% endif %} vers {{ resultats.formule }}{% if resultats.options %} / {{ resultats.options }}{% else %} / --{% endif %}
                                </span>
                                
                              </div>

                            <span>&nbsp;</span>
                        

                            <div class=\"modal-footer\">
                                <div class=\"input-group pull-right\">
                                    <a href=\"{{ path('fadco_espace_distributeur_reabo_complement_new') }}\">
                                        <button type=\"button\" class=\"btn btn-default  pull-left\">Retour</button>
                                    </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href=\"{{ path('fadco_espace_distributeur_reabo_complement_new_confirm') }}\">
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

{% endblock %}", "FadcoBundle:Distributeur:confirm-reabo-complement.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\src\\FadcoBundle/Resources/views/Distributeur/confirm-reabo-complement.html.twig");
    }
}
