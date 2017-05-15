<?php

/* FadcoBundle:Distributeur:new-client.html.twig */
class __TwigTemplate_01093e98c5750c5cbdef9c364f863a0fd87b9d651a86100a7fe6144706357904 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FadcoBundle:Default:menu.html.twig", "FadcoBundle:Distributeur:new-client.html.twig", 1);
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
        $__internal_3787dbc83bbf2849c8b36e6432e02819e9dd791d84cb9376c9da6ec9e326358f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3787dbc83bbf2849c8b36e6432e02819e9dd791d84cb9376c9da6ec9e326358f->enter($__internal_3787dbc83bbf2849c8b36e6432e02819e9dd791d84cb9376c9da6ec9e326358f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Distributeur:new-client.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3787dbc83bbf2849c8b36e6432e02819e9dd791d84cb9376c9da6ec9e326358f->leave($__internal_3787dbc83bbf2849c8b36e6432e02819e9dd791d84cb9376c9da6ec9e326358f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a95a6864a7b03627fc7882d18e413c8dcb0036d119ed39fae4181fd3fd7eeb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a95a6864a7b03627fc7882d18e413c8dcb0036d119ed39fae4181fd3fd7eeb3->enter($__internal_0a95a6864a7b03627fc7882d18e413c8dcb0036d119ed39fae4181fd3fd7eeb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Nouvel abonné";
        
        $__internal_0a95a6864a7b03627fc7882d18e413c8dcb0036d119ed39fae4181fd3fd7eeb3->leave($__internal_0a95a6864a7b03627fc7882d18e413c8dcb0036d119ed39fae4181fd3fd7eeb3_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_3bb60a238cc282a21771a22e40c09cad63ac57bfb754a0d1cd2a4f9bc6336a43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb60a238cc282a21771a22e40c09cad63ac57bfb754a0d1cd2a4f9bc6336a43->enter($__internal_3bb60a238cc282a21771a22e40c09cad63ac57bfb754a0d1cd2a4f9bc6336a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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

    <div class=\"box box-primary\">
\t\t<div class=\"box-header with-border\">
\t\t\t<h4 class=\"box-title\">Enregistrer un nouvel abonné</h4>
\t\t</div>
\t\t
\t\t<div class=\"box-body\">
\t\t    <div class=\"container modal-content\">
\t\t    \t<div class=\"col-sm-offset-2 col-sm-7\" >
\t\t\t\t\t
                    <form method=\"post\" action=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_repair_new_client");
        echo "\" name=\"fadcobundle_distributeur_new_client\" id=\"fadcobundle_distributeur_new_client\">

                        <span>&nbsp;</span>

                        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"fa fa-oclock\"></i>Date : ";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y H:i:s"), "html", null, true);
        echo "</label>
                        </div>

                        <span>&nbsp;</span>
    \t\t\t\t\t
    \t\t\t        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"\"></i>Nom<span style=\"color: red; margin-right: 2px;\">* : </span></label>
                            <input name=\"fadcobundle_distributeur_new_client[nom]\" required class=\"form-control\"/>
                        </div>

                        <span>&nbsp;</span>
                        
                        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"\"></i>Prénom(s)<span style=\"color: red; margin-right: 2px;\">* : </span></label>
                            <input name=\"fadcobundle_distributeur_new_client[prenom]\" required class=\"form-control\"/>
                        </div>

                        <span>&nbsp;</span>
                        
                        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"\"></i>N° abonné<span style=\"color: red; margin-right: 2px;\"> : </span></label>
                            <input name=\"fadcobundle_distributeur_new_client[numeroAbonne]\" class=\"form-control\"/>
                        </div>

                        <span>&nbsp;</span>
                        
                        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"\"></i>N° carte<span style=\"color: red; margin-right: 2px;\"> : </span></label>
                            <input maxlength=\"14\" minlength=\"14\" name=\"fadcobundle_distributeur_new_client[numeroCarte]\" class=\"form-control\"/>
                        </div>

                        <span>&nbsp;</span>
                        
                        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"\"></i>N° mobile<span style=\"color: red; margin-right: 2px;\">* : </span></label>
                            <input maxlength=\"8\" minlength=\"8\" name=\"fadcobundle_distributeur_new_client[contact]\" required class=\"form-control\"/>
                        </div>

                        <span>&nbsp;</span>                                                

                        <div class=\"modal-footer\">
                            <div class=\"input-group pull-right\">
                                <a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_repair");
        echo "\">
                                    <button type=\"button\" class=\"btn btn-default  pull-left\">Annuler</button>
                                </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href=\"#\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                                </a>
                            </div>
                        </div>
                        

                    </form>
                    
                </div>
            </div> <!-- End div container -->
        </div>
        </div>
    </section>

";
        
        $__internal_3bb60a238cc282a21771a22e40c09cad63ac57bfb754a0d1cd2a4f9bc6336a43->leave($__internal_3bb60a238cc282a21771a22e40c09cad63ac57bfb754a0d1cd2a4f9bc6336a43_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Distributeur:new-client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 84,  104 => 42,  96 => 37,  76 => 19,  72 => 16,  68 => 15,  63 => 13,  53 => 5,  47 => 4,  35 => 2,  11 => 1,);
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
{% block title %} Nouvel abonné{% endblock %}

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

    <div class=\"box box-primary\">
\t\t<div class=\"box-header with-border\">
\t\t\t<h4 class=\"box-title\">Enregistrer un nouvel abonné</h4>
\t\t</div>
\t\t
\t\t<div class=\"box-body\">
\t\t    <div class=\"container modal-content\">
\t\t    \t<div class=\"col-sm-offset-2 col-sm-7\" >
\t\t\t\t\t
                    <form method=\"post\" action=\"{{ path('fadco_espace_distributeur_repair_new_client') }}\" name=\"fadcobundle_distributeur_new_client\" id=\"fadcobundle_distributeur_new_client\">

                        <span>&nbsp;</span>

                        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"fa fa-oclock\"></i>Date : {{ 'now'|date('d/m/Y H:i:s') }}</label>
                        </div>

                        <span>&nbsp;</span>
    \t\t\t\t\t
    \t\t\t        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"\"></i>Nom<span style=\"color: red; margin-right: 2px;\">* : </span></label>
                            <input name=\"fadcobundle_distributeur_new_client[nom]\" required class=\"form-control\"/>
                        </div>

                        <span>&nbsp;</span>
                        
                        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"\"></i>Prénom(s)<span style=\"color: red; margin-right: 2px;\">* : </span></label>
                            <input name=\"fadcobundle_distributeur_new_client[prenom]\" required class=\"form-control\"/>
                        </div>

                        <span>&nbsp;</span>
                        
                        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"\"></i>N° abonné<span style=\"color: red; margin-right: 2px;\"> : </span></label>
                            <input name=\"fadcobundle_distributeur_new_client[numeroAbonne]\" class=\"form-control\"/>
                        </div>

                        <span>&nbsp;</span>
                        
                        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"\"></i>N° carte<span style=\"color: red; margin-right: 2px;\"> : </span></label>
                            <input maxlength=\"14\" minlength=\"14\" name=\"fadcobundle_distributeur_new_client[numeroCarte]\" class=\"form-control\"/>
                        </div>

                        <span>&nbsp;</span>
                        
                        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"\"></i>N° mobile<span style=\"color: red; margin-right: 2px;\">* : </span></label>
                            <input maxlength=\"8\" minlength=\"8\" name=\"fadcobundle_distributeur_new_client[contact]\" required class=\"form-control\"/>
                        </div>

                        <span>&nbsp;</span>                                                

                        <div class=\"modal-footer\">
                            <div class=\"input-group pull-right\">
                                <a href=\"{{ path('fadco_espace_distributeur_repair') }}\">
                                    <button type=\"button\" class=\"btn btn-default  pull-left\">Annuler</button>
                                </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href=\"#\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                                </a>
                            </div>
                        </div>
                        

                    </form>
                    
                </div>
            </div> <!-- End div container -->
        </div>
        </div>
    </section>

{% endblock %}", "FadcoBundle:Distributeur:new-client.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\src\\FadcoBundle/Resources/views/Distributeur/new-client.html.twig");
    }
}
