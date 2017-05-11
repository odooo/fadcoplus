<?php

/* FadcoBundle:Pages:error.html.twig */
class __TwigTemplate_18407278c7d209d62ef88e9d97ee5b0361984219e18ff7d200c3c95b8b00dfb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FadcoBundle:Default:menu.html.twig", "FadcoBundle:Pages:error.html.twig", 1);
        $this->blocks = array(
            'page_quick_actions' => array($this, 'block_page_quick_actions'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FadcoBundle:Default:menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_325f074a41b66325c81c417b57217ff1d689616e78621d9ebc8b0ed249bd0195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_325f074a41b66325c81c417b57217ff1d689616e78621d9ebc8b0ed249bd0195->enter($__internal_325f074a41b66325c81c417b57217ff1d689616e78621d9ebc8b0ed249bd0195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Pages:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_325f074a41b66325c81c417b57217ff1d689616e78621d9ebc8b0ed249bd0195->leave($__internal_325f074a41b66325c81c417b57217ff1d689616e78621d9ebc8b0ed249bd0195_prof);

    }

    // line 2
    public function block_page_quick_actions($context, array $blocks = array())
    {
        $__internal_c0bb0e4a806224b7351b4d34c52b3363377d437b0a8704d7a607754e6487acfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0bb0e4a806224b7351b4d34c52b3363377d437b0a8704d7a607754e6487acfc->enter($__internal_c0bb0e4a806224b7351b4d34c52b3363377d437b0a8704d7a607754e6487acfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_quick_actions"));

        // line 3
        echo "    <div>
        <a href=\"\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour\"/></a>
        <a href=\"\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Ajouter un nouveau distributeur\"/></a>
    </div>
";
        
        $__internal_c0bb0e4a806224b7351b4d34c52b3363377d437b0a8704d7a607754e6487acfc->leave($__internal_c0bb0e4a806224b7351b4d34c52b3363377d437b0a8704d7a607754e6487acfc_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_9501fac67888c27516056a15e9a599191f9bd50733afbdf5a80c2e40b8812970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9501fac67888c27516056a15e9a599191f9bd50733afbdf5a80c2e40b8812970->enter($__internal_9501fac67888c27516056a15e9a599191f9bd50733afbdf5a80c2e40b8812970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <section class=\"content\">
              <div class=\"error-page\">
        <h2 class=\"headline text-yellow\"> 404</h2>

        <div class=\"error-content\">
          <h3><i class=\"fa fa-warning text-yellow\"></i> Oops! Page non trouvée.</h3>

          <p>
            Impossible de trouver la page que vous cherchez.
            Cependant, vous pouvez <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire");
        echo "\">retourner à la page précédente</a> ou essayez le formulaire de recherche.
          </p>

          <form class=\"search-form\">
            <div class=\"input-group\">
              <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Search\">

              <div class=\"input-group-btn\">
                <button type=\"submit\" name=\"submit\" class=\"btn btn-warning btn-flat\"><i class=\"fa fa-search\"></i>
                </button>
              </div>
            </div>
            <!-- /.input-group -->
          </form>
        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    </section>
";
        
        $__internal_9501fac67888c27516056a15e9a599191f9bd50733afbdf5a80c2e40b8812970->leave($__internal_9501fac67888c27516056a15e9a599191f9bd50733afbdf5a80c2e40b8812970_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Pages:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  58 => 10,  52 => 9,  41 => 3,  35 => 2,  11 => 1,);
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
        <a href=\"\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour\"/></a>
        <a href=\"\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Ajouter un nouveau distributeur\"/></a>
    </div>
{% endblock %}

{% block content %}
    <section class=\"content\">
              <div class=\"error-page\">
        <h2 class=\"headline text-yellow\"> 404</h2>

        <div class=\"error-content\">
          <h3><i class=\"fa fa-warning text-yellow\"></i> Oops! Page non trouvée.</h3>

          <p>
            Impossible de trouver la page que vous cherchez.
            Cependant, vous pouvez <a href=\"{{ path('grh_prestataire') }}\">retourner à la page précédente</a> ou essayez le formulaire de recherche.
          </p>

          <form class=\"search-form\">
            <div class=\"input-group\">
              <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Search\">

              <div class=\"input-group-btn\">
                <button type=\"submit\" name=\"submit\" class=\"btn btn-warning btn-flat\"><i class=\"fa fa-search\"></i>
                </button>
              </div>
            </div>
            <!-- /.input-group -->
          </form>
        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    </section>
{% endblock %}

", "FadcoBundle:Pages:error.html.twig", "/var/www/html/fadcoplus/src/FadcoBundle/Resources/views/Pages/error.html.twig");
    }
}
