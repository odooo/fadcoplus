<?php

/* ::dash.html.twig */
class __TwigTemplate_ce3816d0a9f6e37d2805f52c44a425297fe59258d5ee7e275df90747a51ae2a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'notification' => array($this, 'block_notification'),
            'userProfil' => array($this, 'block_userProfil'),
            'userImg' => array($this, 'block_userImg'),
            'user' => array($this, 'block_user'),
            'userrr' => array($this, 'block_userrr'),
            'container' => array($this, 'block_container'),
            'header_content' => array($this, 'block_header_content'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3fc6ffb0593e48d821b90421da11bbe73fc9c40d63ebc86d45e87a14e9e345df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc6ffb0593e48d821b90421da11bbe73fc9c40d63ebc86d45e87a14e9e345df->enter($__internal_3fc6ffb0593e48d821b90421da11bbe73fc9c40d63ebc86d45e87a14e9e345df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::dash.html.twig"));

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
        echo "\" type=\"image/x-icon\" />
  ";
        // line 9
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 19
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/select2/select2.full.min.js"), "html", null, true);
        echo "\"></script>

</head>
<body class=\"hold-transition skin-blue sidebar-mini\">
   <div class=\"wrapper\">
    <header class=\"main-header\">

  
       
    <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_home");
        echo "\" class=\"logo\">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class=\"logo-mini\"><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/fadcoplus.jpg"), "html", null, true);
        echo "\" style=\"width:50px;\" class=\"img-circle\" alt=\"edgar\" /></span>
      <!-- logo for regular state and mobile devices -->
      <span class=\"logo-lg\"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/fadcoplus.jpg"), "html", null, true);
        echo "\" style=\"width:70px;\" class=\"img-circle\" alt=\"edgar\" />FADCO+</span>
    </a>

    <!-- Header Navbar -->
    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
    
      <div class=\"navbar-custom-menu\">
        <ul class=\"nav navbar-nav\">
          <!-- Messages: style can be found in dropdown.less-->
            <!-- Notification: style can be found in dropdown.less-->
\t
                ";
        // line 44
        $this->displayBlock('notification', $context, $blocks);
        // line 47
        echo "\t\t 
\t\t";
        // line 48
        $this->displayBlock('userProfil', $context, $blocks);
        // line 109
        echo "        </ul>
      </div>
\t
\t</nav>
  </header>


 ";
        // line 116
        $this->displayBlock('container', $context, $blocks);
        // line 136
        echo "
";
        // line 137
        $this->displayBlock('footer', $context, $blocks);
        // line 183
        echo "
       ";
        // line 184
        echo twig_include($this->env, $context, "FadcoBundle:Prestataire:popups.html.twig");
        echo "
       <span style=\"display:none;\" id=\"loading-classement\"> <center><img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/load.gif"), "html", null, true);
        echo "\">
    </center></span>

 </div>

";
        // line 190
        $this->displayBlock('javascript', $context, $blocks);
        // line 350
        echo "
</body>
</html>
";
        
        $__internal_3fc6ffb0593e48d821b90421da11bbe73fc9c40d63ebc86d45e87a14e9e345df->leave($__internal_3fc6ffb0593e48d821b90421da11bbe73fc9c40d63ebc86d45e87a14e9e345df_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec94d7cdba6b809f9244ad05afd590a3729da0b77fc676a5a6b1b489e8d7f85a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec94d7cdba6b809f9244ad05afd590a3729da0b77fc676a5a6b1b489e8d7f85a->enter($__internal_ec94d7cdba6b809f9244ad05afd590a3729da0b77fc676a5a6b1b489e8d7f85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FADCO+";
        
        $__internal_ec94d7cdba6b809f9244ad05afd590a3729da0b77fc676a5a6b1b489e8d7f85a->leave($__internal_ec94d7cdba6b809f9244ad05afd590a3729da0b77fc676a5a6b1b489e8d7f85a_prof);

    }

    // line 9
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_b019301d3ac0bc037ac2d472d5628a8ba8c7ecf06fb5fa337599a70d4ccfd1a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b019301d3ac0bc037ac2d472d5628a8ba8c7ecf06fb5fa337599a70d4ccfd1a0->enter($__internal_b019301d3ac0bc037ac2d472d5628a8ba8c7ecf06fb5fa337599a70d4ccfd1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 10
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\"/>
  <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/dist/css/skins/skin-blue.min.css"), "html", null, true);
        echo "\">


  
  ";
        
        $__internal_b019301d3ac0bc037ac2d472d5628a8ba8c7ecf06fb5fa337599a70d4ccfd1a0->leave($__internal_b019301d3ac0bc037ac2d472d5628a8ba8c7ecf06fb5fa337599a70d4ccfd1a0_prof);

    }

    // line 44
    public function block_notification($context, array $blocks = array())
    {
        $__internal_1b5a75a890a11d54091728b9720b3f24522818572c27b0184b1d76580f43dfce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b5a75a890a11d54091728b9720b3f24522818572c27b0184b1d76580f43dfce->enter($__internal_1b5a75a890a11d54091728b9720b3f24522818572c27b0184b1d76580f43dfce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notification"));

        // line 45
        echo "                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FadcoBundle:GestionDesAlertes:notifications"));
        echo "
                ";
        
        $__internal_1b5a75a890a11d54091728b9720b3f24522818572c27b0184b1d76580f43dfce->leave($__internal_1b5a75a890a11d54091728b9720b3f24522818572c27b0184b1d76580f43dfce_prof);

    }

    // line 48
    public function block_userProfil($context, array $blocks = array())
    {
        $__internal_72db2c6bd9aaa90813803f0711173c664d20b06f0473e349488f55cec53ca3e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72db2c6bd9aaa90813803f0711173c664d20b06f0473e349488f55cec53ca3e5->enter($__internal_72db2c6bd9aaa90813803f0711173c664d20b06f0473e349488f55cec53ca3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userProfil"));

        // line 49
        echo "          <li class=\"dropdown user user-menu\">
            <!-- Menu Toggle Button -->
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
              <!-- The user image in the navbar-->
\t\t\t  ";
        // line 53
        $this->displayBlock('userImg', $context, $blocks);
        // line 56
        echo "              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class=\"hidden-xs\">";
        // line 57
        $this->displayBlock('user', $context, $blocks);
        // line 66
        echo "</span>
            </a>
            <ul class=\"dropdown-menu\">
              <!-- The user image in the menu -->
              <li class=\"user-header\">
\t\t\t\t";
        // line 72
        echo "\t\t\t\t
                <img src=\"";
        // line 73
        if (twig_test_empty($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "photo", array()))) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/images/avatar.png"), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "WebPhoto", array())), "html", null, true);
            echo " ";
        }
        echo "\" class=\"img-circle\" alt=\"User Image\">

                <p>
                  ";
        // line 76
        $this->displayBlock('userrr', $context, $blocks);
        // line 82
        echo "            <small>Membre depuis ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "date", array()), "j/m/Y"), "html", null, true);
        echo "</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class=\"user-body\">
                <div class=\"row\">
                  <div class=\"col-xs-5 text-center\">
                    <a href='";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_edit");
        echo "'>Modifier Profile</a>
                  </div>
                    <div class=\"col-xs-5 text-center\">
                        <a href='#' data-url=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_modifier_profile");
        echo "\"  class=\"btn btn-success btn-profile-modifier\">Modifier Profile</a>
                    </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class=\"user-footer\">
                <div class=\"pull-left\">
                  <a href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_show", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default btn-flat\">Profile</a>
                </div>
                <div class=\"pull-right\">
                  <a href=\"";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-default btn-flat\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>
                </div>
              </li>
            </ul>
          </li>
          ";
        
        $__internal_72db2c6bd9aaa90813803f0711173c664d20b06f0473e349488f55cec53ca3e5->leave($__internal_72db2c6bd9aaa90813803f0711173c664d20b06f0473e349488f55cec53ca3e5_prof);

    }

    // line 53
    public function block_userImg($context, array $blocks = array())
    {
        $__internal_852691aef1baf63cfaf060ea2ff81e44e13a230526b789700ddaab499fa04dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_852691aef1baf63cfaf060ea2ff81e44e13a230526b789700ddaab499fa04dfe->enter($__internal_852691aef1baf63cfaf060ea2ff81e44e13a230526b789700ddaab499fa04dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userImg"));

        // line 54
        echo "                              <img src=\" ";
        if (twig_test_empty($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "photo", array()))) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/images/avatar.png"), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "WebPhoto", array())), "html", null, true);
            echo " ";
        }
        echo "\" class=\"user-image\" alt=\"User Image\">
                          ";
        
        $__internal_852691aef1baf63cfaf060ea2ff81e44e13a230526b789700ddaab499fa04dfe->leave($__internal_852691aef1baf63cfaf060ea2ff81e44e13a230526b789700ddaab499fa04dfe_prof);

    }

    // line 57
    public function block_user($context, array $blocks = array())
    {
        $__internal_83a79c70af68719b4fa0a4d20ff19c2afdd19d37973cc0dc4e25ab4b196df521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83a79c70af68719b4fa0a4d20ff19c2afdd19d37973cc0dc4e25ab4b196df521->enter($__internal_83a79c70af68719b4fa0a4d20ff19c2afdd19d37973cc0dc4e25ab4b196df521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user"));

        // line 58
        echo "\t\t\t\t  ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 59
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nom", array())), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                ";
            // line 63
            echo "            ";
        } else {
            // line 64
            echo "\t\t\t
                <a href=\"";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        
        $__internal_83a79c70af68719b4fa0a4d20ff19c2afdd19d37973cc0dc4e25ab4b196df521->leave($__internal_83a79c70af68719b4fa0a4d20ff19c2afdd19d37973cc0dc4e25ab4b196df521_prof);

    }

    // line 76
    public function block_userrr($context, array $blocks = array())
    {
        $__internal_69214a39c735f291598d06faf22d37226f13c8afe9c100082ea4a7e2df756de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69214a39c735f291598d06faf22d37226f13c8afe9c100082ea4a7e2df756de8->enter($__internal_69214a39c735f291598d06faf22d37226f13c8afe9c100082ea4a7e2df756de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userrr"));

        // line 77
        echo "\t\t\t\t  ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 78
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => ((twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nom", array())) . " ") . $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()))), "FOSUserBundle"), "html", null, true);
            echo " 
                
\t\t\t\t";
        } else {
            // line 81
            echo "\t\t\t\t";
        }
        
        $__internal_69214a39c735f291598d06faf22d37226f13c8afe9c100082ea4a7e2df756de8->leave($__internal_69214a39c735f291598d06faf22d37226f13c8afe9c100082ea4a7e2df756de8_prof);

    }

    // line 116
    public function block_container($context, array $blocks = array())
    {
        $__internal_251bbd0612e24e874e129e0dbd18f64db4f57558a512c48d32212c30f20049fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_251bbd0612e24e874e129e0dbd18f64db4f57558a512c48d32212c30f20049fd->enter($__internal_251bbd0612e24e874e129e0dbd18f64db4f57558a512c48d32212c30f20049fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 117
        echo "  <div class=\"content-wrapper\">
    <section class=\"content-header\">
\t";
        // line 119
        $this->displayBlock('header_content', $context, $blocks);
        // line 126
        echo "    </section>

    <section class=\"content\">
    ";
        // line 129
        $this->displayBlock('content', $context, $blocks);
        // line 132
        echo "    </section>
\t
  </div>
";
        
        $__internal_251bbd0612e24e874e129e0dbd18f64db4f57558a512c48d32212c30f20049fd->leave($__internal_251bbd0612e24e874e129e0dbd18f64db4f57558a512c48d32212c30f20049fd_prof);

    }

    // line 119
    public function block_header_content($context, array $blocks = array())
    {
        $__internal_9260ef48fc009e87e6fd58ac502a08da2e249a126063aff8032ea2756b333c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9260ef48fc009e87e6fd58ac502a08da2e249a126063aff8032ea2756b333c66->enter($__internal_9260ef48fc009e87e6fd58ac502a08da2e249a126063aff8032ea2756b333c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_content"));

        // line 120
        echo "      <h1>
      <center>
         FADCO +
      </center>
      </h1>
\t";
        
        $__internal_9260ef48fc009e87e6fd58ac502a08da2e249a126063aff8032ea2756b333c66->leave($__internal_9260ef48fc009e87e6fd58ac502a08da2e249a126063aff8032ea2756b333c66_prof);

    }

    // line 129
    public function block_content($context, array $blocks = array())
    {
        $__internal_ad74d32b107eb3297f259c368865f62b27a11460316787fda4515a9c08bedf63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad74d32b107eb3297f259c368865f62b27a11460316787fda4515a9c08bedf63->enter($__internal_ad74d32b107eb3297f259c368865f62b27a11460316787fda4515a9c08bedf63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 130
        echo "      
    ";
        
        $__internal_ad74d32b107eb3297f259c368865f62b27a11460316787fda4515a9c08bedf63->leave($__internal_ad74d32b107eb3297f259c368865f62b27a11460316787fda4515a9c08bedf63_prof);

    }

    // line 137
    public function block_footer($context, array $blocks = array())
    {
        $__internal_14f6ca91c2de47b7ccd600b1d1fdcf2ad04516e440029859ba889a00c474683e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f6ca91c2de47b7ccd600b1d1fdcf2ad04516e440029859ba889a00c474683e->enter($__internal_14f6ca91c2de47b7ccd600b1d1fdcf2ad04516e440029859ba889a00c474683e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 138
        echo "  <footer class=\"main-footer\">
      <!-- Modal -->
<div class=\"modal fade\" id=\"UserPasswordChange\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"UserPasswordChangeModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"UserPasswordChangeModalLabel\">Change le mot de passe</h4>
      </div>
          <iframe id=\"chpwd\" src=\"";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_change");
        echo "\" target=\"none\" class=\"modal-body\" width=\"100%\" height=\"400\" scrolling=\"auto\" frameborder=\"0\">
              
          </iframe>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
          <!-- modal pour afficher une information -->
<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" data-backdrop=\"static\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
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
                </div><!-- /.modal-content -->
        </div>
        </div>
         <!-- /.modal-div -->
        <span class=\"hide\" id=\"load\"> <center><img  src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/load.gif"), "html", null, true);
        echo "\" ></center></span>
    <div class=\"pull-right hidden-xs\">
      Tous droits réservés.
    </div>
    <strong>Copyright &copy; 2017 | Fadco+</strong> 
  </footer>
        ";
        // line 181
        $this->loadTemplate("::gspbot.html.twig", "::dash.html.twig", 181)->display($context);
        
        $__internal_14f6ca91c2de47b7ccd600b1d1fdcf2ad04516e440029859ba889a00c474683e->leave($__internal_14f6ca91c2de47b7ccd600b1d1fdcf2ad04516e440029859ba889a00c474683e_prof);

    }

    // line 190
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_8cd2b202292ef98ae186495654601b565b6663b40578b0955f0fe497f1684e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd2b202292ef98ae186495654601b565b6663b40578b0955f0fe497f1684e09->enter($__internal_8cd2b202292ef98ae186495654601b565b6663b40578b0955f0fe497f1684e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 191
        echo "\t <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/style/jquery.accordDate.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/moment/moment-with-locales.js"), "html", null, true);
        echo "\"></script>

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
                        function rafraichir()
                        { 
                            \$.ajax({
                                  url : '";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("alertes_raflaichir", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "Id", array()))), "html", null, true);
        echo "',
                                  type : 'GET',
                                  dataType : 'html',
                                  success : function(code_html, statut){
                                          \$('.messages-menu').html(code_html);
                                          rafraichir();
                                  },
                                  error : function(resultat, statut, erreur){
                                        rafraichir();
                                  }
                               }); 
                        } 
        moment.locale('fr'); 
        \$('.datenotification').each(function (index, value) { 
             
        var date = moment([parseInt(\$(this).attr('annee')),parseInt(\$(this).attr('mois'))-1, parseInt(\$(this).attr('jour')), parseInt(\$(this).attr('heure')),parseInt(\$(this).attr('minute')), parseInt(\$(this).attr('second')),0]).fromNow();
          \$(this).html('&nbsp;'+date);
        });
        
        
         \$('.alerte-lien').click(function(e){
                    e.preventDefault();

                    \$('#myModal .modal-title').html('NOTIFICATION');
                    \$('#myModal .modal-body').html('<div class=\"row\"> <div class=\"col-md-4\">'+\$(this).find('.alerte-image').html()+'</div><div class=\"col-md-7\"><div><b>'+\$(this).find('.alerte-username').html()+'  </b>'+\$(this).find('.alerte-message').html()+'</div><p></p><b><u style=\"color:#00BFFF\">'+\$(this).find('.alerte-moment').html()+'</u></b></div></div>');
                     \$('#myModal .modal-footer').html('<center><a class=\"btn  btn-primary\" href=\"'+\$(this).attr('href')+'\">Consulter</a></center>');
                    \$('#myModal').modal('show');
                    \$.ajax({
                        url : \$(this).attr('alerte-lu'),
                        type : 'GET',
                        dataType : 'html',
                        success : function(code_html, statut){
                                
                        },
                        error : function(resultat, statut, erreur){
                                
                        }
                      


                     });  
                });   
         
        
    \$('#parentDate').accordDate({
            \"day\":\"[name*=day]\",
            \"month\":\"[name*=month]\",
            \"year\":\"[name*=year]\",
            \"lengthYear\":100
        });
           \$(function(){
                \$('.detail-btn').click(function(e){
                    e.preventDefault();

                    \$('#myModal .modal-title').html(\$(this).attr('titre'));
                    \$('#myModal .modal-body').html(\$('#load').html());
                    \$('#myModal').modal('show');
                    \$.ajax({
                        url : \$(this).attr('href'),
                        type : 'GET',
                        dataType : 'html',
                        success : function(code_html, statut){
                                \$('#myModal .modal-body').html(code_html);
                        },
                        error : function(resultat, statut, erreur){
                                \$('#myModal .modal-body').html('Erreur de chargement : '+statut);
                        }



                     });
                });
            \$(\"#dashline li\").not(\":last-child\").removeClass(\"active\");
            \$(\"#dashline li\").last().addClass(\"Active\");
            //\$(\"#chpwd\").slimScroll();
        });
        
        
        
    //rafraichir(); 
        </script>
 
    
    ";
        // line 307
        echo "    <script type=\"text/javascript\"  src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lc/multiselect/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
    <style type=\"text/css\">
\t@import url(\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lc/multiselect/css/multi-select.css"), "html", null, true);
        echo "\");
    </style>
    
    ";
        // line 348
        echo "    ";
        
        $__internal_8cd2b202292ef98ae186495654601b565b6663b40578b0955f0fe497f1684e09->leave($__internal_8cd2b202292ef98ae186495654601b565b6663b40578b0955f0fe497f1684e09_prof);

    }

    public function getTemplateName()
    {
        return "::dash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  653 => 348,  647 => 309,  641 => 307,  555 => 223,  524 => 195,  520 => 194,  516 => 193,  510 => 191,  504 => 190,  497 => 181,  488 => 175,  457 => 147,  446 => 138,  440 => 137,  432 => 130,  426 => 129,  414 => 120,  408 => 119,  398 => 132,  396 => 129,  391 => 126,  389 => 119,  385 => 117,  379 => 116,  371 => 81,  364 => 78,  361 => 77,  355 => 76,  343 => 65,  340 => 64,  337 => 63,  330 => 59,  327 => 58,  321 => 57,  303 => 54,  297 => 53,  282 => 103,  276 => 100,  265 => 92,  259 => 89,  248 => 82,  246 => 76,  232 => 73,  229 => 72,  222 => 66,  220 => 57,  217 => 56,  215 => 53,  209 => 49,  203 => 48,  193 => 45,  187 => 44,  175 => 14,  171 => 13,  166 => 11,  161 => 10,  155 => 9,  143 => 5,  133 => 350,  131 => 190,  123 => 185,  119 => 184,  116 => 183,  114 => 137,  111 => 136,  109 => 116,  100 => 109,  98 => 48,  95 => 47,  93 => 44,  79 => 33,  74 => 31,  69 => 29,  57 => 20,  52 => 19,  50 => 9,  46 => 8,  40 => 5,  34 => 1,);
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
  <link rel=\"icon\" href=\"{{ asset('bundles/FadcoBundle/fadcoplus.jpg') }}\" type=\"image/x-icon\" />
  {% block stylesheet %}
  <link rel=\"stylesheet\" href=\"{{ asset('bundles/FadcoBundle/bootstrap/css/bootstrap.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('bundles/FadcoBundle/font-awesome/css/font-awesome.min.css') }}\">
  <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\"/>
  <link rel=\"stylesheet\" href=\"{{ asset('bundles/FadcoBundle/dist/css/AdminLTE.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('bundles/FadcoBundle/dist/css/skins/skin-blue.min.css') }}\">


  
  {% endblock %}
  <script src=\"{{asset('bundles/FadcoBundle/plugins/jQuery/jQuery-2.1.4.min.js')}}\"></script>
  <script src=\"{{ asset('bundles/FadcoBundle/plugins/select2/select2.full.min.js') }}\"></script>

</head>
<body class=\"hold-transition skin-blue sidebar-mini\">
   <div class=\"wrapper\">
    <header class=\"main-header\">

  
       
    <a href=\"{{path('fadco_home')}}\" class=\"logo\">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class=\"logo-mini\"><img src=\"{{ asset('bundles/FadcoBundle/fadcoplus.jpg') }}\" style=\"width:50px;\" class=\"img-circle\" alt=\"edgar\" /></span>
      <!-- logo for regular state and mobile devices -->
      <span class=\"logo-lg\"><img src=\"{{ asset('bundles/FadcoBundle/fadcoplus.jpg') }}\" style=\"width:70px;\" class=\"img-circle\" alt=\"edgar\" />FADCO+</span>
    </a>

    <!-- Header Navbar -->
    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
    
      <div class=\"navbar-custom-menu\">
        <ul class=\"nav navbar-nav\">
          <!-- Messages: style can be found in dropdown.less-->
            <!-- Notification: style can be found in dropdown.less-->
\t
                {% block notification %}
                        {{ render(controller('FadcoBundle:GestionDesAlertes:notifications')) }}
                {% endblock %}
\t\t 
\t\t{% block userProfil %}
          <li class=\"dropdown user user-menu\">
            <!-- Menu Toggle Button -->
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
              <!-- The user image in the navbar-->
\t\t\t  {% block userImg %}
                              <img src=\" {% if app.user.photo is empty %} {{ asset('bundles/FadcoBundle/images/avatar.png') }} {% else %} {{asset( app.user.WebPhoto )}} {% endif %}\" class=\"user-image\" alt=\"User Image\">
                          {% endblock %}
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class=\"hidden-xs\">{% block user %}
\t\t\t\t  {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
\t\t\t\t\t{{app.user.nom|upper}}  {{app.user.username }}
                {#<a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>#}
            {% else %}
\t\t\t
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}{% endblock%}</span>
            </a>
            <ul class=\"dropdown-menu\">
              <!-- The user image in the menu -->
              <li class=\"user-header\">
\t\t\t\t{#% use  'dash.html.twig' with userImg as userImag2 %#}
\t\t\t\t
                <img src=\"{% if app.user.photo is empty %} {{ asset('bundles/FadcoBundle/images/avatar.png') }} {% else %} {{asset( app.user.WebPhoto )}} {% endif %}\" class=\"img-circle\" alt=\"User Image\">

                <p>
                  {% block userrr %}
\t\t\t\t  {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.nom|upper ~ ' '~app.user.username}, 'FOSUserBundle') }} 
                
\t\t\t\t{% else %}
\t\t\t\t{% endif %}{% endblock%}
            <small>Membre depuis {{ app.user.date|date(\"j/m/Y\") }}</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class=\"user-body\">
                <div class=\"row\">
                  <div class=\"col-xs-5 text-center\">
                    <a href='{{path(\"grh_prestataire_edit\")}}'>Modifier Profile</a>
                  </div>
                    <div class=\"col-xs-5 text-center\">
                        <a href='#' data-url=\"{{path(\"grh_prestataire_modifier_profile\")}}\"  class=\"btn btn-success btn-profile-modifier\">Modifier Profile</a>
                    </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class=\"user-footer\">
                <div class=\"pull-left\">
                  <a href=\"{{ path('grh_prestataire_show',{'id':app.user.id}) }}\" class=\"btn btn-default btn-flat\">Profile</a>
                </div>
                <div class=\"pull-right\">
                  <a href=\"{{ path('fos_user_security_logout') }}\" class=\"btn btn-default btn-flat\">{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}</a>
                </div>
              </li>
            </ul>
          </li>
          {% endblock %}
        </ul>
      </div>
\t
\t</nav>
  </header>


 {% block container %}
  <div class=\"content-wrapper\">
    <section class=\"content-header\">
\t{% block header_content %}
      <h1>
      <center>
         FADCO +
      </center>
      </h1>
\t{% endblock %}
    </section>

    <section class=\"content\">
    {% block content %}
      
    {% endblock %}
    </section>
\t
  </div>
{% endblock %}

{% block footer %}
  <footer class=\"main-footer\">
      <!-- Modal -->
<div class=\"modal fade\" id=\"UserPasswordChange\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"UserPasswordChangeModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"UserPasswordChangeModalLabel\">Change le mot de passe</h4>
      </div>
          <iframe id=\"chpwd\" src=\"{{path('grh_prestataire_change')}}\" target=\"none\" class=\"modal-body\" width=\"100%\" height=\"400\" scrolling=\"auto\" frameborder=\"0\">
              
          </iframe>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
          <!-- modal pour afficher une information -->
<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" data-backdrop=\"static\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
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
                </div><!-- /.modal-content -->
        </div>
        </div>
         <!-- /.modal-div -->
        <span class=\"hide\" id=\"load\"> <center><img  src=\"{{ asset('bundles/FadcoBundle/load.gif') }}\" ></center></span>
    <div class=\"pull-right hidden-xs\">
      Tous droits réservés.
    </div>
    <strong>Copyright &copy; 2017 | Fadco+</strong> 
  </footer>
        {% include '::gspbot.html.twig' %}
{% endblock %}

       {{ include('FadcoBundle:Prestataire:popups.html.twig') }}
       <span style=\"display:none;\" id=\"loading-classement\"> <center><img src=\"{{ asset('bundles/FadcoBundle/load.gif') }}\">
    </center></span>

 </div>

{% block javascript %}
\t <script src=\"{{asset('bundles/FadcoBundle/bootstrap/js/bootstrap.min.js')}}\"></script>
    <!-- AdminLTE App -->
    <script src=\"{{asset('bundles/FadcoBundle/dist/js/app.min.js')}}\"></script>
    <script src=\"{{asset('bundles/FadcoBundle/style/jquery.accordDate.js')}}\"></script>
     <script src=\"{{asset('bundles/FadcoBundle/plugins/moment/moment-with-locales.js')}}\"></script>

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
                        function rafraichir()
                        { 
                            \$.ajax({
                                  url : '{{path('alertes_raflaichir',{ 'id':app.user.Id})}}',
                                  type : 'GET',
                                  dataType : 'html',
                                  success : function(code_html, statut){
                                          \$('.messages-menu').html(code_html);
                                          rafraichir();
                                  },
                                  error : function(resultat, statut, erreur){
                                        rafraichir();
                                  }
                               }); 
                        } 
        moment.locale('fr'); 
        \$('.datenotification').each(function (index, value) { 
             
        var date = moment([parseInt(\$(this).attr('annee')),parseInt(\$(this).attr('mois'))-1, parseInt(\$(this).attr('jour')), parseInt(\$(this).attr('heure')),parseInt(\$(this).attr('minute')), parseInt(\$(this).attr('second')),0]).fromNow();
          \$(this).html('&nbsp;'+date);
        });
        
        
         \$('.alerte-lien').click(function(e){
                    e.preventDefault();

                    \$('#myModal .modal-title').html('NOTIFICATION');
                    \$('#myModal .modal-body').html('<div class=\"row\"> <div class=\"col-md-4\">'+\$(this).find('.alerte-image').html()+'</div><div class=\"col-md-7\"><div><b>'+\$(this).find('.alerte-username').html()+'  </b>'+\$(this).find('.alerte-message').html()+'</div><p></p><b><u style=\"color:#00BFFF\">'+\$(this).find('.alerte-moment').html()+'</u></b></div></div>');
                     \$('#myModal .modal-footer').html('<center><a class=\"btn  btn-primary\" href=\"'+\$(this).attr('href')+'\">Consulter</a></center>');
                    \$('#myModal').modal('show');
                    \$.ajax({
                        url : \$(this).attr('alerte-lu'),
                        type : 'GET',
                        dataType : 'html',
                        success : function(code_html, statut){
                                
                        },
                        error : function(resultat, statut, erreur){
                                
                        }
                      


                     });  
                });   
         
        
    \$('#parentDate').accordDate({
            \"day\":\"[name*=day]\",
            \"month\":\"[name*=month]\",
            \"year\":\"[name*=year]\",
            \"lengthYear\":100
        });
           \$(function(){
                \$('.detail-btn').click(function(e){
                    e.preventDefault();

                    \$('#myModal .modal-title').html(\$(this).attr('titre'));
                    \$('#myModal .modal-body').html(\$('#load').html());
                    \$('#myModal').modal('show');
                    \$.ajax({
                        url : \$(this).attr('href'),
                        type : 'GET',
                        dataType : 'html',
                        success : function(code_html, statut){
                                \$('#myModal .modal-body').html(code_html);
                        },
                        error : function(resultat, statut, erreur){
                                \$('#myModal .modal-body').html('Erreur de chargement : '+statut);
                        }



                     });
                });
            \$(\"#dashline li\").not(\":last-child\").removeClass(\"active\");
            \$(\"#dashline li\").last().addClass(\"Active\");
            //\$(\"#chpwd\").slimScroll();
        });
        
        
        
    //rafraichir(); 
        </script>
 
    
    {# websocket client #}
    <script type=\"text/javascript\"  src=\"{{ asset('bundles/lc/multiselect/js/jquery.multi-select.js') }}\"></script>
    <style type=\"text/css\">
\t@import url(\"{{ asset('bundles/lc/multiselect/css/multi-select.css') }}\");
    </style>
    
    {#{ ws_client() }
    <script type=\"text/javascript\"  src=\"{{ asset('bundles/goswebsocket/js/vendor/autobahn.min.js') }}\"></script>
    <script type=\"text/javascript\"  src=\"{{ asset('bundles/goswebsocket/js/gos_web_socket_client.js') }}\"></script>
    
    <script type=\"text/javascript\">
        var _WS_URI = \"ws://{{ gos_web_socket_server_host }}:{{ gos_web_socket_server_port }}\";
        var myWs = WS.connect(_WS_URI);
        var nmiPath = '{{path('lc_creer_nouveau_message_image')}}';
        var nmfPath = '{{path('lc_creer_nouveau_message_fichier')}}';
        var nmicPath = '{{path('lc_creer_nouveau_message_image_contact')}}';
        var nmfcPath = '{{path('lc_creer_nouveau_message_fichier_contact')}}';
        var baseP = '{{ app.request.basePath }}';
        var userId = {{app.user.id}};
        var lienChat = '{{path('gsp_lc_homepage')}}';
        //var chat
        var pathnm = '{{path('lc_users_vefification_nouveaux_messages')}}';
        var newMsg = '{{path('lc_users_nouveaux_messages')}}';
        var newMsgD = '{{path('lc_users_nouveaux_messages_discussion')}}';
        var newMsgC = '{{path('lc_users_nouveaux_messages_contact')}}';
        var loadingGif = '{{ asset('bundles/lc/images/loading.gif') }}';
        var emPath = '{{path('lc_creer_nouveau_message')}}';
        var mlPath = '{{path('lc_marquer_lu')}}';
        var mlcPath = '{{path('lc_marquer_lu_contact')}}';
        var userPath = '{{path('lc_users')}}';
        var discPath = '{{path('lc_user_discussions')}}';
        var ndPath = '{{path('lc_creer_nouvelle_discussion')}}';
        var acdPath = '{{path('lc_ajouter_contact_discussion')}}';
        var uacPath = '{{path('lc_users_ajout_contact')}}';
        var gdmPath = '{{path('lc_discussion_messages')}}';
        var gdmcPath = '{{path('lc_discussion_messages_contact')}}';
        var emcPath = '{{path('lc_creer_nouveau_message_contact')}}';
        var gsplchome= '{{path('gsp_lc_homepage')}}';
        var lcregisterPath = '{{path('lc_register')}}';
        var lcgcuPath = '{{path('lc_gcu')}}';
        
    </script>#}
    {#<script type=\"text/javascript\" src=\"{{ asset('bundles/lc/js/ws_lc.js')}}\" ></script>#}
{% endblock %}

</body>
</html>
", "::dash.html.twig", "/var/www/html/fadcoplus/app/Resources/views/dash.html.twig");
    }
}
