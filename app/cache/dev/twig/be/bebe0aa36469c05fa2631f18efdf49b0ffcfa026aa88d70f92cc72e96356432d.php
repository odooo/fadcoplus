<?php

/* FadcoBundle:Distributeur:valider-reabo.html.twig */
class __TwigTemplate_617dab7d2d37d86285edaad956ed187aa21cd5d7a016b3debfac47689f2a969a extends Twig_Template
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
        $__internal_a4d9a4c2e930813010e48bb72298a5b14e12307f2401d6211d29635156800349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4d9a4c2e930813010e48bb72298a5b14e12307f2401d6211d29635156800349->enter($__internal_a4d9a4c2e930813010e48bb72298a5b14e12307f2401d6211d29635156800349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Distributeur:valider-reabo.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        // line 24
        echo " 
  <script>    

      \$(function () {
          \$('.datepicker').datepicker();
      });

      var \$validerForm = \$('#fadcobundle_valider_reabo').submit(function(e){
        e.preventDefault();
        \$('#fadcobundle_valider_reabo .btn').button('loading');
        \$('#pleaseWaitDialog').modal('show');

      \$.ajax({

          url: \$validerForm.attr('action'),
          type: \$validerForm.attr('method'),
          data: \$validerForm.serialize(),

          success: function (data) {
            if(data == 'OK'){
                  \$('#pleaseWaitDialog').modal('hide');
                  \$(\"#formModal\").modal('hide');
                  setTimeout(function(){ window.location.reload(); }, 1);
                }else{
                  \$('#pleaseWaitDialog').modal('hide');
                  \$(\"#formModal\").modal('show');
                  \$(\"#formContentBox\").empty().html(\"Erreur de validation, veuillez réessayer svp.\");
                }
          },
          error: function(data, status)
          {
              console.log(data);
          }
      });

      });    
  </script>";
        
        $__internal_a4d9a4c2e930813010e48bb72298a5b14e12307f2401d6211d29635156800349->leave($__internal_a4d9a4c2e930813010e48bb72298a5b14e12307f2401d6211d29635156800349_prof);

    }

    // line 1
    public function block_content($context, array $blocks = array())
    {
        $__internal_f66bbdb81e01b5d638d82db79b134be1474df7da105bf4ccb57c2b06ebb43c77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f66bbdb81e01b5d638d82db79b134be1474df7da105bf4ccb57c2b06ebb43c77->enter($__internal_f66bbdb81e01b5d638d82db79b134be1474df7da105bf4ccb57c2b06ebb43c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 2
        echo "  <div class=\"modal-body\">
      <h3 style=\"margin-left:30mm;\">Valider pour activer le ";
        // line 3
        if (array_key_exists("reabo", $context)) {
            echo "reabo. direct";
        } else {
            echo "complément";
        }
        echo "</h3><br/>
      <h5 style=\"margin-left:30mm;\">";
        // line 4
        if (array_key_exists("reabo", $context)) {
            echo " Réabonnement pour : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reabo"]) ? $context["reabo"] : $this->getContext($context, "reabo")), "duree", array()), "html", null, true);
        } else {
            echo "Complément de ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["complement"]) ? $context["complement"] : $this->getContext($context, "complement")), "oldFormule", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["complement"]) ? $context["complement"] : $this->getContext($context, "complement")), "oldOptions", array()), "html", null, true);
            echo " vers ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["complement"]) ? $context["complement"] : $this->getContext($context, "complement")), "formule", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["complement"]) ? $context["complement"] : $this->getContext($context, "complement")), "options", array()), "html", null, true);
            echo " ";
        }
        echo " </h5><br/>
    <form method=\"post\" action=\"";
        // line 5
        if (array_key_exists("reabo", $context)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo_valider", array("id" => $this->getAttribute((isset($context["reabo"]) ? $context["reabo"] : $this->getContext($context, "reabo")), "id", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo_complement_valider", array("id" => $this->getAttribute((isset($context["complement"]) ? $context["complement"] : $this->getContext($context, "complement")), "id", array()))), "html", null, true);
        }
        echo "\" name=\"fadcobundle_valider_reabo\" id=\"fadcobundle_valider_reabo\">

      <div class=\"input-group date\">
        <label class=\"input-group-addon\"><i class=\"fa fa-edit\"></i>Date d'échéance du réabo. </label>
        <input type=\"text\" required=\"required\" class=\"form-control datepicker\" name=\"fadcobundle_valider_reabo[dateEcheance]\" />
        <span class=\"input-group-addon\">
          <span class=\"glyphicon glyphicon-calendar\"></span>
        </span>
      </div>

      <div class=\"modal-footer\">
        <div class=\"input-group pull-right\">
          <button type=\"button\" class=\"btn btn-warning\" data-dismiss=\"modal\">Fermer</button>
          <button type=\"submit\" class=\"btn btn-success btn-do-transfer\">Valider</button>
        </div>     
      </div>     
    </form>
  </div>
";
        
        $__internal_f66bbdb81e01b5d638d82db79b134be1474df7da105bf4ccb57c2b06ebb43c77->leave($__internal_f66bbdb81e01b5d638d82db79b134be1474df7da105bf4ccb57c2b06ebb43c77_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Distributeur:valider-reabo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  102 => 5,  85 => 4,  77 => 3,  74 => 2,  68 => 1,  25 => 24,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block content %}
  <div class=\"modal-body\">
      <h3 style=\"margin-left:30mm;\">Valider pour activer le {% if reabo is defined %}reabo. direct{% else %}complément{% endif %}</h3><br/>
      <h5 style=\"margin-left:30mm;\">{% if reabo is defined %} Réabonnement pour : {{ reabo.duree }}{% else %}Complément de {{ complement.oldFormule }}/{{ complement.oldOptions }} vers {{  complement.formule }}/{{ complement.options }} {% endif %} </h5><br/>
    <form method=\"post\" action=\"{% if reabo is defined %}{{ path('fadco_espace_distributeur_reabo_valider', {'id': reabo.id }) }}{% else %}{{ path('fadco_espace_distributeur_reabo_complement_valider', {'id': complement.id }) }}{% endif %}\" name=\"fadcobundle_valider_reabo\" id=\"fadcobundle_valider_reabo\">

      <div class=\"input-group date\">
        <label class=\"input-group-addon\"><i class=\"fa fa-edit\"></i>Date d'échéance du réabo. </label>
        <input type=\"text\" required=\"required\" class=\"form-control datepicker\" name=\"fadcobundle_valider_reabo[dateEcheance]\" />
        <span class=\"input-group-addon\">
          <span class=\"glyphicon glyphicon-calendar\"></span>
        </span>
      </div>

      <div class=\"modal-footer\">
        <div class=\"input-group pull-right\">
          <button type=\"button\" class=\"btn btn-warning\" data-dismiss=\"modal\">Fermer</button>
          <button type=\"submit\" class=\"btn btn-success btn-do-transfer\">Valider</button>
        </div>     
      </div>     
    </form>
  </div>
{% endblock %}
 
  <script>    

      \$(function () {
          \$('.datepicker').datepicker();
      });

      var \$validerForm = \$('#fadcobundle_valider_reabo').submit(function(e){
        e.preventDefault();
        \$('#fadcobundle_valider_reabo .btn').button('loading');
        \$('#pleaseWaitDialog').modal('show');

      \$.ajax({

          url: \$validerForm.attr('action'),
          type: \$validerForm.attr('method'),
          data: \$validerForm.serialize(),

          success: function (data) {
            if(data == 'OK'){
                  \$('#pleaseWaitDialog').modal('hide');
                  \$(\"#formModal\").modal('hide');
                  setTimeout(function(){ window.location.reload(); }, 1);
                }else{
                  \$('#pleaseWaitDialog').modal('hide');
                  \$(\"#formModal\").modal('show');
                  \$(\"#formContentBox\").empty().html(\"Erreur de validation, veuillez réessayer svp.\");
                }
          },
          error: function(data, status)
          {
              console.log(data);
          }
      });

      });    
  </script>", "FadcoBundle:Distributeur:valider-reabo.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\src\\FadcoBundle/Resources/views/Distributeur/valider-reabo.html.twig");
    }
}
