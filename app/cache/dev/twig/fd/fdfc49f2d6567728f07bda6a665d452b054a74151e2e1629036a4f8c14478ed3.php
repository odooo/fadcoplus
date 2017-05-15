<?php

/* FadcoBundle:Prestataire:edit.html.twig */
class __TwigTemplate_dc2f045ca6aa8632feab54c9d4605d65459bc06da70b5d36895c88dc45fd958b extends Twig_Template
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
        $__internal_dd66953a5624461c8dde9eebe95c517e5e560765985a099a7cdd48325f77f315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd66953a5624461c8dde9eebe95c517e5e560765985a099a7cdd48325f77f315->enter($__internal_dd66953a5624461c8dde9eebe95c517e5e560765985a099a7cdd48325f77f315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Prestataire:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd66953a5624461c8dde9eebe95c517e5e560765985a099a7cdd48325f77f315->leave($__internal_dd66953a5624461c8dde9eebe95c517e5e560765985a099a7cdd48325f77f315_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c02921954e8bc638703313fc5f4ac577d7ccfe92109c5369d1c220e8fd951ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c02921954e8bc638703313fc5f4ac577d7ccfe92109c5369d1c220e8fd951ef->enter($__internal_8c02921954e8bc638703313fc5f4ac577d7ccfe92109c5369d1c220e8fd951ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion des comptes";
        
        $__internal_8c02921954e8bc638703313fc5f4ac577d7ccfe92109c5369d1c220e8fd951ef->leave($__internal_8c02921954e8bc638703313fc5f4ac577d7ccfe92109c5369d1c220e8fd951ef_prof);

    }

    // line 3
    public function block_contentHeader($context, array $blocks = array())
    {
        $__internal_04dc836e5d5837124989f4717a58db16ba6ec780a3ff87a7cd38fbd46adf6259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04dc836e5d5837124989f4717a58db16ba6ec780a3ff87a7cd38fbd46adf6259->enter($__internal_04dc836e5d5837124989f4717a58db16ba6ec780a3ff87a7cd38fbd46adf6259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentHeader"));

        
        $__internal_04dc836e5d5837124989f4717a58db16ba6ec780a3ff87a7cd38fbd46adf6259->leave($__internal_04dc836e5d5837124989f4717a58db16ba6ec780a3ff87a7cd38fbd46adf6259_prof);

    }

    // line 4
    public function block_page_quick_actions($context, array $blocks = array())
    {
        $__internal_1d3bdf9f4ee473b0018cba5b8ee0d1313b51e0a0952767af965316e09e1a40fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d3bdf9f4ee473b0018cba5b8ee0d1313b51e0a0952767af965316e09e1a40fb->enter($__internal_1d3bdf9f4ee473b0018cba5b8ee0d1313b51e0a0952767af965316e09e1a40fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_quick_actions"));

        // line 5
        echo "    <div>
        <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire");
        echo "\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour\"/></a>
        ";
        // line 8
        echo "    </div>
";
        
        $__internal_1d3bdf9f4ee473b0018cba5b8ee0d1313b51e0a0952767af965316e09e1a40fb->leave($__internal_1d3bdf9f4ee473b0018cba5b8ee0d1313b51e0a0952767af965316e09e1a40fb_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_78a8902fd4b4d68bb4e24f2419ecd40c4f2c4eb0fcb1f6815385e0cc9d4e1326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78a8902fd4b4d68bb4e24f2419ecd40c4f2c4eb0fcb1f6815385e0cc9d4e1326->enter($__internal_78a8902fd4b4d68bb4e24f2419ecd40c4f2c4eb0fcb1f6815385e0cc9d4e1326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    <section class=\"content\">
        <div class=\"box box-default\">
            <div class=\"box-header with-border\">
                <h1 class=\"box-title\">";
        // line 14
        if (((isset($context["nouveau"]) ? $context["nouveau"] : $this->getContext($context, "nouveau")) != "oui")) {
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                <div class=\"row\">
                    <div class=\"col-sm-offset-3 col-sm-6\" id=\"first-part\">
                        <center><img src=\"";
        // line 26
        if ( !(null === $this->getAttribute((isset($context["prestataire"]) ? $context["prestataire"] : $this->getContext($context, "prestataire")), "photo", array()))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_rewrite_url", $this->env->getExtension('FadcoBundle\Services\Datasecure')->crypter($this->getAttribute((isset($context["prestataire"]) ? $context["prestataire"] : $this->getContext($context, "prestataire")), "WebPhoto", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/images/avatar.png"), "html", null, true);
        }
        echo "\" class=\"img-circle\" style=\"width:150px;Height:150px;\" id=\"img-profile\"></center><span>&nbsp;</span><br/>
                        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget', array("id" => "user_photo", "attr" => array("class" => "hidden", "onchange" => "\$('#profile').val(this.files[0].name);")));
        echo "
                        <div class=\"input-group\" onclick=\"\$('#user_photo').click();\">
                            <label class=\"input-group-addon\"><i class=\"fa fa-photo\"></i></label>
                            <input type=\"text\" class=\"form-control\" placeholder=\"photo\" id='profile' ";
        // line 30
        if ( !(null === $this->getAttribute((isset($context["prestataire"]) ? $context["prestataire"] : $this->getContext($context, "prestataire")), "photo", array()))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prestataire"]) ? $context["prestataire"] : $this->getContext($context, "prestataire")), "photo", array()), "html", null, true);
            echo "\" ";
        }
        echo " style=\"cursor: default\" disabled/>
                            <span class=\"input-group-btn\"><button type=\"button\" class='btn btn-primary' >Photo</button></span>
                        </div>

                        <span>&nbsp;</span>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'errors');
        echo "
                        <div class=\"form-group\" >
                            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'label');
        echo "
                            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <span>&nbsp;</span>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
                        <div class=\"form-group\" >
                            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label');
        echo "
                            ";
        // line 43
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "nom")));
        echo "
                        </div>
                        <span>&nbsp;</span>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
                        <div class=\"form-group\">
                            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label');
        echo "
                            ";
        // line 49
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "prénom")));
        echo "
                        </div>
                        <span>&nbsp;</span>";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contact", array()), 'errors');
        echo "
                        <div class=\"form-group\">
                            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contact", array()), 'label');
        echo "
                            ";
        // line 55
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contact", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "contact")));
        echo "
                        </div>
                        ";
        // line 57
        if (((isset($context["nouveau"]) ? $context["nouveau"] : $this->getContext($context, "nouveau")) == "oui")) {
            // line 58
            echo "                            <span>&nbsp;</span>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
            echo "
                            <div class=\"form-group\">
                                ";
            // line 60
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
            echo "
                                ";
            // line 62
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom d'utilisateur")));
            echo "
                            </div>
                            <span>&nbsp;</span>";
            // line 64
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
            echo "
                            <div class=\"form-group\">
                                ";
            // line 66
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label');
            echo "
                                ";
            // line 68
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "mot de passe")));
            echo "
                            </div>
                            <span>&nbsp;</span>";
            // line 70
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
            echo "
                            <div class=\"form-group\">
                                ";
            // line 72
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label');
            echo "
                                ";
            // line 74
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "confirmer le mot de passe")));
            echo "
                            </div>
                        ";
        }
        // line 77
        echo "                        <span>&nbsp;</span>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                        <div class=\"form-group\">
                            ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                            ";
        // line 81
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "e-mail")));
        echo "
                        </div>
                        ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'errors', array("attr" => array("class" => "alert-error")));
        echo "<span>&nbsp;</span>
                        <div class=\"form-group\">
                            ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'label');
        echo "
                            ";
        // line 87
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "ville du prestataire")));
        echo "
                        </div>
                        <div>
                            <span>&nbsp;</span>
                        </div>
                    </div>
                </div>
                <div class=\"row\" style=\"margin: auto;\">
                    <a href=\"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grh_prestataire");
        echo "\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour\"/></a>
                    ";
        // line 97
        echo "                    <a href=\"\"><input type=\"submit\" class=\"btn btn-primary btn-xs\"value=\"Valider\"/></a>
                </div>
                ";
        // line 99
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </section>

    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_78a8902fd4b4d68bb4e24f2419ecd40c4f2c4eb0fcb1f6815385e0cc9d4e1326->leave($__internal_78a8902fd4b4d68bb4e24f2419ecd40c4f2c4eb0fcb1f6815385e0cc9d4e1326_prof);

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
        return array (  300 => 104,  292 => 99,  288 => 97,  284 => 95,  272 => 87,  268 => 85,  263 => 83,  257 => 81,  253 => 79,  247 => 77,  240 => 74,  236 => 72,  231 => 70,  225 => 68,  221 => 66,  216 => 64,  210 => 62,  206 => 60,  200 => 58,  198 => 57,  192 => 55,  188 => 53,  183 => 51,  177 => 49,  173 => 47,  168 => 45,  162 => 43,  158 => 41,  153 => 39,  148 => 37,  144 => 36,  139 => 34,  128 => 30,  122 => 27,  114 => 26,  108 => 23,  92 => 14,  87 => 11,  81 => 10,  73 => 8,  69 => 6,  66 => 5,  60 => 4,  49 => 3,  37 => 2,  11 => 1,);
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
{% block title %}Gestion des comptes{% endblock %}
{% block contentHeader %}{% endblock %}
{% block page_quick_actions %}
    <div>
        <a href=\"{{ path('grh_prestataire') }}\"><input type=\"button\" class=\"btn btn-warning btn-xs\"value=\"Retour\"/></a>
        {#<a href=\"{{ path('grh_prestataire_new', {'id': null }) }}\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Ajouter un nouveau compte\"/></a>#}
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

                        <span>&nbsp;</span>{{ form_errors(form.type) }}
                        <div class=\"form-group\" >
                            {{ form_label(form.type) }}
                            {{ form_widget(form.type,{'attr':{'class':'form-control'} }) }}
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
                    {#<a href=\"{{ path('grh_prestataire_new', {'id': null }) }}\"><input type=\"button\" class=\"btn btn-info btn-xs\"value=\"Ajouter un nouveau distributeur\"/></a>#}
                    <a href=\"\"><input type=\"submit\" class=\"btn btn-primary btn-xs\"value=\"Valider\"/></a>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </section>

    <script src=\"{{ asset('bundles/FadcoBundle/plugins/datatables/jquery.dataTables.min.js') }}\"></script>

{% endblock %}


", "FadcoBundle:Prestataire:edit.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\src\\FadcoBundle/Resources/views/Prestataire/edit.html.twig");
    }
}
