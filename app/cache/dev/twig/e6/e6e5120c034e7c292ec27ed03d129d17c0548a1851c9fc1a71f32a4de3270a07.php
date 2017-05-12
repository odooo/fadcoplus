<?php

/* FadcoBundle:Distributeur:index.html.twig */
class __TwigTemplate_d7635d1642e82b5d46366c8a15d8820e610f601ab8af7d26145e1f6f17b0dfa5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FadcoBundle:Distributeur:layout.html.twig", "FadcoBundle:Distributeur:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FadcoBundle:Distributeur:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23a85475702467a6fe590c330cbc69c6ffab0f7b2c099e63c03a7be850262bcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23a85475702467a6fe590c330cbc69c6ffab0f7b2c099e63c03a7be850262bcf->enter($__internal_23a85475702467a6fe590c330cbc69c6ffab0f7b2c099e63c03a7be850262bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Distributeur:index.html.twig"));

        // line 2
        $context["__internal_fbceee2da6a4ecbc224ef391af32e20e9726c9917198623a82e3a4719af27316"] = $this->loadTemplate("FadcoBundle:Distributeur:macros.html.twig", "FadcoBundle:Distributeur:index.html.twig", 2);
        // line 3
        $context["__internal_ae213662c59070a215de734a0becd418a35bae25ec4ba5309819e6d66f0d7830"] = $this->loadTemplate("FadcoBundle:Distributeur:macros.html.twig", "FadcoBundle:Distributeur:index.html.twig", 3);
        // line 4
        $context["__internal_8f0a9210868abf64658f0336e55f0cc60d207f99c52079e401bb19ce15109335"] = $this->loadTemplate("FadcoBundle:Distributeur:macros.html.twig", "FadcoBundle:Distributeur:index.html.twig", 4);
        // line 5
        $context["__internal_7fe40555fee4fa1700c161cec15dcc5cffa8d3b75fdaaea9b839991144481dc5"] = $this->loadTemplate("FadcoBundle:Distributeur:macros.html.twig", "FadcoBundle:Distributeur:index.html.twig", 5);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23a85475702467a6fe590c330cbc69c6ffab0f7b2c099e63c03a7be850262bcf->leave($__internal_23a85475702467a6fe590c330cbc69c6ffab0f7b2c099e63c03a7be850262bcf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_011d7230b9289723fe91a5d066ad5d630908c0d4b091caef9d6dc46fda6ab17b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_011d7230b9289723fe91a5d066ad5d630908c0d4b091caef9d6dc46fda6ab17b->enter($__internal_011d7230b9289723fe91a5d066ad5d630908c0d4b091caef9d6dc46fda6ab17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FADCO+ : distributeur";
        
        $__internal_011d7230b9289723fe91a5d066ad5d630908c0d4b091caef9d6dc46fda6ab17b->leave($__internal_011d7230b9289723fe91a5d066ad5d630908c0d4b091caef9d6dc46fda6ab17b_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_f3557d53f74947d0b6d48022ce98a8f46e768c0011cd4321d85c6b9e68ed895c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3557d53f74947d0b6d48022ce98a8f46e768c0011cd4321d85c6b9e68ed895c->enter($__internal_f3557d53f74947d0b6d48022ce98a8f46e768c0011cd4321d85c6b9e68ed895c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"row\">
        ";
        // line 11
        echo $context["__internal_fbceee2da6a4ecbc224ef391af32e20e9726c9917198623a82e3a4719af27316"]->getcountbox("Nombre de réabonnement direct", (isset($context["nbrereabonnementdirect"]) ? $context["nbrereabonnementdirect"] : $this->getContext($context, "nbrereabonnementdirect")), "bg-green", "fa-home");
        echo "
        ";
        // line 12
        echo $context["__internal_fbceee2da6a4ecbc224ef391af32e20e9726c9917198623a82e3a4719af27316"]->getcountbox("Nombre d'installation ou réparation", (isset($context["nbreprestation"]) ? $context["nbreprestation"] : $this->getContext($context, "nbreprestation")), "bg-blue", "fa-home");
        echo "
    </div>
";
        
        $__internal_f3557d53f74947d0b6d48022ce98a8f46e768c0011cd4321d85c6b9e68ed895c->leave($__internal_f3557d53f74947d0b6d48022ce98a8f46e768c0011cd4321d85c6b9e68ed895c_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Distributeur:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 12,  65 => 11,  62 => 10,  56 => 9,  44 => 7,  37 => 1,  35 => 5,  33 => 4,  31 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FadcoBundle:Distributeur:layout.html.twig\" %}
{% from 'FadcoBundle:Distributeur:macros.html.twig' import countbox %}
{% from 'FadcoBundle:Distributeur:macros.html.twig' import countbox2 %}
{% from 'FadcoBundle:Distributeur:macros.html.twig' import countbox3 %}
{% from 'FadcoBundle:Distributeur:macros.html.twig' import chartbox %}

{% block title %}FADCO+ : distributeur{% endblock %}

{% block content %}
    <div class=\"row\">
        {{ countbox('Nombre de réabonnement direct', nbrereabonnementdirect, 'bg-green', 'fa-home') }}
        {{ countbox('Nombre d\\'installation ou réparation', nbreprestation, 'bg-blue', 'fa-home') }}
    </div>
{% endblock %}", "FadcoBundle:Distributeur:index.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\src\\FadcoBundle/Resources/views/Distributeur/index.html.twig");
    }
}
