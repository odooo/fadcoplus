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
        $__internal_df5a85098c5972f7514c1330a00fedc5392b6848562d4f145a79b616547633d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df5a85098c5972f7514c1330a00fedc5392b6848562d4f145a79b616547633d7->enter($__internal_df5a85098c5972f7514c1330a00fedc5392b6848562d4f145a79b616547633d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Default:menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df5a85098c5972f7514c1330a00fedc5392b6848562d4f145a79b616547633d7->leave($__internal_df5a85098c5972f7514c1330a00fedc5392b6848562d4f145a79b616547633d7_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_77a4255494f7af7c722d8218f225eccff41caf56212d6b6f95d940e930c5bb90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a4255494f7af7c722d8218f225eccff41caf56212d6b6f95d940e930c5bb90->enter($__internal_77a4255494f7af7c722d8218f225eccff41caf56212d6b6f95d940e930c5bb90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_77a4255494f7af7c722d8218f225eccff41caf56212d6b6f95d940e930c5bb90->leave($__internal_77a4255494f7af7c722d8218f225eccff41caf56212d6b6f95d940e930c5bb90_prof);

    }

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c220537f902b8111929f7ef406c2be208786279888f092e2b59ea8f11f6ab696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c220537f902b8111929f7ef406c2be208786279888f092e2b59ea8f11f6ab696->enter($__internal_c220537f902b8111929f7ef406c2be208786279888f092e2b59ea8f11f6ab696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 11
        echo "    <ul class=\"sidebar-menu\">
        ";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "admin")) {
            // line 13
            echo "
            <li class=\"\">&nbsp;</li>
            <li class=\"\">&nbsp;</li>
            <li class=\"header\">GESTION DES COMPTES</li>
            <li><a href=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire");
            echo "\">Liste des distributeurs</a></li>
            <li><a href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_new", array("id" => null));
            echo "\">Ajouter un distributeur</a></li>
            ";
            // line 20
            echo "                ";
            // line 21
            echo "            ";
            // line 22
            echo "
        ";
        }
        // line 24
        echo "
        <li class=\"\">&nbsp;</li>
        <li class=\"\">&nbsp;</li>

        ";
        // line 28
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "distributeur") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "admin"))) {
            // line 29
            echo "            
            <li class=\"header\">REABONNEMENTS</li>
            <li><a href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo");
            echo "\"><i class=\"\"></i>Réabonnement direct</a></li>
            <li class=\"header\">PRESTATIONS</li>
            <li><a href=\"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_repair");
            echo "\"><i class=\"\"></i> <span>Installation ou réparation</span></a></li>
            ";
            // line 42
            echo "
        ";
        }
        // line 44
        echo "
        ";
        // line 45
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "admin")) {
            // line 46
            echo "
            <li class=\"\">&nbsp;</li>
            
            <li class=\"header\">STATISTIQUES</li>
            <li><a href=\"";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_page_distributeur", array("type" => "abonne"));
            echo "\">Par formule d'abonnés</a></li>
            <li><a href=\"";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_page_distributeur", array("type" => "vente"));
            echo "\">Par ventes/distributeur</a></li>

        ";
        }
        // line 54
        echo "
    </ul>
";
        
        $__internal_c220537f902b8111929f7ef406c2be208786279888f092e2b59ea8f11f6ab696->leave($__internal_c220537f902b8111929f7ef406c2be208786279888f092e2b59ea8f11f6ab696_prof);

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
        return array (  135 => 54,  129 => 51,  125 => 50,  119 => 46,  117 => 45,  114 => 44,  110 => 42,  106 => 33,  101 => 31,  97 => 29,  95 => 28,  89 => 24,  85 => 22,  83 => 21,  81 => 20,  77 => 18,  73 => 17,  67 => 13,  65 => 12,  62 => 11,  56 => 10,  47 => 5,  43 => 4,  35 => 3,  11 => 1,);
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
        {% if app.user.type == \"admin\" %}

            <li class=\"\">&nbsp;</li>
            <li class=\"\">&nbsp;</li>
            <li class=\"header\">GESTION DES COMPTES</li>
            <li><a href=\"{{ path('grh_prestataire') }}\">Liste des distributeurs</a></li>
            <li><a href=\"{{ path('grh_prestataire_new',{ 'id': null }) }}\">Ajouter un distributeur</a></li>
            {#{% if is_granted(\"ROLE_SUPER_ADMIN\") %}#}
                {#<li><a href=\"{{ path('rigth') }}\">Droits</a></li>#}
            {#{% endif %}#}

        {% endif %}

        <li class=\"\">&nbsp;</li>
        <li class=\"\">&nbsp;</li>

        {% if app.user.type == \"distributeur\" or app.user.type == \"admin\" %}
            
            <li class=\"header\">REABONNEMENTS</li>
            <li><a href=\"{{ path('fadco_espace_distributeur_reabo') }}\"><i class=\"\"></i>Réabonnement direct</a></li>
            <li class=\"header\">PRESTATIONS</li>
            <li><a href=\"{{ path('fadco_espace_distributeur_repair') }}\"><i class=\"\"></i> <span>Installation ou réparation</span></a></li>
            {#<li class=\"treeview\">
                <a href=\"#\"><i class=\"fa fa-user\"></i> <span>ABONNEMENT</span> <i
                            class=\"fa fa-angle-left pull-right\"></i></a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"{{ path('fadco_espace_distributeur_reabo') }}\"><i class=\"\"></i>Réabonnement direct</a></li>
                    <li><a href=\"\"><i class=\"\"></i> <span>Prestations</span></a></li>
                </ul>
            </li>#}

        {% endif %}

        {% if app.user.type == \"admin\" %}

            <li class=\"\">&nbsp;</li>
            
            <li class=\"header\">STATISTIQUES</li>
            <li><a href=\"{{ path('main_page_distributeur',{ 'type': 'abonne' }) }}\">Par formule d'abonnés</a></li>
            <li><a href=\"{{ path('main_page_distributeur',{ 'type': 'vente' }) }}\">Par ventes/distributeur</a></li>

        {% endif %}

    </ul>
{% endblock %}
", "FadcoBundle:Default:menu.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\src\\FadcoBundle/Resources/views/Default/menu.html.twig");
    }
}
