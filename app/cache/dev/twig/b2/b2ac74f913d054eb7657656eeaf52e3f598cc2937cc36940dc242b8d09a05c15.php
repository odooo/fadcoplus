<?php

/* FadcoBundle:Rigth:index.html.twig */
class __TwigTemplate_ccbf40b51e4e01fc5ec3b2a6be1a0960d6cc00b753b40eca8359de2c0ec50050 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FadcoBundle:Default:menu.html.twig", "FadcoBundle:Rigth:index.html.twig", 1);
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
        $__internal_2ed9c5fb208f875a8e5d785a2b6c943cce86d2afc40ef64b17f1c183ebd8d5e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed9c5fb208f875a8e5d785a2b6c943cce86d2afc40ef64b17f1c183ebd8d5e4->enter($__internal_2ed9c5fb208f875a8e5d785a2b6c943cce86d2afc40ef64b17f1c183ebd8d5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Rigth:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ed9c5fb208f875a8e5d785a2b6c943cce86d2afc40ef64b17f1c183ebd8d5e4->leave($__internal_2ed9c5fb208f875a8e5d785a2b6c943cce86d2afc40ef64b17f1c183ebd8d5e4_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_951a4e92e7ec0b4e69754cfb8333f63fa283787fdd59b0ccf01c87a789dfd905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_951a4e92e7ec0b4e69754cfb8333f63fa283787fdd59b0ccf01c87a789dfd905->enter($__internal_951a4e92e7ec0b4e69754cfb8333f63fa283787fdd59b0ccf01c87a789dfd905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
    <section class=\"content\">
        <div class=\"box box-primary\">
            <div class=\"box-header with-border\">
                <center> <h1 class=\"box-title\"><b>Liste des Droits</b></h1></center>
                <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\">
                        <i class=\"fa fa-minus\"></i>
                    </button>
                </div>
            </div>
            <div class=\"box-body\">
                <table id=\"lstProfils\" class=\"table table-bordered table-striped\">
                    <thead>
                        <tr>
                            <th>Numero Droit</th>
                            <th>Valeur Machine</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entities"] ?? $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 26
            echo "                            <tr>
                                <td><a href=\"";
            // line 27
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "express", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>

                                <td>
                                    <div class=\"input-group btn\">
                            <button type=\"button\" class=\"btn btn-success  dropdown-toggle pull-right\" data-toggle=\"dropdown\">Actions
                            <span class=\"fa fa-caret-down\"></span>
                            </button>
                            <ul class=\"dropdown-menu\">
                                
                               <li><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rigth_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Décrire</a>
                               </li>
                                
                            </ul>
                 </div>
                                </td>

                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                         </tbody>
                </table>
               </div>
</div>


</section>


<div class=\"modal modal-danger fade\" id=\"delModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delModalLabel\">
              <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation de suppression</h4>
                  </div>
                  <div class=\"modal-body\">
                    Etes-vous sur de vouloir supprimer cette direction ?
                  </div>
                  <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-outline pull-left\" data-dismiss=\"modal\">Non</button>
                    <button type=\"button\" class=\"btn btn-outline pull-right\" id=\"delModalBtn\">Oui</button>
                  </div>
                </div>
              </div>
            </div>

 <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle//plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/datatables/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>


     
     
    <script>
        \$(function () {
            \$('#lstProfils').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": true,
                \"ordering\": true,
                \"info\": false,
                \"autoWidth\": true,
                \"language\": {\"paginate\": {\"previous\": \"Précédent\", \"next\": \"Suivant\"}, \"search\": \"Rechercher: \",
                    \"emptyTable\": \"Actuellement La Base Des Directions Est Vide\", \"zeroRecords\": \"Aucune correspondance trouvée à votre recherche...Merci!!!.\"}
            });
        });
    </script>
            

            ";
        
        $__internal_951a4e92e7ec0b4e69754cfb8333f63fa283787fdd59b0ccf01c87a789dfd905->leave($__internal_951a4e92e7ec0b4e69754cfb8333f63fa283787fdd59b0ccf01c87a789dfd905_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Rigth:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 75,  136 => 74,  107 => 47,  92 => 38,  80 => 29,  76 => 28,  71 => 27,  68 => 26,  64 => 25,  40 => 3,  34 => 2,  11 => 1,);
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

    <section class=\"content\">
        <div class=\"box box-primary\">
            <div class=\"box-header with-border\">
                <center> <h1 class=\"box-title\"><b>Liste des Droits</b></h1></center>
                <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\">
                        <i class=\"fa fa-minus\"></i>
                    </button>
                </div>
            </div>
            <div class=\"box-body\">
                <table id=\"lstProfils\" class=\"table table-bordered table-striped\">
                    <thead>
                        <tr>
                            <th>Numero Droit</th>
                            <th>Valeur Machine</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for entity in entities %}
                            <tr>
                                <td><a href=\"{#{ path('admin_direction_show', { 'id': entity.id }) }#}\">{{ entity.id }}</a></td>
                                <td>{{ entity.express }}</td>
                                <td>{{entity.description}}</td>

                                <td>
                                    <div class=\"input-group btn\">
                            <button type=\"button\" class=\"btn btn-success  dropdown-toggle pull-right\" data-toggle=\"dropdown\">Actions
                            <span class=\"fa fa-caret-down\"></span>
                            </button>
                            <ul class=\"dropdown-menu\">
                                
                               <li><a href=\"{{ path('rigth_edit', { 'id': entity.id }) }}\">Décrire</a>
                               </li>
                                
                            </ul>
                 </div>
                                </td>

                            </tr>
                        {% endfor %}
                         </tbody>
                </table>
               </div>
</div>


</section>


<div class=\"modal modal-danger fade\" id=\"delModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delModalLabel\">
              <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation de suppression</h4>
                  </div>
                  <div class=\"modal-body\">
                    Etes-vous sur de vouloir supprimer cette direction ?
                  </div>
                  <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-outline pull-left\" data-dismiss=\"modal\">Non</button>
                    <button type=\"button\" class=\"btn btn-outline pull-right\" id=\"delModalBtn\">Oui</button>
                  </div>
                </div>
              </div>
            </div>

 <script src=\"{{asset('bundles/FadcoBundle//plugins/datatables/jquery.dataTables.min.js')}}\"></script>
    <script src=\"{{asset('bundles/FadcoBundle/plugins/datatables/dataTables.bootstrap.min.js')}}\"></script>


     
     
    <script>
        \$(function () {
            \$('#lstProfils').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": true,
                \"ordering\": true,
                \"info\": false,
                \"autoWidth\": true,
                \"language\": {\"paginate\": {\"previous\": \"Précédent\", \"next\": \"Suivant\"}, \"search\": \"Rechercher: \",
                    \"emptyTable\": \"Actuellement La Base Des Directions Est Vide\", \"zeroRecords\": \"Aucune correspondance trouvée à votre recherche...Merci!!!.\"}
            });
        });
    </script>
            

            {% endblock %}
", "FadcoBundle:Rigth:index.html.twig", "/var/www/html/fadcoplus/src/FadcoBundle/Resources/views/Rigth/index.html.twig");
    }
}
