<?php

/* FadcoBundle:Default:menu.html.twig */
class __TwigTemplate_c19e1f5baedd89b5985ca0cc6edce10bd08cff38ce496d6584ea037e1dbef2e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::template.html.twig", "FadcoBundle:Default:menu.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f5fb4861ddddefadc715c152aba2d242afce0fe9356e3d64bc0f69b334cc46a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f5fb4861ddddefadc715c152aba2d242afce0fe9356e3d64bc0f69b334cc46a->enter($__internal_5f5fb4861ddddefadc715c152aba2d242afce0fe9356e3d64bc0f69b334cc46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Default:menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f5fb4861ddddefadc715c152aba2d242afce0fe9356e3d64bc0f69b334cc46a->leave($__internal_5f5fb4861ddddefadc715c152aba2d242afce0fe9356e3d64bc0f69b334cc46a_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_318a469271117bdb7bb7c3124009a3e430663ad2345a3fa2c1daf991ca785c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_318a469271117bdb7bb7c3124009a3e430663ad2345a3fa2c1daf991ca785c0a->enter($__internal_318a469271117bdb7bb7c3124009a3e430663ad2345a3fa2c1daf991ca785c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        echo " 
    ";
        // line 4
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/select2/select2.min.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_318a469271117bdb7bb7c3124009a3e430663ad2345a3fa2c1daf991ca785c0a->leave($__internal_318a469271117bdb7bb7c3124009a3e430663ad2345a3fa2c1daf991ca785c0a_prof);

    }

    // line 8
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_b69490a140e7addd7c45c9a13072be03ecc02552080e06b7f0bc67158a6f6571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b69490a140e7addd7c45c9a13072be03ecc02552080e06b7f0bc67158a6f6571->enter($__internal_b69490a140e7addd7c45c9a13072be03ecc02552080e06b7f0bc67158a6f6571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 9
        echo "    <ul class=\"sidebar-menu\">
        <li class=\"header\">GESTION DES RH</li>
        <li class=\"treeview\">
            <a href=\"#\"><i class=\"fa fa-user\"></i> <span>PRESTATAIRES</span> <i
                        class=\"fa fa-angle-left pull-right\"></i></a>
            <ul class=\"treeview-menu\">
                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire");
        echo "\">Liste</a></li>

                <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_new", array("id" => null));
        echo "\">Ajouter</a></li>

                ";
        // line 19
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 20
            echo "
                    <li><a href=\"";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rigth");
            echo "\">Droits</a></li>

                ";
        }
        // line 24
        echo "
            </ul>
        </li>

        ";
        // line 28
        if (twig_in_filter("indicateur-performance", $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "uri", array()))) {
            // line 29
            echo "            ";
            $this->loadTemplate("FadcoBundle:IndicateurPerformance:menu.html.twig", "FadcoBundle:Default:menu.html.twig", 29)->display($context);
            // line 30
            echo "        ";
        }
        // line 31
        echo "    </ul>
";
        
        $__internal_b69490a140e7addd7c45c9a13072be03ecc02552080e06b7f0bc67158a6f6571->leave($__internal_b69490a140e7addd7c45c9a13072be03ecc02552080e06b7f0bc67158a6f6571_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 31,  102 => 30,  99 => 29,  97 => 28,  91 => 24,  85 => 21,  82 => 20,  80 => 19,  75 => 17,  70 => 15,  62 => 9,  56 => 8,  47 => 5,  43 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::template.html.twig\" %}

{% block stylesheet %} 
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/FadcoBundle/plugins/select2/select2.min.css') }}\"/>
{% endblock %}
{# Le block à gauche #}
{% block sidebar %}
    <ul class=\"sidebar-menu\">
        <li class=\"header\">GESTION DES RH</li>
        <li class=\"treeview\">
            <a href=\"#\"><i class=\"fa fa-user\"></i> <span>PRESTATAIRES</span> <i
                        class=\"fa fa-angle-left pull-right\"></i></a>
            <ul class=\"treeview-menu\">
                <li><a href=\"{{ path('grh_prestataire') }}\">Liste</a></li>

                <li><a href=\"{{ path('grh_prestataire_new',{ 'id': null }) }}\">Ajouter</a></li>

                {% if is_granted(\"ROLE_SUPER_ADMIN\") %}

                    <li><a href=\"{{ path('rigth') }}\">Droits</a></li>

                {% endif %}

            </ul>
        </li>

        {% if 'indicateur-performance' in app.request.uri %}
            {% include 'FadcoBundle:IndicateurPerformance:menu.html.twig' %}
        {% endif %}
    </ul>
{% endblock %}
", "FadcoBundle:Default:menu.html.twig", "/var/www/html/fadcoplus/src/FadcoBundle/Resources/views/Default/menu.html.twig");
    }
}
