<?php

/* FadcoBundle:Distributeur:layout.html.twig */
class __TwigTemplate_6f1ffd01768c31d7b34437881eb7d2f2a91e40cc3cb9d58a588c4558c7ab30a4 extends Twig_Template
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
        $__internal_a88ba974568b767af8a0d31ec32a0225595ffbe2db03f4228dcf115fa5dc9922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88ba974568b767af8a0d31ec32a0225595ffbe2db03f4228dcf115fa5dc9922->enter($__internal_a88ba974568b767af8a0d31ec32a0225595ffbe2db03f4228dcf115fa5dc9922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Distributeur:layout.html.twig"));

        // line 37
        $context["start"] = twig_date_format_filter($this->env, "now", "d/m/Y");
        // line 38
        $context["end"] = twig_date_format_filter($this->env, "now", "d/m/Y");
        // line 40
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "has", array(0 => "from"), "method")) {
            // line 41
            $context["start"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "from"), "method");
        }
        // line 44
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "has", array(0 => "from"), "method")) {
            // line 45
            $context["end"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "to"), "method");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a88ba974568b767af8a0d31ec32a0225595ffbe2db03f4228dcf115fa5dc9922->leave($__internal_a88ba974568b767af8a0d31ec32a0225595ffbe2db03f4228dcf115fa5dc9922_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_4d0d795a4b6fd2c41fd89190070d2923f560f4c6e292d0e49c2432e8c4dadc6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0d795a4b6fd2c41fd89190070d2923f560f4c6e292d0e49c2432e8c4dadc6f->enter($__internal_4d0d795a4b6fd2c41fd89190070d2923f560f4c6e292d0e49c2432e8c4dadc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_4d0d795a4b6fd2c41fd89190070d2923f560f4c6e292d0e49c2432e8c4dadc6f->leave($__internal_4d0d795a4b6fd2c41fd89190070d2923f560f4c6e292d0e49c2432e8c4dadc6f_prof);

    }

    // line 48
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_1ac68592f0deb8c2f569aa63afd082fcff02728304c9a334b4946500535557f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac68592f0deb8c2f569aa63afd082fcff02728304c9a334b4946500535557f3->enter($__internal_1ac68592f0deb8c2f569aa63afd082fcff02728304c9a334b4946500535557f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        echo twig_escape_filter($this->env, (isset($context["start"]) ? $context["start"] : $this->getContext($context, "start")), "html", null, true);
        echo "\", \"DD-MM-YYYY\");
        var end = moment(\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["end"]) ? $context["end"] : $this->getContext($context, "end")), "html", null, true);
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
                var url = \"";
        // line 120
        echo twig_escape_filter($this->env, twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()), "?")), "html", null, true);
        echo "\" + \"?\";
                url += \"from=\" + picker.startDate.format(\"DD/MM/YYYY\");
                url += \"&to=\" + picker.endDate.format(\"DD/MM/YYYY\");
                location.href = url;
            });

            cb(start, end);
            
        });
    </script>
";
        
        $__internal_1ac68592f0deb8c2f569aa63afd082fcff02728304c9a334b4946500535557f3->leave($__internal_1ac68592f0deb8c2f569aa63afd082fcff02728304c9a334b4946500535557f3_prof);

    }

    // line 132
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_1d9da33f88ba4aecd23967e4130b91ca4d470e88e8e33b45e69ca32293c86312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d9da33f88ba4aecd23967e4130b91ca4d470e88e8e33b45e69ca32293c86312->enter($__internal_1d9da33f88ba4aecd23967e4130b91ca4d470e88e8e33b45e69ca32293c86312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $this->displayBlock("title", $context, $blocks);
        
        $__internal_1d9da33f88ba4aecd23967e4130b91ca4d470e88e8e33b45e69ca32293c86312->leave($__internal_1d9da33f88ba4aecd23967e4130b91ca4d470e88e8e33b45e69ca32293c86312_prof);

    }

    // line 134
    public function block_page_quick_actions($context, array $blocks = array())
    {
        $__internal_1c4e81adff5e29a9b7c5bd9626e2885c155844b83ce802621882d879560e315a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c4e81adff5e29a9b7c5bd9626e2885c155844b83ce802621882d879560e315a->enter($__internal_1c4e81adff5e29a9b7c5bd9626e2885c155844b83ce802621882d879560e315a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_quick_actions"));

        // line 135
        echo "    <div id=\"reportrange\" style=\"background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%; font-size: 0.8em; font-weight: normal;\">        
        <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>&nbsp;
        <span>";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["start"]) ? $context["start"] : $this->getContext($context, "start")), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, (isset($context["end"]) ? $context["end"] : $this->getContext($context, "end")), "html", null, true);
        echo "</span> <b class=\"caret\"></b>
    </div>
";
        
        $__internal_1c4e81adff5e29a9b7c5bd9626e2885c155844b83ce802621882d879560e315a->leave($__internal_1c4e81adff5e29a9b7c5bd9626e2885c155844b83ce802621882d879560e315a_prof);

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
        return array (  234 => 137,  230 => 135,  224 => 134,  212 => 132,  194 => 120,  125 => 54,  121 => 53,  116 => 51,  112 => 50,  107 => 49,  101 => 48,  63 => 5,  58 => 4,  52 => 3,  45 => 1,  42 => 45,  40 => 44,  37 => 41,  35 => 40,  33 => 38,  31 => 37,  11 => 1,);
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
{% endblock %}", "FadcoBundle:Distributeur:layout.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\src\\FadcoBundle/Resources/views/Distributeur/layout.html.twig");
    }
}
