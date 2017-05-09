<?php

/* FadcoBundle:Prestataire:popups.html.twig */
class __TwigTemplate_e1296976f29dab3e3abf4c9f8df4d16d83b88ac2a74f506d5d16a74c455a1d6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0466d1b50ee2af64c4acdb12fc937b265917781795b766822bc64a987985334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0466d1b50ee2af64c4acdb12fc937b265917781795b766822bc64a987985334->enter($__internal_d0466d1b50ee2af64c4acdb12fc937b265917781795b766822bc64a987985334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Prestataire:popups.html.twig"));

        // line 2
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/GSPBundle/plugins/datepicker/datepicker3.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/GSPBundle/Materiel/css/materiel.css"), "html", null, true);
        echo "\"/>
<div id=\"formModal\" class=\"modal fade\" role=\"dialog\" >
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            </div>
            <div id = \"formContentBox\"></div>
            ";
        // line 12
        echo "            ";
        // line 13
        echo "        </div>
    </div>
</div>

<div id=\"detail-affectation\"  class=\"modal\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-body\">

            </div>
        </div>
    </div>
</div>

<div id=\"formEcheancierModal\" class=\"modal fade\" role=\"dialog\" >
    <div class=\"modal-dialog\">
        <div class=\"modal-content modal-lg\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            </div>
            <div id = \"formEcheancierContentBox\"></div>
        </div>
    </div>
</div>

<div class=\"modal hide\" id=\"pleaseWaitDialog\" data-backdrop=\"static\" data-keyboard=\"false\">
    ";
        // line 41
        echo "    ";
        // line 42
        echo "    <div class=\"modal-body\" style=\"position:absolute;
                                    left: 50%;
                                    top: 50%;
                                    width: 200px;
                                    /*height: 200px;*/
                                    margin-left: -100px;
                                    margin-top: -100px;
                                    background-color: rgba(0, 0, 0, 0);
                                    \">
        <div class=\"progress progress-striped active\" style=\"text-align: center; height: 100px; background-color: rgba(0, 0, 0, 0);\">
            <div class=\"bar\">
                <i class=\"fa fa-circle-o-notch fa-spin fa-5x fa-fw\" style=\"color: #f5f5f5;\"></i>
                ";
        // line 55
        echo "            </div>
        </div>
    </div>
</div>
<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/GSPBundle/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/GSPBundle/plugins/datepicker/locales/bootstrap-datepicker.fr.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_d0466d1b50ee2af64c4acdb12fc937b265917781795b766822bc64a987985334->leave($__internal_d0466d1b50ee2af64c4acdb12fc937b265917781795b766822bc64a987985334_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Prestataire:popups.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 60,  91 => 59,  85 => 55,  71 => 42,  69 => 41,  40 => 13,  38 => 12,  27 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#<link rel=\"stylesheet\" href=\"{{asset('bundles/GSPBundle/plugins/select2/select2.min.css')}}\" />#}
<link rel=\"stylesheet\" href=\"{{asset('bundles/GSPBundle/plugins/datepicker/datepicker3.css')}}\" />
<link rel=\"stylesheet\" href=\"{{ asset('bundles/GSPBundle/Materiel/css/materiel.css') }}\"/>
<div id=\"formModal\" class=\"modal fade\" role=\"dialog\" >
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            </div>
            <div id = \"formContentBox\"></div>
            {#{{ render(controller('GSPBundle:Accueil:detailsVisiteur', {'id' : 'test' })) }}#}
            {#{{ include('GSPBundle:Accueil:visiteur.details.popup.html.twig') }}#}
        </div>
    </div>
</div>

<div id=\"detail-affectation\"  class=\"modal\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-body\">

            </div>
        </div>
    </div>
</div>

<div id=\"formEcheancierModal\" class=\"modal fade\" role=\"dialog\" >
    <div class=\"modal-dialog\">
        <div class=\"modal-content modal-lg\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            </div>
            <div id = \"formEcheancierContentBox\"></div>
        </div>
    </div>
</div>

<div class=\"modal hide\" id=\"pleaseWaitDialog\" data-backdrop=\"static\" data-keyboard=\"false\">
    {# Remplacer l'effet 'mode hide' par 'modal fade' pour voir le favicon d'attente#}
    {#<div class=\"modal-header\"><h1>Veillez patientez...</h1></div>#}
    <div class=\"modal-body\" style=\"position:absolute;
                                    left: 50%;
                                    top: 50%;
                                    width: 200px;
                                    /*height: 200px;*/
                                    margin-left: -100px;
                                    margin-top: -100px;
                                    background-color: rgba(0, 0, 0, 0);
                                    \">
        <div class=\"progress progress-striped active\" style=\"text-align: center; height: 100px; background-color: rgba(0, 0, 0, 0);\">
            <div class=\"bar\">
                <i class=\"fa fa-circle-o-notch fa-spin fa-5x fa-fw\" style=\"color: #f5f5f5;\"></i>
                {#<span class=\"sr-only\">Veillez patientez...</span>#}
            </div>
        </div>
    </div>
</div>
<script src=\"{{asset('bundles/GSPBundle/plugins/datepicker/bootstrap-datepicker.js')}}\"></script>
<script src=\"{{asset('bundles/GSPBundle/plugins/datepicker/locales/bootstrap-datepicker.fr.js')}}\"></script>
", "FadcoBundle:Prestataire:popups.html.twig", "/var/www/html/fadcoplus/src/FadcoBundle/Resources/views/Prestataire/popups.html.twig");
    }
}
