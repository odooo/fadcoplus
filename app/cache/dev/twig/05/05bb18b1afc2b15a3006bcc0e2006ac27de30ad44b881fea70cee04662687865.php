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
        $__internal_2708b41861758374901c72670fab890538d586ad36e713fe7a9c42ca59762cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2708b41861758374901c72670fab890538d586ad36e713fe7a9c42ca59762cb8->enter($__internal_2708b41861758374901c72670fab890538d586ad36e713fe7a9c42ca59762cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Default:menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2708b41861758374901c72670fab890538d586ad36e713fe7a9c42ca59762cb8->leave($__internal_2708b41861758374901c72670fab890538d586ad36e713fe7a9c42ca59762cb8_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_077a6184a6196482a920c04670aa5a2c92ec2fba85a70f34d30799050f06fec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_077a6184a6196482a920c04670aa5a2c92ec2fba85a70f34d30799050f06fec2->enter($__internal_077a6184a6196482a920c04670aa5a2c92ec2fba85a70f34d30799050f06fec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_077a6184a6196482a920c04670aa5a2c92ec2fba85a70f34d30799050f06fec2->leave($__internal_077a6184a6196482a920c04670aa5a2c92ec2fba85a70f34d30799050f06fec2_prof);

    }

    // line 8
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c3fb990725138bf8708fcef587e6795bf4ba385e32654244ecd18ce3b87ab10c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3fb990725138bf8708fcef587e6795bf4ba385e32654244ecd18ce3b87ab10c->enter($__internal_c3fb990725138bf8708fcef587e6795bf4ba385e32654244ecd18ce3b87ab10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 9
        echo "    <ul class=\"sidebar-menu\">
        ";
        // line 10
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "type", array()) == "admin")) {
            // line 11
            echo "            <li class=\"header\">GESTION DES COMPTES</li>
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
            // line 19
            echo "                        ";
            // line 20
            echo "                    ";
            // line 21
            echo "                </ul>
            </li>
        ";
        }
        // line 24
        echo "
        ";
        // line 25
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "type", array()) == "distributeur")) {
            // line 26
            echo "            <li class=\"header\">GESTION DES ABONNEMENTS</li>
            <li class=\"treeview\">
                <a href=\"#\"><i class=\"fa fa-user\"></i> <span>ABONNEMENT</span> <i
                            class=\"fa fa-angle-left pull-right\"></i></a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo");
            echo "\"><i class=\"\"></i>Réabonnement direct</a></li>
                    <li><a href=\"\"><i class=\"\"></i> <span>Installation et réparation</span></a></li>
                </ul>
            </li>
        ";
        }
        // line 36
        echo "
    </ul>
";
        
        $__internal_c3fb990725138bf8708fcef587e6795bf4ba385e32654244ecd18ce3b87ab10c->leave($__internal_c3fb990725138bf8708fcef587e6795bf4ba385e32654244ecd18ce3b87ab10c_prof);

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
        return array (  111 => 36,  103 => 31,  96 => 26,  94 => 25,  91 => 24,  86 => 21,  84 => 20,  82 => 19,  78 => 17,  74 => 16,  67 => 11,  65 => 10,  62 => 9,  56 => 8,  47 => 5,  43 => 4,  35 => 3,  11 => 1,);
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
            <li class=\"header\">GESTION DES COMPTES</li>
            <li class=\"treeview\">
                <a href=\"#\"><i class=\"fa fa-user\"></i> <span>DISTRIBUTEURS</span> <i
                            class=\"fa fa-angle-left pull-right\"></i></a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"{{ path('grh_prestataire') }}\">Liste</a></li>
                    <li><a href=\"{{ path('grh_prestataire_new',{ 'id': null }) }}\">Ajouter</a></li>
                    {#{% if is_granted(\"ROLE_SUPER_ADMIN\") %}#}
                        {#<li><a href=\"{{ path('rigth') }}\">Droits</a></li>#}
                    {#{% endif %}#}
                </ul>
            </li>
        {% endif %}

        {% if app.user.type == \"distributeur\" %}
            <li class=\"header\">GESTION DES ABONNEMENTS</li>
            <li class=\"treeview\">
                <a href=\"#\"><i class=\"fa fa-user\"></i> <span>ABONNEMENT</span> <i
                            class=\"fa fa-angle-left pull-right\"></i></a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"{{ path('fadco_espace_distributeur_reabo') }}\"><i class=\"\"></i>Réabonnement direct</a></li>
                    <li><a href=\"\"><i class=\"\"></i> <span>Installation et réparation</span></a></li>
                </ul>
            </li>
        {% endif %}

    </ul>
{% endblock %}
", "FadcoBundle:Default:menu.html.twig", "/var/www/html/fadcoplus/src/FadcoBundle/Resources/views/Default/menu.html.twig");
    }
}
