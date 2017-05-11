<?php

/* FadcoBundle:Distributeur:new-repair.html.twig */
class __TwigTemplate_ade6946ba777b50536ca8e211311c9f862d81ff71eb8ecefc92520f2226a9008 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FadcoBundle:Default:menu.html.twig", "FadcoBundle:Distributeur:new-repair.html.twig", 1);
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
        $__internal_ff6312893a3c689eaeec14d7359308ccc997c8d9e641d6aeac1ffc68d358825d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff6312893a3c689eaeec14d7359308ccc997c8d9e641d6aeac1ffc68d358825d->enter($__internal_ff6312893a3c689eaeec14d7359308ccc997c8d9e641d6aeac1ffc68d358825d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Distributeur:new-repair.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff6312893a3c689eaeec14d7359308ccc997c8d9e641d6aeac1ffc68d358825d->leave($__internal_ff6312893a3c689eaeec14d7359308ccc997c8d9e641d6aeac1ffc68d358825d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0494c8e215608d75c37771001c890ddc0ac1ddc6eaed594978586697464fc02f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0494c8e215608d75c37771001c890ddc0ac1ddc6eaed594978586697464fc02f->enter($__internal_0494c8e215608d75c37771001c890ddc0ac1ddc6eaed594978586697464fc02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Nouvelle prestation";
        
        $__internal_0494c8e215608d75c37771001c890ddc0ac1ddc6eaed594978586697464fc02f->leave($__internal_0494c8e215608d75c37771001c890ddc0ac1ddc6eaed594978586697464fc02f_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_2e2549909aa28b8660e49608c9a27d724668e6e2411b93ec80cab9932697514b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e2549909aa28b8660e49608c9a27d724668e6e2411b93ec80cab9932697514b->enter($__internal_2e2549909aa28b8660e49608c9a27d724668e6e2411b93ec80cab9932697514b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo ")</span>
                                <span class=\"info-box-text\" style=\"color:white;\">7878787812(";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
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
\t\t\t<h4 class=\"box-title\">Nouvelle prestataion</h4>
\t\t</div>
\t\t
\t\t<div class=\"box-body\">
\t\t    <div class=\"container modal-content\">
\t\t    \t<div class=\"col-sm-offset-2 col-sm-7\" >
\t\t\t\t\t
                    <form method=\"post\" action=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_repair_new");
        echo "\" name=\"fadcobundle_distributeur_new_repair\" id=\"fadcobundle_distributeur_new_repair\">

                        <span>&nbsp;</span>

                        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"fa fa-oclock\"></i>Date : ";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y H:i:s"), "html", null, true);
        echo "</label>
                        </div>

                        <span>&nbsp;</span>

                        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"control-label\"></i>Abonné<span style=\"color: red; margin-right: 2px;\">* : </span></label>
                            <select name=\"fadcobundle_distributeur_new_repair[abonne]\" id=\"fadcobundle_distributeur_new_repair_abonne\" required class=\"form-control\" style=\"width: 100%;\">
                                <option value=\"\">--</option>
                                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abonnes"]) ? $context["abonnes"] : $this->getContext($context, "abonnes")));
        foreach ($context['_seq'] as $context["_key"] => $context["abonne"]) {
            // line 51
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["abonne"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["abonne"], "name", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abonne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                            </select>
                        </div>

                        <span>&nbsp;</span>
    \t\t\t\t\t
                        <div id=\"contact\" style=\"display:none\">
        \t\t\t        <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"\"></i>N° mobile : </label>
                                <input  value=\"\" id=\"fadcobundle_distributeur_new_repair_contact\" data-url = \"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_reabo_ancien_abonne_infos");
        echo "\" readonly class=\"form-control\"/>
                            </div>
                            <span>&nbsp;</span>
                        </div>

                        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"control-label\"></i>Type de prestation<span style=\"color: red; margin-right: 2px;\">* : </span></label>
                            <select required name=\"fadcobundle_distributeur_new_repair[type]\" class=\"form-control\" style=\"width: 100%;\">
                                <option value=\"\">--</option>
                                <option value=\"Nouvelle installation\">Nouvelle installation</option>
                                <option value=\"Réinstallation\">Réinstallation</option>
                                <option value=\"Réparation\">Réparation</option>
                                <option value=\"Visite de site\">Visite de site</option>
                            </select>
                        </div>

                        <span>&nbsp;</span>  

                        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"\"></i>Lieu de la prestation<span style=\"color: red; margin-right: 2px;\">* : </span></label>
                            <textarea name=\"fadcobundle_distributeur_new_repair[lieu]\" class=\"form-control\"></textarea>
                        </div>

                        <span>&nbsp;</span> 

                        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"control-label\"></i>Forme de maison<span style=\"color: red; margin-right: 2px;\">* : </span></label>
                            <select required name=\"fadcobundle_distributeur_new_repair[forme]\" class=\"form-control\" style=\"width: 100%;\">
                                <option value=\"\">--</option>
                                <option value=\"Immeuble\">Immeuble</option>
                                <option value=\"Villa\">Villa</option>
                                <option value=\"Ecole de base\">Ecole de base</option>
                            </select>
                        </div>

                        <span>&nbsp;</span>  

                        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"control-label\"></i>Endroit propice pour l'installation<span style=\"color: red; margin-right: 2px;\">* : </span></label>
                            <select required name=\"fadcobundle_distributeur_new_repair[endroit]\" class=\"form-control\" style=\"width: 100%;\">
                                <option value=\"\">--</option>
                                <option value=\"Dalle\">Dalle</option>
                                <option value=\"Mur\">Mur</option>
                                <option value=\"Charpente\">Charpente</option>
                            </select>
                        </div>

                        <span>&nbsp;</span>  

                        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"control-label\"></i>Montant de la prestation<span style=\"color: red; margin-right: 2px;\">* : </span></label>
                            <select required name=\"fadcobundle_distributeur_new_repair[montant]\" class=\"form-control\" style=\"width: 100%;\">
                                <option value=\"\">--</option>
                                <option value=\"2000\">2.000</option>
                                <option value=\"3000\">3.000</option>
                                <option value=\"5000\">5.000</option>
                                <option value=\"7000\">7.000</option>
                            </select>
                        </div>

                        <span>&nbsp;</span>                                                

                        <div class=\"modal-footer\">
                            <div class=\"input-group pull-right\">
                                <a href=\"";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fadco_espace_distributeur_repair");
        echo "\">
                                    <button type=\"button\" class=\"btn btn-default  pull-left\">Annuler</button>
                                </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href=\"#\">
                                    <button type=\"submit\" class=\"btn btn-success\">Soumettre</button>
                                </a>
                            </div>
                        </div>
                        

                    </form>
                    
                </div>
            </div> <!-- End div container -->
        </div>
        </div>
    </section>

    <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>

    <script>
        \$( function ()
        {
            \$('#fadcobundle_distributeur_new_repair_abonne').on('change', function(){
                
                \$element = \$(this);
                var id = \$element.val();

                if( id == \"\"){
                    var e = document.getElementById('contact');
                    e.style.display = 'none';
                }else{
                    var e = document.getElementById('contact');
                    e.style.display = 'block';
                }

                \$.ajax({
                    url: \$('#fadcobundle_distributeur_new_repair_contact').attr('data-url'),
                    type: 'GET',
                    data: 'id='+id,
                    dataType: 'json',

                    success: function(data, status){
                        \$('#fadcobundle_distributeur_new_repair_contact').val(data.contact);
                    },
                    error: function(status){
                        console.log('erreur'); 
                    }
                });
                
            });

        });
    </script>

";
        
        $__internal_2e2549909aa28b8660e49608c9a27d724668e6e2411b93ec80cab9932697514b->leave($__internal_2e2549909aa28b8660e49608c9a27d724668e6e2411b93ec80cab9932697514b_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Distributeur:new-repair.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 143,  207 => 125,  140 => 61,  130 => 53,  119 => 51,  115 => 50,  103 => 41,  95 => 36,  73 => 17,  69 => 16,  63 => 13,  53 => 5,  47 => 4,  35 => 2,  11 => 1,);
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
{% block title %} Nouvelle prestation{% endblock %}

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
\t\t\t<h4 class=\"box-title\">Nouvelle prestataion</h4>
\t\t</div>
\t\t
\t\t<div class=\"box-body\">
\t\t    <div class=\"container modal-content\">
\t\t    \t<div class=\"col-sm-offset-2 col-sm-7\" >
\t\t\t\t\t
                    <form method=\"post\" action=\"{{ path('fadco_espace_distributeur_repair_new') }}\" name=\"fadcobundle_distributeur_new_repair\" id=\"fadcobundle_distributeur_new_repair\">

                        <span>&nbsp;</span>

                        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"fa fa-oclock\"></i>Date : {{ 'now'|date('d/m/Y H:i:s') }}</label>
                        </div>

                        <span>&nbsp;</span>

                        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"control-label\"></i>Abonné<span style=\"color: red; margin-right: 2px;\">* : </span></label>
                            <select name=\"fadcobundle_distributeur_new_repair[abonne]\" id=\"fadcobundle_distributeur_new_repair_abonne\" required class=\"form-control\" style=\"width: 100%;\">
                                <option value=\"\">--</option>
                                {% for abonne in abonnes %}
                                    <option value=\"{{ abonne.id }}\">{{ abonne.name }}</option>
                                {% endfor %}
                            </select>
                        </div>

                        <span>&nbsp;</span>
    \t\t\t\t\t
                        <div id=\"contact\" style=\"display:none\">
        \t\t\t        <div class=\"input-group\">
                                <label class=\"input-group-addon\"><i class=\"\"></i>N° mobile : </label>
                                <input  value=\"\" id=\"fadcobundle_distributeur_new_repair_contact\" data-url = \"{{ path('fadco_espace_distributeur_reabo_ancien_abonne_infos') }}\" readonly class=\"form-control\"/>
                            </div>
                            <span>&nbsp;</span>
                        </div>

                        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"control-label\"></i>Type de prestation<span style=\"color: red; margin-right: 2px;\">* : </span></label>
                            <select required name=\"fadcobundle_distributeur_new_repair[type]\" class=\"form-control\" style=\"width: 100%;\">
                                <option value=\"\">--</option>
                                <option value=\"Nouvelle installation\">Nouvelle installation</option>
                                <option value=\"Réinstallation\">Réinstallation</option>
                                <option value=\"Réparation\">Réparation</option>
                                <option value=\"Visite de site\">Visite de site</option>
                            </select>
                        </div>

                        <span>&nbsp;</span>  

                        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"\"></i>Lieu de la prestation<span style=\"color: red; margin-right: 2px;\">* : </span></label>
                            <textarea name=\"fadcobundle_distributeur_new_repair[lieu]\" class=\"form-control\"></textarea>
                        </div>

                        <span>&nbsp;</span> 

                        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"control-label\"></i>Forme de maison<span style=\"color: red; margin-right: 2px;\">* : </span></label>
                            <select required name=\"fadcobundle_distributeur_new_repair[forme]\" class=\"form-control\" style=\"width: 100%;\">
                                <option value=\"\">--</option>
                                <option value=\"Immeuble\">Immeuble</option>
                                <option value=\"Villa\">Villa</option>
                                <option value=\"Ecole de base\">Ecole de base</option>
                            </select>
                        </div>

                        <span>&nbsp;</span>  

                        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"control-label\"></i>Endroit propice pour l'installation<span style=\"color: red; margin-right: 2px;\">* : </span></label>
                            <select required name=\"fadcobundle_distributeur_new_repair[endroit]\" class=\"form-control\" style=\"width: 100%;\">
                                <option value=\"\">--</option>
                                <option value=\"Dalle\">Dalle</option>
                                <option value=\"Mur\">Mur</option>
                                <option value=\"Charpente\">Charpente</option>
                            </select>
                        </div>

                        <span>&nbsp;</span>  

                        <div class=\"input-group\">
                            <label class=\"input-group-addon\"><i class=\"control-label\"></i>Montant de la prestation<span style=\"color: red; margin-right: 2px;\">* : </span></label>
                            <select required name=\"fadcobundle_distributeur_new_repair[montant]\" class=\"form-control\" style=\"width: 100%;\">
                                <option value=\"\">--</option>
                                <option value=\"2000\">2.000</option>
                                <option value=\"3000\">3.000</option>
                                <option value=\"5000\">5.000</option>
                                <option value=\"7000\">7.000</option>
                            </select>
                        </div>

                        <span>&nbsp;</span>                                                

                        <div class=\"modal-footer\">
                            <div class=\"input-group pull-right\">
                                <a href=\"{{ path('fadco_espace_distributeur_repair') }}\">
                                    <button type=\"button\" class=\"btn btn-default  pull-left\">Annuler</button>
                                </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href=\"#\">
                                    <button type=\"submit\" class=\"btn btn-success\">Soumettre</button>
                                </a>
                            </div>
                        </div>
                        

                    </form>
                    
                </div>
            </div> <!-- End div container -->
        </div>
        </div>
    </section>

    <script src=\"{{ asset('bundles/FadcoBundle/plugins/jQuery/jQuery-2.1.4.min.js') }}\"></script>

    <script>
        \$( function ()
        {
            \$('#fadcobundle_distributeur_new_repair_abonne').on('change', function(){
                
                \$element = \$(this);
                var id = \$element.val();

                if( id == \"\"){
                    var e = document.getElementById('contact');
                    e.style.display = 'none';
                }else{
                    var e = document.getElementById('contact');
                    e.style.display = 'block';
                }

                \$.ajax({
                    url: \$('#fadcobundle_distributeur_new_repair_contact').attr('data-url'),
                    type: 'GET',
                    data: 'id='+id,
                    dataType: 'json',

                    success: function(data, status){
                        \$('#fadcobundle_distributeur_new_repair_contact').val(data.contact);
                    },
                    error: function(status){
                        console.log('erreur'); 
                    }
                });
                
            });

        });
    </script>

{% endblock %}", "FadcoBundle:Distributeur:new-repair.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\src\\FadcoBundle/Resources/views/Distributeur/new-repair.html.twig");
    }
}
