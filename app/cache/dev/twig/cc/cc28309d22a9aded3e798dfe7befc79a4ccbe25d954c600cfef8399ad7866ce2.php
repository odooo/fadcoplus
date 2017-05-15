<?php

/* FadcoBundle:Distributeur:show-reabo.html.twig */
class __TwigTemplate_d143193b9d9a2197fedaa8397d8fa8e6bc47b0bbc598dbae13722e93014b6258 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FadcoBundle:Default:menu.html.twig", "FadcoBundle:Distributeur:show-reabo.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_quick_actions' => array($this, 'block_page_quick_actions'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FadcoBundle:Default:menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3aee4aeeb9ebe257ff33b0f5360180887d486d3d2874df142d03d8c755376f08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aee4aeeb9ebe257ff33b0f5360180887d486d3d2874df142d03d8c755376f08->enter($__internal_3aee4aeeb9ebe257ff33b0f5360180887d486d3d2874df142d03d8c755376f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Distributeur:show-reabo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3aee4aeeb9ebe257ff33b0f5360180887d486d3d2874df142d03d8c755376f08->leave($__internal_3aee4aeeb9ebe257ff33b0f5360180887d486d3d2874df142d03d8c755376f08_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ed0d48bf2967ff218bf7f39fcbc5ceb6e4ce6217d7de3e37ff47b71855727aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed0d48bf2967ff218bf7f39fcbc5ceb6e4ce6217d7de3e37ff47b71855727aa->enter($__internal_9ed0d48bf2967ff218bf7f39fcbc5ceb6e4ce6217d7de3e37ff47b71855727aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Infos du réabo. ";
        
        $__internal_9ed0d48bf2967ff218bf7f39fcbc5ceb6e4ce6217d7de3e37ff47b71855727aa->leave($__internal_9ed0d48bf2967ff218bf7f39fcbc5ceb6e4ce6217d7de3e37ff47b71855727aa_prof);

    }

    // line 3
    public function block_page_quick_actions($context, array $blocks = array())
    {
        $__internal_6003ad7fd94fa057635fc8175ac37ae59e2600a92196eddcb59cb900c48c2b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6003ad7fd94fa057635fc8175ac37ae59e2600a92196eddcb59cb900c48c2b27->enter($__internal_6003ad7fd94fa057635fc8175ac37ae59e2600a92196eddcb59cb900c48c2b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_quick_actions"));

        // line 4
        echo "    <div>
        <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo");
        echo "\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour à la liste\"/></a>
        ";
        // line 6
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "admin") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "super_admin"))) {
            // line 7
            echo "            ";
            if ((null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateEcheance", array()))) {
                // line 8
                echo "                <a href=\"#\" onclick=\"valideForm(this);\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo_valider", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
                echo "\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Valider\"/></a>
            ";
            }
            // line 10
            echo "        ";
        }
        // line 11
        echo "    </div>
";
        
        $__internal_6003ad7fd94fa057635fc8175ac37ae59e2600a92196eddcb59cb900c48c2b27->leave($__internal_6003ad7fd94fa057635fc8175ac37ae59e2600a92196eddcb59cb900c48c2b27_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_85450be35cb12e5d4555ab460870ea1065851403057ba3985a50058c86bdc36d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85450be35cb12e5d4555ab460870ea1065851403057ba3985a50058c86bdc36d->enter($__internal_85450be35cb12e5d4555ab460870ea1065851403057ba3985a50058c86bdc36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo "    <section class=\"content\">
        <div class=\"box box-default\">
            <div class=\"box-header with-border\">
                <h1 class=\"box-title\">Détails du réabonnement direct </h1>

                <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\">
                        <i class=\"fa fa-minus\"></i>
                    </button>
                </div>
            </div>
            <div class=\"box-body\">
                <div class=\"table-responsive mailbox-messages\">
                        <table class=\"table table-bordered table-striped\">
                            <tbody>
                                <tr>
                                    <th style=\"text-align:center;\">#</th>
                                    <td style=\"text-align:center;\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
                                </tr>
                                
                                <tr>
                                    <th style=\"text-align:center;\">Abonné</th>
                                    <td style=\"text-align:center;\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "abonne", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th style=\"text-align:center;\">N° carte</th>
                                    <td style=\"text-align:center;\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numeroCarte", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th style=\"text-align:center;\">N° mobile</th>
                                    <td style=\"text-align:center;\">";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contact", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th style=\"text-align:center;\">Formule</th>
                                    <td style=\"text-align:center;\">";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "formule", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th style=\"text-align:center;\">Option</th>
                                    <td style=\"text-align:center;\">";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "options", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th style=\"text-align:center;\">Durée</th>
                                    <td style=\"text-align:center;\">";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "duree", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th style=\"text-align:center;\">Montant</th>
                                    <td style=\"text-align:center;\">";
        // line 61
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "montant", array()), 0, ".", " "), "html", null, true);
        echo " f</td>
                                </tr>
                                <tr>
                                    <th style=\"text-align:center;\">Date réabo.</th>
                                    <td style=\"text-align:center;\">";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date", array()), "d-m-Y H:s:i"), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th style=\"text-align:center;\">Date échéance</th>
                                    <td style=\"text-align:center;\">";
        // line 69
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateEcheance", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateEcheance", array()), "d-m-Y H:s:i"), "html", null, true);
        }
        echo "</td>
                                </tr>
                                ";
        // line 71
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "admin") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "super_admin"))) {
            // line 72
            echo "                                    <tr>
                                        <th style=\"text-align:center;\">Distributeur</th>
                                        <td style=\"text-align:center;\">";
            // line 74
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "distributeur", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "distributeur", array()), "name", array()), "html", null, true);
            }
            echo "</td>
                                    </tr>
                                    <tr>
                                        <th style=\"text-align:center;\">Valideur</th>
                                        <td style=\"text-align:center;\">";
            // line 78
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "valideur", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "valideur", array()), "name", array()), "html", null, true);
            }
            echo "</td>
                                    </tr>
                                ";
        }
        // line 81
        echo "                        </tbody>
                    </table>
                </div>
                <div class=\"row\" style=\"margin: auto;\">
                    <a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo");
        echo "\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour à la liste\"/></a>
                    ";
        // line 86
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "admin") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "super_admin"))) {
            // line 87
            echo "                        ";
            if ((null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateEcheance", array()))) {
                // line 88
                echo "                            <a href=\"\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Valider\"/></a>
                        ";
            }
            // line 90
            echo "                    ";
        }
        // line 91
        echo "                </div>
        </div>
    </section>

    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/style/jquery.accordDate.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/bootstrap-slider/last/bootstrap-slider.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/jQueryfiler/js/jquery.filer.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/datepicker/locales/bootstrap-datepicker.fr.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 102
        echo twig_include($this->env, $context, "FadcoBundle:Prestataire:popups.html.twig");
        echo "

    <script>

        \$(function () {
            \$('.datepicker').datepicker();
        });

        function valideForm(\$this) {
            \$('#pleaseWaitDialog').modal('show');
            var url = \$(\$this).data(\"url\");
            \$.ajax({
                url: url,
                type: 'GET',
                success: function (data) {
                    \$('#pleaseWaitDialog').modal('hide');
                    \$(\"#formContentBox\").html(data);
                    \$(\"#formModal\").modal('show');

                }
            });
        }

    </script>

";
        
        $__internal_85450be35cb12e5d4555ab460870ea1065851403057ba3985a50058c86bdc36d->leave($__internal_85450be35cb12e5d4555ab460870ea1065851403057ba3985a50058c86bdc36d_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Distributeur:show-reabo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 102,  250 => 100,  246 => 99,  242 => 98,  238 => 97,  234 => 96,  230 => 95,  224 => 91,  221 => 90,  217 => 88,  214 => 87,  212 => 86,  208 => 85,  202 => 81,  194 => 78,  185 => 74,  181 => 72,  179 => 71,  172 => 69,  165 => 65,  158 => 61,  151 => 57,  144 => 53,  137 => 49,  130 => 45,  123 => 41,  116 => 37,  108 => 32,  89 => 15,  83 => 14,  75 => 11,  72 => 10,  66 => 8,  63 => 7,  61 => 6,  57 => 5,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FadcoBundle:Default:menu.html.twig\" %}
{% block title %}Infos du réabo. {% endblock %}
{% block page_quick_actions %}
    <div>
        <a href=\"{{ path('fadco_espace_distributeur_reabo') }}\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour à la liste\"/></a>
        {% if app.user.type == \"admin\" or app.user.type == \"super_admin\" %}
            {% if entity.dateEcheance is null %}
                <a href=\"#\" onclick=\"valideForm(this);\" data-url=\"{{ path('fadco_espace_distributeur_reabo_valider',{'id': entity.id}) }}\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Valider\"/></a>
            {% endif %}
        {% endif %}
    </div>
{% endblock %}

{% block content %}
    <section class=\"content\">
        <div class=\"box box-default\">
            <div class=\"box-header with-border\">
                <h1 class=\"box-title\">Détails du réabonnement direct </h1>

                <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\">
                        <i class=\"fa fa-minus\"></i>
                    </button>
                </div>
            </div>
            <div class=\"box-body\">
                <div class=\"table-responsive mailbox-messages\">
                        <table class=\"table table-bordered table-striped\">
                            <tbody>
                                <tr>
                                    <th style=\"text-align:center;\">#</th>
                                    <td style=\"text-align:center;\">{{ entity.id }}</td>
                                </tr>
                                
                                <tr>
                                    <th style=\"text-align:center;\">Abonné</th>
                                    <td style=\"text-align:center;\">{{ entity.abonne }}</td>
                                </tr>
                                <tr>
                                    <th style=\"text-align:center;\">N° carte</th>
                                    <td style=\"text-align:center;\">{{ entity.numeroCarte }}</td>
                                </tr>
                                <tr>
                                    <th style=\"text-align:center;\">N° mobile</th>
                                    <td style=\"text-align:center;\">{{ entity.contact }}</td>
                                </tr>
                                <tr>
                                    <th style=\"text-align:center;\">Formule</th>
                                    <td style=\"text-align:center;\">{{ entity.formule }}</td>
                                </tr>
                                <tr>
                                    <th style=\"text-align:center;\">Option</th>
                                    <td style=\"text-align:center;\">{{ entity.options }}</td>
                                </tr>
                                <tr>
                                    <th style=\"text-align:center;\">Durée</th>
                                    <td style=\"text-align:center;\">{{ entity.duree }}</td>
                                </tr>
                                <tr>
                                    <th style=\"text-align:center;\">Montant</th>
                                    <td style=\"text-align:center;\">{{ entity.montant|number_format(0,'.',' ') }} f</td>
                                </tr>
                                <tr>
                                    <th style=\"text-align:center;\">Date réabo.</th>
                                    <td style=\"text-align:center;\">{{ entity.date|date('d-m-Y H:s:i') }}</td>
                                </tr>
                                <tr>
                                    <th style=\"text-align:center;\">Date échéance</th>
                                    <td style=\"text-align:center;\">{% if entity.dateEcheance %}{{ entity.dateEcheance|date('d-m-Y H:s:i') }}{% endif %}</td>
                                </tr>
                                {% if app.user.type == \"admin\" or app.user.type == \"super_admin\" %}
                                    <tr>
                                        <th style=\"text-align:center;\">Distributeur</th>
                                        <td style=\"text-align:center;\">{% if entity.distributeur %}{{ entity.distributeur.name }}{% endif %}</td>
                                    </tr>
                                    <tr>
                                        <th style=\"text-align:center;\">Valideur</th>
                                        <td style=\"text-align:center;\">{% if entity.valideur %}{{ entity.valideur.name }}{% endif %}</td>
                                    </tr>
                                {% endif %}
                        </tbody>
                    </table>
                </div>
                <div class=\"row\" style=\"margin: auto;\">
                    <a href=\"{{ path('fadco_espace_distributeur_reabo') }}\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour à la liste\"/></a>
                    {% if app.user.type == \"admin\" or app.user.type == \"super_admin\" %}
                        {% if entity.dateEcheance is null %}
                            <a href=\"\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Valider\"/></a>
                        {% endif %}
                    {% endif %}
                </div>
        </div>
    </section>

    <script src=\"{{ asset('bundles/FadcoBundle/plugins/datatables/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/FadcoBundle/style/jquery.accordDate.js') }}\"></script>
    <script src=\"{{ asset('bundles/FadcoBundle/plugins/bootstrap-slider/last/bootstrap-slider.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/FadcoBundle/plugins/jQueryfiler/js/jquery.filer.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/FadcoBundle/plugins/datepicker/bootstrap-datepicker.js') }}\"></script>
    <script src=\"{{ asset('bundles/FadcoBundle/plugins/datepicker/locales/bootstrap-datepicker.fr.js') }}\"></script>

    {{ include('FadcoBundle:Prestataire:popups.html.twig') }}

    <script>

        \$(function () {
            \$('.datepicker').datepicker();
        });

        function valideForm(\$this) {
            \$('#pleaseWaitDialog').modal('show');
            var url = \$(\$this).data(\"url\");
            \$.ajax({
                url: url,
                type: 'GET',
                success: function (data) {
                    \$('#pleaseWaitDialog').modal('hide');
                    \$(\"#formContentBox\").html(data);
                    \$(\"#formModal\").modal('show');

                }
            });
        }

    </script>

{% endblock %}


", "FadcoBundle:Distributeur:show-reabo.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\src\\FadcoBundle/Resources/views/Distributeur/show-reabo.html.twig");
    }
}
