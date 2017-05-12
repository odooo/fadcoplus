<?php

/* FadcoBundle:Prestataire:show.html.twig */
class __TwigTemplate_3ac374474ba7fab96c04f27d40b7ea8390ef4a40a91d7575b17c1728f9b4cc68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FadcoBundle:Default:menu.html.twig", "FadcoBundle:Prestataire:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_bfe89ef6fd9f6b9c64e951c23b55042466cdae358006ef1289ed68bc0ac87c99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfe89ef6fd9f6b9c64e951c23b55042466cdae358006ef1289ed68bc0ac87c99->enter($__internal_bfe89ef6fd9f6b9c64e951c23b55042466cdae358006ef1289ed68bc0ac87c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Prestataire:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfe89ef6fd9f6b9c64e951c23b55042466cdae358006ef1289ed68bc0ac87c99->leave($__internal_bfe89ef6fd9f6b9c64e951c23b55042466cdae358006ef1289ed68bc0ac87c99_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_55479d608dcddb192f213647b932136afa62384702abb08bb7ea8b6284f8a8a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55479d608dcddb192f213647b932136afa62384702abb08bb7ea8b6284f8a8a4->enter($__internal_55479d608dcddb192f213647b932136afa62384702abb08bb7ea8b6284f8a8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Infos de : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo " ";
        
        $__internal_55479d608dcddb192f213647b932136afa62384702abb08bb7ea8b6284f8a8a4->leave($__internal_55479d608dcddb192f213647b932136afa62384702abb08bb7ea8b6284f8a8a4_prof);

    }

    // line 3
    public function block_page_quick_actions($context, array $blocks = array())
    {
        $__internal_6115daa3ddd4b0f44ca08e7ac7c8db7aaefea12485fd2b6ed9cd5fe3533328ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6115daa3ddd4b0f44ca08e7ac7c8db7aaefea12485fd2b6ed9cd5fe3533328ab->enter($__internal_6115daa3ddd4b0f44ca08e7ac7c8db7aaefea12485fd2b6ed9cd5fe3533328ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_quick_actions"));

        // line 4
        echo "    <div>
        <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire");
        echo "\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour\"/></a>
        ";
        // line 6
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "admin")) {
            // line 7
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_new", array("id" => null));
            echo "\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Ajouter un nouveau distributeur\"/></a>
        ";
        }
        // line 9
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_new", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Modifier\"/></a>
    </div>
";
        
        $__internal_6115daa3ddd4b0f44ca08e7ac7c8db7aaefea12485fd2b6ed9cd5fe3533328ab->leave($__internal_6115daa3ddd4b0f44ca08e7ac7c8db7aaefea12485fd2b6ed9cd5fe3533328ab_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_ebbb84df46deb45a5db3b1abe2f1766a6577c4214057bceb18b82a22126b8548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebbb84df46deb45a5db3b1abe2f1766a6577c4214057bceb18b82a22126b8548->enter($__internal_ebbb84df46deb45a5db3b1abe2f1766a6577c4214057bceb18b82a22126b8548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "    <section class=\"content\">
        <div class=\"box box-default\">
            <div class=\"box-header with-border\">
                <h1 class=\"box-title\">Détails des informations du distributeur </h1>

                <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\">
                        <i class=\"fa fa-minus\"></i>
                    </button>
                </div>
            </div>
            <div class=\"box-body\">
                <div class=\"table-responsive mailbox-messages\">
                  <div align='center'><img src=\"";
        // line 27
        if ( !(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "photo", array()))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_rewrite_url", $this->env->getExtension('FadcoBundle\Services\Datasecure')->crypter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "WebPhoto", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/images/avatar.png"), "html", null, true);
        }
        echo "\" class=\"img-circle\" style='width:150px;height:150px;' alt=\"User Image\"></div>
                        <table class=\"table table-bordered table-striped\">
                            <tbody>
                                <tr>
                                    <th>N°</th>
                                    <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
                                </tr>
                                
                                <tr>
                                    <th>Nom</th>
                                    <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Prenom</th>
                                    <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenom", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Ville</th>
                                    <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ville", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Contact</th>
                                    <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contact", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Rôles</th>
                                    <td>";
        // line 57
        if ( !(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "roles", array()))) {
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "roles", array()));
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
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastLogin", array()), "Y-m-d H:s:i"), "html", null, true);
        echo "</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
                <div class=\"row\" style=\"margin: auto;\">
                    <a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire");
        echo "\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour\"/></a>
                    ";
        // line 68
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "admin")) {
            // line 69
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_new", array("id" => null));
            echo "\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Ajouter un nouveau distributeur\"/></a>
                    ";
        }
        // line 71
        echo "                    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_new", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Modifier\"/></a>
                </div>
        </div>
    </section>

    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_ebbb84df46deb45a5db3b1abe2f1766a6577c4214057bceb18b82a22126b8548->leave($__internal_ebbb84df46deb45a5db3b1abe2f1766a6577c4214057bceb18b82a22126b8548_prof);

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
        return array (  232 => 76,  223 => 71,  217 => 69,  215 => 68,  211 => 67,  202 => 61,  158 => 57,  151 => 53,  144 => 49,  137 => 45,  130 => 41,  123 => 37,  115 => 32,  103 => 27,  88 => 14,  82 => 13,  71 => 9,  65 => 7,  63 => 6,  59 => 5,  56 => 4,  50 => 3,  36 => 2,  11 => 1,);
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
{% block title %}Infos de : {{ entity.name }} {% endblock %}
{% block page_quick_actions %}
    <div>
        <a href=\"{{ path('grh_prestataire') }}\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour\"/></a>
        {% if app.user.type == \"admin\" %}
            <a href=\"{{ path('grh_prestataire_new', {'id': null}) }}\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Ajouter un nouveau distributeur\"/></a>
        {% endif %}
        <a href=\"{{ path('grh_prestataire_new', {'id': entity.id }) }}\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Modifier\"/></a>
    </div>
{% endblock %}

{% block content %}
    <section class=\"content\">
        <div class=\"box box-default\">
            <div class=\"box-header with-border\">
                <h1 class=\"box-title\">Détails des informations du distributeur </h1>

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
                    {% if app.user.type == \"admin\" %}
                        <a href=\"{{ path('grh_prestataire_new', {'id': null }) }}\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Ajouter un nouveau distributeur\"/></a>
                    {% endif %}
                    <a href=\"{{ path('grh_prestataire_new', {'id': entity.id }) }}\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Modifier\"/></a>
                </div>
        </div>
    </section>

    <script src=\"{{ asset('bundles/FadcoBundle/plugins/datatables/jquery.dataTables.min.js') }}\"></script>

{% endblock %}


", "FadcoBundle:Prestataire:show.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\src\\FadcoBundle/Resources/views/Prestataire/show.html.twig");
    }
}
