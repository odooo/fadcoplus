<?php

/* FadcoBundle:Prestataire:changePassword.html.twig */
class __TwigTemplate_ba7807f156c76cfc17445cbf02695abec5c373616835be7b029fce169b6d61b0 extends Twig_Template
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
        $__internal_318fef124f7e6757a6cf00c9acd29997727ed0309b38518f13f742c751a0d2e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_318fef124f7e6757a6cf00c9acd29997727ed0309b38518f13f742c751a0d2e7->enter($__internal_318fef124f7e6757a6cf00c9acd29997727ed0309b38518f13f742c751a0d2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Prestataire:changePassword.html.twig"));

        // line 1
        echo "<style>
@import url(\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/GSPBundle/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\");
@import url(\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/GSPBundle/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\");
ul{
    list-style:none;
    padding:0px;
}
</style>
<div id=\"chgpwd\" class=\"content\">
    ";
        // line 10
        if (array_key_exists("success", $context)) {
            // line 11
            echo "        <div class=\"callout callout-success\">
            ";
            // line 12
            echo ($context["success"] ?? $this->getContext($context, "success"));
            echo "
        </div>
    ";
        } else {
            // line 15
            echo "              
        
    ";
            // line 17
            echo             $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "POST", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_change_password")));
            echo "
    <div class=\"row\">
        <div class=\"col-lg-12\">
             <br/>
            ";
            // line 21
            if ( !twig_test_empty($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "current_password", array()), 'errors'))) {
                // line 22
                echo "                <div class=\"alert alert-danger\">
                ";
                // line 23
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "current_password", array()), 'errors');
                echo "
                </div>
                ";
            }
            // line 26
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "current_password", array()), 'label');
            echo "
            ";
            // line 27
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "current_password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "atuel mot de passe")));
            echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-12\">
             <br/>
            ";
            // line 33
            if ( !twig_test_empty($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors'))) {
                // line 34
                echo "                <div class=\"alert alert-danger\">
                ";
                // line 35
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
                echo "
                </div>
                ";
            }
            // line 38
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label');
            echo "
            ";
            // line 39
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "nouveau mot de passe")));
            echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-12\">
             <br/>
            ";
            // line 45
            if ( !twig_test_empty($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors'))) {
                // line 46
                echo "                <div class=\"alert alert-danger\">
                ";
                // line 47
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
                echo "
                </div>
                ";
            }
            // line 50
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label');
            echo "
            ";
            // line 51
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "confirmer mots de passe")));
            echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-12 text-right\">
            <br/>
            ";
            // line 57
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", array()), 'widget', array("label" => "Valider", "attr" => array("class" => "btn btn-success")));
            echo "
        </div>
    </div>
    
    ";
            // line 61
            echo             $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
    ";
        }
        // line 63
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/GSPBundle/plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/GSPBundle/plugins/slimScroll/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(\"#chgpwd\").slimScroll({'railOpacity': .4,\"height\":340});
    </script>
    
</div>
";
        
        $__internal_318fef124f7e6757a6cf00c9acd29997727ed0309b38518f13f742c751a0d2e7->leave($__internal_318fef124f7e6757a6cf00c9acd29997727ed0309b38518f13f742c751a0d2e7_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Prestataire:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 64,  148 => 63,  143 => 61,  136 => 57,  127 => 51,  122 => 50,  116 => 47,  113 => 46,  111 => 45,  102 => 39,  97 => 38,  91 => 35,  88 => 34,  86 => 33,  77 => 27,  72 => 26,  66 => 23,  63 => 22,  61 => 21,  54 => 17,  50 => 15,  44 => 12,  41 => 11,  39 => 10,  29 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style>
@import url(\"{{ asset('bundles/GSPBundle/bootstrap/css/bootstrap.min.css') }}\");
@import url(\"{{ asset(\"bundles/GSPBundle/dist/css/AdminLTE.min.css\") }}\");
ul{
    list-style:none;
    padding:0px;
}
</style>
<div id=\"chgpwd\" class=\"content\">
    {% if success  is defined%}
        <div class=\"callout callout-success\">
            {{success|raw}}
        </div>
    {%else%}
              
        
    {{ form_start(form,{\"method\":\"POST\",\"action\":path(\"grh_prestataire_change_password\")})}}
    <div class=\"row\">
        <div class=\"col-lg-12\">
             <br/>
            {%if form_errors(form.current_password) is not empty %}
                <div class=\"alert alert-danger\">
                {{ form_errors(form.current_password) }}
                </div>
                {% endif %}
            {{ form_label(form.current_password) }}
            {{ form_widget(form.current_password,{'attr':{'class':'form-control','placeholder':'atuel mot de passe'} }) }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-12\">
             <br/>
            {%if form_errors(form.plainPassword.first) is not empty %}
                <div class=\"alert alert-danger\">
                {{ form_errors(form.plainPassword.first) }}
                </div>
                {% endif %}
            {{ form_label(form.plainPassword.first) }}
            {{ form_widget(form.plainPassword.first,{'attr':{'class':'form-control','placeholder':'nouveau mot de passe'} }) }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-12\">
             <br/>
            {%if form_errors(form.plainPassword.second) is not empty %}
                <div class=\"alert alert-danger\">
                {{ form_errors(form.plainPassword.second) }}
                </div>
                {% endif %}
            {{ form_label(form.plainPassword.second) }}
            {{ form_widget(form.plainPassword.second,{'attr':{'class':'form-control','placeholder':'confirmer mots de passe'} }) }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-12 text-right\">
            <br/>
            {{ form_widget(form.submit,{\"label\":\"Valider\",'attr':{'class':'btn btn-success'} }) }}
        </div>
    </div>
    
    {{ form_end(form) }}
    {%endif%}
    <script src=\"{{asset('bundles/GSPBundle/plugins/jQuery/jQuery-2.1.4.min.js')}}\"></script>
    <script src=\"{{asset('bundles/GSPBundle/plugins/slimScroll/jquery.slimscroll.js')}}\"></script>
    <script>
        \$(\"#chgpwd\").slimScroll({'railOpacity': .4,\"height\":340});
    </script>
    
</div>
", "FadcoBundle:Prestataire:changePassword.html.twig", "/var/www/html/fadcoplus/src/FadcoBundle/Resources/views/Prestataire/changePassword.html.twig");
    }
}
