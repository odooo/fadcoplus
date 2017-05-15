<?php

/* FadcoBundle:GestionDesAlertes:ShowAll.html.twig */
class __TwigTemplate_cd1d2934b36b5be7244bc01c8436a1b9cf9dce700c4784791fe07b5387e38725 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FadcoBundle:Default:menu.html.twig", "FadcoBundle:GestionDesAlertes:ShowAll.html.twig", 1);
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
        $__internal_f66fba31891bdcfaa06a7d9884fe469994a4870391f2ae188fc216e2fb3737da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f66fba31891bdcfaa06a7d9884fe469994a4870391f2ae188fc216e2fb3737da->enter($__internal_f66fba31891bdcfaa06a7d9884fe469994a4870391f2ae188fc216e2fb3737da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:GestionDesAlertes:ShowAll.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f66fba31891bdcfaa06a7d9884fe469994a4870391f2ae188fc216e2fb3737da->leave($__internal_f66fba31891bdcfaa06a7d9884fe469994a4870391f2ae188fc216e2fb3737da_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_88176314ed0d0eeba038f9c215deb50812d080fde50433fbf552cde8cbc4c0c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88176314ed0d0eeba038f9c215deb50812d080fde50433fbf552cde8cbc4c0c1->enter($__internal_88176314ed0d0eeba038f9c215deb50812d080fde50433fbf552cde8cbc4c0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "        
  <div class=\"box box-primary\">
\t\t<div class=\"box-header with-border\">
\t\t\t<h1 class=\"box-title\">Liste des notifications reçues</h1>
\t\t\t<div class=\"box-tools pull-right\">
\t\t\t\t<button class=\"btn btn-box-tool\" data-widget=\"collapse\">
\t\t\t\t\t<i class=\"fa fa-minus\"></i>
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
\t\t<div style=\"padding-left: 25%; padding-right: 25%\" class=\"box-body\">
              ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alertes"]) ? $context["alertes"] : $this->getContext($context, "alertes")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 15
            echo "
           <div class=\"panel panel-info\">
              <div ";
            // line 17
            if (($this->getAttribute($context["entity"], "EtatAlerte", array()) == "non lue")) {
                echo " style=\" background-color: #F5F5F5;\" ";
            }
            echo " class=\"panel-body  table-responsive\">
                 
                  <a  class=\"notification-lien\" alerte-lu=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("alertes_lu", array("id" => $this->getAttribute($context["entity"], "IdAlerte", array()))), "html", null, true);
            echo "\" alerte-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "IdAlerte", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getBaseURL", array(), "method") . $this->getAttribute($context["entity"], "LienAlerte", array())), "html", null, true);
            echo "\">
                    <div class='row'>
                        
                        <div class=\"col-md-2\">
                           <div class=\"alerte-image pull-left\">
                                  <!-- User Image -->
                                 <img style=\" width: 90px; height: 90px;\" src=\" ";
            // line 25
            if ($this->getAttribute($context["entity"], "Prestataire", array())) {
                if (twig_test_empty($this->getAttribute($this->getAttribute($context["entity"], "Prestataire", array()), "photo", array()))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/images/avatar.png"), "html", null, true);
                    echo " ";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["entity"], "Prestataire", array()), "WebPhoto", array())), "html", null, true);
                    echo " ";
                }
            }
            echo "\" class=\"user-image img-circle\" alt=\"User Image\">
                            </div>
                         </div>
                            
                        <div class=\"col-md-10\">
                            <div style=\" color: #000000\">
                                
                                <p class=\"alerte-message\" > <b><span class=\"alerte-username\">";
            // line 32
            if ($this->getAttribute($context["entity"], "Prestataire", array())) {
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "Prestataire", array()), "nom", array())), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "Prestataire", array()), "prenom", array()), "html", null, true);
            }
            echo "</span></b>&nbsp;&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "MessageAlerte", array()), "html", null, true);
            echo "</p>
                            </div>
                            <p></p>
                            <small class=\"alerte-moment\"><i class=\"fa fa-clock-o\"></i><span class='datenotification' annee='";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "DateAlerte", array()), "Y"), "html", null, true);
            echo "' mois='";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "DateAlerte", array()), "m"), "html", null, true);
            echo "' jour='";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "DateAlerte", array()), "d"), "html", null, true);
            echo "' heure='";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "DateAlerte", array()), "H"), "html", null, true);
            echo "' minute='";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "DateAlerte", array()), "i"), "html", null, true);
            echo "' second='";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "DateAlerte", array()), "s"), "html", null, true);
            echo "'></span></small>
        
                            ";
            // line 37
            if ((($this->getAttribute($context["entity"], "etatAlerte", array()) == "lu") || ($this->getAttribute($context["entity"], "etatAlerte", array()) == "lue"))) {
                // line 38
                echo "                                <small class=\"btn btn-primary btn-xs\">
                                      <span>Lu</span>
                                </small>
                             ";
            } else {
                // line 42
                echo "                                  <small class=\"btn btn-danger btn-xs\">
                                      <span>Non Lu</span>
                                </small>
                             ";
            }
            // line 46
            echo "                            
                        </div>
                        
                  <!-- end message -->
                    </div>
                </a>
                </div>          
             </div>

              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "       
  </div>
</div>   
          <!-- /.messages-menu -->
          
          <script>
        \$('.notification-lien').click(function(e){
                    e.preventDefault();
                    \$.ajax({
                        url : \$(this).attr('alerte-lu'),
                        type : 'GET',
                        dataType : 'html',
                        success : function(code_html, statut){
                          
                        },
                        error : function(resultat, statut, erreur){
                                
                        }
                      


                     });  
                     \$(location).attr('href',\$(this).attr('href'));    
                });   
    </script>
  ";
        
        $__internal_88176314ed0d0eeba038f9c215deb50812d080fde50433fbf552cde8cbc4c0c1->leave($__internal_88176314ed0d0eeba038f9c215deb50812d080fde50433fbf552cde8cbc4c0c1_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:GestionDesAlertes:ShowAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 56,  141 => 46,  135 => 42,  129 => 38,  127 => 37,  112 => 35,  100 => 32,  80 => 25,  67 => 19,  60 => 17,  56 => 15,  52 => 14,  34 => 3,  11 => 1,);
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
  <div class=\"box box-primary\">
\t\t<div class=\"box-header with-border\">
\t\t\t<h1 class=\"box-title\">Liste des notifications reçues</h1>
\t\t\t<div class=\"box-tools pull-right\">
\t\t\t\t<button class=\"btn btn-box-tool\" data-widget=\"collapse\">
\t\t\t\t\t<i class=\"fa fa-minus\"></i>
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
\t\t<div style=\"padding-left: 25%; padding-right: 25%\" class=\"box-body\">
              {% for entity in alertes %}

           <div class=\"panel panel-info\">
              <div {% if entity.EtatAlerte=='non lue' %} style=\" background-color: #F5F5F5;\" {% endif %} class=\"panel-body  table-responsive\">
                 
                  <a  class=\"notification-lien\" alerte-lu=\"{{ path('alertes_lu',{ 'id':entity.IdAlerte})}}\" alerte-id=\"{{entity.IdAlerte}}\" href=\"{{app.request.getBaseURL()~entity.LienAlerte }}\">
                    <div class='row'>
                        
                        <div class=\"col-md-2\">
                           <div class=\"alerte-image pull-left\">
                                  <!-- User Image -->
                                 <img style=\" width: 90px; height: 90px;\" src=\" {% if entity.Prestataire %}{% if  entity.Prestataire.photo is empty %} {{ asset('bundles/FadcoBundle/images/avatar.png') }} {% else %} {{asset( entity.Prestataire.WebPhoto )}} {% endif %}{% endif %}\" class=\"user-image img-circle\" alt=\"User Image\">
                            </div>
                         </div>
                            
                        <div class=\"col-md-10\">
                            <div style=\" color: #000000\">
                                
                                <p class=\"alerte-message\" > <b><span class=\"alerte-username\">{% if entity.Prestataire %}{{entity.Prestataire.nom|upper}}  {{entity.Prestataire.prenom }}{% endif %}</span></b>&nbsp;&nbsp;{{entity.MessageAlerte}}</p>
                            </div>
                            <p></p>
                            <small class=\"alerte-moment\"><i class=\"fa fa-clock-o\"></i><span class='datenotification' annee='{{entity.DateAlerte|date('Y')}}' mois='{{entity.DateAlerte|date('m')}}' jour='{{entity.DateAlerte|date('d')}}' heure='{{entity.DateAlerte|date('H')}}' minute='{{entity.DateAlerte|date('i')}}' second='{{entity.DateAlerte|date('s')}}'></span></small>
        
                            {% if entity.etatAlerte == 'lu' or entity.etatAlerte == 'lue' %}
                                <small class=\"btn btn-primary btn-xs\">
                                      <span>Lu</span>
                                </small>
                             {% else %}
                                  <small class=\"btn btn-danger btn-xs\">
                                      <span>Non Lu</span>
                                </small>
                             {% endif %}
                            
                        </div>
                        
                  <!-- end message -->
                    </div>
                </a>
                </div>          
             </div>

              {% endfor %}
       
  </div>
</div>   
          <!-- /.messages-menu -->
          
          <script>
        \$('.notification-lien').click(function(e){
                    e.preventDefault();
                    \$.ajax({
                        url : \$(this).attr('alerte-lu'),
                        type : 'GET',
                        dataType : 'html',
                        success : function(code_html, statut){
                          
                        },
                        error : function(resultat, statut, erreur){
                                
                        }
                      


                     });  
                     \$(location).attr('href',\$(this).attr('href'));    
                });   
    </script>
  {% endblock %}  ", "FadcoBundle:GestionDesAlertes:ShowAll.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\src\\FadcoBundle/Resources/views/GestionDesAlertes/ShowAll.html.twig");
    }
}
