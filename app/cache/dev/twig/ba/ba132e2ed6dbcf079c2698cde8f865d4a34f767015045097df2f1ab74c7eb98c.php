<?php

/* ::template.html.twig */
class __TwigTemplate_2d36b3ace3279709393b1c9d56d8e62de09478db557e873d3aac9626851eb325 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'header' => array($this, 'block_header'),
            'button_menu' => array($this, 'block_button_menu'),
            'notification' => array($this, 'block_notification'),
            'userProfil' => array($this, 'block_userProfil'),
            'userImg' => array($this, 'block_userImg'),
            'user' => array($this, 'block_user'),
            'userrr' => array($this, 'block_userrr'),
            'menu_gauche' => array($this, 'block_menu_gauche'),
            'sidebar' => array($this, 'block_sidebar'),
            'container' => array($this, 'block_container'),
            'header_content' => array($this, 'block_header_content'),
            'page_title' => array($this, 'block_page_title'),
            'page_quick_actions' => array($this, 'block_page_quick_actions'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7cc4443d74f6330fe659feb1bd0e34d328658402df6594d257951eff391d1362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cc4443d74f6330fe659feb1bd0e34d328658402df6594d257951eff391d1362->enter($__internal_7cc4443d74f6330fe659feb1bd0e34d328658402df6594d257951eff391d1362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::template.html.twig"));

        // line 1
        echo "<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <link rel=\"icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/fadcoplus.jpg"), "html", null, true);
        echo "\" type=\"image/x-icon\"/>
    ";
        // line 9
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 34
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/select2/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/plugins/help-widget/css/help-widget.css"), "html", null, true);
        echo "\">
    <!-- remove this if you use Modernizr -->
    <script>(function(e,t,n){var r=e.querySelectorAll(\"html\")[0];r.className=r.className.replace(/(^|\\s)no-js(\\s|\$)/,\"\$1js\$2\")})(document,window,0);</script>
</head>
<body class=\"hold-transition skin-blue sidebar-mini ";
        // line 42
        if (twig_in_filter("mails", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
            echo "sidebar-collapse";
        }
        echo "\">
<div class=\"wrapper\">
    ";
        // line 44
        $this->displayBlock('header', $context, $blocks);
        // line 156
        echo "    ";
        $this->displayBlock('menu_gauche', $context, $blocks);
        // line 165
        echo "
    ";
        // line 166
        $this->displayBlock('container', $context, $blocks);
        // line 182
        echo "
    ";
        // line 183
        $this->displayBlock('footer', $context, $blocks);
        // line 237
        echo "
</div>

    <div id=\"my-toast-location\" style=\"margin: 0 auto; position: fixed; top: 40px; right: 20px;\"></div>

<span style=\"display:none;\" id=\"loading-classement\"> <center><img src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/load.gif"), "html", null, true);
        echo "\">
    </center></span>

";
        // line 245
        $this->displayBlock('javascript', $context, $blocks);
        // line 556
        echo "
</body>
</html>
";
        
        $__internal_7cc4443d74f6330fe659feb1bd0e34d328658402df6594d257951eff391d1362->leave($__internal_7cc4443d74f6330fe659feb1bd0e34d328658402df6594d257951eff391d1362_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_11be3d2368c24c5e84ad562f11cba227e243fab77fb8cc0fc3fcae237da1c8b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11be3d2368c24c5e84ad562f11cba227e243fab77fb8cc0fc3fcae237da1c8b1->enter($__internal_11be3d2368c24c5e84ad562f11cba227e243fab77fb8cc0fc3fcae237da1c8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FADCO+";
        
        $__internal_11be3d2368c24c5e84ad562f11cba227e243fab77fb8cc0fc3fcae237da1c8b1->leave($__internal_11be3d2368c24c5e84ad562f11cba227e243fab77fb8cc0fc3fcae237da1c8b1_prof);

    }

    // line 9
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_7a9ec546b7a783876f321cb04cd07e73d3fc188bd951c51954819280deb2a0ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a9ec546b7a783876f321cb04cd07e73d3fc188bd951c51954819280deb2a0ea->enter($__internal_7a9ec546b7a783876f321cb04cd07e73d3fc188bd951c51954819280deb2a0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 10
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/datatables/jquery.dataTables.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\"
              href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        ";
        // line 18
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/dist/css/skins/skin-blue.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/select2/select2.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/filetype-icon-style.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/multiselect2sides/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\"
              href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/multiselect2sides/lib/google-code-prettify/prettify.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/css/gsp-modal.css"), "html", null, true);
        echo "\">
        ";
        // line 28
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "df51a00_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_df51a00_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/df51a00_custom_1.css");
            // line 29
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
        ";
        } else {
            // asset "df51a00"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_df51a00") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/df51a00.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
        ";
        }
        unset($context["asset_url"]);
        // line 31
        echo "
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/plugins/bootstrap-duallistbox-master/css/bootstrap-duallistbox.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_7a9ec546b7a783876f321cb04cd07e73d3fc188bd951c51954819280deb2a0ea->leave($__internal_7a9ec546b7a783876f321cb04cd07e73d3fc188bd951c51954819280deb2a0ea_prof);

    }

    // line 44
    public function block_header($context, array $blocks = array())
    {
        $__internal_b215b380daf2761b0b5020f1f2f857eb0574c3fa7fc02ad6f24558d4768f77ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b215b380daf2761b0b5020f1f2f857eb0574c3fa7fc02ad6f24558d4768f77ff->enter($__internal_b215b380daf2761b0b5020f1f2f857eb0574c3fa7fc02ad6f24558d4768f77ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 45
        echo "        <header class=\"main-header\">
            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_home");
        echo "\" class=\"logo\">
                <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/fadcoplus.jpg"), "html", null, true);
        echo "\" style=\"width:50px;\"
                                         class=\"img-circle\" alt=\"edgar\"/></span>
                <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/fadcoplus.jpg"), "html", null, true);
        echo "\" style=\"width:70px;\"
                                       class=\"img-circle\" alt=\"edgar\"/>FADCO+</span>
            </a>
            <!-- Header Navbar -->
            <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->

                ";
        // line 58
        $this->displayBlock('button_menu', $context, $blocks);
        // line 63
        echo "
                <div class=\"navbar-custom-menu\">
                    <ul class=\"nav navbar-nav\">


                        <!-- Messages: style can be found in dropdown.less -->

                        ";
        // line 70
        $this->displayBlock('notification', $context, $blocks);
        // line 73
        echo "
                        ";
        // line 74
        $this->displayBlock('userProfil', $context, $blocks);
        // line 150
        echo "                    </ul>
                </div>

            </nav>
        </header>
    ";
        
        $__internal_b215b380daf2761b0b5020f1f2f857eb0574c3fa7fc02ad6f24558d4768f77ff->leave($__internal_b215b380daf2761b0b5020f1f2f857eb0574c3fa7fc02ad6f24558d4768f77ff_prof);

    }

    // line 58
    public function block_button_menu($context, array $blocks = array())
    {
        $__internal_84076cc40fb61cd94e8f3a3c8898750bc509e0c90f45167ee529427a80174c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84076cc40fb61cd94e8f3a3c8898750bc509e0c90f45167ee529427a80174c10->enter($__internal_84076cc40fb61cd94e8f3a3c8898750bc509e0c90f45167ee529427a80174c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_menu"));

        // line 59
        echo "                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">Toggle navigation</span>
                    </a>
                ";
        
        $__internal_84076cc40fb61cd94e8f3a3c8898750bc509e0c90f45167ee529427a80174c10->leave($__internal_84076cc40fb61cd94e8f3a3c8898750bc509e0c90f45167ee529427a80174c10_prof);

    }

    // line 70
    public function block_notification($context, array $blocks = array())
    {
        $__internal_db1b19ec94ae7bd4f8b623beaa3b9b110cfd1878aa06639173eb89dedbaefb0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1b19ec94ae7bd4f8b623beaa3b9b110cfd1878aa06639173eb89dedbaefb0e->enter($__internal_db1b19ec94ae7bd4f8b623beaa3b9b110cfd1878aa06639173eb89dedbaefb0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notification"));

        // line 71
        echo "                            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FadcoBundle:GestionDesAlertes:notifications"));
        echo "
                        ";
        
        $__internal_db1b19ec94ae7bd4f8b623beaa3b9b110cfd1878aa06639173eb89dedbaefb0e->leave($__internal_db1b19ec94ae7bd4f8b623beaa3b9b110cfd1878aa06639173eb89dedbaefb0e_prof);

    }

    // line 74
    public function block_userProfil($context, array $blocks = array())
    {
        $__internal_f86bb367b394573d4b122ccf8633de96a81382327278b1eb84a3c90167ff012d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f86bb367b394573d4b122ccf8633de96a81382327278b1eb84a3c90167ff012d->enter($__internal_f86bb367b394573d4b122ccf8633de96a81382327278b1eb84a3c90167ff012d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userProfil"));

        // line 75
        echo "                            <li class=\"dropdown user user-menu\">
                                <!-- Menu Toggle Button -->
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <!-- The user image in the navbar-->
                                    ";
        // line 79
        $this->displayBlock('userImg', $context, $blocks);
        // line 85
        echo "                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                          <span class=\"hidden-xs\">";
        // line 86
        $this->displayBlock('user', $context, $blocks);
        // line 96
        echo "                          </span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <!-- The user image in the menu -->
                                    <li class=\"user-header\">
                                        ";
        // line 102
        echo "                                        ";
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 103
            echo "                                            <img src=\"";
            if (twig_test_empty($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "photo", array()))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/images/avatar.png"), "html", null, true);
                echo " ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "WebPhoto", array())), "html", null, true);
                echo " ";
            }
            echo "\"
                                                 class=\"img-circle\" alt=\"User Image\">
                                        ";
        }
        // line 106
        echo "
                                        <p>

                                            ";
        // line 109
        $this->displayBlock('userrr', $context, $blocks);
        // line 115
        echo "                                            ";
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 116
            echo "                                                <small>Membre depuis ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "date", array()), "j/m/Y"), "html", null, true);
            echo "</small>
                                            ";
        }
        // line 118
        echo "                                            ";
        // line 119
        echo "                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class=\"user-body\">
                                        <div class=\"row\">
                                            <div class=\"col-xs-5 text-center\">
                                              <a href='#' data-url=\"";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_modifier_profile");
        echo "\"  class=\"btn btn-success btn-profile-modifier\">Modifier Profile</a>
                                            </div>
                                            <div class=\" col-xs-offset-2 col-xs-5 text-center\">
                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#UserPasswordChange\">Changer
                                                    mot de passe</a>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class=\"user-footer\">
                                        ";
        // line 136
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 137
            echo "                                            <div class=\"pull-left\">
                                                <a href=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_show", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\"
                                                   class=\"btn btn-default btn-flat\">Profile</a>
                                            </div>
                                        ";
        }
        // line 142
        echo "                                        <div class=\"pull-right\">
                                            <a href=\"";
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"
                                               class=\"btn btn-default btn-flat\">";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        ";
        
        $__internal_f86bb367b394573d4b122ccf8633de96a81382327278b1eb84a3c90167ff012d->leave($__internal_f86bb367b394573d4b122ccf8633de96a81382327278b1eb84a3c90167ff012d_prof);

    }

    // line 79
    public function block_userImg($context, array $blocks = array())
    {
        $__internal_c07b354f81c05cb787af884f3d7c017959fdecb74c1078ca736b20496faa8582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c07b354f81c05cb787af884f3d7c017959fdecb74c1078ca736b20496faa8582->enter($__internal_c07b354f81c05cb787af884f3d7c017959fdecb74c1078ca736b20496faa8582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userImg"));

        // line 80
        echo "                                        ";
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 81
            echo "                                            <img src=\" ";
            if (twig_test_empty($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "photo", array()))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/images/avatar.png"), "html", null, true);
                echo " ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "WebPhoto", array())), "html", null, true);
                echo " ";
            }
            echo "\"
                                                 class=\"user-image\" alt=\"User Image\">
                                        ";
        }
        // line 84
        echo "                                    ";
        
        $__internal_c07b354f81c05cb787af884f3d7c017959fdecb74c1078ca736b20496faa8582->leave($__internal_c07b354f81c05cb787af884f3d7c017959fdecb74c1078ca736b20496faa8582_prof);

    }

    // line 86
    public function block_user($context, array $blocks = array())
    {
        $__internal_c6e619ae1c15093929f043e9570e2d665e69032e7895604a7babc18136f5971b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e619ae1c15093929f043e9570e2d665e69032e7895604a7babc18136f5971b->enter($__internal_c6e619ae1c15093929f043e9570e2d665e69032e7895604a7babc18136f5971b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user"));

        // line 87
        echo "                              ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 88
            echo "                                  ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nom", array())), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                                  ";
            // line 92
            echo "                              ";
        } else {
            // line 93
            echo "
                                  <a href=\"";
            // line 94
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                              ";
        }
        
        $__internal_c6e619ae1c15093929f043e9570e2d665e69032e7895604a7babc18136f5971b->leave($__internal_c6e619ae1c15093929f043e9570e2d665e69032e7895604a7babc18136f5971b_prof);

    }

    // line 109
    public function block_userrr($context, array $blocks = array())
    {
        $__internal_07f6723aa8b722077c5b60d8969b24eda4ac139b8f49374857d84b9a028308a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f6723aa8b722077c5b60d8969b24eda4ac139b8f49374857d84b9a028308a7->enter($__internal_07f6723aa8b722077c5b60d8969b24eda4ac139b8f49374857d84b9a028308a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userrr"));

        // line 110
        echo "                                                ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 111
            echo "                                                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => ((twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nom", array())) . " ") . $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()))), "FOSUserBundle"), "html", null, true);
            echo "

                                                ";
        } else {
            // line 114
            echo "                                                ";
        }
        
        $__internal_07f6723aa8b722077c5b60d8969b24eda4ac139b8f49374857d84b9a028308a7->leave($__internal_07f6723aa8b722077c5b60d8969b24eda4ac139b8f49374857d84b9a028308a7_prof);

    }

    // line 156
    public function block_menu_gauche($context, array $blocks = array())
    {
        $__internal_57ced7e7fde840b7f7c5ed5f24900f66c97ebbf377b21b2b3cb65a2d3249fdf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57ced7e7fde840b7f7c5ed5f24900f66c97ebbf377b21b2b3cb65a2d3249fdf5->enter($__internal_57ced7e7fde840b7f7c5ed5f24900f66c97ebbf377b21b2b3cb65a2d3249fdf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_gauche"));

        // line 157
        echo "        <aside class=\"main-sidebar\">
            <section class=\"sidebar\">
                ";
        // line 159
        $this->displayBlock('sidebar', $context, $blocks);
        // line 162
        echo "            </section>
        </aside>
    ";
        
        $__internal_57ced7e7fde840b7f7c5ed5f24900f66c97ebbf377b21b2b3cb65a2d3249fdf5->leave($__internal_57ced7e7fde840b7f7c5ed5f24900f66c97ebbf377b21b2b3cb65a2d3249fdf5_prof);

    }

    // line 159
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_26d16fe1456019beeb4b77b87af600949b9d8e4be2a436b7d735244eecaf0080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d16fe1456019beeb4b77b87af600949b9d8e4be2a436b7d735244eecaf0080->enter($__internal_26d16fe1456019beeb4b77b87af600949b9d8e4be2a436b7d735244eecaf0080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 160
        echo "
                ";
        
        $__internal_26d16fe1456019beeb4b77b87af600949b9d8e4be2a436b7d735244eecaf0080->leave($__internal_26d16fe1456019beeb4b77b87af600949b9d8e4be2a436b7d735244eecaf0080_prof);

    }

    // line 166
    public function block_container($context, array $blocks = array())
    {
        $__internal_a1d2d404241634186d17ba04c2dda9c5095f9fb7fabb13ad57449e7639a11e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1d2d404241634186d17ba04c2dda9c5095f9fb7fabb13ad57449e7639a11e5b->enter($__internal_a1d2d404241634186d17ba04c2dda9c5095f9fb7fabb13ad57449e7639a11e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 167
        echo "        <div class=\"content-wrapper\">
            <section class=\"content-header\">
                ";
        // line 169
        $this->displayBlock('header_content', $context, $blocks);
        // line 176
        echo "            </section>
            <section class=\"content putHtml\">
                ";
        // line 178
        $this->displayBlock('content', $context, $blocks);
        // line 179
        echo "            </section>
        </div>
    ";
        
        $__internal_a1d2d404241634186d17ba04c2dda9c5095f9fb7fabb13ad57449e7639a11e5b->leave($__internal_a1d2d404241634186d17ba04c2dda9c5095f9fb7fabb13ad57449e7639a11e5b_prof);

    }

    // line 169
    public function block_header_content($context, array $blocks = array())
    {
        $__internal_72aea401512f16eff2b0994d9aa58087d6b8e48ed988a86cacec32997b144c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72aea401512f16eff2b0994d9aa58087d6b8e48ed988a86cacec32997b144c26->enter($__internal_72aea401512f16eff2b0994d9aa58087d6b8e48ed988a86cacec32997b144c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_content"));

        // line 170
        echo "                    <h1>
                        ";
        // line 171
        $this->displayBlock('page_title', $context, $blocks);
        // line 172
        echo "
                        <div class=\"page-quick-actions pull-right\">";
        // line 173
        $this->displayBlock('page_quick_actions', $context, $blocks);
        echo "</div>
                    </h1>
                ";
        
        $__internal_72aea401512f16eff2b0994d9aa58087d6b8e48ed988a86cacec32997b144c26->leave($__internal_72aea401512f16eff2b0994d9aa58087d6b8e48ed988a86cacec32997b144c26_prof);

    }

    // line 171
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_b0dfde68800294bda4f49819c9e4a4afdd00ecb2d4a785800518a3f1cb23db3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0dfde68800294bda4f49819c9e4a4afdd00ecb2d4a785800518a3f1cb23db3a->enter($__internal_b0dfde68800294bda4f49819c9e4a4afdd00ecb2d4a785800518a3f1cb23db3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "FADCO+";
        
        $__internal_b0dfde68800294bda4f49819c9e4a4afdd00ecb2d4a785800518a3f1cb23db3a->leave($__internal_b0dfde68800294bda4f49819c9e4a4afdd00ecb2d4a785800518a3f1cb23db3a_prof);

    }

    // line 173
    public function block_page_quick_actions($context, array $blocks = array())
    {
        $__internal_dfd8742f23448708b61d94ae9557398a4caabd12acb5b1fefceb423d53ddc82d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd8742f23448708b61d94ae9557398a4caabd12acb5b1fefceb423d53ddc82d->enter($__internal_dfd8742f23448708b61d94ae9557398a4caabd12acb5b1fefceb423d53ddc82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_quick_actions"));

        
        $__internal_dfd8742f23448708b61d94ae9557398a4caabd12acb5b1fefceb423d53ddc82d->leave($__internal_dfd8742f23448708b61d94ae9557398a4caabd12acb5b1fefceb423d53ddc82d_prof);

    }

    // line 178
    public function block_content($context, array $blocks = array())
    {
        $__internal_974908292b0611763fa5f83e3fe9075b572173004712930815a455944c6610eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_974908292b0611763fa5f83e3fe9075b572173004712930815a455944c6610eb->enter($__internal_974908292b0611763fa5f83e3fe9075b572173004712930815a455944c6610eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_974908292b0611763fa5f83e3fe9075b572173004712930815a455944c6610eb->leave($__internal_974908292b0611763fa5f83e3fe9075b572173004712930815a455944c6610eb_prof);

    }

    // line 183
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1bdcfde2cf0c2074da7bce11fca755eebddf4b718365865799c00b2eb8f2a939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bdcfde2cf0c2074da7bce11fca755eebddf4b718365865799c00b2eb8f2a939->enter($__internal_1bdcfde2cf0c2074da7bce11fca755eebddf4b718365865799c00b2eb8f2a939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 184
        echo "        <footer class=\"main-footer\">
            <!-- Modal -->
            <div class=\"modal fade\" id=\"UserPasswordChange\" tabindex=\"-1\" role=\"dialog\"
                 aria-labelledby=\"UserPasswordChangeModalLabel\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                                        aria-hidden=\"true\">&times;</span></button>
                            <h4 class=\"modal-title\" id=\"UserPasswordChangeModalLabel\">Change le mot de passe</h4>
                        </div>
                        <iframe id=\"chpwd\" src=\"";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_change");
        echo "\" target=\"none\" class=\"modal-body\"
                                width=\"100%\" height=\"400\" scrolling=\"auto\" frameborder=\"0\">

                        </iframe>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal pour afficher une information -->
            <div class=\"modal fade\" id=\"myModal\" role=\"dialog\" data-backdrop=\"static\" aria-labelledby=\"myModalLabel\"
                 aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                    aria-hidden=\"true\">&times;</button>
                            <h4 class=\"modal-title\">Modal title</h4>
                        </div>
                        <div class=\"modal-body\">

                        </div>
                        <div class=\"modal-footer\">

                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
            </div>
            <!-- /.modal-div -->
            <span class=\"hide\" id=\"load\"> <center><img src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/load.gif"), "html", null, true);
        echo "\"></center></span>
            <span class=\"hide\" id=\"home-load\"> <center><img src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/home-load.gif"), "html", null, true);
        echo "\">
                </center></span>

            <div class=\"pull-right hidden-xs\">
                Tous droits réservés.
            </div>
            <strong>Copyright &copy; 2017 | FADCO+</strong>
        </footer>
        
    ";
        
        $__internal_1bdcfde2cf0c2074da7bce11fca755eebddf4b718365865799c00b2eb8f2a939->leave($__internal_1bdcfde2cf0c2074da7bce11fca755eebddf4b718365865799c00b2eb8f2a939_prof);

    }

    // line 245
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_8b057307965f469b84a1364ae4cac60ea961ddac8d596e49a0aec59176ea93ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b057307965f469b84a1364ae4cac60ea961ddac8d596e49a0aec59176ea93ad->enter($__internal_8b057307965f469b84a1364ae4cac60ea961ddac8d596e49a0aec59176ea93ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 246
        echo "
    <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js\"></script>
    <script src=\"//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js\"></script>
    <script src=\"//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js\"></script>
    <script src=\"//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js\"></script>
    <script src=\"//cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js\"></script>
    <script src=\"//cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js\"></script>
    <script src=\"//cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js\"></script>

    <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/js/export.state.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/style/jquery.accordDate.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/moment/moment-with-locales.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/bower_components/moment/locale/fr.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/js/live-edit.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/cookie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/js/gsp-modal.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 272
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "1b37284"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1b37284") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/1b37284.js");
            // line 273
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 275
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/js/ajaxify-search.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/js/bootstrap-checkbox.min.js"), "html", null, true);
        echo "\" defer></script>
    ";
        // line 277
        echo $this->env->getExtension('AjaxifySearch\AjaxifySearchTwigExtension')->initAjaxifySearch();
        echo "
    <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/plugins/bootstrap-duallistbox-master/js/jquery.bootstrap-duallistbox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/plugins/toastee-master/js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/plugins/toastee-master/js/jquery.toastee.0.1.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/plugins/help-widget/js/help-widget.js"), "html", null, true);
        echo "\"></script>
    <script>
        ";
        // line 283
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 284
            echo "            function rafraichir() {
                \$.ajax({
                    url: '";
            // line 286
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("alertes_raflaichir", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "Id", array()))), "html", null, true);
            echo "',
                    type: 'GET',
                    dataType: 'html',
                    success: function (code_html, statut) {
                        \$('.messages-menu').html(code_html);
                        rafraichir();
                    },
                    error: function (resultat, statut, erreur) {
                        rafraichir();
                    }
                });
            }

        ";
        }
        // line 300
        echo "
        moment.locale('fr');
        \$('.datenotification').each(function (index, value) {

            var date = moment([parseInt(\$(this).attr('annee')), parseInt(\$(this).attr('mois')) - 1, parseInt(\$(this).attr('jour')), parseInt(\$(this).attr('heure')), parseInt(\$(this).attr('minute')), parseInt(\$(this).attr('second')), 0]).fromNow();
            \$(this).html('&nbsp;' + date);
        });

        \$('.messages-lien').click(function (e) {
            e.preventDefault();

            \$('#myModal .modal-title').html('');
            \$('#myModal .modal-body').html(\$('#load').html());
            \$('#myModal').modal('show');
            \$.ajax({
                url: \$(this).attr('href'),
                type: 'GET',
                dataType: 'html',
                success: function (code_html, statut) {
                    \$('#myModal .modal-body').html(code_html);
                },
                error: function (resultat, statut, erreur) {
                    \$('#myModal .modal-body').html('Erreur de chargement : ' + statut)
                }

            });
        });

        \$('.alerte-lien').click(function (e) {
            e.preventDefault();

            \$('#myModal .modal-title').html('NOTIFICATION');
            \$('#myModal .modal-body').html('<div class=\"row\"> <div class=\"col-md-4\">' + \$(this).find('.alerte-image').html() + '</div><div class=\"col-md-7\"><div><b>' + \$(this).find('.alerte-username').html() + '  </b>' + \$(this).find('.alerte-message').html() + '</div><p></p><b><u style=\"color:#00BFFF\">' + \$(this).find('.alerte-moment').html() + '</u></b></div></div>');
            \$('#myModal .modal-footer').html('<center><a class=\"btn  btn-primary\" href=\"' + \$(this).attr('href') + '\">Consulter</a></center>');
            \$('#myModal').modal('show');
            \$.ajax({
                url: \$(this).attr('alerte-lu'),
                type: 'GET',
                dataType: 'html',
                success: function (code_html, statut) {

                },
                error: function (resultat, statut, erreur) {

                }


            });
        });


        \$('#parentDate').accordDate({
            \"day\": \"[name*=day]\",
            \"month\": \"[name*=month]\",
            \"year\": \"[name*=year]\",
            \"lengthYear\": 100
        });
        \$(function () {
            \$('.detail-btn').click(function (e) {
                e.preventDefault();

                \$('#myModal .modal-title').html(\$(this).attr('titre'));
                \$('#myModal .modal-body').html(\$('#load').html());
                \$('#myModal').modal('show');
                \$.ajax({
                    url: \$(this).attr('href'),
                    type: 'GET',
                    dataType: 'html',
                    success: function (code_html, statut) {
                        \$('#myModal .modal-body').html(code_html);
                    },
                    error: function (resultat, statut, erreur) {
                        \$('#myModal .modal-body').html('Erreur de chargement : ' + statut);
                    }


                });
            });
            \$(\"#dashline li\").not(\":last-child\").removeClass(\"active\");
            \$(\"#dashline li\").last().addClass(\"Active\");
            //\$(\"#chpwd\").slimScroll();
        });

        //rafraichir();

    </script>
    <script type=\"text/javascript\">
        \$(function () {

            \$('.datetime').datetimepicker({
                format: 'DD-MM-YYYY HH:mm:ss'
            });

            \$('.datePickerWidget').datetimepicker({
                locale:'fr',
                format:'DD/MM/YYYY',
                widgetPositioning:{
                    horizontal: 'auto'
//                    vertical: 'bottom'
                }
            });
        });
    </script>

    <script>


        \$('.btn-profile-modifier').click(function(e) {
            e.preventDefault();

            \$('#detail-affectation .modal-body').html(\$('#loading-classement').html());
            \$('#detail-affectation').modal('show');
            \$.ajax({
                url : \$('.btn-profile-modifier').attr('data-url'),
                type : 'GET',
                dataType : 'html',
                success : function(code_html, statut){
                    \$('#detail-affectation .modal-body').html(code_html);
//                    showdetailaffectation(code_html);
                },
                error : function(resultat, statut, erreur){
                    \$('#detail-affectation .modal-body').html('Erreur de chargement : '+statut);
                }
            });

        });
    </script>

    <script>
        \$(document).ready(function() {

            \$('.personalise').checkboxpicker({
                html: true,
                offLabel: 'Non',
                onLabel: 'Oui'
            });

            if (\$('.personalise').is(':checked')) {
                \$('.personalise').val(1);
            } else {
                \$('.personalise').val(0);
            }

            \$('.personalise').change(function() {
                if (\$(this).is(':checked')) {
                    \$(this).val(1);
                } else {
                    \$(this).val(0);
                }
            });

            \$('.2-side-multiselect').each(function() {
                var searchTitle = \$(this).data('search-title')

                if (typeof searchTitle != 'string') {
                    searchTitle = 'Recherchez...'
                }

                \$(this).multiselect({
                    search: {
                        left: '<input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"'+ searchTitle +'\" />',
                        right: '<input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"'+ searchTitle +'\" />'
                    }
                })
            })

            \$('.custom-pager').each(function() {

                if (\$(this).data('pager-done') === 'done') {
                    return;
                }

                var \$pages = \$(this).find('.pager-page')

                \$pages.each(function() {

                    var \$page = \$(this);

                    if (\$page.is(':visible')) {
                        \$page.data('height', \$page.css('height'))
                    } else {
                        var \$visibleParent = \$page.closest(':visible').children(':hidden');
                        \$visibleParent.addClass('temp-show');
                        /* \$page.data('height', \$page.css('height')); */
                        \$visibleParent.removeClass('temp-show')
                    }

                    \$(this).css({
                        \"height\": 0,
                        \"overflow\": \"hidden\",
                        \"transiton\": 'all 1s ease',
                        \"-webkit-transition\": 'all 1s ease',
                        \"-moz-transition\": 'all 1s ease',
                        \"-o-transition\": 'all 1s ease'
                    })
                })

                \$pages.eq(0).css('height', 'auto')

                \$(this).find(\".change-page\").click(function () {

                    var pageIndex = parseInt(\$(this).data('page')) - 1;

                    \$pages.css('height', 0)
                    /* \$pages.eq(pageIndex).css('height', \$pages.eq(pageIndex).data('height')) */
                    \$pages.eq(pageIndex).css('height', 'auto')
                });

                \$(this).data('pager-done', 'done')
            });
        })

    </script>

    <script>   
        \$('.printable').each(function () {
            var \$this = \$(this);
            var printUrl = Routing.generate('etat_print');
            var \$printForm = \$(
                '<form method=\"post\" action='+ printUrl +'>' +
                '   <textarea name=\"contenu\" class=\"hidden\"></textarea>' +
                '   <button type=\"submit\" class=\"btn btn-primary btn-sm \"><i class=\"fa fa-print\"></i> Imprimer</button>' +
                '</form>'
            );

            \$printForm.on('submit', function (event) {
                var \$table = \$this.clone();

                if (\$table.hasClass('has-actions')) {
                    \$table.find('tr').each(function () {
                        \$(this).find('th:last-child, td:last-child').remove();
                    });
                }            

                \$table.find('td, th').css({
                    padding: '5px',
                    border: '1px solid black',
                });

                var title = \$this.data('title') || '';
                var content = 
                    '<h1 align=\"center\">'+ title +'</h1>' +
                    '<table style=\"margin-top: 100px; width: 100%; border: 1px solid black; border-collapse: collapse;\">' +
                        \$table.html() +
                    '</table>'
                ;

                console.log(\$content);
                \$(this).find('textarea').val(content);                
            });            

            \$(this).closest('.box').find('.box-header').append(\$(\$printForm).wrap('<div class=\"box-tools pull-right\"></div>').parent());            
        });
    </script> 

";
        
        $__internal_8b057307965f469b84a1364ae4cac60ea961ddac8d596e49a0aec59176ea93ad->leave($__internal_8b057307965f469b84a1364ae4cac60ea961ddac8d596e49a0aec59176ea93ad_prof);

    }

    public function getTemplateName()
    {
        return "::template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  855 => 300,  838 => 286,  834 => 284,  832 => 283,  827 => 281,  823 => 280,  819 => 279,  815 => 278,  811 => 277,  807 => 276,  802 => 275,  795 => 273,  790 => 272,  786 => 271,  782 => 270,  778 => 269,  774 => 268,  769 => 266,  764 => 264,  759 => 262,  755 => 261,  751 => 260,  746 => 258,  732 => 247,  729 => 246,  723 => 245,  706 => 227,  702 => 226,  668 => 195,  655 => 184,  649 => 183,  638 => 178,  627 => 173,  615 => 171,  605 => 173,  602 => 172,  600 => 171,  597 => 170,  591 => 169,  582 => 179,  580 => 178,  576 => 176,  574 => 169,  570 => 167,  564 => 166,  556 => 160,  550 => 159,  541 => 162,  539 => 159,  535 => 157,  529 => 156,  521 => 114,  514 => 111,  511 => 110,  505 => 109,  493 => 94,  490 => 93,  487 => 92,  480 => 88,  477 => 87,  471 => 86,  464 => 84,  449 => 81,  446 => 80,  440 => 79,  427 => 144,  423 => 143,  420 => 142,  413 => 138,  410 => 137,  408 => 136,  394 => 125,  386 => 119,  384 => 118,  378 => 116,  375 => 115,  373 => 109,  368 => 106,  353 => 103,  350 => 102,  343 => 96,  341 => 86,  338 => 85,  336 => 79,  330 => 75,  324 => 74,  314 => 71,  308 => 70,  298 => 59,  292 => 58,  280 => 150,  278 => 74,  275 => 73,  273 => 70,  264 => 63,  262 => 58,  252 => 51,  246 => 48,  241 => 46,  238 => 45,  232 => 44,  223 => 32,  220 => 31,  206 => 29,  202 => 28,  198 => 27,  194 => 26,  190 => 25,  185 => 23,  180 => 21,  176 => 20,  172 => 19,  167 => 18,  163 => 16,  159 => 15,  154 => 13,  147 => 10,  141 => 9,  129 => 5,  119 => 556,  117 => 245,  111 => 242,  104 => 237,  102 => 183,  99 => 182,  97 => 166,  94 => 165,  91 => 156,  89 => 44,  82 => 42,  75 => 38,  71 => 37,  67 => 36,  63 => 35,  58 => 34,  56 => 9,  52 => 8,  46 => 5,  40 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>{% block title %}FADCO+{% endblock %}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <link rel=\"icon\" href=\"{{ asset('bundles/FadcoBundle/fadcoplus.jpg') }}\" type=\"image/x-icon\"/>
    {% block stylesheet %}
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/FadcoBundle/bootstrap/css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css\">
        <link rel=\"stylesheet\" href=\"{{asset('bundles/FadcoBundle/plugins/datatables/jquery.dataTables.min.css')}}\">
        <link rel=\"stylesheet\"
              href=\"{{ asset('bundles/FadcoBundle/plugins/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}\"/>
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/FadcoBundle/font-awesome/css/font-awesome.min.css') }}\">
        {#<link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\"/>#}
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/FadcoBundle/dist/css/AdminLTE.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/FadcoBundle/dist/css/skins/skin-blue.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/FadcoBundle/plugins/select2/select2.min.css') }}\"/>
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/FadcoBundle/filetype-icon-style.css') }}\">

        <link rel=\"stylesheet\" href=\"{{ asset('bundles/FadcoBundle/plugins/multiselect2sides/css/style.css') }}\">
        <link rel=\"stylesheet\"
              href=\"{{ asset('bundles/FadcoBundle/plugins/multiselect2sides/lib/google-code-prettify/prettify.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/fadco/css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/fadco/css/gsp-modal.css') }}\">
        {% stylesheets '../app/Resources/public/css/custom.css' %}
            <link rel=\"stylesheet\" href=\"{{ asset_url }}\">
        {% endstylesheets %}

        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/fadco/plugins/bootstrap-duallistbox-master/css/bootstrap-duallistbox.min.css') }}\">
    {% endblock %}
    <script src=\"{{ asset('bundles/FadcoBundle/plugins/jQuery/jQuery-2.1.4.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/FadcoBundle/plugins/select2/select2.full.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/fadco/plugins/help-widget/css/help-widget.css') }}\">
    <!-- remove this if you use Modernizr -->
    <script>(function(e,t,n){var r=e.querySelectorAll(\"html\")[0];r.className=r.className.replace(/(^|\\s)no-js(\\s|\$)/,\"\$1js\$2\")})(document,window,0);</script>
</head>
<body class=\"hold-transition skin-blue sidebar-mini {% if 'mails' in app.request.attributes.get('_route') %}sidebar-collapse{% endif %}\">
<div class=\"wrapper\">
    {% block header %}
        <header class=\"main-header\">
            <a href=\"{{ path('fadco_home') }}\" class=\"logo\">
                <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><img src=\"{{ asset('bundles/FadcoBundle/fadcoplus.jpg') }}\" style=\"width:50px;\"
                                         class=\"img-circle\" alt=\"edgar\"/></span>
                <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><img src=\"{{ asset('bundles/FadcoBundle/fadcoplus.jpg') }}\" style=\"width:70px;\"
                                       class=\"img-circle\" alt=\"edgar\"/>FADCO+</span>
            </a>
            <!-- Header Navbar -->
            <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->

                {% block button_menu %}
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">Toggle navigation</span>
                    </a>
                {% endblock %}

                <div class=\"navbar-custom-menu\">
                    <ul class=\"nav navbar-nav\">


                        <!-- Messages: style can be found in dropdown.less -->

                        {% block notification %}
                            {{ render(controller('FadcoBundle:GestionDesAlertes:notifications')) }}
                        {% endblock %}

                        {% block userProfil %}
                            <li class=\"dropdown user user-menu\">
                                <!-- Menu Toggle Button -->
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <!-- The user image in the navbar-->
                                    {% block userImg %}
                                        {% if app.user %}
                                            <img src=\" {% if app.user.photo is empty %} {{ asset('bundles/FadcoBundle/images/avatar.png') }} {% else %} {{ asset( app.user.WebPhoto ) }} {% endif %}\"
                                                 class=\"user-image\" alt=\"User Image\">
                                        {% endif %}
                                    {% endblock %}
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                          <span class=\"hidden-xs\">{% block user %}
                              {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                  {{ app.user.nom|upper }}  {{ app.user.username }}
                                  {#<a href=\"{{ path('fos_user_security_logout') }}\">
                                      {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                                  </a>#}
                              {% else %}

                                  <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
                              {% endif %}{% endblock %}
                          </span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <!-- The user image in the menu -->
                                    <li class=\"user-header\">
                                        {#% use  'dash.html.twig' with userImg as userImag2 %#}
                                        {% if app.user %}
                                            <img src=\"{% if app.user.photo is empty %} {{ asset('bundles/FadcoBundle/images/avatar.png') }} {% else %} {{ asset( app.user.WebPhoto ) }} {% endif %}\"
                                                 class=\"img-circle\" alt=\"User Image\">
                                        {% endif %}

                                        <p>

                                            {% block userrr %}
                                                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                                    {{ 'layout.logged_in_as'|trans({'%username%': app.user.nom|upper ~ ' '~app.user.username}, 'FOSUserBundle') }}

                                                {% else %}
                                                {% endif %}{% endblock %}
                                            {% if app.user %}
                                                <small>Membre depuis {{ app.user.date|date(\"j/m/Y\") }}</small>
                                            {% endif %}
                                            {# {{ app.user.datEntre|date(\"j/m/Y\") }} #}
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class=\"user-body\">
                                        <div class=\"row\">
                                            <div class=\"col-xs-5 text-center\">
                                              <a href='#' data-url=\"{{path(\"grh_prestataire_modifier_profile\")}}\"  class=\"btn btn-success btn-profile-modifier\">Modifier Profile</a>
                                            </div>
                                            <div class=\" col-xs-offset-2 col-xs-5 text-center\">
                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#UserPasswordChange\">Changer
                                                    mot de passe</a>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class=\"user-footer\">
                                        {% if app.user %}
                                            <div class=\"pull-left\">
                                                <a href=\"{{ path('grh_prestataire_show',{'id':app.user.id}) }}\"
                                                   class=\"btn btn-default btn-flat\">Profile</a>
                                            </div>
                                        {% endif %}
                                        <div class=\"pull-right\">
                                            <a href=\"{{ path('fos_user_security_logout') }}\"
                                               class=\"btn btn-default btn-flat\">{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        {% endblock %}
                    </ul>
                </div>

            </nav>
        </header>
    {% endblock %}
    {% block menu_gauche %}
        <aside class=\"main-sidebar\">
            <section class=\"sidebar\">
                {% block sidebar %}

                {% endblock %}
            </section>
        </aside>
    {% endblock %}

    {% block container %}
        <div class=\"content-wrapper\">
            <section class=\"content-header\">
                {% block header_content %}
                    <h1>
                        {% block page_title %}FADCO+{% endblock %}

                        <div class=\"page-quick-actions pull-right\">{% block page_quick_actions %}{% endblock %}</div>
                    </h1>
                {% endblock %}
            </section>
            <section class=\"content putHtml\">
                {% block content %}{% endblock %}
            </section>
        </div>
    {% endblock %}

    {% block footer %}
        <footer class=\"main-footer\">
            <!-- Modal -->
            <div class=\"modal fade\" id=\"UserPasswordChange\" tabindex=\"-1\" role=\"dialog\"
                 aria-labelledby=\"UserPasswordChangeModalLabel\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                                        aria-hidden=\"true\">&times;</span></button>
                            <h4 class=\"modal-title\" id=\"UserPasswordChangeModalLabel\">Change le mot de passe</h4>
                        </div>
                        <iframe id=\"chpwd\" src=\"{{ path('grh_prestataire_change') }}\" target=\"none\" class=\"modal-body\"
                                width=\"100%\" height=\"400\" scrolling=\"auto\" frameborder=\"0\">

                        </iframe>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal pour afficher une information -->
            <div class=\"modal fade\" id=\"myModal\" role=\"dialog\" data-backdrop=\"static\" aria-labelledby=\"myModalLabel\"
                 aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                    aria-hidden=\"true\">&times;</button>
                            <h4 class=\"modal-title\">Modal title</h4>
                        </div>
                        <div class=\"modal-body\">

                        </div>
                        <div class=\"modal-footer\">

                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
            </div>
            <!-- /.modal-div -->
            <span class=\"hide\" id=\"load\"> <center><img src=\"{{ asset('bundles/FadcoBundle/load.gif') }}\"></center></span>
            <span class=\"hide\" id=\"home-load\"> <center><img src=\"{{ asset('bundles/FadcoBundle/home-load.gif') }}\">
                </center></span>

            <div class=\"pull-right hidden-xs\">
                Tous droits réservés.
            </div>
            <strong>Copyright &copy; 2017 | FADCO+</strong>
        </footer>
        
    {% endblock %}

</div>

    <div id=\"my-toast-location\" style=\"margin: 0 auto; position: fixed; top: 40px; right: 20px;\"></div>

<span style=\"display:none;\" id=\"loading-classement\"> <center><img src=\"{{ asset('bundles/FadcoBundle/load.gif') }}\">
    </center></span>

{% block javascript %}

    <script src=\"{{ asset('bundles/FadcoBundle/bootstrap/js/bootstrap.min.js') }}\"></script>

    <script src=\"https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js\"></script>
    <script src=\"//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js\"></script>
    <script src=\"//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js\"></script>
    <script src=\"//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js\"></script>
    <script src=\"//cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js\"></script>
    <script src=\"//cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js\"></script>
    <script src=\"//cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js\"></script>

    <script src=\"{{ asset('bundles/fadco/js/export.state.js') }}\"></script>
    <!-- AdminLTE App -->
    <script src=\"{{ asset('bundles/FadcoBundle/dist/js/app.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/FadcoBundle/style/jquery.accordDate.js') }}\"></script>
    <script src=\"{{ asset('bundles/FadcoBundle/plugins/moment/moment-with-locales.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('bundles/FadcoBundle/plugins/bower_components/moment/min/moment.min.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('bundles/FadcoBundle/plugins/bower_components/moment/locale/fr.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('bundles/FadcoBundle/plugins/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/fadco/js/live-edit.js') }}\"></script>
    <script src=\"{{ asset('js/cookie.js') }}\"></script>
    <script src=\"{{ asset('bundles/fadco/js/gsp-modal.js') }}\"></script>
    {% javascripts %}
    <script src=\"{{ asset_url }}\"></script>
    {% endjavascripts %}
    <script src=\"{{ asset('bundles/fadco/js/ajaxify-search.js') }}\"></script>
    <script src=\"{{ asset('bundles/fadco/js/bootstrap-checkbox.min.js') }}\" defer></script>
    {{ init_ajaxify_search() }}
    <script src=\"{{ asset('bundles/fadco/plugins/bootstrap-duallistbox-master/js/jquery.bootstrap-duallistbox.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/fadco/plugins/toastee-master/js/jquery-migrate-1.2.1.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/fadco/plugins/toastee-master/js/jquery.toastee.0.1.js') }}\"></script>
    <script src=\"{{ asset('bundles/fadco/plugins/help-widget/js/help-widget.js') }}\"></script>
    <script>
        {% if app.user %}
            function rafraichir() {
                \$.ajax({
                    url: '{{path('alertes_raflaichir',{ 'id':app.user.Id})}}',
                    type: 'GET',
                    dataType: 'html',
                    success: function (code_html, statut) {
                        \$('.messages-menu').html(code_html);
                        rafraichir();
                    },
                    error: function (resultat, statut, erreur) {
                        rafraichir();
                    }
                });
            }

        {% endif %}

        moment.locale('fr');
        \$('.datenotification').each(function (index, value) {

            var date = moment([parseInt(\$(this).attr('annee')), parseInt(\$(this).attr('mois')) - 1, parseInt(\$(this).attr('jour')), parseInt(\$(this).attr('heure')), parseInt(\$(this).attr('minute')), parseInt(\$(this).attr('second')), 0]).fromNow();
            \$(this).html('&nbsp;' + date);
        });

        \$('.messages-lien').click(function (e) {
            e.preventDefault();

            \$('#myModal .modal-title').html('');
            \$('#myModal .modal-body').html(\$('#load').html());
            \$('#myModal').modal('show');
            \$.ajax({
                url: \$(this).attr('href'),
                type: 'GET',
                dataType: 'html',
                success: function (code_html, statut) {
                    \$('#myModal .modal-body').html(code_html);
                },
                error: function (resultat, statut, erreur) {
                    \$('#myModal .modal-body').html('Erreur de chargement : ' + statut)
                }

            });
        });

        \$('.alerte-lien').click(function (e) {
            e.preventDefault();

            \$('#myModal .modal-title').html('NOTIFICATION');
            \$('#myModal .modal-body').html('<div class=\"row\"> <div class=\"col-md-4\">' + \$(this).find('.alerte-image').html() + '</div><div class=\"col-md-7\"><div><b>' + \$(this).find('.alerte-username').html() + '  </b>' + \$(this).find('.alerte-message').html() + '</div><p></p><b><u style=\"color:#00BFFF\">' + \$(this).find('.alerte-moment').html() + '</u></b></div></div>');
            \$('#myModal .modal-footer').html('<center><a class=\"btn  btn-primary\" href=\"' + \$(this).attr('href') + '\">Consulter</a></center>');
            \$('#myModal').modal('show');
            \$.ajax({
                url: \$(this).attr('alerte-lu'),
                type: 'GET',
                dataType: 'html',
                success: function (code_html, statut) {

                },
                error: function (resultat, statut, erreur) {

                }


            });
        });


        \$('#parentDate').accordDate({
            \"day\": \"[name*=day]\",
            \"month\": \"[name*=month]\",
            \"year\": \"[name*=year]\",
            \"lengthYear\": 100
        });
        \$(function () {
            \$('.detail-btn').click(function (e) {
                e.preventDefault();

                \$('#myModal .modal-title').html(\$(this).attr('titre'));
                \$('#myModal .modal-body').html(\$('#load').html());
                \$('#myModal').modal('show');
                \$.ajax({
                    url: \$(this).attr('href'),
                    type: 'GET',
                    dataType: 'html',
                    success: function (code_html, statut) {
                        \$('#myModal .modal-body').html(code_html);
                    },
                    error: function (resultat, statut, erreur) {
                        \$('#myModal .modal-body').html('Erreur de chargement : ' + statut);
                    }


                });
            });
            \$(\"#dashline li\").not(\":last-child\").removeClass(\"active\");
            \$(\"#dashline li\").last().addClass(\"Active\");
            //\$(\"#chpwd\").slimScroll();
        });

        //rafraichir();

    </script>
    <script type=\"text/javascript\">
        \$(function () {

            \$('.datetime').datetimepicker({
                format: 'DD-MM-YYYY HH:mm:ss'
            });

            \$('.datePickerWidget').datetimepicker({
                locale:'fr',
                format:'DD/MM/YYYY',
                widgetPositioning:{
                    horizontal: 'auto'
//                    vertical: 'bottom'
                }
            });
        });
    </script>

    <script>


        \$('.btn-profile-modifier').click(function(e) {
            e.preventDefault();

            \$('#detail-affectation .modal-body').html(\$('#loading-classement').html());
            \$('#detail-affectation').modal('show');
            \$.ajax({
                url : \$('.btn-profile-modifier').attr('data-url'),
                type : 'GET',
                dataType : 'html',
                success : function(code_html, statut){
                    \$('#detail-affectation .modal-body').html(code_html);
//                    showdetailaffectation(code_html);
                },
                error : function(resultat, statut, erreur){
                    \$('#detail-affectation .modal-body').html('Erreur de chargement : '+statut);
                }
            });

        });
    </script>

    <script>
        \$(document).ready(function() {

            \$('.personalise').checkboxpicker({
                html: true,
                offLabel: 'Non',
                onLabel: 'Oui'
            });

            if (\$('.personalise').is(':checked')) {
                \$('.personalise').val(1);
            } else {
                \$('.personalise').val(0);
            }

            \$('.personalise').change(function() {
                if (\$(this).is(':checked')) {
                    \$(this).val(1);
                } else {
                    \$(this).val(0);
                }
            });

            \$('.2-side-multiselect').each(function() {
                var searchTitle = \$(this).data('search-title')

                if (typeof searchTitle != 'string') {
                    searchTitle = 'Recherchez...'
                }

                \$(this).multiselect({
                    search: {
                        left: '<input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"'+ searchTitle +'\" />',
                        right: '<input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"'+ searchTitle +'\" />'
                    }
                })
            })

            \$('.custom-pager').each(function() {

                if (\$(this).data('pager-done') === 'done') {
                    return;
                }

                var \$pages = \$(this).find('.pager-page')

                \$pages.each(function() {

                    var \$page = \$(this);

                    if (\$page.is(':visible')) {
                        \$page.data('height', \$page.css('height'))
                    } else {
                        var \$visibleParent = \$page.closest(':visible').children(':hidden');
                        \$visibleParent.addClass('temp-show');
                        /* \$page.data('height', \$page.css('height')); */
                        \$visibleParent.removeClass('temp-show')
                    }

                    \$(this).css({
                        \"height\": 0,
                        \"overflow\": \"hidden\",
                        \"transiton\": 'all 1s ease',
                        \"-webkit-transition\": 'all 1s ease',
                        \"-moz-transition\": 'all 1s ease',
                        \"-o-transition\": 'all 1s ease'
                    })
                })

                \$pages.eq(0).css('height', 'auto')

                \$(this).find(\".change-page\").click(function () {

                    var pageIndex = parseInt(\$(this).data('page')) - 1;

                    \$pages.css('height', 0)
                    /* \$pages.eq(pageIndex).css('height', \$pages.eq(pageIndex).data('height')) */
                    \$pages.eq(pageIndex).css('height', 'auto')
                });

                \$(this).data('pager-done', 'done')
            });
        })

    </script>

    <script>   
        \$('.printable').each(function () {
            var \$this = \$(this);
            var printUrl = Routing.generate('etat_print');
            var \$printForm = \$(
                '<form method=\"post\" action='+ printUrl +'>' +
                '   <textarea name=\"contenu\" class=\"hidden\"></textarea>' +
                '   <button type=\"submit\" class=\"btn btn-primary btn-sm \"><i class=\"fa fa-print\"></i> Imprimer</button>' +
                '</form>'
            );

            \$printForm.on('submit', function (event) {
                var \$table = \$this.clone();

                if (\$table.hasClass('has-actions')) {
                    \$table.find('tr').each(function () {
                        \$(this).find('th:last-child, td:last-child').remove();
                    });
                }            

                \$table.find('td, th').css({
                    padding: '5px',
                    border: '1px solid black',
                });

                var title = \$this.data('title') || '';
                var content = 
                    '<h1 align=\"center\">'+ title +'</h1>' +
                    '<table style=\"margin-top: 100px; width: 100%; border: 1px solid black; border-collapse: collapse;\">' +
                        \$table.html() +
                    '</table>'
                ;

                console.log(\$content);
                \$(this).find('textarea').val(content);                
            });            

            \$(this).closest('.box').find('.box-header').append(\$(\$printForm).wrap('<div class=\"box-tools pull-right\"></div>').parent());            
        });
    </script> 

{% endblock %}

</body>
</html>
", "::template.html.twig", "/var/www/html/fadcoplus/app/Resources/views/template.html.twig");
    }
}
