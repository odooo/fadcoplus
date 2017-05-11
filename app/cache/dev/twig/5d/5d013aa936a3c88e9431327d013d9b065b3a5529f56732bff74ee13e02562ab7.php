<?php

/* FadcoBundle:Default:menu.html.twig */
class __TwigTemplate_6e7839f9feae3488d95eff2450871ecd980a5535beb381ca2cc15ea4a9cb1e91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::template.html.twig", "FadcoBundle:Default:menu.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be42aa4509ed4016aa2c0ea8a00584b4d54f331d0406abf9e5eaed73cfbb456f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be42aa4509ed4016aa2c0ea8a00584b4d54f331d0406abf9e5eaed73cfbb456f->enter($__internal_be42aa4509ed4016aa2c0ea8a00584b4d54f331d0406abf9e5eaed73cfbb456f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Default:menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be42aa4509ed4016aa2c0ea8a00584b4d54f331d0406abf9e5eaed73cfbb456f->leave($__internal_be42aa4509ed4016aa2c0ea8a00584b4d54f331d0406abf9e5eaed73cfbb456f_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_36fea2753f9d3e5b25e95d04edd5005e4611f54b9f9ac582b4e49a0b0f902312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36fea2753f9d3e5b25e95d04edd5005e4611f54b9f9ac582b4e49a0b0f902312->enter($__internal_36fea2753f9d3e5b25e95d04edd5005e4611f54b9f9ac582b4e49a0b0f902312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        echo " 
    ";
        // line 4
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/select2/select2.min.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_36fea2753f9d3e5b25e95d04edd5005e4611f54b9f9ac582b4e49a0b0f902312->leave($__internal_36fea2753f9d3e5b25e95d04edd5005e4611f54b9f9ac582b4e49a0b0f902312_prof);

    }

    // line 8
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_3172533ef9de42440013e31b0fb6348d6af9b275fb72faab69a7834a32eafbad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3172533ef9de42440013e31b0fb6348d6af9b275fb72faab69a7834a32eafbad->enter($__internal_3172533ef9de42440013e31b0fb6348d6af9b275fb72faab69a7834a32eafbad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 9
        echo "    <ul class=\"sidebar-menu\">

        <li class=\"header\">GESTION DES COMPTES</li>
        <li class=\"treeview\">
            <a href=\"#\"><i class=\"fa fa-user\"></i> <span>DISTRIBUTEURS</span> <i
                        class=\"fa fa-angle-left pull-right\"></i></a>
            <ul class=\"treeview-menu\">
                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire");
        echo "\">Liste</a></li>
                <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_new", array("id" => null));
        echo "\">Ajouter</a></li>
                ";
        // line 18
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 19
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rigth");
            echo "\">Droits</a></li>
                ";
        }
        // line 21
        echo "            </ul>
        </li>

        <li class=\"\">&nbsp;</li>
        <li class=\"\">&nbsp;</li>
        <li class=\"\">&nbsp;</li>

        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo");
        echo "\"><i class=\"\"></i>Réabonnement direct</a></li>

        <li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_repair");
        echo "\"><i class=\"\"></i> <span>Prestations</span></a></li>

    </ul>
";
        
        $__internal_3172533ef9de42440013e31b0fb6348d6af9b275fb72faab69a7834a32eafbad->leave($__internal_3172533ef9de42440013e31b0fb6348d6af9b275fb72faab69a7834a32eafbad_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 30,  96 => 28,  87 => 21,  81 => 19,  79 => 18,  75 => 17,  71 => 16,  62 => 9,  56 => 8,  47 => 5,  43 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::template.html.twig\" %}

{% block stylesheet %} 
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/FadcoBundle/plugins/select2/select2.min.css') }}\"/>
{% endblock %}
{# Le block à gauche #}
{% block sidebar %}
    <ul class=\"sidebar-menu\">

        <li class=\"header\">GESTION DES COMPTES</li>
        <li class=\"treeview\">
            <a href=\"#\"><i class=\"fa fa-user\"></i> <span>DISTRIBUTEURS</span> <i
                        class=\"fa fa-angle-left pull-right\"></i></a>
            <ul class=\"treeview-menu\">
                <li><a href=\"{{ path('grh_prestataire') }}\">Liste</a></li>
                <li><a href=\"{{ path('grh_prestataire_new',{ 'id': null }) }}\">Ajouter</a></li>
                {% if is_granted(\"ROLE_SUPER_ADMIN\") %}
                    <li><a href=\"{{ path('rigth') }}\">Droits</a></li>
                {% endif %}
            </ul>
        </li>

        <li class=\"\">&nbsp;</li>
        <li class=\"\">&nbsp;</li>
        <li class=\"\">&nbsp;</li>

        <li><a href=\"{{ path('fadco_espace_distributeur_reabo') }}\"><i class=\"\"></i>Réabonnement direct</a></li>

        <li><a href=\"{{ path('fadco_espace_distributeur_repair') }}\"><i class=\"\"></i> <span>Prestations</span></a></li>

    </ul>
{% endblock %}
", "FadcoBundle:Default:menu.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\src\\FadcoBundle/Resources/views/Default/menu.html.twig");
    }
}
