<?php

/* FadcoBundle:Prestataire:main-page.html.twig */
class __TwigTemplate_0613faf0a9985e9bb07ccc61a9f1b47d60f4a7acf3a3aa7e30904a6dd552f853 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FadcoBundle:Prestataire:layout.html.twig", "FadcoBundle:Prestataire:main-page.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FadcoBundle:Prestataire:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d054cdfb66101250099e6f4860927499a3173a1e73a4bb8fa4bb8ee8fcd11f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d054cdfb66101250099e6f4860927499a3173a1e73a4bb8fa4bb8ee8fcd11f0->enter($__internal_2d054cdfb66101250099e6f4860927499a3173a1e73a4bb8fa4bb8ee8fcd11f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Prestataire:main-page.html.twig"));

        // line 5
        $context["__internal_f4d6c78f1b8052f7c38301792de1e283df4a3210c99c1db62a8148b2c6576c44"] = $this->loadTemplate("FadcoBundle:Distributeur:macros.html.twig", "FadcoBundle:Prestataire:main-page.html.twig", 5);
        // line 6
        $context["__internal_6a682384a447817cf8152996325d80cbf36cf319b649fefca519bb8858add142"] = $this->loadTemplate("FadcoBundle:Distributeur:macros.html.twig", "FadcoBundle:Prestataire:main-page.html.twig", 6);
        // line 7
        $context["__internal_5cc53e6675bb026c2b148c101edcb3819b8970a5b04edc302ed0966c9079cc05"] = $this->loadTemplate("FadcoBundle:Distributeur:macros.html.twig", "FadcoBundle:Prestataire:main-page.html.twig", 7);
        // line 8
        $context["__internal_9d22ece623713043267f59e76bca8b79ca78364cd2c0cb163ba7a50aad72fc0a"] = $this->loadTemplate("FadcoBundle:Distributeur:macros.html.twig", "FadcoBundle:Prestataire:main-page.html.twig", 8);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d054cdfb66101250099e6f4860927499a3173a1e73a4bb8fa4bb8ee8fcd11f0->leave($__internal_2d054cdfb66101250099e6f4860927499a3173a1e73a4bb8fa4bb8ee8fcd11f0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_608634b9b6acb9f3f5f0fee6e171a2e4a0a64879a1675e72c70742479bf5115e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_608634b9b6acb9f3f5f0fee6e171a2e4a0a64879a1675e72c70742479bf5115e->enter($__internal_608634b9b6acb9f3f5f0fee6e171a2e4a0a64879a1675e72c70742479bf5115e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FADCO+ : admin";
        
        $__internal_608634b9b6acb9f3f5f0fee6e171a2e4a0a64879a1675e72c70742479bf5115e->leave($__internal_608634b9b6acb9f3f5f0fee6e171a2e4a0a64879a1675e72c70742479bf5115e_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_63321a9f5e55443e2b9f2415f7281b27ee18c723c6618a88c5dfcd55417ad915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63321a9f5e55443e2b9f2415f7281b27ee18c723c6618a88c5dfcd55417ad915->enter($__internal_63321a9f5e55443e2b9f2415f7281b27ee18c723c6618a88c5dfcd55417ad915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    <div class=\"row\">
        ";
        // line 12
        echo $context["__internal_f4d6c78f1b8052f7c38301792de1e283df4a3210c99c1db62a8148b2c6576c44"]->getcountbox("Nombre de réabonnement direct", $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "nbrereabonnementdirect", array()), "bg-green", "fa-home");
        echo "
        ";
        // line 13
        echo $context["__internal_f4d6c78f1b8052f7c38301792de1e283df4a3210c99c1db62a8148b2c6576c44"]->getcountbox("Nombre d'installation ou réparation", $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "nbreprestation", array()), "bg-blue", "fa-home");
        echo "
    </div>

    <section class=\"content\">
        <div class=\"box box-warning\">
            <div class=\"box-header with-border\">
                <h1 class=\"box-title\">
                    ";
        // line 20
        if (array_key_exists("type", $context)) {
            // line 21
            echo "                        ";
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "vente")) {
                // line 22
                echo "                            Total des ventes par période et par distributeur
                        ";
            } else {
                // line 24
                echo "                            Nombre d'abonnés par formules activées (Access, Access+, Evasion, Evasion+, Tout canal)
                        ";
            }
            // line 26
            echo "                    ";
        }
        // line 27
        echo "                </h1>

                <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\">
                        <i class=\"fa fa-minus\"></i>
                    </button>
                </div>
            </div>
            <div class=\"box-body\">
                ";
        // line 36
        if (array_key_exists("type", $context)) {
            // line 37
            echo "                    ";
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "vente")) {
                // line 38
                echo "                        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FadcoBundle:Statistique:venteTotalByDistributeurAndPeriod", array("startDate" => (isset($context["from"]) ? $context["from"] : $this->getContext($context, "from")), "endDate" => (isset($context["to"]) ? $context["to"] : $this->getContext($context, "to")), "type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "nom" => (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "prenom" => (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")))));
                echo "
                    ";
            } else {
                // line 40
                echo "                        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FadcoBundle:Statistique:nbrAbonneByFormule", array("startDate" => (isset($context["from"]) ? $context["from"] : $this->getContext($context, "from")), "endDate" => (isset($context["to"]) ? $context["to"] : $this->getContext($context, "to")))));
                echo "                
                    ";
            }
            // line 42
            echo "                ";
        }
        // line 43
        echo "            </div>
        </div>
    </section>
     <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_63321a9f5e55443e2b9f2415f7281b27ee18c723c6618a88c5dfcd55417ad915->leave($__internal_63321a9f5e55443e2b9f2415f7281b27ee18c723c6618a88c5dfcd55417ad915_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Prestataire:main-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 46,  126 => 43,  123 => 42,  117 => 40,  111 => 38,  108 => 37,  106 => 36,  95 => 27,  92 => 26,  88 => 24,  84 => 22,  81 => 21,  79 => 20,  69 => 13,  65 => 12,  62 => 11,  56 => 10,  44 => 3,  37 => 1,  35 => 8,  33 => 7,  31 => 6,  29 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FadcoBundle:Prestataire:layout.html.twig\" %}

{% block title %}FADCO+ : admin{% endblock %}

{% from 'FadcoBundle:Distributeur:macros.html.twig' import countbox %}
{% from 'FadcoBundle:Distributeur:macros.html.twig' import countbox2 %}
{% from 'FadcoBundle:Distributeur:macros.html.twig' import countbox3 %}
{% from 'FadcoBundle:Distributeur:macros.html.twig' import chartbox %}

{% block content %}
    <div class=\"row\">
        {{ countbox('Nombre de réabonnement direct', data.nbrereabonnementdirect, 'bg-green', 'fa-home') }}
        {{ countbox('Nombre d\\'installation ou réparation', data.nbreprestation, 'bg-blue', 'fa-home') }}
    </div>

    <section class=\"content\">
        <div class=\"box box-warning\">
            <div class=\"box-header with-border\">
                <h1 class=\"box-title\">
                    {% if type is defined %}
                        {% if type == \"vente\" %}
                            Total des ventes par période et par distributeur
                        {% else %}
                            Nombre d'abonnés par formules activées (Access, Access+, Evasion, Evasion+, Tout canal)
                        {% endif %}
                    {% endif %}
                </h1>

                <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\">
                        <i class=\"fa fa-minus\"></i>
                    </button>
                </div>
            </div>
            <div class=\"box-body\">
                {% if type is defined %}
                    {% if type == \"vente\" %}
                        {{ render(controller('FadcoBundle:Statistique:venteTotalByDistributeurAndPeriod', {'startDate': from, 'endDate': to, 'type': type, 'nom': nom, 'prenom': prenom })) }}
                    {% else %}
                        {{ render(controller('FadcoBundle:Statistique:nbrAbonneByFormule', {'startDate': from, 'endDate': to })) }}                
                    {% endif %}
                {% endif %}
            </div>
        </div>
    </section>
     <script src=\"{{ asset('bundles/FadcoBundle/plugins/datatables/jquery.dataTables.min.js') }}\"></script>
{% endblock %}
{#
{% block javascript %}
    {{ parent() }}
{% endblock %}
#}
", "FadcoBundle:Prestataire:main-page.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\src\\FadcoBundle/Resources/views/Prestataire/main-page.html.twig");
    }
}
