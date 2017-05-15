<?php

/* FadcoBundle:Distributeur:new-reabo-complement.html.twig */
class __TwigTemplate_4e67a703c1d2a493e94bf3adf49137ae03a02d2afc80067e82e03e742fdbd2a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FadcoBundle:Default:menu.html.twig", "FadcoBundle:Distributeur:new-reabo-complement.html.twig", 1);
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
        $__internal_bb4e874b7c6aef984205aa2908794e0040d7345d2e62689058129c6c45d96a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb4e874b7c6aef984205aa2908794e0040d7345d2e62689058129c6c45d96a13->enter($__internal_bb4e874b7c6aef984205aa2908794e0040d7345d2e62689058129c6c45d96a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Distributeur:new-reabo-complement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb4e874b7c6aef984205aa2908794e0040d7345d2e62689058129c6c45d96a13->leave($__internal_bb4e874b7c6aef984205aa2908794e0040d7345d2e62689058129c6c45d96a13_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_db55ac1231e271feec5962cb376726dfae6b15e0cb6cd6ba2b5b3b31c5f134f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db55ac1231e271feec5962cb376726dfae6b15e0cb6cd6ba2b5b3b31c5f134f9->enter($__internal_db55ac1231e271feec5962cb376726dfae6b15e0cb6cd6ba2b5b3b31c5f134f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Nouveau complément";
        
        $__internal_db55ac1231e271feec5962cb376726dfae6b15e0cb6cd6ba2b5b3b31c5f134f9->leave($__internal_db55ac1231e271feec5962cb376726dfae6b15e0cb6cd6ba2b5b3b31c5f134f9_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_6d00e1efef799974bde6423c86cf00179e7fafa5f010d7a0bc572fa242dabee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d00e1efef799974bde6423c86cf00179e7fafa5f010d7a0bc572fa242dabee5->enter($__internal_6d00e1efef799974bde6423c86cf00179e7fafa5f010d7a0bc572fa242dabee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                            
                                <span style=\"color:green;\" class=\"info-box-number\">";
        // line 15
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "account", array()), 0, ".", " "), "html", null, true);
        echo " F</span>
                                <span class=\"info-box-text\" style=\"color:white;\">(";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
        echo ")</span>
                                ";
        // line 19
        echo "                            
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                </div>
                <!-- /.row -->
            </div>

    <div class=\"box box-primary\">
\t\t<div class=\"box-header with-border\">
\t\t\t<h4 class=\"box-title\">Nouveau complément</h4>
\t\t</div>
\t\t
\t\t<div class=\"box-body\">
\t\t    <div class=\"container modal-content\">
\t\t    \t<div class=\"col-sm-offset-2 col-sm-7\" >
\t\t\t\t\t
                    <form method=\"post\" action=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo_complement_new");
        echo "\" name=\"fadcobundle_distributeur_new_reabo_complement\" id=\"fadcobundle_distributeur_new_reabo_complement\">

                        <span>&nbsp;</span>

                        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"fa fa-oclock\"></i>Date : ";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y H:i:s"), "html", null, true);
        echo "</label>
                        </div>

                        <span>&nbsp;</span>

                        <div class=\"form-group\" id=\"choix\">
                            <label class=\"control-label\"><span style=\"color: red; margin-right: 2px;\">*</span>&nbsp;</label>&nbsp;&nbsp;&nbsp;
                            <input type=\"radio\" name=\"choix\" value=\"ancien\">Ancien réabonnement
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type=\"radio\" name=\"choix\" value=\"nouveau\">Nouveau
                        </div>

                        <span>&nbsp;</span>

                        <div class=\"form-group\" id=\"auto\" style=\"display:none\">

                            <div class=\"input-group\">
                                <span><b>*- Ancienne offre</b></span>
                            </div>

                            <span>&nbsp;</span>

                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"control-label\"></i>Réabonnement<span style=\"color: red; margin-right: 2px;\">* : </span></label>
                                <select name=\"fadcobundle_distributeur_new_reabo_complement[reabo]\" id=\"fadcobundle_distributeur_new_reabo_complement_reabo\" class=\"select2 form-control\" style=\"width: 100%;\">
                                    <option value=\"\">--</option>
                                    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reabos"]) ? $context["reabos"] : $this->getContext($context, "reabos")));
        foreach ($context['_seq'] as $context["_key"] => $context["reabo"]) {
            // line 69
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reabo"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reabo"], "abonne", array()), "html", null, true);
            if ($this->getAttribute($context["reabo"], "numeroCarte", array())) {
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reabo"], "numeroCarte", array()), "html", null, true);
            }
            if ($this->getAttribute($context["reabo"], "numeroAbonne", array())) {
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reabo"], "numeroAbonne", array()), "html", null, true);
                echo " / ";
            }
            echo twig_escape_filter($this->env, $this->getAttribute($context["reabo"], "formule", array()), "html", null, true);
            if ($this->getAttribute($context["reabo"], "options", array())) {
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reabo"], "options", array()), "html", null, true);
            }
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reabo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                                </select>
                            </div>
                        </div>

                        <div class=\"input-group\" id=\"data\" style=\"display:none\">

                            <div class=\"input-group\">
                                <span><b>*- Infos sur l'abonné </b></span>
                            </div>

                            <span>&nbsp;</span>

                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"\"></i>N° abonné : </label>
                                <input name=\"fadcobundle_distributeur_new_reabo_complement[numeroAbonne]\" class=\"form-control\"/>
                            </div>

                            <span>&nbsp;</span>
                            
                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"\"></i>N° carte : </label>
                                <input maxlength=\"14\" minlength=\"14\" name=\"fadcobundle_distributeur_new_reabo_complement[numeroCarte]\" class=\"form-control\"/>
                            </div>

                            <span>&nbsp;</span>
                            
                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"\"></i>Nom : </label>
                                <input name=\"fadcobundle_distributeur_new_reabo_complement[nom]\" class=\"form-control\"/>
                            </div>

                            <span>&nbsp;</span>
                            
                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"\"></i>Prénom(s) : </label>
                                <input name=\"fadcobundle_distributeur_new_reabo_complement[prenom]\" class=\"form-control\"/>
                            </div>

                            <span>&nbsp;</span>

                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"\"></i>N° téléphone<span style=\"color: red; margin-right: 2px;\">*</span> : </label>
                                <input required maxlength=\"8\" minlength=\"8\" id=\"contact\" name=\"fadcobundle_distributeur_new_reabo_complement[contact]\" class=\"form-control\"/>
                            </div>

                            <span>&nbsp;</span>

                            <div class=\"input-group\">
                                <span><b>*- Ancienne offre </b></span>
                            </div>

                            <span>&nbsp;</span>

                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"control-label\"></i>Formule : <span style=\"color: red; margin-right: 2px;\">*</span></label>
                                <select id=\"fadcobundle_distributeur_new_reabo_complement_formuleOld\" name=\"fadcobundle_distributeur_new_reabo_complement[formuleOld]\" class=\"select2 form-control\" style=\"width: 100%;\">
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
                                <label class=\"input-group-addon\"><i class=\"control-label\"></i>Option : </label>
                                <select name=\"fadcobundle_distributeur_new_reabo_complement[optionsOld]\" class=\"select2 form-control\" style=\"width: 100%;\">
                                    <option value=\"\">--</option>
                                    <option value=\"2ième ECRAN\">2ième ECRAN</option>
                                    <option value=\"CHARME\">CHARME</option>
                                    <option value=\"2ième ECRAN et CHARME\">2ième ECRAN et CHARME</option>
                                </select>
                            </div>

                        </div>

                        <span>&nbsp;</span>

                        <div id=\"boutons\" style=\"display:none;\">

                            <span>&nbsp;</span>

                            <div class=\"input-group\">
                                <span><b>*- Complément vers </b></span>
                            </div>

                            <span>&nbsp;</span>

        \t\t\t        <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"control-label\"></i>Formule : <span style=\"color: red; margin-right: 2px;\">*</span></label>
                                <select required name=\"fadcobundle_distributeur_new_reabo_complement[formule]\" class=\"select2 form-control\" style=\"width: 100%;\">
                                    <option value=\"\">--</option>
                                    ";
        // line 167
        echo "                                    <option value=\"ACCESS+\">ACCESS+</option>
                                    <option value=\"EVASION\">EVASION</option>
                                    <option value=\"EVASION+\">EVASION+</option>
                                    <option value=\"TOUT CANAL\">TOUT CANAL</option>
                                </select>
                            </div>

                            <span>&nbsp;</span>

                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"control-label\"></i>Option : </label>
                                <select name=\"fadcobundle_distributeur_new_reabo_complement[options]\" class=\"select2 form-control\" style=\"width: 100%;\">
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
        // line 191
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo_complement");
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
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/select2/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/timepicker/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 213
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
                \$('#fadcobundle_distributeur_new_reabo_complement_reabo').attr('required', true);
                \$('#fadcobundle_distributeur_new_reabo_complement_formuleOld').attr('required', false);
            }
            if ((\$('input[name=choix]:checked').val()) == 'nouveau') {
                var e = document.getElementById('auto');
                var f = document.getElementById('data');
                var g = document.getElementById('boutons');
                e.style.display = 'none';
                f.style.display = 'block';
                g.style.display = 'block';
                \$('#contact').attr('required', true);
                \$('#fadcobundle_distributeur_new_reabo_complement_reabo').attr('required', false);
                \$('#fadcobundle_distributeur_new_reabo_complement_formuleOld').attr('required', true);
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
                \$('#fadcobundle_distributeur_new_reabo_complement_reabo').attr('required', true);
                \$('#fadcobundle_distributeur_new_reabo_complement_formuleOld').attr('required', false);
            }
            if ((\$('input[name=choix]:checked').val()) == 'nouveau') {
                var e = document.getElementById('auto');
                var f = document.getElementById('data');
                var g = document.getElementById('boutons');
                e.style.display = 'none';
                f.style.display = 'block';
                g.style.display = 'block';
                \$('#contact').attr('required', true);
                \$('#fadcobundle_distributeur_new_reabo_complement_reabo').attr('required', false);
                \$('#fadcobundle_distributeur_new_reabo_complement_formuleOld').attr('required', true);
            }
        });

        \$(function () {
            \$(\".select2\").select2();
        });
    </script>

";
        
        $__internal_6d00e1efef799974bde6423c86cf00179e7fafa5f010d7a0bc572fa242dabee5->leave($__internal_6d00e1efef799974bde6423c86cf00179e7fafa5f010d7a0bc572fa242dabee5_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Distributeur:new-reabo-complement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 213,  318 => 212,  314 => 211,  310 => 210,  306 => 209,  285 => 191,  259 => 167,  162 => 71,  137 => 69,  133 => 68,  104 => 42,  96 => 37,  76 => 19,  72 => 16,  68 => 15,  63 => 13,  53 => 5,  47 => 4,  35 => 2,  11 => 1,);
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
{% block title %} Nouveau complément{% endblock %}

{% block content %}

    <section class=\"content\">
        
            <div class=\"box-body\" style=\"background-color:black;\">
                <!-- Info boxes -->
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-6 col-xs-12\">
                        <div class=\"info-box-content\" style=\"background-color:black;\">
                            <span><img src=\"{{ asset('bundles/FadcoBundle/fadcoplus.jpg') }}\" style=\"width:80px; heigth:5px;\" alt=\"edgar\"/></span>
                            
                                <span style=\"color:green;\" class=\"info-box-number\">{{ app.user.account|number_format(0,'.',' ') }} F</span>
                                <span class=\"info-box-text\" style=\"color:white;\">({{ app.user.name }})</span>
                                {#<span class=\"info-box-text\" style=\"color:white;\">777777662({{ app.user.username }})</span>
                                <span class=\"info-box-text\" style=\"color:white;\">7878787812({{ app.user.username }})</span>#}
                            
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                </div>
                <!-- /.row -->
            </div>

    <div class=\"box box-primary\">
\t\t<div class=\"box-header with-border\">
\t\t\t<h4 class=\"box-title\">Nouveau complément</h4>
\t\t</div>
\t\t
\t\t<div class=\"box-body\">
\t\t    <div class=\"container modal-content\">
\t\t    \t<div class=\"col-sm-offset-2 col-sm-7\" >
\t\t\t\t\t
                    <form method=\"post\" action=\"{{ path('fadco_espace_distributeur_reabo_complement_new') }}\" name=\"fadcobundle_distributeur_new_reabo_complement\" id=\"fadcobundle_distributeur_new_reabo_complement\">

                        <span>&nbsp;</span>

                        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"fa fa-oclock\"></i>Date : {{ 'now'|date('d/m/Y H:i:s') }}</label>
                        </div>

                        <span>&nbsp;</span>

                        <div class=\"form-group\" id=\"choix\">
                            <label class=\"control-label\"><span style=\"color: red; margin-right: 2px;\">*</span>&nbsp;</label>&nbsp;&nbsp;&nbsp;
                            <input type=\"radio\" name=\"choix\" value=\"ancien\">Ancien réabonnement
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type=\"radio\" name=\"choix\" value=\"nouveau\">Nouveau
                        </div>

                        <span>&nbsp;</span>

                        <div class=\"form-group\" id=\"auto\" style=\"display:none\">

                            <div class=\"input-group\">
                                <span><b>*- Ancienne offre</b></span>
                            </div>

                            <span>&nbsp;</span>

                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"control-label\"></i>Réabonnement<span style=\"color: red; margin-right: 2px;\">* : </span></label>
                                <select name=\"fadcobundle_distributeur_new_reabo_complement[reabo]\" id=\"fadcobundle_distributeur_new_reabo_complement_reabo\" class=\"select2 form-control\" style=\"width: 100%;\">
                                    <option value=\"\">--</option>
                                    {% for reabo in reabos %}
                                        <option value=\"{{ reabo.id }}\">{{ reabo.abonne }}{% if reabo.numeroCarte %} / {{ reabo.numeroCarte }}{% endif %}{% if reabo.numeroAbonne %} / {{ reabo.numeroAbonne }} / {% endif %}{{ reabo.formule }}{% if reabo.options %} / {{ reabo.options }}{% endif %}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>

                        <div class=\"input-group\" id=\"data\" style=\"display:none\">

                            <div class=\"input-group\">
                                <span><b>*- Infos sur l'abonné </b></span>
                            </div>

                            <span>&nbsp;</span>

                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"\"></i>N° abonné : </label>
                                <input name=\"fadcobundle_distributeur_new_reabo_complement[numeroAbonne]\" class=\"form-control\"/>
                            </div>

                            <span>&nbsp;</span>
                            
                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"\"></i>N° carte : </label>
                                <input maxlength=\"14\" minlength=\"14\" name=\"fadcobundle_distributeur_new_reabo_complement[numeroCarte]\" class=\"form-control\"/>
                            </div>

                            <span>&nbsp;</span>
                            
                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"\"></i>Nom : </label>
                                <input name=\"fadcobundle_distributeur_new_reabo_complement[nom]\" class=\"form-control\"/>
                            </div>

                            <span>&nbsp;</span>
                            
                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"\"></i>Prénom(s) : </label>
                                <input name=\"fadcobundle_distributeur_new_reabo_complement[prenom]\" class=\"form-control\"/>
                            </div>

                            <span>&nbsp;</span>

                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"\"></i>N° téléphone<span style=\"color: red; margin-right: 2px;\">*</span> : </label>
                                <input required maxlength=\"8\" minlength=\"8\" id=\"contact\" name=\"fadcobundle_distributeur_new_reabo_complement[contact]\" class=\"form-control\"/>
                            </div>

                            <span>&nbsp;</span>

                            <div class=\"input-group\">
                                <span><b>*- Ancienne offre </b></span>
                            </div>

                            <span>&nbsp;</span>

                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"control-label\"></i>Formule : <span style=\"color: red; margin-right: 2px;\">*</span></label>
                                <select id=\"fadcobundle_distributeur_new_reabo_complement_formuleOld\" name=\"fadcobundle_distributeur_new_reabo_complement[formuleOld]\" class=\"select2 form-control\" style=\"width: 100%;\">
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
                                <label class=\"input-group-addon\"><i class=\"control-label\"></i>Option : </label>
                                <select name=\"fadcobundle_distributeur_new_reabo_complement[optionsOld]\" class=\"select2 form-control\" style=\"width: 100%;\">
                                    <option value=\"\">--</option>
                                    <option value=\"2ième ECRAN\">2ième ECRAN</option>
                                    <option value=\"CHARME\">CHARME</option>
                                    <option value=\"2ième ECRAN et CHARME\">2ième ECRAN et CHARME</option>
                                </select>
                            </div>

                        </div>

                        <span>&nbsp;</span>

                        <div id=\"boutons\" style=\"display:none;\">

                            <span>&nbsp;</span>

                            <div class=\"input-group\">
                                <span><b>*- Complément vers </b></span>
                            </div>

                            <span>&nbsp;</span>

        \t\t\t        <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"control-label\"></i>Formule : <span style=\"color: red; margin-right: 2px;\">*</span></label>
                                <select required name=\"fadcobundle_distributeur_new_reabo_complement[formule]\" class=\"select2 form-control\" style=\"width: 100%;\">
                                    <option value=\"\">--</option>
                                    {#<option value=\"ACCESS\">ACCESS</option>#}
                                    <option value=\"ACCESS+\">ACCESS+</option>
                                    <option value=\"EVASION\">EVASION</option>
                                    <option value=\"EVASION+\">EVASION+</option>
                                    <option value=\"TOUT CANAL\">TOUT CANAL</option>
                                </select>
                            </div>

                            <span>&nbsp;</span>

                            <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"control-label\"></i>Option : </label>
                                <select name=\"fadcobundle_distributeur_new_reabo_complement[options]\" class=\"select2 form-control\" style=\"width: 100%;\">
                                    <option value=\"\">--</option>
                                    <option value=\"2ième ECRAN\">2ième ECRAN</option>
                                    <option value=\"CHARME\">CHARME</option>
                                    <option value=\"2ième ECRAN et CHARME\">2ième ECRAN et CHARME</option>
                                </select>
                            </div>

                            <span>&nbsp;</span>
                        

                            <div class=\"modal-footer\">
                                <div class=\"input-group pull-right\">
                                    <a href=\"{{ path('fadco_espace_distributeur_reabo_complement') }}\">
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
                \$('#fadcobundle_distributeur_new_reabo_complement_reabo').attr('required', true);
                \$('#fadcobundle_distributeur_new_reabo_complement_formuleOld').attr('required', false);
            }
            if ((\$('input[name=choix]:checked').val()) == 'nouveau') {
                var e = document.getElementById('auto');
                var f = document.getElementById('data');
                var g = document.getElementById('boutons');
                e.style.display = 'none';
                f.style.display = 'block';
                g.style.display = 'block';
                \$('#contact').attr('required', true);
                \$('#fadcobundle_distributeur_new_reabo_complement_reabo').attr('required', false);
                \$('#fadcobundle_distributeur_new_reabo_complement_formuleOld').attr('required', true);
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
                \$('#fadcobundle_distributeur_new_reabo_complement_reabo').attr('required', true);
                \$('#fadcobundle_distributeur_new_reabo_complement_formuleOld').attr('required', false);
            }
            if ((\$('input[name=choix]:checked').val()) == 'nouveau') {
                var e = document.getElementById('auto');
                var f = document.getElementById('data');
                var g = document.getElementById('boutons');
                e.style.display = 'none';
                f.style.display = 'block';
                g.style.display = 'block';
                \$('#contact').attr('required', true);
                \$('#fadcobundle_distributeur_new_reabo_complement_reabo').attr('required', false);
                \$('#fadcobundle_distributeur_new_reabo_complement_formuleOld').attr('required', true);
            }
        });

        \$(function () {
            \$(\".select2\").select2();
        });
    </script>

{% endblock %}", "FadcoBundle:Distributeur:new-reabo-complement.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\src\\FadcoBundle/Resources/views/Distributeur/new-reabo-complement.html.twig");
    }
}
