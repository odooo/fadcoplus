<?php

/* FadcoBundle:Distributeur:show-reabo-complement.html.twig */
class __TwigTemplate_8e1e3c1e9bb994510252519f8160619d06fc3975524fed3bef7946a361156c22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FadcoBundle:Default:menu.html.twig", "FadcoBundle:Distributeur:show-reabo-complement.html.twig", 1);
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
        $__internal_1e95f073b8188b366ec5e0a3888b1d3d046469794e4ae36422d5e02ee6987427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e95f073b8188b366ec5e0a3888b1d3d046469794e4ae36422d5e02ee6987427->enter($__internal_1e95f073b8188b366ec5e0a3888b1d3d046469794e4ae36422d5e02ee6987427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Distributeur:show-reabo-complement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e95f073b8188b366ec5e0a3888b1d3d046469794e4ae36422d5e02ee6987427->leave($__internal_1e95f073b8188b366ec5e0a3888b1d3d046469794e4ae36422d5e02ee6987427_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c80022d167d1f028d0b836d474339d3ef8d3793cbb63f0da6d07cdf59bd975de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c80022d167d1f028d0b836d474339d3ef8d3793cbb63f0da6d07cdf59bd975de->enter($__internal_c80022d167d1f028d0b836d474339d3ef8d3793cbb63f0da6d07cdf59bd975de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Infos du complément ";
        
        $__internal_c80022d167d1f028d0b836d474339d3ef8d3793cbb63f0da6d07cdf59bd975de->leave($__internal_c80022d167d1f028d0b836d474339d3ef8d3793cbb63f0da6d07cdf59bd975de_prof);

    }

    // line 3
    public function block_page_quick_actions($context, array $blocks = array())
    {
        $__internal_f6a7e0cd8e1c0c0bb03556d288b15f1f15cbfe0de74c5f17187b9cbb2eaf7739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a7e0cd8e1c0c0bb03556d288b15f1f15cbfe0de74c5f17187b9cbb2eaf7739->enter($__internal_f6a7e0cd8e1c0c0bb03556d288b15f1f15cbfe0de74c5f17187b9cbb2eaf7739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_quick_actions"));

        // line 4
        echo "    <div>
        <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo_complement");
        echo "\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour à la liste\"/></a>
        ";
        // line 6
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "admin") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "super_admin"))) {
            // line 7
            echo "            ";
            if ((null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateEcheance", array()))) {
                // line 8
                echo "                <a href=\"#\" onclick=\"valideForm(this);\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo_complement_valider", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
                echo "\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Valider\"/></a>
            ";
            }
            // line 10
            echo "        ";
        }
        // line 11
        echo "    </div>
";
        
        $__internal_f6a7e0cd8e1c0c0bb03556d288b15f1f15cbfe0de74c5f17187b9cbb2eaf7739->leave($__internal_f6a7e0cd8e1c0c0bb03556d288b15f1f15cbfe0de74c5f17187b9cbb2eaf7739_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_c98b6be1f53abb4712a9529115b83a1eeaffc4910b0a088a344f2a36b7a354b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c98b6be1f53abb4712a9529115b83a1eeaffc4910b0a088a344f2a36b7a354b4->enter($__internal_c98b6be1f53abb4712a9529115b83a1eeaffc4910b0a088a344f2a36b7a354b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo "    <section class=\"content\">
        <div class=\"box box-default\">
            <div class=\"box-header with-border\">
                <h1 class=\"box-title\">Détails du complément </h1>

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
                                    <th style=\"text-align:center;\">N°</th>
                                    <td style=\"text-align:center;\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
                                </tr>
                                
                                <tr>
                                    <th style=\"text-align:center;\">Abonné</th>
                                    <td style=\"text-align:center;\">";
        // line 37
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reabo", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reabo", array()), "abonne", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "abonne", array()), "html", null, true);
        }
        echo "</td>
                                </tr>
                                <tr>
                                    <th style=\"text-align:center;\">N° carte</th>
                                    <td style=\"text-align:center;\">";
        // line 41
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reabo", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reabo", array()), "numeroCarte", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numeroCarte", array()), "html", null, true);
        }
        echo "</td>
                                </tr>
                                
                                <tr>
                                    <th style=\"text-align:center;\">N° mobile</th>
                                    <td style=\"text-align:center;\">";
        // line 46
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reabo", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reabo", array()), "contact", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contact", array()), "html", null, true);
        }
        echo "</td>
                                </tr>
                                
                                ";
        // line 49
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "oldFormule", array())) {
            // line 50
            echo "                                <tr>
                                    <th style=\"text-align:center;\">Ancienne offre</th>
                                    <td style=\"text-align:center;\">";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "oldFormule", array()), "html", null, true);
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reabo", array())) {
                echo " ";
                if ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reabo", array()), "options", array())) {
                    echo " / ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reabo", array()), "options", array()), "html", null, true);
                }
            } else {
                if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "oldOptions", array())) {
                    echo " / ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "oldOptions", array()), "html", null, true);
                }
            }
            echo " </td>
                                </tr>
                                ";
        }
        // line 55
        echo "                                ";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "formule", array())) {
            // line 56
            echo "                                <tr>
                                    <th style=\"text-align:center;\">Nouvelle offre</th>
                                    <td style=\"text-align:center;\">";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "formule", array()), "html", null, true);
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "options", array())) {
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "options", array()), "html", null, true);
            }
            echo "</td>
                                </tr>
                                ";
        }
        // line 61
        echo "                                <tr>
                                    <th style=\"text-align:center;\">Montant complément</th>
                                    <td style=\"text-align:center;\">";
        // line 63
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "montant", array()), 0, ".", " "), "html", null, true);
        echo " f</td>
                                </tr>
                                <tr>
                                    <th style=\"text-align:center;\">Date complément</th>
                                    <td style=\"text-align:center;\">";
        // line 67
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date", array()), "d-m-Y H:s:i"), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th style=\"text-align:center;\">Date échéance</th>
                                    <td style=\"text-align:center;\">";
        // line 71
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateEcheance", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateEcheance", array()), "d-m-Y H:s:i"), "html", null, true);
        }
        echo "</td>
                                </tr>
                                ";
        // line 73
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "admin") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "super_admin"))) {
            // line 74
            echo "                                    <tr>
                                        <th style=\"text-align:center;\">Distributeur</th>
                                        <td style=\"text-align:center;\">";
            // line 76
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "distributeur", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "distributeur", array()), "name", array()), "html", null, true);
            }
            echo "</td>
                                    </tr>
                                    <tr>
                                        <th style=\"text-align:center;\">Valideur</th>
                                        <td style=\"text-align:center;\">";
            // line 80
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "valideur", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "valideur", array()), "name", array()), "html", null, true);
            }
            echo "</td>
                                    </tr>
                                ";
        }
        // line 83
        echo "                        </tbody>
                    </table>
                </div>
                <div class=\"row\" style=\"margin: auto;\">
                    <a href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo_complement");
        echo "\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour à la liste\"/></a>
                    ";
        // line 88
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "admin") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "super_admin"))) {
            // line 89
            echo "                        ";
            if ((null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateEcheance", array()))) {
                // line 90
                echo "                            <a href=\"#\" onclick=\"valideForm(this);\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo_complement_valider", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
                echo "\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Valider\"/></a>
                        ";
            }
            // line 92
            echo "                    ";
        }
        // line 93
        echo "                </div>
        </div>
    </section>

    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/style/jquery.accordDate.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/bootstrap-slider/last/bootstrap-slider.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/jQueryfiler/js/jquery.filer.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/datepicker/locales/bootstrap-datepicker.fr.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 104
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
        
        $__internal_c98b6be1f53abb4712a9529115b83a1eeaffc4910b0a088a344f2a36b7a354b4->leave($__internal_c98b6be1f53abb4712a9529115b83a1eeaffc4910b0a088a344f2a36b7a354b4_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Distributeur:show-reabo-complement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 104,  288 => 102,  284 => 101,  280 => 100,  276 => 99,  272 => 98,  268 => 97,  262 => 93,  259 => 92,  253 => 90,  250 => 89,  248 => 88,  244 => 87,  238 => 83,  230 => 80,  221 => 76,  217 => 74,  215 => 73,  208 => 71,  201 => 67,  194 => 63,  190 => 61,  180 => 58,  176 => 56,  173 => 55,  155 => 52,  151 => 50,  149 => 49,  139 => 46,  127 => 41,  116 => 37,  108 => 32,  89 => 15,  83 => 14,  75 => 11,  72 => 10,  66 => 8,  63 => 7,  61 => 6,  57 => 5,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
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
{% block title %}Infos du complément {% endblock %}
{% block page_quick_actions %}
    <div>
        <a href=\"{{ path('fadco_espace_distributeur_reabo_complement') }}\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour à la liste\"/></a>
        {% if app.user.type == \"admin\" or app.user.type == \"super_admin\" %}
            {% if entity.dateEcheance is null %}
                <a href=\"#\" onclick=\"valideForm(this);\" data-url=\"{{ path('fadco_espace_distributeur_reabo_complement_valider',{'id': entity.id}) }}\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Valider\"/></a>
            {% endif %}
        {% endif %}
    </div>
{% endblock %}

{% block content %}
    <section class=\"content\">
        <div class=\"box box-default\">
            <div class=\"box-header with-border\">
                <h1 class=\"box-title\">Détails du complément </h1>

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
                                    <th style=\"text-align:center;\">N°</th>
                                    <td style=\"text-align:center;\">{{ entity.id }}</td>
                                </tr>
                                
                                <tr>
                                    <th style=\"text-align:center;\">Abonné</th>
                                    <td style=\"text-align:center;\">{% if entity.reabo %}{{ entity.reabo.abonne }}{% else %}{{ entity.abonne }}{% endif %}</td>
                                </tr>
                                <tr>
                                    <th style=\"text-align:center;\">N° carte</th>
                                    <td style=\"text-align:center;\">{% if entity.reabo %}{{ entity.reabo.numeroCarte }}{% else %}{{ entity.numeroCarte }}{% endif %}</td>
                                </tr>
                                
                                <tr>
                                    <th style=\"text-align:center;\">N° mobile</th>
                                    <td style=\"text-align:center;\">{% if entity.reabo %}{{ entity.reabo.contact }}{% else %}{{ entity.contact }}{% endif %}</td>
                                </tr>
                                
                                {% if entity.oldFormule %}
                                <tr>
                                    <th style=\"text-align:center;\">Ancienne offre</th>
                                    <td style=\"text-align:center;\">{{ entity.oldFormule }}{% if entity.reabo %} {% if entity.reabo.options %} / {{ entity.reabo.options }}{% endif %}{% else %}{% if entity.oldOptions %} / {{ entity.oldOptions }}{% endif %}{% endif %} </td>
                                </tr>
                                {% endif %}
                                {% if entity.formule %}
                                <tr>
                                    <th style=\"text-align:center;\">Nouvelle offre</th>
                                    <td style=\"text-align:center;\">{{ entity.formule }}{% if entity.options %} / {{ entity.options }}{% endif %}</td>
                                </tr>
                                {% endif %}
                                <tr>
                                    <th style=\"text-align:center;\">Montant complément</th>
                                    <td style=\"text-align:center;\">{{ entity.montant|number_format(0,'.',' ') }} f</td>
                                </tr>
                                <tr>
                                    <th style=\"text-align:center;\">Date complément</th>
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
                    <a href=\"{{ path('fadco_espace_distributeur_reabo_complement') }}\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour à la liste\"/></a>
                    {% if app.user.type == \"admin\" or app.user.type == \"super_admin\" %}
                        {% if entity.dateEcheance is null %}
                            <a href=\"#\" onclick=\"valideForm(this);\" data-url=\"{{ path('fadco_espace_distributeur_reabo_complement_valider',{'id': entity.id}) }}\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Valider\"/></a>
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

{% endblock %}", "FadcoBundle:Distributeur:show-reabo-complement.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\src\\FadcoBundle/Resources/views/Distributeur/show-reabo-complement.html.twig");
    }
}
