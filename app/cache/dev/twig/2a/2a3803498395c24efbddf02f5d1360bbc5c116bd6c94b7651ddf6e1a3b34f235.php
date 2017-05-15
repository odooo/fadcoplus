<?php

/* FadcoBundle:Distributeur:index-reabo-complement.html.twig */
class __TwigTemplate_cd8e4bb53077c9d2e107eee3d8c21049a25831995269c8a6c561a8e674c3a675 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FadcoBundle:Default:menu.html.twig", "FadcoBundle:Distributeur:index-reabo-complement.html.twig", 1);
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
        $__internal_a9e740f250a6d7f843d138fbc5a06f4a3dd8da74f8d169067ee01958265821f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9e740f250a6d7f843d138fbc5a06f4a3dd8da74f8d169067ee01958265821f6->enter($__internal_a9e740f250a6d7f843d138fbc5a06f4a3dd8da74f8d169067ee01958265821f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Distributeur:index-reabo-complement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9e740f250a6d7f843d138fbc5a06f4a3dd8da74f8d169067ee01958265821f6->leave($__internal_a9e740f250a6d7f843d138fbc5a06f4a3dd8da74f8d169067ee01958265821f6_prof);

    }

    // line 3
    public function block_contentHeader($context, array $blocks = array())
    {
        $__internal_474a9f4e8cdd97ec59ccc1819c990c7a0c749194ffb052cf603ed82561846bb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_474a9f4e8cdd97ec59ccc1819c990c7a0c749194ffb052cf603ed82561846bb5->enter($__internal_474a9f4e8cdd97ec59ccc1819c990c7a0c749194ffb052cf603ed82561846bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentHeader"));

        
        $__internal_474a9f4e8cdd97ec59ccc1819c990c7a0c749194ffb052cf603ed82561846bb5->leave($__internal_474a9f4e8cdd97ec59ccc1819c990c7a0c749194ffb052cf603ed82561846bb5_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_234246acf2963a03c899679f3df26139f6edc6ee9038ae8ec5c8c39090f9ade3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_234246acf2963a03c899679f3df26139f6edc6ee9038ae8ec5c8c39090f9ade3->enter($__internal_234246acf2963a03c899679f3df26139f6edc6ee9038ae8ec5c8c39090f9ade3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FADCO+ : compléments";
        
        $__internal_234246acf2963a03c899679f3df26139f6edc6ee9038ae8ec5c8c39090f9ade3->leave($__internal_234246acf2963a03c899679f3df26139f6edc6ee9038ae8ec5c8c39090f9ade3_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_2ac9c96a2dd1564d891d786b11495f288dca8fbbb94617ac4be2075f98837235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac9c96a2dd1564d891d786b11495f288dca8fbbb94617ac4be2075f98837235->enter($__internal_2ac9c96a2dd1564d891d786b11495f288dca8fbbb94617ac4be2075f98837235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h4>Liste des compléménts sur réabonnements directs</h4>

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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo_complement_new");
            echo "\"><button type=\"button\" class=\"btn btn-success\">Effectuer un complément </button></a>
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
                            <th style=\"text-align:center;\">Offre</th>
                            <th style=\"text-align:center;\">Complément vers</th>
                            <th style=\"text-align:center;\">Montant</th>
                            <th style=\"text-align:center;\">Date complément</th>
                            <th style=\"text-align:center;\">Date échéance</th>
                            ";
        // line 62
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "admin") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "super_admin"))) {
            // line 63
            echo "                                <th style=\"text-align:center;\">Distributeur</th>
                                <th style=\"text-align:center;\">Status</th>
                            ";
        }
        // line 66
        echo "                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 70
        $context["c"] = 1;
        // line 71
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["complements"]) ? $context["complements"] : $this->getContext($context, "complements")));
        foreach ($context['_seq'] as $context["_key"] => $context["complement"]) {
            // line 72
            echo "                        <tr>
                            <td style=\"text-align:center;\">";
            // line 73
            echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">
                                ";
            // line 75
            if ($this->getAttribute($context["complement"], "reabo", array())) {
                // line 76
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["complement"], "reabo", array()), "abonne", array()), "html", null, true);
                echo "
                                ";
            }
            // line 78
            echo "                            </td>
                            <td style=\"text-align:center;\">
                                ";
            // line 80
            if ($this->getAttribute($context["complement"], "reabo", array())) {
                // line 81
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["complement"], "reabo", array()), "formule", array()), "html", null, true);
                if ($this->getAttribute($this->getAttribute($context["complement"], "reabo", array()), "options", array())) {
                    echo " / ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["complement"], "reabo", array()), "options", array()), "html", null, true);
                    echo " ";
                }
                // line 82
                echo "                                ";
            }
            // line 83
            echo "                            </td>
                            <td style=\"text-align:center;\">
                                ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["complement"], "formule", array()), "html", null, true);
            if ($this->getAttribute($context["complement"], "options", array())) {
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["complement"], "options", array()), "html", null, true);
            }
            // line 86
            echo "                            </td>
                            <td style=\"text-align:center;\">";
            // line 87
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["complement"], "montant", array()), 0, ".", " "), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 88
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["complement"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 89
            if ($this->getAttribute($context["complement"], "dateEcheance", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["complement"], "dateEcheance", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
                            ";
            // line 90
            if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "admin") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "super_admin"))) {
                // line 91
                echo "                                <td style=\"text-align:center;\">
                                    ";
                // line 92
                if ($this->getAttribute($context["complement"], "distributeur", array())) {
                    // line 93
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["complement"], "distributeur", array()), "name", array()), "html", null, true);
                    echo "
                                    ";
                }
                // line 95
                echo "                                </td>
                                <td style=\"text-align:center;\">
                                    ";
                // line 97
                if ($this->getAttribute($context["complement"], "dateEcheance", array())) {
                    // line 98
                    echo "                                        <span class=\"btn btn-info btn-xs\">Validé</span>
                                    ";
                } else {
                    // line 100
                    echo "                                        <span class=\"btn btn-danger btn-xs\">En attente</span>
                                    ";
                }
                // line 102
                echo "                                </td>
                            ";
            }
            // line 104
            echo "                            
                                <td>
                                    <div class=\"input-group btn\">
                                        <button type=\"button\" class=\"btn btn-success btn-xs   dropdown-toggle pull-right\" data-toggle=\"dropdown\">
                                            Actions  <span class=\"fa fa-caret-down\"></span>
                                        </button>
                                        <ul class=\"dropdown-menu dropdown-menu-right\">
                                            <li>
                                                <a href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo_complement_show", array("id" => $this->getAttribute($context["complement"], "id", array()))), "html", null, true);
            echo "\">Afficher</a>
                                            </li>                                                                    
                                        </ul>
                                    </div>
                                </td>
                            
                        </tr>
                        ";
            // line 119
            $context["c"] = ((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")) + 1);
            // line 120
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['complement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "                    </tbody>
                </table>
            </div> <!-- End div box-body -->
        </div> <!-- End div box-primary -->

        ";
        // line 126
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "distributeur")) {
            // line 127
            echo "            <div class=\"box box-primary\">
                <div class=\"box-body\">
                    <div align=\"left\">
                        <a href=\"";
            // line 130
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo_complement_new");
            echo "\"><button type=\"button\" class=\"btn btn-success\">Effectuer un complément </button></a>
                    </div>
                </div>
            </div> <!-- End div box-primary -->
        ";
        }
        // line 135
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
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle//plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/datatables/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <script>
        \$(function () {});
    </script>


";
        
        $__internal_2ac9c96a2dd1564d891d786b11495f288dca8fbbb94617ac4be2075f98837235->leave($__internal_2ac9c96a2dd1564d891d786b11495f288dca8fbbb94617ac4be2075f98837235_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Distributeur:index-reabo-complement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 167,  334 => 166,  301 => 135,  293 => 130,  288 => 127,  286 => 126,  279 => 121,  273 => 120,  271 => 119,  261 => 112,  251 => 104,  247 => 102,  243 => 100,  239 => 98,  237 => 97,  233 => 95,  227 => 93,  225 => 92,  222 => 91,  220 => 90,  214 => 89,  210 => 88,  206 => 87,  203 => 86,  197 => 85,  193 => 83,  190 => 82,  182 => 81,  180 => 80,  176 => 78,  170 => 76,  168 => 75,  163 => 73,  160 => 72,  155 => 71,  153 => 70,  147 => 66,  142 => 63,  140 => 62,  116 => 40,  104 => 30,  100 => 27,  96 => 26,  91 => 24,  79 => 15,  73 => 11,  71 => 10,  65 => 6,  59 => 5,  47 => 4,  36 => 3,  11 => 1,);
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
{% block title %}FADCO+ : compléments{% endblock %}
{% block content%}
    <h4>Liste des compléménts sur réabonnements directs</h4>

    <section class=\"content\">
        
        {% if app.user.type == \"distributeur\" %}
            <div class=\"box box-primary\">
                <div class=\"box box-primary\">
                    <div class=\"box-body\">
                        <div align=\"right\">
                            <a href=\"{{ path('fadco_espace_distributeur_reabo_complement_new') }}\"><button type=\"button\" class=\"btn btn-success\">Effectuer un complément </button></a>
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
                            <th style=\"text-align:center;\">Offre</th>
                            <th style=\"text-align:center;\">Complément vers</th>
                            <th style=\"text-align:center;\">Montant</th>
                            <th style=\"text-align:center;\">Date complément</th>
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
                    {% for complement in complements %}
                        <tr>
                            <td style=\"text-align:center;\">{{ c }}</td>
                            <td style=\"text-align:center;\">
                                {% if complement.reabo %}
                                    {{ complement.reabo.abonne }}
                                {% endif %}
                            </td>
                            <td style=\"text-align:center;\">
                                {% if complement.reabo %}
                                    {{ complement.reabo.formule }}{% if complement.reabo.options %} / {{ complement.reabo.options }} {% endif%}
                                {% endif %}
                            </td>
                            <td style=\"text-align:center;\">
                                {{ complement.formule }}{% if complement.options %} / {{ complement.options }}{% endif %}
                            </td>
                            <td style=\"text-align:center;\">{{ complement.montant|number_format(0,'.',' ') }}</td>
                            <td style=\"text-align:center;\">{{ complement.date|date('d/m/Y') }}</td>
                            <td style=\"text-align:center;\">{% if complement.dateEcheance %}{{ complement.dateEcheance|date('d/m/Y') }}{% endif %}</td>
                            {% if app.user.type == \"admin\" or app.user.type == \"super_admin\" %}
                                <td style=\"text-align:center;\">
                                    {% if complement.distributeur %}
                                        {{ complement.distributeur.name }}
                                    {% endif %}
                                </td>
                                <td style=\"text-align:center;\">
                                    {% if complement.dateEcheance %}
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
                                                <a href=\"{{ path('fadco_espace_distributeur_reabo_complement_show', {'id': complement.id}) }}\">Afficher</a>
                                            </li>                                                                    
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
                        <a href=\"{{ path('fadco_espace_distributeur_reabo_complement_new') }}\"><button type=\"button\" class=\"btn btn-success\">Effectuer un complément </button></a>
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


{% endblock %}", "FadcoBundle:Distributeur:index-reabo-complement.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\src\\FadcoBundle/Resources/views/Distributeur/index-reabo-complement.html.twig");
    }
}
