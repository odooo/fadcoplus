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
        $__internal_fb7c97874a39616c4996d2e364a3c8926b67631631d59f8904509250973da6cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb7c97874a39616c4996d2e364a3c8926b67631631d59f8904509250973da6cd->enter($__internal_fb7c97874a39616c4996d2e364a3c8926b67631631d59f8904509250973da6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::template.html.twig"));

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
        // line 37
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/select2/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/plugins/help-widget/css/help-widget.css"), "html", null, true);
        echo "\">
    <!-- remove this if you use Modernizr -->
    <script>(function(e,t,n){var r=e.querySelectorAll(\"html\")[0];r.className=r.className.replace(/(^|\\s)no-js(\\s|\$)/,\"\$1js\$2\")})(document,window,0);</script>
</head>
<body class=\"hold-transition skin-blue sidebar-mini ";
        // line 45
        if (twig_in_filter("mails", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
            echo "sidebar-collapse";
        }
        echo "\">
<div class=\"wrapper\">
    ";
        // line 47
        $this->displayBlock('header', $context, $blocks);
        // line 159
        echo "    ";
        $this->displayBlock('menu_gauche', $context, $blocks);
        // line 177
        echo "
    ";
        // line 178
        $this->displayBlock('container', $context, $blocks);
        // line 194
        echo "
    ";
        // line 195
        $this->displayBlock('footer', $context, $blocks);
        // line 249
        echo "
</div>

    ";
        // line 253
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
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/load.gif"), "html", null, true);
        echo "\">
    </center></span>

";
        // line 312
        $this->displayBlock('javascript', $context, $blocks);
        // line 635
        echo "
</body>
</html>
";
        
        $__internal_fb7c97874a39616c4996d2e364a3c8926b67631631d59f8904509250973da6cd->leave($__internal_fb7c97874a39616c4996d2e364a3c8926b67631631d59f8904509250973da6cd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_06e6a6f3492cd3eb9883000a48b96048d21def8eabda9b2dd38d309396c2a855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06e6a6f3492cd3eb9883000a48b96048d21def8eabda9b2dd38d309396c2a855->enter($__internal_06e6a6f3492cd3eb9883000a48b96048d21def8eabda9b2dd38d309396c2a855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FADCO+";
        
        $__internal_06e6a6f3492cd3eb9883000a48b96048d21def8eabda9b2dd38d309396c2a855->leave($__internal_06e6a6f3492cd3eb9883000a48b96048d21def8eabda9b2dd38d309396c2a855_prof);

    }

    // line 9
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_2a3e6986b81a105cc3ac58ca6b6b63aeedf90b8809eee07dcec37592a5ec2521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a3e6986b81a105cc3ac58ca6b6b63aeedf90b8809eee07dcec37592a5ec2521->enter($__internal_2a3e6986b81a105cc3ac58ca6b6b63aeedf90b8809eee07dcec37592a5ec2521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        ";
        // line 28
        echo "        <link rel=\"stylesheet\" href=\"";
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
        echo "
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/plugins/bootstrap-duallistbox-master/css/bootstrap-duallistbox.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_2a3e6986b81a105cc3ac58ca6b6b63aeedf90b8809eee07dcec37592a5ec2521->leave($__internal_2a3e6986b81a105cc3ac58ca6b6b63aeedf90b8809eee07dcec37592a5ec2521_prof);

    }

    // line 47
    public function block_header($context, array $blocks = array())
    {
        $__internal_b90fd10cedae05afc7bb5c7f1e2a029e8695f23ce50bfb1bc0908f20f3ac8c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b90fd10cedae05afc7bb5c7f1e2a029e8695f23ce50bfb1bc0908f20f3ac8c23->enter($__internal_b90fd10cedae05afc7bb5c7f1e2a029e8695f23ce50bfb1bc0908f20f3ac8c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 48
        echo "        <header class=\"main-header\">
            <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_home");
        echo "\" class=\"logo\">
                <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/fadcoplus.jpg"), "html", null, true);
        echo "\" style=\"width:50px;\"
                                         class=\"img-circle\" alt=\"edgar\"/></span>
                <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/fadcoplus.jpg"), "html", null, true);
        echo "\" style=\"width:70px;\"
                                       class=\"img-circle\" alt=\"edgar\"/>FADCO+</span>
            </a>
            <!-- Header Navbar -->
            <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->

                ";
        // line 61
        $this->displayBlock('button_menu', $context, $blocks);
        // line 66
        echo "
                <div class=\"navbar-custom-menu\">
                    <ul class=\"nav navbar-nav\">


                        <!-- Messages: style can be found in dropdown.less -->

                        ";
        // line 73
        $this->displayBlock('notification', $context, $blocks);
        // line 76
        echo "
                        ";
        // line 77
        $this->displayBlock('userProfil', $context, $blocks);
        // line 153
        echo "                    </ul>
                </div>

            </nav>
        </header>
    ";
        
        $__internal_b90fd10cedae05afc7bb5c7f1e2a029e8695f23ce50bfb1bc0908f20f3ac8c23->leave($__internal_b90fd10cedae05afc7bb5c7f1e2a029e8695f23ce50bfb1bc0908f20f3ac8c23_prof);

    }

    // line 61
    public function block_button_menu($context, array $blocks = array())
    {
        $__internal_4604359ee4816afad23f6e7b0b9586c0c9344bebec2695514e19eb54f0dea534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4604359ee4816afad23f6e7b0b9586c0c9344bebec2695514e19eb54f0dea534->enter($__internal_4604359ee4816afad23f6e7b0b9586c0c9344bebec2695514e19eb54f0dea534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_menu"));

        // line 62
        echo "                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">Toggle navigation</span>
                    </a>
                ";
        
        $__internal_4604359ee4816afad23f6e7b0b9586c0c9344bebec2695514e19eb54f0dea534->leave($__internal_4604359ee4816afad23f6e7b0b9586c0c9344bebec2695514e19eb54f0dea534_prof);

    }

    // line 73
    public function block_notification($context, array $blocks = array())
    {
        $__internal_c764daa9e7c80202cc5c73aad203204c1c6bbd2612607482aae4608dc29b1d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c764daa9e7c80202cc5c73aad203204c1c6bbd2612607482aae4608dc29b1d84->enter($__internal_c764daa9e7c80202cc5c73aad203204c1c6bbd2612607482aae4608dc29b1d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notification"));

        // line 74
        echo "                            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FadcoBundle:GestionDesAlertes:notifications"));
        echo "
                        ";
        
        $__internal_c764daa9e7c80202cc5c73aad203204c1c6bbd2612607482aae4608dc29b1d84->leave($__internal_c764daa9e7c80202cc5c73aad203204c1c6bbd2612607482aae4608dc29b1d84_prof);

    }

    // line 77
    public function block_userProfil($context, array $blocks = array())
    {
        $__internal_f7b5da1e4546bbf2694e955f185c7d93fabcb51005d469c41c5a50d46a6985cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b5da1e4546bbf2694e955f185c7d93fabcb51005d469c41c5a50d46a6985cc->enter($__internal_f7b5da1e4546bbf2694e955f185c7d93fabcb51005d469c41c5a50d46a6985cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userProfil"));

        // line 78
        echo "                            <li class=\"dropdown user user-menu\">
                                <!-- Menu Toggle Button -->
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <!-- The user image in the navbar-->
                                    ";
        // line 82
        $this->displayBlock('userImg', $context, $blocks);
        // line 88
        echo "                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                          <span class=\"hidden-xs\">";
        // line 89
        $this->displayBlock('user', $context, $blocks);
        // line 99
        echo "                          </span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <!-- The user image in the menu -->
                                    <li class=\"user-header\">
                                        ";
        // line 105
        echo "                                        ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 106
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
        // line 109
        echo "
                                        <p>

                                            ";
        // line 112
        $this->displayBlock('userrr', $context, $blocks);
        // line 118
        echo "                                            ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 119
            echo "                                                <small>Membre depuis ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "date", array()), "j/m/Y"), "html", null, true);
            echo "</small>
                                            ";
        }
        // line 121
        echo "                                            ";
        // line 122
        echo "                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class=\"user-body\">
                                        <div class=\"row\">
                                            <div class=\"col-xs-5 text-center\">
                                              <a href='#' data-url=\"";
        // line 128
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
        // line 139
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 140
            echo "                                            <div class=\"pull-left\">
                                                <a href=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\"
                                                   class=\"btn btn-default btn-flat\">Profile</a>
                                            </div>
                                        ";
        }
        // line 145
        echo "                                        <div class=\"pull-right\">
                                            <a href=\"";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"
                                               class=\"btn btn-default btn-flat\">";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        ";
        
        $__internal_f7b5da1e4546bbf2694e955f185c7d93fabcb51005d469c41c5a50d46a6985cc->leave($__internal_f7b5da1e4546bbf2694e955f185c7d93fabcb51005d469c41c5a50d46a6985cc_prof);

    }

    // line 82
    public function block_userImg($context, array $blocks = array())
    {
        $__internal_6bdd271f3af7111ea27ab762a839530af7b4712cae8479542b72c00dbd07b1d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bdd271f3af7111ea27ab762a839530af7b4712cae8479542b72c00dbd07b1d8->enter($__internal_6bdd271f3af7111ea27ab762a839530af7b4712cae8479542b72c00dbd07b1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userImg"));

        // line 83
        echo "                                        ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 84
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
        // line 87
        echo "                                    ";
        
        $__internal_6bdd271f3af7111ea27ab762a839530af7b4712cae8479542b72c00dbd07b1d8->leave($__internal_6bdd271f3af7111ea27ab762a839530af7b4712cae8479542b72c00dbd07b1d8_prof);

    }

    // line 89
    public function block_user($context, array $blocks = array())
    {
        $__internal_cdb2084798bd8f90d5c6780e6854fd9239d9b6107602e56fc843c891a767cd50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdb2084798bd8f90d5c6780e6854fd9239d9b6107602e56fc843c891a767cd50->enter($__internal_cdb2084798bd8f90d5c6780e6854fd9239d9b6107602e56fc843c891a767cd50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user"));

        // line 90
        echo "                              ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 91
            echo "                                  ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array())), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                                  ";
            // line 95
            echo "                              ";
        } else {
            // line 96
            echo "
                                  <a href=\"";
            // line 97
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                              ";
        }
        
        $__internal_cdb2084798bd8f90d5c6780e6854fd9239d9b6107602e56fc843c891a767cd50->leave($__internal_cdb2084798bd8f90d5c6780e6854fd9239d9b6107602e56fc843c891a767cd50_prof);

    }

    // line 112
    public function block_userrr($context, array $blocks = array())
    {
        $__internal_11d1df9f98a9af6da1867688921cf2f6bc610048045638db747bdd0764b063dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11d1df9f98a9af6da1867688921cf2f6bc610048045638db747bdd0764b063dd->enter($__internal_11d1df9f98a9af6da1867688921cf2f6bc610048045638db747bdd0764b063dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userrr"));

        // line 113
        echo "                                                ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 114
            echo "                                                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => ((twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array())) . " ") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()))), "FOSUserBundle"), "html", null, true);
            echo "

                                                ";
        } else {
            // line 117
            echo "                                                ";
        }
        
        $__internal_11d1df9f98a9af6da1867688921cf2f6bc610048045638db747bdd0764b063dd->leave($__internal_11d1df9f98a9af6da1867688921cf2f6bc610048045638db747bdd0764b063dd_prof);

    }

    // line 159
    public function block_menu_gauche($context, array $blocks = array())
    {
        $__internal_32be4d89eee8a8b72dbf8619d0c04533c24a00bd8892fe57627717e0264a933c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32be4d89eee8a8b72dbf8619d0c04533c24a00bd8892fe57627717e0264a933c->enter($__internal_32be4d89eee8a8b72dbf8619d0c04533c24a00bd8892fe57627717e0264a933c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_gauche"));

        // line 160
        echo "        <aside class=\"main-sidebar\">
            <section class=\"sidebar\">
                ";
        // line 162
        $this->displayBlock('pannel', $context, $blocks);
        // line 170
        echo "
                ";
        // line 171
        $this->displayBlock('sidebar', $context, $blocks);
        // line 174
        echo "            </section>
        </aside>
    ";
        
        $__internal_32be4d89eee8a8b72dbf8619d0c04533c24a00bd8892fe57627717e0264a933c->leave($__internal_32be4d89eee8a8b72dbf8619d0c04533c24a00bd8892fe57627717e0264a933c_prof);

    }

    // line 162
    public function block_pannel($context, array $blocks = array())
    {
        $__internal_d9fd14d9aad251f3cccbb51394a8d4ab4145c5426813546e908da2a521cdd15c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9fd14d9aad251f3cccbb51394a8d4ab4145c5426813546e908da2a521cdd15c->enter($__internal_d9fd14d9aad251f3cccbb51394a8d4ab4145c5426813546e908da2a521cdd15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pannel"));

        // line 163
        echo "                    <div class=\"user-panel\">
                        <div class=\"pull-left text-lime\">
                            <a href=\"\"><i class=\"text-success\"></i>
                                &nbsp;</a>
                        </div>
                    </div>
                ";
        
        $__internal_d9fd14d9aad251f3cccbb51394a8d4ab4145c5426813546e908da2a521cdd15c->leave($__internal_d9fd14d9aad251f3cccbb51394a8d4ab4145c5426813546e908da2a521cdd15c_prof);

    }

    // line 171
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_2a99ffe2ec55659449e35bbfc5a7bd2f95d675ab2a5e11a09d8a0148e89fdccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a99ffe2ec55659449e35bbfc5a7bd2f95d675ab2a5e11a09d8a0148e89fdccf->enter($__internal_2a99ffe2ec55659449e35bbfc5a7bd2f95d675ab2a5e11a09d8a0148e89fdccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 172
        echo "
                ";
        
        $__internal_2a99ffe2ec55659449e35bbfc5a7bd2f95d675ab2a5e11a09d8a0148e89fdccf->leave($__internal_2a99ffe2ec55659449e35bbfc5a7bd2f95d675ab2a5e11a09d8a0148e89fdccf_prof);

    }

    // line 178
    public function block_container($context, array $blocks = array())
    {
        $__internal_9f9d521d20427ffef9c7d0c423ae96932b32025d1cb40702e6fbc7e2dd71d342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f9d521d20427ffef9c7d0c423ae96932b32025d1cb40702e6fbc7e2dd71d342->enter($__internal_9f9d521d20427ffef9c7d0c423ae96932b32025d1cb40702e6fbc7e2dd71d342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 179
        echo "        <div class=\"content-wrapper\">
            <section class=\"content-header\">
                ";
        // line 181
        $this->displayBlock('header_content', $context, $blocks);
        // line 188
        echo "            </section>
            <section class=\"content putHtml\">
                ";
        // line 190
        $this->displayBlock('content', $context, $blocks);
        // line 191
        echo "            </section>
        </div>
    ";
        
        $__internal_9f9d521d20427ffef9c7d0c423ae96932b32025d1cb40702e6fbc7e2dd71d342->leave($__internal_9f9d521d20427ffef9c7d0c423ae96932b32025d1cb40702e6fbc7e2dd71d342_prof);

    }

    // line 181
    public function block_header_content($context, array $blocks = array())
    {
        $__internal_66d8020df4e126e2de821cd33154380801861c05efedab4ed883b92b78f61987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66d8020df4e126e2de821cd33154380801861c05efedab4ed883b92b78f61987->enter($__internal_66d8020df4e126e2de821cd33154380801861c05efedab4ed883b92b78f61987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_content"));

        // line 182
        echo "                    <h1>
                        ";
        // line 183
        $this->displayBlock('page_title', $context, $blocks);
        // line 184
        echo "
                        <div class=\"page-quick-actions pull-right\">";
        // line 185
        $this->displayBlock('page_quick_actions', $context, $blocks);
        echo "</div>
                    </h1>
                ";
        
        $__internal_66d8020df4e126e2de821cd33154380801861c05efedab4ed883b92b78f61987->leave($__internal_66d8020df4e126e2de821cd33154380801861c05efedab4ed883b92b78f61987_prof);

    }

    // line 183
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_c19c21c382278334220f73cbe95b5632d0698d83cf224d5d11146b59fccc2266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c19c21c382278334220f73cbe95b5632d0698d83cf224d5d11146b59fccc2266->enter($__internal_c19c21c382278334220f73cbe95b5632d0698d83cf224d5d11146b59fccc2266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "FADCO+";
        
        $__internal_c19c21c382278334220f73cbe95b5632d0698d83cf224d5d11146b59fccc2266->leave($__internal_c19c21c382278334220f73cbe95b5632d0698d83cf224d5d11146b59fccc2266_prof);

    }

    // line 185
    public function block_page_quick_actions($context, array $blocks = array())
    {
        $__internal_583422331bc07f6a2fd1e2b06832f2be5bef9aa5fd523048c5b68151ee171a5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_583422331bc07f6a2fd1e2b06832f2be5bef9aa5fd523048c5b68151ee171a5e->enter($__internal_583422331bc07f6a2fd1e2b06832f2be5bef9aa5fd523048c5b68151ee171a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_quick_actions"));

        
        $__internal_583422331bc07f6a2fd1e2b06832f2be5bef9aa5fd523048c5b68151ee171a5e->leave($__internal_583422331bc07f6a2fd1e2b06832f2be5bef9aa5fd523048c5b68151ee171a5e_prof);

    }

    // line 190
    public function block_content($context, array $blocks = array())
    {
        $__internal_5a6c972bd662562c942a2fade20e75068462d3b678d0cff9df9e8ad2029f1600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a6c972bd662562c942a2fade20e75068462d3b678d0cff9df9e8ad2029f1600->enter($__internal_5a6c972bd662562c942a2fade20e75068462d3b678d0cff9df9e8ad2029f1600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_5a6c972bd662562c942a2fade20e75068462d3b678d0cff9df9e8ad2029f1600->leave($__internal_5a6c972bd662562c942a2fade20e75068462d3b678d0cff9df9e8ad2029f1600_prof);

    }

    // line 195
    public function block_footer($context, array $blocks = array())
    {
        $__internal_908257192d0e86f0fe780de23217c3c64881e1504e14399607c5e42bd5bec9c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_908257192d0e86f0fe780de23217c3c64881e1504e14399607c5e42bd5bec9c5->enter($__internal_908257192d0e86f0fe780de23217c3c64881e1504e14399607c5e42bd5bec9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 196
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
        // line 207
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
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/load.gif"), "html", null, true);
        echo "\"></center></span>
            <span class=\"hide\" id=\"home-load\"> <center><img src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/home-load.gif"), "html", null, true);
        echo "\">
                </center></span>

            <div class=\"pull-right hidden-xs\">
                Tous droits réservés.
            </div>
            <strong>Copyright &copy; 2017 | FADCO+</strong>
        </footer>
        
    ";
        
        $__internal_908257192d0e86f0fe780de23217c3c64881e1504e14399607c5e42bd5bec9c5->leave($__internal_908257192d0e86f0fe780de23217c3c64881e1504e14399607c5e42bd5bec9c5_prof);

    }

    // line 312
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_4fa9ed4625cb83c56f9f42369a7e82a00fe83e7e2ecc5b480b651f79eda98372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa9ed4625cb83c56f9f42369a7e82a00fe83e7e2ecc5b480b651f79eda98372->enter($__internal_4fa9ed4625cb83c56f9f42369a7e82a00fe83e7e2ecc5b480b651f79eda98372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 313
        echo "
    <script src=\"";
        // line 314
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
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/js/export.state.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/style/jquery.accordDate.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/moment/moment-with-locales.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/bower_components/moment/locale/fr.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/js/live-edit.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/cookie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/js/gsp-modal.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/gspbot/gspbot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/gspbot/base-templates.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/gspbot/test.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/gspbot/missions.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/gspbot/notes.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 344
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "1b37284"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1b37284") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/1b37284.js");
            // line 345
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 347
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/js/ajaxify-search.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/js/bootstrap-checkbox.min.js"), "html", null, true);
        echo "\" defer></script>
    ";
        // line 349
        echo $this->env->getExtension('AjaxifySearch\AjaxifySearchTwigExtension')->initAjaxifySearch();
        echo "
    <script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/plugins/bootstrap-duallistbox-master/js/jquery.bootstrap-duallistbox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/plugins/toastee-master/js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/plugins/toastee-master/js/jquery.toastee.0.1.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/plugins/help-widget/js/help-widget.js"), "html", null, true);
        echo "\"></script>
    <script>
        ";
        // line 355
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 356
            echo "            \$(document).ready(function () {
                GspBot.initialize({
                    id: ";
            // line 358
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
            echo ",
                    name: '";
            // line 359
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
            echo "'
                })
            })

            function rafraichir() {
                \$.ajax({
                    url: '";
            // line 365
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
        // line 379
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
        
        $__internal_4fa9ed4625cb83c56f9f42369a7e82a00fe83e7e2ecc5b480b651f79eda98372->leave($__internal_4fa9ed4625cb83c56f9f42369a7e82a00fe83e7e2ecc5b480b651f79eda98372_prof);

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
        return array (  978 => 379,  961 => 365,  952 => 359,  948 => 358,  944 => 356,  942 => 355,  937 => 353,  933 => 352,  929 => 351,  925 => 350,  921 => 349,  917 => 348,  912 => 347,  905 => 345,  900 => 344,  896 => 343,  892 => 342,  888 => 341,  884 => 340,  880 => 339,  876 => 338,  872 => 337,  868 => 336,  864 => 335,  859 => 333,  854 => 331,  849 => 329,  845 => 328,  841 => 327,  836 => 325,  822 => 314,  819 => 313,  813 => 312,  796 => 239,  792 => 238,  758 => 207,  745 => 196,  739 => 195,  728 => 190,  717 => 185,  705 => 183,  695 => 185,  692 => 184,  690 => 183,  687 => 182,  681 => 181,  672 => 191,  670 => 190,  666 => 188,  664 => 181,  660 => 179,  654 => 178,  646 => 172,  640 => 171,  627 => 163,  621 => 162,  612 => 174,  610 => 171,  607 => 170,  605 => 162,  601 => 160,  595 => 159,  587 => 117,  580 => 114,  577 => 113,  571 => 112,  559 => 97,  556 => 96,  553 => 95,  546 => 91,  543 => 90,  537 => 89,  530 => 87,  515 => 84,  512 => 83,  506 => 82,  493 => 147,  489 => 146,  486 => 145,  479 => 141,  476 => 140,  474 => 139,  460 => 128,  452 => 122,  450 => 121,  444 => 119,  441 => 118,  439 => 112,  434 => 109,  419 => 106,  416 => 105,  409 => 99,  407 => 89,  404 => 88,  402 => 82,  396 => 78,  390 => 77,  380 => 74,  374 => 73,  364 => 62,  358 => 61,  346 => 153,  344 => 77,  341 => 76,  339 => 73,  330 => 66,  328 => 61,  318 => 54,  312 => 51,  307 => 49,  304 => 48,  298 => 47,  289 => 35,  286 => 34,  272 => 32,  268 => 31,  264 => 30,  260 => 29,  255 => 28,  251 => 26,  247 => 25,  242 => 23,  237 => 21,  233 => 20,  229 => 19,  224 => 18,  220 => 16,  216 => 15,  211 => 13,  204 => 10,  198 => 9,  186 => 5,  176 => 635,  174 => 312,  168 => 309,  110 => 253,  105 => 249,  103 => 195,  100 => 194,  98 => 178,  95 => 177,  92 => 159,  90 => 47,  83 => 45,  76 => 41,  72 => 40,  68 => 39,  64 => 38,  59 => 37,  57 => 9,  53 => 8,  47 => 5,  41 => 1,);
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
        {#<link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('bundles/fadco/BonCommandeInterne/css/style.css') }}\">#}
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/fadco/gspbot/gspbot.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/fadco/gspbot/notes.css') }}\">
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
