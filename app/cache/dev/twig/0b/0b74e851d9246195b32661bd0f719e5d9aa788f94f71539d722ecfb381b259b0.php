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
        $__internal_62a3621fb7a258aa4bf2a90f189c29f5c64cfe5250bb55075fbff66fe3f52870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62a3621fb7a258aa4bf2a90f189c29f5c64cfe5250bb55075fbff66fe3f52870->enter($__internal_62a3621fb7a258aa4bf2a90f189c29f5c64cfe5250bb55075fbff66fe3f52870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Distributeur:index-repair.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62a3621fb7a258aa4bf2a90f189c29f5c64cfe5250bb55075fbff66fe3f52870->leave($__internal_62a3621fb7a258aa4bf2a90f189c29f5c64cfe5250bb55075fbff66fe3f52870_prof);

    }

    // line 3
    public function block_contentHeader($context, array $blocks = array())
    {
        $__internal_96ebc5a0ddb7868a20bd3df3fbe8b4e9797a94db5e76a5e992068271cdaf2cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96ebc5a0ddb7868a20bd3df3fbe8b4e9797a94db5e76a5e992068271cdaf2cae->enter($__internal_96ebc5a0ddb7868a20bd3df3fbe8b4e9797a94db5e76a5e992068271cdaf2cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentHeader"));

        
        $__internal_96ebc5a0ddb7868a20bd3df3fbe8b4e9797a94db5e76a5e992068271cdaf2cae->leave($__internal_96ebc5a0ddb7868a20bd3df3fbe8b4e9797a94db5e76a5e992068271cdaf2cae_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_8570dc3df31e342973c244f1f68919b0565375f03bdf81aacb8fb02ad8e1fc94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8570dc3df31e342973c244f1f68919b0565375f03bdf81aacb8fb02ad8e1fc94->enter($__internal_8570dc3df31e342973c244f1f68919b0565375f03bdf81aacb8fb02ad8e1fc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FADCO+ : Prestations";
        
        $__internal_8570dc3df31e342973c244f1f68919b0565375f03bdf81aacb8fb02ad8e1fc94->leave($__internal_8570dc3df31e342973c244f1f68919b0565375f03bdf81aacb8fb02ad8e1fc94_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_b3e008d0d334e28709102f869761d4ed23ebb79284c5a851b47f0ae68a51045a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3e008d0d334e28709102f869761d4ed23ebb79284c5a851b47f0ae68a51045a->enter($__internal_b3e008d0d334e28709102f869761d4ed23ebb79284c5a851b47f0ae68a51045a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h4>Liste des prestations</h4>

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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_repair_new_client");
            echo "\"><button type=\"button\" class=\"btn btn-default\">Enregistrer un nouveau client ou abonné </button></a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href=\"";
            // line 17
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
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/fadcoplus.jpg"), "html", null, true);
            echo "\" style=\"width:80px; heigth:5px;\" alt=\"edgar\"/></span>
                                
                                    <span style=\"color:green;\" class=\"info-box-number\">";
            // line 28
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "account", array()), 0, ".", " "), "html", null, true);
            echo " F</span>
                                    <span class=\"info-box-text\" style=\"color:white;\">(";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
            echo ")</span>
                                    ";
            // line 32
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
        // line 42
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
                            <th style=\"text-align:center;\">N° mobile</th>
                            <th style=\"text-align:center;\">Type prestation</th>
                            <th style=\"text-align:center;\">Lieu prestation</th>
                            <th style=\"text-align:center;\">Forme maison</th>
                            <th style=\"text-align:center;\">Endroit propice</th>
                            <th style=\"text-align:center;\">Montant</th>
                            <th style=\"text-align:center;\">Date</th>
                            ";
        // line 66
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "admin")) {
            echo "<th style=\"text-align:center;\">Distributeur</th>";
        }
        // line 67
        echo "                            ";
        // line 68
        echo "                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 71
        $context["c"] = 1;
        // line 72
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["repairs"]) ? $context["repairs"] : $this->getContext($context, "repairs")));
        foreach ($context['_seq'] as $context["_key"] => $context["repair"]) {
            // line 73
            echo "                        <tr>
                            <td style=\"text-align:center;\">";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["repair"], "abonne", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["repair"], "contact", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["repair"], "type", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["repair"], "lieu", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["repair"], "forme", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["repair"], "endroit", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 81
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["repair"], "montant", array()), 0, ".", " "), "html", null, true);
            echo "</td>
                            <td style=\"text-align:center;\">";
            // line 82
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["repair"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                            ";
            // line 83
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "admin")) {
                echo "<td style=\"text-align:center;\">";
                if ($this->getAttribute($context["repair"], "distributeur", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["repair"], "distributeur", array()), "username", array()), "html", null, true);
                }
                echo "</td>";
            }
            // line 84
            echo "                            ";
            // line 96
            echo "                        </tr>
                        ";
            // line 97
            $context["c"] = ((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")) + 1);
            // line 98
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repair'], $context['_parent'], $context['loop']);
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_repair_new_client");
            echo "\"><button type=\"button\" class=\"btn btn-default\">Enregistrer un nouveau client ou abonné </button></a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href=\"";
            // line 110
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_repair_new");
            echo "\"><button type=\"button\" class=\"btn btn-success\">Effectuer une nouvelle prestation </button></a>
                    </div>
                </div>
            </div> <!-- End div box-primary -->
        ";
        }
        // line 115
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
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle//plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/datatables/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <script>
        \$(function () {});
    </script>


";
        
        $__internal_b3e008d0d334e28709102f869761d4ed23ebb79284c5a851b47f0ae68a51045a->leave($__internal_b3e008d0d334e28709102f869761d4ed23ebb79284c5a851b47f0ae68a51045a_prof);

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
        return array (  289 => 147,  285 => 146,  252 => 115,  244 => 110,  239 => 108,  234 => 105,  232 => 104,  225 => 99,  219 => 98,  217 => 97,  214 => 96,  212 => 84,  204 => 83,  200 => 82,  196 => 81,  192 => 80,  188 => 79,  184 => 78,  180 => 77,  176 => 76,  172 => 75,  168 => 74,  165 => 73,  160 => 72,  158 => 71,  153 => 68,  151 => 67,  147 => 66,  121 => 42,  109 => 32,  105 => 29,  101 => 28,  96 => 26,  84 => 17,  79 => 15,  73 => 11,  71 => 10,  65 => 6,  59 => 5,  47 => 4,  36 => 3,  11 => 1,);
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

        {% if app.user.type == \"distributeur\" %}
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
                            <th style=\"text-align:center;\">N° mobile</th>
                            <th style=\"text-align:center;\">Type prestation</th>
                            <th style=\"text-align:center;\">Lieu prestation</th>
                            <th style=\"text-align:center;\">Forme maison</th>
                            <th style=\"text-align:center;\">Endroit propice</th>
                            <th style=\"text-align:center;\">Montant</th>
                            <th style=\"text-align:center;\">Date</th>
                            {% if app.user.type == \"admin\" %}<th style=\"text-align:center;\">Distributeur</th>{% endif %}
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
                            {% if app.user.type == \"admin\" %}<td style=\"text-align:center;\">{% if repair.distributeur %}{{ repair.distributeur.username }}{% endif %}</td>{% endif %}
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

        {% if app.user.type == \"distributeur\" %}
            <div class=\"box box-primary\">
                <div class=\"box-body\">
                    <div align=\"left\">
                        <a href=\"{{ path('fadco_espace_distributeur_repair_new_client') }}\"><button type=\"button\" class=\"btn btn-default\">Enregistrer un nouveau client ou abonné </button></a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href=\"{{ path('fadco_espace_distributeur_repair_new') }}\"><button type=\"button\" class=\"btn btn-success\">Effectuer une nouvelle prestation </button></a>
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


{% endblock %}", "FadcoBundle:Distributeur:index-repair.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\src\\FadcoBundle/Resources/views/Distributeur/index-repair.html.twig");
    }
}
