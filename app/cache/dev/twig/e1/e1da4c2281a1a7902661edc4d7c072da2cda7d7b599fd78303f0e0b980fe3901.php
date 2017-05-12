<?php

/* FadcoBundle:Statistique:count.html.twig */
class __TwigTemplate_b91e8102f2b3cdfd9350f6aca68928173e84af4dc737aa9616ef6c133e1022c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be166575b4c80c9ba742cdf0da639a463425d9d6fb86bb47fc5e10cd1ccb5a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be166575b4c80c9ba742cdf0da639a463425d9d6fb86bb47fc5e10cd1ccb5a91->enter($__internal_be166575b4c80c9ba742cdf0da639a463425d9d6fb86bb47fc5e10cd1ccb5a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Statistique:count.html.twig"));

        // line 1
        if ((array_key_exists("type", $context) && (($context["type"] ?? $this->getContext($context, "type")) == "vente"))) {
            // line 2
            echo "    ";
            $context["startDate"] = twig_date_format_filter($this->env, ($context["startDate"] ?? $this->getContext($context, "startDate")), "Y-m-d");
            // line 3
            echo "    ";
            $context["endDate"] = twig_date_format_filter($this->env, ($context["endDate"] ?? $this->getContext($context, "endDate")), "Y-m-d");
            // line 4
            echo "    <div style=\"display: inline-block;\">
        <form name=\"form_distributeur\" method=\"post\" action=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_page_distributeur", array("type" => ($context["type"] ?? $this->getContext($context, "type")))), "html", null, true);
            echo "\">
            <select name=\"form_distributeur[distributeur]\" class=\"select2 form-control\">
                <option>Sélectionner un distributeur</option>
                ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["distributeurs"] ?? $this->getContext($context, "distributeurs")));
            foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                // line 9
                echo "                    ";
                if (((array_key_exists("distributeur", $context) &&  !twig_test_empty(($context["distributeur"] ?? $this->getContext($context, "distributeur")))) && ($this->getAttribute($this->getAttribute(($context["distributeur"] ?? $this->getContext($context, "distributeur")), 0, array(), "array"), "id", array()) == $this->getAttribute($context["d"], "id", array())))) {
                    // line 10
                    echo "                        <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "id", array()), "html", null, true);
                    echo "\" selected=\"selected\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "name", array()), "html", null, true);
                    echo "</option>
                    ";
                } else {
                    // line 12
                    echo "                        <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "name", array()), "html", null, true);
                    echo "</option>
                    ";
                }
                // line 14
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "            </select>
            <button type=\"submit\" class=\"btn btn-success btn-xs\" style=\"height: 25px;\"><i class=\"fa fa-search\"></i></button>
        </form>
        ";
            // line 22
            echo "    </div>
    ";
            // line 23
            if (((array_key_exists("nom", $context) && (null === ($context["nom"] ?? $this->getContext($context, "nom")))) && twig_test_empty(($context["nom"] ?? $this->getContext($context, "nom"))))) {
                // line 24
                echo "        ";
                $context["nom"] = "nom";
                // line 25
                echo "    ";
            }
            // line 26
            echo "    ";
            if (((array_key_exists("prenom", $context) && (null === ($context["prenom"] ?? $this->getContext($context, "prenom")))) && twig_test_empty(($context["prenom"] ?? $this->getContext($context, "prenom"))))) {
                // line 27
                echo "        ";
                $context["nom"] = "prenom";
                // line 28
                echo "    ";
            }
            // line 29
            echo "    <div style=\"display: inline-block;\" class=\"pull-right\">
        <a href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire");
            echo "\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour\"/></a>
        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("export_excel_vente", array("startDate" => ($context["startDate"] ?? $this->getContext($context, "startDate")), "endDate" => ($context["endDate"] ?? $this->getContext($context, "endDate")), "nom" => ($context["nom"] ?? $this->getContext($context, "nom")), "prenom" => ($context["prenom"] ?? $this->getContext($context, "prenom")))), "html", null, true);
            echo "\"><input type=\"button\" class=\"btn btn-primary btn-xs\"value=\"Exporter en excel\"/></a>
    </div>
    <div class=\"table-responsive mailbox-messages\">
        <table id=\"vente\" class=\"table table-bordered table-striped\">
            <thead>
                <tr>
                    <th style=\"text-align: center;\">Nom</th>
                    ";
            // line 38
            if ((($context["byDate"] ?? $this->getContext($context, "byDate")) == true)) {
                // line 39
                echo "                    <th style=\"text-align: center;\">Prenom</th>
                    <th style=\"text-align: center;\">Abonne</th>
                    <th style=\"text-align: center;\">Date</th>
                    ";
            }
            // line 43
            echo "                    <th style=\"text-align: center;\">Total</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["entities"] ?? $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 48
                echo "                    <tr>
                        <td style=\"text-align: center;\">";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
                echo "</td>
                        ";
                // line 50
                if ((($context["byDate"] ?? $this->getContext($context, "byDate")) == true)) {
                    // line 51
                    echo "                        <td style=\"text-align: center;\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
                    echo "</td>
                        <td style=\"text-align: center;\">";
                    // line 52
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "abonne", array()), "html", null, true);
                    echo "</td>
                        <td style=\"text-align: center;\">";
                    // line 53
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "d/m/Y"), "html", null, true);
                    echo "</td>
                        ";
                }
                // line 55
                echo "                        <td style=\"text-align: center;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "Total", array()), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "            </tbody>
        </table>
    </div>
";
        } else {
            // line 62
            echo "    ";
            $context["nb"] = 0;
            // line 63
            echo "    ";
            // line 64
            echo "    <div class=\"row\">
    ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["entities"] ?? $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 66
                echo "        ";
                $context["nb"] = (($context["nb"] ?? $this->getContext($context, "nb")) + 1);
                // line 67
                echo "            <div class=\"col-lg-3 col-xs-6\">
            <!-- small box -->
            <div class=\"small-box bg-green\">
                <div class=\"inner\">
                <h3>";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "value", array()), "html", null, true);
                echo "</h3>

                <p>";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "label", array()), "html", null, true);
                echo "</p>
                </div>
                <div class=\"icon\">
                <i class=\"ion ion-bag\"></i>
                </div>
                ";
                // line 79
                echo "            </div>
            </div>
            <!-- ./col -->
        ";
                // line 82
                if (((($context["nb"] ?? $this->getContext($context, "nb")) % 4) == 0)) {
                    // line 83
                    echo "        </div>
            ";
                    // line 84
                    if ((($context["nb"] ?? $this->getContext($context, "nb")) < twig_length_filter($this->env, ($context["entities"] ?? $this->getContext($context, "entities"))))) {
                        // line 85
                        echo "                <div class=\"row\">
            ";
                    }
                    // line 87
                    echo "        ";
                } else {
                    // line 88
                    echo "            ";
                    if ((($context["nb"] ?? $this->getContext($context, "nb")) == twig_length_filter($this->env, ($context["entities"] ?? $this->getContext($context, "entities"))))) {
                        // line 89
                        echo "                </div>
            ";
                    }
                    // line 91
                    echo "        ";
                }
                // line 92
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "    ";
        }
        
        $__internal_be166575b4c80c9ba742cdf0da639a463425d9d6fb86bb47fc5e10cd1ccb5a91->leave($__internal_be166575b4c80c9ba742cdf0da639a463425d9d6fb86bb47fc5e10cd1ccb5a91_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Statistique:count.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 93,  230 => 92,  227 => 91,  223 => 89,  220 => 88,  217 => 87,  213 => 85,  211 => 84,  208 => 83,  206 => 82,  201 => 79,  193 => 73,  188 => 71,  182 => 67,  179 => 66,  175 => 65,  172 => 64,  170 => 63,  167 => 62,  161 => 58,  151 => 55,  146 => 53,  142 => 52,  137 => 51,  135 => 50,  131 => 49,  128 => 48,  124 => 47,  118 => 43,  112 => 39,  110 => 38,  100 => 31,  96 => 30,  93 => 29,  90 => 28,  87 => 27,  84 => 26,  81 => 25,  78 => 24,  76 => 23,  73 => 22,  68 => 15,  62 => 14,  54 => 12,  46 => 10,  43 => 9,  39 => 8,  33 => 5,  30 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if type is defined and type == \"vente\" %}
    {% set startDate = startDate | date('Y-m-d') %}
    {% set endDate = endDate | date('Y-m-d') %}
    <div style=\"display: inline-block;\">
        <form name=\"form_distributeur\" method=\"post\" action=\"{{ path('main_page_distributeur',{ 'type': type }) }}\">
            <select name=\"form_distributeur[distributeur]\" class=\"select2 form-control\">
                <option>Sélectionner un distributeur</option>
                {% for d in distributeurs %}
                    {% if distributeur is defined and distributeur is not empty and distributeur[0].id == d.id %}
                        <option value=\"{{ d.id }}\" selected=\"selected\">{{ d.name }}</option>
                    {% else %}
                        <option value=\"{{ d.id }}\">{{ d.name }}</option>
                    {% endif %}
                {% endfor %}
            </select>
            <button type=\"submit\" class=\"btn btn-success btn-xs\" style=\"height: 25px;\"><i class=\"fa fa-search\"></i></button>
        </form>
        {#<div id=\"reportrange-1\" style=\"display: inline; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%; font-size: 0.8em; font-weight: normal;\">        
            <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>&nbsp;
            <span>{{ start }} - {{ end }}</span> <b class=\"caret\"></b>
        </div>#}
    </div>
    {% if nom is defined and nom is null and nom is empty %}
        {% set nom = 'nom' %}
    {% endif %}
    {% if prenom is defined and prenom is null and prenom is empty %}
        {% set nom = 'prenom' %}
    {% endif %}
    <div style=\"display: inline-block;\" class=\"pull-right\">
        <a href=\"{{ path('grh_prestataire') }}\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour\"/></a>
        <a href=\"{{ path('export_excel_vente', {'startDate': startDate, 'endDate': endDate,'nom': nom, 'prenom': prenom }) }}\"><input type=\"button\" class=\"btn btn-primary btn-xs\"value=\"Exporter en excel\"/></a>
    </div>
    <div class=\"table-responsive mailbox-messages\">
        <table id=\"vente\" class=\"table table-bordered table-striped\">
            <thead>
                <tr>
                    <th style=\"text-align: center;\">Nom</th>
                    {% if byDate == true %}
                    <th style=\"text-align: center;\">Prenom</th>
                    <th style=\"text-align: center;\">Abonne</th>
                    <th style=\"text-align: center;\">Date</th>
                    {% endif %}
                    <th style=\"text-align: center;\">Total</th>
                </tr>
            </thead>
            <tbody>
                {% for entity in entities %}
                    <tr>
                        <td style=\"text-align: center;\">{{ entity.nom }}</td>
                        {% if byDate == true %}
                        <td style=\"text-align: center;\">{{ entity.prenom }}</td>
                        <td style=\"text-align: center;\">{{ entity.abonne }}</td>
                        <td style=\"text-align: center;\">{{ entity.date|date('d/m/Y') }}</td>
                        {% endif %}
                        <td style=\"text-align: center;\">{{ entity.Total }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
{% else %}
    {% set nb = 0 %}
    {#{{ dump(entities) }}#}
    <div class=\"row\">
    {% for entity in entities %}
        {% set nb =  nb + 1 %}
            <div class=\"col-lg-3 col-xs-6\">
            <!-- small box -->
            <div class=\"small-box bg-green\">
                <div class=\"inner\">
                <h3>{{ entity.value }}</h3>

                <p>{{ entity.label }}</p>
                </div>
                <div class=\"icon\">
                <i class=\"ion ion-bag\"></i>
                </div>
                {#<a href=\"#\" class=\"small-box-footer\">More info <i class=\"fa fa-arrow-circle-right\"></i></a>#}
            </div>
            </div>
            <!-- ./col -->
        {% if nb%4 == 0 %}
        </div>
            {% if nb < entities|length %}
                <div class=\"row\">
            {% endif %}
        {% else %}
            {% if nb == entities|length %}
                </div>
            {% endif %}
        {% endif %}
    {% endfor %}
    {#{% if nb > 0 %}
        <span class='badge label-danger'>
                {{ nb }}
        </span>
    {% endif %}#}
{% endif %}", "FadcoBundle:Statistique:count.html.twig", "/var/www/html/fadcoplus/src/FadcoBundle/Resources/views/Statistique/count.html.twig");
    }
}
