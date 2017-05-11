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
        $__internal_e3e08195b76ec424691f561b56073f380bc189f3bf618542ae39df587daba335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3e08195b76ec424691f561b56073f380bc189f3bf618542ae39df587daba335->enter($__internal_e3e08195b76ec424691f561b56073f380bc189f3bf618542ae39df587daba335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Default:menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3e08195b76ec424691f561b56073f380bc189f3bf618542ae39df587daba335->leave($__internal_e3e08195b76ec424691f561b56073f380bc189f3bf618542ae39df587daba335_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_6ad7e625f45058c8fb067481f9ca2dc8bf37034ae437a25512bcf62c1e7e7587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad7e625f45058c8fb067481f9ca2dc8bf37034ae437a25512bcf62c1e7e7587->enter($__internal_6ad7e625f45058c8fb067481f9ca2dc8bf37034ae437a25512bcf62c1e7e7587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_6ad7e625f45058c8fb067481f9ca2dc8bf37034ae437a25512bcf62c1e7e7587->leave($__internal_6ad7e625f45058c8fb067481f9ca2dc8bf37034ae437a25512bcf62c1e7e7587_prof);

    }

    // line 8
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_bbf6b374bd4e4c792361a1ef98d1c2a0a799d00e3f97fecdf8237460ff982105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbf6b374bd4e4c792361a1ef98d1c2a0a799d00e3f97fecdf8237460ff982105->enter($__internal_bbf6b374bd4e4c792361a1ef98d1c2a0a799d00e3f97fecdf8237460ff982105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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

        <li><a href=\"\"><i class=\"\"></i> <span>Installation et réparation</span></a></li>

    </ul>
";
        
        $__internal_bbf6b374bd4e4c792361a1ef98d1c2a0a799d00e3f97fecdf8237460ff982105->leave($__internal_bbf6b374bd4e4c792361a1ef98d1c2a0a799d00e3f97fecdf8237460ff982105_prof);

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
        return array (  96 => 28,  87 => 21,  81 => 19,  79 => 18,  75 => 17,  71 => 16,  62 => 9,  56 => 8,  47 => 5,  43 => 4,  35 => 3,  11 => 1,);
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

        <li><a href=\"\"><i class=\"\"></i> <span>Installation et réparation</span></a></li>

    </ul>
{% endblock %}
", "FadcoBundle:Default:menu.html.twig", "/var/www/html/fadcoplus/src/FadcoBundle/Resources/views/Default/menu.html.twig");
    }
}
