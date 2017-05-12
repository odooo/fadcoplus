<?php

/* FadcoBundle:Prestataire:creditAccountDistributeur.html.twig */
class __TwigTemplate_d7196cc317bacbcc7322ebe41ed026ac1ee6a240957c05d1658fc47414d1213b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FadcoBundle:Default:menu.html.twig", "FadcoBundle:Prestataire:creditAccountDistributeur.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contentHeader' => array($this, 'block_contentHeader'),
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
        $__internal_7ee9d3e422138c5910308ea9763b4d55973cb8eb9a89ccf935071fde13eee787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee9d3e422138c5910308ea9763b4d55973cb8eb9a89ccf935071fde13eee787->enter($__internal_7ee9d3e422138c5910308ea9763b4d55973cb8eb9a89ccf935071fde13eee787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Prestataire:creditAccountDistributeur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ee9d3e422138c5910308ea9763b4d55973cb8eb9a89ccf935071fde13eee787->leave($__internal_7ee9d3e422138c5910308ea9763b4d55973cb8eb9a89ccf935071fde13eee787_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0785d140d41acf2b2e7bfb675a3b9d976ea75785e97c0c06b2503e7b1e3ccb57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0785d140d41acf2b2e7bfb675a3b9d976ea75785e97c0c06b2503e7b1e3ccb57->enter($__internal_0785d140d41acf2b2e7bfb675a3b9d976ea75785e97c0c06b2503e7b1e3ccb57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Créditation des comptes distributeur";
        
        $__internal_0785d140d41acf2b2e7bfb675a3b9d976ea75785e97c0c06b2503e7b1e3ccb57->leave($__internal_0785d140d41acf2b2e7bfb675a3b9d976ea75785e97c0c06b2503e7b1e3ccb57_prof);

    }

    // line 3
    public function block_contentHeader($context, array $blocks = array())
    {
        $__internal_e62044c524c287ee41e8a2ba03890a215eae5b69104ad7ab44d1ae11d71a17ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e62044c524c287ee41e8a2ba03890a215eae5b69104ad7ab44d1ae11d71a17ae->enter($__internal_e62044c524c287ee41e8a2ba03890a215eae5b69104ad7ab44d1ae11d71a17ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentHeader"));

        
        $__internal_e62044c524c287ee41e8a2ba03890a215eae5b69104ad7ab44d1ae11d71a17ae->leave($__internal_e62044c524c287ee41e8a2ba03890a215eae5b69104ad7ab44d1ae11d71a17ae_prof);

    }

    // line 4
    public function block_page_quick_actions($context, array $blocks = array())
    {
        $__internal_ee23e52d39efe1274317e3d2bb4759bb0af2eec71fd856c6df50172112bd62e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee23e52d39efe1274317e3d2bb4759bb0af2eec71fd856c6df50172112bd62e9->enter($__internal_ee23e52d39efe1274317e3d2bb4759bb0af2eec71fd856c6df50172112bd62e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_quick_actions"));

        // line 5
        echo "    <div>
        <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire");
        echo "\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour\"/></a>
        <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_new", array("id" => null));
        echo "\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Ajouter un nouveau distributeur\"/></a>
    </div>
";
        
        $__internal_ee23e52d39efe1274317e3d2bb4759bb0af2eec71fd856c6df50172112bd62e9->leave($__internal_ee23e52d39efe1274317e3d2bb4759bb0af2eec71fd856c6df50172112bd62e9_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_bf787b4cfa7863a96da5ca4ed3005b74732ed7054edc410622240001cea7e8ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf787b4cfa7863a96da5ca4ed3005b74732ed7054edc410622240001cea7e8ae->enter($__internal_bf787b4cfa7863a96da5ca4ed3005b74732ed7054edc410622240001cea7e8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    <section class=\"content\">
        <div class=\"box box-default\">
            <div class=\"box-header with-border\">
                <h1 class=\"box-title\">Créditation du compte </h1>

                <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\">
                        <i class=\"fa fa-minus\"></i>
                    </button>
                </div>
            </div>
            <div class=\"box-body\">
               ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                <div class=\"row\">
                    <div class=\"col-sm-offset-3 col-sm-6\">
                        <span>&nbsp;</span>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "account", array()), 'errors');
        echo "
                        <div class=\"form-group\" >
                            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "account", array()), 'label');
        echo "
                            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "account", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Acompte du distributeur")));
        echo "
                        </div>
                        <div>
                            <span>&nbsp;</span>
                        </div>
                    </div>
                </div>
                <div class=\"row\" style=\"margin: auto;\">
                    <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire");
        echo "\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour\"/></a>
                    <a href=\"\"><input type=\"submit\" class=\"btn btn-primary btn-xs\"value=\"Valider\"/></a>
                </div>
                ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </section>

    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/GSPBundle/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_bf787b4cfa7863a96da5ca4ed3005b74732ed7054edc410622240001cea7e8ae->leave($__internal_bf787b4cfa7863a96da5ca4ed3005b74732ed7054edc410622240001cea7e8ae_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Prestataire:creditAccountDistributeur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 45,  135 => 40,  129 => 37,  118 => 29,  114 => 28,  109 => 26,  103 => 23,  89 => 11,  83 => 10,  73 => 7,  69 => 6,  66 => 5,  60 => 4,  49 => 3,  37 => 2,  11 => 1,);
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
{% block title %}Créditation des comptes distributeur{% endblock %}
{% block contentHeader %}{% endblock %}
{% block page_quick_actions %}
    <div>
        <a href=\"{{ path('grh_prestataire') }}\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour\"/></a>
        <a href=\"{{ path('grh_prestataire_new', {'id': null }) }}\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Ajouter un nouveau distributeur\"/></a>
    </div>
{% endblock %}
{% block content %}
    <section class=\"content\">
        <div class=\"box box-default\">
            <div class=\"box-header with-border\">
                <h1 class=\"box-title\">Créditation du compte </h1>

                <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\">
                        <i class=\"fa fa-minus\"></i>
                    </button>
                </div>
            </div>
            <div class=\"box-body\">
               {{ form_start(form)}}
                <div class=\"row\">
                    <div class=\"col-sm-offset-3 col-sm-6\">
                        <span>&nbsp;</span>{{ form_errors(form.account) }}
                        <div class=\"form-group\" >
                            {{ form_label(form.account) }}
                            {{ form_widget(form.account,{'attr':{'class':'form-control','placeholder':'Acompte du distributeur'} }) }}
                        </div>
                        <div>
                            <span>&nbsp;</span>
                        </div>
                    </div>
                </div>
                <div class=\"row\" style=\"margin: auto;\">
                    <a href=\"{{ path('grh_prestataire') }}\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour\"/></a>
                    <a href=\"\"><input type=\"submit\" class=\"btn btn-primary btn-xs\"value=\"Valider\"/></a>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </section>

    <script src=\"{{ asset('bundles/GSPBundle/plugins/datatables/jquery.dataTables.min.js') }}\"></script>

{% endblock %}


", "FadcoBundle:Prestataire:creditAccountDistributeur.html.twig", "/var/www/html/fadcoplus/src/FadcoBundle/Resources/views/Prestataire/creditAccountDistributeur.html.twig");
    }
}
