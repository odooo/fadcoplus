<?php

/* FadcoBundle:Distributeur:new-reabo.html.twig */
class __TwigTemplate_ed4a7d317a8bf368047b3755586d46d0ab8d025ac5369e45d1d05d61ebad2c13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FadcoBundle:Default:menu.html.twig", "FadcoBundle:Distributeur:new-reabo.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FadcoBundle:Default:menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae194b1c5a820dc4fd51f1ffcd82fe5a081c53089fc71af617c53667e7d31bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae194b1c5a820dc4fd51f1ffcd82fe5a081c53089fc71af617c53667e7d31bb9->enter($__internal_ae194b1c5a820dc4fd51f1ffcd82fe5a081c53089fc71af617c53667e7d31bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Distributeur:new-reabo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae194b1c5a820dc4fd51f1ffcd82fe5a081c53089fc71af617c53667e7d31bb9->leave($__internal_ae194b1c5a820dc4fd51f1ffcd82fe5a081c53089fc71af617c53667e7d31bb9_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5578cf3507fc0afe901f58dc6a86cfa3dfb296083c575941b624385cad879273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5578cf3507fc0afe901f58dc6a86cfa3dfb296083c575941b624385cad879273->enter($__internal_5578cf3507fc0afe901f58dc6a86cfa3dfb296083c575941b624385cad879273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Nouveau réabo. direct";
        
        $__internal_5578cf3507fc0afe901f58dc6a86cfa3dfb296083c575941b624385cad879273->leave($__internal_5578cf3507fc0afe901f58dc6a86cfa3dfb296083c575941b624385cad879273_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_6a5c2997b01db55c8c6ae63e25b987c0a65c606dca442383a73762bfe5c867b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a5c2997b01db55c8c6ae63e25b987c0a65c606dca442383a73762bfe5c867b7->enter($__internal_6a5c2997b01db55c8c6ae63e25b987c0a65c606dca442383a73762bfe5c867b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    <section class=\"content\">
        
            <div class=\"box-body\" style=\"background-color:black;\">
                <!-- Info boxes -->
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-6 col-xs-12\">
                        <div class=\"info-box-content\" style=\"background-color:black;\">
                            <span><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/fadcoplus.jpg"), "html", null, true);
        echo "\" style=\"width:80px; heigth:5px;\" alt=\"edgar\"/></span>
                            
                                <span style=\"color:green;\" class=\"info-box-number\">90 000 F</span>
                                <span class=\"info-box-text\" style=\"color:white;\">777777662(";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo ")</span>
                                <span class=\"info-box-text\" style=\"color:white;\">7878787812(";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo ")</span>
                            
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                </div>
                <!-- /.row -->
            </div>

    <div class=\"box box-primary\">
\t\t<div class=\"box-header with-border\">
\t\t\t<h4 class=\"box-title\">Nouveau réabo. direct</h4>
\t\t</div>
\t\t
\t\t<div class=\"box-body\">
\t\t    <div class=\"container modal-content\">
\t\t    \t<div class=\"col-sm-offset-2 col-sm-7\" >
\t\t\t\t\t
                    <form method=\"post\" action=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo_new");
        echo "\" name=\"fadcobundle_distributeur_new_reabo\" class=\"task-form\" id=\"fadcobundle_distributeur_new_reabo\">

                        <span>&nbsp;</span>

                        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"fa fa-oclock\"></i>Date : ";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y H:i:s"), "html", null, true);
        echo "</label>
                        </div>

                        <span>&nbsp;</span>

                        <div class=\"input-group\">
                            <span><b>1 - Identification</b></span>
                        </div>

                        <span>&nbsp;</span>

                        <div class=\"form-group\" id=\"choix\">
                            <label class=\"control-label\"><span style=\"color: red; margin-right: 2px;\">*</span>&nbsp;</label>&nbsp;&nbsp;&nbsp;
                            <input type=\"radio\" name=\"choix\" value=\"ancien\">Ancien abonné
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type=\"radio\" name=\"choix\" value=\"nouveau\">Nouvel abonné
                        </div>

                        <span>&nbsp;</span>

                        <div class=\"form-group\" id=\"auto\" style=\"display:none\">
                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"control-label\"></i>Abonné<span style=\"color: red; margin-right: 2px;\">* : </span></label>
                                <select name=\"fadcobundle_distributeur_new_reabo[abonnea]\" id=\"fadcobundle_distributeur_new_reabo_abonnea\" class=\"select2 form-control\" style=\"width: 100%;\">
                                    <option value=\"\">--</option>
                                    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["abonnes"] ?? $this->getContext($context, "abonnes")));
        foreach ($context['_seq'] as $context["_key"] => $context["abonne"]) {
            // line 67
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["abonne"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["abonne"], "name", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abonne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                                </select>
                            </div>

                            <span>&nbsp;</span>
        \t\t\t\t\t
        \t\t\t        <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"\"></i>Numéro carte : </label>
                                <input  value=\"\" id=\"fadcobundle_distributeur_new_reabo_carte\" data-url = \"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo_ancien_abonne_infos");
        echo "\" readonly class=\"form-control\"/>
                            </div>

                            <span>&nbsp;</span>

                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"\"></i>Numéro téléphone : </label>
                                <input value=\"\" id=\"fadcobundle_distributeur_new_reabo_contact\" readonly class=\"form-control\"/>
                            </div>
                        </div>

                        <div class=\"input-group\" id=\"data\" style=\"display:none\">
                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"\"></i>Abonné : </label>
                                <input name=\"fadcobundle_distributeur_new_reabo[abonned]\" class=\"form-control\"/>
                            </div>

                            <span>&nbsp;</span>
                            
                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"\"></i>Numéro carte : </label>
                                <input name=\"fadcobundle_distributeur_new_reabo[numeroCarte]\" class=\"form-control\"/>
                            </div>

                            <span>&nbsp;</span>

                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"\"></i>Numéro téléphone<span style=\"color: red; margin-right: 2px;\">*</span> : </label>
                                <input id=\"contact\" name=\"fadcobundle_distributeur_new_reabo[contact]\" class=\"form-control\"/>
                            </div>
                        </div>

                        <span>&nbsp;</span>

                        <div id=\"boutons\" style=\"display:none;\">
                            <div class=\"input-group\">
                                <span><b>2 - Réabonnement direct</b></span>
                            </div>

        \t\t\t        <span>&nbsp;</span>

        \t\t\t        <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"control-label\"></i>Formule : <span style=\"color: red; margin-right: 2px;\">*</span></label>
                                <select required name=\"fadcobundle_distributeur_new_reabo[formule]\" class=\"select2 form-control\" style=\"width: 100%;\">
                                    <option value=\"\">--</option>
                                    <option value=\"ACCESS\">ACCESS</option>
                                    <option value=\"ACCESS+\">ACCESS+</option>
                                    <option value=\"EVASION\">EVASION</option>
                                    <option value=\"EVASION+\">EVASION+</option>
                                    <option value=\"TOUT CANAL\">TOUT CANAL</option>
                                </select>
                            </div>

                            <span>&nbsp;</span>

                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"control-label\"></i>Durée : <span style=\"color: red; margin-right: 2px;\"></span></label>
                                <select name=\"fadcobundle_distributeur_new_reabo[duree]\" class=\"select2 form-control\" style=\"width: 100%;\">
                                    <option value=\"\">--</option>
                                    <option value=\"1 mois\">1 mois</option>
                                    <option value=\"3 mois\">3 mois</option>
                                    <option value=\"6 mois\">6 mois</option>
                                    <option value=\"12 mois\">12 mois</option>
                                </select>
                            </div>

                            <span>&nbsp;</span>

                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"control-label\"></i>Option : </label>
                                <select name=\"fadcobundle_distributeur_new_reabo[options]\" class=\"select2 form-control\" style=\"width: 100%;\">
                                    <option value=\"\">--</option>
                                    <option value=\"2ième ECRAN\">2ième ECRAN</option>
                                    <option value=\"CHARME\">CHARME</option>
                                    <option value=\"2ième ECRAN et CHARME\">2ième ECRAN et CHARME</option>
                                </select>
                            </div>

                            <span>&nbsp;</span>
                        

                            <div class=\"modal-footer\">
                                <div class=\"input-group pull-right\">
                                    <a href=\"";
        // line 159
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo");
        echo "\">
                                        <button type=\"button\" class=\"btn btn-default  pull-left\">Annuler</button>
                                    </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href=\"#\">
                                        <button type=\"submit\" class=\"btn btn-success\">Soumettre</button>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </form>
                    
                </div>
            </div> <!-- End div container -->
        </div>
        </div>
    </section>

    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/select2/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/timepicker/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/datepicker/locales/bootstrap-datepicker.fr.js"), "html", null, true);
        echo "\"></script>

    <script>
        //pieces jointes
        \$('#choix').focusout(function () {
            if ((\$('input[name=choix]:checked').val()) == 'ancien') {
                var e = document.getElementById('auto');
                var f = document.getElementById('data');
                var g = document.getElementById('boutons');
                e.style.display = 'block';
                g.style.display = 'block';
                f.style.display = 'none';
                \$('#contact').attr('required', false);
                \$('#fadcobundle_distributeur_new_reabo_abonnea').attr('required', true);
            }
            if ((\$('input[name=choix]:checked').val()) == 'nouveau') {
                var e = document.getElementById('auto');
                var f = document.getElementById('data');
                var g = document.getElementById('boutons');
                e.style.display = 'none';
                f.style.display = 'block';
                g.style.display = 'block';
                \$('#contact').attr('required', true);
                \$('#fadcobundle_distributeur_new_reabo_abonnea').attr('required', false);
            }
        });
        \$('#choix').on('click', function (e) {
            if ((\$('input[name=choix]:checked').val()) == 'ancien') {
                var e = document.getElementById('auto');
                var f = document.getElementById('data');
                var g = document.getElementById('boutons');
                e.style.display = 'block';
                g.style.display = 'block';
                f.style.display = 'none';
                \$('#contact').attr('required', false);
                \$('#fadcobundle_distributeur_new_reabo_abonnea').attr('required', true);
            }
            if ((\$('input[name=choix]:checked').val()) == 'nouveau') {
                var e = document.getElementById('auto');
                var f = document.getElementById('data');
                var g = document.getElementById('boutons');
                e.style.display = 'none';
                f.style.display = 'block';
                g.style.display = 'block';
                \$('#contact').attr('required', true);
                \$('#fadcobundle_distributeur_new_reabo_abonnea').attr('required', false);
            }
        });

    </script>

    <script>
    \$( function ()
    {
        \$('#fadcobundle_distributeur_new_reabo_abonnea').on('change', function(){
            
            \$element = \$(this);
            var id = \$element.val();

                \$.ajax({
                    url: \$('#fadcobundle_distributeur_new_reabo_carte').attr('data-url'),
                    type: 'GET',
                    data: 'id='+id,
                    dataType: 'json',

                    success: function(data, status){
                        \$('#fadcobundle_distributeur_new_reabo_carte').val(data.numeroCarte);
                        \$('#fadcobundle_distributeur_new_reabo_contact').val(data.contact);
                    },
                    error: function(status){
                        console.log('erreur'); 
                    }
                });
            
        });

    });
    </script>


    <script>
        \$(function () {
            \$(\".select2\").select2();
        });
    </script>

";
        
        $__internal_6a5c2997b01db55c8c6ae63e25b987c0a65c606dca442383a73762bfe5c867b7->leave($__internal_6a5c2997b01db55c8c6ae63e25b987c0a65c606dca442383a73762bfe5c867b7_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Distributeur:new-reabo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 181,  274 => 180,  270 => 179,  266 => 178,  262 => 177,  241 => 159,  155 => 76,  146 => 69,  135 => 67,  131 => 66,  103 => 41,  95 => 36,  73 => 17,  69 => 16,  63 => 13,  53 => 5,  47 => 4,  35 => 2,  11 => 1,);
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
{% block title %} Nouveau réabo. direct{% endblock %}

{% block content %}

    <section class=\"content\">
        
            <div class=\"box-body\" style=\"background-color:black;\">
                <!-- Info boxes -->
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-6 col-xs-12\">
                        <div class=\"info-box-content\" style=\"background-color:black;\">
                            <span><img src=\"{{ asset('bundles/FadcoBundle/fadcoplus.jpg') }}\" style=\"width:80px; heigth:5px;\" alt=\"edgar\"/></span>
                            
                                <span style=\"color:green;\" class=\"info-box-number\">90 000 F</span>
                                <span class=\"info-box-text\" style=\"color:white;\">777777662({{ app.user.username }})</span>
                                <span class=\"info-box-text\" style=\"color:white;\">7878787812({{ app.user.username }})</span>
                            
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                </div>
                <!-- /.row -->
            </div>

    <div class=\"box box-primary\">
\t\t<div class=\"box-header with-border\">
\t\t\t<h4 class=\"box-title\">Nouveau réabo. direct</h4>
\t\t</div>
\t\t
\t\t<div class=\"box-body\">
\t\t    <div class=\"container modal-content\">
\t\t    \t<div class=\"col-sm-offset-2 col-sm-7\" >
\t\t\t\t\t
                    <form method=\"post\" action=\"{{ path('fadco_espace_distributeur_reabo_new') }}\" name=\"fadcobundle_distributeur_new_reabo\" class=\"task-form\" id=\"fadcobundle_distributeur_new_reabo\">

                        <span>&nbsp;</span>

                        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"fa fa-oclock\"></i>Date : {{ 'now'|date('d/m/Y H:i:s') }}</label>
                        </div>

                        <span>&nbsp;</span>

                        <div class=\"input-group\">
                            <span><b>1 - Identification</b></span>
                        </div>

                        <span>&nbsp;</span>

                        <div class=\"form-group\" id=\"choix\">
                            <label class=\"control-label\"><span style=\"color: red; margin-right: 2px;\">*</span>&nbsp;</label>&nbsp;&nbsp;&nbsp;
                            <input type=\"radio\" name=\"choix\" value=\"ancien\">Ancien abonné
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type=\"radio\" name=\"choix\" value=\"nouveau\">Nouvel abonné
                        </div>

                        <span>&nbsp;</span>

                        <div class=\"form-group\" id=\"auto\" style=\"display:none\">
                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"control-label\"></i>Abonné<span style=\"color: red; margin-right: 2px;\">* : </span></label>
                                <select name=\"fadcobundle_distributeur_new_reabo[abonnea]\" id=\"fadcobundle_distributeur_new_reabo_abonnea\" class=\"select2 form-control\" style=\"width: 100%;\">
                                    <option value=\"\">--</option>
                                    {% for abonne in abonnes %}
                                        <option value=\"{{ abonne.id }}\">{{ abonne.name }}</option>
                                    {% endfor %}
                                </select>
                            </div>

                            <span>&nbsp;</span>
        \t\t\t\t\t
        \t\t\t        <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"\"></i>Numéro carte : </label>
                                <input  value=\"\" id=\"fadcobundle_distributeur_new_reabo_carte\" data-url = \"{{ path('fadco_espace_distributeur_reabo_ancien_abonne_infos') }}\" readonly class=\"form-control\"/>
                            </div>

                            <span>&nbsp;</span>

                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"\"></i>Numéro téléphone : </label>
                                <input value=\"\" id=\"fadcobundle_distributeur_new_reabo_contact\" readonly class=\"form-control\"/>
                            </div>
                        </div>

                        <div class=\"input-group\" id=\"data\" style=\"display:none\">
                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"\"></i>Abonné : </label>
                                <input name=\"fadcobundle_distributeur_new_reabo[abonned]\" class=\"form-control\"/>
                            </div>

                            <span>&nbsp;</span>
                            
                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"\"></i>Numéro carte : </label>
                                <input name=\"fadcobundle_distributeur_new_reabo[numeroCarte]\" class=\"form-control\"/>
                            </div>

                            <span>&nbsp;</span>

                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"\"></i>Numéro téléphone<span style=\"color: red; margin-right: 2px;\">*</span> : </label>
                                <input id=\"contact\" name=\"fadcobundle_distributeur_new_reabo[contact]\" class=\"form-control\"/>
                            </div>
                        </div>

                        <span>&nbsp;</span>

                        <div id=\"boutons\" style=\"display:none;\">
                            <div class=\"input-group\">
                                <span><b>2 - Réabonnement direct</b></span>
                            </div>

        \t\t\t        <span>&nbsp;</span>

        \t\t\t        <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"control-label\"></i>Formule : <span style=\"color: red; margin-right: 2px;\">*</span></label>
                                <select required name=\"fadcobundle_distributeur_new_reabo[formule]\" class=\"select2 form-control\" style=\"width: 100%;\">
                                    <option value=\"\">--</option>
                                    <option value=\"ACCESS\">ACCESS</option>
                                    <option value=\"ACCESS+\">ACCESS+</option>
                                    <option value=\"EVASION\">EVASION</option>
                                    <option value=\"EVASION+\">EVASION+</option>
                                    <option value=\"TOUT CANAL\">TOUT CANAL</option>
                                </select>
                            </div>

                            <span>&nbsp;</span>

                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"control-label\"></i>Durée : <span style=\"color: red; margin-right: 2px;\"></span></label>
                                <select name=\"fadcobundle_distributeur_new_reabo[duree]\" class=\"select2 form-control\" style=\"width: 100%;\">
                                    <option value=\"\">--</option>
                                    <option value=\"1 mois\">1 mois</option>
                                    <option value=\"3 mois\">3 mois</option>
                                    <option value=\"6 mois\">6 mois</option>
                                    <option value=\"12 mois\">12 mois</option>
                                </select>
                            </div>

                            <span>&nbsp;</span>

                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"control-label\"></i>Option : </label>
                                <select name=\"fadcobundle_distributeur_new_reabo[options]\" class=\"select2 form-control\" style=\"width: 100%;\">
                                    <option value=\"\">--</option>
                                    <option value=\"2ième ECRAN\">2ième ECRAN</option>
                                    <option value=\"CHARME\">CHARME</option>
                                    <option value=\"2ième ECRAN et CHARME\">2ième ECRAN et CHARME</option>
                                </select>
                            </div>

                            <span>&nbsp;</span>
                        

                            <div class=\"modal-footer\">
                                <div class=\"input-group pull-right\">
                                    <a href=\"{{ path('fadco_espace_distributeur_reabo') }}\">
                                        <button type=\"button\" class=\"btn btn-default  pull-left\">Annuler</button>
                                    </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href=\"#\">
                                        <button type=\"submit\" class=\"btn btn-success\">Soumettre</button>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </form>
                    
                </div>
            </div> <!-- End div container -->
        </div>
        </div>
    </section>

    <script src=\"{{ asset('bundles/FadcoBundle/plugins/jQuery/jQuery-2.1.4.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/FadcoBundle/plugins/select2/select2.full.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/FadcoBundle/plugins/timepicker/bootstrap-timepicker.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/FadcoBundle/plugins/datepicker/bootstrap-datepicker.js') }}\"></script>
    <script src=\"{{ asset('bundles/FadcoBundle/plugins/datepicker/locales/bootstrap-datepicker.fr.js') }}\"></script>

    <script>
        //pieces jointes
        \$('#choix').focusout(function () {
            if ((\$('input[name=choix]:checked').val()) == 'ancien') {
                var e = document.getElementById('auto');
                var f = document.getElementById('data');
                var g = document.getElementById('boutons');
                e.style.display = 'block';
                g.style.display = 'block';
                f.style.display = 'none';
                \$('#contact').attr('required', false);
                \$('#fadcobundle_distributeur_new_reabo_abonnea').attr('required', true);
            }
            if ((\$('input[name=choix]:checked').val()) == 'nouveau') {
                var e = document.getElementById('auto');
                var f = document.getElementById('data');
                var g = document.getElementById('boutons');
                e.style.display = 'none';
                f.style.display = 'block';
                g.style.display = 'block';
                \$('#contact').attr('required', true);
                \$('#fadcobundle_distributeur_new_reabo_abonnea').attr('required', false);
            }
        });
        \$('#choix').on('click', function (e) {
            if ((\$('input[name=choix]:checked').val()) == 'ancien') {
                var e = document.getElementById('auto');
                var f = document.getElementById('data');
                var g = document.getElementById('boutons');
                e.style.display = 'block';
                g.style.display = 'block';
                f.style.display = 'none';
                \$('#contact').attr('required', false);
                \$('#fadcobundle_distributeur_new_reabo_abonnea').attr('required', true);
            }
            if ((\$('input[name=choix]:checked').val()) == 'nouveau') {
                var e = document.getElementById('auto');
                var f = document.getElementById('data');
                var g = document.getElementById('boutons');
                e.style.display = 'none';
                f.style.display = 'block';
                g.style.display = 'block';
                \$('#contact').attr('required', true);
                \$('#fadcobundle_distributeur_new_reabo_abonnea').attr('required', false);
            }
        });

    </script>

    <script>
    \$( function ()
    {
        \$('#fadcobundle_distributeur_new_reabo_abonnea').on('change', function(){
            
            \$element = \$(this);
            var id = \$element.val();

                \$.ajax({
                    url: \$('#fadcobundle_distributeur_new_reabo_carte').attr('data-url'),
                    type: 'GET',
                    data: 'id='+id,
                    dataType: 'json',

                    success: function(data, status){
                        \$('#fadcobundle_distributeur_new_reabo_carte').val(data.numeroCarte);
                        \$('#fadcobundle_distributeur_new_reabo_contact').val(data.contact);
                    },
                    error: function(status){
                        console.log('erreur'); 
                    }
                });
            
        });

    });
    </script>


    <script>
        \$(function () {
            \$(\".select2\").select2();
        });
    </script>

{% endblock %}", "FadcoBundle:Distributeur:new-reabo.html.twig", "/var/www/html/fadcoplus/src/FadcoBundle/Resources/views/Distributeur/new-reabo.html.twig");
    }
}
