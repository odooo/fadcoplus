<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_772ae640772ac3f3b5d26f710b769b92ceca53f3869be62fb9a0d68abd0710e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47cb7f415167f733f846db108e90dddb8bb67884f41386ce765bf664c798c35b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47cb7f415167f733f846db108e90dddb8bb67884f41386ce765bf664c798c35b->enter($__internal_47cb7f415167f733f846db108e90dddb8bb67884f41386ce765bf664c798c35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
\t   <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t";
        // line 6
        $this->displayBlock('titre', $context, $blocks);
        // line 8
        echo "   
   <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.5 -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/iCheck/square/blue.css"), "html", null, true);
        echo "\">
    
    </head>
    <body class=\"hold-transition login-page\">
      ";
        // line 44
        echo "        
            ";
        // line 45
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 47
        echo "        </div>
    </body>
</html>
";
        
        $__internal_47cb7f415167f733f846db108e90dddb8bb67884f41386ce765bf664c798c35b->leave($__internal_47cb7f415167f733f846db108e90dddb8bb67884f41386ce765bf664c798c35b_prof);

    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        $__internal_128ced4fd381d0d97f793c8e0e62c48e4c603c1ea75e1b090c32bb6cb27999d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_128ced4fd381d0d97f793c8e0e62c48e4c603c1ea75e1b090c32bb6cb27999d3->enter($__internal_128ced4fd381d0d97f793c8e0e62c48e4c603c1ea75e1b090c32bb6cb27999d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 7
        echo "    ";
        
        $__internal_128ced4fd381d0d97f793c8e0e62c48e4c603c1ea75e1b090c32bb6cb27999d3->leave($__internal_128ced4fd381d0d97f793c8e0e62c48e4c603c1ea75e1b090c32bb6cb27999d3_prof);

    }

    // line 45
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e7c9b65148cd18212977da8922c621d8ce38ee31d6ed533e43e234dff136d6b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c9b65148cd18212977da8922c621d8ce38ee31d6ed533e43e234dff136d6b4->enter($__internal_e7c9b65148cd18212977da8922c621d8ce38ee31d6ed533e43e234dff136d6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 46
        echo "            ";
        
        $__internal_e7c9b65148cd18212977da8922c621d8ce38ee31d6ed533e43e234dff136d6b4->leave($__internal_e7c9b65148cd18212977da8922c621d8ce38ee31d6ed533e43e234dff136d6b4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 46,  87 => 45,  80 => 7,  74 => 6,  64 => 47,  62 => 45,  59 => 44,  52 => 19,  47 => 17,  38 => 11,  33 => 8,  31 => 6,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
\t   <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t{% block titre %}
    {% endblock %}
   
   <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.5 -->
    <link rel=\"stylesheet\" href=\"{{asset('bundles/FadcoBundle/bootstrap/css/bootstrap.min.css')}}\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{asset('bundles/FadcoBundle/dist/css/AdminLTE.min.css')}}\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"{{asset('bundles/FadcoBundle/plugins/iCheck/square/blue.css')}}\">
    
    </head>
    <body class=\"hold-transition login-page\">
      {# <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\" >
                        {{ message }}
                   
                {% endfor %}
            {% endfor %}
        {% endif %}
\t\t </div>
        #}
        
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </body>
</html>
", "FOSUserBundle::layout.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
