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
        $__internal_8b6b998e1334f14dd3797389d54195ffb0450529159340ee4b0c911eea63a590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b6b998e1334f14dd3797389d54195ffb0450529159340ee4b0c911eea63a590->enter($__internal_8b6b998e1334f14dd3797389d54195ffb0450529159340ee4b0c911eea63a590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Distributeur:index.html.twig"));

        // line 2
        $context["__internal_d10a1e2387d350e01c56297aa855afcd48c83aa1cbc7f0d65d343c6f8b463e4d"] = $this->loadTemplate("FadcoBundle:Distributeur:macros.html.twig", "FadcoBundle:Distributeur:index.html.twig", 2);
        // line 3
        $context["__internal_96fa903b837d8093aea8eda9c955931b839d582ca41c7a60778303baa5297505"] = $this->loadTemplate("FadcoBundle:Distributeur:macros.html.twig", "FadcoBundle:Distributeur:index.html.twig", 3);
        // line 4
        $context["__internal_8127dc736a0422f6adc5fad61b8f7f5b3e3de972eca551199e6a7fc02d57f1fd"] = $this->loadTemplate("FadcoBundle:Distributeur:macros.html.twig", "FadcoBundle:Distributeur:index.html.twig", 4);
        // line 5
        $context["__internal_4317a1e32a3c3100946639ba5925fe72100b6bfc027c0d92f0eda27bb378e336"] = $this->loadTemplate("FadcoBundle:Distributeur:macros.html.twig", "FadcoBundle:Distributeur:index.html.twig", 5);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b6b998e1334f14dd3797389d54195ffb0450529159340ee4b0c911eea63a590->leave($__internal_8b6b998e1334f14dd3797389d54195ffb0450529159340ee4b0c911eea63a590_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cdd6cae7c25551bcfe01bba63bdb0ab4669b0103009070e6d59d13b57609fc4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdd6cae7c25551bcfe01bba63bdb0ab4669b0103009070e6d59d13b57609fc4d->enter($__internal_cdd6cae7c25551bcfe01bba63bdb0ab4669b0103009070e6d59d13b57609fc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FADCO+ : distributeur";
        
        $__internal_cdd6cae7c25551bcfe01bba63bdb0ab4669b0103009070e6d59d13b57609fc4d->leave($__internal_cdd6cae7c25551bcfe01bba63bdb0ab4669b0103009070e6d59d13b57609fc4d_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_091d578c3e058c0bc16e21c7696b1394a453066d63e1777b1f90422d0a653fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_091d578c3e058c0bc16e21c7696b1394a453066d63e1777b1f90422d0a653fa5->enter($__internal_091d578c3e058c0bc16e21c7696b1394a453066d63e1777b1f90422d0a653fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"row\">
        ";
        // line 11
        echo $context["__internal_d10a1e2387d350e01c56297aa855afcd48c83aa1cbc7f0d65d343c6f8b463e4d"]->getcountbox("Nombre de réabonnement direct", (isset($context["nbrereabonnementdirect"]) ? $context["nbrereabonnementdirect"] : $this->getContext($context, "nbrereabonnementdirect")), "bg-green", "fa-home");
        echo "
        ";
        // line 12
        echo $context["__internal_d10a1e2387d350e01c56297aa855afcd48c83aa1cbc7f0d65d343c6f8b463e4d"]->getcountbox("Nombre d'installation ou réparation", (isset($context["nbreprestation"]) ? $context["nbreprestation"] : $this->getContext($context, "nbreprestation")), "bg-blue", "fa-home");
        echo "
    </div>
";
        
        $__internal_091d578c3e058c0bc16e21c7696b1394a453066d63e1777b1f90422d0a653fa5->leave($__internal_091d578c3e058c0bc16e21c7696b1394a453066d63e1777b1f90422d0a653fa5_prof);

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
