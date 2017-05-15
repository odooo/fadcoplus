<?php

/* FadcoBundle:Distributeur:compte-reabo.html.twig */
class __TwigTemplate_a728e5e7bf292c1d175f1c4546d1e96f8d16d9cf889cdb421c13573da0150ed9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FadcoBundle:Default:menu.html.twig", "FadcoBundle:Distributeur:compte-reabo.html.twig", 1);
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
        $__internal_1f7a3df60fe244228aac7fc65a6da1d0bb8c56f7668a84b2908a4104ea3ae0fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f7a3df60fe244228aac7fc65a6da1d0bb8c56f7668a84b2908a4104ea3ae0fa->enter($__internal_1f7a3df60fe244228aac7fc65a6da1d0bb8c56f7668a84b2908a4104ea3ae0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Distributeur:compte-reabo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f7a3df60fe244228aac7fc65a6da1d0bb8c56f7668a84b2908a4104ea3ae0fa->leave($__internal_1f7a3df60fe244228aac7fc65a6da1d0bb8c56f7668a84b2908a4104ea3ae0fa_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee6df3859ad849f9d9086f71512046466d2061369c2ac313a0a48103c8b7c527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee6df3859ad849f9d9086f71512046466d2061369c2ac313a0a48103c8b7c527->enter($__internal_ee6df3859ad849f9d9086f71512046466d2061369c2ac313a0a48103c8b7c527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Confirmer le réabo. direct";
        
        $__internal_ee6df3859ad849f9d9086f71512046466d2061369c2ac313a0a48103c8b7c527->leave($__internal_ee6df3859ad849f9d9086f71512046466d2061369c2ac313a0a48103c8b7c527_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_30a5dd18f278319730dc42a577be7bc0242001b06ba3ce839b657e0aea228503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a5dd18f278319730dc42a577be7bc0242001b06ba3ce839b657e0aea228503->enter($__internal_30a5dd18f278319730dc42a577be7bc0242001b06ba3ce839b657e0aea228503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                                    
                                   Votre compte est insuffisant pour effectuer ce réabonement direct de : ";
        // line 41
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["montant"]) ? $context["montant"] : $this->getContext($context, "montant")), 0, ".", " "), "html", null, true);
        echo " F

                                </span>
                                
                              </div>

                            <span>&nbsp;</span>
                        

                            <div class=\"modal-footer\">
                                <div class=\"input-group pull-right\">
                                    <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo_new");
        echo "\">
                                        <button type=\"button\" class=\"btn btn-warning  pull-left\">Reprendre</button>
                                    </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo");
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
        
        $__internal_30a5dd18f278319730dc42a577be7bc0242001b06ba3ce839b657e0aea228503->leave($__internal_30a5dd18f278319730dc42a577be7bc0242001b06ba3ce839b657e0aea228503_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Distributeur:compte-reabo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 55,  114 => 52,  100 => 41,  76 => 19,  72 => 16,  68 => 15,  63 => 13,  53 => 5,  47 => 4,  35 => 2,  11 => 1,);
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
                                    
                                   Votre compte est insuffisant pour effectuer ce réabonement direct de : {{ montant|number_format(0,'.',' ') }} F

                                </span>
                                
                              </div>

                            <span>&nbsp;</span>
                        

                            <div class=\"modal-footer\">
                                <div class=\"input-group pull-right\">
                                    <a href=\"{{ path('fadco_espace_distributeur_reabo_new') }}\">
                                        <button type=\"button\" class=\"btn btn-warning  pull-left\">Reprendre</button>
                                    </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href=\"{{ path('fadco_espace_distributeur_reabo') }}\">
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

{% endblock %}", "FadcoBundle:Distributeur:compte-reabo.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\src\\FadcoBundle/Resources/views/Distributeur/compte-reabo.html.twig");
    }
}
