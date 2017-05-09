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
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FadcoBundle:Default:menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14e337c844cddd4e5ce1afc3218f96a481d2125147121da43996f6d8e1551ee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14e337c844cddd4e5ce1afc3218f96a481d2125147121da43996f6d8e1551ee1->enter($__internal_14e337c844cddd4e5ce1afc3218f96a481d2125147121da43996f6d8e1551ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Prestataire:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14e337c844cddd4e5ce1afc3218f96a481d2125147121da43996f6d8e1551ee1->leave($__internal_14e337c844cddd4e5ce1afc3218f96a481d2125147121da43996f6d8e1551ee1_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_29011c0e96f66cf851ba06a2b889ceaaff4f89b42fe73a0fac0e3e7ad9bb26cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29011c0e96f66cf851ba06a2b889ceaaff4f89b42fe73a0fac0e3e7ad9bb26cf->enter($__internal_29011c0e96f66cf851ba06a2b889ceaaff4f89b42fe73a0fac0e3e7ad9bb26cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <section class=\"content\">
        <section class=\"box box-primary\">
            <div class=\"box-header with-border\">
                <h1 class=\"box-title\"> Details des informations du prestataire  </h1>
                <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\">
                        <i class=\"fa fa-minus\"></i>
                    </button>
                </div>
            </div>
            <div class=\"box-body\">
                <div align='center'><img src=\"";
        // line 15
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
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
             
            <tr>
                <th>Nom</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Agence</th>
                <td>";
        // line 33
        if ($this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "agence", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "agence", array()), "libelle", array()), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
             <tr>
                <th>Ville</th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "ville", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contact</th>
                <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "contact", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rôles</th>
                <td>";
        // line 49
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
        // line 53
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "lastLogin", array()), "Y-m-d H:s:i"), "html", null, true);
        echo "</td>
             </tr>
        </tbody>
    </table>

       <div class=\"box-footer\">
                <a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire");
        echo "\"><button type=\"button\" class=\"btn btn-warning\">Retour à la liste</button></a>
         </div>

        </div>

        </section>
    </section>

";
        
        $__internal_29011c0e96f66cf851ba06a2b889ceaaff4f89b42fe73a0fac0e3e7ad9bb26cf->leave($__internal_29011c0e96f66cf851ba06a2b889ceaaff4f89b42fe73a0fac0e3e7ad9bb26cf_prof);

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
        return array (  170 => 59,  161 => 53,  117 => 49,  110 => 45,  103 => 41,  96 => 37,  87 => 33,  80 => 29,  73 => 25,  65 => 20,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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

{% block content %}
    <section class=\"content\">
        <section class=\"box box-primary\">
            <div class=\"box-header with-border\">
                <h1 class=\"box-title\"> Details des informations du prestataire  </h1>
                <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\">
                        <i class=\"fa fa-minus\"></i>
                    </button>
                </div>
            </div>
            <div class=\"box-body\">
                <div align='center'><img src=\"{%if entity.photo is not null %}{{path(\"global_rewrite_url\",cryptSrc(entity.WebPhoto))}}{%else%}{{ asset('bundles/FadcoBundle/images/avatar.png') }}{% endif %}\" class=\"img-circle\" style='width:150px;height:150px;' alt=\"User Image\"></div>
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
                <th>Agence</th>
                <td>{% if entity.agence %}{{ entity.agence.libelle }}{% endif %}</td>
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

       <div class=\"box-footer\">
                <a href=\"{{ path('grh_prestataire') }}\"><button type=\"button\" class=\"btn btn-warning\">Retour à la liste</button></a>
         </div>

        </div>

        </section>
    </section>

{% endblock %}
", "FadcoBundle:Prestataire:show.html.twig", "/var/www/html/fadcoplus/src/FadcoBundle/Resources/views/Prestataire/show.html.twig");
    }
}
