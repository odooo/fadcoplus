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
            'pannel' => array($this, 'block_pannel'),
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
        $__internal_7b57c07841d4456111d2f3f0a4c0241f06050eb5270c501eadf78507ab286ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b57c07841d4456111d2f3f0a4c0241f06050eb5270c501eadf78507ab286ae9->enter($__internal_7b57c07841d4456111d2f3f0a4c0241f06050eb5270c501eadf78507ab286ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::template.html.twig"));

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
        // line 39
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/select2/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/plugins/help-widget/css/help-widget.css"), "html", null, true);
        echo "\">
    <!-- remove this if you use Modernizr -->
    <script>(function(e,t,n){var r=e.querySelectorAll(\"html\")[0];r.className=r.className.replace(/(^|\\s)no-js(\\s|\$)/,\"\$1js\$2\")})(document,window,0);</script>
</head>
<body class=\"hold-transition skin-blue sidebar-mini ";
        // line 47
        if (twig_in_filter("mails", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
            echo "sidebar-collapse";
        }
        echo "\">
<div class=\"wrapper\">
    ";
        // line 49
        $this->displayBlock('header', $context, $blocks);
        // line 160
        echo "    ";
        $this->displayBlock('menu_gauche', $context, $blocks);
        // line 184
        echo "

    ";
        // line 186
        $this->displayBlock('container', $context, $blocks);
        // line 204
        echo "
    ";
        // line 205
        $this->displayBlock('footer', $context, $blocks);
        // line 262
        echo "
</div>

    ";
        // line 266
        echo "    <div id=\"help-widget\">
        <a id=\"help-widget-icon\" style=\"width: 50px; height: 50px; display: inline;\"><i class=\"fa fa-question\"></i></a>
        <div id=\"help-text\">
            <span>Besoin d'aide ?</span>
            <div class=\"arrow\"></div>
        </div>
        <div id=\"help-widget-content\">
            <div class=\"main-content\">
                <ul class=\"nav nav-tabs nav-justified\">
                    <li class=\"active\"><a data-toggle=\"tab\" href=\"#help-contact\">Contact</a></li>
                    <li><a data-toggle=\"tab\" href=\"#help-guides\">Guides</a></li>
                </ul>
                <div class=\"tab-content\" style=\"padding: 10px;\">
                    <div id=\"help-contact\" class=\"tab-pane fade in active\">
                        <a href=\"tel:63917228\" class=\"btn btn-block btn-success\">
                            <span class=\"fa fa-phone\" style=\"margin-right: 5px;\"></span>
                            Appeler le 63 91 72 28
                        </a>
                        <div class=\"text-center\" style=\"margin: 5px;\">Ou bien écrivez-nous</div>
                        <div>
                        <form id=\"aide_form\" enctype=\"multipart/form-data\" action=\"\" method=\"POST\" class=\"form\">
                                <div class=\"form-group\">
                                    <input type=\"text\" id=\"aide_nomcomplet\" name=\"aide_nomcomplet\" class=\"form-control\" placeholder=\"Votre nom complet\" required=\"required\">
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"text\" id=\"aide_numero\" name=\"aide_numero\" class=\"form-control\" placeholder=\"Votre numéro\" required=\"required\">
                                </div>
                                <div class=\"form-group\">
                                    <textarea name=\"aide_textmessage\" class=\"form-control\" rows=\"3\" placeholder=\"Votre message\" required=\"required\"></textarea>
                                </div>
                                <div class=\"form-group\">
                                    <input id=\"aide_piecejointe\"  type=\"file\" name=\"aide_piecejointe\" class=\"file-loading\">
                                </div>
                                <div class=\"text-center\">
                                    <button class=\"btn btn-primary\" type=\"submit\">
                                        Envoyer
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id=\"help-guides\" class=\"tab-pane fade\">
                        <div>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Recherchez un guide\">
                        </div>
                        <div id=\"guides-list\">
                            <p>Aucun guide n'est disponible actuellement.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"triangle\"></div>
        </div>
    </div>

    <div id=\"my-toast-location\" style=\"margin: 0 auto; position: fixed; top: 40px; right: 20px;\"></div>
    

<span style=\"display:none;\" id=\"loading-classement\"> <center><img src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/load.gif"), "html", null, true);
        echo "\">
    </center></span>

";
        // line 327
        $this->displayBlock('javascript', $context, $blocks);
        // line 731
        echo "
</body>
</html>
";
        
        $__internal_7b57c07841d4456111d2f3f0a4c0241f06050eb5270c501eadf78507ab286ae9->leave($__internal_7b57c07841d4456111d2f3f0a4c0241f06050eb5270c501eadf78507ab286ae9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6395dd3ceece816269e2a15bf7fff0c0182fc54ecfa17460b6b56a4cbf20183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6395dd3ceece816269e2a15bf7fff0c0182fc54ecfa17460b6b56a4cbf20183->enter($__internal_c6395dd3ceece816269e2a15bf7fff0c0182fc54ecfa17460b6b56a4cbf20183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FADCO+";
        
        $__internal_c6395dd3ceece816269e2a15bf7fff0c0182fc54ecfa17460b6b56a4cbf20183->leave($__internal_c6395dd3ceece816269e2a15bf7fff0c0182fc54ecfa17460b6b56a4cbf20183_prof);

    }

    // line 9
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_ca3feee3f88029196662e7db7fbfdb7df7b931ce110b1fbb659a24d9f2861d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca3feee3f88029196662e7db7fbfdb7df7b931ce110b1fbb659a24d9f2861d0c->enter($__internal_ca3feee3f88029196662e7db7fbfdb7df7b931ce110b1fbb659a24d9f2861d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/BonCommandeInterne/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/gspbot/gspbot.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/gspbot/notes.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/css/gsp-modal.css"), "html", null, true);
        echo "\">
        ";
        // line 31
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "df51a00_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_df51a00_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/df51a00_custom_1.css");
            // line 32
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
        // line 34
        echo "        ";
        // line 35
        echo "        ";
        // line 36
        echo "
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/plugins/bootstrap-duallistbox-master/css/bootstrap-duallistbox.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_ca3feee3f88029196662e7db7fbfdb7df7b931ce110b1fbb659a24d9f2861d0c->leave($__internal_ca3feee3f88029196662e7db7fbfdb7df7b931ce110b1fbb659a24d9f2861d0c_prof);

    }

    // line 49
    public function block_header($context, array $blocks = array())
    {
        $__internal_8ee5712c8d86d416f719da03d2ececff4520f568e65fc3bda6917c0773c7749d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ee5712c8d86d416f719da03d2ececff4520f568e65fc3bda6917c0773c7749d->enter($__internal_8ee5712c8d86d416f719da03d2ececff4520f568e65fc3bda6917c0773c7749d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 50
        echo "        <header class=\"main-header\">
            <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_home");
        echo "\" class=\"logo\">
                <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/fadcoplus.jpg"), "html", null, true);
        echo "\" style=\"width:50px;\"
                                         class=\"img-circle\" alt=\"edgar\"/></span>
                <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/fadcoplus.jpg"), "html", null, true);
        echo "\" style=\"width:70px;\"
                                       class=\"img-circle\" alt=\"edgar\"/>FADCO+</span>
            </a>
            <!-- Header Navbar -->
            <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->

                ";
        // line 63
        $this->displayBlock('button_menu', $context, $blocks);
        // line 68
        echo "
                <div class=\"navbar-custom-menu\">
                    <ul class=\"nav navbar-nav\">


                        <!-- Messages: style can be found in dropdown.less -->

                        ";
        // line 75
        $this->displayBlock('notification', $context, $blocks);
        // line 78
        echo "
                        ";
        // line 79
        $this->displayBlock('userProfil', $context, $blocks);
        // line 154
        echo "                    </ul>
                </div>

            </nav>
        </header>
    ";
        
        $__internal_8ee5712c8d86d416f719da03d2ececff4520f568e65fc3bda6917c0773c7749d->leave($__internal_8ee5712c8d86d416f719da03d2ececff4520f568e65fc3bda6917c0773c7749d_prof);

    }

    // line 63
    public function block_button_menu($context, array $blocks = array())
    {
        $__internal_70fab4a46e87c74b1189006977028aef6457bafffd360b992846c7dcc5f2db8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70fab4a46e87c74b1189006977028aef6457bafffd360b992846c7dcc5f2db8d->enter($__internal_70fab4a46e87c74b1189006977028aef6457bafffd360b992846c7dcc5f2db8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_menu"));

        // line 64
        echo "                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">Toggle navigation</span>
                    </a>
                ";
        
        $__internal_70fab4a46e87c74b1189006977028aef6457bafffd360b992846c7dcc5f2db8d->leave($__internal_70fab4a46e87c74b1189006977028aef6457bafffd360b992846c7dcc5f2db8d_prof);

    }

    // line 75
    public function block_notification($context, array $blocks = array())
    {
        $__internal_c3c49daff102ba9f3d64d3144c9fb504bf5e189a0097e9d91a798e11a14dfb8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c49daff102ba9f3d64d3144c9fb504bf5e189a0097e9d91a798e11a14dfb8b->enter($__internal_c3c49daff102ba9f3d64d3144c9fb504bf5e189a0097e9d91a798e11a14dfb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notification"));

        // line 76
        echo "                            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FadcoBundle:GestionDesAlertes:notifications"));
        echo "
                        ";
        
        $__internal_c3c49daff102ba9f3d64d3144c9fb504bf5e189a0097e9d91a798e11a14dfb8b->leave($__internal_c3c49daff102ba9f3d64d3144c9fb504bf5e189a0097e9d91a798e11a14dfb8b_prof);

    }

    // line 79
    public function block_userProfil($context, array $blocks = array())
    {
        $__internal_f84bf7441912dfd044278332475812709d2338dfdad4e6b71febfc8fdb572684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84bf7441912dfd044278332475812709d2338dfdad4e6b71febfc8fdb572684->enter($__internal_f84bf7441912dfd044278332475812709d2338dfdad4e6b71febfc8fdb572684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userProfil"));

        // line 80
        echo "                            <li class=\"dropdown user user-menu\">
                                <!-- Menu Toggle Button -->
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <!-- The user image in the navbar-->
                                    ";
        // line 84
        $this->displayBlock('userImg', $context, $blocks);
        // line 90
        echo "                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                          <span class=\"hidden-xs\">";
        // line 91
        $this->displayBlock('user', $context, $blocks);
        // line 101
        echo "                          </span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <!-- The user image in the menu -->
                                    <li class=\"user-header\">
                                        ";
        // line 107
        echo "                                        ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 108
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
                                                 class=\"img-circle\" alt=\"User Image\">
                                        ";
        }
        // line 111
        echo "
                                        <p>

                                            ";
        // line 114
        $this->displayBlock('userrr', $context, $blocks);
        // line 120
        echo "                                            ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 121
            echo "                                                <small>Membre depuis ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "date", array()), "j/m/Y"), "html", null, true);
            echo "</small>
                                            ";
        }
        // line 123
        echo "                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class=\"user-body\">
                                        <div class=\"row\">
                                            <div class=\"col-xs-5 text-center\">
                                              <a href='#' data-url=\"";
        // line 129
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
        // line 140
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 141
            echo "                                            <div class=\"pull-left\">
                                                <a href=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\"
                                                   class=\"btn btn-default btn-flat\">Profile</a>
                                            </div>
                                        ";
        }
        // line 146
        echo "                                        <div class=\"pull-right\">
                                            <a href=\"";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"
                                               class=\"btn btn-default btn-flat\">";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        ";
        
        $__internal_f84bf7441912dfd044278332475812709d2338dfdad4e6b71febfc8fdb572684->leave($__internal_f84bf7441912dfd044278332475812709d2338dfdad4e6b71febfc8fdb572684_prof);

    }

    // line 84
    public function block_userImg($context, array $blocks = array())
    {
        $__internal_6aaec7b48d6d1287d31e730e1b2d21e47a69d1f7f042739d435d7dd7a1c8e8f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aaec7b48d6d1287d31e730e1b2d21e47a69d1f7f042739d435d7dd7a1c8e8f3->enter($__internal_6aaec7b48d6d1287d31e730e1b2d21e47a69d1f7f042739d435d7dd7a1c8e8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userImg"));

        // line 85
        echo "                                        ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 86
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
                                                 class=\"user-image\" alt=\"User Image\">
                                        ";
        }
        // line 89
        echo "                                    ";
        
        $__internal_6aaec7b48d6d1287d31e730e1b2d21e47a69d1f7f042739d435d7dd7a1c8e8f3->leave($__internal_6aaec7b48d6d1287d31e730e1b2d21e47a69d1f7f042739d435d7dd7a1c8e8f3_prof);

    }

    // line 91
    public function block_user($context, array $blocks = array())
    {
        $__internal_e62d89715cc83df0e3d99049a15a241d8d345600ff6c8563205d806d26ba0719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e62d89715cc83df0e3d99049a15a241d8d345600ff6c8563205d806d26ba0719->enter($__internal_e62d89715cc83df0e3d99049a15a241d8d345600ff6c8563205d806d26ba0719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user"));

        // line 92
        echo "                              ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 93
            echo "                                  ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array())), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                                  ";
            // line 97
            echo "                              ";
        } else {
            // line 98
            echo "
                                  <a href=\"";
            // line 99
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                              ";
        }
        
        $__internal_e62d89715cc83df0e3d99049a15a241d8d345600ff6c8563205d806d26ba0719->leave($__internal_e62d89715cc83df0e3d99049a15a241d8d345600ff6c8563205d806d26ba0719_prof);

    }

    // line 114
    public function block_userrr($context, array $blocks = array())
    {
        $__internal_7e97868685ab600c227f42088a7fda56b73da80f1fd38c45b2aefcf534f9ec55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e97868685ab600c227f42088a7fda56b73da80f1fd38c45b2aefcf534f9ec55->enter($__internal_7e97868685ab600c227f42088a7fda56b73da80f1fd38c45b2aefcf534f9ec55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userrr"));

        // line 115
        echo "                                                ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 116
            echo "                                                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => ((twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array())) . " ") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()))), "FOSUserBundle"), "html", null, true);
            echo "

                                                ";
        } else {
            // line 119
            echo "                                                ";
        }
        
        $__internal_7e97868685ab600c227f42088a7fda56b73da80f1fd38c45b2aefcf534f9ec55->leave($__internal_7e97868685ab600c227f42088a7fda56b73da80f1fd38c45b2aefcf534f9ec55_prof);

    }

    // line 160
    public function block_menu_gauche($context, array $blocks = array())
    {
        $__internal_f5965e88c13a3deb5413c02755b0312b8ebab244baaf5fc1407444c531f269c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5965e88c13a3deb5413c02755b0312b8ebab244baaf5fc1407444c531f269c1->enter($__internal_f5965e88c13a3deb5413c02755b0312b8ebab244baaf5fc1407444c531f269c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_gauche"));

        // line 161
        echo "        <aside class=\"main-sidebar\">

            <section class=\"sidebar\">

                ";
        // line 165
        $this->displayBlock('pannel', $context, $blocks);
        // line 173
        echo "

                ";
        // line 175
        $this->displayBlock('sidebar', $context, $blocks);
        // line 178
        echo "
            </section>

        </aside>

    ";
        
        $__internal_f5965e88c13a3deb5413c02755b0312b8ebab244baaf5fc1407444c531f269c1->leave($__internal_f5965e88c13a3deb5413c02755b0312b8ebab244baaf5fc1407444c531f269c1_prof);

    }

    // line 165
    public function block_pannel($context, array $blocks = array())
    {
        $__internal_5d02d4b2f6319f964d5a15e7699933be445b6e2c07704ca78fc33347c96d73f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d02d4b2f6319f964d5a15e7699933be445b6e2c07704ca78fc33347c96d73f4->enter($__internal_5d02d4b2f6319f964d5a15e7699933be445b6e2c07704ca78fc33347c96d73f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pannel"));

        // line 166
        echo "                    <div class=\"user-panel\">
                        <div class=\"pull-left text-lime\">
                            <a href=\"\"><i class=\"text-success\"></i>
                                &nbsp;</a>
                        </div>
                    </div>
                ";
        
        $__internal_5d02d4b2f6319f964d5a15e7699933be445b6e2c07704ca78fc33347c96d73f4->leave($__internal_5d02d4b2f6319f964d5a15e7699933be445b6e2c07704ca78fc33347c96d73f4_prof);

    }

    // line 175
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c679830bb49b8a72e83baa50d7f90a36f6c9a96dac02da3b622a5fa08091fdc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c679830bb49b8a72e83baa50d7f90a36f6c9a96dac02da3b622a5fa08091fdc0->enter($__internal_c679830bb49b8a72e83baa50d7f90a36f6c9a96dac02da3b622a5fa08091fdc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 176
        echo "
                ";
        
        $__internal_c679830bb49b8a72e83baa50d7f90a36f6c9a96dac02da3b622a5fa08091fdc0->leave($__internal_c679830bb49b8a72e83baa50d7f90a36f6c9a96dac02da3b622a5fa08091fdc0_prof);

    }

    // line 186
    public function block_container($context, array $blocks = array())
    {
        $__internal_81af774395a90cb083d12d0460ab57055374406889ea2f946264ebc948de3c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81af774395a90cb083d12d0460ab57055374406889ea2f946264ebc948de3c8e->enter($__internal_81af774395a90cb083d12d0460ab57055374406889ea2f946264ebc948de3c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 187
        echo "        <div class=\"content-wrapper\">
            <section class=\"content-header\">
                ";
        // line 189
        $this->displayBlock('header_content', $context, $blocks);
        // line 196
        echo "            </section>


            <section class=\"content putHtml\">
                ";
        // line 200
        $this->displayBlock('content', $context, $blocks);
        // line 201
        echo "            </section>
        </div>
    ";
        
        $__internal_81af774395a90cb083d12d0460ab57055374406889ea2f946264ebc948de3c8e->leave($__internal_81af774395a90cb083d12d0460ab57055374406889ea2f946264ebc948de3c8e_prof);

    }

    // line 189
    public function block_header_content($context, array $blocks = array())
    {
        $__internal_cc19a93bb17e710dd37b7f852e4e728a4a23e8bfa354c50f642fb0437e77f55b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc19a93bb17e710dd37b7f852e4e728a4a23e8bfa354c50f642fb0437e77f55b->enter($__internal_cc19a93bb17e710dd37b7f852e4e728a4a23e8bfa354c50f642fb0437e77f55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_content"));

        // line 190
        echo "                    <h1>
                        ";
        // line 191
        $this->displayBlock('page_title', $context, $blocks);
        // line 192
        echo "
                        <div class=\"page-quick-actions pull-right\">";
        // line 193
        $this->displayBlock('page_quick_actions', $context, $blocks);
        echo "</div>
                    </h1>
                ";
        
        $__internal_cc19a93bb17e710dd37b7f852e4e728a4a23e8bfa354c50f642fb0437e77f55b->leave($__internal_cc19a93bb17e710dd37b7f852e4e728a4a23e8bfa354c50f642fb0437e77f55b_prof);

    }

    // line 191
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_4e013fdac530325933fafcbbd4bafc5753ba5613b7b1f94d6f809d861452e8b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e013fdac530325933fafcbbd4bafc5753ba5613b7b1f94d6f809d861452e8b0->enter($__internal_4e013fdac530325933fafcbbd4bafc5753ba5613b7b1f94d6f809d861452e8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "FADCO+";
        
        $__internal_4e013fdac530325933fafcbbd4bafc5753ba5613b7b1f94d6f809d861452e8b0->leave($__internal_4e013fdac530325933fafcbbd4bafc5753ba5613b7b1f94d6f809d861452e8b0_prof);

    }

    // line 193
    public function block_page_quick_actions($context, array $blocks = array())
    {
        $__internal_cfa476033e3ced2b674b950b202bcccd9d041eb2a6236f1b7a5bd81d499a2628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfa476033e3ced2b674b950b202bcccd9d041eb2a6236f1b7a5bd81d499a2628->enter($__internal_cfa476033e3ced2b674b950b202bcccd9d041eb2a6236f1b7a5bd81d499a2628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_quick_actions"));

        
        $__internal_cfa476033e3ced2b674b950b202bcccd9d041eb2a6236f1b7a5bd81d499a2628->leave($__internal_cfa476033e3ced2b674b950b202bcccd9d041eb2a6236f1b7a5bd81d499a2628_prof);

    }

    // line 200
    public function block_content($context, array $blocks = array())
    {
        $__internal_efac6ff8d5ddcf96182e21184c296633ab6eb928f9fff650b7a4f2e6d8856df8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efac6ff8d5ddcf96182e21184c296633ab6eb928f9fff650b7a4f2e6d8856df8->enter($__internal_efac6ff8d5ddcf96182e21184c296633ab6eb928f9fff650b7a4f2e6d8856df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_efac6ff8d5ddcf96182e21184c296633ab6eb928f9fff650b7a4f2e6d8856df8->leave($__internal_efac6ff8d5ddcf96182e21184c296633ab6eb928f9fff650b7a4f2e6d8856df8_prof);

    }

    // line 205
    public function block_footer($context, array $blocks = array())
    {
        $__internal_37a07cc2cfceb2d31af17ccae11ca4441b14d25aead60fd811457cd9fc5fed57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37a07cc2cfceb2d31af17ccae11ca4441b14d25aead60fd811457cd9fc5fed57->enter($__internal_37a07cc2cfceb2d31af17ccae11ca4441b14d25aead60fd811457cd9fc5fed57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 206
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
        // line 220
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
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/load.gif"), "html", null, true);
        echo "\"></center></span>
            <span class=\"hide\" id=\"home-load\"> <center><img src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/home-load.gif"), "html", null, true);
        echo "\">
                </center></span>

            <div class=\"pull-right hidden-xs\">
                Tous droits réservés.
            </div>
            <strong>Copyright &copy; 2017 | FADCO+</strong>
        </footer>
        
    ";
        
        $__internal_37a07cc2cfceb2d31af17ccae11ca4441b14d25aead60fd811457cd9fc5fed57->leave($__internal_37a07cc2cfceb2d31af17ccae11ca4441b14d25aead60fd811457cd9fc5fed57_prof);

    }

    // line 327
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_5bb16306af2be64bb4da55832a632f64160610225c03de4a20ee9cc38dad7db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bb16306af2be64bb4da55832a632f64160610225c03de4a20ee9cc38dad7db3->enter($__internal_5bb16306af2be64bb4da55832a632f64160610225c03de4a20ee9cc38dad7db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 328
        echo "
    <script src=\"";
        // line 329
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
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/js/export.state.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/style/jquery.accordDate.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/moment/moment-with-locales.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/bower_components/moment/locale/fr.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/js/live-edit.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/cookie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/js/gsp-modal.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/gspbot/gspbot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/gspbot/base-templates.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/gspbot/test.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/gspbot/missions.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/gspbot/notes.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 359
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "1b37284"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1b37284") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/1b37284.js");
            // line 360
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 362
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/js/ajaxify-search.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/js/bootstrap-checkbox.min.js"), "html", null, true);
        echo "\" defer></script>
    ";
        // line 364
        echo $this->env->getExtension('AjaxifySearch\AjaxifySearchTwigExtension')->initAjaxifySearch();
        echo "
    <script src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/plugins/bootstrap-duallistbox-master/js/jquery.bootstrap-duallistbox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/plugins/toastee-master/js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/plugins/toastee-master/js/jquery.toastee.0.1.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/plugins/help-widget/js/help-widget.js"), "html", null, true);
        echo "\"></script>
    <script>
        //   \$('.select2').select2();

        ";
        // line 372
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 373
            echo "            \$(document).ready(function () {
                GspBot.initialize({
                    id: ";
            // line 375
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
            echo ",
                    name: '";
            // line 376
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
            echo "'
                })
            })

            function rafraichir() {
                \$.ajax({
                    url: '";
            // line 382
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
        // line 396
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
        var modal = (function () {
            var method = {},
                    \$overlay,
                    \$modal,
                    \$content,
                    \$close;

            // Append the HTML
            \$overlay = \$('<div id=\"overlay\"></div>');
            \$modal = \$('<div id=\"modal\"></div>');
            \$content = \$('<div id=\"content\"></div>');
            \$close = \$('<a id=\"close\" href=\"#\">close</a>');

            //console.log(\$overlay);

            \$modal.hide();
            \$overlay.hide();

            \$modal.append(\$content, \$close);

            \$(function () {
                \$('body').append(\$overlay, \$modal);
            });

            // Center the modal in the viewport
            method.center = function () {
                var top, left;

                top = Math.max(\$(window).height() - \$modal.outerHeight(), 0) / 2;
                left = Math.max(\$(window).width() - \$modal.outerWidth(), 0) / 2;

                \$modal.css({
                    top: top + \$(window).scrollTop(),
                    left: left + \$(window).scrollLeft()
                });
            };

            // Open the modal
            method.open = function (settings) {
                \$content.empty().append(settings.content);

                \$modal.css({
                    width: settings.width || 'auto',
                    height: settings.height || 'auto'
                })

                method.center();

                \$(window).bind('resize.modal', method.center);

                \$modal.show();
                \$overlay.show();
            };

            // Close the modal
            method.close = function () {
                \$modal.hide();
                \$overlay.hide();
                \$content.empty();
                \$(window).unbind('resize.modal');
            };

            \$close.click(function (e) {
                e.preventDefault();
                method.close();
            });

            return method;
        }());

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
                    //\$(this).prop('checked',false);
                    //alert(\"is checked\");
                    \$(this).val(1);
                } else {
                    //\$(this).prop('checked',true);
                    //alert(\"not checked\");
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
        
        $__internal_5bb16306af2be64bb4da55832a632f64160610225c03de4a20ee9cc38dad7db3->leave($__internal_5bb16306af2be64bb4da55832a632f64160610225c03de4a20ee9cc38dad7db3_prof);

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
        return array (  999 => 396,  982 => 382,  973 => 376,  969 => 375,  965 => 373,  963 => 372,  956 => 368,  952 => 367,  948 => 366,  944 => 365,  940 => 364,  936 => 363,  931 => 362,  924 => 360,  919 => 359,  915 => 358,  911 => 357,  907 => 356,  903 => 355,  899 => 354,  895 => 353,  891 => 352,  887 => 351,  883 => 350,  878 => 348,  873 => 346,  868 => 344,  864 => 343,  860 => 342,  855 => 340,  841 => 329,  838 => 328,  832 => 327,  815 => 252,  811 => 251,  777 => 220,  761 => 206,  755 => 205,  744 => 200,  733 => 193,  721 => 191,  711 => 193,  708 => 192,  706 => 191,  703 => 190,  697 => 189,  688 => 201,  686 => 200,  680 => 196,  678 => 189,  674 => 187,  668 => 186,  660 => 176,  654 => 175,  641 => 166,  635 => 165,  623 => 178,  621 => 175,  617 => 173,  615 => 165,  609 => 161,  603 => 160,  595 => 119,  588 => 116,  585 => 115,  579 => 114,  567 => 99,  564 => 98,  561 => 97,  554 => 93,  551 => 92,  545 => 91,  538 => 89,  523 => 86,  520 => 85,  514 => 84,  501 => 148,  497 => 147,  494 => 146,  487 => 142,  484 => 141,  482 => 140,  468 => 129,  460 => 123,  454 => 121,  451 => 120,  449 => 114,  444 => 111,  429 => 108,  426 => 107,  419 => 101,  417 => 91,  414 => 90,  412 => 84,  406 => 80,  400 => 79,  390 => 76,  384 => 75,  374 => 64,  368 => 63,  356 => 154,  354 => 79,  351 => 78,  349 => 75,  340 => 68,  338 => 63,  328 => 56,  322 => 53,  317 => 51,  314 => 50,  308 => 49,  299 => 37,  296 => 36,  294 => 35,  292 => 34,  278 => 32,  274 => 31,  270 => 30,  266 => 29,  262 => 28,  258 => 27,  254 => 26,  250 => 25,  245 => 23,  240 => 21,  236 => 20,  232 => 19,  227 => 18,  223 => 16,  219 => 15,  214 => 13,  207 => 10,  201 => 9,  189 => 5,  179 => 731,  177 => 327,  171 => 324,  111 => 266,  106 => 262,  104 => 205,  101 => 204,  99 => 186,  95 => 184,  92 => 160,  90 => 49,  83 => 47,  76 => 43,  72 => 42,  68 => 41,  64 => 40,  59 => 39,  57 => 9,  53 => 8,  47 => 5,  41 => 1,);
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
        <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('bundles/fadco/BonCommandeInterne/css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/fadco/gspbot/gspbot.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/fadco/gspbot/notes.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/fadco/css/gsp-modal.css') }}\">
        {% stylesheets '../app/Resources/public/css/custom.css' %}
            <link rel=\"stylesheet\" href=\"{{ asset_url }}\">
        {% endstylesheets %}
        {# chat #}
        {#<link rel=\"stylesheet\" href=\"{{ asset('bundles/lc/css/chatBox.css') }}\">#}

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

                {% block pannel %}
                    <div class=\"user-panel\">
                        <div class=\"pull-left text-lime\">
                            <a href=\"\"><i class=\"text-success\"></i>
                                &nbsp;</a>
                        </div>
                    </div>
                {% endblock %}


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

    {# Help widget #}
    <div id=\"help-widget\">
        <a id=\"help-widget-icon\" style=\"width: 50px; height: 50px; display: inline;\"><i class=\"fa fa-question\"></i></a>
        <div id=\"help-text\">
            <span>Besoin d'aide ?</span>
            <div class=\"arrow\"></div>
        </div>
        <div id=\"help-widget-content\">
            <div class=\"main-content\">
                <ul class=\"nav nav-tabs nav-justified\">
                    <li class=\"active\"><a data-toggle=\"tab\" href=\"#help-contact\">Contact</a></li>
                    <li><a data-toggle=\"tab\" href=\"#help-guides\">Guides</a></li>
                </ul>
                <div class=\"tab-content\" style=\"padding: 10px;\">
                    <div id=\"help-contact\" class=\"tab-pane fade in active\">
                        <a href=\"tel:63917228\" class=\"btn btn-block btn-success\">
                            <span class=\"fa fa-phone\" style=\"margin-right: 5px;\"></span>
                            Appeler le 63 91 72 28
                        </a>
                        <div class=\"text-center\" style=\"margin: 5px;\">Ou bien écrivez-nous</div>
                        <div>
                        <form id=\"aide_form\" enctype=\"multipart/form-data\" action=\"\" method=\"POST\" class=\"form\">
                                <div class=\"form-group\">
                                    <input type=\"text\" id=\"aide_nomcomplet\" name=\"aide_nomcomplet\" class=\"form-control\" placeholder=\"Votre nom complet\" required=\"required\">
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"text\" id=\"aide_numero\" name=\"aide_numero\" class=\"form-control\" placeholder=\"Votre numéro\" required=\"required\">
                                </div>
                                <div class=\"form-group\">
                                    <textarea name=\"aide_textmessage\" class=\"form-control\" rows=\"3\" placeholder=\"Votre message\" required=\"required\"></textarea>
                                </div>
                                <div class=\"form-group\">
                                    <input id=\"aide_piecejointe\"  type=\"file\" name=\"aide_piecejointe\" class=\"file-loading\">
                                </div>
                                <div class=\"text-center\">
                                    <button class=\"btn btn-primary\" type=\"submit\">
                                        Envoyer
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id=\"help-guides\" class=\"tab-pane fade\">
                        <div>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Recherchez un guide\">
                        </div>
                        <div id=\"guides-list\">
                            <p>Aucun guide n'est disponible actuellement.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"triangle\"></div>
        </div>
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
    <script src=\"{{ asset('bundles/fadco/gspbot/gspbot.js') }}\"></script>
    <script src=\"{{ asset('bundles/fadco/gspbot/base-templates.js') }}\"></script>
    <script src=\"{{ asset('bundles/fadco/gspbot/test.js') }}\"></script>
    <script src=\"{{ asset('bundles/fadco/gspbot/missions.js') }}\"></script>
    <script src=\"{{ asset('bundles/fadco/gspbot/notes.js') }}\"></script>
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
        //   \$('.select2').select2();

        {% if app.user %}
            \$(document).ready(function () {
                GspBot.initialize({
                    id: {{ app.user.id }},
                    name: '{{ app.user.name }}'
                })
            })

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
        var modal = (function () {
            var method = {},
                    \$overlay,
                    \$modal,
                    \$content,
                    \$close;

            // Append the HTML
            \$overlay = \$('<div id=\"overlay\"></div>');
            \$modal = \$('<div id=\"modal\"></div>');
            \$content = \$('<div id=\"content\"></div>');
            \$close = \$('<a id=\"close\" href=\"#\">close</a>');

            //console.log(\$overlay);

            \$modal.hide();
            \$overlay.hide();

            \$modal.append(\$content, \$close);

            \$(function () {
                \$('body').append(\$overlay, \$modal);
            });

            // Center the modal in the viewport
            method.center = function () {
                var top, left;

                top = Math.max(\$(window).height() - \$modal.outerHeight(), 0) / 2;
                left = Math.max(\$(window).width() - \$modal.outerWidth(), 0) / 2;

                \$modal.css({
                    top: top + \$(window).scrollTop(),
                    left: left + \$(window).scrollLeft()
                });
            };

            // Open the modal
            method.open = function (settings) {
                \$content.empty().append(settings.content);

                \$modal.css({
                    width: settings.width || 'auto',
                    height: settings.height || 'auto'
                })

                method.center();

                \$(window).bind('resize.modal', method.center);

                \$modal.show();
                \$overlay.show();
            };

            // Close the modal
            method.close = function () {
                \$modal.hide();
                \$overlay.hide();
                \$content.empty();
                \$(window).unbind('resize.modal');
            };

            \$close.click(function (e) {
                e.preventDefault();
                method.close();
            });

            return method;
        }());

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
                    //\$(this).prop('checked',false);
                    //alert(\"is checked\");
                    \$(this).val(1);
                } else {
                    //\$(this).prop('checked',true);
                    //alert(\"not checked\");
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
