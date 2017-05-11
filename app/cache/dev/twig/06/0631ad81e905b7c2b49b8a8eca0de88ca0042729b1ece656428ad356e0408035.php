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
        $__internal_0c65a8b1954b60f7e52dd805fca7bdb54c02848b7d379a927a702dbcaf2f6f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c65a8b1954b60f7e52dd805fca7bdb54c02848b7d379a927a702dbcaf2f6f61->enter($__internal_0c65a8b1954b60f7e52dd805fca7bdb54c02848b7d379a927a702dbcaf2f6f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Default:dashbord.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c65a8b1954b60f7e52dd805fca7bdb54c02848b7d379a927a702dbcaf2f6f61->leave($__internal_0c65a8b1954b60f7e52dd805fca7bdb54c02848b7d379a927a702dbcaf2f6f61_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_6224e8eb7ae6c596f658e4c7884ef2993d0ca0fa633712e6a835deafaafd3574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6224e8eb7ae6c596f658e4c7884ef2993d0ca0fa633712e6a835deafaafd3574->enter($__internal_6224e8eb7ae6c596f658e4c7884ef2993d0ca0fa633712e6a835deafaafd3574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_6224e8eb7ae6c596f658e4c7884ef2993d0ca0fa633712e6a835deafaafd3574->leave($__internal_6224e8eb7ae6c596f658e4c7884ef2993d0ca0fa633712e6a835deafaafd3574_prof);

    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
        $__internal_e7ea19a35e829b2835d49ee7e315bc2a79613234993960cd8fae132061d57488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ea19a35e829b2835d49ee7e315bc2a79613234993960cd8fae132061d57488->enter($__internal_e7ea19a35e829b2835d49ee7e315bc2a79613234993960cd8fae132061d57488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 52
        echo "
    ";
        // line 54
        $context["dashboardMenus"] = array(0 => array("title" => "Gestion des distributeurs et des comptes", "icon" => "ion-stats-bars", "route" => "grh_prestataire", "color" => "bg-green"), 1 => array("title" => "Réabonnement direct", "icon" => "ion-stats-bars", "route" => "fadco_espace_distributeur_reabo", "roles" => array(0 => "ROLE_DISTRIBUTEUR"), "color" => "bg-green"), 2 => array("title" => "Installation et réparation des Antennes", "icon" => "ion-stats-bars", "route" => "fadco_espace_distributeur_repair", "roles" => array(0 => "ROLE_DISTRIBUTEUR"), "color" => "bg-yellow"), 3 => array("title" => "Espace admin", "icon" => "ion-stats-bars", "route" => "fadco_espace_distributeur_repair", "roles" => array(0 => "ROLE_ADMIN"), "color" => "bg-blue"));
        // line 61
        echo "    <div class=\"dashboard\">
        ";
        // line 62
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
            // line 63
            echo "
            ";
            // line 64
            if ((($this->getAttribute($context["menu"], "roles", array(), "any", true, true) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($context["menu"], "roles", array()))) ||  !$this->getAttribute($context["menu"], "roles", array(), "any", true, true))) {
                // line 65
                echo "                <div class=\"small-box ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "color", array()), "html", null, true);
                echo "\">
                    <div class=\"inner\">
                        <span class=\"count\">";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</span>
                        <h2 class=\"title\">";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "title", array()), "html", null, true);
                echo "</h2>
                    </div>
                    <div class=\"icon\">
                        <i class=\"ion ";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "icon", array()), "html", null, true);
                echo "\"></i>
                    </div>
                    <a ";
                // line 73
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
            // line 79
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
        // line 81
        echo "    </div>

";
        
        $__internal_e7ea19a35e829b2835d49ee7e315bc2a79613234993960cd8fae132061d57488->leave($__internal_e7ea19a35e829b2835d49ee7e315bc2a79613234993960cd8fae132061d57488_prof);

    }

    // line 84
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_169fe55c4808d42ebd8f8fda2a889850b40c74f03e1d2f1fd81cf75441347124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_169fe55c4808d42ebd8f8fda2a889850b40c74f03e1d2f1fd81cf75441347124->enter($__internal_169fe55c4808d42ebd8f8fda2a889850b40c74f03e1d2f1fd81cf75441347124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 85
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    ";
        // line 86
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5e1858b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5e1858b_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/5e1858b_mails-box_1.js");
            // line 87
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
        
        $__internal_169fe55c4808d42ebd8f8fda2a889850b40c74f03e1d2f1fd81cf75441347124->leave($__internal_169fe55c4808d42ebd8f8fda2a889850b40c74f03e1d2f1fd81cf75441347124_prof);

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
        return array (  209 => 87,  205 => 86,  200 => 85,  194 => 84,  185 => 81,  170 => 79,  153 => 73,  148 => 71,  142 => 68,  138 => 67,  132 => 65,  130 => 64,  127 => 63,  110 => 62,  107 => 61,  105 => 54,  102 => 52,  96 => 51,  42 => 4,  36 => 3,  11 => 1,);
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
            {title: 'Réabonnement direct', icon: 'ion-stats-bars', route: 'fadco_espace_distributeur_reabo', roles: ['ROLE_DISTRIBUTEUR'], color: 'bg-green'},
            {title: 'Installation et réparation des Antennes', icon: 'ion-stats-bars', route: 'fadco_espace_distributeur_repair', roles: ['ROLE_DISTRIBUTEUR'], color: 'bg-yellow'},
            {title: 'Espace admin', icon: 'ion-stats-bars', route: 'fadco_espace_distributeur_repair', roles: ['ROLE_ADMIN'], color: 'bg-blue'},
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
