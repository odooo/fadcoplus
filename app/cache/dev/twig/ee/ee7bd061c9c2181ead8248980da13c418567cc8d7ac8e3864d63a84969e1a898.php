<?php

/* FadcoBundle:Distributeur:formule-reabo.html.twig */
class __TwigTemplate_6c2d22899699ec3347ac2022d859624c0a87231bd547ee19e03220e74a922600 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FadcoBundle:Default:menu.html.twig", "FadcoBundle:Distributeur:formule-reabo.html.twig", 1);
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
        $__internal_b2ea864ba6cb123b0bb9e070efba9dfd68593444f7dfdb96d654106e291d06db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2ea864ba6cb123b0bb9e070efba9dfd68593444f7dfdb96d654106e291d06db->enter($__internal_b2ea864ba6cb123b0bb9e070efba9dfd68593444f7dfdb96d654106e291d06db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Distributeur:formule-reabo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2ea864ba6cb123b0bb9e070efba9dfd68593444f7dfdb96d654106e291d06db->leave($__internal_b2ea864ba6cb123b0bb9e070efba9dfd68593444f7dfdb96d654106e291d06db_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_dcb79a7f7886215458f4da96226737dc9c6c53ae808ce26cee272e45d3e99424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcb79a7f7886215458f4da96226737dc9c6c53ae808ce26cee272e45d3e99424->enter($__internal_dcb79a7f7886215458f4da96226737dc9c6c53ae808ce26cee272e45d3e99424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Confirmer le réabo. direct";
        
        $__internal_dcb79a7f7886215458f4da96226737dc9c6c53ae808ce26cee272e45d3e99424->leave($__internal_dcb79a7f7886215458f4da96226737dc9c6c53ae808ce26cee272e45d3e99424_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_a22dc4ad90983a9b8d823669b1f3c660dff28c306b676a0355294e7b5ce40bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a22dc4ad90983a9b8d823669b1f3c660dff28c306b676a0355294e7b5ce40bfb->enter($__internal_a22dc4ad90983a9b8d823669b1f3c660dff28c306b676a0355294e7b5ce40bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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

                            <h3 class=\"box-title\" style=\"color:yellow;\">AVERTISSEMENT !</h3>

                            <div class=\"modal-body\">
                                <span style=\"\">
                                    
                                   Cette formule que vous voulez activer n'existe pas. Merci de choisir une bonne formule.

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
        
        $__internal_a22dc4ad90983a9b8d823669b1f3c660dff28c306b676a0355294e7b5ce40bfb->leave($__internal_a22dc4ad90983a9b8d823669b1f3c660dff28c306b676a0355294e7b5ce40bfb_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Distributeur:formule-reabo.html.twig";
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

                            <h3 class=\"box-title\" style=\"color:yellow;\">AVERTISSEMENT !</h3>

                            <div class=\"modal-body\">
                                <span style=\"\">
                                    
                                   Cette formule que vous voulez activer n'existe pas. Merci de choisir une bonne formule.

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

{% endblock %}", "FadcoBundle:Distributeur:formule-reabo.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\src\\FadcoBundle/Resources/views/Distributeur/formule-reabo.html.twig");
    }
}
