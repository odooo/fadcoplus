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
        $__internal_e78e351f0f1a7667fd8aa53945c5fe64af3eae5bcedf8817373ae9e190e268a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e78e351f0f1a7667fd8aa53945c5fe64af3eae5bcedf8817373ae9e190e268a5->enter($__internal_e78e351f0f1a7667fd8aa53945c5fe64af3eae5bcedf8817373ae9e190e268a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Prestataire:main-page.html.twig"));

        // line 5
        $context["__internal_55dc740660710aef59e39bd7c5def86ce9ebff31382fea4a3945198214a7c505"] = $this->loadTemplate("FadcoBundle:Distributeur:macros.html.twig", "FadcoBundle:Prestataire:main-page.html.twig", 5);
        // line 6
        $context["__internal_198e7dcf014d01a5d6e28710435ddf1d0423a135b0197aa159ec3b5e4fc186fb"] = $this->loadTemplate("FadcoBundle:Distributeur:macros.html.twig", "FadcoBundle:Prestataire:main-page.html.twig", 6);
        // line 7
        $context["__internal_c72dad0403e26959d3be4704b9817ab1822c81b5bd0963466065d1f4cc88f317"] = $this->loadTemplate("FadcoBundle:Distributeur:macros.html.twig", "FadcoBundle:Prestataire:main-page.html.twig", 7);
        // line 8
        $context["__internal_609ef5459d0736a962eda11485fcad2e2d4dedd83c649c1f5199d92e58343d97"] = $this->loadTemplate("FadcoBundle:Distributeur:macros.html.twig", "FadcoBundle:Prestataire:main-page.html.twig", 8);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e78e351f0f1a7667fd8aa53945c5fe64af3eae5bcedf8817373ae9e190e268a5->leave($__internal_e78e351f0f1a7667fd8aa53945c5fe64af3eae5bcedf8817373ae9e190e268a5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_00f697f494a24ff8cd07f9305a97c0e3be6dec550b4c8e3f3f466b1bda042ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00f697f494a24ff8cd07f9305a97c0e3be6dec550b4c8e3f3f466b1bda042ed6->enter($__internal_00f697f494a24ff8cd07f9305a97c0e3be6dec550b4c8e3f3f466b1bda042ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FADCO+ : Admin";
        
        $__internal_00f697f494a24ff8cd07f9305a97c0e3be6dec550b4c8e3f3f466b1bda042ed6->leave($__internal_00f697f494a24ff8cd07f9305a97c0e3be6dec550b4c8e3f3f466b1bda042ed6_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_abbd9062ef09e9d5f41a1756fa34cba4aebdbdfc7819a2df2f0e672ea8cc117f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abbd9062ef09e9d5f41a1756fa34cba4aebdbdfc7819a2df2f0e672ea8cc117f->enter($__internal_abbd9062ef09e9d5f41a1756fa34cba4aebdbdfc7819a2df2f0e672ea8cc117f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    <div class=\"row\">
        ";
        // line 12
        echo $context["__internal_55dc740660710aef59e39bd7c5def86ce9ebff31382fea4a3945198214a7c505"]->getcountbox("Nombre de réabonnement direct", $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "nbrereabonnementdirect", array()), "bg-green", "fa-home");
        echo "
        ";
        // line 13
        echo $context["__internal_55dc740660710aef59e39bd7c5def86ce9ebff31382fea4a3945198214a7c505"]->getcountbox("Nombre d'installation ou réparation", $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "nbreprestation", array()), "bg-blue", "fa-home");
        echo "
    </div>

    <section class=\"content\">
        <div class=\"box box-warning\">
            <div class=\"box-header with-border\">
                <h1 class=\"box-title\">
                    ";
        // line 20
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "vente")) {
            // line 21
            echo "                        Total des ventes par période et par distributeur
                    ";
        } else {
            // line 23
            echo "                        Nombre d'abonnés par formules activées (Access, Access+, Evasion, Evasion+, Tout canal)
                    ";
        }
        // line 25
        echo "                </h1>

                <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\">
                        <i class=\"fa fa-minus\"></i>
                    </button>
                </div>
            </div>
            <div class=\"box-body\">
                ";
        // line 34
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "vente")) {
            // line 35
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FadcoBundle:Statistique:venteTotalByDistributeurAndPeriod", array("startDate" => (isset($context["from"]) ? $context["from"] : $this->getContext($context, "from")), "endDate" => (isset($context["to"]) ? $context["to"] : $this->getContext($context, "to")), "type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "nom" => (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "prenom" => (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")))));
            echo "
                ";
        } else {
            // line 37
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FadcoBundle:Statistique:nbrAbonneByFormule", array("startDate" => (isset($context["from"]) ? $context["from"] : $this->getContext($context, "from")), "endDate" => (isset($context["to"]) ? $context["to"] : $this->getContext($context, "to")))));
            echo "                
                ";
        }
        // line 39
        echo "            </div>
        </div>
    </section>
     <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_abbd9062ef09e9d5f41a1756fa34cba4aebdbdfc7819a2df2f0e672ea8cc117f->leave($__internal_abbd9062ef09e9d5f41a1756fa34cba4aebdbdfc7819a2df2f0e672ea8cc117f_prof);

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
        return array (  119 => 42,  114 => 39,  108 => 37,  102 => 35,  100 => 34,  89 => 25,  85 => 23,  81 => 21,  79 => 20,  69 => 13,  65 => 12,  62 => 11,  56 => 10,  44 => 3,  37 => 1,  35 => 8,  33 => 7,  31 => 6,  29 => 5,  11 => 1,);
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

{% block title %}FADCO+ : Admin{% endblock %}

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
                    {% if type == \"vente\" %}
                        Total des ventes par période et par distributeur
                    {% else %}
                        Nombre d'abonnés par formules activées (Access, Access+, Evasion, Evasion+, Tout canal)
                    {% endif %}
                </h1>

                <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\">
                        <i class=\"fa fa-minus\"></i>
                    </button>
                </div>
            </div>
            <div class=\"box-body\">
                {% if type == \"vente\" %}
                    {{ render(controller('FadcoBundle:Statistique:venteTotalByDistributeurAndPeriod', {'startDate': from, 'endDate': to, 'type': type, 'nom': nom, 'prenom': prenom })) }}
                {% else %}
                    {{ render(controller('FadcoBundle:Statistique:nbrAbonneByFormule', {'startDate': from, 'endDate': to })) }}                
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
