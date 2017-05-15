<?php

/* FadcoBundle:Prestataire:popups.html.twig */
class __TwigTemplate_37fee1e118c0954e717a9a694be73b7d1de2a33a38a6538e86940116e94dae73 extends Twig_Template
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
        $__internal_ff80da1d1754b1fe4ded8e6e8bce9b4ab4b0e1fb990a9fbc0b7d43a2ad905b16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff80da1d1754b1fe4ded8e6e8bce9b4ab4b0e1fb990a9fbc0b7d43a2ad905b16->enter($__internal_ff80da1d1754b1fe4ded8e6e8bce9b4ab4b0e1fb990a9fbc0b7d43a2ad905b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Prestataire:popups.html.twig"));

        // line 2
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/datepicker/datepicker3.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/Materiel/css/materiel.css"), "html", null, true);
        echo "\"/>
<div id=\"formModal\" class=\"modal fade\" role=\"dialog\" >
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            </div>
            <div id = \"formContentBox\"></div>
        </div>
    </div>
</div>

<div class=\"modal hide\" id=\"pleaseWaitDialog\" data-backdrop=\"static\" data-keyboard=\"false\">
    ";
        // line 17
        echo "    ";
        // line 18
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
        // line 31
        echo "            </div>
        </div>
    </div>
</div>
<script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/FadcoBundle/plugins/datepicker/locales/bootstrap-datepicker.fr.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_ff80da1d1754b1fe4ded8e6e8bce9b4ab4b0e1fb990a9fbc0b7d43a2ad905b16->leave($__internal_ff80da1d1754b1fe4ded8e6e8bce9b4ab4b0e1fb990a9fbc0b7d43a2ad905b16_prof);

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
        return array (  69 => 36,  65 => 35,  59 => 31,  45 => 18,  43 => 17,  27 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#<link rel=\"stylesheet\" href=\"{{asset('bundles/FadcoBundle/plugins/select2/select2.min.css')}}\" />#}
<link rel=\"stylesheet\" href=\"{{asset('bundles/FadcoBundle/plugins/datepicker/datepicker3.css')}}\" />
<link rel=\"stylesheet\" href=\"{{ asset('bundles/FadcoBundle/Materiel/css/materiel.css') }}\"/>
<div id=\"formModal\" class=\"modal fade\" role=\"dialog\" >
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            </div>
            <div id = \"formContentBox\"></div>
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
                {#<span class=\"sr-only\">Veillez patienter...</span>#}
            </div>
        </div>
    </div>
</div>
<script src=\"{{asset('bundles/FadcoBundle/plugins/datepicker/bootstrap-datepicker.js')}}\"></script>
<script src=\"{{asset('bundles/FadcoBundle/plugins/datepicker/locales/bootstrap-datepicker.fr.js')}}\"></script>
", "FadcoBundle:Prestataire:popups.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\src\\FadcoBundle/Resources/views/Prestataire/popups.html.twig");
    }
}
