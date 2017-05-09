<?php

/* FadcoBundle:Default:dashbord.html.twig */
class __TwigTemplate_33f0ca3c245f9ddc6025af3c0c2fb4546cdf19b36c0c3063e0d8e66460f84209 extends Twig_Template
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
        $__internal_6bce640a0b2604ac44efed6f7e06a0fc475122b1e634a8ea90fc215c0ed8748b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bce640a0b2604ac44efed6f7e06a0fc475122b1e634a8ea90fc215c0ed8748b->enter($__internal_6bce640a0b2604ac44efed6f7e06a0fc475122b1e634a8ea90fc215c0ed8748b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Default:dashbord.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bce640a0b2604ac44efed6f7e06a0fc475122b1e634a8ea90fc215c0ed8748b->leave($__internal_6bce640a0b2604ac44efed6f7e06a0fc475122b1e634a8ea90fc215c0ed8748b_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_c9fb2fce39df04f146e690a5c0795ec26dd1cc2d966d445edb790ba9bd9796e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9fb2fce39df04f146e690a5c0795ec26dd1cc2d966d445edb790ba9bd9796e4->enter($__internal_c9fb2fce39df04f146e690a5c0795ec26dd1cc2d966d445edb790ba9bd9796e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_c9fb2fce39df04f146e690a5c0795ec26dd1cc2d966d445edb790ba9bd9796e4->leave($__internal_c9fb2fce39df04f146e690a5c0795ec26dd1cc2d966d445edb790ba9bd9796e4_prof);

    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
        $__internal_60a81f71e1444ec4e2bea0493a7c2ed6b76c6a13cc17c43c20ca8aec57b63098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60a81f71e1444ec4e2bea0493a7c2ed6b76c6a13cc17c43c20ca8aec57b63098->enter($__internal_60a81f71e1444ec4e2bea0493a7c2ed6b76c6a13cc17c43c20ca8aec57b63098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 52
        echo "
    ";
        // line 54
        $context["dashboardMenus"] = array(0 => array("title" => "Indicateurs de performances", "icon" => "ion-stats-bars", "route" => "fadco_indicateur_performance", "color" => "bg-green"));
        // line 58
        echo "

    <div class=\"dashboard\">
        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dashboardMenus"]) ? $context["dashboardMenus"] : $this->getContext($context, "dashboardMenus")));
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
        
        $__internal_60a81f71e1444ec4e2bea0493a7c2ed6b76c6a13cc17c43c20ca8aec57b63098->leave($__internal_60a81f71e1444ec4e2bea0493a7c2ed6b76c6a13cc17c43c20ca8aec57b63098_prof);

    }

    // line 83
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_accd9d071c726b27ee1c3ce2c3d90995bcd514122c40e8667b40b84445a0501c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_accd9d071c726b27ee1c3ce2c3d90995bcd514122c40e8667b40b84445a0501c->enter($__internal_accd9d071c726b27ee1c3ce2c3d90995bcd514122c40e8667b40b84445a0501c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "5e1858b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5e1858b") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/5e1858b.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_accd9d071c726b27ee1c3ce2c3d90995bcd514122c40e8667b40b84445a0501c->leave($__internal_accd9d071c726b27ee1c3ce2c3d90995bcd514122c40e8667b40b84445a0501c_prof);

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
            {title: 'Indicateurs de performances', icon: 'ion-stats-bars', route: 'fadco_indicateur_performance', color: 'bg-green'},
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
        
        
", "FadcoBundle:Default:dashbord.html.twig", "C:\\xampp\\htdocs\\fadco\\src\\FadcoBundle/Resources/views/Default/dashbord.html.twig");
    }
}
