<?php

/* FadcoBundle:Distributeur:confirm-reabo.html.twig */
class __TwigTemplate_6d0551f78f396ff455bdab7d94a308813aedbcb8c6c93391500398354d354132 extends Twig_Template
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
        $__internal_e6c7006dc0b339c71e36dfac64b11346d44acaab75f988c4bc3409353103a829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6c7006dc0b339c71e36dfac64b11346d44acaab75f988c4bc3409353103a829->enter($__internal_e6c7006dc0b339c71e36dfac64b11346d44acaab75f988c4bc3409353103a829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Distributeur:confirm-reabo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6c7006dc0b339c71e36dfac64b11346d44acaab75f988c4bc3409353103a829->leave($__internal_e6c7006dc0b339c71e36dfac64b11346d44acaab75f988c4bc3409353103a829_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_89721006c25db5ab12c4010ab5bd96fc71181920e643d11339c8a9324535ed4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89721006c25db5ab12c4010ab5bd96fc71181920e643d11339c8a9324535ed4c->enter($__internal_89721006c25db5ab12c4010ab5bd96fc71181920e643d11339c8a9324535ed4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Confirmer le réabo. direct";
        
        $__internal_89721006c25db5ab12c4010ab5bd96fc71181920e643d11339c8a9324535ed4c->leave($__internal_89721006c25db5ab12c4010ab5bd96fc71181920e643d11339c8a9324535ed4c_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_b94259e63025d5c3b618e0748e66b0d11f795655b9a2ce589354e12c12b60668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94259e63025d5c3b618e0748e66b0d11f795655b9a2ce589354e12c12b60668->enter($__internal_b94259e63025d5c3b618e0748e66b0d11f795655b9a2ce589354e12c12b60668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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

                            <h3 class=\"box-title\">Confirmation du réabonnement direct</h3>

                            ";
        // line 38
        if (($this->getAttribute((isset($context["resultats"]) ? $context["resultats"] : $this->getContext($context, "resultats")), "duree", array()) == "1 mois")) {
            echo " ";
            $context["coef"] = 1;
            echo " ";
        }
        // line 39
        echo "                            ";
        if (($this->getAttribute((isset($context["resultats"]) ? $context["resultats"] : $this->getContext($context, "resultats")), "duree", array()) == "3 mois")) {
            echo " ";
            $context["coef"] = 3;
            echo " ";
        }
        // line 40
        echo "                            ";
        if (($this->getAttribute((isset($context["resultats"]) ? $context["resultats"] : $this->getContext($context, "resultats")), "duree", array()) == "6 mois")) {
            echo " ";
            $context["coef"] = 6;
            echo " ";
        }
        // line 41
        echo "                            ";
        if (($this->getAttribute((isset($context["resultats"]) ? $context["resultats"] : $this->getContext($context, "resultats")), "duree", array()) == "12 mois")) {
            echo " ";
            $context["coef"] = 12;
            echo " ";
        }
        // line 42
        echo "
                            ";
        // line 43
        $context["montant"] = ($this->getAttribute((isset($context["resultats"]) ? $context["resultats"] : $this->getContext($context, "resultats")), "montant", array()) * (isset($context["coef"]) ? $context["coef"] : $this->getContext($context, "coef")));
        // line 44
        echo "
                            <div class=\"modal-body\">
                                <span style=\"\">
                                   <h2><strong>";
        // line 47
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["resultats"]) ? $context["resultats"] : $this->getContext($context, "resultats")), "montant", array()), 0, ".", " "), "html", null, true);
        echo " * ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resultats"]) ? $context["resultats"] : $this->getContext($context, "resultats")), "duree", array()), "html", null, true);
        echo " = ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["montant"]) ? $context["montant"] : $this->getContext($context, "montant")), 0, ".", " "), "html", null, true);
        echo " F</strong></h2><br/> 
                                   Réabonnement direct pour ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resultats"]) ? $context["resultats"] : $this->getContext($context, "resultats")), "numeroCarte", array()), "html", null, true);
        echo ".<br/>
                                   ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resultats"]) ? $context["resultats"] : $this->getContext($context, "resultats")), "formule", array()), "html", null, true);
        if ($this->getAttribute((isset($context["resultats"]) ? $context["resultats"] : $this->getContext($context, "resultats")), "options", array())) {
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resultats"]) ? $context["resultats"] : $this->getContext($context, "resultats")), "options", array()), "html", null, true);
        } else {
            echo " / --";
        }
        if ($this->getAttribute((isset($context["resultats"]) ? $context["resultats"] : $this->getContext($context, "resultats")), "duree", array())) {
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resultats"]) ? $context["resultats"] : $this->getContext($context, "resultats")), "duree", array()), "html", null, true);
        } else {
            echo " / --";
        }
        // line 50
        echo "                                </span>
                                
                              </div>

                            <span>&nbsp;</span>
                        

                            <div class=\"modal-footer\">
                                <div class=\"input-group pull-right\">
                                    <a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo_new");
        echo "\">
                                        <button type=\"button\" class=\"btn btn-default  pull-left\">Retour</button>
                                    </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href=\"";
        // line 62
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
        
        $__internal_b94259e63025d5c3b618e0748e66b0d11f795655b9a2ce589354e12c12b60668->leave($__internal_b94259e63025d5c3b618e0748e66b0d11f795655b9a2ce589354e12c12b60668_prof);

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
        return array (  177 => 62,  171 => 59,  160 => 50,  146 => 49,  142 => 48,  134 => 47,  129 => 44,  127 => 43,  124 => 42,  117 => 41,  110 => 40,  103 => 39,  97 => 38,  76 => 19,  72 => 16,  68 => 15,  63 => 13,  53 => 5,  47 => 4,  35 => 2,  11 => 1,);
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

                            <h3 class=\"box-title\">Confirmation du réabonnement direct</h3>

                            {% if resultats.duree == '1 mois' %} {% set coef = 1 %} {% endif  %}
                            {% if resultats.duree == '3 mois' %} {% set coef = 3 %} {% endif  %}
                            {% if resultats.duree == '6 mois' %} {% set coef = 6 %} {% endif  %}
                            {% if resultats.duree == '12 mois' %} {% set coef = 12 %} {% endif  %}

                            {% set montant = resultats.montant * coef %}

                            <div class=\"modal-body\">
                                <span style=\"\">
                                   <h2><strong>{{ resultats.montant|number_format(0,'.',' ') }} * {{ resultats.duree }} = {{ montant|number_format(0,'.',' ') }} F</strong></h2><br/> 
                                   Réabonnement direct pour {{ resultats.numeroCarte }}.<br/>
                                   {{ resultats.formule }}{% if resultats.options %} / {{ resultats.options }}{% else %} / --{% endif %}{% if resultats.duree %} / {{ resultats.duree }}{% else %} / --{% endif %}
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

{% endblock %}", "FadcoBundle:Distributeur:confirm-reabo.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\src\\FadcoBundle/Resources/views/Distributeur/confirm-reabo.html.twig");
    }
}
