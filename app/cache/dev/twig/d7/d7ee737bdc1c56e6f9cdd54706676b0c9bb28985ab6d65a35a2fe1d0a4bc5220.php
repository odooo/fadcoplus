<?php

/* FadcoBundle:Prestataire:show.html.twig */
class __TwigTemplate_efc0722bd6c6ccd657464349e098c20738db0bd5999600c6468ec4f3ae9c8d51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FadcoBundle:Default:menu.html.twig", "FadcoBundle:Prestataire:show.html.twig", 1);
        $this->blocks = array(
            'page_quick_actions' => array($this, 'block_page_quick_actions'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FadcoBundle:Default:menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_369700bdbb0781ee30bc91b97a0c26bd2a9ba06285f2f72685a9c8b52919a8f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_369700bdbb0781ee30bc91b97a0c26bd2a9ba06285f2f72685a9c8b52919a8f1->enter($__internal_369700bdbb0781ee30bc91b97a0c26bd2a9ba06285f2f72685a9c8b52919a8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Prestataire:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_369700bdbb0781ee30bc91b97a0c26bd2a9ba06285f2f72685a9c8b52919a8f1->leave($__internal_369700bdbb0781ee30bc91b97a0c26bd2a9ba06285f2f72685a9c8b52919a8f1_prof);

    }

    // line 2
    public function block_page_quick_actions($context, array $blocks = array())
    {
        $__internal_4d125f02461ae84af2af738a243b773eb1a2046844b3483377fde018cb7e19e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d125f02461ae84af2af738a243b773eb1a2046844b3483377fde018cb7e19e8->enter($__internal_4d125f02461ae84af2af738a243b773eb1a2046844b3483377fde018cb7e19e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_quick_actions"));

        // line 3
        echo "    <div>
        <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire");
        echo "\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour\"/></a>
        <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_new", array("id" => null));
        echo "\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Ajouter un nouveau distributeur\"/></a>
        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_new", array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Modifier\"/></a>
    </div>
";
        
        $__internal_4d125f02461ae84af2af738a243b773eb1a2046844b3483377fde018cb7e19e8->leave($__internal_4d125f02461ae84af2af738a243b773eb1a2046844b3483377fde018cb7e19e8_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_c0e052369fca6baa7fbf1ea20d504ef758f256f4356bb45570c033296fbd8689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0e052369fca6baa7fbf1ea20d504ef758f256f4356bb45570c033296fbd8689->enter($__internal_c0e052369fca6baa7fbf1ea20d504ef758f256f4356bb45570c033296fbd8689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    <section class=\"content\">
        <div class=\"box box-default\">
            <div class=\"box-header with-border\">
                <h1 class=\"box-title\">Details des informations du distributeur </h1>

                <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\">
                        <i class=\"fa fa-minus\"></i>
                    </button>
                </div>
            </div>
            <div class=\"box-body\">
                <div class=\"table-responsive mailbox-messages\">
                  <div align='center'><img src=\"";
        // line 24
        if ( !(null === $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "photo", array()))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_rewrite_url", $this->env->getExtension('FadcoBundle\Services\Datasecure')->crypter($this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "WebPhoto", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/images/avatar.png"), "html", null, true);
        }
        echo "\" class=\"img-circle\" style='width:150px;height:150px;' alt=\"User Image\"></div>
                        <table class=\"table table-bordered table-striped\">
                            <tbody>
                                <tr>
                                    <th>N°</th>
                                    <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
                                </tr>
                                
                                <tr>
                                    <th>Nom</th>
                                    <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Prenom</th>
                                    <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "prenom", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Ville</th>
                                    <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "ville", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Contact</th>
                                    <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "contact", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Rôles</th>
                                    <td>";
        // line 54
        if ( !(null === $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "roles", array()))) {
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "roles", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo " ";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo " - ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " ";
        }
        echo " </td>
                                </tr>
                                <tr>
                                    <th>Dernière connexion</th>
                                    <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "lastLogin", array()), "Y-m-d H:s:i"), "html", null, true);
        echo "</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
                <div class=\"row\" style=\"margin: auto;\">
                    <a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire");
        echo "\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour\"/></a>
                    <a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_new", array("id" => null));
        echo "\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Ajouter un nouveau distributeur\"/></a>
                    <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_new", array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Modifier\"/></a>
                </div>
        </div>
    </section>

    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/GSPBundle/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_c0e052369fca6baa7fbf1ea20d504ef758f256f4356bb45570c033296fbd8689->leave($__internal_c0e052369fca6baa7fbf1ea20d504ef758f256f4356bb45570c033296fbd8689_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Prestataire:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 71,  199 => 66,  195 => 65,  191 => 64,  182 => 58,  138 => 54,  131 => 50,  124 => 46,  117 => 42,  110 => 38,  103 => 34,  95 => 29,  83 => 24,  68 => 11,  62 => 10,  52 => 6,  48 => 5,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FadcoBundle:Default:menu.html.twig\" %}
{% block page_quick_actions %}
    <div>
        <a href=\"{{ path('grh_prestataire') }}\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour\"/></a>
        <a href=\"{{ path('grh_prestataire_new', {'id': null}) }}\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Ajouter un nouveau distributeur\"/></a>
        <a href=\"{{ path('grh_prestataire_new', {'id': entity.id }) }}\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Modifier\"/></a>
    </div>
{% endblock %}

{% block content %}
    <section class=\"content\">
        <div class=\"box box-default\">
            <div class=\"box-header with-border\">
                <h1 class=\"box-title\">Details des informations du distributeur </h1>

                <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\">
                        <i class=\"fa fa-minus\"></i>
                    </button>
                </div>
            </div>
            <div class=\"box-body\">
                <div class=\"table-responsive mailbox-messages\">
                  <div align='center'><img src=\"{%if entity.photo is not null %}{{ path(\"global_rewrite_url\",cryptSrc(entity.WebPhoto)) }}{% else %}{{ asset('bundles/FadcoBundle/images/avatar.png') }}{% endif %}\" class=\"img-circle\" style='width:150px;height:150px;' alt=\"User Image\"></div>
                        <table class=\"table table-bordered table-striped\">
                            <tbody>
                                <tr>
                                    <th>N°</th>
                                    <td>{{ entity.id }}</td>
                                </tr>
                                
                                <tr>
                                    <th>Nom</th>
                                    <td>{{ entity.nom }}</td>
                                </tr>
                                <tr>
                                    <th>Prenom</th>
                                    <td>{{ entity.prenom }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ entity.email }}</td>
                                </tr>
                                <tr>
                                    <th>Ville</th>
                                    <td>{{ entity.ville }}</td>
                                </tr>
                                <tr>
                                    <th>Contact</th>
                                    <td>{{ entity.contact }}</td>
                                </tr>
                                <tr>
                                    <th>Rôles</th>
                                    <td>{% if entity.roles is not null %} {% for role in entity.roles %} {{ role }} {% if not loop.last %} - {% endif %}{% endfor %} {% endif %} </td>
                                </tr>
                                <tr>
                                    <th>Dernière connexion</th>
                                    <td>{{ entity.lastLogin|date('Y-m-d H:s:i') }}</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
                <div class=\"row\" style=\"margin: auto;\">
                    <a href=\"{{ path('grh_prestataire') }}\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour\"/></a>
                    <a href=\"{{ path('grh_prestataire_new', {'id': null }) }}\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Ajouter un nouveau distributeur\"/></a>
                    <a href=\"{{ path('grh_prestataire_new', {'id': entity.id }) }}\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Modifier\"/></a>
                </div>
        </div>
    </section>

    <script src=\"{{ asset('bundles/GSPBundle/plugins/datatables/jquery.dataTables.min.js') }}\"></script>

{% endblock %}


", "FadcoBundle:Prestataire:show.html.twig", "/var/www/html/fadcoplus/src/FadcoBundle/Resources/views/Prestataire/show.html.twig");
    }
}
