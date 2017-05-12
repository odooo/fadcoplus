<?php

/* FadcoBundle:Distributeur:index-reabo.html.twig */
class __TwigTemplate_18f210d5816ada0b7e8da268bc7f5493cbaa37f96cc6c24bbfe7f16702ffcb6f extends Twig_Template
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
        $__internal_4be8505ab702104cf664e61d4a3da473b07ec74e1cbed7f1bc254df16bde90b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4be8505ab702104cf664e61d4a3da473b07ec74e1cbed7f1bc254df16bde90b9->enter($__internal_4be8505ab702104cf664e61d4a3da473b07ec74e1cbed7f1bc254df16bde90b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Distributeur:index-reabo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4be8505ab702104cf664e61d4a3da473b07ec74e1cbed7f1bc254df16bde90b9->leave($__internal_4be8505ab702104cf664e61d4a3da473b07ec74e1cbed7f1bc254df16bde90b9_prof);

    }

    // line 3
    public function block_contentHeader($context, array $blocks = array())
    {
        $__internal_775e35269cc251077dd43af7817342ec1a650a301457652c8093d090fad6d026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_775e35269cc251077dd43af7817342ec1a650a301457652c8093d090fad6d026->enter($__internal_775e35269cc251077dd43af7817342ec1a650a301457652c8093d090fad6d026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentHeader"));

        
        $__internal_775e35269cc251077dd43af7817342ec1a650a301457652c8093d090fad6d026->leave($__internal_775e35269cc251077dd43af7817342ec1a650a301457652c8093d090fad6d026_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_867d0aaf3436a264e4bbdfcacd6bfe1e07d996c385678275c2f7f020d502157a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_867d0aaf3436a264e4bbdfcacd6bfe1e07d996c385678275c2f7f020d502157a->enter($__internal_867d0aaf3436a264e4bbdfcacd6bfe1e07d996c385678275c2f7f020d502157a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FADCO+ : Réabo. direct";
        
        $__internal_867d0aaf3436a264e4bbdfcacd6bfe1e07d996c385678275c2f7f020d502157a->leave($__internal_867d0aaf3436a264e4bbdfcacd6bfe1e07d996c385678275c2f7f020d502157a_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_f513bd4106fe93f77b245275e5d6d414ce7087ea75c9f269e00ffa9883d8238a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f513bd4106fe93f77b245275e5d6d414ce7087ea75c9f269e00ffa9883d8238a->enter($__internal_f513bd4106fe93f77b245275e5d6d414ce7087ea75c9f269e00ffa9883d8238a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h4>Liste des réabonnements directs</h4>

    <section class=\"content\">
        <div class=\"box box-primary\">
            <div class=\"box box-primary\">
                <div class=\"box-body\">
                    <div align=\"right\">
                        <a href=\"";
        // line 13
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
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/fadcoplus.jpg"), "html", null, true);
        echo "\" style=\"width:80px; heigth:5px;\" alt=\"edgar\"/></span>
                            
                                <span style=\"color:green;\" class=\"info-box-number\">";
        // line 24
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "account", array()), 0, ".", " "), "html", null, true);
        echo " F</span>
                                <span class=\"info-box-text\" style=\"color:white;\">777777662(";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo ")</span>
                                <span class=\"info-box-text\" style=\"color:white;\">7878787812(";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo ")</span>
                            
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>


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
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 65
        $context["c"] = 1;
        // line 66
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reabos"] ?? $this->getContext($context, "reabos")));
        foreach ($context['_seq'] as $context["_key"] => $context["reabo"]) {
            // line 67
            echo "                        <tr>
                            <td style=\"text-align:center;\">";
            // line 68
            echo twig_escape_filter($this->env, ($context["c"] ?? $this->getContext($context, "c")), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["reabo"], "abonne", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["reabo"], "numeroCarte", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["reabo"], "contact", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["reabo"], "formule", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["reabo"], "duree", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["reabo"], "options", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 75
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["reabo"], "montant", array()), 0, ".", " "), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 76
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reabo"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 77
            if ($this->getAttribute($context["reabo"], "distributeur", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reabo"], "distributeur", array()), "username", array()), "html", null, true);
            }
            echo "</td>
                            <td>
                                <div class=\"input-group btn\">
                                    <button type=\"button\" class=\"btn btn-success btn-xs   dropdown-toggle pull-right\" data-toggle=\"dropdown\">
                                        Actions  <span class=\"fa fa-caret-down\"></span>
                                    </button>
                                    <ul class=\"dropdown-menu dropdown-menu-right\">
                                        <li>
                                            <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo_renew", array("id" => $this->getAttribute($context["reabo"], "id", array()))), "html", null, true);
            echo "\">Renouveler cette offre</a>
                                        </li>                                        
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        ";
            // line 91
            $context["c"] = (($context["c"] ?? $this->getContext($context, "c")) + 1);
            // line 92
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reabo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                    </tbody>
                </table>
            </div> <!-- End div box-body -->
        </div> <!-- End div box-primary -->

        <div class=\"box box-primary\">
            <div class=\"box-body\">
                <div align=\"left\">
                    <a href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo_new");
        echo "\"><button type=\"button\" class=\"btn btn-success\">Effectuer un réabonnement direct </button></a>
                </div>
            </div>
        </div> <!-- End div box-primary -->

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
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle//plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/datatables/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <script>
        \$(function () {});
    </script>


";
        
        $__internal_f513bd4106fe93f77b245275e5d6d414ce7087ea75c9f269e00ffa9883d8238a->leave($__internal_f513bd4106fe93f77b245275e5d6d414ce7087ea75c9f269e00ffa9883d8238a_prof);

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
        return array (  269 => 137,  265 => 136,  227 => 101,  217 => 93,  211 => 92,  209 => 91,  200 => 85,  187 => 77,  183 => 76,  179 => 75,  175 => 74,  171 => 73,  167 => 72,  163 => 71,  159 => 70,  155 => 69,  151 => 68,  148 => 67,  143 => 66,  141 => 65,  99 => 26,  95 => 25,  91 => 24,  86 => 22,  74 => 13,  65 => 6,  59 => 5,  47 => 4,  36 => 3,  11 => 1,);
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
                                <span class=\"info-box-text\" style=\"color:white;\">777777662({{ app.user.username }})</span>
                                <span class=\"info-box-text\" style=\"color:white;\">7878787812({{ app.user.username }})</span>
                            
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>


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
                            <th>Actions</th>
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
                            <td>{% if reabo.distributeur %}{{ reabo.distributeur.username }}{% endif %}</td>
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
                        </tr>
                        {% set c = c + 1 %}
                    {% endfor %}
                    </tbody>
                </table>
            </div> <!-- End div box-body -->
        </div> <!-- End div box-primary -->

        <div class=\"box box-primary\">
            <div class=\"box-body\">
                <div align=\"left\">
                    <a href=\"{{ path('fadco_espace_distributeur_reabo_new') }}\"><button type=\"button\" class=\"btn btn-success\">Effectuer un réabonnement direct </button></a>
                </div>
            </div>
        </div> <!-- End div box-primary -->

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


{% endblock %}", "FadcoBundle:Distributeur:index-reabo.html.twig", "/var/www/html/fadcoplus/src/FadcoBundle/Resources/views/Distributeur/index-reabo.html.twig");
    }
}
