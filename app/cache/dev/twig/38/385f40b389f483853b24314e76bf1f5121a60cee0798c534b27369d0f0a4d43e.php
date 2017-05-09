<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9b6278c7f40831550dd6a27cc065821ab8443491d7b23ce26e6a03d621aec3b5 extends Twig_Template
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
        $__internal_c0efdb62871f001df89e2f1d3ea41c8c197ef61cbc17cf87977324a3cdaa46fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0efdb62871f001df89e2f1d3ea41c8c197ef61cbc17cf87977324a3cdaa46fb->enter($__internal_c0efdb62871f001df89e2f1d3ea41c8c197ef61cbc17cf87977324a3cdaa46fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

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
        
        $__internal_c0efdb62871f001df89e2f1d3ea41c8c197ef61cbc17cf87977324a3cdaa46fb->leave($__internal_c0efdb62871f001df89e2f1d3ea41c8c197ef61cbc17cf87977324a3cdaa46fb_prof);

    }

    // line 10
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_5d5889b41936d366cff1b637a727b8680db4abf823faf9f277c1c2fcc7523324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d5889b41936d366cff1b637a727b8680db4abf823faf9f277c1c2fcc7523324->enter($__internal_5d5889b41936d366cff1b637a727b8680db4abf823faf9f277c1c2fcc7523324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_5d5889b41936d366cff1b637a727b8680db4abf823faf9f277c1c2fcc7523324->leave($__internal_5d5889b41936d366cff1b637a727b8680db4abf823faf9f277c1c2fcc7523324_prof);

    }

    // line 36
    public function block_button_menu($context, array $blocks = array())
    {
        $__internal_3be5d6da98bce8682c343c1dbb3d5973780328cc1cb78d8d659c612ef59a1cda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be5d6da98bce8682c343c1dbb3d5973780328cc1cb78d8d659c612ef59a1cda->enter($__internal_3be5d6da98bce8682c343c1dbb3d5973780328cc1cb78d8d659c612ef59a1cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_menu"));

        // line 37
        echo "                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">Toggle navigation</span>
                    </a>
                ";
        
        $__internal_3be5d6da98bce8682c343c1dbb3d5973780328cc1cb78d8d659c612ef59a1cda->leave($__internal_3be5d6da98bce8682c343c1dbb3d5973780328cc1cb78d8d659c612ef59a1cda_prof);

    }

    // line 60
    public function block_content($context, array $blocks = array())
    {
        $__internal_2173ddadb1dd500f7c757218a91ae59995a364936a20c11f3df567d5f451d333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2173ddadb1dd500f7c757218a91ae59995a364936a20c11f3df567d5f451d333->enter($__internal_2173ddadb1dd500f7c757218a91ae59995a364936a20c11f3df567d5f451d333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 61
        echo "    <div class=\"box box-primary\" >
\t    <div class=\"box-body\">
\t\t\t<div class=\"error-page\">
\t        <h2 class=\"headline text-red\">";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "</h2>

\t        <div class=\"error-content\">
\t          <h3><i class=\"fa fa-warning text-red\"></i>";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "</h3>

\t          <p>
\t            ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
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
        
        $__internal_2173ddadb1dd500f7c757218a91ae59995a364936a20c11f3df567d5f451d333->leave($__internal_2173ddadb1dd500f7c757218a91ae59995a364936a20c11f3df567d5f451d333_prof);

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

", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\fadco\\app/Resources/TwigBundle/views/Exception/exception_full.html.twig");
    }
}
