<?php

/* ::template.html.twig */
class __TwigTemplate_644fde78aecc35ff45f6f9c74eda119b0121448aa7d55d47e889af3ab14dc349 extends Twig_Template
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
        $__internal_a010750405a4f84d40c226ca0285e78c7b463851b60163abee9b8f0da41d4caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a010750405a4f84d40c226ca0285e78c7b463851b60163abee9b8f0da41d4caf->enter($__internal_a010750405a4f84d40c226ca0285e78c7b463851b60163abee9b8f0da41d4caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::template.html.twig"));

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
        if (twig_in_filter("mails", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
            echo "sidebar-collapse";
        }
        echo "\">
<div class=\"wrapper\">
    ";
        // line 44
        $this->displayBlock('header', $context, $blocks);
        // line 154
        echo "    ";
        $this->displayBlock('menu_gauche', $context, $blocks);
        // line 163
        echo "
    ";
        // line 164
        $this->displayBlock('container', $context, $blocks);
        // line 180
        echo "
    ";
        // line 181
        $this->displayBlock('footer', $context, $blocks);
        // line 232
        echo "</div>

    <div id=\"my-toast-location\" style=\"margin: 0 auto; position: fixed; top: 40px; right: 20px;\"></div>

<span style=\"display:none;\" id=\"loading-classement\"> <center><img src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/load.gif"), "html", null, true);
        echo "\">
    </center></span>

";
        // line 239
        $this->displayBlock('javascript', $context, $blocks);
        // line 550
        echo "
</body>
</html>
";
        
        $__internal_a010750405a4f84d40c226ca0285e78c7b463851b60163abee9b8f0da41d4caf->leave($__internal_a010750405a4f84d40c226ca0285e78c7b463851b60163abee9b8f0da41d4caf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c92df2401141cb9f8a89989e9832b5656c27f19052ba0fa2d67ab7f8b658ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c92df2401141cb9f8a89989e9832b5656c27f19052ba0fa2d67ab7f8b658ac3->enter($__internal_5c92df2401141cb9f8a89989e9832b5656c27f19052ba0fa2d67ab7f8b658ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FADCO+";
        
        $__internal_5c92df2401141cb9f8a89989e9832b5656c27f19052ba0fa2d67ab7f8b658ac3->leave($__internal_5c92df2401141cb9f8a89989e9832b5656c27f19052ba0fa2d67ab7f8b658ac3_prof);

    }

    // line 9
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_30aa0e69e4443dd209e93e58a19352b2cc8cfeb8c4503738ed05f75ce1846c59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30aa0e69e4443dd209e93e58a19352b2cc8cfeb8c4503738ed05f75ce1846c59->enter($__internal_30aa0e69e4443dd209e93e58a19352b2cc8cfeb8c4503738ed05f75ce1846c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
        ";
        } else {
            // asset "df51a00"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_df51a00") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/df51a00.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
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
        
        $__internal_30aa0e69e4443dd209e93e58a19352b2cc8cfeb8c4503738ed05f75ce1846c59->leave($__internal_30aa0e69e4443dd209e93e58a19352b2cc8cfeb8c4503738ed05f75ce1846c59_prof);

    }

    // line 44
    public function block_header($context, array $blocks = array())
    {
        $__internal_dd144ff8af84131bd60d7ce9d94cfeb1352e489134c4f7158519fc31ef1136aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd144ff8af84131bd60d7ce9d94cfeb1352e489134c4f7158519fc31ef1136aa->enter($__internal_dd144ff8af84131bd60d7ce9d94cfeb1352e489134c4f7158519fc31ef1136aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 45
        echo "        <header class=\"main-header\">
            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_home");
        echo "\" class=\"logo\">
                <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/fadcoplus1.jpg"), "html", null, true);
        echo "\" style=\"width:50px;\" class=\"img-circle\" alt=\"edgar\"/></span>
                <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/fadcoplus1.jpg"), "html", null, true);
        echo "\" style=\"width:70px;\" class=\"img-circle\" alt=\"edgar\"/>FADCO+</span>
            </a>
            <!-- Header Navbar -->
            <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->

                ";
        // line 56
        $this->displayBlock('button_menu', $context, $blocks);
        // line 61
        echo "
                <div class=\"navbar-custom-menu\">
                    <ul class=\"nav navbar-nav\">


                        <!-- Messages: style can be found in dropdown.less -->

                        ";
        // line 68
        $this->displayBlock('notification', $context, $blocks);
        // line 71
        echo "
                        ";
        // line 72
        $this->displayBlock('userProfil', $context, $blocks);
        // line 148
        echo "                    </ul>
                </div>

            </nav>
        </header>
    ";
        
        $__internal_dd144ff8af84131bd60d7ce9d94cfeb1352e489134c4f7158519fc31ef1136aa->leave($__internal_dd144ff8af84131bd60d7ce9d94cfeb1352e489134c4f7158519fc31ef1136aa_prof);

    }

    // line 56
    public function block_button_menu($context, array $blocks = array())
    {
        $__internal_de067d55343e0922e2e3adbd86629480b54a1be9f841a08c0569ebfcf982bbb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de067d55343e0922e2e3adbd86629480b54a1be9f841a08c0569ebfcf982bbb2->enter($__internal_de067d55343e0922e2e3adbd86629480b54a1be9f841a08c0569ebfcf982bbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_menu"));

        // line 57
        echo "                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">Toggle navigation</span>
                    </a>
                ";
        
        $__internal_de067d55343e0922e2e3adbd86629480b54a1be9f841a08c0569ebfcf982bbb2->leave($__internal_de067d55343e0922e2e3adbd86629480b54a1be9f841a08c0569ebfcf982bbb2_prof);

    }

    // line 68
    public function block_notification($context, array $blocks = array())
    {
        $__internal_c6763cd3bb2fe2e2ce6752430ebebc98643d33984ec52ca6d2423e8c3d72e69b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6763cd3bb2fe2e2ce6752430ebebc98643d33984ec52ca6d2423e8c3d72e69b->enter($__internal_c6763cd3bb2fe2e2ce6752430ebebc98643d33984ec52ca6d2423e8c3d72e69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notification"));

        // line 69
        echo "                            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FadcoBundle:GestionDesAlertes:notifications"));
        echo "
                        ";
        
        $__internal_c6763cd3bb2fe2e2ce6752430ebebc98643d33984ec52ca6d2423e8c3d72e69b->leave($__internal_c6763cd3bb2fe2e2ce6752430ebebc98643d33984ec52ca6d2423e8c3d72e69b_prof);

    }

    // line 72
    public function block_userProfil($context, array $blocks = array())
    {
        $__internal_a427318498af8799a7072608019ab618eceba6e7c8a7d350d189fb21843fb8d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a427318498af8799a7072608019ab618eceba6e7c8a7d350d189fb21843fb8d4->enter($__internal_a427318498af8799a7072608019ab618eceba6e7c8a7d350d189fb21843fb8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userProfil"));

        // line 73
        echo "                            <li class=\"dropdown user user-menu\">
                                <!-- Menu Toggle Button -->
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <!-- The user image in the navbar-->
                                    ";
        // line 77
        $this->displayBlock('userImg', $context, $blocks);
        // line 83
        echo "                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                          <span class=\"hidden-xs\">";
        // line 84
        $this->displayBlock('user', $context, $blocks);
        // line 94
        echo "                          </span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <!-- The user image in the menu -->
                                    <li class=\"user-header\">
                                        ";
        // line 100
        echo "                                        ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 101
            echo "                                            <img src=\"";
            if (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "photo", array()))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/images/avatar.png"), "html", null, true);
                echo " ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "WebPhoto", array())), "html", null, true);
                echo " ";
            }
            echo "\"
                                                 class=\"img-circle\" alt=\"edgar\">
                                        ";
        }
        // line 104
        echo "
                                        <p>

                                            ";
        // line 107
        $this->displayBlock('userrr', $context, $blocks);
        // line 113
        echo "                                            ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 114
            echo "                                                <small>Membre depuis ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "date", array()), "j/m/Y"), "html", null, true);
            echo "</small>
                                            ";
        }
        // line 116
        echo "                                            ";
        // line 117
        echo "                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class=\"user-body\">
                                        <div class=\"row\">
                                            <div class=\"col-xs-5 text-center\">
                                              <a href='#' data-url=\"";
        // line 123
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
        // line 134
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 135
            echo "                                            <div class=\"pull-left\">
                                                <a href=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\"
                                                   class=\"btn btn-default btn-flat\">Profile</a>
                                            </div>
                                        ";
        }
        // line 140
        echo "                                        <div class=\"pull-right\">
                                            <a href=\"";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"
                                               class=\"btn btn-default btn-flat\">";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        ";
        
        $__internal_a427318498af8799a7072608019ab618eceba6e7c8a7d350d189fb21843fb8d4->leave($__internal_a427318498af8799a7072608019ab618eceba6e7c8a7d350d189fb21843fb8d4_prof);

    }

    // line 77
    public function block_userImg($context, array $blocks = array())
    {
        $__internal_d33c5154bf9f0e9460f8fb30d5f59bf3cd00c17c4bcbbbcd0883920db88a01cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d33c5154bf9f0e9460f8fb30d5f59bf3cd00c17c4bcbbbcd0883920db88a01cc->enter($__internal_d33c5154bf9f0e9460f8fb30d5f59bf3cd00c17c4bcbbbcd0883920db88a01cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userImg"));

        // line 78
        echo "                                        ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 79
            echo "                                            <img src=\" ";
            if (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "photo", array()))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/images/avatar.png"), "html", null, true);
                echo " ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "WebPhoto", array())), "html", null, true);
                echo " ";
            }
            echo "\"
                                                 class=\"user-image\" alt=\"edgar\">
                                        ";
        }
        // line 82
        echo "                                    ";
        
        $__internal_d33c5154bf9f0e9460f8fb30d5f59bf3cd00c17c4bcbbbcd0883920db88a01cc->leave($__internal_d33c5154bf9f0e9460f8fb30d5f59bf3cd00c17c4bcbbbcd0883920db88a01cc_prof);

    }

    // line 84
    public function block_user($context, array $blocks = array())
    {
        $__internal_286ab1a9c063a40a2cf61204d2f4e87316741ca9cdcee6ec90859ec3583549c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_286ab1a9c063a40a2cf61204d2f4e87316741ca9cdcee6ec90859ec3583549c7->enter($__internal_286ab1a9c063a40a2cf61204d2f4e87316741ca9cdcee6ec90859ec3583549c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user"));

        // line 85
        echo "                              ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 86
            echo "                                  ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array())), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                                  ";
            // line 90
            echo "                              ";
        } else {
            // line 91
            echo "
                                  <a href=\"";
            // line 92
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                              ";
        }
        
        $__internal_286ab1a9c063a40a2cf61204d2f4e87316741ca9cdcee6ec90859ec3583549c7->leave($__internal_286ab1a9c063a40a2cf61204d2f4e87316741ca9cdcee6ec90859ec3583549c7_prof);

    }

    // line 107
    public function block_userrr($context, array $blocks = array())
    {
        $__internal_2467f4c3686cd1892d36ba5c1e15eeb58c15773a4f82dee016422074fdf6b6b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2467f4c3686cd1892d36ba5c1e15eeb58c15773a4f82dee016422074fdf6b6b4->enter($__internal_2467f4c3686cd1892d36ba5c1e15eeb58c15773a4f82dee016422074fdf6b6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userrr"));

        // line 108
        echo "                                                ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 109
            echo "                                                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => ((twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array())) . " ") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()))), "FOSUserBundle"), "html", null, true);
            echo "

                                                ";
        } else {
            // line 112
            echo "                                                ";
        }
        
        $__internal_2467f4c3686cd1892d36ba5c1e15eeb58c15773a4f82dee016422074fdf6b6b4->leave($__internal_2467f4c3686cd1892d36ba5c1e15eeb58c15773a4f82dee016422074fdf6b6b4_prof);

    }

    // line 154
    public function block_menu_gauche($context, array $blocks = array())
    {
        $__internal_8caa4f9d1adf76d3b475604002f08e97de82a954aaf6565af3ef1d3bb5837531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8caa4f9d1adf76d3b475604002f08e97de82a954aaf6565af3ef1d3bb5837531->enter($__internal_8caa4f9d1adf76d3b475604002f08e97de82a954aaf6565af3ef1d3bb5837531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_gauche"));

        // line 155
        echo "        <aside class=\"main-sidebar\">
            <section class=\"sidebar\">
                ";
        // line 157
        $this->displayBlock('sidebar', $context, $blocks);
        // line 160
        echo "            </section>
        </aside>
    ";
        
        $__internal_8caa4f9d1adf76d3b475604002f08e97de82a954aaf6565af3ef1d3bb5837531->leave($__internal_8caa4f9d1adf76d3b475604002f08e97de82a954aaf6565af3ef1d3bb5837531_prof);

    }

    // line 157
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c89d8ca9e77953b0ab49837f21bf82c0b9f93b4202b0e27c5c42f62b7a0267b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c89d8ca9e77953b0ab49837f21bf82c0b9f93b4202b0e27c5c42f62b7a0267b2->enter($__internal_c89d8ca9e77953b0ab49837f21bf82c0b9f93b4202b0e27c5c42f62b7a0267b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 158
        echo "
                ";
        
        $__internal_c89d8ca9e77953b0ab49837f21bf82c0b9f93b4202b0e27c5c42f62b7a0267b2->leave($__internal_c89d8ca9e77953b0ab49837f21bf82c0b9f93b4202b0e27c5c42f62b7a0267b2_prof);

    }

    // line 164
    public function block_container($context, array $blocks = array())
    {
        $__internal_bc63854c0c3ffda6c49a1e9a50e6a359f32c47583662329a7210bd5cdb748883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc63854c0c3ffda6c49a1e9a50e6a359f32c47583662329a7210bd5cdb748883->enter($__internal_bc63854c0c3ffda6c49a1e9a50e6a359f32c47583662329a7210bd5cdb748883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 165
        echo "        <div class=\"content-wrapper\">
            <section class=\"content-header\">
                ";
        // line 167
        $this->displayBlock('header_content', $context, $blocks);
        // line 174
        echo "            </section>
            <section class=\"content putHtml\">
                ";
        // line 176
        $this->displayBlock('content', $context, $blocks);
        // line 177
        echo "            </section>
        </div>
    ";
        
        $__internal_bc63854c0c3ffda6c49a1e9a50e6a359f32c47583662329a7210bd5cdb748883->leave($__internal_bc63854c0c3ffda6c49a1e9a50e6a359f32c47583662329a7210bd5cdb748883_prof);

    }

    // line 167
    public function block_header_content($context, array $blocks = array())
    {
        $__internal_146ccd13ad0c2c66ee4d2829528df0cb2f5e22ceb33e804216ee90dec957aa1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_146ccd13ad0c2c66ee4d2829528df0cb2f5e22ceb33e804216ee90dec957aa1b->enter($__internal_146ccd13ad0c2c66ee4d2829528df0cb2f5e22ceb33e804216ee90dec957aa1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_content"));

        // line 168
        echo "                    <h1>
                        ";
        // line 169
        $this->displayBlock('page_title', $context, $blocks);
        // line 170
        echo "
                        <div class=\"page-quick-actions pull-right\">";
        // line 171
        $this->displayBlock('page_quick_actions', $context, $blocks);
        echo "</div>
                    </h1>
                ";
        
        $__internal_146ccd13ad0c2c66ee4d2829528df0cb2f5e22ceb33e804216ee90dec957aa1b->leave($__internal_146ccd13ad0c2c66ee4d2829528df0cb2f5e22ceb33e804216ee90dec957aa1b_prof);

    }

    // line 169
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_3e90b20975fb6f600c7700cb3da79bd790ac14ecc21d7fb08d6579555e7b779d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e90b20975fb6f600c7700cb3da79bd790ac14ecc21d7fb08d6579555e7b779d->enter($__internal_3e90b20975fb6f600c7700cb3da79bd790ac14ecc21d7fb08d6579555e7b779d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "FADCO+";
        
        $__internal_3e90b20975fb6f600c7700cb3da79bd790ac14ecc21d7fb08d6579555e7b779d->leave($__internal_3e90b20975fb6f600c7700cb3da79bd790ac14ecc21d7fb08d6579555e7b779d_prof);

    }

    // line 171
    public function block_page_quick_actions($context, array $blocks = array())
    {
        $__internal_13b7b9a1bb17aa85841bfc5e301053d8c544cb96fe577217dccc4656c7d7f860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b7b9a1bb17aa85841bfc5e301053d8c544cb96fe577217dccc4656c7d7f860->enter($__internal_13b7b9a1bb17aa85841bfc5e301053d8c544cb96fe577217dccc4656c7d7f860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_quick_actions"));

        
        $__internal_13b7b9a1bb17aa85841bfc5e301053d8c544cb96fe577217dccc4656c7d7f860->leave($__internal_13b7b9a1bb17aa85841bfc5e301053d8c544cb96fe577217dccc4656c7d7f860_prof);

    }

    // line 176
    public function block_content($context, array $blocks = array())
    {
        $__internal_183510c39a5f3777babd8331db0660013aaf3c41f2116b10a482d7cd65955bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_183510c39a5f3777babd8331db0660013aaf3c41f2116b10a482d7cd65955bd2->enter($__internal_183510c39a5f3777babd8331db0660013aaf3c41f2116b10a482d7cd65955bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_183510c39a5f3777babd8331db0660013aaf3c41f2116b10a482d7cd65955bd2->leave($__internal_183510c39a5f3777babd8331db0660013aaf3c41f2116b10a482d7cd65955bd2_prof);

    }

    // line 181
    public function block_footer($context, array $blocks = array())
    {
        $__internal_95fb0424ee9bcbe53f1ef3b2cc2b5757cc7403a8c92809164cc29087888c47dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95fb0424ee9bcbe53f1ef3b2cc2b5757cc7403a8c92809164cc29087888c47dd->enter($__internal_95fb0424ee9bcbe53f1ef3b2cc2b5757cc7403a8c92809164cc29087888c47dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 182
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
        // line 193
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
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/load.gif"), "html", null, true);
        echo "\"></center></span>
            <span class=\"hide\" id=\"home-load\"> <center><img src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/home-load.gif"), "html", null, true);
        echo "\">
                </center></span>
            <div class=\"pull-right hidden-xs\">
                Tous droits réservés.
            </div>
            <strong>Copyright &copy; 2017 | FADCO+</strong>
        </footer>
    ";
        
        $__internal_95fb0424ee9bcbe53f1ef3b2cc2b5757cc7403a8c92809164cc29087888c47dd->leave($__internal_95fb0424ee9bcbe53f1ef3b2cc2b5757cc7403a8c92809164cc29087888c47dd_prof);

    }

    // line 239
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_a08a23e34bb72c3021d57dd9bf0d8e47efeb462a263932fc4b29f27cd8297485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a08a23e34bb72c3021d57dd9bf0d8e47efeb462a263932fc4b29f27cd8297485->enter($__internal_a08a23e34bb72c3021d57dd9bf0d8e47efeb462a263932fc4b29f27cd8297485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 240
        echo "
    <script src=\"";
        // line 241
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
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/js/export.state.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/style/jquery.accordDate.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/moment/moment-with-locales.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/bower_components/moment/locale/fr.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/js/live-edit.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/cookie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/js/gsp-modal.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 266
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "1b37284"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1b37284") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/1b37284.js");
            // line 267
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 269
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/js/ajaxify-search.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/js/bootstrap-checkbox.min.js"), "html", null, true);
        echo "\" defer></script>
    ";
        // line 271
        echo $this->env->getExtension('AjaxifySearch\AjaxifySearchTwigExtension')->initAjaxifySearch();
        echo "
    <script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/plugins/bootstrap-duallistbox-master/js/jquery.bootstrap-duallistbox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/plugins/toastee-master/js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/plugins/toastee-master/js/jquery.toastee.0.1.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/plugins/help-widget/js/help-widget.js"), "html", null, true);
        echo "\"></script>
    <script>
        ";
        // line 277
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 278
            echo "            function rafraichir() {
                \$.ajax({
                    url: '";
            // line 280
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("alertes_raflaichir", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "Id", array()))), "html", null, true);
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
        // line 294
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
        
        $__internal_a08a23e34bb72c3021d57dd9bf0d8e47efeb462a263932fc4b29f27cd8297485->leave($__internal_a08a23e34bb72c3021d57dd9bf0d8e47efeb462a263932fc4b29f27cd8297485_prof);

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
        return array (  849 => 294,  832 => 280,  828 => 278,  826 => 277,  821 => 275,  817 => 274,  813 => 273,  809 => 272,  805 => 271,  801 => 270,  796 => 269,  789 => 267,  784 => 266,  780 => 265,  776 => 264,  772 => 263,  768 => 262,  763 => 260,  758 => 258,  753 => 256,  749 => 255,  745 => 254,  740 => 252,  726 => 241,  723 => 240,  717 => 239,  702 => 224,  698 => 223,  665 => 193,  652 => 182,  646 => 181,  635 => 176,  624 => 171,  612 => 169,  602 => 171,  599 => 170,  597 => 169,  594 => 168,  588 => 167,  579 => 177,  577 => 176,  573 => 174,  571 => 167,  567 => 165,  561 => 164,  553 => 158,  547 => 157,  538 => 160,  536 => 157,  532 => 155,  526 => 154,  518 => 112,  511 => 109,  508 => 108,  502 => 107,  490 => 92,  487 => 91,  484 => 90,  477 => 86,  474 => 85,  468 => 84,  461 => 82,  446 => 79,  443 => 78,  437 => 77,  424 => 142,  420 => 141,  417 => 140,  410 => 136,  407 => 135,  405 => 134,  391 => 123,  383 => 117,  381 => 116,  375 => 114,  372 => 113,  370 => 107,  365 => 104,  350 => 101,  347 => 100,  340 => 94,  338 => 84,  335 => 83,  333 => 77,  327 => 73,  321 => 72,  311 => 69,  305 => 68,  295 => 57,  289 => 56,  277 => 148,  275 => 72,  272 => 71,  270 => 68,  261 => 61,  259 => 56,  250 => 50,  245 => 48,  240 => 46,  237 => 45,  231 => 44,  222 => 32,  219 => 31,  205 => 29,  201 => 28,  197 => 27,  193 => 26,  189 => 25,  184 => 23,  179 => 21,  175 => 20,  171 => 19,  166 => 18,  162 => 16,  158 => 15,  153 => 13,  146 => 10,  140 => 9,  128 => 5,  118 => 550,  116 => 239,  110 => 236,  104 => 232,  102 => 181,  99 => 180,  97 => 164,  94 => 163,  91 => 154,  89 => 44,  82 => 42,  75 => 38,  71 => 37,  67 => 36,  63 => 35,  58 => 34,  56 => 9,  52 => 8,  46 => 5,  40 => 1,);
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
            <span class=\"logo-mini\"><img src=\"{{ asset('bundles/FadcoBundle/fadcoplus1.jpg') }}\" style=\"width:50px;\" class=\"img-circle\" alt=\"edgar\"/></span>
                <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><img src=\"{{ asset('bundles/FadcoBundle/fadcoplus1.jpg') }}\" style=\"width:70px;\" class=\"img-circle\" alt=\"edgar\"/>FADCO+</span>
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
                                                 class=\"user-image\" alt=\"edgar\">
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
                                                 class=\"img-circle\" alt=\"edgar\">
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
", "::template.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\app/Resources\\views/template.html.twig");
    }
}
