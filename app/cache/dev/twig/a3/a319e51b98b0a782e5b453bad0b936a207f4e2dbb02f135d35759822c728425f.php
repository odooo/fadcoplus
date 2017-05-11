<?php

/* FadcoBundle:Prestataire:edit.html.twig */
class __TwigTemplate_efa6eee79fd75b48150dc8408200505620c75cfe9081d4186374495d29937138 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FadcoBundle:Default:menu.html.twig", "FadcoBundle:Prestataire:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contentHeader' => array($this, 'block_contentHeader'),
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
        $__internal_26e4a4cc52571b48eb08bde3e473964a237956db610d425a0681db8b03617bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e4a4cc52571b48eb08bde3e473964a237956db610d425a0681db8b03617bcd->enter($__internal_26e4a4cc52571b48eb08bde3e473964a237956db610d425a0681db8b03617bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Prestataire:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26e4a4cc52571b48eb08bde3e473964a237956db610d425a0681db8b03617bcd->leave($__internal_26e4a4cc52571b48eb08bde3e473964a237956db610d425a0681db8b03617bcd_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_54733633700a01cc53c64fcc5b498fe66bfff7aef5bad7360484f467ff206570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54733633700a01cc53c64fcc5b498fe66bfff7aef5bad7360484f467ff206570->enter($__internal_54733633700a01cc53c64fcc5b498fe66bfff7aef5bad7360484f467ff206570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion des distributeurs";
        
        $__internal_54733633700a01cc53c64fcc5b498fe66bfff7aef5bad7360484f467ff206570->leave($__internal_54733633700a01cc53c64fcc5b498fe66bfff7aef5bad7360484f467ff206570_prof);

    }

    // line 3
    public function block_contentHeader($context, array $blocks = array())
    {
        $__internal_5296a1028e67a685f3895d1bc43c504f19eb08582ddd3d0043c5eff7592a23fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5296a1028e67a685f3895d1bc43c504f19eb08582ddd3d0043c5eff7592a23fa->enter($__internal_5296a1028e67a685f3895d1bc43c504f19eb08582ddd3d0043c5eff7592a23fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentHeader"));

        
        $__internal_5296a1028e67a685f3895d1bc43c504f19eb08582ddd3d0043c5eff7592a23fa->leave($__internal_5296a1028e67a685f3895d1bc43c504f19eb08582ddd3d0043c5eff7592a23fa_prof);

    }

    // line 4
    public function block_page_quick_actions($context, array $blocks = array())
    {
        $__internal_abef6157bf06ac5a913da713b2eb83ac6afb67a8372646a7334e8cdf21842c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abef6157bf06ac5a913da713b2eb83ac6afb67a8372646a7334e8cdf21842c4c->enter($__internal_abef6157bf06ac5a913da713b2eb83ac6afb67a8372646a7334e8cdf21842c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_quick_actions"));

        // line 5
        echo "    <div>
        <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire");
        echo "\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour\"/></a>
        <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_new", array("id" => null));
        echo "\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Ajouter un nouveau distributeur\"/></a>
    </div>
";
        
        $__internal_abef6157bf06ac5a913da713b2eb83ac6afb67a8372646a7334e8cdf21842c4c->leave($__internal_abef6157bf06ac5a913da713b2eb83ac6afb67a8372646a7334e8cdf21842c4c_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_7d89e00dc87c0c303dcf3d79bfd21801d91ba58a1c27ceb8c4dd0e096362537a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d89e00dc87c0c303dcf3d79bfd21801d91ba58a1c27ceb8c4dd0e096362537a->enter($__internal_7d89e00dc87c0c303dcf3d79bfd21801d91ba58a1c27ceb8c4dd0e096362537a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    <section class=\"content\">
        <div class=\"box box-default\">
            <div class=\"box-header with-border\">
                <h1 class=\"box-title\">";
        // line 14
        if ((($context["nouveau"] ?? $this->getContext($context, "nouveau")) != "oui")) {
            echo " Modifier les informations du distributeur ";
        } else {
            echo " Nouveau distributeur ";
        }
        echo " </h1>

                <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\">
                        <i class=\"fa fa-minus\"></i>
                    </button>
                </div>
            </div>
            <div class=\"box-body\">
               ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                <div class=\"row\">
                    <div class=\"col-sm-offset-3 col-sm-6\" id=\"first-part\">
                        <center><img src=\"";
        // line 26
        if ( !(null === $this->getAttribute(($context["prestataire"] ?? $this->getContext($context, "prestataire")), "photo", array()))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_rewrite_url", $this->env->getExtension('FadcoBundle\Services\Datasecure')->crypter($this->getAttribute(($context["prestataire"] ?? $this->getContext($context, "prestataire")), "WebPhoto", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/images/avatar.png"), "html", null, true);
        }
        echo "\" class=\"img-circle\" style=\"width:150px;Height:150px;\" id=\"img-profile\"></center><span>&nbsp;</span><br/>
                        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget', array("id" => "user_photo", "attr" => array("class" => "hidden", "onchange" => "\$('#profile').val(this.files[0].name);")));
        echo "
                        <div class=\"input-group\" onclick=\"\$('#user_photo').click();\">
                            <label class=\"input-group-addon\"><i class=\"fa fa-photo\"></i></label>
                            <input type=\"text\" class=\"form-control\" placeholder=\"photo\" id='profile' ";
        // line 30
        if ( !(null === $this->getAttribute(($context["prestataire"] ?? $this->getContext($context, "prestataire")), "photo", array()))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["prestataire"] ?? $this->getContext($context, "prestataire")), "photo", array()), "html", null, true);
            echo "\" ";
        }
        echo " style=\"cursor: default\" disabled/>
                            <span class=\"input-group-btn\"><button type=\"button\" class='btn btn-primary' >Photo</button></span>
                        </div>

                        <span>&nbsp;</span>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
                        <div class=\"form-group\" >
                            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'label');
        echo "
                            ";
        // line 38
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "nom")));
        echo "
                        </div>
                        <span>&nbsp;</span>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
                        <div class=\"form-group\">
                            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'label');
        echo "
                            ";
        // line 44
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "prénom")));
        echo "
                        </div>
                        <span>&nbsp;</span>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contact", array()), 'errors');
        echo "
                        <div class=\"form-group\">
                            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contact", array()), 'label');
        echo "
                            ";
        // line 50
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contact", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "contact")));
        echo "
                        </div>
                        ";
        // line 52
        if ((($context["nouveau"] ?? $this->getContext($context, "nouveau")) == "oui")) {
            // line 53
            echo "                            <span>&nbsp;</span>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'errors');
            echo "
                            <div class=\"form-group\">
                                ";
            // line 55
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'label');
            echo "
                                ";
            // line 57
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom d'utilisateur")));
            echo "
                            </div>
                            <span>&nbsp;</span>";
            // line 59
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
            echo "
                            <div class=\"form-group\">
                                ";
            // line 61
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label');
            echo "
                                ";
            // line 63
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "mot de passe")));
            echo "
                            </div>
                            <span>&nbsp;</span>";
            // line 65
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
            echo "
                            <div class=\"form-group\">
                                ";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label');
            echo "
                                ";
            // line 69
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "confirmer le mot de passe")));
            echo "
                            </div>
                        ";
        }
        // line 72
        echo "                        <span>&nbsp;</span>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                        <div class=\"form-group\">
                            ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                            ";
        // line 76
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "e-mail")));
        echo "
                        </div>
                        ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", array()), 'errors', array("attr" => array("class" => "alert-error")));
        echo "<span>&nbsp;</span>
                        <div class=\"form-group\">
                            ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", array()), 'label');
        echo "
                            ";
        // line 82
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "ville du prestataire")));
        echo "
                        </div>
                        <div>
                            <span>&nbsp;</span>
                        </div>
                    </div>
                </div>
                <div class=\"row\" style=\"margin: auto;\">
                    <a href=\"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire");
        echo "\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour\"/></a>
                    <a href=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire_new", array("id" => null));
        echo "\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Ajouter un nouveau distributeur\"/></a>
                    <a href=\"\"><input type=\"submit\" class=\"btn btn-primary btn-xs\"value=\"Valider\"/></a>
                </div>
                ";
        // line 94
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </section>

    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/GSPBundle/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_7d89e00dc87c0c303dcf3d79bfd21801d91ba58a1c27ceb8c4dd0e096362537a->leave($__internal_7d89e00dc87c0c303dcf3d79bfd21801d91ba58a1c27ceb8c4dd0e096362537a_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Prestataire:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 99,  282 => 94,  276 => 91,  272 => 90,  260 => 82,  256 => 80,  251 => 78,  245 => 76,  241 => 74,  235 => 72,  228 => 69,  224 => 67,  219 => 65,  213 => 63,  209 => 61,  204 => 59,  198 => 57,  194 => 55,  188 => 53,  186 => 52,  180 => 50,  176 => 48,  171 => 46,  165 => 44,  161 => 42,  156 => 40,  150 => 38,  146 => 36,  141 => 34,  130 => 30,  124 => 27,  116 => 26,  110 => 23,  94 => 14,  89 => 11,  83 => 10,  73 => 7,  69 => 6,  66 => 5,  60 => 4,  49 => 3,  37 => 2,  11 => 1,);
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
{% block title %}Gestion des distributeurs{% endblock %}
{% block contentHeader %}{% endblock %}
{% block page_quick_actions %}
    <div>
        <a href=\"{{ path('grh_prestataire') }}\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour\"/></a>
        <a href=\"{{ path('grh_prestataire_new', {'id': null }) }}\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Ajouter un nouveau distributeur\"/></a>
    </div>
{% endblock %}
{% block content %}
    <section class=\"content\">
        <div class=\"box box-default\">
            <div class=\"box-header with-border\">
                <h1 class=\"box-title\">{% if nouveau != 'oui' %} Modifier les informations du distributeur {% else %} Nouveau distributeur {% endif %} </h1>

                <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\">
                        <i class=\"fa fa-minus\"></i>
                    </button>
                </div>
            </div>
            <div class=\"box-body\">
               {{ form_start(form)}}
                <div class=\"row\">
                    <div class=\"col-sm-offset-3 col-sm-6\" id=\"first-part\">
                        <center><img src=\"{%if prestataire.photo is not null %}{{path(\"global_rewrite_url\",cryptSrc(prestataire.WebPhoto))}}{%else%}{{ asset('bundles/FadcoBundle/images/avatar.png') }}{% endif %}\" class=\"img-circle\" style=\"width:150px;Height:150px;\" id=\"img-profile\"></center><span>&nbsp;</span><br/>
                        {{ form_widget(form.file,{'id':'user_photo','attr':{'class':'hidden','onchange':\"\$('#profile').val(this.files[0].name);\"} }) }}
                        <div class=\"input-group\" onclick=\"\$('#user_photo').click();\">
                            <label class=\"input-group-addon\"><i class=\"fa fa-photo\"></i></label>
                            <input type=\"text\" class=\"form-control\" placeholder=\"photo\" id='profile' {% if prestataire.photo is not null %} value=\"{{ prestataire.photo }}\" {% endif %} style=\"cursor: default\" disabled/>
                            <span class=\"input-group-btn\"><button type=\"button\" class='btn btn-primary' >Photo</button></span>
                        </div>

                        <span>&nbsp;</span>{{ form_errors(form.nom) }}
                        <div class=\"form-group\" >
                            {{ form_label(form.nom) }}
                            {#<label class=\"input-group-addon\"><i class=\"fa fa-user\"></i>Nom</label>#}
                            {{ form_widget(form.nom,{'attr':{'class':'form-control','placeholder':'nom'} }) }}
                        </div>
                        <span>&nbsp;</span>{{ form_errors(form.prenom) }}
                        <div class=\"form-group\">
                            {{ form_label(form.prenom) }}
                            {#<label class=\"input-group-addon\"><i class=\"fa fa-user\"></i>Prénom(s)</label>#}
                            {{ form_widget(form.prenom,{'attr':{'class':'form-control','placeholder':'prénom'} }) }}
                        </div>
                        <span>&nbsp;</span>{{ form_errors(form.contact) }}
                        <div class=\"form-group\">
                            {{ form_label(form.contact) }}
                            {#<label class=\"input-group-addon\"><i class=\"fa fa-user\"></i>Contacts</label>#}
                            {{ form_widget(form.contact,{'attr':{'class':'form-control','placeholder':'contact'} }) }}
                        </div>
                        {% if nouveau == 'oui' %}
                            <span>&nbsp;</span>{{ form_errors(form.username) }}
                            <div class=\"form-group\">
                                {{ form_label(form.username) }}
                                {#<label class=\"input-group-addon\"><i class=\"fa fa-user\"></i>Nom d'utilisateur (par défaut)</label>#}
                                {{ form_widget(form.username,{'attr':{'class':'form-control','placeholder':\"Nom d'utilisateur\"} }) }}
                            </div>
                            <span>&nbsp;</span>{{ form_errors(form.plainPassword.first) }}
                            <div class=\"form-group\">
                                {{ form_label(form.plainPassword.first) }}
                                {#<label class=\"input-group-addon\"><i class=\"fa fa-key\"></i>Mot de passe (par défaut) </label>#}
                                {{ form_widget(form.plainPassword.first,{'attr':{'class':'form-control','placeholder':'mot de passe'} }) }}
                            </div>
                            <span>&nbsp;</span>{{ form_errors(form.plainPassword.second ) }}
                            <div class=\"form-group\">
                                {{ form_label(form.plainPassword.second) }}
                                {#<label class=\"input-group-addon\"><i class=\"fa fa-key\"></i>Confirmer mot de passe</label>#}
                                {{ form_widget(form.plainPassword.second,{'attr':{'class':'form-control','placeholder':'confirmer le mot de passe'} }) }}
                            </div>
                        {% endif %}
                        <span>&nbsp;</span>{{ form_errors(form.email) }}
                        <div class=\"form-group\">
                            {{ form_label(form.email) }}
                            {#<label class=\"input-group-addon\"><i class=\"fa fa-envelope\"></i>Email</label>#}
                            {{ form_widget(form.email,{'attr':{'class':'form-control','placeholder':'e-mail'} }) }}
                        </div>
                        {{ form_errors(form.ville,{\"attr\":{'class':'alert-error' } }) }}<span>&nbsp;</span>
                        <div class=\"form-group\">
                            {{ form_label(form.ville) }}
                            {#<label class=\"input-group-addon\"><i class=\"fa fa-user\"></i>Ville</label>#}
                            {{ form_widget(form.ville,{'attr':{'class':'form-control','placeholder':'ville du prestataire'} }) }}
                        </div>
                        <div>
                            <span>&nbsp;</span>
                        </div>
                    </div>
                </div>
                <div class=\"row\" style=\"margin: auto;\">
                    <a href=\"{{ path('grh_prestataire') }}\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour\"/></a>
                    <a href=\"{{ path('grh_prestataire_new', {'id': null }) }}\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Ajouter un nouveau distributeur\"/></a>
                    <a href=\"\"><input type=\"submit\" class=\"btn btn-primary btn-xs\"value=\"Valider\"/></a>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </section>

    <script src=\"{{ asset('bundles/GSPBundle/plugins/datatables/jquery.dataTables.min.js') }}\"></script>

{% endblock %}


", "FadcoBundle:Prestataire:edit.html.twig", "/var/www/html/fadcoplus/src/FadcoBundle/Resources/views/Prestataire/edit.html.twig");
    }
}
