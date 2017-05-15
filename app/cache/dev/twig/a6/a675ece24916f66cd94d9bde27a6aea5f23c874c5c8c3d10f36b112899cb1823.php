<?php

/* FadcoBundle:Prestataire:index.html.twig */
class __TwigTemplate_6e16365207475d14ccb8a1b8c051285ad1934660715f409e292042960a750583 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FadcoBundle:Default:menu.html.twig", "FadcoBundle:Prestataire:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_46884bceeee5fea13f1f24abf9a8d70a90c337a45efabc685f3bdc58d135b16b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46884bceeee5fea13f1f24abf9a8d70a90c337a45efabc685f3bdc58d135b16b->enter($__internal_46884bceeee5fea13f1f24abf9a8d70a90c337a45efabc685f3bdc58d135b16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Prestataire:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46884bceeee5fea13f1f24abf9a8d70a90c337a45efabc685f3bdc58d135b16b->leave($__internal_46884bceeee5fea13f1f24abf9a8d70a90c337a45efabc685f3bdc58d135b16b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c03bda59d4b501826c0d7642a34c168559dbf06bb5468afc840f3d3f71fbf0be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c03bda59d4b501826c0d7642a34c168559dbf06bb5468afc840f3d3f71fbf0be->enter($__internal_c03bda59d4b501826c0d7642a34c168559dbf06bb5468afc840f3d3f71fbf0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des comptes";
        
        $__internal_c03bda59d4b501826c0d7642a34c168559dbf06bb5468afc840f3d3f71fbf0be->leave($__internal_c03bda59d4b501826c0d7642a34c168559dbf06bb5468afc840f3d3f71fbf0be_prof);

    }

    // line 3
    public function block_page_quick_actions($context, array $blocks = array())
    {
        $__internal_b2fd2363bc2904d8be6744f95a6be3e30d00a85f76b280677962eba248e0f792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2fd2363bc2904d8be6744f95a6be3e30d00a85f76b280677962eba248e0f792->enter($__internal_b2fd2363bc2904d8be6744f95a6be3e30d00a85f76b280677962eba248e0f792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_quick_actions"));

        // line 4
        echo "    <div>
        ";
        // line 6
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 7
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_new", array("id" => null));
            echo "\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Ajouter un nouveau compte\"/></a>
        ";
        }
        // line 9
        echo "        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("export_excel_prestataire");
        echo "\"><input type=\"button\" class=\"btn btn-primary btn-xs\"value=\"Exporter en excel\"/></a>
    </div>
";
        
        $__internal_b2fd2363bc2904d8be6744f95a6be3e30d00a85f76b280677962eba248e0f792->leave($__internal_b2fd2363bc2904d8be6744f95a6be3e30d00a85f76b280677962eba248e0f792_prof);

    }

    // line 13
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_bcbb02dd2ff7988197d303d246d88284fdde5d239a285767db27eba3b557251e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcbb02dd2ff7988197d303d246d88284fdde5d239a285767db27eba3b557251e->enter($__internal_bcbb02dd2ff7988197d303d246d88284fdde5d239a285767db27eba3b557251e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 14
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\"
          href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/bootstrap-slider/last/bootstrap-slider.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/jQueryfiler/css/jquery.filer.css"), "html", null, true);
        echo "\">
";
        
        $__internal_bcbb02dd2ff7988197d303d246d88284fdde5d239a285767db27eba3b557251e->leave($__internal_bcbb02dd2ff7988197d303d246d88284fdde5d239a285767db27eba3b557251e_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_0fccdcdf70cd13b142ec58732b90100ee149c3c1d9b76190bff49bac689883a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fccdcdf70cd13b142ec58732b90100ee149c3c1d9b76190bff49bac689883a7->enter($__internal_0fccdcdf70cd13b142ec58732b90100ee149c3c1d9b76190bff49bac689883a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    <section class=\"content\">
        <div class=\"box box-default\">
            <div class=\"box-header with-border\">
                <h1 class=\"box-title\">Liste des comptes </h1>

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
                            <th style=\"text-align: center;\">Identité</th>
                            <th style=\"text-align: center;\">Type</th>
                            <th style=\"text-align: center;\">Compte</th>
                            <th style=\"text-align: center;\">Etat du compte</th>
                            <th style=\"text-align: center;\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 47
            echo "                            <tr>
                                <td style=\"text-align: center;\"><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_voir", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</a></td>
                                <td style=\"text-align: center;\">";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
                                <td style=\"text-align: center;\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "type", array()), "html", null, true);
            echo "</td>
                                <td style=\"text-align: center;\">";
            // line 51
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["entity"], "account", array()), 0, ".", " "), "html", null, true);
            echo " f</td>
                                <td style=\"text-align: center;\">";
            // line 52
            if (($this->getAttribute($context["entity"], "enabled", array()) == 0)) {
                echo "<span class=\"btn btn-xs btn-danger\">Compte suspendu</span>";
            } else {
                echo "<span class=\"btn btn-xs btn-info\">Compte actif</span>";
            }
            echo "</td>
                                <td style=\"text-align: center;\">
                                    <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn-success btn-xs dropdown-toggle\"
                                                data-toggle=\"dropdown\">Action<span class=\"caret\"></span></button>
                                        <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">   
                                            <li>
                                                <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_voir", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Afficher</a>
                                            </li>
                                            ";
            // line 61
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 62
                echo "                                                ";
                if (($this->getAttribute($context["entity"], "type", array()) == "distributeur")) {
                    // line 63
                    echo "                                                    <li>
                                                        <a href=\"";
                    // line 64
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crediter_compte_distributeur", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">Créditer ce compte</a>
                                                    </li>
                                                ";
                }
                // line 67
                echo "                                                <li>
                                                    <a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_new", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">Modifier</a>
                                                </li>
                                                <li>
                                                    <a class=\"change_rigth\" href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rigth_change", array("userId" => $this->getAttribute($context["entity"], "id", array()), "option" => "add")), "html", null, true);
                echo "\">Ajouter des roles</a>
                                                </li>
                                                <li>
                                                    <a class=\"change_rigth\" href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rigth_change", array("userId" => $this->getAttribute($context["entity"], "id", array()), "option" => "delete")), "html", null, true);
                echo "\">Enlever des roles</a>
                                                </li>
                                                ";
                // line 76
                if (($this->getAttribute($context["entity"], "enabled", array()) == 1)) {
                    // line 77
                    echo "                                                    <li>
                                                        <a href=\"";
                    // line 78
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_desactive", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">Suspendre le compte</a>
                                                    </li>
                                                ";
                } else {
                    // line 81
                    echo "                                                    <li>
                                                        <a href=\"";
                    // line 82
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_active", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">Activer le compte</a>
                                                    </li>
                                                ";
                }
                // line 85
                echo "                                            ";
            }
            // line 86
            echo "                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                    </tbody>
                </table>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <table style=\"width: 100%;\" class=\"table\">
                            <tr>
                                ";
        // line 100
        echo "                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    ";
        // line 108
        echo twig_include($this->env, $context, "FadcoBundle:Prestataire:popups.html.twig");
        echo "

    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_0fccdcdf70cd13b142ec58732b90100ee149c3c1d9b76190bff49bac689883a7->leave($__internal_0fccdcdf70cd13b142ec58732b90100ee149c3c1d9b76190bff49bac689883a7_prof);

    }

    // line 113
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_020dc16cb7e5c8c017418187fab27d346248f4d3921cab4d203721ab867d8c99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_020dc16cb7e5c8c017418187fab27d346248f4d3921cab4d203721ab867d8c99->enter($__internal_020dc16cb7e5c8c017418187fab27d346248f4d3921cab4d203721ab867d8c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 114
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/style/jquery.accordDate.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/bootstrap-slider/last/bootstrap-slider.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 117
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
        
        $__internal_020dc16cb7e5c8c017418187fab27d346248f4d3921cab4d203721ab867d8c99->leave($__internal_020dc16cb7e5c8c017418187fab27d346248f4d3921cab4d203721ab867d8c99_prof);

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
        return array (  321 => 117,  317 => 116,  313 => 115,  308 => 114,  302 => 113,  293 => 110,  288 => 108,  278 => 100,  269 => 91,  251 => 86,  248 => 85,  242 => 82,  239 => 81,  233 => 78,  230 => 77,  228 => 76,  223 => 74,  217 => 71,  211 => 68,  208 => 67,  202 => 64,  199 => 63,  196 => 62,  194 => 61,  189 => 59,  175 => 52,  171 => 51,  167 => 50,  163 => 49,  157 => 48,  154 => 47,  137 => 46,  110 => 21,  104 => 20,  95 => 17,  91 => 16,  85 => 14,  79 => 13,  68 => 9,  62 => 7,  59 => 6,  56 => 4,  50 => 3,  38 => 2,  11 => 1,);
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
{% block title %}Liste des comptes{% endblock %}
{% block page_quick_actions %}
    <div>
        {#<a href=\"{{ path('grh_prestataire') }}\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour\"/></a> #}
        {% if is_granted('ROLE_SUPER_ADMIN') %}
            <a href=\"{{ path('grh_prestataire_new', {'id': null }) }}\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Ajouter un nouveau compte\"/></a>
        {% endif %}
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
                <h1 class=\"box-title\">Liste des comptes </h1>

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
                            <th style=\"text-align: center;\">Identité</th>
                            <th style=\"text-align: center;\">Type</th>
                            <th style=\"text-align: center;\">Compte</th>
                            <th style=\"text-align: center;\">Etat du compte</th>
                            <th style=\"text-align: center;\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for entity in entities %}
                            <tr>
                                <td style=\"text-align: center;\"><a href=\"{{ path('grh_prestataire_voir', { 'id': entity.id }) }}\">{{ loop.index }}</a></td>
                                <td style=\"text-align: center;\">{{ entity.name }}</td>
                                <td style=\"text-align: center;\">{{ entity.type }}</td>
                                <td style=\"text-align: center;\">{{ entity.account|number_format(0,'.',' ') }} f</td>
                                <td style=\"text-align: center;\">{% if entity.enabled == 0 %}<span class=\"btn btn-xs btn-danger\">Compte suspendu</span>{% else %}<span class=\"btn btn-xs btn-info\">Compte actif</span>{% endif %}</td>
                                <td style=\"text-align: center;\">
                                    <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn-success btn-xs dropdown-toggle\"
                                                data-toggle=\"dropdown\">Action<span class=\"caret\"></span></button>
                                        <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">   
                                            <li>
                                                <a href=\"{{ path('grh_prestataire_voir', { 'id': entity.id }) }}\">Afficher</a>
                                            </li>
                                            {% if is_granted('ROLE_SUPER_ADMIN') %}
                                                {% if entity.type == 'distributeur' %}
                                                    <li>
                                                        <a href=\"{{ path('crediter_compte_distributeur', { 'id': entity.id }) }}\">Créditer ce compte</a>
                                                    </li>
                                                {% endif %}
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
                                {#<td><input type=\"submit\" class=\"btn btn-primary btn-xs\" value=\"Enregistrer\"/></td>
                                <td><a href=\"{{ path('grh_prestataire') }}\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour\"/></a></td>#}
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

", "FadcoBundle:Prestataire:index.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\src\\FadcoBundle/Resources/views/Prestataire/index.html.twig");
    }
}
