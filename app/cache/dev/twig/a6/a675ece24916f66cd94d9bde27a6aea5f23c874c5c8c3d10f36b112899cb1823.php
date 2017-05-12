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
        $__internal_92431aebf6ac148ab0f9b51106253b23be087d5583251d221ec8ed3f85174d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92431aebf6ac148ab0f9b51106253b23be087d5583251d221ec8ed3f85174d03->enter($__internal_92431aebf6ac148ab0f9b51106253b23be087d5583251d221ec8ed3f85174d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Prestataire:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92431aebf6ac148ab0f9b51106253b23be087d5583251d221ec8ed3f85174d03->leave($__internal_92431aebf6ac148ab0f9b51106253b23be087d5583251d221ec8ed3f85174d03_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0203bc255ee4d5288939578c7812bf20e5bcd7cb375609516027ef9017e59b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0203bc255ee4d5288939578c7812bf20e5bcd7cb375609516027ef9017e59b17->enter($__internal_0203bc255ee4d5288939578c7812bf20e5bcd7cb375609516027ef9017e59b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des distributeurs";
        
        $__internal_0203bc255ee4d5288939578c7812bf20e5bcd7cb375609516027ef9017e59b17->leave($__internal_0203bc255ee4d5288939578c7812bf20e5bcd7cb375609516027ef9017e59b17_prof);

    }

    // line 3
    public function block_page_quick_actions($context, array $blocks = array())
    {
        $__internal_ecd2431084982fd939cc557aa2b66511b875ce3e7d0564ec4ac30f37449b53a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd2431084982fd939cc557aa2b66511b875ce3e7d0564ec4ac30f37449b53a7->enter($__internal_ecd2431084982fd939cc557aa2b66511b875ce3e7d0564ec4ac30f37449b53a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_quick_actions"));

        // line 4
        echo "    <div>
        ";
        // line 6
        echo "        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_new", array("id" => null));
        echo "\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Ajouter un nouveau distributeur\"/></a>
        <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("export_excel_prestataire");
        echo "\"><input type=\"button\" class=\"btn btn-primary btn-xs\"value=\"Exporter en excel\"/></a>
    </div>
";
        
        $__internal_ecd2431084982fd939cc557aa2b66511b875ce3e7d0564ec4ac30f37449b53a7->leave($__internal_ecd2431084982fd939cc557aa2b66511b875ce3e7d0564ec4ac30f37449b53a7_prof);

    }

    // line 11
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_bd77d36b60009e91f475fe082718d7fae456806c2e16306c59df3154a88c96c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd77d36b60009e91f475fe082718d7fae456806c2e16306c59df3154a88c96c4->enter($__internal_bd77d36b60009e91f475fe082718d7fae456806c2e16306c59df3154a88c96c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_bd77d36b60009e91f475fe082718d7fae456806c2e16306c59df3154a88c96c4->leave($__internal_bd77d36b60009e91f475fe082718d7fae456806c2e16306c59df3154a88c96c4_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_477daeac36f047f56e745994e351808303ffad8514243b358a81dcb9b58917d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477daeac36f047f56e745994e351808303ffad8514243b358a81dcb9b58917d9->enter($__internal_477daeac36f047f56e745994e351808303ffad8514243b358a81dcb9b58917d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                            <th style=\"text-align: center;\">Distributeur</th>
                            <th style=\"text-align: center;\">Compte</th>
                            <th style=\"text-align: center;\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 42
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
            // line 43
            echo "                            <tr>
                                <td style=\"text-align: center;\"><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_voir", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</a></td>
                                <td style=\"text-align: center;\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
                                <td style=\"text-align: center;\">";
            // line 46
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["entity"], "account", array()), 0, ".", " "), "html", null, true);
            echo " f</td>
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
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
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
                                                <li>
                                                    <a class=\"change_rigth\" href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rigth_change", array("userId" => $this->getAttribute($context["entity"], "id", array()), "option" => "delete")), "html", null, true);
                echo "\">Enlever des roles</a>
                                                </li>
                                                ";
                // line 68
                if (($this->getAttribute($context["entity"], "enabled", array()) == 1)) {
                    // line 69
                    echo "                                                    <li>
                                                        <a href=\"";
                    // line 70
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_desactive", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">Suspendre le compte</a>
                                                    </li>
                                                ";
                } else {
                    // line 73
                    echo "                                                    <li>
                                                        <a href=\"";
                    // line 74
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_active", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">Activer le compte</a>
                                                    </li>
                                                ";
                }
                // line 77
                echo "                                            ";
            }
            // line 78
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
        // line 83
        echo "                    </tbody>
                </table>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <table style=\"width: 100%;\" class=\"table\">
                            <tr>
                                ";
        // line 92
        echo "                            </tr>
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
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_477daeac36f047f56e745994e351808303ffad8514243b358a81dcb9b58917d9->leave($__internal_477daeac36f047f56e745994e351808303ffad8514243b358a81dcb9b58917d9_prof);

    }

    // line 105
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_fa3c9c92b31e34d0024566d2d3c047d890411ecec90b01d09c38b5d194d07668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa3c9c92b31e34d0024566d2d3c047d890411ecec90b01d09c38b5d194d07668->enter($__internal_fa3c9c92b31e34d0024566d2d3c047d890411ecec90b01d09c38b5d194d07668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 106
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/style/jquery.accordDate.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/bootstrap-slider/last/bootstrap-slider.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 109
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
        
        $__internal_fa3c9c92b31e34d0024566d2d3c047d890411ecec90b01d09c38b5d194d07668->leave($__internal_fa3c9c92b31e34d0024566d2d3c047d890411ecec90b01d09c38b5d194d07668_prof);

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
        return array (  296 => 109,  292 => 108,  288 => 107,  283 => 106,  277 => 105,  268 => 102,  263 => 100,  253 => 92,  244 => 83,  226 => 78,  223 => 77,  217 => 74,  214 => 73,  208 => 70,  205 => 69,  203 => 68,  198 => 66,  192 => 63,  186 => 60,  180 => 57,  177 => 56,  175 => 55,  170 => 53,  160 => 46,  156 => 45,  150 => 44,  147 => 43,  130 => 42,  105 => 19,  99 => 18,  90 => 15,  86 => 14,  80 => 12,  74 => 11,  64 => 7,  59 => 6,  56 => 4,  50 => 3,  38 => 2,  11 => 1,);
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
{% block title %}Liste des distributeurs{% endblock %}
{% block page_quick_actions %}
    <div>
        {#<a href=\"{{ path('grh_prestataire') }}\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour\"/></a> #}
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
                            <th style=\"text-align: center;\">Distributeur</th>
                            <th style=\"text-align: center;\">Compte</th>
                            <th style=\"text-align: center;\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for entity in entities %}
                            <tr>
                                <td style=\"text-align: center;\"><a href=\"{{ path('grh_prestataire_voir', { 'id': entity.id }) }}\">{{ loop.index }}</a></td>
                                <td style=\"text-align: center;\">{{ entity.name }}</td>
                                <td style=\"text-align: center;\">{{ entity.account|number_format(0,'.',' ') }} f</td>
                                <td style=\"text-align: center;\">
                                    <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn-success btn-xs dropdown-toggle\"
                                                data-toggle=\"dropdown\">Action<span class=\"caret\"></span></button>
                                        <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">   
                                            <li>
                                                <a href=\"{{ path('grh_prestataire_voir', { 'id': entity.id }) }}\">Afficher</a>
                                            </li>
                                            {% if is_granted('ROLE_ADMIN') %}
                                                <li>
                                                    <a href=\"{{ path('crediter_compte_distributeur', { 'id': entity.id }) }}\">Créditer ce compte</a>
                                                </li>
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
