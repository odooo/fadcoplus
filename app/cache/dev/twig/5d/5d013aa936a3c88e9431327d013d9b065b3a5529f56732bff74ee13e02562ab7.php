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
        $__internal_de30af69c5840247c38a0a31eca44726122f8cb89c57ad82df5a9d62191ce439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de30af69c5840247c38a0a31eca44726122f8cb89c57ad82df5a9d62191ce439->enter($__internal_de30af69c5840247c38a0a31eca44726122f8cb89c57ad82df5a9d62191ce439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Default:menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de30af69c5840247c38a0a31eca44726122f8cb89c57ad82df5a9d62191ce439->leave($__internal_de30af69c5840247c38a0a31eca44726122f8cb89c57ad82df5a9d62191ce439_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_4c3db27ca3aa6b807efeace007b50ef71874ffee5af85546ea2924afe55f1786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c3db27ca3aa6b807efeace007b50ef71874ffee5af85546ea2924afe55f1786->enter($__internal_4c3db27ca3aa6b807efeace007b50ef71874ffee5af85546ea2924afe55f1786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_4c3db27ca3aa6b807efeace007b50ef71874ffee5af85546ea2924afe55f1786->leave($__internal_4c3db27ca3aa6b807efeace007b50ef71874ffee5af85546ea2924afe55f1786_prof);

    }

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6c20866edccd10a55992db8edb043325eb4d8494f2a426c9f5ae7879309dd7fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c20866edccd10a55992db8edb043325eb4d8494f2a426c9f5ae7879309dd7fb->enter($__internal_6c20866edccd10a55992db8edb043325eb4d8494f2a426c9f5ae7879309dd7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
<<<<<<< HEAD
            <li><a href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire");
            echo "\">Liste des distributeurs</a></li>
            <li><a href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_new", array("id" => null));
            echo "\">Ajouter un distributeur</a></li>
            ";
            // line 21
            echo "                ";
            // line 22
            echo "            ";
            // line 23
            echo "        
=======
            <li class=\"treeview\">
                <a href=\"#\"><i class=\"fa fa-user\"></i> <span>Distributeurs</span> <i
                            class=\"fa fa-angle-left pull-right\"></i></a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire");
            echo "\">Liste</a></li>
                    <li><a href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_new", array("id" => null));
            echo "\">Ajouter</a></li>
                    ";
            // line 32
            echo "                        ";
            // line 33
            echo "                    ";
            // line 34
            echo "                </ul>
            </li>
            <li class=\"header\">STATISTIQUES</li>
            <li class=\"treeview\">
                <a href=\"#\"><i class=\"fa fa-pie-chart\"></i> <span>Statistiques</span> <i
                            class=\"fa fa-angle-left pull-right\"></i></a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_page_distributeur", array("type" => "abonne"));
            echo "\">Abonnes</a></li>
                    <li><a href=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_page_distributeur", array("type" => "vente"));
            echo "\">Ventes</a></li>
                </ul>
            </li>
>>>>>>> cc644fd6863050836a017ae1002dcefac599ada7
        ";
        }
        // line 47
        echo "
        <li class=\"\">&nbsp;</li>
        <li class=\"\">&nbsp;</li>
        <li class=\"\">&nbsp;</li>

        ";
        // line 52
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "distributeur") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "admin"))) {
            // line 53
            echo "            
            <li class=\"header\">REABONNEMENTS</li>
            <li><a href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo");
            echo "\"><i class=\"\"></i>Réabonnement direct</a></li>
            <li class=\"header\">PRESTATIONS</li>
            <li><a href=\"";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_repair");
            echo "\"><i class=\"\"></i> <span>Installation ou réparation</span></a></li>
            ";
            // line 66
            echo "
        ";
        }
        // line 68
        echo "
    </ul>
";
        
        $__internal_6c20866edccd10a55992db8edb043325eb4d8494f2a426c9f5ae7879309dd7fb->leave($__internal_6c20866edccd10a55992db8edb043325eb4d8494f2a426c9f5ae7879309dd7fb_prof);

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
        return array (  153 => 68,  149 => 66,  145 => 57,  140 => 55,  136 => 53,  134 => 52,  127 => 47,  119 => 42,  115 => 41,  106 => 34,  104 => 33,  102 => 32,  98 => 30,  94 => 29,  86 => 23,  84 => 22,  82 => 21,  78 => 19,  74 => 18,  67 => 13,  65 => 12,  62 => 11,  56 => 10,  47 => 5,  43 => 4,  35 => 3,  11 => 1,);
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
<<<<<<< HEAD
            <li><a href=\"{{ path('grh_prestataire') }}\">Liste des distributeurs</a></li>
            <li><a href=\"{{ path('grh_prestataire_new',{ 'id': null }) }}\">Ajouter un distributeur</a></li>
            {#{% if is_granted(\"ROLE_SUPER_ADMIN\") %}#}
                {#<li><a href=\"{{ path('rigth') }}\">Droits</a></li>#}
            {#{% endif %}#}
        
=======
            <li class=\"treeview\">
                <a href=\"#\"><i class=\"fa fa-user\"></i> <span>Distributeurs</span> <i
                            class=\"fa fa-angle-left pull-right\"></i></a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"{{ path('grh_prestataire') }}\">Liste</a></li>
                    <li><a href=\"{{ path('grh_prestataire_new',{ 'id': null }) }}\">Ajouter</a></li>
                    {#{% if is_granted(\"ROLE_SUPER_ADMIN\") %}#}
                        {#<li><a href=\"{{ path('rigth') }}\">Droits</a></li>#}
                    {#{% endif %}#}
                </ul>
            </li>
            <li class=\"header\">STATISTIQUES</li>
            <li class=\"treeview\">
                <a href=\"#\"><i class=\"fa fa-pie-chart\"></i> <span>Statistiques</span> <i
                            class=\"fa fa-angle-left pull-right\"></i></a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"{{ path('main_page_distributeur',{ 'type': 'abonne' }) }}\">Abonnes</a></li>
                    <li><a href=\"{{ path('main_page_distributeur',{ 'type': 'vente' }) }}\">Ventes</a></li>
                </ul>
            </li>
>>>>>>> cc644fd6863050836a017ae1002dcefac599ada7
        {% endif %}

        <li class=\"\">&nbsp;</li>
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

    </ul>
{% endblock %}
", "FadcoBundle:Default:menu.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\src\\FadcoBundle/Resources/views/Default/menu.html.twig");
    }
}
