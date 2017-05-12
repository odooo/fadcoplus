<?php

/* FadcoBundle:Statistique:count.html.twig */
class __TwigTemplate_2172c53ba349fbd412c3ca4b7327e9ee8a5efcd7ba555d04be7c2e23f47be967 extends Twig_Template
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
        $__internal_779e16077d0552167d1c96acdca919478259e2ab8ae74d5fbe83550c8c5dff34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_779e16077d0552167d1c96acdca919478259e2ab8ae74d5fbe83550c8c5dff34->enter($__internal_779e16077d0552167d1c96acdca919478259e2ab8ae74d5fbe83550c8c5dff34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Statistique:count.html.twig"));

        // line 1
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "vente"))) {
            // line 2
            echo "
    ";
            // line 3
            $context["startDate"] = twig_date_format_filter($this->env, (isset($context["startDate"]) ? $context["startDate"] : $this->getContext($context, "startDate")), "Y-m-d");
            // line 4
            echo "    ";
            $context["endDate"] = twig_date_format_filter($this->env, (isset($context["endDate"]) ? $context["endDate"] : $this->getContext($context, "endDate")), "Y-m-d");
            // line 5
            echo "    <div style=\"display: inline-block;\">
        <form name=\"form_distributeur\" method=\"post\" action=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_page_distributeur", array("type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))), "html", null, true);
            echo "\">
            <select name=\"form_distributeur[distributeur]\" class=\"select2 form-control\">
                <option>Sélectionner un distributeur</option>
                ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["distributeurs"]) ? $context["distributeurs"] : $this->getContext($context, "distributeurs")));
            foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                // line 10
                echo "                    ";
                if (((array_key_exists("distributeur", $context) &&  !twig_test_empty((isset($context["distributeur"]) ? $context["distributeur"] : $this->getContext($context, "distributeur")))) && ($this->getAttribute($this->getAttribute((isset($context["distributeur"]) ? $context["distributeur"] : $this->getContext($context, "distributeur")), 0, array(), "array"), "id", array()) == $this->getAttribute($context["d"], "id", array())))) {
                    // line 11
                    echo "                        <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "id", array()), "html", null, true);
                    echo "\" selected=\"selected\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "name", array()), "html", null, true);
                    echo "</option>
                    ";
                } else {
                    // line 13
                    echo "                        <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "name", array()), "html", null, true);
                    echo "</option>
                    ";
                }
                // line 15
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "            </select>
            <button type=\"submit\" class=\"btn btn-success btn-xs\" style=\"height: 25px;\"><i class=\"fa fa-search\"></i></button>
        </form>
        ";
            // line 23
            echo "    </div>
    ";
            // line 24
            if (((array_key_exists("nom", $context) && (null === (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")))) && twig_test_empty((isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom"))))) {
                // line 25
                echo "        ";
                $context["nom"] = "nom";
                // line 26
                echo "    ";
            }
            // line 27
            echo "    ";
            if (((array_key_exists("prenom", $context) && (null === (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")))) && twig_test_empty((isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom"))))) {
                // line 28
                echo "        ";
                $context["nom"] = "prenom";
                // line 29
                echo "    ";
            }
            // line 30
            echo "    <div style=\"display: inline-block;\" class=\"pull-right\">
        <a href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire");
            echo "\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour\"/></a>
        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("export_excel_vente", array("startDate" => (isset($context["startDate"]) ? $context["startDate"] : $this->getContext($context, "startDate")), "endDate" => (isset($context["endDate"]) ? $context["endDate"] : $this->getContext($context, "endDate")), "nom" => (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "prenom" => (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")))), "html", null, true);
            echo "\"><input type=\"button\" class=\"btn btn-primary btn-xs\"value=\"Exporter en excel\"/></a>
    </div>
    <div class=\"table-responsive mailbox-messages\">
        <table id=\"vente\" class=\"table table-bordered table-striped\">
            <thead>
                <tr>
                    <th style=\"text-align: center;\">Nom</th>
                    ";
            // line 39
            if (((isset($context["byDate"]) ? $context["byDate"] : $this->getContext($context, "byDate")) == true)) {
                // line 40
                echo "                        <th style=\"text-align: center;\">Prenom</th>
                        ";
                // line 43
                echo "                    ";
            }
            // line 44
            echo "                    <th style=\"text-align: center;\">Total</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 49
                echo "                    <tr>
                        <td style=\"text-align: center;\">";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
                echo "</td>
                        ";
                // line 51
                if (((isset($context["byDate"]) ? $context["byDate"] : $this->getContext($context, "byDate")) == true)) {
                    // line 52
                    echo "                        <td style=\"text-align: center;\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
                    echo "</td>
                        ";
                    // line 55
                    echo "                        ";
                }
                // line 56
                echo "                        <td style=\"text-align: center;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "Total", array()), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "            </tbody>
        </table>
    </div>
";
        } else {
            // line 63
            echo "    ";
            $context["nb"] = 0;
            // line 64
            echo "    ";
            // line 65
            echo "    <div class=\"row\">
    ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 67
                echo "        ";
                $context["nb"] = ((isset($context["nb"]) ? $context["nb"] : $this->getContext($context, "nb")) + 1);
                // line 68
                echo "            <div class=\"col-lg-3 col-xs-6\">
            <!-- small box -->
            <div class=\"small-box bg-green\">
                <div class=\"inner\">
                <h3>";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "value", array()), "html", null, true);
                echo "</h3>

                <p>";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "label", array()), "html", null, true);
                echo "</p>
                </div>
                <div class=\"icon\">
                <i class=\"ion ion-bag\"></i>
                </div>
                ";
                // line 80
                echo "            </div>
            </div>
            <!-- ./col -->
        ";
                // line 83
                if ((((isset($context["nb"]) ? $context["nb"] : $this->getContext($context, "nb")) % 4) == 0)) {
                    // line 84
                    echo "        </div>
            ";
                    // line 85
                    if (((isset($context["nb"]) ? $context["nb"] : $this->getContext($context, "nb")) < twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))))) {
                        // line 86
                        echo "                <div class=\"row\">
            ";
                    }
                    // line 88
                    echo "        ";
                } else {
                    // line 89
                    echo "            ";
                    if (((isset($context["nb"]) ? $context["nb"] : $this->getContext($context, "nb")) == twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))))) {
                        // line 90
                        echo "                </div>
            ";
                    }
                    // line 92
                    echo "        ";
                }
                // line 93
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "    ";
        }
        
        $__internal_779e16077d0552167d1c96acdca919478259e2ab8ae74d5fbe83550c8c5dff34->leave($__internal_779e16077d0552167d1c96acdca919478259e2ab8ae74d5fbe83550c8c5dff34_prof);

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
        return array (  232 => 94,  226 => 93,  223 => 92,  219 => 90,  216 => 89,  213 => 88,  209 => 86,  207 => 85,  204 => 84,  202 => 83,  197 => 80,  189 => 74,  184 => 72,  178 => 68,  175 => 67,  171 => 66,  168 => 65,  166 => 64,  163 => 63,  157 => 59,  147 => 56,  144 => 55,  139 => 52,  137 => 51,  133 => 50,  130 => 49,  126 => 48,  120 => 44,  117 => 43,  114 => 40,  112 => 39,  102 => 32,  98 => 31,  95 => 30,  92 => 29,  89 => 28,  86 => 27,  83 => 26,  80 => 25,  78 => 24,  75 => 23,  70 => 16,  64 => 15,  56 => 13,  48 => 11,  45 => 10,  41 => 9,  35 => 6,  32 => 5,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
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
                        {#<th style=\"text-align: center;\">Abonne</th>
                        <th style=\"text-align: center;\">Date</th>#}
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
                        {#<td style=\"text-align: center;\">{{ entity.abonne }}</td>
                        <td style=\"text-align: center;\">{{ entity.date|date('d/m/Y') }}</td>#}
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
{% endif %}", "FadcoBundle:Statistique:count.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\src\\FadcoBundle/Resources/views/Statistique/count.html.twig");
    }
}
