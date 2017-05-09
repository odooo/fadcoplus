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
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FadcoBundle:Default:menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_132377edf805f9ea0d8b540c5013ad5088feb11e84e58922b4aecfb0aac71490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_132377edf805f9ea0d8b540c5013ad5088feb11e84e58922b4aecfb0aac71490->enter($__internal_132377edf805f9ea0d8b540c5013ad5088feb11e84e58922b4aecfb0aac71490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Prestataire:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_132377edf805f9ea0d8b540c5013ad5088feb11e84e58922b4aecfb0aac71490->leave($__internal_132377edf805f9ea0d8b540c5013ad5088feb11e84e58922b4aecfb0aac71490_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_e4e04d83befc28b6efcab39b6c89ae6e7bf6037694e092fe3ff40b1c4ef5f233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4e04d83befc28b6efcab39b6c89ae6e7bf6037694e092fe3ff40b1c4ef5f233->enter($__internal_e4e04d83befc28b6efcab39b6c89ae6e7bf6037694e092fe3ff40b1c4ef5f233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
    <h1>Liste des Prestataires </h1>
    <section class=\"content\">
        <div align=\"right\">
            <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_new", array("id" => ($context["id"] ?? $this->getContext($context, "id")))), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-success\">Ajouter un nouveau prestataire </button></a>
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
                    <table id=\"lstprestataire\" class=\"table table-bordered table-striped\">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Agence</th>
                            <th>Droit</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entities"] ?? $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 34
            echo "                            <tr>
                                <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_voir", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>

                                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 39
            if ($this->getAttribute($context["entity"], "agence", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "agence", array()), "libelle", array()), "html", null, true);
            }
            echo "</td>
                                <td> ";
            // line 40
            echo $this->getAttribute(($context["contro"] ?? $this->getContext($context, "contro")), "getRoleExpression", array(0 => $context["entity"]), "method");
            echo " </td>
                                <td>
                                    <div class=\"input-group btn\">
                                        <button type=\"button\" class=\"btn btn-success btn-xs  dropdown-toggle pull-right\" data-toggle=\"dropdown\">
                                            Actions  <span class=\"fa fa-caret-down\"></span>
                                        </button>
                                        <ul class=\"dropdown-menu pull-right\">
                                            <li>
                                                <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_voir", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Afficher</a>
                                            </li>
                                            ";
            // line 50
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 51
                echo "                                            <li>
                                                <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_new", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">Modifier</a>
                                            </li>
                                                <li>
                                                    <a class=\"change_rigth\" href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rigth_change", array("userId" => $this->getAttribute($context["entity"], "id", array()), "option" => "add")), "html", null, true);
                echo "\">Ajouter des roles</a>
                                                </li>
                                                <li>
                                                    <a class=\"change_rigth\" href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rigth_change", array("userId" => $this->getAttribute($context["entity"], "id", array()), "option" => "delete")), "html", null, true);
                echo "\">Enlever des roles</a>
                                                </li>
                                                ";
                // line 60
                if (($this->getAttribute($context["entity"], "enabled", array()) == 1)) {
                    // line 61
                    echo "                                                    <li>
                                                        <a href=\"";
                    // line 62
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_desactive", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">Désactiver le compte</a>
                                                    </li>
                                                ";
                } else {
                    // line 65
                    echo "                                                    <li>
                                                        <a href=\"";
                    // line 66
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_active", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">Activer le compte</a>
                                                    </li>
                                                ";
                }
                // line 69
                echo "                                            ";
            }
            // line 70
            echo "                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                    </tbody>
                </table>
            </div>
        </div>


        <div class=\"box box-primary\">
            
            <div class=\"box-body\">
                <div align=\"right\">
                    <a href=\"\"><button type=\"button\" class=\"btn btn-success\">Retour </button></a>
                </div>
            </div>
        </div>
    </section> 
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle//plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/datatables/dataTables.bootstrap.min.js"), "html", null, true);
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


    <script>
        \$(function () {
            \$('#lstprestataire').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": true,
                \"ordering\": true,
                \"info\": false,
                \"autoWidth\": true,
                \"language\": {\"paginate\": {\"previous\": \"Précédent\", \"next\": \"Suivant\"}, \"search\": \"Rechercher: \",
                    \"emptyTable\": \"Actu La Base Des Communes Est Vide\", \"zeroRecords\": \"Aucune correspondance trouvee a votre recherche...Merci!!!.\"}
            });
        });
    </script>    
";
        
        $__internal_e4e04d83befc28b6efcab39b6c89ae6e7bf6037694e092fe3ff40b1c4ef5f233->leave($__internal_e4e04d83befc28b6efcab39b6c89ae6e7bf6037694e092fe3ff40b1c4ef5f233_prof);

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
        return array (  195 => 91,  191 => 90,  174 => 75,  164 => 70,  161 => 69,  155 => 66,  152 => 65,  146 => 62,  143 => 61,  141 => 60,  136 => 58,  130 => 55,  124 => 52,  121 => 51,  119 => 50,  114 => 48,  103 => 40,  97 => 39,  93 => 38,  89 => 37,  82 => 35,  79 => 34,  75 => 33,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
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
{% block content %}

    <h1>Liste des Prestataires </h1>
    <section class=\"content\">
        <div align=\"right\">
            <a href=\"{{ path('grh_prestataire_new', {'id': id }) }}\"><button type=\"button\" class=\"btn btn-success\">Ajouter un nouveau prestataire </button></a>
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
                    <table id=\"lstprestataire\" class=\"table table-bordered table-striped\">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Agence</th>
                            <th>Droit</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for entity in entities %}
                            <tr>
                                <td><a href=\"{{ path('grh_prestataire_voir', { 'id': entity.id }) }}\">{{ entity.id }}</a></td>

                                <td>{{ entity.nom }}</td>
                                <td>{{ entity.prenom }}</td>
                                <td>{% if entity.agence %}{{ entity.agence.libelle }}{% endif %}</td>
                                <td> {{ contro.getRoleExpression(entity)|raw }} </td>
                                <td>
                                    <div class=\"input-group btn\">
                                        <button type=\"button\" class=\"btn btn-success btn-xs  dropdown-toggle pull-right\" data-toggle=\"dropdown\">
                                            Actions  <span class=\"fa fa-caret-down\"></span>
                                        </button>
                                        <ul class=\"dropdown-menu pull-right\">
                                            <li>
                                                <a href=\"{{ path('grh_prestataire_voir', { 'id': entity.id }) }}\">Afficher</a>
                                            </li>
                                            {% if is_granted('ROLE_SUPER_ADMIN') %}
                                            <li>
                                                <a href=\"{{ path('grh_prestataire_new', { 'id': entity.id }) }}\">Modifier</a>
                                            </li>
                                                <li>
                                                    <a class=\"change_rigth\" href=\"{{ path('rigth_change', { 'userId': entity.id,'option':'add' }) }}\">Ajouter des roles</a>
                                                </li>
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
        </div>


        <div class=\"box box-primary\">
            
            <div class=\"box-body\">
                <div align=\"right\">
                    <a href=\"\"><button type=\"button\" class=\"btn btn-success\">Retour </button></a>
                </div>
            </div>
        </div>
    </section> 
    <script src=\"{{asset('bundles/FadcoBundle//plugins/datatables/jquery.dataTables.min.js')}}\"></script>
    <script src=\"{{asset('bundles/FadcoBundle/plugins/datatables/dataTables.bootstrap.min.js')}}\"></script>

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


    <script>
        \$(function () {
            \$('#lstprestataire').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": true,
                \"ordering\": true,
                \"info\": false,
                \"autoWidth\": true,
                \"language\": {\"paginate\": {\"previous\": \"Précédent\", \"next\": \"Suivant\"}, \"search\": \"Rechercher: \",
                    \"emptyTable\": \"Actu La Base Des Communes Est Vide\", \"zeroRecords\": \"Aucune correspondance trouvee a votre recherche...Merci!!!.\"}
            });
        });
    </script>    
{% endblock %}
", "FadcoBundle:Prestataire:index.html.twig", "/var/www/html/fadcoplus/src/FadcoBundle/Resources/views/Prestataire/index.html.twig");
    }
}
