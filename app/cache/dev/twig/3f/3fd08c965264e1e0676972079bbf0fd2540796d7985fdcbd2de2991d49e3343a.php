<?php

/* FadcoBundle:Rigth:change.html.twig */
class __TwigTemplate_cce27290d019ce3c0c86bf607fabcba310cbcaf278bfd5b09081e7743a3866cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0c87a6453c8df343c45fa92a7ae7ab37bfe28edeb4e5389ff5346e56080a321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0c87a6453c8df343c45fa92a7ae7ab37bfe28edeb4e5389ff5346e56080a321->enter($__internal_a0c87a6453c8df343c45fa92a7ae7ab37bfe28edeb4e5389ff5346e56080a321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Rigth:change.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_a0c87a6453c8df343c45fa92a7ae7ab37bfe28edeb4e5389ff5346e56080a321->leave($__internal_a0c87a6453c8df343c45fa92a7ae7ab37bfe28edeb4e5389ff5346e56080a321_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_c9610ca440f77087cc433f096dd5242c5ca40b7b9da307f83620ecf5521c6176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9610ca440f77087cc433f096dd5242c5ca40b7b9da307f83620ecf5521c6176->enter($__internal_c9610ca440f77087cc433f096dd5242c5ca40b7b9da307f83620ecf5521c6176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <section class=\"content\">
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
                <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rigth_change", array("userId" => ($context["user"] ?? $this->getContext($context, "user")), "option" => ($context["option"] ?? $this->getContext($context, "option")))), "html", null, true);
        echo "\" class=\"form-horizontal\"  method=\"POST\">
                   
                      <input type=\"hidden\" name=\"user\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["user"] ?? $this->getContext($context, "user")), "html", null, true);
        echo "\" />
                      <input type=\"hidden\" name=\"option\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["option"] ?? $this->getContext($context, "option")), "html", null, true);
        echo "\" />

                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["roles"] ?? $this->getContext($context, "roles")));
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
            // line 20
            echo "            
            ";
            // line 21
            if ((($this->getAttribute($context["loop"], "index", array()) % 4) == 0)) {
                echo " <div class=\"form-group\"> ";
            }
            // line 22
            echo "            
           
    <label class=\"control-label col-sm-2\" for=\"email\">";
            // line 24
            echo twig_escape_filter($this->env, $context["entity"], "html", null, true);
            echo "</label>
    <div class=\"col-sm-1\">
      <input type=\"checkbox\"  name=\"roles[]\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, $context["entity"], "html", null, true);
            echo "\" />
    </div>  
           

             ";
            // line 30
            if ((($this->getAttribute($context["loop"], "index", array()) % 4) == 0)) {
                echo " </div>";
            }
            // line 31
            echo "
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
        // line 33
        echo "
<div class=\"form-group\">
         <button type=\"submit\" class=\"btn btn-primary\" >Valider</button>
         </div>                 
                </form>


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
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/GSPBundle//plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/GSPBundle/plugins/datatables/dataTables.bootstrap.min.js"), "html", null, true);
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
        
        $__internal_c9610ca440f77087cc433f096dd5242c5ca40b7b9da307f83620ecf5521c6176->leave($__internal_c9610ca440f77087cc433f096dd5242c5ca40b7b9da307f83620ecf5521c6176_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Rigth:change.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  162 => 66,  158 => 65,  124 => 33,  109 => 31,  105 => 30,  98 => 26,  93 => 24,  89 => 22,  85 => 21,  82 => 20,  65 => 19,  60 => 17,  56 => 16,  51 => 14,  38 => 3,  26 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
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
                <form action=\"{{ path('rigth_change', { 'userId': user,'option': option }) }}\" class=\"form-horizontal\"  method=\"POST\">
                   
                      <input type=\"hidden\" name=\"user\" value=\"{{user}}\" />
                      <input type=\"hidden\" name=\"option\" value=\"{{option}}\" />

                        {% for entity in roles %}
            
            {% if loop.index%4 == 0 %} <div class=\"form-group\"> {% endif %}
            
           
    <label class=\"control-label col-sm-2\" for=\"email\">{{entity}}</label>
    <div class=\"col-sm-1\">
      <input type=\"checkbox\"  name=\"roles[]\" value=\"{{entity}}\" />
    </div>  
           

             {% if loop.index%4 == 0 %} </div>{% endif %}

                        {% endfor %}

<div class=\"form-group\">
         <button type=\"submit\" class=\"btn btn-primary\" >Valider</button>
         </div>                 
                </form>


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

 <script src=\"{{asset('bundles/GSPBundle//plugins/datatables/jquery.dataTables.min.js')}}\"></script>
    <script src=\"{{asset('bundles/GSPBundle/plugins/datatables/dataTables.bootstrap.min.js')}}\"></script>
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
", "FadcoBundle:Rigth:change.html.twig", "/var/www/html/fadcoplus/src/FadcoBundle/Resources/views/Rigth/change.html.twig");
    }
}
