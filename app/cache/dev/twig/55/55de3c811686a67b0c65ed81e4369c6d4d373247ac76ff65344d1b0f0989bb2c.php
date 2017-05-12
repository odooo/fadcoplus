<?php

/* FadcoBundle:Prestataire:main-page.html.twig */
class __TwigTemplate_e179ef5a9748577abded5d31547ecd23205172c5d85ab2483324972761c41d5d extends Twig_Template
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
        $__internal_388c4b9610c4bea5b891514393bb1ef145aa419275d7380c247db8ab9def3263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_388c4b9610c4bea5b891514393bb1ef145aa419275d7380c247db8ab9def3263->enter($__internal_388c4b9610c4bea5b891514393bb1ef145aa419275d7380c247db8ab9def3263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Prestataire:main-page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_388c4b9610c4bea5b891514393bb1ef145aa419275d7380c247db8ab9def3263->leave($__internal_388c4b9610c4bea5b891514393bb1ef145aa419275d7380c247db8ab9def3263_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e1d48dc9dd85111c67df6aa59fb672d2b3e1732b72e64801e81e0d30d3a0fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e1d48dc9dd85111c67df6aa59fb672d2b3e1732b72e64801e81e0d30d3a0fb5->enter($__internal_3e1d48dc9dd85111c67df6aa59fb672d2b3e1732b72e64801e81e0d30d3a0fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Statistiques";
        
        $__internal_3e1d48dc9dd85111c67df6aa59fb672d2b3e1732b72e64801e81e0d30d3a0fb5->leave($__internal_3e1d48dc9dd85111c67df6aa59fb672d2b3e1732b72e64801e81e0d30d3a0fb5_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_429844c652ae8fca3cfc0df74f1b2f63148b3d5a0a2cfb15f1d346e6bda46bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429844c652ae8fca3cfc0df74f1b2f63148b3d5a0a2cfb15f1d346e6bda46bec->enter($__internal_429844c652ae8fca3cfc0df74f1b2f63148b3d5a0a2cfb15f1d346e6bda46bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <section class=\"content\">
        <div class=\"box box-warning\">
            <div class=\"box-header with-border\">
                <h1 class=\"box-title\">
                    ";
        // line 11
        if ((($context["type"] ?? $this->getContext($context, "type")) == "vente")) {
            // line 12
            echo "                        Total des ventes par période et par distributeur
                    ";
        } else {
            // line 14
            echo "                        Nombre d'abonnés par formules activées (Access, Access+, Evasion, Evasion+, Tout canal)
                    ";
        }
        // line 16
        echo "                </h1>

                <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\">
                        <i class=\"fa fa-minus\"></i>
                    </button>
                </div>
            </div>
            <div class=\"box-body\">
                ";
        // line 25
        if ((($context["type"] ?? $this->getContext($context, "type")) == "vente")) {
            // line 26
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FadcoBundle:Statistique:venteTotalByDistributeurAndPeriod", array("startDate" => ($context["from"] ?? $this->getContext($context, "from")), "endDate" => ($context["to"] ?? $this->getContext($context, "to")), "type" => ($context["type"] ?? $this->getContext($context, "type")), "nom" => ($context["nom"] ?? $this->getContext($context, "nom")), "prenom" => ($context["prenom"] ?? $this->getContext($context, "prenom")))));
            echo "
                ";
        } else {
            // line 28
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FadcoBundle:Statistique:nbrAbonneByFormule", array("startDate" => ($context["from"] ?? $this->getContext($context, "from")), "endDate" => ($context["to"] ?? $this->getContext($context, "to")))));
            echo "                
                ";
        }
        // line 30
        echo "            </div>
        </div>
    </section>
     <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_429844c652ae8fca3cfc0df74f1b2f63148b3d5a0a2cfb15f1d346e6bda46bec->leave($__internal_429844c652ae8fca3cfc0df74f1b2f63148b3d5a0a2cfb15f1d346e6bda46bec_prof);

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
        return array (  100 => 33,  95 => 30,  89 => 28,  83 => 26,  81 => 25,  70 => 16,  66 => 14,  62 => 12,  60 => 11,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}Statistiques{% endblock %}

{% block content %}

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
", "FadcoBundle:Prestataire:main-page.html.twig", "/var/www/html/fadcoplus/src/FadcoBundle/Resources/views/Prestataire/main-page.html.twig");
    }
}
