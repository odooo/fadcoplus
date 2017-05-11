<?php

/* FadcoBundle:Distributeur:layout.html.twig */
class __TwigTemplate_ec709cff1f9d0eab5c2930020994fc46309b2a46702e00c629d5151a9054313e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FadcoBundle:Default:menu.html.twig", "FadcoBundle:Distributeur:layout.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
            'page_title' => array($this, 'block_page_title'),
            'page_quick_actions' => array($this, 'block_page_quick_actions'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FadcoBundle:Default:menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91dd39663800a35621cf0ac19cf107c1c0e22b4b1c462065109e011ee59c37ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91dd39663800a35621cf0ac19cf107c1c0e22b4b1c462065109e011ee59c37ad->enter($__internal_91dd39663800a35621cf0ac19cf107c1c0e22b4b1c462065109e011ee59c37ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Distributeur:layout.html.twig"));

        // line 37
        $context["start"] = twig_date_format_filter($this->env, "now", "d/m/Y");
        // line 38
        $context["end"] = twig_date_format_filter($this->env, "now", "d/m/Y");
        // line 40
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "has", array(0 => "from"), "method")) {
            // line 41
            $context["start"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "from"), "method");
        }
        // line 44
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "has", array(0 => "from"), "method")) {
            // line 45
            $context["end"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "to"), "method");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91dd39663800a35621cf0ac19cf107c1c0e22b4b1c462065109e011ee59c37ad->leave($__internal_91dd39663800a35621cf0ac19cf107c1c0e22b4b1c462065109e011ee59c37ad_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_2a66db9bdc11f48c6fea26b8e92e5f204d3add84e95468875aeaad122603a616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a66db9bdc11f48c6fea26b8e92e5f204d3add84e95468875aeaad122603a616->enter($__internal_2a66db9bdc11f48c6fea26b8e92e5f204d3add84e95468875aeaad122603a616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
    <style type=\"text/css\">
        .small-box .icon {
            top: 10px;
            left: 10px;
            right: 10px;
            text-align: center;
            font-size: 60px;
        }

        .small-box h3 {
            z-index: 5;
        }

        .small-box p {            
            height: 40px;
            overflow: hidden;
            position: relative;
            margin-bottom: 0;            
        }

        .small-box p span {
            display: block;
            position: absolute;
            left: 0;
            right: 0;
            top: 50%;
            transform: translate(0%, -50%);            
        }
    </style>
";
        
        $__internal_2a66db9bdc11f48c6fea26b8e92e5f204d3add84e95468875aeaad122603a616->leave($__internal_2a66db9bdc11f48c6fea26b8e92e5f204d3add84e95468875aeaad122603a616_prof);

    }

    // line 48
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_c4ffaf28e2bce02fab9d864ace4f412e06e1765535bfdeb019e53c08dc59436c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ffaf28e2bce02fab9d864ace4f412e06e1765535bfdeb019e53c08dc59436c->enter($__internal_c4ffaf28e2bce02fab9d864ace4f412e06e1765535bfdeb019e53c08dc59436c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 49
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/highcharts/highcharts.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fadco/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        var start = moment(\"";
        // line 53
        echo twig_escape_filter($this->env, ($context["start"] ?? $this->getContext($context, "start")), "html", null, true);
        echo "\", \"DD-MM-YYYY\");
        var end = moment(\"";
        // line 54
        echo twig_escape_filter($this->env, ($context["end"] ?? $this->getContext($context, "end")), "html", null, true);
        echo "\", \"DD-MM-YYYY\");

        function cb(start, end) {
            if (start.isSame(end) && start.isSame(moment().startOf('day'))) {
                \$('#reportrange span').html(\"Aujourd'hui\");
            } else if (start.isSame(end) && start.isSame(moment().subtract(1, 'days').startOf('day'))) {
                \$('#reportrange span').html(\"Hier\");
            } else if (start.isSame(moment().subtract(6, 'days')) && end.isSame(moment().startOf('day'))) {
                \$('#reportrange span').html(\"7 derniers jours\");
            } else {
                \$('#reportrange span').html(start.format('DD MMMM YYYY') + ' - ' + end.format('DD MMMM YYYY'));
            }
        }
        
        \$(function() {

            \$('[data-toggle=\"tooltip\"]').tooltip();

            \$('#reportrange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    \"Aujourd'hui\": [moment().startOf('day'), moment().startOf('day')],
                    \"Hier\": [moment().subtract(1, 'days').startOf('day'), moment().subtract(1, 'days').startOf('day')],
                    \"7 Derniers jours\": [moment().subtract(6, 'days').startOf('day'), moment().startOf('day')],
                    \"30 Derniers jours\": [moment().subtract(29, 'days').startOf('day'), moment().startOf('day')],
                    \"Ce mois\": [moment().startOf('month'), moment().endOf('month')],
                    \"Mois passé\": [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                \"locale\": {
                    \"format\": \"MM/DD/YYYY\",
                    \"separator\": \" - \",
                    \"applyLabel\": \"Valider\",
                    \"cancelLabel\": \"Annuler\",
                    \"fromLabel\": \"De\",
                    \"toLabel\": \"À\",
                    \"customRangeLabel\": \"Choisir une période\",
                    \"weekLabel\": \"W\",
                    \"daysOfWeek\": [
                        \"Dim\",
                        \"Lun\",
                        \"Mar\",
                        \"Mer\",
                        \"Jeu\",
                        \"Ven\",
                        \"Sam\"
                    ],
                    \"monthNames\": [
                        \"Janvier\",
                        \"Février\",
                        \"Mars\",
                        \"Avril\",
                        \"Mai\",
                        \"Juin\",
                        \"Juillet\",
                        \"Août\",
                        \"Septembre\",
                        \"Octobre\",
                        \"Novembre\",
                        \"Decembre\"
                    ],
                    \"firstDay\": 1
                }
            }, cb);

            \$('#reportrange').on('apply.daterangepicker', function(event, picker) {
                alert('lol');
                var url = \"";
        // line 121
        echo twig_escape_filter($this->env, twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "requestUri", array()), "?")), "html", null, true);
        echo "\" + \"?\";
                url += \"from=\" + picker.startDate.format(\"DD/MM/YYYY\");
                url += \"&to=\" + picker.endDate.format(\"DD/MM/YYYY\");
                location.href = url;
            });

            cb(start, end);
            
        });
    </script>
";
        
        $__internal_c4ffaf28e2bce02fab9d864ace4f412e06e1765535bfdeb019e53c08dc59436c->leave($__internal_c4ffaf28e2bce02fab9d864ace4f412e06e1765535bfdeb019e53c08dc59436c_prof);

    }

    // line 133
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_8053e52546a2b3b6ce3b0b539586f1a817cfcef468543a9377dfe1108fea87e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8053e52546a2b3b6ce3b0b539586f1a817cfcef468543a9377dfe1108fea87e0->enter($__internal_8053e52546a2b3b6ce3b0b539586f1a817cfcef468543a9377dfe1108fea87e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $this->displayBlock("title", $context, $blocks);
        
        $__internal_8053e52546a2b3b6ce3b0b539586f1a817cfcef468543a9377dfe1108fea87e0->leave($__internal_8053e52546a2b3b6ce3b0b539586f1a817cfcef468543a9377dfe1108fea87e0_prof);

    }

    // line 135
    public function block_page_quick_actions($context, array $blocks = array())
    {
        $__internal_5ec6efa4480baec47209dc1a4df491bbe9644344563c374d43ff2fc6922fb080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec6efa4480baec47209dc1a4df491bbe9644344563c374d43ff2fc6922fb080->enter($__internal_5ec6efa4480baec47209dc1a4df491bbe9644344563c374d43ff2fc6922fb080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_quick_actions"));

        // line 136
        echo "    <div id=\"reportrange\" style=\"background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%; font-size: 0.8em; font-weight: normal;\">        
        <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>&nbsp;
        <span>";
        // line 138
        echo twig_escape_filter($this->env, ($context["start"] ?? $this->getContext($context, "start")), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, ($context["end"] ?? $this->getContext($context, "end")), "html", null, true);
        echo "</span> <b class=\"caret\"></b>
    </div>
";
        
        $__internal_5ec6efa4480baec47209dc1a4df491bbe9644344563c374d43ff2fc6922fb080->leave($__internal_5ec6efa4480baec47209dc1a4df491bbe9644344563c374d43ff2fc6922fb080_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Distributeur:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 138,  231 => 136,  225 => 135,  213 => 133,  195 => 121,  125 => 54,  121 => 53,  116 => 51,  112 => 50,  107 => 49,  101 => 48,  63 => 5,  58 => 4,  52 => 3,  45 => 1,  42 => 45,  40 => 44,  37 => 41,  35 => 40,  33 => 38,  31 => 37,  11 => 1,);
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

{% block stylesheet %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/fadco/daterangepicker/daterangepicker.css') }}\">
    <style type=\"text/css\">
        .small-box .icon {
            top: 10px;
            left: 10px;
            right: 10px;
            text-align: center;
            font-size: 60px;
        }

        .small-box h3 {
            z-index: 5;
        }

        .small-box p {            
            height: 40px;
            overflow: hidden;
            position: relative;
            margin-bottom: 0;            
        }

        .small-box p span {
            display: block;
            position: absolute;
            left: 0;
            right: 0;
            top: 50%;
            transform: translate(0%, -50%);            
        }
    </style>
{% endblock %}

{% set start = 'now' | date('d/m/Y') %}
{% set end = 'now' | date('d/m/Y') %}

{% if app.request.query.has('from') %}
    {% set start = app.request.query.get('from') %}
{% endif %}

{% if app.request.query.has('from') %}
    {% set end = app.request.query.get('to') %}
{% endif %}

{% block javascript %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/fadco/highcharts/highcharts.js') }}\"></script>
    <script src=\"{{ asset('bundles/fadco/daterangepicker/daterangepicker.js') }}\"></script>
    <script type=\"text/javascript\">
        var start = moment(\"{{ start }}\", \"DD-MM-YYYY\");
        var end = moment(\"{{ end }}\", \"DD-MM-YYYY\");

        function cb(start, end) {
            if (start.isSame(end) && start.isSame(moment().startOf('day'))) {
                \$('#reportrange span').html(\"Aujourd'hui\");
            } else if (start.isSame(end) && start.isSame(moment().subtract(1, 'days').startOf('day'))) {
                \$('#reportrange span').html(\"Hier\");
            } else if (start.isSame(moment().subtract(6, 'days')) && end.isSame(moment().startOf('day'))) {
                \$('#reportrange span').html(\"7 derniers jours\");
            } else {
                \$('#reportrange span').html(start.format('DD MMMM YYYY') + ' - ' + end.format('DD MMMM YYYY'));
            }
        }
        
        \$(function() {

            \$('[data-toggle=\"tooltip\"]').tooltip();

            \$('#reportrange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    \"Aujourd'hui\": [moment().startOf('day'), moment().startOf('day')],
                    \"Hier\": [moment().subtract(1, 'days').startOf('day'), moment().subtract(1, 'days').startOf('day')],
                    \"7 Derniers jours\": [moment().subtract(6, 'days').startOf('day'), moment().startOf('day')],
                    \"30 Derniers jours\": [moment().subtract(29, 'days').startOf('day'), moment().startOf('day')],
                    \"Ce mois\": [moment().startOf('month'), moment().endOf('month')],
                    \"Mois passé\": [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                \"locale\": {
                    \"format\": \"MM/DD/YYYY\",
                    \"separator\": \" - \",
                    \"applyLabel\": \"Valider\",
                    \"cancelLabel\": \"Annuler\",
                    \"fromLabel\": \"De\",
                    \"toLabel\": \"À\",
                    \"customRangeLabel\": \"Choisir une période\",
                    \"weekLabel\": \"W\",
                    \"daysOfWeek\": [
                        \"Dim\",
                        \"Lun\",
                        \"Mar\",
                        \"Mer\",
                        \"Jeu\",
                        \"Ven\",
                        \"Sam\"
                    ],
                    \"monthNames\": [
                        \"Janvier\",
                        \"Février\",
                        \"Mars\",
                        \"Avril\",
                        \"Mai\",
                        \"Juin\",
                        \"Juillet\",
                        \"Août\",
                        \"Septembre\",
                        \"Octobre\",
                        \"Novembre\",
                        \"Decembre\"
                    ],
                    \"firstDay\": 1
                }
            }, cb);

            \$('#reportrange').on('apply.daterangepicker', function(event, picker) {
                alert('lol');
                var url = \"{{ app.request.requestUri | split('?') | first }}\" + \"?\";
                url += \"from=\" + picker.startDate.format(\"DD/MM/YYYY\");
                url += \"&to=\" + picker.endDate.format(\"DD/MM/YYYY\");
                location.href = url;
            });

            cb(start, end);
            
        });
    </script>
{% endblock %}

{% block page_title %}{{ block('title') }}{% endblock %}

{% block page_quick_actions %}
    <div id=\"reportrange\" style=\"background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%; font-size: 0.8em; font-weight: normal;\">        
        <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>&nbsp;
        <span>{{ start }} - {{ end }}</span> <b class=\"caret\"></b>
    </div>
{% endblock %}", "FadcoBundle:Distributeur:layout.html.twig", "/var/www/html/fadcoplus/src/FadcoBundle/Resources/views/Distributeur/layout.html.twig");
    }
}
