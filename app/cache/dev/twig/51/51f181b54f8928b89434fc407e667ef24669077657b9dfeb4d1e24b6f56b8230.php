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
        $__internal_25290bd56ad7ef2c9d539f555c8aa630a6a1e2d11fdc5b819666db6d500684db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25290bd56ad7ef2c9d539f555c8aa630a6a1e2d11fdc5b819666db6d500684db->enter($__internal_25290bd56ad7ef2c9d539f555c8aa630a6a1e2d11fdc5b819666db6d500684db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Distributeur:index-reabo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25290bd56ad7ef2c9d539f555c8aa630a6a1e2d11fdc5b819666db6d500684db->leave($__internal_25290bd56ad7ef2c9d539f555c8aa630a6a1e2d11fdc5b819666db6d500684db_prof);

    }

    // line 3
    public function block_contentHeader($context, array $blocks = array())
    {
        $__internal_54176a8f459aef3f7fb19c50ea8c9617958d34f04508e8de3dd9df04cb4bfdad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54176a8f459aef3f7fb19c50ea8c9617958d34f04508e8de3dd9df04cb4bfdad->enter($__internal_54176a8f459aef3f7fb19c50ea8c9617958d34f04508e8de3dd9df04cb4bfdad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentHeader"));

        
        $__internal_54176a8f459aef3f7fb19c50ea8c9617958d34f04508e8de3dd9df04cb4bfdad->leave($__internal_54176a8f459aef3f7fb19c50ea8c9617958d34f04508e8de3dd9df04cb4bfdad_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8e2df5b3fb98f344895f88fd70e187a0c6dc46836c46d60e8c533c3a85ae4f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8e2df5b3fb98f344895f88fd70e187a0c6dc46836c46d60e8c533c3a85ae4f7->enter($__internal_c8e2df5b3fb98f344895f88fd70e187a0c6dc46836c46d60e8c533c3a85ae4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FADCO+ : Réabo. direct";
        
        $__internal_c8e2df5b3fb98f344895f88fd70e187a0c6dc46836c46d60e8c533c3a85ae4f7->leave($__internal_c8e2df5b3fb98f344895f88fd70e187a0c6dc46836c46d60e8c533c3a85ae4f7_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_794e9643f58eda9a0695fd3cfdd64bede34ad44ae1ebc1ba5caac32a1b6ad285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_794e9643f58eda9a0695fd3cfdd64bede34ad44ae1ebc1ba5caac32a1b6ad285->enter($__internal_794e9643f58eda9a0695fd3cfdd64bede34ad44ae1ebc1ba5caac32a1b6ad285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                            <th style=\"text-align:center;\">N° Abonné</th>
                            <th style=\"text-align:center;\">N° carte</th>
                            <th style=\"text-align:center;\">N° mobile</th>
                            <th style=\"text-align:center;\">Formule</th>
                            <th style=\"text-align:center;\">Durée</th>
                            <th style=\"text-align:center;\">Option</th>
                            <th style=\"text-align:center;\">Montant</th>
                            <th style=\"text-align:center;\">Date réabo.</th>
                            <th style=\"text-align:center;\">Date échéance</th>
                            ";
        // line 66
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "admin") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "super_admin"))) {
            // line 67
            echo "                                <th style=\"text-align:center;\">Distributeur</th>
                                <th style=\"text-align:center;\">Status</th>
                            ";
        }
        // line 70
        echo "                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 74
        $context["c"] = 1;
        // line 75
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reabos"]) ? $context["reabos"] : $this->getContext($context, "reabos")));
        foreach ($context['_seq'] as $context["_key"] => $context["reabo"]) {
            // line 76
            echo "                        <tr>
                            <td style=\"text-align:center;\">";
            // line 77
            echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["reabo"], "abonne", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["reabo"], "numeroAbonne", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["reabo"], "numeroCarte", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["reabo"], "contact", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["reabo"], "formule", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["reabo"], "duree", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["reabo"], "options", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 85
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["reabo"], "montant", array()), 0, ".", " "), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 86
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reabo"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 87
            if ($this->getAttribute($context["reabo"], "dateEcheance", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reabo"], "dateEcheance", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
                            ";
            // line 88
            if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "admin") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "super_admin"))) {
                // line 89
                echo "                                <td style=\"text-align:center;\">";
                if ($this->getAttribute($context["reabo"], "distributeur", array())) {
                    // line 90
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reabo"], "distributeur", array()), "name", array()), "html", null, true);
                    echo "
                                    ";
                }
                // line 92
                echo "                                </td>
                                <td style=\"text-align:center;\">";
                // line 93
                if ($this->getAttribute($context["reabo"], "dateEcheance", array())) {
                    // line 94
                    echo "                                        <span class=\"btn btn-info btn-xs\">Validé</span>
                                    ";
                } else {
                    // line 96
                    echo "                                        <span class=\"btn btn-danger btn-xs\">En attente</span>
                                    ";
                }
                // line 98
                echo "                                </td>
                            ";
            }
            // line 100
            echo "                            
                                <td>
                                    <div class=\"input-group btn\">
                                        <button type=\"button\" class=\"btn btn-success btn-xs   dropdown-toggle pull-right\" data-toggle=\"dropdown\">
                                            Actions  <span class=\"fa fa-caret-down\"></span>
                                        </button>
                                        <ul class=\"dropdown-menu dropdown-menu-right\">
                                            <li>
                                                <a href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo_show", array("id" => $this->getAttribute($context["reabo"], "id", array()))), "html", null, true);
            echo "\">Afficher</a>
                                            </li> 
                                            ";
            // line 110
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "distributeur")) {
                // line 111
                echo "                                                <li>
                                                    <a href=\"";
                // line 112
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo_renew", array("id" => $this->getAttribute($context["reabo"], "id", array()))), "html", null, true);
                echo "\">Renouveler cette offre</a>
                                                </li>
                                            ";
            }
            // line 115
            echo "                                                                      
                                        </ul>
                                    </div>
                                </td>
                            
                        </tr>
                        ";
            // line 121
            $context["c"] = ((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")) + 1);
            // line 122
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reabo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                    </tbody>
                </table>
            </div> <!-- End div box-body -->
        </div> <!-- End div box-primary -->

        ";
        // line 128
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "distributeur")) {
            // line 129
            echo "            <div class=\"box box-primary\">
                <div class=\"box-body\">
                    <div align=\"left\">
                        <a href=\"";
            // line 132
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo_new");
            echo "\"><button type=\"button\" class=\"btn btn-success\">Effectuer un réabonnement direct </button></a>
                    </div>
                </div>
            </div> <!-- End div box-primary -->
        ";
        }
        // line 137
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
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle//plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/datatables/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <script>
        \$(function () {});
    </script>


";
        
        $__internal_794e9643f58eda9a0695fd3cfdd64bede34ad44ae1ebc1ba5caac32a1b6ad285->leave($__internal_794e9643f58eda9a0695fd3cfdd64bede34ad44ae1ebc1ba5caac32a1b6ad285_prof);

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
        return array (  342 => 169,  338 => 168,  305 => 137,  297 => 132,  292 => 129,  290 => 128,  283 => 123,  277 => 122,  275 => 121,  267 => 115,  261 => 112,  258 => 111,  256 => 110,  251 => 108,  241 => 100,  237 => 98,  233 => 96,  229 => 94,  227 => 93,  224 => 92,  218 => 90,  215 => 89,  213 => 88,  207 => 87,  203 => 86,  199 => 85,  195 => 84,  191 => 83,  187 => 82,  183 => 81,  179 => 80,  175 => 79,  171 => 78,  167 => 77,  164 => 76,  159 => 75,  157 => 74,  151 => 70,  146 => 67,  144 => 66,  116 => 40,  104 => 30,  100 => 27,  96 => 26,  91 => 24,  79 => 15,  73 => 11,  71 => 10,  65 => 6,  59 => 5,  47 => 4,  36 => 3,  11 => 1,);
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
                            <th style=\"text-align:center;\">N° Abonné</th>
                            <th style=\"text-align:center;\">N° carte</th>
                            <th style=\"text-align:center;\">N° mobile</th>
                            <th style=\"text-align:center;\">Formule</th>
                            <th style=\"text-align:center;\">Durée</th>
                            <th style=\"text-align:center;\">Option</th>
                            <th style=\"text-align:center;\">Montant</th>
                            <th style=\"text-align:center;\">Date réabo.</th>
                            <th style=\"text-align:center;\">Date échéance</th>
                            {% if app.user.type == \"admin\" or app.user.type == \"super_admin\" %}
                                <th style=\"text-align:center;\">Distributeur</th>
                                <th style=\"text-align:center;\">Status</th>
                            {% endif %}
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% set c = 1 %}
                    {% for reabo in reabos %}
                        <tr>
                            <td style=\"text-align:center;\">{{ c }}</td>
                            <td style=\"text-align:center;\">{{ reabo.abonne }}</td>
                            <td style=\"text-align:center;\">{{ reabo.numeroAbonne }}</td>
                            <td style=\"text-align:center;\">{{ reabo.numeroCarte }}</td>
                            <td style=\"text-align:center;\">{{ reabo.contact }}</td>
                            <td style=\"text-align:center;\">{{ reabo.formule }}</td>
                            <td style=\"text-align:center;\">{{ reabo.duree }}</td>
                            <td style=\"text-align:center;\">{{ reabo.options }}</td>
                            <td style=\"text-align:center;\">{{ reabo.montant|number_format(0,'.',' ') }}</td>
                            <td style=\"text-align:center;\">{{ reabo.date|date('d/m/Y') }}</td>
                            <td style=\"text-align:center;\">{% if reabo.dateEcheance %}{{ reabo.dateEcheance|date('d/m/Y') }}{% endif %}</td>
                            {% if app.user.type == \"admin\" or app.user.type == \"super_admin\" %}
                                <td style=\"text-align:center;\">{% if reabo.distributeur %}
                                        {{ reabo.distributeur.name }}
                                    {% endif %}
                                </td>
                                <td style=\"text-align:center;\">{% if reabo.dateEcheance %}
                                        <span class=\"btn btn-info btn-xs\">Validé</span>
                                    {% else %}
                                        <span class=\"btn btn-danger btn-xs\">En attente</span>
                                    {% endif %}
                                </td>
                            {% endif %}
                            
                                <td>
                                    <div class=\"input-group btn\">
                                        <button type=\"button\" class=\"btn btn-success btn-xs   dropdown-toggle pull-right\" data-toggle=\"dropdown\">
                                            Actions  <span class=\"fa fa-caret-down\"></span>
                                        </button>
                                        <ul class=\"dropdown-menu dropdown-menu-right\">
                                            <li>
                                                <a href=\"{{ path('fadco_espace_distributeur_reabo_show', {'id': reabo.id}) }}\">Afficher</a>
                                            </li> 
                                            {% if app.user.type == \"distributeur\" %}
                                                <li>
                                                    <a href=\"{{ path('fadco_espace_distributeur_reabo_renew', {'id': reabo.id}) }}\">Renouveler cette offre</a>
                                                </li>
                                            {% endif %}
                                                                      
                                        </ul>
                                    </div>
                                </td>
                            
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
