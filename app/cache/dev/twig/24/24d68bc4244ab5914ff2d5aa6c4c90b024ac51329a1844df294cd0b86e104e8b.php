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
        $__internal_8066dbfa6a5d251bc650265a35ae245c9ffeae732be0eb63ad47c3f54974f3fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8066dbfa6a5d251bc650265a35ae245c9ffeae732be0eb63ad47c3f54974f3fe->enter($__internal_8066dbfa6a5d251bc650265a35ae245c9ffeae732be0eb63ad47c3f54974f3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Distributeur:new-client.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8066dbfa6a5d251bc650265a35ae245c9ffeae732be0eb63ad47c3f54974f3fe->leave($__internal_8066dbfa6a5d251bc650265a35ae245c9ffeae732be0eb63ad47c3f54974f3fe_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d499729952f2cd6494f4f186d4d2660d2fdbfda1d066dac48000f90b001cad91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d499729952f2cd6494f4f186d4d2660d2fdbfda1d066dac48000f90b001cad91->enter($__internal_d499729952f2cd6494f4f186d4d2660d2fdbfda1d066dac48000f90b001cad91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Nouvel abonné";
        
        $__internal_d499729952f2cd6494f4f186d4d2660d2fdbfda1d066dac48000f90b001cad91->leave($__internal_d499729952f2cd6494f4f186d4d2660d2fdbfda1d066dac48000f90b001cad91_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_4b7a3c6820152543f52d69eeb218be30ce1e7688da99b1d3868add4b4aebbf6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7a3c6820152543f52d69eeb218be30ce1e7688da99b1d3868add4b4aebbf6d->enter($__internal_4b7a3c6820152543f52d69eeb218be30ce1e7688da99b1d3868add4b4aebbf6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                                <span class=\"info-box-text\" style=\"color:white;\">777777662(";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo ")</span>
                                <span class=\"info-box-text\" style=\"color:white;\">7878787812(";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo ")</span>
                            
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
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_repair_new_client");
        echo "\" name=\"fadcobundle_distributeur_new_client\" id=\"fadcobundle_distributeur_new_client\">

                        <span>&nbsp;</span>

                        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"fa fa-oclock\"></i>Date : ";
        // line 41
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
                            <label class=\"input-group-addon\"><i class=\"\"></i>N° carte<span style=\"color: red; margin-right: 2px;\">* : </span></label>
                            <input name=\"fadcobundle_distributeur_new_client[numeroCarte]\" class=\"form-control\"/>
                        </div>

                        <span>&nbsp;</span>
                        
                        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"\"></i>N° mobile<span style=\"color: red; margin-right: 2px;\">* : </span></label>
                            <input name=\"fadcobundle_distributeur_new_client[contact]\" required class=\"form-control\"/>
                        </div>

                        <span>&nbsp;</span>                                                

                        <div class=\"modal-footer\">
                            <div class=\"input-group pull-right\">
                                <a href=\"";
        // line 76
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
        
        $__internal_4b7a3c6820152543f52d69eeb218be30ce1e7688da99b1d3868add4b4aebbf6d->leave($__internal_4b7a3c6820152543f52d69eeb218be30ce1e7688da99b1d3868add4b4aebbf6d_prof);

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
        return array (  144 => 76,  106 => 41,  98 => 36,  76 => 17,  72 => 16,  68 => 15,  63 => 13,  53 => 5,  47 => 4,  35 => 2,  11 => 1,);
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
                                <span class=\"info-box-text\" style=\"color:white;\">777777662({{ app.user.username }})</span>
                                <span class=\"info-box-text\" style=\"color:white;\">7878787812({{ app.user.username }})</span>
                            
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
                            <label class=\"input-group-addon\"><i class=\"\"></i>N° carte<span style=\"color: red; margin-right: 2px;\">* : </span></label>
                            <input name=\"fadcobundle_distributeur_new_client[numeroCarte]\" class=\"form-control\"/>
                        </div>

                        <span>&nbsp;</span>
                        
                        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"\"></i>N° mobile<span style=\"color: red; margin-right: 2px;\">* : </span></label>
                            <input name=\"fadcobundle_distributeur_new_client[contact]\" required class=\"form-control\"/>
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
