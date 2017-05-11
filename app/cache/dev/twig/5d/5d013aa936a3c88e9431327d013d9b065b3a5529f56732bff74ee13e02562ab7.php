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
        $__internal_4e4dba0cb88c6fc3c6f776d33336b898ebc57160bf3856b095ac760fbb1ab180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e4dba0cb88c6fc3c6f776d33336b898ebc57160bf3856b095ac760fbb1ab180->enter($__internal_4e4dba0cb88c6fc3c6f776d33336b898ebc57160bf3856b095ac760fbb1ab180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Default:menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e4dba0cb88c6fc3c6f776d33336b898ebc57160bf3856b095ac760fbb1ab180->leave($__internal_4e4dba0cb88c6fc3c6f776d33336b898ebc57160bf3856b095ac760fbb1ab180_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_04cd7b2e8cecc0bc8d815e5916b810547bc2b106b9920b77d7fb4d5862a57cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04cd7b2e8cecc0bc8d815e5916b810547bc2b106b9920b77d7fb4d5862a57cf8->enter($__internal_04cd7b2e8cecc0bc8d815e5916b810547bc2b106b9920b77d7fb4d5862a57cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_04cd7b2e8cecc0bc8d815e5916b810547bc2b106b9920b77d7fb4d5862a57cf8->leave($__internal_04cd7b2e8cecc0bc8d815e5916b810547bc2b106b9920b77d7fb4d5862a57cf8_prof);

    }

    // line 8
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9a9151cf1fcee176f44ae10c8c42db21308216f03dcdb7b1861bd7931e8ab9b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a9151cf1fcee176f44ae10c8c42db21308216f03dcdb7b1861bd7931e8ab9b7->enter($__internal_9a9151cf1fcee176f44ae10c8c42db21308216f03dcdb7b1861bd7931e8ab9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 9
        echo "    <ul class=\"sidebar-menu\">

        <li class=\"\">&nbsp;</li>
        <li class=\"\">&nbsp;</li>
        <li class=\"\">&nbsp;</li>

        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo");
        echo "\"><i class=\"\"></i>Réabonnement direct</a></li>

        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_repair");
        echo "\"><i class=\"\"></i> <span>Prestations</span></a></li>

    </ul>
";
        
        $__internal_9a9151cf1fcee176f44ae10c8c42db21308216f03dcdb7b1861bd7931e8ab9b7->leave($__internal_9a9151cf1fcee176f44ae10c8c42db21308216f03dcdb7b1861bd7931e8ab9b7_prof);

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
        return array (  75 => 17,  70 => 15,  62 => 9,  56 => 8,  47 => 5,  43 => 4,  35 => 3,  11 => 1,);
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
