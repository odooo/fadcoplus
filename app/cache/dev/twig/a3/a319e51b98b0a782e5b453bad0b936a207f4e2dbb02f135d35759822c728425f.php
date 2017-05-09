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
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FadcoBundle:Default:menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b47e4e2db796b57bcb65490b3bedfdeea9ddd784cbe64ba959d2c195ec32694a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b47e4e2db796b57bcb65490b3bedfdeea9ddd784cbe64ba959d2c195ec32694a->enter($__internal_b47e4e2db796b57bcb65490b3bedfdeea9ddd784cbe64ba959d2c195ec32694a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Prestataire:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b47e4e2db796b57bcb65490b3bedfdeea9ddd784cbe64ba959d2c195ec32694a->leave($__internal_b47e4e2db796b57bcb65490b3bedfdeea9ddd784cbe64ba959d2c195ec32694a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_21e022118472e6c46ee8020d4baba5dff7e79d3eb6282b638226c732cee52665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21e022118472e6c46ee8020d4baba5dff7e79d3eb6282b638226c732cee52665->enter($__internal_21e022118472e6c46ee8020d4baba5dff7e79d3eb6282b638226c732cee52665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion des prestataires";
        
        $__internal_21e022118472e6c46ee8020d4baba5dff7e79d3eb6282b638226c732cee52665->leave($__internal_21e022118472e6c46ee8020d4baba5dff7e79d3eb6282b638226c732cee52665_prof);

    }

    // line 3
    public function block_contentHeader($context, array $blocks = array())
    {
        $__internal_0e983ffd13c31eb0a6db08b462f5cc7abf4355be9b9b9bb96626aa28f56d6956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e983ffd13c31eb0a6db08b462f5cc7abf4355be9b9b9bb96626aa28f56d6956->enter($__internal_0e983ffd13c31eb0a6db08b462f5cc7abf4355be9b9b9bb96626aa28f56d6956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentHeader"));

        
        $__internal_0e983ffd13c31eb0a6db08b462f5cc7abf4355be9b9b9bb96626aa28f56d6956->leave($__internal_0e983ffd13c31eb0a6db08b462f5cc7abf4355be9b9b9bb96626aa28f56d6956_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_d8b15bf56b33624437c05ed71b323de7dc43f03c74f97379440fb853374521aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8b15bf56b33624437c05ed71b323de7dc43f03c74f97379440fb853374521aa->enter($__internal_d8b15bf56b33624437c05ed71b323de7dc43f03c74f97379440fb853374521aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    
\t<div class=\"box box-primary\">
\t\t<div class=\"box-header with-border\">
\t\t\t<h1 class=\"box-title\"> ";
        // line 8
        if ( !(null === ($context["prestataire"] ?? $this->getContext($context, "prestataire")))) {
            echo " Modifier les informations du prestataire ";
        } else {
            echo " Ajouter un nouveau prestataire ";
        }
        echo " </h1>
\t\t\t<div class=\"box-tools pull-right\">
\t\t\t\t<button class=\"btn btn-box-tool\" data-widget=\"collapse\">
\t\t\t\t\t<i class=\"fa fa-minus\"></i>
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
            <div class=\"box box-body\">
                ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"row\">
                        <div class=\"col-sm-offset-3 col-sm-6\" id=\"first-part\">
                            <center><img src=\"";
        // line 19
        if ( !(null === $this->getAttribute(($context["prestataire"] ?? $this->getContext($context, "prestataire")), "photo", array()))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_rewrite_url", $this->env->getExtension('FadcoBundle\Services\Datasecure')->crypter($this->getAttribute(($context["prestataire"] ?? $this->getContext($context, "prestataire")), "WebPhoto", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/images/avatar.png"), "html", null, true);
        }
        echo "\" class=\"img-circle\" style=\"width:150px;Height:150px;\" id=\"img-profile\"></center><span>&nbsp;</span><br/>
                            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget', array("id" => "user_photo", "attr" => array("class" => "hidden", "onchange" => "\$('#profile').val(this.files[0].name);")));
        echo "
                           <div class=\"input-group\" onclick=\"\$('#user_photo').click();\">
                               <label class=\"input-group-addon\"><i class=\"fa fa-photo\"></i></label>
                                <input type=\"text\" class=\"form-control\" placeholder=\"photo\" id='profile' ";
        // line 23
        if ( !(null === $this->getAttribute(($context["prestataire"] ?? $this->getContext($context, "prestataire")), "photo", array()))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["prestataire"] ?? $this->getContext($context, "prestataire")), "photo", array()), "html", null, true);
            echo "\" ";
        }
        echo " style=\"cursor: default\" disabled/>
                                <span class=\"input-group-btn\"><button type=\"button\" class='btn btn-primary' >Photo</button></span>
                            </div>

                            <span>&nbsp;</span>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
                            <div class=\"input-group\" >
                                <label class=\"input-group-addon\"><i class=\"fa fa-user\"></i>Nom</label>
                                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "nom")));
        echo "
                            </div>
                            <span>&nbsp;</span>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"fa fa-user\"></i>Prénom(s)</label>
                                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "prénom")));
        echo "
                            </div>
                            <span>&nbsp;</span>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contact", array()), 'errors');
        echo "
                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"fa fa-user\"></i>Contacts</label>
                                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contact", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "contact")));
        echo "
                            </div>
                            ";
        // line 42
        if ((($context["nouveau"] ?? $this->getContext($context, "nouveau")) == "oui")) {
            // line 43
            echo "                                <span>&nbsp;</span>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'errors');
            echo "
                                <div class=\"input-group\">
                                    <label class=\"input-group-addon\"><i class=\"fa fa-user\"></i>Nom d'utilisateur (par défaut)</label>
                                    ";
            // line 46
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom d'utilisateur")));
            echo "
                                </div>
                                    <span>&nbsp;</span>";
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
            echo "
                                    <div class=\"input-group\">
                                        <label class=\"input-group-addon\"><i class=\"fa fa-key\"></i>Mot de passe (par défaut) </label>
                                        ";
            // line 51
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "mot de passe")));
            echo "
                                    </div>
                                    <span>&nbsp;</span>";
            // line 53
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
            echo "
                                    <div class=\"input-group\">
                                        <label class=\"input-group-addon\"><i class=\"fa fa-key\"></i>Confirmer mot de passe</label>
                                        ";
            // line 56
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "confirmer le mot de passe")));
            echo "
                                    </div>
                            ";
        }
        // line 59
        echo "                            <span>&nbsp;</span>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"fa fa-envelope\"></i>Email</label>
                                ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "e-mail")));
        echo "
                            </div>
";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", array()), 'errors', array("attr" => array("class" => "alert-error")));
        echo "<span>&nbsp;</span>
                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"fa fa-user\"></i>Ville</label>
                                ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "ville du prestataire")));
        echo "
                            </div>
                            <div>
                                <span>&nbsp;</span>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xs-4 col-sm-offset-3 col-sm-3 right\">
                                    <button type=\"submit\" class=\"btn btn-primary btn-sm\"><span class=\"visible-xs\"><i class=\"fa fa-save fa-2x\"></i></span><span class=\"visible-sm visible-md visible-lg\"><i class=\"fa fa-save\"></i> Valider</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 82
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            
            <div class=\"box-footer with-border\">
\t\t
\t\t<a href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire");
        echo "\" class=\"btn btn-info\">Retour</a>
\t\t
\t\t
            </div>
\t</div>
";
        
        $__internal_d8b15bf56b33624437c05ed71b323de7dc43f03c74f97379440fb853374521aa->leave($__internal_d8b15bf56b33624437c05ed71b323de7dc43f03c74f97379440fb853374521aa_prof);

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
        return array (  229 => 86,  222 => 82,  204 => 67,  198 => 64,  193 => 62,  186 => 59,  180 => 56,  174 => 53,  169 => 51,  163 => 48,  158 => 46,  151 => 43,  149 => 42,  144 => 40,  138 => 37,  133 => 35,  127 => 32,  122 => 30,  116 => 27,  105 => 23,  99 => 20,  91 => 19,  85 => 16,  70 => 8,  65 => 5,  59 => 4,  48 => 3,  36 => 2,  11 => 1,);
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
{% block title %}Gestion des prestataires{% endblock %}
{% block contentHeader %}{% endblock %}
{% block content %}
    
\t<div class=\"box box-primary\">
\t\t<div class=\"box-header with-border\">
\t\t\t<h1 class=\"box-title\"> {% if prestataire is not null %} Modifier les informations du prestataire {% else %} Ajouter un nouveau prestataire {% endif %} </h1>
\t\t\t<div class=\"box-tools pull-right\">
\t\t\t\t<button class=\"btn btn-box-tool\" data-widget=\"collapse\">
\t\t\t\t\t<i class=\"fa fa-minus\"></i>
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
            <div class=\"box box-body\">
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
                            <div class=\"input-group\" >
                                <label class=\"input-group-addon\"><i class=\"fa fa-user\"></i>Nom</label>
                                {{ form_widget(form.nom,{'attr':{'class':'form-control','placeholder':'nom'} }) }}
                            </div>
                            <span>&nbsp;</span>{{ form_errors(form.prenom) }}
                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"fa fa-user\"></i>Prénom(s)</label>
                                {{ form_widget(form.prenom,{'attr':{'class':'form-control','placeholder':'prénom'} }) }}
                            </div>
                            <span>&nbsp;</span>{{ form_errors(form.contact) }}
                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"fa fa-user\"></i>Contacts</label>
                                {{ form_widget(form.contact,{'attr':{'class':'form-control','placeholder':'contact'} }) }}
                            </div>
                            {% if nouveau == 'oui' %}
                                <span>&nbsp;</span>{{ form_errors(form.username) }}
                                <div class=\"input-group\">
                                    <label class=\"input-group-addon\"><i class=\"fa fa-user\"></i>Nom d'utilisateur (par défaut)</label>
                                    {{ form_widget(form.username,{'attr':{'class':'form-control','placeholder':\"Nom d'utilisateur\"} }) }}
                                </div>
                                    <span>&nbsp;</span>{{ form_errors(form.plainPassword.first ) }}
                                    <div class=\"input-group\">
                                        <label class=\"input-group-addon\"><i class=\"fa fa-key\"></i>Mot de passe (par défaut) </label>
                                        {{ form_widget(form.plainPassword.first,{'attr':{'class':'form-control','placeholder':'mot de passe'} }) }}
                                    </div>
                                    <span>&nbsp;</span>{{ form_errors(form.plainPassword.second ) }}
                                    <div class=\"input-group\">
                                        <label class=\"input-group-addon\"><i class=\"fa fa-key\"></i>Confirmer mot de passe</label>
                                        {{ form_widget(form.plainPassword.second,{'attr':{'class':'form-control','placeholder':'confirmer le mot de passe'} }) }}
                                    </div>
                            {% endif %}
                            <span>&nbsp;</span>{{ form_errors(form.email) }}
                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"fa fa-envelope\"></i>Email</label>
                                {{ form_widget(form.email,{'attr':{'class':'form-control','placeholder':'e-mail'} }) }}
                            </div>
{{ form_errors(form.ville,{\"attr\":{'class':'alert-error' } }) }}<span>&nbsp;</span>
                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"fa fa-user\"></i>Ville</label>
                                {{ form_widget(form.ville,{'attr':{'class':'form-control','placeholder':'ville du prestataire'} }) }}
                            </div>
                            <div>
                                <span>&nbsp;</span>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xs-4 col-sm-offset-3 col-sm-3 right\">
                                    <button type=\"submit\" class=\"btn btn-primary btn-sm\"><span class=\"visible-xs\"><i class=\"fa fa-save fa-2x\"></i></span><span class=\"visible-sm visible-md visible-lg\"><i class=\"fa fa-save\"></i> Valider</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{ form_end(form) }}
            
            <div class=\"box-footer with-border\">
\t\t
\t\t<a href=\"{{ path('grh_prestataire') }}\" class=\"btn btn-info\">Retour</a>
\t\t
\t\t
            </div>
\t</div>
{% endblock %}
", "FadcoBundle:Prestataire:edit.html.twig", "/var/www/html/fadcoplus/src/FadcoBundle/Resources/views/Prestataire/edit.html.twig");
    }
}
