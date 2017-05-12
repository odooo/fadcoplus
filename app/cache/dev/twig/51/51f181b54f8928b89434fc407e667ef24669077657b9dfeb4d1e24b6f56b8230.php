<?php

/* FadcoBundle:Distributeur:index-reabo.html.twig */
class __TwigTemplate_ad5efc0cdc5ced4927460d5984271d212f6ace07af966b346b2d23e4815060ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FadcoBundle:Default:menu.html.twig", "FadcoBundle:Distributeur:index-reabo.html.twig", 1);
        $this->blocks = array(
            'contentHeader' => array($this, 'block_contentHeader'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FadcoBundle:Default:menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d5638a7b58e03628ae440db38d10f976028772819b53729c58f546e493aaaa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d5638a7b58e03628ae440db38d10f976028772819b53729c58f546e493aaaa2->enter($__internal_8d5638a7b58e03628ae440db38d10f976028772819b53729c58f546e493aaaa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Distributeur:index-reabo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d5638a7b58e03628ae440db38d10f976028772819b53729c58f546e493aaaa2->leave($__internal_8d5638a7b58e03628ae440db38d10f976028772819b53729c58f546e493aaaa2_prof);

    }

    // line 3
    public function block_contentHeader($context, array $blocks = array())
    {
        $__internal_0264bc9b043f1d0d785b74658331fcf8ef141ec0f8152e36c1dc755bc5df695c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0264bc9b043f1d0d785b74658331fcf8ef141ec0f8152e36c1dc755bc5df695c->enter($__internal_0264bc9b043f1d0d785b74658331fcf8ef141ec0f8152e36c1dc755bc5df695c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentHeader"));

        
        $__internal_0264bc9b043f1d0d785b74658331fcf8ef141ec0f8152e36c1dc755bc5df695c->leave($__internal_0264bc9b043f1d0d785b74658331fcf8ef141ec0f8152e36c1dc755bc5df695c_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e9509389b1a6a2c73b04f4b829052f32b52182fe78520b647be2edc82f49fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e9509389b1a6a2c73b04f4b829052f32b52182fe78520b647be2edc82f49fd0->enter($__internal_2e9509389b1a6a2c73b04f4b829052f32b52182fe78520b647be2edc82f49fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FADCO+ : Réabo. direct";
        
        $__internal_2e9509389b1a6a2c73b04f4b829052f32b52182fe78520b647be2edc82f49fd0->leave($__internal_2e9509389b1a6a2c73b04f4b829052f32b52182fe78520b647be2edc82f49fd0_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_4142c052229766640a0b2b0aacf6858e8e6b15a095c3953e2d2ec0add2749467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4142c052229766640a0b2b0aacf6858e8e6b15a095c3953e2d2ec0add2749467->enter($__internal_4142c052229766640a0b2b0aacf6858e8e6b15a095c3953e2d2ec0add2749467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h4>Liste des réabonnements directs</h4>

    <section class=\"content\">
        
        ";
        // line 10
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "distributeur")) {
            // line 11
            echo "            <div class=\"box box-primary\">
                <div class=\"box box-primary\">
                    <div class=\"box-body\">
                        <div align=\"right\">
                            <a href=\"";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo_new");
            echo "\"><button type=\"button\" class=\"btn btn-success\">Effectuer un réabonnement direct </button></a>
                        </div>
                    </div>
                </div>
                <div class=\"box-body\" style=\"background-color:black;\">
                    <!-- Info boxes -->
                    <div class=\"row\">
                        <div class=\"col-md-4 col-sm-6 col-xs-12\">
                            <div class=\"info-box-content\" style=\"background-color:black;\">
                                <span><img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/fadcoplus.jpg"), "html", null, true);
            echo "\" style=\"width:80px; heigth:5px;\" alt=\"edgar\"/></span>
                                
                                    <span style=\"color:green;\" class=\"info-box-number\">";
            // line 26
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "account", array()), 0, ".", " "), "html", null, true);
            echo " F</span>
                                    <span class=\"info-box-text\" style=\"color:white;\">(";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
            echo ")</span>
                                    ";
            // line 30
            echo "                                
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        ";
        }
        // line 40
        echo "

        <div class=\"box box-primary\">
            <div class=\"box-header with-border\">

                <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\">
                        <i class=\"fa fa-minus\"></i>
                    </button>
                </div>
            </div>
            <div class=\"box-body table-responsive\">
                <table id=\"lstdevis\" class=\"table table-bordered table-striped\">
                    <thead>
                        <tr>
                            <th style=\"text-align:center;\">#</th>
                            <th style=\"text-align:center;\">Abonné</th>
                            <th style=\"text-align:center;\">N° carte</th>
                            <th style=\"text-align:center;\">N° mobile</th>
                            <th style=\"text-align:center;\">Formule</th>
                            <th style=\"text-align:center;\">Durée</th>
                            <th style=\"text-align:center;\">Option</th>
                            <th style=\"text-align:center;\">Montant</th>
                            <th style=\"text-align:center;\">Date</th>
                            <th style=\"text-align:center;\">Distributeur</th>
                            ";
        // line 65
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "distributeur")) {
            echo "<th>Actions</th>";
        }
        // line 66
        echo "                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 69
        $context["c"] = 1;
        // line 70
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reabos"]) ? $context["reabos"] : $this->getContext($context, "reabos")));
        foreach ($context['_seq'] as $context["_key"] => $context["reabo"]) {
            // line 71
            echo "                        <tr>
                            <td style=\"text-align:center;\">";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["reabo"], "abonne", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["reabo"], "numeroCarte", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["reabo"], "contact", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["reabo"], "formule", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["reabo"], "duree", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["reabo"], "options", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 79
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["reabo"], "montant", array()), 0, ".", " "), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 80
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reabo"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 81
            if ($this->getAttribute($context["reabo"], "distributeur", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reabo"], "distributeur", array()), "name", array()), "html", null, true);
            }
            echo "</td>
                            ";
            // line 82
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "distributeur")) {
                // line 83
                echo "                                <td>
                                    <div class=\"input-group btn\">
                                        <button type=\"button\" class=\"btn btn-success btn-xs   dropdown-toggle pull-right\" data-toggle=\"dropdown\">
                                            Actions  <span class=\"fa fa-caret-down\"></span>
                                        </button>
                                        <ul class=\"dropdown-menu dropdown-menu-right\">
                                            <li>
                                                <a href=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo_renew", array("id" => $this->getAttribute($context["reabo"], "id", array()))), "html", null, true);
                echo "\">Renouveler cette offre</a>
                                            </li>                                        
                                        </ul>
                                    </div>
                                </td>
                            ";
            }
            // line 96
            echo "                        </tr>
                        ";
            // line 97
            $context["c"] = ((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")) + 1);
            // line 98
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reabo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                    </tbody>
                </table>
            </div> <!-- End div box-body -->
        </div> <!-- End div box-primary -->

        ";
        // line 104
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "distributeur")) {
            // line 105
            echo "            <div class=\"box box-primary\">
                <div class=\"box-body\">
                    <div align=\"left\">
                        <a href=\"";
            // line 108
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo_new");
            echo "\"><button type=\"button\" class=\"btn btn-success\">Effectuer un réabonnement direct </button></a>
                    </div>
                </div>
            </div> <!-- End div box-primary -->
        ";
        }
        // line 113
        echo "
    </section> 

        <div id='popupViewModal' class='modal fade' role='dialog'>
        <div class='modal-dialog'>
            <div class='modal-content modal-lg'>
                <div class='modal-header'>
                    <button type='button' class='close'
                            data-dismiss='modal'>&times;</button>
                </div>
                <div id='popupViewContentBox'></div>
                <div class=\"modal-footer\">
                    <div class=\"input-group pull-right\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id=\"formModal\" class=\"modal fade\" role=\"dialog\" >
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                </div>
                <div id = \"formContentBox\"></div>
            </div>
        </div>
    </div>

    <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle//plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/datatables/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <script>
        \$(function () {});
    </script>


";
        
        $__internal_4142c052229766640a0b2b0aacf6858e8e6b15a095c3953e2d2ec0add2749467->leave($__internal_4142c052229766640a0b2b0aacf6858e8e6b15a095c3953e2d2ec0add2749467_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Distributeur:index-reabo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 145,  290 => 144,  257 => 113,  249 => 108,  244 => 105,  242 => 104,  235 => 99,  229 => 98,  227 => 97,  224 => 96,  215 => 90,  206 => 83,  204 => 82,  198 => 81,  194 => 80,  190 => 79,  186 => 78,  182 => 77,  178 => 76,  174 => 75,  170 => 74,  166 => 73,  162 => 72,  159 => 71,  154 => 70,  152 => 69,  147 => 66,  143 => 65,  116 => 40,  104 => 30,  100 => 27,  96 => 26,  91 => 24,  79 => 15,  73 => 11,  71 => 10,  65 => 6,  59 => 5,  47 => 4,  36 => 3,  11 => 1,);
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

{% block contentHeader %}{% endblock %}
{% block title %}FADCO+ : Réabo. direct{% endblock %}
{% block content%}
    <h4>Liste des réabonnements directs</h4>

    <section class=\"content\">
        
        {% if app.user.type == \"distributeur\" %}
            <div class=\"box box-primary\">
                <div class=\"box box-primary\">
                    <div class=\"box-body\">
                        <div align=\"right\">
                            <a href=\"{{ path('fadco_espace_distributeur_reabo_new') }}\"><button type=\"button\" class=\"btn btn-success\">Effectuer un réabonnement direct </button></a>
                        </div>
                    </div>
                </div>
                <div class=\"box-body\" style=\"background-color:black;\">
                    <!-- Info boxes -->
                    <div class=\"row\">
                        <div class=\"col-md-4 col-sm-6 col-xs-12\">
                            <div class=\"info-box-content\" style=\"background-color:black;\">
                                <span><img src=\"{{ asset('bundles/FadcoBundle/fadcoplus.jpg') }}\" style=\"width:80px; heigth:5px;\" alt=\"edgar\"/></span>
                                
                                    <span style=\"color:green;\" class=\"info-box-number\">{{ app.user.account|number_format(0,'.',' ') }} F</span>
                                    <span class=\"info-box-text\" style=\"color:white;\">({{ app.user.name }})</span>
                                    {#<span class=\"info-box-text\" style=\"color:white;\">777777662({{ app.user.username }})</span>
                                    <span class=\"info-box-text\" style=\"color:white;\">7878787812({{ app.user.username }})</span>#}
                                
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        {% endif %}


        <div class=\"box box-primary\">
            <div class=\"box-header with-border\">

                <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\">
                        <i class=\"fa fa-minus\"></i>
                    </button>
                </div>
            </div>
            <div class=\"box-body table-responsive\">
                <table id=\"lstdevis\" class=\"table table-bordered table-striped\">
                    <thead>
                        <tr>
                            <th style=\"text-align:center;\">#</th>
                            <th style=\"text-align:center;\">Abonné</th>
                            <th style=\"text-align:center;\">N° carte</th>
                            <th style=\"text-align:center;\">N° mobile</th>
                            <th style=\"text-align:center;\">Formule</th>
                            <th style=\"text-align:center;\">Durée</th>
                            <th style=\"text-align:center;\">Option</th>
                            <th style=\"text-align:center;\">Montant</th>
                            <th style=\"text-align:center;\">Date</th>
                            <th style=\"text-align:center;\">Distributeur</th>
                            {% if app.user.type == \"distributeur\" %}<th>Actions</th>{% endif %}
                        </tr>
                    </thead>
                    <tbody>
                        {% set c = 1 %}
                    {% for reabo in reabos %}
                        <tr>
                            <td style=\"text-align:center;\">{{ c }}</td>
                            <td style=\"text-align:center;\">{{ reabo.abonne }}</td>
                            <td style=\"text-align:center;\">{{ reabo.numeroCarte }}</td>
                            <td style=\"text-align:center;\">{{ reabo.contact }}</td>
                            <td style=\"text-align:center;\">{{ reabo.formule }}</td>
                            <td style=\"text-align:center;\">{{ reabo.duree }}</td>
                            <td style=\"text-align:center;\">{{ reabo.options }}</td>
                            <td style=\"text-align:center;\">{{ reabo.montant|number_format(0,'.',' ') }}</td>
                            <td style=\"text-align:center;\">{{ reabo.date|date('d/m/Y') }}</td>
                            <td>{% if reabo.distributeur %}{{ reabo.distributeur.name }}{% endif %}</td>
                            {% if app.user.type == \"distributeur\" %}
                                <td>
                                    <div class=\"input-group btn\">
                                        <button type=\"button\" class=\"btn btn-success btn-xs   dropdown-toggle pull-right\" data-toggle=\"dropdown\">
                                            Actions  <span class=\"fa fa-caret-down\"></span>
                                        </button>
                                        <ul class=\"dropdown-menu dropdown-menu-right\">
                                            <li>
                                                <a href=\"{{ path('fadco_espace_distributeur_reabo_renew', {'id': reabo.id}) }}\">Renouveler cette offre</a>
                                            </li>                                        
                                        </ul>
                                    </div>
                                </td>
                            {% endif %}
                        </tr>
                        {% set c = c + 1 %}
                    {% endfor %}
                    </tbody>
                </table>
            </div> <!-- End div box-body -->
        </div> <!-- End div box-primary -->

        {% if app.user.type == \"distributeur\" %}
            <div class=\"box box-primary\">
                <div class=\"box-body\">
                    <div align=\"left\">
                        <a href=\"{{ path('fadco_espace_distributeur_reabo_new') }}\"><button type=\"button\" class=\"btn btn-success\">Effectuer un réabonnement direct </button></a>
                    </div>
                </div>
            </div> <!-- End div box-primary -->
        {% endif %}

    </section> 

        <div id='popupViewModal' class='modal fade' role='dialog'>
        <div class='modal-dialog'>
            <div class='modal-content modal-lg'>
                <div class='modal-header'>
                    <button type='button' class='close'
                            data-dismiss='modal'>&times;</button>
                </div>
                <div id='popupViewContentBox'></div>
                <div class=\"modal-footer\">
                    <div class=\"input-group pull-right\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id=\"formModal\" class=\"modal fade\" role=\"dialog\" >
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                </div>
                <div id = \"formContentBox\"></div>
            </div>
        </div>
    </div>

    <script src=\"{{asset('bundles/FadcoBundle//plugins/datatables/jquery.dataTables.min.js')}}\"></script>
    <script src=\"{{asset('bundles/FadcoBundle/plugins/datatables/dataTables.bootstrap.min.js')}}\"></script>

    <script>
        \$(function () {});
    </script>


{% endblock %}", "FadcoBundle:Distributeur:index-reabo.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\src\\FadcoBundle/Resources/views/Distributeur/index-reabo.html.twig");
    }
}
