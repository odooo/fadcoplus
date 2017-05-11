<?php

/* FadcoBundle:Default:menu.html.twig */
class __TwigTemplate_c19e1f5baedd89b5985ca0cc6edce10bd08cff38ce496d6584ea037e1dbef2e2 extends Twig_Template
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
        $__internal_bb7768fd3a290ea9c158cb38da3a2940de7a55d049a9bc8858019ed662ae6b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7768fd3a290ea9c158cb38da3a2940de7a55d049a9bc8858019ed662ae6b49->enter($__internal_bb7768fd3a290ea9c158cb38da3a2940de7a55d049a9bc8858019ed662ae6b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Default:menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb7768fd3a290ea9c158cb38da3a2940de7a55d049a9bc8858019ed662ae6b49->leave($__internal_bb7768fd3a290ea9c158cb38da3a2940de7a55d049a9bc8858019ed662ae6b49_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_e48a5953199eacca0291651b716835cfad2e57af47e74e95bc9c9d5ef1baa0a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e48a5953199eacca0291651b716835cfad2e57af47e74e95bc9c9d5ef1baa0a2->enter($__internal_e48a5953199eacca0291651b716835cfad2e57af47e74e95bc9c9d5ef1baa0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_e48a5953199eacca0291651b716835cfad2e57af47e74e95bc9c9d5ef1baa0a2->leave($__internal_e48a5953199eacca0291651b716835cfad2e57af47e74e95bc9c9d5ef1baa0a2_prof);

    }

    // line 8
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_25d6bc9f2916fddbff2e5c9e0df6058c93410eb731ff9c67afc705677fa102b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25d6bc9f2916fddbff2e5c9e0df6058c93410eb731ff9c67afc705677fa102b4->enter($__internal_25d6bc9f2916fddbff2e5c9e0df6058c93410eb731ff9c67afc705677fa102b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 9
        echo "    <ul class=\"sidebar-menu\">
        <li class=\"header\">GESTION DES COMPTES</li>
        <li class=\"treeview\">
            <a href=\"#\"><i class=\"fa fa-user\"></i> <span>DISTRIBUTEURS</span> <i
                        class=\"fa fa-angle-left pull-right\"></i></a>
            <ul class=\"treeview-menu\">
                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire");
        echo "\">Liste</a></li>
                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_new", array("id" => null));
        echo "\">Ajouter</a></li>
                ";
        // line 17
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 18
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rigth");
            echo "\">Droits</a></li>
                ";
        }
        // line 20
        echo "            </ul>
        </li>
        ";
        // line 22
        if (twig_in_filter("indicateur-performance", $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "uri", array()))) {
            // line 23
            echo "            ";
            $this->loadTemplate("FadcoBundle:IndicateurPerformance:menu.html.twig", "FadcoBundle:Default:menu.html.twig", 23)->display($context);
            // line 24
            echo "        ";
        }
        // line 25
        echo "    </ul>
";
        
        $__internal_25d6bc9f2916fddbff2e5c9e0df6058c93410eb731ff9c67afc705677fa102b4->leave($__internal_25d6bc9f2916fddbff2e5c9e0df6058c93410eb731ff9c67afc705677fa102b4_prof);

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
        return array (  98 => 25,  95 => 24,  92 => 23,  90 => 22,  86 => 20,  80 => 18,  78 => 17,  74 => 16,  70 => 15,  62 => 9,  56 => 8,  47 => 5,  43 => 4,  35 => 3,  11 => 1,);
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
        {% if 'indicateur-performance' in app.request.uri %}
            {% include 'FadcoBundle:IndicateurPerformance:menu.html.twig' %}
        {% endif %}
    </ul>
{% endblock %}
", "FadcoBundle:Default:menu.html.twig", "/var/www/html/fadcoplus/src/FadcoBundle/Resources/views/Default/menu.html.twig");
    }
}
