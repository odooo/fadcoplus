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
        $__internal_d3d1b4da47e59eba5f65798a096937ecf0d5d92a81342fd267e03159a087a2d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d1b4da47e59eba5f65798a096937ecf0d5d92a81342fd267e03159a087a2d6->enter($__internal_d3d1b4da47e59eba5f65798a096937ecf0d5d92a81342fd267e03159a087a2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Distributeur:confirm-reabo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3d1b4da47e59eba5f65798a096937ecf0d5d92a81342fd267e03159a087a2d6->leave($__internal_d3d1b4da47e59eba5f65798a096937ecf0d5d92a81342fd267e03159a087a2d6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f194729b9065ed336eeb8cd103c9a33e11ee7657d4fe9d3cefd72c4c2740e714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f194729b9065ed336eeb8cd103c9a33e11ee7657d4fe9d3cefd72c4c2740e714->enter($__internal_f194729b9065ed336eeb8cd103c9a33e11ee7657d4fe9d3cefd72c4c2740e714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Confirmer le réabo. direct";
        
        $__internal_f194729b9065ed336eeb8cd103c9a33e11ee7657d4fe9d3cefd72c4c2740e714->leave($__internal_f194729b9065ed336eeb8cd103c9a33e11ee7657d4fe9d3cefd72c4c2740e714_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_cac8aee7190bbad3599d3f8139115ce5fccc0536a4190715d99ea44e26feedbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac8aee7190bbad3599d3f8139115ce5fccc0536a4190715d99ea44e26feedbf->enter($__internal_cac8aee7190bbad3599d3f8139115ce5fccc0536a4190715d99ea44e26feedbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                            
                                <span style=\"color:green;\" class=\"info-box-number\">90 000 F</span>
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
        
        $__internal_cac8aee7190bbad3599d3f8139115ce5fccc0536a4190715d99ea44e26feedbf->leave($__internal_cac8aee7190bbad3599d3f8139115ce5fccc0536a4190715d99ea44e26feedbf_prof);

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
        return array (  135 => 54,  129 => 51,  118 => 42,  106 => 41,  102 => 40,  98 => 39,  73 => 17,  69 => 16,  63 => 13,  53 => 5,  47 => 4,  35 => 2,  11 => 1,);
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
                            
                                <span style=\"color:green;\" class=\"info-box-number\">90 000 F</span>
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
