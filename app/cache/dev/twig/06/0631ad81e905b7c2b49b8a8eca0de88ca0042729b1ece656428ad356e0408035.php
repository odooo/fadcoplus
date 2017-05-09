<?php

/* FadcoBundle:Default:dashbord.html.twig */
class __TwigTemplate_b3ba78eb79d5b98df9bce3836daa9b8430335cbf849c36638a618465db17fb70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::dash.html.twig", "FadcoBundle:Default:dashbord.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::dash.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e3600c9941a09709fec79fb6baafa9b71b315df5ab4f10ad2450c2787e58911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e3600c9941a09709fec79fb6baafa9b71b315df5ab4f10ad2450c2787e58911->enter($__internal_2e3600c9941a09709fec79fb6baafa9b71b315df5ab4f10ad2450c2787e58911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Default:dashbord.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e3600c9941a09709fec79fb6baafa9b71b315df5ab4f10ad2450c2787e58911->leave($__internal_2e3600c9941a09709fec79fb6baafa9b71b315df5ab4f10ad2450c2787e58911_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_2d94745ccd013e14ef2011edf59494804aa419766f27517e77404c2c0768fa71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d94745ccd013e14ef2011edf59494804aa419766f27517e77404c2c0768fa71->enter($__internal_2d94745ccd013e14ef2011edf59494804aa419766f27517e77404c2c0768fa71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .dashboard {
            margin: 10px;
        }

        .dashboard:after {
            display: table;
            content: \"\";
            clear: both;
        }

        .dashboard .small-box {
            position: relative;
            float: left;
            margin: 10px;
            width: 180px;
            height: 120px;
        }

        .dashboard .small-box .count {
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 1.3em;
        }

        .dashboard .small-box .title {
            position: relative;
            display: inline-block;
            width: 100%;
            line-height: 1.5;
            vertical-align: middle;
            text-align: center;
            font-weight: 400;
            font-size: 1.2em;
        }

        .dashboard .small-box a {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;         
        }        
    </style>
";
        
        $__internal_2d94745ccd013e14ef2011edf59494804aa419766f27517e77404c2c0768fa71->leave($__internal_2d94745ccd013e14ef2011edf59494804aa419766f27517e77404c2c0768fa71_prof);

    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
        $__internal_954044ab664d4fa619cce69fdf8f9234f9fc5028c51a7a7cac217564fa31aaf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_954044ab664d4fa619cce69fdf8f9234f9fc5028c51a7a7cac217564fa31aaf2->enter($__internal_954044ab664d4fa619cce69fdf8f9234f9fc5028c51a7a7cac217564fa31aaf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 52
        echo "
    ";
        // line 54
        $context["dashboardMenus"] = array(0 => array("title" => "Gestion des distributeurs et des comptes", "icon" => "ion-stats-bars", "route" => "grh_prestataire", "color" => "bg-green"));
        // line 58
        echo "

    <div class=\"dashboard\">
        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dashboardMenus"] ?? $this->getContext($context, "dashboardMenus")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 62
            echo "
            ";
            // line 63
            if ((($this->getAttribute($context["menu"], "roles", array(), "any", true, true) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($context["menu"], "roles", array()))) ||  !$this->getAttribute($context["menu"], "roles", array(), "any", true, true))) {
                // line 64
                echo "                <div class=\"small-box ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "color", array()), "html", null, true);
                echo "\">
                    <div class=\"inner\">
                        <span class=\"count\">";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</span>
                        <h2 class=\"title\">";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "title", array()), "html", null, true);
                echo "</h2>
                    </div>
                    <div class=\"icon\">
                        <i class=\"ion ";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "icon", array()), "html", null, true);
                echo "\"></i>
                    </div>
                    <a ";
                // line 72
                if ($this->getAttribute($context["menu"], "target", array(), "any", true, true)) {
                    echo " target=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "target", array()), "html", null, true);
                    echo "\"";
                }
                echo " href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($context["menu"], "route", array()));
                echo "\" data-route=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "route", array()), "html", null, true);
                echo "\" 
                       class=\"small-box-footer getAuth\">
                        Cliquer ici <i class=\"fa fa-arrow-circle-right\"></i>
                    </a>
                </div>
            ";
            }
            // line 78
            echo "            
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "    </div>

";
        
        $__internal_954044ab664d4fa619cce69fdf8f9234f9fc5028c51a7a7cac217564fa31aaf2->leave($__internal_954044ab664d4fa619cce69fdf8f9234f9fc5028c51a7a7cac217564fa31aaf2_prof);

    }

    // line 83
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_540c49a5c74817a22b15d10d27acf2ed6dc8507e8e16d0817f8d9c6d0d20fdce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_540c49a5c74817a22b15d10d27acf2ed6dc8507e8e16d0817f8d9c6d0d20fdce->enter($__internal_540c49a5c74817a22b15d10d27acf2ed6dc8507e8e16d0817f8d9c6d0d20fdce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 84
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    ";
        // line 85
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5e1858b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5e1858b_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/5e1858b_mails-box_1.js");
            // line 86
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "5e1858b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5e1858b") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/5e1858b.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_540c49a5c74817a22b15d10d27acf2ed6dc8507e8e16d0817f8d9c6d0d20fdce->leave($__internal_540c49a5c74817a22b15d10d27acf2ed6dc8507e8e16d0817f8d9c6d0d20fdce_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Default:dashbord.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 86,  207 => 85,  202 => 84,  196 => 83,  187 => 80,  172 => 78,  155 => 72,  150 => 70,  144 => 67,  140 => 66,  134 => 64,  132 => 63,  129 => 62,  112 => 61,  107 => 58,  105 => 54,  102 => 52,  96 => 51,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::dash.html.twig\" %}

{% block stylesheet %}
    {{ parent() }}
    <style type=\"text/css\">
        .dashboard {
            margin: 10px;
        }

        .dashboard:after {
            display: table;
            content: \"\";
            clear: both;
        }

        .dashboard .small-box {
            position: relative;
            float: left;
            margin: 10px;
            width: 180px;
            height: 120px;
        }

        .dashboard .small-box .count {
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 1.3em;
        }

        .dashboard .small-box .title {
            position: relative;
            display: inline-block;
            width: 100%;
            line-height: 1.5;
            vertical-align: middle;
            text-align: center;
            font-weight: 400;
            font-size: 1.2em;
        }

        .dashboard .small-box a {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;         
        }        
    </style>
{% endblock %}

{% block content %}

    {% 
        set dashboardMenus = [
            {title: 'Gestion des distributeurs et des comptes', icon: 'ion-stats-bars', route: 'grh_prestataire', color: 'bg-green'},
    ]
    %}


    <div class=\"dashboard\">
        {% for menu in dashboardMenus %}

            {% if (menu.roles is defined and is_granted(menu.roles)) or menu.roles is not defined %}
                <div class=\"small-box {{ menu.color }}\">
                    <div class=\"inner\">
                        <span class=\"count\">{{ loop.index }}</span>
                        <h2 class=\"title\">{{ menu.title }}</h2>
                    </div>
                    <div class=\"icon\">
                        <i class=\"ion {{ menu.icon }}\"></i>
                    </div>
                    <a {% if menu.target is defined %} target=\"{{menu.target}}\"{% endif %} href=\"{{ path(menu.route) }}\" data-route=\"{{ menu.route }}\" 
                       class=\"small-box-footer getAuth\">
                        Cliquer ici <i class=\"fa fa-arrow-circle-right\"></i>
                    </a>
                </div>
            {% endif %}
            
        {% endfor %}
    </div>

{% endblock %}
{% block javascript %}
    {{ parent() }}
    {% javascripts '@FadcoBundle/Resources/public/js/mails/mails-box.js' %}
        <script src=\"{{ asset_url }}\"></script>
    {% endjavascripts %}
{% endblock %}
        
        
", "FadcoBundle:Default:dashbord.html.twig", "/var/www/html/fadcoplus/src/FadcoBundle/Resources/views/Default/dashbord.html.twig");
    }
}
