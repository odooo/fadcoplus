<?php

/* FadcoBundle:Prestataire:index.html.twig */
class __TwigTemplate_908f3cf90f433bd38ca667e5f00aed2c0b72e7c9ab9f060d2342c097f9604e12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FadcoBundle:Default:menu.html.twig", "FadcoBundle:Prestataire:index.html.twig", 1);
        $this->blocks = array(
            'page_quick_actions' => array($this, 'block_page_quick_actions'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FadcoBundle:Default:menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75b2e71ae7cc3abed4493e8ebc8d9ca468e7bf03adff5a4491ef4d16a1b1b635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75b2e71ae7cc3abed4493e8ebc8d9ca468e7bf03adff5a4491ef4d16a1b1b635->enter($__internal_75b2e71ae7cc3abed4493e8ebc8d9ca468e7bf03adff5a4491ef4d16a1b1b635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Prestataire:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75b2e71ae7cc3abed4493e8ebc8d9ca468e7bf03adff5a4491ef4d16a1b1b635->leave($__internal_75b2e71ae7cc3abed4493e8ebc8d9ca468e7bf03adff5a4491ef4d16a1b1b635_prof);

    }

    // line 3
    public function block_page_quick_actions($context, array $blocks = array())
    {
        $__internal_331545a49f093a4f4d0c2747378a2090ab864db09d876477922b7f87cab12bbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_331545a49f093a4f4d0c2747378a2090ab864db09d876477922b7f87cab12bbf->enter($__internal_331545a49f093a4f4d0c2747378a2090ab864db09d876477922b7f87cab12bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_quick_actions"));

        // line 4
        echo "    <div>
        <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire");
        echo "\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour\"/></a>
        <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_new", array("id" => null));
        echo "\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Ajouter un nouveau distributeur\"/></a>
    </div>
";
        
        $__internal_331545a49f093a4f4d0c2747378a2090ab864db09d876477922b7f87cab12bbf->leave($__internal_331545a49f093a4f4d0c2747378a2090ab864db09d876477922b7f87cab12bbf_prof);

    }

    // line 9
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_83f1a013e787a40cabe3d0fdeffffd305c77a6ee5f2b959b5fc7dd536dc0d9f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83f1a013e787a40cabe3d0fdeffffd305c77a6ee5f2b959b5fc7dd536dc0d9f0->enter($__internal_83f1a013e787a40cabe3d0fdeffffd305c77a6ee5f2b959b5fc7dd536dc0d9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 10
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\"
          href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/GSPBundle/plugins/bootstrap-slider/last/bootstrap-slider.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/GSPBundle/plugins/jQueryfiler/css/jquery.filer.css"), "html", null, true);
        echo "\">
";
        
        $__internal_83f1a013e787a40cabe3d0fdeffffd305c77a6ee5f2b959b5fc7dd536dc0d9f0->leave($__internal_83f1a013e787a40cabe3d0fdeffffd305c77a6ee5f2b959b5fc7dd536dc0d9f0_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_b0631fecc65b9a418f2a7e4ef76419e54f767085bef8825468fe053892a42fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0631fecc65b9a418f2a7e4ef76419e54f767085bef8825468fe053892a42fc6->enter($__internal_b0631fecc65b9a418f2a7e4ef76419e54f767085bef8825468fe053892a42fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <section class=\"content\">
        <div class=\"box box-default\">
            <div class=\"box-header with-border\">
                <h1 class=\"box-title\">Liste des distributeurs </h1>

                <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\">
                        <i class=\"fa fa-minus\"></i>
                    </button>
                </div>
            </div>
            <div class=\"box-body\">
                <div class=\"table-responsive mailbox-messages\">
                  <table id=\"lstprestataire\" class=\"table table-bordered table-striped\">
                    <thead>
                        <tr>
                            <th style=\"text-align: center;\">N°</th>
                            <th style=\"text-align: center;\">Nom</th>
                            <th style=\"text-align: center;\">Prenom</th>
                            <th style=\"text-align: center;\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entities"] ?? $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 41
            echo "                            <tr>
                                <td style=\"text-align: center;\"><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_voir", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                                <td style=\"text-align: center;\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                                <td style=\"text-align: center;\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
            echo "</td>
                                <td style=\"text-align: center;\">
                                    <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn-success btn-xs dropdown-toggle\"
                                                data-toggle=\"dropdown\">Action<span class=\"caret\"></span></button>
                                        <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">   
                                            <li>
                                                <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_voir", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Afficher</a>
                                            </li>
                                            ";
            // line 53
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 54
                echo "                                                <li>
                                                    <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crediter_compte_distributeur", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">Créditer ce compte</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_new", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">Modifier</a>
                                                </li>
                                                <li>
                                                    <a class=\"change_rigth\" href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rigth_change", array("userId" => $this->getAttribute($context["entity"], "id", array()), "option" => "add")), "html", null, true);
                echo "\">Ajouter des roles</a>
                                                </li>
                                                <li class=\"divider\"></li>
                                                <li>
                                                    <a class=\"change_rigth\" href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rigth_change", array("userId" => $this->getAttribute($context["entity"], "id", array()), "option" => "delete")), "html", null, true);
                echo "\">Enlever des roles</a>
                                                </li>
                                                ";
                // line 67
                if (($this->getAttribute($context["entity"], "enabled", array()) == 1)) {
                    // line 68
                    echo "                                                    <li>
                                                        <a href=\"";
                    // line 69
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_desactive", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">Suspendre le compte</a>
                                                    </li>
                                                ";
                } else {
                    // line 72
                    echo "                                                    <li>
                                                        <a href=\"";
                    // line 73
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_active", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">Activer le compte</a>
                                                    </li>
                                                ";
                }
                // line 76
                echo "                                            ";
            }
            // line 77
            echo "                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                    </tbody>
                </table>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <table style=\"width: 10%;\" class=\"table\">
                            <tr>
                                ";
        // line 90
        echo "                                <td><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire");
        echo "\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour\"/></a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/GSPBundle/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_b0631fecc65b9a418f2a7e4ef76419e54f767085bef8825468fe053892a42fc6->leave($__internal_b0631fecc65b9a418f2a7e4ef76419e54f767085bef8825468fe053892a42fc6_prof);

    }

    // line 102
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_bb69480889fbdcfe874079ae679bdf6359d06236acb0fb3282051791dfdf158b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb69480889fbdcfe874079ae679bdf6359d06236acb0fb3282051791dfdf158b->enter($__internal_bb69480889fbdcfe874079ae679bdf6359d06236acb0fb3282051791dfdf158b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 103
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/GSPBundle/style/jquery.accordDate.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/GSPBundle/plugins/bootstrap-slider/last/bootstrap-slider.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/GSPBundle/plugins/jQueryfiler/js/jquery.filer.min.js"), "html", null, true);
        echo "\"></script>
    <script>
     \$('.change_rigth').click(function(e) {
            e.preventDefault();

            var button  = \$(e.target);

            \$('#detail-affectation .modal-body').html(\$('#loading-classement').html());
            \$('#detail-affectation').modal('show');
            \$.ajax({
                url : button.attr('href'),
                type : 'GET',
                dataType : 'html',
                success : function(code_html, statut){
                    \$('#detail-affectation .modal-body').html(code_html);
//                    showdetailaffectation(code_html);
                },
                error : function(resultat, statut, erreur){
                    \$('#detail-affectation .modal-body').html('Erreur de chargement : '+statut);
                }
            });

        });

        \$('button[type=\"submit\"]').click(function(){
            \$('#detail-affectation').modal('hide');
        });
        
     </script>
";
        
        $__internal_bb69480889fbdcfe874079ae679bdf6359d06236acb0fb3282051791dfdf158b->leave($__internal_bb69480889fbdcfe874079ae679bdf6359d06236acb0fb3282051791dfdf158b_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Prestataire:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 106,  256 => 105,  252 => 104,  247 => 103,  241 => 102,  232 => 99,  219 => 90,  210 => 82,  200 => 77,  197 => 76,  191 => 73,  188 => 72,  182 => 69,  179 => 68,  177 => 67,  172 => 65,  165 => 61,  159 => 58,  153 => 55,  150 => 54,  148 => 53,  143 => 51,  133 => 44,  129 => 43,  123 => 42,  120 => 41,  116 => 40,  91 => 17,  85 => 16,  76 => 13,  72 => 12,  66 => 10,  60 => 9,  50 => 6,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
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

{% block page_quick_actions %}
    <div>
        <a href=\"{{ path('grh_prestataire') }}\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour\"/></a>
        <a href=\"{{ path('grh_prestataire_new', {'id': null }) }}\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Ajouter un nouveau distributeur\"/></a>
    </div>
{% endblock %}
{% block stylesheet %}
    {{ parent() }}
    <link rel=\"stylesheet\"
          href=\"{{ asset('bundles/GSPBundle/plugins/bootstrap-slider/last/bootstrap-slider.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/GSPBundle/plugins/jQueryfiler/css/jquery.filer.css') }}\">
{% endblock %}

{% block content %}
    <section class=\"content\">
        <div class=\"box box-default\">
            <div class=\"box-header with-border\">
                <h1 class=\"box-title\">Liste des distributeurs </h1>

                <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\">
                        <i class=\"fa fa-minus\"></i>
                    </button>
                </div>
            </div>
            <div class=\"box-body\">
                <div class=\"table-responsive mailbox-messages\">
                  <table id=\"lstprestataire\" class=\"table table-bordered table-striped\">
                    <thead>
                        <tr>
                            <th style=\"text-align: center;\">N°</th>
                            <th style=\"text-align: center;\">Nom</th>
                            <th style=\"text-align: center;\">Prenom</th>
                            <th style=\"text-align: center;\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for entity in entities %}
                            <tr>
                                <td style=\"text-align: center;\"><a href=\"{{ path('grh_prestataire_voir', { 'id': entity.id }) }}\">{{ entity.id }}</a></td>
                                <td style=\"text-align: center;\">{{ entity.nom }}</td>
                                <td style=\"text-align: center;\">{{ entity.prenom }}</td>
                                <td style=\"text-align: center;\">
                                    <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn-success btn-xs dropdown-toggle\"
                                                data-toggle=\"dropdown\">Action<span class=\"caret\"></span></button>
                                        <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">   
                                            <li>
                                                <a href=\"{{ path('grh_prestataire_voir', { 'id': entity.id }) }}\">Afficher</a>
                                            </li>
                                            {% if is_granted('ROLE_SUPER_ADMIN') %}
                                                <li>
                                                    <a href=\"{{ path('crediter_compte_distributeur', { 'id': entity.id }) }}\">Créditer ce compte</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('grh_prestataire_new', { 'id': entity.id }) }}\">Modifier</a>
                                                </li>
                                                <li>
                                                    <a class=\"change_rigth\" href=\"{{ path('rigth_change', { 'userId': entity.id,'option':'add' }) }}\">Ajouter des roles</a>
                                                </li>
                                                <li class=\"divider\"></li>
                                                <li>
                                                    <a class=\"change_rigth\" href=\"{{ path('rigth_change', { 'userId': entity.id,'option':'delete' }) }}\">Enlever des roles</a>
                                                </li>
                                                {% if entity.enabled == 1 %}
                                                    <li>
                                                        <a href=\"{{ path('grh_prestataire_desactive', { 'id': entity.id }) }}\">Suspendre le compte</a>
                                                    </li>
                                                {% else %}
                                                    <li>
                                                        <a href=\"{{ path('grh_prestataire_active', { 'id': entity.id }) }}\">Activer le compte</a>
                                                    </li>
                                                {% endif %}
                                            {% endif %}
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <table style=\"width: 10%;\" class=\"table\">
                            <tr>
                                {#<td><input type=\"submit\" class=\"btn btn-primary btn-xs\" value=\"Enregistrer\"/></td>#}
                                <td><a href=\"{{ path('grh_prestataire') }}\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour\"/></a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src=\"{{ asset('bundles/GSPBundle/plugins/datatables/jquery.dataTables.min.js') }}\"></script>
{% endblock %}

{% block javascript %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/GSPBundle/style/jquery.accordDate.js') }}\"></script>
    <script src=\"{{ asset('bundles/GSPBundle/plugins/bootstrap-slider/last/bootstrap-slider.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/GSPBundle/plugins/jQueryfiler/js/jquery.filer.min.js') }}\"></script>
    <script>
     \$('.change_rigth').click(function(e) {
            e.preventDefault();

            var button  = \$(e.target);

            \$('#detail-affectation .modal-body').html(\$('#loading-classement').html());
            \$('#detail-affectation').modal('show');
            \$.ajax({
                url : button.attr('href'),
                type : 'GET',
                dataType : 'html',
                success : function(code_html, statut){
                    \$('#detail-affectation .modal-body').html(code_html);
//                    showdetailaffectation(code_html);
                },
                error : function(resultat, statut, erreur){
                    \$('#detail-affectation .modal-body').html('Erreur de chargement : '+statut);
                }
            });

        });

        \$('button[type=\"submit\"]').click(function(){
            \$('#detail-affectation').modal('hide');
        });
        
     </script>
{% endblock %}

", "FadcoBundle:Prestataire:index.html.twig", "/var/www/html/fadcoplus/src/FadcoBundle/Resources/views/Prestataire/index.html.twig");
    }
}
