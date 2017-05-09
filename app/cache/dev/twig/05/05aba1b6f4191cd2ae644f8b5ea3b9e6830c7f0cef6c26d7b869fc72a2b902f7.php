<?php

/* FadcoBundle:GestionDesAlertes:notifications.html.twig */
class __TwigTemplate_9cb1019f5dcf378dcf3a5f2f9d7aba22e3c88ee1a5fab4017b34bd79e649b8ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76ca27f70ecc886268df8095b58c05bf3a7e723f1546efab1213c4c6b3353c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ca27f70ecc886268df8095b58c05bf3a7e723f1546efab1213c4c6b3353c32->enter($__internal_76ca27f70ecc886268df8095b58c05bf3a7e723f1546efab1213c4c6b3353c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:GestionDesAlertes:notifications.html.twig"));

        // line 1
        echo "        
      <!-- Messages: style can be found in dropdown.less-->
          
          <li class=\"dropdown messages-menu \">
            
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
              <i class=\"fa fa-bell-o\"></i>
              ";
        // line 8
        if (((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) > 0)) {
            echo "<span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
            echo "</span>";
        }
        echo "</a>
            <ul class=\"dropdown-menu\">
              <li>
                <!-- inner menu: contains the messages -->
                <ul class=\"menu\">
               ";
        // line 13
        $context["cpt"] = 1;
        // line 14
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alertes"]) ? $context["alertes"] : $this->getContext($context, "alertes")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 15
            echo "                ";
            if (((isset($context["cpt"]) ? $context["cpt"] : $this->getContext($context, "cpt")) <= 5)) {
                // line 16
                echo "                  <li ";
                if (($this->getAttribute($context["entity"], "EtatAlerte", array()) == "non lue")) {
                    echo " style=\" background-color: #F5F5F5;\" ";
                }
                echo "><!-- start message -->
                    <a class=\"alerte-lien\" alerte-lu=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("alertes_lu", array("id" => $this->getAttribute($context["entity"], "IdAlerte", array()))), "html", null, true);
                echo "\" alerte-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "IdAlerte", array()), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getBaseURL", array(), "method") . $this->getAttribute($context["entity"], "LienAlerte", array())), "html", null, true);
                echo "\">
                      <div class=\"alerte-image pull-left\">
                        <!-- User Image -->
                       <img style=\" max-width: 100%; max-height: 100%;\" src=\" ";
                // line 20
                if ($this->getAttribute($context["entity"], "Prestataire", array())) {
                    echo " ";
                    if (twig_test_empty($this->getAttribute($this->getAttribute($context["entity"], "Prestataire", array()), "photo", array()))) {
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/GSPBundle/images/avatar.png"), "html", null, true);
                        echo " ";
                    } else {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["entity"], "Prestataire", array()), "WebPhoto", array())), "html", null, true);
                        echo " ";
                    }
                }
                echo "\" class=\"user-image img-circle\" alt=\"User Image\">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4 class=\"alerte-titre\">
                          <span class=\"alerte-username\">";
                // line 24
                if ($this->getAttribute($context["entity"], "Prestataire", array())) {
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "Prestataire", array()), "nom", array())), "html", null, true);
                    echo "  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "Prestataire", array()), "prenom", array()), "html", null, true);
                }
                echo "</span>
                        <small class=\"alerte-moment\"><i class=\"fa fa-clock-o\"></i><span class='datenotification' annee='";
                // line 25
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
                      </h4>
                      <!-- The message -->
                      <p class=\"alerte-message\" > ";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "MessageAlerte", array()), "html", null, true);
                echo "</p>
                    </a>
                  </li>
                  <!-- end message -->
                  ";
                // line 32
                $context["cpt"] = ((isset($context["cpt"]) ? $context["cpt"] : $this->getContext($context, "cpt")) + 1);
                // line 33
                echo "                  ";
            }
            // line 34
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                </ul>
                </li>
              <li class=\"footer\"> ";
        // line 37
        if (((isset($context["totalalertes"]) ? $context["totalalertes"] : $this->getContext($context, "totalalertes")) > 3)) {
            echo "<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_alertes_show_all");
            echo "\">Voir toutes les notications</a>";
        }
        echo "</li>
            </ul>
         
            
          </li>
       
          <!-- /.messages-menu -->
    ";
        
        $__internal_76ca27f70ecc886268df8095b58c05bf3a7e723f1546efab1213c4c6b3353c32->leave($__internal_76ca27f70ecc886268df8095b58c05bf3a7e723f1546efab1213c4c6b3353c32_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:GestionDesAlertes:notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 37,  129 => 35,  123 => 34,  120 => 33,  118 => 32,  111 => 28,  95 => 25,  87 => 24,  70 => 20,  60 => 17,  53 => 16,  50 => 15,  45 => 14,  43 => 13,  31 => 8,  22 => 1,);
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
      <!-- Messages: style can be found in dropdown.less-->
          
          <li class=\"dropdown messages-menu \">
            
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
              <i class=\"fa fa-bell-o\"></i>
              {% if total >0 %}<span class=\"label label-danger\">{{total}}</span>{% endif %}</a>
            <ul class=\"dropdown-menu\">
              <li>
                <!-- inner menu: contains the messages -->
                <ul class=\"menu\">
               {% set cpt=1%}
              {% for entity in alertes %}
                {%  if cpt<=5 %}
                  <li {% if entity.EtatAlerte=='non lue' %} style=\" background-color: #F5F5F5;\" {% endif %}><!-- start message -->
                    <a class=\"alerte-lien\" alerte-lu=\"{{ path('alertes_lu',{ 'id':entity.IdAlerte})}}\" alerte-id=\"{{entity.IdAlerte}}\" href=\"{{app.request.getBaseURL()~entity.LienAlerte }}\">
                      <div class=\"alerte-image pull-left\">
                        <!-- User Image -->
                       <img style=\" max-width: 100%; max-height: 100%;\" src=\" {% if entity.Prestataire  %} {% if entity.Prestataire.photo is empty %}{{ asset('bundles/GSPBundle/images/avatar.png') }} {% else %} {{asset( entity.Prestataire.WebPhoto )}} {% endif %}{% endif %}\" class=\"user-image img-circle\" alt=\"User Image\">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4 class=\"alerte-titre\">
                          <span class=\"alerte-username\">{% if entity.Prestataire %}{{entity.Prestataire.nom|upper}}  {{entity.Prestataire.prenom }}{% endif %}</span>
                        <small class=\"alerte-moment\"><i class=\"fa fa-clock-o\"></i><span class='datenotification' annee='{{entity.DateAlerte|date('Y')}}' mois='{{entity.DateAlerte|date('m')}}' jour='{{entity.DateAlerte|date('d')}}' heure='{{entity.DateAlerte|date('H')}}' minute='{{entity.DateAlerte|date('i')}}' second='{{entity.DateAlerte|date('s')}}'></span></small>
                      </h4>
                      <!-- The message -->
                      <p class=\"alerte-message\" > {{entity.MessageAlerte}}</p>
                    </a>
                  </li>
                  <!-- end message -->
                  {% set cpt=cpt+1%}
                  {% endif %}
              {% endfor %}
                </ul>
                </li>
              <li class=\"footer\"> {% if totalalertes >3 %}<a href=\"{{ path('grh_alertes_show_all')}}\">Voir toutes les notications</a>{% endif %}</li>
            </ul>
         
            
          </li>
       
          <!-- /.messages-menu -->
    ", "FadcoBundle:GestionDesAlertes:notifications.html.twig", "C:\\xampp\\htdocs\\fadco\\src\\FadcoBundle/Resources/views/GestionDesAlertes/notifications.html.twig");
    }
}
