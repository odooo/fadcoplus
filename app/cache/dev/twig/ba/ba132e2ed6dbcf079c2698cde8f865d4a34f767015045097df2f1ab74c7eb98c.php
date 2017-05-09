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
        $__internal_254fcfb8a8ee5c015b3bf3d0a1abad1ead3434390dd501766641f9c0a3590fc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_254fcfb8a8ee5c015b3bf3d0a1abad1ead3434390dd501766641f9c0a3590fc8->enter($__internal_254fcfb8a8ee5c015b3bf3d0a1abad1ead3434390dd501766641f9c0a3590fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::template.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/globalsevice.ico"), "html", null, true);
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
        if (twig_in_filter("mails", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
            echo "sidebar-collapse";
        }
        echo "\">
<div class=\"wrapper\">
    ";
        // line 49
        $this->displayBlock('header', $context, $blocks);
        // line 161
        echo "    ";
        $this->displayBlock('menu_gauche', $context, $blocks);
        // line 185
        echo "

    ";
        // line 187
        $this->displayBlock('container', $context, $blocks);
        // line 205
        echo "
    ";
        // line 206
        $this->displayBlock('footer', $context, $blocks);
        // line 261
        echo "
</div>

    ";
        // line 265
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
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/load.gif"), "html", null, true);
        echo "\">
    </center></span>

";
        // line 324
        $this->displayBlock('javascript', $context, $blocks);
        // line 635
        echo "
</body>
</html>
";
        
        $__internal_254fcfb8a8ee5c015b3bf3d0a1abad1ead3434390dd501766641f9c0a3590fc8->leave($__internal_254fcfb8a8ee5c015b3bf3d0a1abad1ead3434390dd501766641f9c0a3590fc8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_37373d251124c96851fd7aa10abb5b55d1d5001d8c4e2544a4dadc3eeaf0b8d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37373d251124c96851fd7aa10abb5b55d1d5001d8c4e2544a4dadc3eeaf0b8d5->enter($__internal_37373d251124c96851fd7aa10abb5b55d1d5001d8c4e2544a4dadc3eeaf0b8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "G S P  Manager";
        
        $__internal_37373d251124c96851fd7aa10abb5b55d1d5001d8c4e2544a4dadc3eeaf0b8d5->leave($__internal_37373d251124c96851fd7aa10abb5b55d1d5001d8c4e2544a4dadc3eeaf0b8d5_prof);

    }

    // line 9
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_76d5f01e507aa0d5a8bb145491f16f8d2a5ea73f5d05453704362b9ceecb0259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76d5f01e507aa0d5a8bb145491f16f8d2a5ea73f5d05453704362b9ceecb0259->enter($__internal_76d5f01e507aa0d5a8bb145491f16f8d2a5ea73f5d05453704362b9ceecb0259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 10
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
        ";
        // line 13
        echo "        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/datatables/jquery.dataTables.min.css"), "html", null, true);
        echo "\">
       ";
        // line 16
        echo "        <link rel=\"stylesheet\"
              href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        ";
        // line 20
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/dist/css/skins/skin-blue.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/select2/select2.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/filetype-icon-style.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/multiselect2sides/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\"
              href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/multiselect2sides/lib/google-code-prettify/prettify.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/css/style.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/BonCommandeInterne/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/gspbot/gspbot.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/gspbot/notes.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/css/gsp-modal.css"), "html", null, true);
        echo "\">
        ";
        // line 33
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "df51a00_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_df51a00_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/df51a00_custom_1.css");
            // line 34
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
        // line 36
        echo "
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/plugins/bootstrap-duallistbox-master/css/bootstrap-duallistbox.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_76d5f01e507aa0d5a8bb145491f16f8d2a5ea73f5d05453704362b9ceecb0259->leave($__internal_76d5f01e507aa0d5a8bb145491f16f8d2a5ea73f5d05453704362b9ceecb0259_prof);

    }

    // line 49
    public function block_header($context, array $blocks = array())
    {
        $__internal_a5f066f9d5bbaebb7c57f8b4cce49f4b6a1fcda72066e9b821b26616e68eb412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5f066f9d5bbaebb7c57f8b4cce49f4b6a1fcda72066e9b821b26616e68eb412->enter($__internal_a5f066f9d5bbaebb7c57f8b4cce49f4b6a1fcda72066e9b821b26616e68eb412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 50
        echo "        <header class=\"main-header\">
            <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_home");
        echo "\" class=\"logo\">
                <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/globalsevice.png"), "html", null, true);
        echo "\" style=\"width:50px;\"
                                         class=\"img-circle\" alt=\"fiacre\"/></span>
                <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/globalsevice.png"), "html", null, true);
        echo "\" style=\"width:70px;\"
                                       class=\"img-circle\" alt=\"fiacre\"/>FADCO+</span>
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
        // line 155
        echo "                    </ul>
                </div>

            </nav>
        </header>
    ";
        
        $__internal_a5f066f9d5bbaebb7c57f8b4cce49f4b6a1fcda72066e9b821b26616e68eb412->leave($__internal_a5f066f9d5bbaebb7c57f8b4cce49f4b6a1fcda72066e9b821b26616e68eb412_prof);

    }

    // line 63
    public function block_button_menu($context, array $blocks = array())
    {
        $__internal_56774146075b2dda34dea8369e0b71c43babab244577b977f4cb1e6fe18b8997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56774146075b2dda34dea8369e0b71c43babab244577b977f4cb1e6fe18b8997->enter($__internal_56774146075b2dda34dea8369e0b71c43babab244577b977f4cb1e6fe18b8997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_menu"));

        // line 64
        echo "                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">Toggle navigation</span>
                    </a>
                ";
        
        $__internal_56774146075b2dda34dea8369e0b71c43babab244577b977f4cb1e6fe18b8997->leave($__internal_56774146075b2dda34dea8369e0b71c43babab244577b977f4cb1e6fe18b8997_prof);

    }

    // line 75
    public function block_notification($context, array $blocks = array())
    {
        $__internal_1dd248552fb266774b7f258334a953efe6dbf645921a802a8e5aa4660cbf0d4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd248552fb266774b7f258334a953efe6dbf645921a802a8e5aa4660cbf0d4b->enter($__internal_1dd248552fb266774b7f258334a953efe6dbf645921a802a8e5aa4660cbf0d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notification"));

        // line 76
        echo "                            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FadcoBundle:GestionDesAlertes:notifications"));
        echo "
                        ";
        
        $__internal_1dd248552fb266774b7f258334a953efe6dbf645921a802a8e5aa4660cbf0d4b->leave($__internal_1dd248552fb266774b7f258334a953efe6dbf645921a802a8e5aa4660cbf0d4b_prof);

    }

    // line 79
    public function block_userProfil($context, array $blocks = array())
    {
        $__internal_7a41b9042a66a9b32d3c8699d3b3f00a7c94b10ee53c0b9629a3d7648827b3c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a41b9042a66a9b32d3c8699d3b3f00a7c94b10ee53c0b9629a3d7648827b3c9->enter($__internal_7a41b9042a66a9b32d3c8699d3b3f00a7c94b10ee53c0b9629a3d7648827b3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userProfil"));

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
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 108
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
        // line 111
        echo "
                                        <p>

                                            ";
        // line 114
        $this->displayBlock('userrr', $context, $blocks);
        // line 120
        echo "                                            ";
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 121
            echo "                                                <small>Membre depuis </small>
                                            ";
        }
        // line 123
        echo "                                            ";
        // line 124
        echo "                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class=\"user-body\">
                                        <div class=\"row\">
                                            <div class=\"col-xs-5 text-center\">
                                              <a href='#' data-url=\"";
        // line 130
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
        // line 141
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 142
            echo "                                            <div class=\"pull-left\">
                                                <a href=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_show", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\"
                                                   class=\"btn btn-default btn-flat\">Profile</a>
                                            </div>
                                        ";
        }
        // line 147
        echo "                                        <div class=\"pull-right\">
                                            <a href=\"";
        // line 148
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"
                                               class=\"btn btn-default btn-flat\">";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        ";
        
        $__internal_7a41b9042a66a9b32d3c8699d3b3f00a7c94b10ee53c0b9629a3d7648827b3c9->leave($__internal_7a41b9042a66a9b32d3c8699d3b3f00a7c94b10ee53c0b9629a3d7648827b3c9_prof);

    }

    // line 84
    public function block_userImg($context, array $blocks = array())
    {
        $__internal_c79776b7ac14bcb357b2ecf818a7494c630745aa9afac93f2cba2388204cad05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c79776b7ac14bcb357b2ecf818a7494c630745aa9afac93f2cba2388204cad05->enter($__internal_c79776b7ac14bcb357b2ecf818a7494c630745aa9afac93f2cba2388204cad05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userImg"));

        // line 85
        echo "                                        ";
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 86
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
        // line 89
        echo "                                    ";
        
        $__internal_c79776b7ac14bcb357b2ecf818a7494c630745aa9afac93f2cba2388204cad05->leave($__internal_c79776b7ac14bcb357b2ecf818a7494c630745aa9afac93f2cba2388204cad05_prof);

    }

    // line 91
    public function block_user($context, array $blocks = array())
    {
        $__internal_2d52c499b07f58dbdb2684c8bea6b3e8250ab3d100399382915e44dc3291200b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d52c499b07f58dbdb2684c8bea6b3e8250ab3d100399382915e44dc3291200b->enter($__internal_2d52c499b07f58dbdb2684c8bea6b3e8250ab3d100399382915e44dc3291200b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user"));

        // line 92
        echo "                              ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 93
            echo "                                  ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nom", array())), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
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
        
        $__internal_2d52c499b07f58dbdb2684c8bea6b3e8250ab3d100399382915e44dc3291200b->leave($__internal_2d52c499b07f58dbdb2684c8bea6b3e8250ab3d100399382915e44dc3291200b_prof);

    }

    // line 114
    public function block_userrr($context, array $blocks = array())
    {
        $__internal_f9a4dce219e05bc889ab68e05c3f9951fda269e61e107e443b452fb879b59ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a4dce219e05bc889ab68e05c3f9951fda269e61e107e443b452fb879b59ceb->enter($__internal_f9a4dce219e05bc889ab68e05c3f9951fda269e61e107e443b452fb879b59ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userrr"));

        // line 115
        echo "                                                ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 116
            echo "                                                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => ((twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nom", array())) . " ") . $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()))), "FOSUserBundle"), "html", null, true);
            echo "

                                                ";
        } else {
            // line 119
            echo "                                                ";
        }
        
        $__internal_f9a4dce219e05bc889ab68e05c3f9951fda269e61e107e443b452fb879b59ceb->leave($__internal_f9a4dce219e05bc889ab68e05c3f9951fda269e61e107e443b452fb879b59ceb_prof);

    }

    // line 161
    public function block_menu_gauche($context, array $blocks = array())
    {
        $__internal_2cf38f051851a94fdb2631e5d7a731080e6a3677ad5077669ddfbb55bbc577a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf38f051851a94fdb2631e5d7a731080e6a3677ad5077669ddfbb55bbc577a4->enter($__internal_2cf38f051851a94fdb2631e5d7a731080e6a3677ad5077669ddfbb55bbc577a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_gauche"));

        // line 162
        echo "        <aside class=\"main-sidebar\">

            <section class=\"sidebar\">

                ";
        // line 166
        $this->displayBlock('pannel', $context, $blocks);
        // line 174
        echo "

                ";
        // line 176
        $this->displayBlock('sidebar', $context, $blocks);
        // line 179
        echo "
            </section>

        </aside>

    ";
        
        $__internal_2cf38f051851a94fdb2631e5d7a731080e6a3677ad5077669ddfbb55bbc577a4->leave($__internal_2cf38f051851a94fdb2631e5d7a731080e6a3677ad5077669ddfbb55bbc577a4_prof);

    }

    // line 166
    public function block_pannel($context, array $blocks = array())
    {
        $__internal_ad88abb6769a2d13fbccb1ef8b5badc8669a03303124552b4fc4d5fdd54bc848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad88abb6769a2d13fbccb1ef8b5badc8669a03303124552b4fc4d5fdd54bc848->enter($__internal_ad88abb6769a2d13fbccb1ef8b5badc8669a03303124552b4fc4d5fdd54bc848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pannel"));

        // line 167
        echo "                    <div class=\"user-panel\">
                        <div class=\"pull-left text-lime\">
                            <a href=\"\"><i class=\"fa fa-search text-success\"></i>
                                RECHERCHER UN BIEN</a>
                        </div>
                    </div>
                ";
        
        $__internal_ad88abb6769a2d13fbccb1ef8b5badc8669a03303124552b4fc4d5fdd54bc848->leave($__internal_ad88abb6769a2d13fbccb1ef8b5badc8669a03303124552b4fc4d5fdd54bc848_prof);

    }

    // line 176
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_645ef0ebb75d9121317ad444b63191a2bc5b6308c8633b92163c0583905a9abe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_645ef0ebb75d9121317ad444b63191a2bc5b6308c8633b92163c0583905a9abe->enter($__internal_645ef0ebb75d9121317ad444b63191a2bc5b6308c8633b92163c0583905a9abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 177
        echo "
                ";
        
        $__internal_645ef0ebb75d9121317ad444b63191a2bc5b6308c8633b92163c0583905a9abe->leave($__internal_645ef0ebb75d9121317ad444b63191a2bc5b6308c8633b92163c0583905a9abe_prof);

    }

    // line 187
    public function block_container($context, array $blocks = array())
    {
        $__internal_20f57a97c73b05c519ff28d8f7ffe658ba3e8ca434461b2cde4b59739896680f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f57a97c73b05c519ff28d8f7ffe658ba3e8ca434461b2cde4b59739896680f->enter($__internal_20f57a97c73b05c519ff28d8f7ffe658ba3e8ca434461b2cde4b59739896680f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 188
        echo "        <div class=\"content-wrapper\">
            <section class=\"content-header\">
                ";
        // line 190
        $this->displayBlock('header_content', $context, $blocks);
        // line 197
        echo "            </section>


            <section class=\"content putHtml\">
                ";
        // line 201
        $this->displayBlock('content', $context, $blocks);
        // line 202
        echo "            </section>
        </div>
    ";
        
        $__internal_20f57a97c73b05c519ff28d8f7ffe658ba3e8ca434461b2cde4b59739896680f->leave($__internal_20f57a97c73b05c519ff28d8f7ffe658ba3e8ca434461b2cde4b59739896680f_prof);

    }

    // line 190
    public function block_header_content($context, array $blocks = array())
    {
        $__internal_687077e63e7666c36d58c71652c601eac779896bd2e38438b3aee897df119986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_687077e63e7666c36d58c71652c601eac779896bd2e38438b3aee897df119986->enter($__internal_687077e63e7666c36d58c71652c601eac779896bd2e38438b3aee897df119986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_content"));

        // line 191
        echo "                    <h1>
                        ";
        // line 192
        $this->displayBlock('page_title', $context, $blocks);
        // line 193
        echo "
                        <div class=\"page-quick-actions pull-right\">";
        // line 194
        $this->displayBlock('page_quick_actions', $context, $blocks);
        echo "</div>
                    </h1>
                ";
        
        $__internal_687077e63e7666c36d58c71652c601eac779896bd2e38438b3aee897df119986->leave($__internal_687077e63e7666c36d58c71652c601eac779896bd2e38438b3aee897df119986_prof);

    }

    // line 192
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_05ff82e5c3473ccdba700cfad6f2e83a902b9404dca37edf106bbca22408f9b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05ff82e5c3473ccdba700cfad6f2e83a902b9404dca37edf106bbca22408f9b2->enter($__internal_05ff82e5c3473ccdba700cfad6f2e83a902b9404dca37edf106bbca22408f9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "FADCO+";
        
        $__internal_05ff82e5c3473ccdba700cfad6f2e83a902b9404dca37edf106bbca22408f9b2->leave($__internal_05ff82e5c3473ccdba700cfad6f2e83a902b9404dca37edf106bbca22408f9b2_prof);

    }

    // line 194
    public function block_page_quick_actions($context, array $blocks = array())
    {
        $__internal_27fb8379bc3143f219f3665ba1a766f44038cfe5d270157300c5f51bd1087350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27fb8379bc3143f219f3665ba1a766f44038cfe5d270157300c5f51bd1087350->enter($__internal_27fb8379bc3143f219f3665ba1a766f44038cfe5d270157300c5f51bd1087350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_quick_actions"));

        
        $__internal_27fb8379bc3143f219f3665ba1a766f44038cfe5d270157300c5f51bd1087350->leave($__internal_27fb8379bc3143f219f3665ba1a766f44038cfe5d270157300c5f51bd1087350_prof);

    }

    // line 201
    public function block_content($context, array $blocks = array())
    {
        $__internal_c448b5d9037f44157876ef2eab4e5a92720c7afdad953db7cafa9ebf9f9b1bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c448b5d9037f44157876ef2eab4e5a92720c7afdad953db7cafa9ebf9f9b1bbd->enter($__internal_c448b5d9037f44157876ef2eab4e5a92720c7afdad953db7cafa9ebf9f9b1bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_c448b5d9037f44157876ef2eab4e5a92720c7afdad953db7cafa9ebf9f9b1bbd->leave($__internal_c448b5d9037f44157876ef2eab4e5a92720c7afdad953db7cafa9ebf9f9b1bbd_prof);

    }

    // line 206
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3e15e5adf2ec554c602bb76b707da282684c8bee574b24a7719412a5afe8ed56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e15e5adf2ec554c602bb76b707da282684c8bee574b24a7719412a5afe8ed56->enter($__internal_3e15e5adf2ec554c602bb76b707da282684c8bee574b24a7719412a5afe8ed56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 207
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
        // line 219
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
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/load.gif"), "html", null, true);
        echo "\"></center></span>
            <span class=\"hide\" id=\"home-load\"> <center><img src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/home-load.gif"), "html", null, true);
        echo "\">
                </center></span>

            <div class=\"pull-right hidden-xs\">
                Tous droits réservés.
            </div>
            <strong>Copyright &copy; 2017 | FADCO+</strong>
        </footer>
        
    ";
        
        $__internal_3e15e5adf2ec554c602bb76b707da282684c8bee574b24a7719412a5afe8ed56->leave($__internal_3e15e5adf2ec554c602bb76b707da282684c8bee574b24a7719412a5afe8ed56_prof);

    }

    // line 324
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_463e4e4e82889d1a193d23d92ab8e1b8e1773ba4b6d02d0dd54ea661d35e3a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_463e4e4e82889d1a193d23d92ab8e1b8e1773ba4b6d02d0dd54ea661d35e3a7c->enter($__internal_463e4e4e82889d1a193d23d92ab8e1b8e1773ba4b6d02d0dd54ea661d35e3a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 325
        echo "
    <script src=\"";
        // line 326
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
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/js/export.state.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/style/jquery.accordDate.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/moment/moment-with-locales.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/bower_components/moment/locale/fr.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/js/live-edit.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/cookie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/js/gsp-modal.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/gspbot/gspbot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/gspbot/base-templates.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/gspbot/test.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/gspbot/missions.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/gspbot/notes.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 356
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "1b37284"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1b37284") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/1b37284.js");
            // line 357
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 359
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/js/ajaxify-search.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/js/bootstrap-checkbox.min.js"), "html", null, true);
        echo "\" defer></script>
    ";
        // line 361
        echo $this->env->getExtension('AjaxifySearch\AjaxifySearchTwigExtension')->initAjaxifySearch();
        echo "
    <script src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/plugins/bootstrap-duallistbox-master/js/jquery.bootstrap-duallistbox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/plugins/toastee-master/js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/plugins/toastee-master/js/jquery.toastee.0.1.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/plugins/help-widget/js/help-widget.js"), "html", null, true);
        echo "\"></script>
    <script>
        //   \$('.select2').select2();

        ";
        // line 369
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 370
            echo "            \$(document).ready(function () {
                GspBot.initialize({
                    id: ";
            // line 372
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
            echo ",
                    name: '";
            // line 373
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
            echo "'
                })
            })

            function rafraichir() {
                \$.ajax({
                    url: '";
            // line 379
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
        // line 393
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

    ";
        // line 588
        echo "    <script type=\"text/javascript\"  src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lc/multiselect/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
    <style type=\"text/css\">
\t@import url(\"";
        // line 590
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lc/multiselect/css/multi-select.css"), "html", null, true);
        echo "\");
    </style>

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
        
        $__internal_463e4e4e82889d1a193d23d92ab8e1b8e1773ba4b6d02d0dd54ea661d35e3a7c->leave($__internal_463e4e4e82889d1a193d23d92ab8e1b8e1773ba4b6d02d0dd54ea661d35e3a7c_prof);

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
        return array (  1197 => 590,  1191 => 588,  995 => 393,  978 => 379,  969 => 373,  965 => 372,  961 => 370,  959 => 369,  952 => 365,  948 => 364,  944 => 363,  940 => 362,  936 => 361,  932 => 360,  927 => 359,  920 => 357,  915 => 356,  911 => 355,  907 => 354,  903 => 353,  899 => 352,  895 => 351,  891 => 350,  887 => 349,  883 => 348,  879 => 347,  874 => 345,  869 => 343,  864 => 341,  860 => 340,  856 => 339,  851 => 337,  837 => 326,  834 => 325,  828 => 324,  811 => 251,  807 => 250,  773 => 219,  759 => 207,  753 => 206,  742 => 201,  731 => 194,  719 => 192,  709 => 194,  706 => 193,  704 => 192,  701 => 191,  695 => 190,  686 => 202,  684 => 201,  678 => 197,  676 => 190,  672 => 188,  666 => 187,  658 => 177,  652 => 176,  639 => 167,  633 => 166,  621 => 179,  619 => 176,  615 => 174,  613 => 166,  607 => 162,  601 => 161,  593 => 119,  586 => 116,  583 => 115,  577 => 114,  565 => 99,  562 => 98,  559 => 97,  552 => 93,  549 => 92,  543 => 91,  536 => 89,  521 => 86,  518 => 85,  512 => 84,  499 => 149,  495 => 148,  492 => 147,  485 => 143,  482 => 142,  480 => 141,  466 => 130,  458 => 124,  456 => 123,  452 => 121,  449 => 120,  447 => 114,  442 => 111,  427 => 108,  424 => 107,  417 => 101,  415 => 91,  412 => 90,  410 => 84,  404 => 80,  398 => 79,  388 => 76,  382 => 75,  372 => 64,  366 => 63,  354 => 155,  352 => 79,  349 => 78,  347 => 75,  338 => 68,  336 => 63,  326 => 56,  320 => 53,  315 => 51,  312 => 50,  306 => 49,  297 => 37,  294 => 36,  280 => 34,  276 => 33,  272 => 32,  268 => 31,  264 => 30,  260 => 29,  256 => 28,  252 => 27,  247 => 25,  242 => 23,  238 => 22,  234 => 21,  229 => 20,  225 => 18,  221 => 17,  218 => 16,  214 => 14,  211 => 13,  205 => 10,  199 => 9,  187 => 5,  177 => 635,  175 => 324,  169 => 321,  111 => 265,  106 => 261,  104 => 206,  101 => 205,  99 => 187,  95 => 185,  92 => 161,  90 => 49,  83 => 47,  76 => 43,  72 => 42,  68 => 41,  64 => 40,  59 => 39,  57 => 9,  53 => 8,  47 => 5,  41 => 1,);
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
    <title>{% block title %}G S P  Manager{% endblock %}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <link rel=\"icon\" href=\"{{ asset('bundles/FadcoBundle/globalsevice.ico') }}\" type=\"image/x-icon\"/>
    {% block stylesheet %}
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/FadcoBundle/bootstrap/css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
        {#<link rel=\"stylesheet\" href=\"{{ asset('bundles/FadcoBundle/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}\">#}
        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css\">
        <link rel=\"stylesheet\" href=\"{{asset('bundles/FadcoBundle/plugins/datatables/jquery.dataTables.min.css')}}\">
       {# <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\">#}
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
            <span class=\"logo-mini\"><img src=\"{{ asset('bundles/FadcoBundle/globalsevice.png') }}\" style=\"width:50px;\"
                                         class=\"img-circle\" alt=\"fiacre\"/></span>
                <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><img src=\"{{ asset('bundles/FadcoBundle/globalsevice.png') }}\" style=\"width:70px;\"
                                       class=\"img-circle\" alt=\"fiacre\"/>FADCO+</span>
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
                                                <small>Membre depuis </small>
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
                            <a href=\"\"><i class=\"fa fa-search text-success\"></i>
                                RECHERCHER UN BIEN</a>
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

    {# websocket client #}
    <script type=\"text/javascript\"  src=\"{{ asset('bundles/lc/multiselect/js/jquery.multi-select.js') }}\"></script>
    <style type=\"text/css\">
\t@import url(\"{{ asset('bundles/lc/multiselect/css/multi-select.css') }}\");
    </style>

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
