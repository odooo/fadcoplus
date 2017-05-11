<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_4f266dd0bf43d5d1909869fc4459607fef40b5c9ae59d7d591ccfa6ae1c8c2f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e20f8f3de62740aa0ff0b936ecc1c533437a13c444b53bd54954a507c43dde80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e20f8f3de62740aa0ff0b936ecc1c533437a13c444b53bd54954a507c43dde80->enter($__internal_e20f8f3de62740aa0ff0b936ecc1c533437a13c444b53bd54954a507c43dde80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e20f8f3de62740aa0ff0b936ecc1c533437a13c444b53bd54954a507c43dde80->leave($__internal_e20f8f3de62740aa0ff0b936ecc1c533437a13c444b53bd54954a507c43dde80_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f12073c1c9a02e42b5719e1201112726b16f3fdad85f02c2685d539edd608b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f12073c1c9a02e42b5719e1201112726b16f3fdad85f02c2685d539edd608b8c->enter($__internal_f12073c1c9a02e42b5719e1201112726b16f3fdad85f02c2685d539edd608b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "
    <body class=\"hold-transition login-page\">
        <div class=\"login-box\">
            <div class=\"login-logo\">
                <a href=";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "><b>FADCO+</b></a>
            </div><!-- /.login-logo -->
            <div class=\"login-box-body\">
                <center><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/fadcoplus.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\"  class=\"img-circle\" width=\"150\" height=\"150\"/> </center>
                <p class=\"login-box-msg\"><br/>CONNEXION</p>

                <form action=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">

                    ";
        // line 18
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 19
            echo "                        <div class=\"alert alert-danger\">  
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">Fermer</button>
                            <div>";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                        </div>
                    ";
        }
        // line 24
        echo "
                    <div class=\"form-group has-feedback\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                        <input type=\"text\" class=\"form-control\" placeholder=\"Identifiant\" name=\"_username\" required=\"required\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>

                    <div class=\"form-group has-feedback\">
                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"Mot de Passe \" />
                        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-8\">
                            <div class=\"checkbox icheck\">
                                <label>
                                    <input type=\"checkbox\" value=\"on\">
                                    Se Souvenir de Moi
                                </label>
                            </div>
                        </div><!-- /.col -->
                        <div class=\"col-xs-4\">

                            <input type=\"submit\" id=\"_submit\" class=\"btn btn-primary btn-block btn-flat\" name=\"_submit\" value=\"Connecter\" />
                        </div><!-- /.col -->
                    </div>
                </form>

                <div class=\"social-auth-links text-center\">
                    <p>- FADCO+ -</p>
                    ";
        // line 56
        echo "                </div><!-- /.social-auth-links -->
\t\t\t\t
\t\t\t

            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <!-- jQuery 2.1.4 -->
        <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/FadcoBundle/plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/FadcoBundle/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- iCheck -->
        <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/FadcoBundle/plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$(function () {
                \$('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>

";
        
        $__internal_f12073c1c9a02e42b5719e1201112726b16f3fdad85f02c2685d539edd608b8c->leave($__internal_f12073c1c9a02e42b5719e1201112726b16f3fdad85f02c2685d539edd608b8c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 68,  125 => 66,  120 => 64,  110 => 56,  79 => 26,  75 => 24,  69 => 21,  65 => 19,  63 => 18,  58 => 16,  52 => 13,  46 => 10,  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}

    <body class=\"hold-transition login-page\">
        <div class=\"login-box\">
            <div class=\"login-logo\">
                <a href={{ path(\"fos_user_security_login\") }}><b>FADCO+</b></a>
            </div><!-- /.login-logo -->
            <div class=\"login-box-body\">
                <center><img src=\"{{ asset('bundles/FadcoBundle/fadcoplus.jpg')}}\" alt=\"Avatar\"  class=\"img-circle\" width=\"150\" height=\"150\"/> </center>
                <p class=\"login-box-msg\"><br/>CONNEXION</p>

                <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">

                    {% if error %}
                        <div class=\"alert alert-danger\">  
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">Fermer</button>
                            <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                        </div>
                    {% endif %}

                    <div class=\"form-group has-feedback\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                        <input type=\"text\" class=\"form-control\" placeholder=\"Identifiant\" name=\"_username\" required=\"required\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>

                    <div class=\"form-group has-feedback\">
                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"Mot de Passe \" />
                        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-8\">
                            <div class=\"checkbox icheck\">
                                <label>
                                    <input type=\"checkbox\" value=\"on\">
                                    Se Souvenir de Moi
                                </label>
                            </div>
                        </div><!-- /.col -->
                        <div class=\"col-xs-4\">

                            <input type=\"submit\" id=\"_submit\" class=\"btn btn-primary btn-block btn-flat\" name=\"_submit\" value=\"Connecter\" />
                        </div><!-- /.col -->
                    </div>
                </form>

                <div class=\"social-auth-links text-center\">
                    <p>- FADCO+ -</p>
                    {#<a href=\"#\" class=\"btn btn-block btn-social btn-facebook btn-flat\"> Fondation Global Services Plus </a>
                    <a href=\"#\" class=\"btn btn-block btn-social btn-google btn-flat\"> Centre Jesus Pour reussir</a>#}
                </div><!-- /.social-auth-links -->
\t\t\t\t
\t\t\t

            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <!-- jQuery 2.1.4 -->
        <script src=\"{{asset('/bundles/FadcoBundle/plugins/jQuery/jQuery-2.1.4.min.js')}}\"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src=\"{{asset('/bundles/FadcoBundle/bootstrap/js/bootstrap.min.js')}}\"></script>
        <!-- iCheck -->
        <script src=\"{{asset('/bundles/FadcoBundle/plugins/iCheck/icheck.min.js')}}\"></script>
        <script>
            \$(function () {
                \$('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>

{% endblock fos_user_content %}", "@FOSUser/Security/login.html.twig", "/var/www/html/fadcoplus/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
