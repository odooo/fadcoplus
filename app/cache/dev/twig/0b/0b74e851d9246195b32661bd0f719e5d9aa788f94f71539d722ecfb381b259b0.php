<?php

/* FadcoBundle:Distributeur:index-repair.html.twig */
class __TwigTemplate_087b0951710b9970d1589e2ec2ea5650cc4913902f35b4d4ad65a739b51ff9d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FadcoBundle:Default:menu.html.twig", "FadcoBundle:Distributeur:index-repair.html.twig", 1);
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
        $__internal_bf8e1fca388386b27eb353cefc71afc826a77dcaa5b4718bb3721dc688d8245b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8e1fca388386b27eb353cefc71afc826a77dcaa5b4718bb3721dc688d8245b->enter($__internal_bf8e1fca388386b27eb353cefc71afc826a77dcaa5b4718bb3721dc688d8245b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Distributeur:index-repair.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf8e1fca388386b27eb353cefc71afc826a77dcaa5b4718bb3721dc688d8245b->leave($__internal_bf8e1fca388386b27eb353cefc71afc826a77dcaa5b4718bb3721dc688d8245b_prof);

    }

    // line 3
    public function block_contentHeader($context, array $blocks = array())
    {
        $__internal_9a27cf7fade3e992d1f1fde747107c39411f8102c56efbfeae8f58ecb77a47c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a27cf7fade3e992d1f1fde747107c39411f8102c56efbfeae8f58ecb77a47c4->enter($__internal_9a27cf7fade3e992d1f1fde747107c39411f8102c56efbfeae8f58ecb77a47c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentHeader"));

        
        $__internal_9a27cf7fade3e992d1f1fde747107c39411f8102c56efbfeae8f58ecb77a47c4->leave($__internal_9a27cf7fade3e992d1f1fde747107c39411f8102c56efbfeae8f58ecb77a47c4_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_6fd1caca456518b2aed8d415017f924dba002e38d3bbfa42cd2b6701e04a2939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd1caca456518b2aed8d415017f924dba002e38d3bbfa42cd2b6701e04a2939->enter($__internal_6fd1caca456518b2aed8d415017f924dba002e38d3bbfa42cd2b6701e04a2939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FADCO+ : Prestations";
        
        $__internal_6fd1caca456518b2aed8d415017f924dba002e38d3bbfa42cd2b6701e04a2939->leave($__internal_6fd1caca456518b2aed8d415017f924dba002e38d3bbfa42cd2b6701e04a2939_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_3fb7dcf61b0234b9c7d5f047175f55790cdd79c800c5de66fba125fb6f47eb6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fb7dcf61b0234b9c7d5f047175f55790cdd79c800c5de66fba125fb6f47eb6f->enter($__internal_3fb7dcf61b0234b9c7d5f047175f55790cdd79c800c5de66fba125fb6f47eb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h4>Liste des prestations</h4>

    <section class=\"content\">
        <div class=\"box box-primary\">
            <div class=\"box box-primary\">
                <div class=\"box-body\">
                    <div align=\"right\">
                        <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_repair_new_client");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Enregistrer un nouveau client ou abonné </button></a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_repair_new");
        echo "\"><button type=\"button\" class=\"btn btn-success\">Effectuer une nouvelle prestation </button></a>
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
                            
                                <span style=\"color:green;\" class=\"info-box-number\">90 000 F</span>
                                <span class=\"info-box-text\" style=\"color:white;\">777777662(";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo ")</span>
                                <span class=\"info-box-text\" style=\"color:white;\">7878787812(";
        // line 28
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
                            <th style=\"text-align:center;\">N° mobile</th>
                            <th style=\"text-align:center;\">Type prestation</th>
                            <th style=\"text-align:center;\">Lieu prestation</th>
                            <th style=\"text-align:center;\">Forme maison</th>
                            <th style=\"text-align:center;\">Endroit propice</th>
                            <th style=\"text-align:center;\">Montant</th>
                            <th style=\"text-align:center;\">Date</th>
                            <th style=\"text-align:center;\">Distributeur</th>
                            ";
        // line 64
        echo "                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 67
        $context["c"] = 1;
        // line 68
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["repairs"]) ? $context["repairs"] : $this->getContext($context, "repairs")));
        foreach ($context['_seq'] as $context["_key"] => $context["repair"]) {
            // line 69
            echo "                        <tr>
                            <td style=\"text-align:center;\">";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["repair"], "abonne", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["repair"], "contact", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["repair"], "type", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["repair"], "lieu", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["repair"], "forme", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["repair"], "endroit", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 77
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["repair"], "montant", array()), 0, ".", " "), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 78
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["repair"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 79
            if ($this->getAttribute($context["repair"], "distributeur", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["repair"], "distributeur", array()), "username", array()), "html", null, true);
            }
            echo "</td>
                            ";
            // line 92
            echo "                        </tr>
                        ";
            // line 93
            $context["c"] = ((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")) + 1);
            // line 94
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repair'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                    </tbody>
                </table>
            </div> <!-- End div box-body -->
        </div> <!-- End div box-primary -->

        <div class=\"box box-primary\">
            <div class=\"box-body\">
                <div align=\"left\">
                    <a href=\"";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_repair_new_client");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Enregistrer un nouveau client ou abonné </button></a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_repair_new");
        echo "\"><button type=\"button\" class=\"btn btn-success\">Effectuer une nouvelle prestation </button></a>
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
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle//plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/datatables/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <script>
        \$(function () {});
    </script>


";
        
        $__internal_3fb7dcf61b0234b9c7d5f047175f55790cdd79c800c5de66fba125fb6f47eb6f->leave($__internal_3fb7dcf61b0234b9c7d5f047175f55790cdd79c800c5de66fba125fb6f47eb6f_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Distributeur:index-repair.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 141,  260 => 140,  222 => 105,  217 => 103,  207 => 95,  201 => 94,  199 => 93,  196 => 92,  190 => 79,  186 => 78,  182 => 77,  178 => 76,  174 => 75,  170 => 74,  166 => 73,  162 => 72,  158 => 71,  154 => 70,  151 => 69,  146 => 68,  144 => 67,  139 => 64,  101 => 28,  97 => 27,  91 => 24,  79 => 15,  74 => 13,  65 => 6,  59 => 5,  47 => 4,  36 => 3,  11 => 1,);
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
{% block title %}FADCO+ : Prestations{% endblock %}
{% block content%}
    <h4>Liste des prestations</h4>

    <section class=\"content\">
        <div class=\"box box-primary\">
            <div class=\"box box-primary\">
                <div class=\"box-body\">
                    <div align=\"right\">
                        <a href=\"{{ path('fadco_espace_distributeur_repair_new_client') }}\"><button type=\"button\" class=\"btn btn-default\">Enregistrer un nouveau client ou abonné </button></a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href=\"{{ path('fadco_espace_distributeur_repair_new') }}\"><button type=\"button\" class=\"btn btn-success\">Effectuer une nouvelle prestation </button></a>
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
                            <th style=\"text-align:center;\">N° mobile</th>
                            <th style=\"text-align:center;\">Type prestation</th>
                            <th style=\"text-align:center;\">Lieu prestation</th>
                            <th style=\"text-align:center;\">Forme maison</th>
                            <th style=\"text-align:center;\">Endroit propice</th>
                            <th style=\"text-align:center;\">Montant</th>
                            <th style=\"text-align:center;\">Date</th>
                            <th style=\"text-align:center;\">Distributeur</th>
                            {#<th>Actions</th>#}
                        </tr>
                    </thead>
                    <tbody>
                        {% set c = 1 %}
                    {% for repair in repairs %}
                        <tr>
                            <td style=\"text-align:center;\">{{ c }}</td>
                            <td style=\"text-align:center;\">{{ repair.abonne }}</td>
                            <td style=\"text-align:center;\">{{ repair.contact }}</td>
                            <td style=\"text-align:center;\">{{ repair.type }}</td>
                            <td style=\"text-align:center;\">{{ repair.lieu }}</td>
                            <td style=\"text-align:center;\">{{ repair.forme }}</td>
                            <td style=\"text-align:center;\">{{ repair.endroit }}</td>
                            <td style=\"text-align:center;\">{{ repair.montant|number_format(0,'.',' ') }}</td>
                            <td style=\"text-align:center;\">{{ repair.date|date('d/m/Y') }}</td>
                            <td style=\"text-align:center;\">{% if repair.distributeur %}{{ repair.distributeur.username }}{% endif %}</td>
                            {#<td>
                                <div class=\"input-group btn\">
                                    <button type=\"button\" class=\"btn btn-success btn-xs   dropdown-toggle pull-right\" data-toggle=\"dropdown\">
                                        Actions  <span class=\"fa fa-caret-down\"></span>
                                    </button>
                                    <ul class=\"dropdown-menu dropdown-menu-right\">
                                        <li>
                                            <a href=\"{{ path('fadco_espace_distributeur_reabo_renew', {'id': reabo.id}) }}\">Renouvellement</a>
                                        </li>                                        
                                    </ul>
                                </div>
                            </td>#}
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
                    <a href=\"{{ path('fadco_espace_distributeur_repair_new_client') }}\"><button type=\"button\" class=\"btn btn-default\">Enregistrer un nouveau client ou abonné </button></a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href=\"{{ path('fadco_espace_distributeur_repair_new') }}\"><button type=\"button\" class=\"btn btn-success\">Effectuer une nouvelle prestation </button></a>
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


{% endblock %}", "FadcoBundle:Distributeur:index-repair.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\src\\FadcoBundle/Resources/views/Distributeur/index-repair.html.twig");
    }
}
