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
        $__internal_0b58d3ea4792ec74d8479c14fa203b4326698939845a3c79645441327dacc2f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b58d3ea4792ec74d8479c14fa203b4326698939845a3c79645441327dacc2f2->enter($__internal_0b58d3ea4792ec74d8479c14fa203b4326698939845a3c79645441327dacc2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Prestataire:main-page.html.twig"));

        // line 5
        $context["__internal_5ef15ba1d047c0f634afe378bab3b3fb76eb3b11f41edb7be9782aa8580c6804"] = $this->loadTemplate("FadcoBundle:Distributeur:macros.html.twig", "FadcoBundle:Prestataire:main-page.html.twig", 5);
        // line 6
        $context["__internal_1e8b77ff32361acef451ff1b11040d8dcd2a6a14e40bd6e9b1a50da8162457bd"] = $this->loadTemplate("FadcoBundle:Distributeur:macros.html.twig", "FadcoBundle:Prestataire:main-page.html.twig", 6);
        // line 7
        $context["__internal_2d9f1a798bc406040604ad356a1f3a07051fea9b585c16041e3732a48f67aca9"] = $this->loadTemplate("FadcoBundle:Distributeur:macros.html.twig", "FadcoBundle:Prestataire:main-page.html.twig", 7);
        // line 8
        $context["__internal_a30a0d3999d161b568b472e7c95ff5cb471ae0083f3ab2d2c7a3daa7e1538b12"] = $this->loadTemplate("FadcoBundle:Distributeur:macros.html.twig", "FadcoBundle:Prestataire:main-page.html.twig", 8);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b58d3ea4792ec74d8479c14fa203b4326698939845a3c79645441327dacc2f2->leave($__internal_0b58d3ea4792ec74d8479c14fa203b4326698939845a3c79645441327dacc2f2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5fff87814b31b0c96caa1d1e55532253ce4b3d565446e10a80681b0e93d734d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5fff87814b31b0c96caa1d1e55532253ce4b3d565446e10a80681b0e93d734d->enter($__internal_b5fff87814b31b0c96caa1d1e55532253ce4b3d565446e10a80681b0e93d734d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FADCO+ : admin";
        
        $__internal_b5fff87814b31b0c96caa1d1e55532253ce4b3d565446e10a80681b0e93d734d->leave($__internal_b5fff87814b31b0c96caa1d1e55532253ce4b3d565446e10a80681b0e93d734d_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_58d9bab0aaf0d0aebf0a344e6e751496f81ea0ea813fbeffd08351f3eae61a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d9bab0aaf0d0aebf0a344e6e751496f81ea0ea813fbeffd08351f3eae61a5b->enter($__internal_58d9bab0aaf0d0aebf0a344e6e751496f81ea0ea813fbeffd08351f3eae61a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    <div class=\"row\">
        ";
        // line 12
        echo $context["__internal_5ef15ba1d047c0f634afe378bab3b3fb76eb3b11f41edb7be9782aa8580c6804"]->getcountbox("Nombre de réabonnement direct", $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "nbrereabonnementdirect", array()), "bg-green", "fa-home");
        echo "
        ";
        // line 13
        echo $context["__internal_5ef15ba1d047c0f634afe378bab3b3fb76eb3b11f41edb7be9782aa8580c6804"]->getcountbox("Nombre d'installation ou réparation", $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "nbreprestation", array()), "bg-blue", "fa-home");
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
            echo "                    ";
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "vente")) {
                // line 22
                echo "                        Total des ventes par période et par distributeur
                    ";
            } else {
                // line 24
                echo "                        Nombre d'abonnés par formules activées (Access, Access+, Evasion, Evasion+, Tout canal)
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
            echo "                ";
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "vente")) {
                // line 38
                echo "                    ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FadcoBundle:Statistique:venteTotalByDistributeurAndPeriod", array("startDate" => (isset($context["from"]) ? $context["from"] : $this->getContext($context, "from")), "endDate" => (isset($context["to"]) ? $context["to"] : $this->getContext($context, "to")), "type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "nom" => (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "prenom" => (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")))));
                echo "
                ";
            } else {
                // line 40
                echo "                    ";
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
        
        $__internal_58d9bab0aaf0d0aebf0a344e6e751496f81ea0ea813fbeffd08351f3eae61a5b->leave($__internal_58d9bab0aaf0d0aebf0a344e6e751496f81ea0ea813fbeffd08351f3eae61a5b_prof);

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
