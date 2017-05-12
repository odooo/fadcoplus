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
        $__internal_ee624139b00bfe3b9342555fcdc74a62be1e5dc25f79bf135f962659046d6ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee624139b00bfe3b9342555fcdc74a62be1e5dc25f79bf135f962659046d6ae9->enter($__internal_ee624139b00bfe3b9342555fcdc74a62be1e5dc25f79bf135f962659046d6ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Prestataire:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee624139b00bfe3b9342555fcdc74a62be1e5dc25f79bf135f962659046d6ae9->leave($__internal_ee624139b00bfe3b9342555fcdc74a62be1e5dc25f79bf135f962659046d6ae9_prof);

    }

    // line 3
    public function block_page_quick_actions($context, array $blocks = array())
    {
        $__internal_cd1a35384a1f132bd736e05d7068404929a26b4c852cd5a96a3fef0d9f6d5604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1a35384a1f132bd736e05d7068404929a26b4c852cd5a96a3fef0d9f6d5604->enter($__internal_cd1a35384a1f132bd736e05d7068404929a26b4c852cd5a96a3fef0d9f6d5604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_quick_actions"));

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
        <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("export_excel_prestataire");
        echo "\"><input type=\"button\" class=\"btn btn-primary btn-xs\"value=\"Exporter en excel\"/></a>
    </div>
";
        
        $__internal_cd1a35384a1f132bd736e05d7068404929a26b4c852cd5a96a3fef0d9f6d5604->leave($__internal_cd1a35384a1f132bd736e05d7068404929a26b4c852cd5a96a3fef0d9f6d5604_prof);

    }

    // line 11
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_d3ccd9bb3bae0d3029adc6cc6a94a99b8ebcc26bfc54810f82f5b8c219c5a3b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ccd9bb3bae0d3029adc6cc6a94a99b8ebcc26bfc54810f82f5b8c219c5a3b9->enter($__internal_d3ccd9bb3bae0d3029adc6cc6a94a99b8ebcc26bfc54810f82f5b8c219c5a3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 12
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\"
          href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/bootstrap-slider/last/bootstrap-slider.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/jQueryfiler/css/jquery.filer.css"), "html", null, true);
        echo "\">
";
        
        $__internal_d3ccd9bb3bae0d3029adc6cc6a94a99b8ebcc26bfc54810f82f5b8c219c5a3b9->leave($__internal_d3ccd9bb3bae0d3029adc6cc6a94a99b8ebcc26bfc54810f82f5b8c219c5a3b9_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_f2459974f6ec9e1b274cc55adc958595275f8dbb71ead309faa2d3ad7bd4b5a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2459974f6ec9e1b274cc55adc958595275f8dbb71ead309faa2d3ad7bd4b5a8->enter($__internal_f2459974f6ec9e1b274cc55adc958595275f8dbb71ead309faa2d3ad7bd4b5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 19
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
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entities"] ?? $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 43
            echo "                            <tr>
                                <td style=\"text-align: center;\"><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_voir", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                                <td style=\"text-align: center;\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                                <td style=\"text-align: center;\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
            echo "</td>
                                <td style=\"text-align: center;\">
                                    <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn-success btn-xs dropdown-toggle\"
                                                data-toggle=\"dropdown\">Action<span class=\"caret\"></span></button>
                                        <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">   
                                            <li>
                                                <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_voir", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Afficher</a>
                                            </li>
                                            ";
            // line 55
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 56
                echo "                                                <li>
                                                    <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crediter_compte_distributeur", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">Créditer ce compte</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_new", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">Modifier</a>
                                                </li>
                                                <li>
                                                    <a class=\"change_rigth\" href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rigth_change", array("userId" => $this->getAttribute($context["entity"], "id", array()), "option" => "add")), "html", null, true);
                echo "\">Ajouter des roles</a>
                                                </li>
                                                <li class=\"divider\"></li>
                                                <li>
                                                    <a class=\"change_rigth\" href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rigth_change", array("userId" => $this->getAttribute($context["entity"], "id", array()), "option" => "delete")), "html", null, true);
                echo "\">Enlever des roles</a>
                                                </li>
                                                ";
                // line 69
                if (($this->getAttribute($context["entity"], "enabled", array()) == 1)) {
                    // line 70
                    echo "                                                    <li>
                                                        <a href=\"";
                    // line 71
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_desactive", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">Suspendre le compte</a>
                                                    </li>
                                                ";
                } else {
                    // line 74
                    echo "                                                    <li>
                                                        <a href=\"";
                    // line 75
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_active", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">Activer le compte</a>
                                                    </li>
                                                ";
                }
                // line 78
                echo "                                            ";
            }
            // line 79
            echo "                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                    </tbody>
                </table>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <table style=\"width: 100%;\" class=\"table\">
                            <tr>
                                ";
        // line 92
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
    ";
        // line 100
        echo twig_include($this->env, $context, "FadcoBundle:Prestataire:popups.html.twig");
        echo "
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_f2459974f6ec9e1b274cc55adc958595275f8dbb71ead309faa2d3ad7bd4b5a8->leave($__internal_f2459974f6ec9e1b274cc55adc958595275f8dbb71ead309faa2d3ad7bd4b5a8_prof);

    }

    // line 104
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_dd4d7bb8dd09f9ab098642c619522a89c4e83a1016cc849a419d4e279c63a17a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd4d7bb8dd09f9ab098642c619522a89c4e83a1016cc849a419d4e279c63a17a->enter($__internal_dd4d7bb8dd09f9ab098642c619522a89c4e83a1016cc849a419d4e279c63a17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 105
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/style/jquery.accordDate.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/bootstrap-slider/last/bootstrap-slider.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/jQueryfiler/js/jquery.filer.min.js"), "html", null, true);
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
        
        $__internal_dd4d7bb8dd09f9ab098642c619522a89c4e83a1016cc849a419d4e279c63a17a->leave($__internal_dd4d7bb8dd09f9ab098642c619522a89c4e83a1016cc849a419d4e279c63a17a_prof);

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
        return array (  267 => 108,  263 => 107,  259 => 106,  254 => 105,  248 => 104,  239 => 101,  235 => 100,  223 => 92,  214 => 84,  204 => 79,  201 => 78,  195 => 75,  192 => 74,  186 => 71,  183 => 70,  181 => 69,  176 => 67,  169 => 63,  163 => 60,  157 => 57,  154 => 56,  152 => 55,  147 => 53,  137 => 46,  133 => 45,  127 => 44,  124 => 43,  120 => 42,  95 => 19,  89 => 18,  80 => 15,  76 => 14,  70 => 12,  64 => 11,  54 => 7,  50 => 6,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
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
        <a href=\"{{ path('export_excel_prestataire') }}\"><input type=\"button\" class=\"btn btn-primary btn-xs\"value=\"Exporter en excel\"/></a>
    </div>
{% endblock %}

{% block stylesheet %}
    {{ parent() }}
    <link rel=\"stylesheet\"
          href=\"{{ asset('bundles/FadcoBundle/plugins/bootstrap-slider/last/bootstrap-slider.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/FadcoBundle/plugins/jQueryfiler/css/jquery.filer.css') }}\">
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
                        <table style=\"width: 100%;\" class=\"table\">
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
    {{ include('FadcoBundle:Prestataire:popups.html.twig') }}
    <script src=\"{{ asset('bundles/FadcoBundle/plugins/datatables/jquery.dataTables.min.js') }}\"></script>
{% endblock %}

{% block javascript %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/FadcoBundle/style/jquery.accordDate.js') }}\"></script>
    <script src=\"{{ asset('bundles/FadcoBundle/plugins/bootstrap-slider/last/bootstrap-slider.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/FadcoBundle/plugins/jQueryfiler/js/jquery.filer.min.js') }}\"></script>
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
