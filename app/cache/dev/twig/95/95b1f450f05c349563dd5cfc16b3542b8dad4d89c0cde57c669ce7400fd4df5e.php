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
        $__internal_47bceabb63d6e0577d7121a85e7eee4132f5c51101b72c77dce098ce475f4600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47bceabb63d6e0577d7121a85e7eee4132f5c51101b72c77dce098ce475f4600->enter($__internal_47bceabb63d6e0577d7121a85e7eee4132f5c51101b72c77dce098ce475f4600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Prestataire:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47bceabb63d6e0577d7121a85e7eee4132f5c51101b72c77dce098ce475f4600->leave($__internal_47bceabb63d6e0577d7121a85e7eee4132f5c51101b72c77dce098ce475f4600_prof);

    }

    // line 2
    public function block_page_quick_actions($context, array $blocks = array())
    {
        $__internal_9c122a90bd845361ef6cb5c16d9d396ab65b63198883e36c2fd684c38db40407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c122a90bd845361ef6cb5c16d9d396ab65b63198883e36c2fd684c38db40407->enter($__internal_9c122a90bd845361ef6cb5c16d9d396ab65b63198883e36c2fd684c38db40407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_quick_actions"));

        // line 3
        echo "    <div>
        <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire");
        echo "\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour\"/></a>
        <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_new", array("id" => ($context["id"] ?? $this->getContext($context, "id")))), "html", null, true);
        echo "\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Ajouter un nouveau distributeur\"/></a>
    </div>
";
        
        $__internal_9c122a90bd845361ef6cb5c16d9d396ab65b63198883e36c2fd684c38db40407->leave($__internal_9c122a90bd845361ef6cb5c16d9d396ab65b63198883e36c2fd684c38db40407_prof);

    }

    // line 8
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_dd020461e4bef5aca6bd98eb92282397cea622879f919db5ac28c867afa513d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd020461e4bef5aca6bd98eb92282397cea622879f919db5ac28c867afa513d9->enter($__internal_dd020461e4bef5aca6bd98eb92282397cea622879f919db5ac28c867afa513d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 9
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\"
          href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/GSPBundle/plugins/bootstrap-slider/last/bootstrap-slider.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/GSPBundle/plugins/jQueryfiler/css/jquery.filer.css"), "html", null, true);
        echo "\">
";
        
        $__internal_dd020461e4bef5aca6bd98eb92282397cea622879f919db5ac28c867afa513d9->leave($__internal_dd020461e4bef5aca6bd98eb92282397cea622879f919db5ac28c867afa513d9_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_88381bbc9fd33088184e93ff8100c2377cad77c7adcfb6a86ec398584b5656c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88381bbc9fd33088184e93ff8100c2377cad77c7adcfb6a86ec398584b5656c7->enter($__internal_88381bbc9fd33088184e93ff8100c2377cad77c7adcfb6a86ec398584b5656c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
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
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entities"] ?? $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 40
            echo "                            <tr>
                                <td style=\"text-align: center;\"><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_voir", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                                <td style=\"text-align: center;\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                                <td style=\"text-align: center;\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
            echo "</td>
                                <td style=\"text-align: center;\">
                                    <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn-success btn-xs dropdown-toggle\"
                                                data-toggle=\"dropdown\">Action<span class=\"caret\"></span></button>
                                        <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">   
                                            <li>
                                                <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_voir", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Afficher</a>
                                            </li>
                                            ";
            // line 52
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 53
                echo "                                                <li>
                                                    <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crediter_compte_distributeur", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">Créditer ce compte</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_new", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">Modifier</a>
                                                </li>
                                                <li>
                                                    <a class=\"change_rigth\" href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rigth_change", array("userId" => $this->getAttribute($context["entity"], "id", array()), "option" => "add")), "html", null, true);
                echo "\">Ajouter des roles</a>
                                                </li>
                                                <li class=\"divider\"></li>
                                                <li>
                                                    <a class=\"change_rigth\" href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rigth_change", array("userId" => $this->getAttribute($context["entity"], "id", array()), "option" => "delete")), "html", null, true);
                echo "\">Enlever des roles</a>
                                                </li>
                                                ";
                // line 66
                if (($this->getAttribute($context["entity"], "enabled", array()) == 1)) {
                    // line 67
                    echo "                                                    <li>
                                                        <a href=\"";
                    // line 68
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_desactive", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">Désactiver le compte</a>
                                                    </li>
                                                ";
                } else {
                    // line 71
                    echo "                                                    <li>
                                                        <a href=\"";
                    // line 72
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_active", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">Activer le compte</a>
                                                    </li>
                                                ";
                }
                // line 75
                echo "                                            ";
            }
            // line 76
            echo "                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                    </tbody>
                </table>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <table style=\"width: 10%;\" class=\"table\">
                            <tr>
                                ";
        // line 89
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
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/GSPBundle/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_88381bbc9fd33088184e93ff8100c2377cad77c7adcfb6a86ec398584b5656c7->leave($__internal_88381bbc9fd33088184e93ff8100c2377cad77c7adcfb6a86ec398584b5656c7_prof);

    }

    // line 102
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_d885dc00082aba37ed04a1842ed368010cfc59503d307793176f8b4d2fad9a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d885dc00082aba37ed04a1842ed368010cfc59503d307793176f8b4d2fad9a5d->enter($__internal_d885dc00082aba37ed04a1842ed368010cfc59503d307793176f8b4d2fad9a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 103
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/GSPBundle/plugins/datatables/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/GSPBundle/style/jquery.accordDate.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/GSPBundle/plugins/bootstrap-slider/last/bootstrap-slider.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 108
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
        
        $__internal_d885dc00082aba37ed04a1842ed368010cfc59503d307793176f8b4d2fad9a5d->leave($__internal_d885dc00082aba37ed04a1842ed368010cfc59503d307793176f8b4d2fad9a5d_prof);

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
        return array (  266 => 108,  262 => 107,  258 => 106,  253 => 104,  248 => 103,  242 => 102,  232 => 98,  219 => 89,  210 => 81,  200 => 76,  197 => 75,  191 => 72,  188 => 71,  182 => 68,  179 => 67,  177 => 66,  172 => 64,  165 => 60,  159 => 57,  153 => 54,  150 => 53,  148 => 52,  143 => 50,  133 => 43,  129 => 42,  123 => 41,  120 => 40,  116 => 39,  91 => 16,  85 => 15,  76 => 12,  72 => 11,  66 => 9,  60 => 8,  50 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
        <a href=\"{{ path('grh_prestataire_new', {'id': id }) }}\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Ajouter un nouveau distributeur\"/></a>
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
                                                        <a href=\"{{ path('grh_prestataire_desactive', { 'id': entity.id }) }}\">Désactiver le compte</a>
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
    <script src=\"{{ asset('bundles/GSPBundle/plugins/datatables/dataTables.bootstrap.min.js') }}\"></script>

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
