<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e7020b97e7b76f53ee0e38c1644c0bc329227dd8af3916d2214b886818652e40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'button_menu' => array($this, 'block_button_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1f13609665cb4e6aca15d605ae06ebd91a2dd06a626b004146970a82777e496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1f13609665cb4e6aca15d605ae06ebd91a2dd06a626b004146970a82777e496->enter($__internal_d1f13609665cb4e6aca15d605ae06ebd91a2dd06a626b004146970a82777e496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>FADCO+</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
  <link rel=\"icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/globalsevice.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\"/>
    ";
        // line 10
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 19
        echo "</head>
<body class=\"hold-transition skin-blue sidebar-mini\">
<div class=\"wrapper\">

  <header class=\"main-header\">
     <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_home");
        echo "\" class=\"logo\">
                <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/globalsevice.png"), "html", null, true);
        echo "\" style=\"width:50px;\"
                                         class=\"img-circle\" alt=\"fiacre\"/></span>
                <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/globalsevice.png"), "html", null, true);
        echo "\" style=\"width:70px;\"
                                       class=\"img-circle\" alt=\"fiacre\"/>FADCO+</span>
            </a>

             <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->

                ";
        // line 36
        $this->displayBlock('button_menu', $context, $blocks);
        // line 41
        echo "
                <div class=\"navbar-custom-menu\">
                    
                </div>

            </nav>

  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class=\"main-sidebar\">

  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">

    <!-- Main content -->
    <section class=\"content\">

      ";
        // line 60
        $this->displayBlock('content', $context, $blocks);
        // line 87
        echo "\t\t
    </section>
    <!-- /.content -->
  </div>


<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"> </script>
 <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>

</body>
</html>

";
        
        $__internal_d1f13609665cb4e6aca15d605ae06ebd91a2dd06a626b004146970a82777e496->leave($__internal_d1f13609665cb4e6aca15d605ae06ebd91a2dd06a626b004146970a82777e496_prof);

    }

    // line 10
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_5ecd1adb84b3e6d754fbeff89fc5450c335c1db531ae6df999c68e282fbb5645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ecd1adb84b3e6d754fbeff89fc5450c335c1db531ae6df999c68e282fbb5645->enter($__internal_5ecd1adb84b3e6d754fbeff89fc5450c335c1db531ae6df999c68e282fbb5645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 11
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
       ";
        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        ";
        // line 15
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/dist/css/skins/skin-blue.min.css"), "html", null, true);
        echo "\">

    ";
        
        $__internal_5ecd1adb84b3e6d754fbeff89fc5450c335c1db531ae6df999c68e282fbb5645->leave($__internal_5ecd1adb84b3e6d754fbeff89fc5450c335c1db531ae6df999c68e282fbb5645_prof);

    }

    // line 36
    public function block_button_menu($context, array $blocks = array())
    {
        $__internal_0e755b8f4bf152435e0f5410291e9e42a74fc6aa14a022bba446da500c7eb842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e755b8f4bf152435e0f5410291e9e42a74fc6aa14a022bba446da500c7eb842->enter($__internal_0e755b8f4bf152435e0f5410291e9e42a74fc6aa14a022bba446da500c7eb842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_menu"));

        // line 37
        echo "                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">Toggle navigation</span>
                    </a>
                ";
        
        $__internal_0e755b8f4bf152435e0f5410291e9e42a74fc6aa14a022bba446da500c7eb842->leave($__internal_0e755b8f4bf152435e0f5410291e9e42a74fc6aa14a022bba446da500c7eb842_prof);

    }

    // line 60
    public function block_content($context, array $blocks = array())
    {
        $__internal_4908518def68976f9ba04a1f7d6dd552dee2c1346e38eaaebf5134695bf2fce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4908518def68976f9ba04a1f7d6dd552dee2c1346e38eaaebf5134695bf2fce8->enter($__internal_4908518def68976f9ba04a1f7d6dd552dee2c1346e38eaaebf5134695bf2fce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 61
        echo "    <div class=\"box box-primary\" >
\t    <div class=\"box-body\">
\t\t\t<div class=\"error-page\">
\t        <h2 class=\"headline text-red\">";
        // line 64
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "</h2>

\t        <div class=\"error-content\">
\t          <h3><i class=\"fa fa-warning text-red\"></i>";
        // line 67
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "</h3>

\t          <p>
\t            ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "
\t          </p>
\t        </div>
\t      </div>
\t    </div>
\t</div>
\t\t
\t<div class=\"box box-primary\" >
\t    <div class=\"box-body\">
\t\t
\t      ";
        // line 80
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 80)->display($context);
        // line 81
        echo "\t    </div>
\t</div>
\t      
\t\t

\t\t";
        
        $__internal_4908518def68976f9ba04a1f7d6dd552dee2c1346e38eaaebf5134695bf2fce8->leave($__internal_4908518def68976f9ba04a1f7d6dd552dee2c1346e38eaaebf5134695bf2fce8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 81,  207 => 80,  194 => 70,  188 => 67,  182 => 64,  177 => 61,  171 => 60,  161 => 37,  155 => 36,  145 => 16,  140 => 15,  135 => 13,  130 => 11,  124 => 10,  111 => 96,  106 => 94,  102 => 93,  94 => 87,  92 => 60,  71 => 41,  69 => 36,  59 => 29,  53 => 26,  48 => 24,  41 => 19,  39 => 10,  35 => 9,  25 => 1,);
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
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>FADCO+</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
  <link rel=\"icon\" href=\"{{ asset('bundles/FadcoBundle/globalsevice.ico') }}\" type=\"image/x-icon\"/>
    {% block stylesheet %}
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/FadcoBundle/bootstrap/css/bootstrap.min.css') }}\">
       {# <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\">#}
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/FadcoBundle/font-awesome/css/font-awesome.min.css') }}\">
        {#<link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\"/>#}
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/FadcoBundle/dist/css/AdminLTE.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/FadcoBundle/dist/css/skins/skin-blue.min.css') }}\">

    {% endblock %}
</head>
<body class=\"hold-transition skin-blue sidebar-mini\">
<div class=\"wrapper\">

  <header class=\"main-header\">
     <a href=\"{{ path('fadco_home') }}\" class=\"logo\">
                <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><img src=\"{{ asset('bundles/FadcoBundle/globalsevice.png') }}\" style=\"width:50px;\"
                                         class=\"img-circle\" alt=\"fiacre\"/></span>
                <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><img src=\"{{ asset('bundles/FadcoBundle/globalsevice.png') }}\" style=\"width:70px;\"
                                       class=\"img-circle\" alt=\"fiacre\"/>FADCO+</span>
            </a>

             <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->

                {% block button_menu %}
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">Toggle navigation</span>
                    </a>
                {% endblock %}

                <div class=\"navbar-custom-menu\">
                    
                </div>

            </nav>

  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class=\"main-sidebar\">

  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">

    <!-- Main content -->
    <section class=\"content\">

      {% block  content %}
    <div class=\"box box-primary\" >
\t    <div class=\"box-body\">
\t\t\t<div class=\"error-page\">
\t        <h2 class=\"headline text-red\">{{ status_code }}</h2>

\t        <div class=\"error-content\">
\t          <h3><i class=\"fa fa-warning text-red\"></i>{{ status_text }}</h3>

\t          <p>
\t            {{ exception.message }}
\t          </p>
\t        </div>
\t      </div>
\t    </div>
\t</div>
\t\t
\t<div class=\"box box-primary\" >
\t    <div class=\"box-body\">
\t\t
\t      {% include 'TwigBundle:Exception:exception.html.twig' %}
\t    </div>
\t</div>
\t      
\t\t

\t\t{% endblock %}
\t\t
    </section>
    <!-- /.content -->
  </div>


<script src=\"{{ asset('bundles/FadcoBundle/plugins/jQuery/jQuery-2.1.4.min.js') }}\"> </script>
 <script src=\"{{ asset('bundles/FadcoBundle/bootstrap/js/bootstrap.min.js') }}\"></script>
    <!-- AdminLTE App -->
    <script src=\"{{ asset('bundles/FadcoBundle/dist/js/app.min.js') }}\"></script>

</body>
</html>

", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/fadcoplus/app/Resources/TwigBundle/views/Exception/exception_full.html.twig");
    }
}
