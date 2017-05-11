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
        $__internal_be7a5017cc8f48a5b545e85fca413d96d909569a03ea8813660e14d6aa8d909f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7a5017cc8f48a5b545e85fca413d96d909569a03ea8813660e14d6aa8d909f->enter($__internal_be7a5017cc8f48a5b545e85fca413d96d909569a03ea8813660e14d6aa8d909f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Distributeur:index-reabo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be7a5017cc8f48a5b545e85fca413d96d909569a03ea8813660e14d6aa8d909f->leave($__internal_be7a5017cc8f48a5b545e85fca413d96d909569a03ea8813660e14d6aa8d909f_prof);

    }

    // line 3
    public function block_contentHeader($context, array $blocks = array())
    {
        $__internal_1e4f847df4a242eab698c1b3f9fe36ae6fae4383a89212f7e751509c609ef8d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e4f847df4a242eab698c1b3f9fe36ae6fae4383a89212f7e751509c609ef8d2->enter($__internal_1e4f847df4a242eab698c1b3f9fe36ae6fae4383a89212f7e751509c609ef8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentHeader"));

        
        $__internal_1e4f847df4a242eab698c1b3f9fe36ae6fae4383a89212f7e751509c609ef8d2->leave($__internal_1e4f847df4a242eab698c1b3f9fe36ae6fae4383a89212f7e751509c609ef8d2_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ef806f596730c88fb7c3e5236838c02c66f2c86a45ee6ea52c1a86d2ac72b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef806f596730c88fb7c3e5236838c02c66f2c86a45ee6ea52c1a86d2ac72b66->enter($__internal_6ef806f596730c88fb7c3e5236838c02c66f2c86a45ee6ea52c1a86d2ac72b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FADCO+ : Réabo. direct";
        
        $__internal_6ef806f596730c88fb7c3e5236838c02c66f2c86a45ee6ea52c1a86d2ac72b66->leave($__internal_6ef806f596730c88fb7c3e5236838c02c66f2c86a45ee6ea52c1a86d2ac72b66_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_ebe8b1f1f6d023e742cd0af2777d3c8438e2ce4d2477c8a5fbcac09f4d36c47a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe8b1f1f6d023e742cd0af2777d3c8438e2ce4d2477c8a5fbcac09f4d36c47a->enter($__internal_ebe8b1f1f6d023e742cd0af2777d3c8438e2ce4d2477c8a5fbcac09f4d36c47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                            
                                <span style=\"color:green;\" class=\"info-box-number\">90 000 F</span>
                                <span class=\"info-box-text\" style=\"color:white;\">777777662(";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo ")</span>
                                <span class=\"info-box-text\" style=\"color:white;\">7878787812(";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["reabos"]) ? $context["reabos"] : $this->getContext($context, "reabos")));
        foreach ($context['_seq'] as $context["_key"] => $context["reabo"]) {
            // line 67
            echo "                        <tr>
                            <td style=\"text-align:center;\">";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "html", null, true);
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
            $context["c"] = ((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")) + 1);
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
        
        $__internal_ebe8b1f1f6d023e742cd0af2777d3c8438e2ce4d2477c8a5fbcac09f4d36c47a->leave($__internal_ebe8b1f1f6d023e742cd0af2777d3c8438e2ce4d2477c8a5fbcac09f4d36c47a_prof);

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
        return array (  266 => 137,  262 => 136,  224 => 101,  214 => 93,  208 => 92,  206 => 91,  197 => 85,  184 => 77,  180 => 76,  176 => 75,  172 => 74,  168 => 73,  164 => 72,  160 => 71,  156 => 70,  152 => 69,  148 => 68,  145 => 67,  140 => 66,  138 => 65,  96 => 26,  92 => 25,  86 => 22,  74 => 13,  65 => 6,  59 => 5,  47 => 4,  36 => 3,  11 => 1,);
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
                            
                                <span style=\"color:green;\" class=\"info-box-number\">90 000 F</span>
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


{% endblock %}", "FadcoBundle:Distributeur:index-reabo.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\src\\FadcoBundle/Resources/views/Distributeur/index-reabo.html.twig");
    }
}
