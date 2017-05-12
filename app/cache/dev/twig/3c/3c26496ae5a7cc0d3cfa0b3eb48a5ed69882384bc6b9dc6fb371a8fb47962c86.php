<?php

/* FadcoBundle:Distributeur:macros.html.twig */
class __TwigTemplate_ff88e6d0e8974c03d46379117399dfacf2fd58c7ffdb764534ccd67f92a78464 extends Twig_Template
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
        $__internal_28e44c4d97965b95f5faba30473227ffff5c087e4e4240a6a5e9212319a37cfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28e44c4d97965b95f5faba30473227ffff5c087e4e4240a6a5e9212319a37cfc->enter($__internal_28e44c4d97965b95f5faba30473227ffff5c087e4e4240a6a5e9212319a37cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Distributeur:macros.html.twig"));

        // line 17
        echo "
";
        // line 22
        echo "
";
        // line 27
        echo "
";
        // line 53
        echo "
";
        
        $__internal_28e44c4d97965b95f5faba30473227ffff5c087e4e4240a6a5e9212319a37cfc->leave($__internal_28e44c4d97965b95f5faba30473227ffff5c087e4e4240a6a5e9212319a37cfc_prof);

    }

    // line 1
    public function getcountbox($__text__ = null, $__count__ = null, $__bgColor__ = null, $__icon__ = null, $__size__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "count" => $__count__,
            "bgColor" => $__bgColor__,
            "icon" => $__icon__,
            "size" => $__size__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_beca146c4d5effb8fbfa21c84fd643eff396e1475920244472a477a7edd20059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_beca146c4d5effb8fbfa21c84fd643eff396e1475920244472a477a7edd20059->enter($__internal_beca146c4d5effb8fbfa21c84fd643eff396e1475920244472a477a7edd20059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "countbox"));

            // line 2
            echo "    <div class=\"";
            if ( !(null === (isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")))) {
                echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")), "html", null, true);
            } else {
                echo "col-sm-4 col-lg-3";
            }
            echo "\">
        <div class=\"small-box ";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["bgColor"]) ? $context["bgColor"] : $this->getContext($context, "bgColor")), "html", null, true);
            echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "html", null, true);
            echo "\" style=\"cursor:pointer\">
            <div class=\"inner text-center\">
                <h3>";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "html", null, true);
            echo "</h3>
                <p><span>";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "html", null, true);
            echo "</span></p>
            </div>
            <div class=\"icon\" style=\"left: 10px\">
                <i class=\"fa ";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
            echo "\"></i>
            </div>
            <a href=\"#\" class=\"small-box-footer\">
                ";
            // line 13
            echo "            </a>
        </div>
    </div>
";
            
            $__internal_beca146c4d5effb8fbfa21c84fd643eff396e1475920244472a477a7edd20059->leave($__internal_beca146c4d5effb8fbfa21c84fd643eff396e1475920244472a477a7edd20059_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 18
    public function getcountbox2($__text__ = null, $__count__ = null, $__bgColor__ = null, $__icon__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "count" => $__count__,
            "bgColor" => $__bgColor__,
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_dbbdcbb5b6ad6be80fb4e229282d8a46c6477526ea313a95ff5ddfbb1a6e5df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_dbbdcbb5b6ad6be80fb4e229282d8a46c6477526ea313a95ff5ddfbb1a6e5df7->enter($__internal_dbbdcbb5b6ad6be80fb4e229282d8a46c6477526ea313a95ff5ddfbb1a6e5df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "countbox2"));

            echo "   
    ";
            // line 19
            $context["m"] = $this;
            // line 20
            echo "    ";
            echo $context["m"]->getcountbox((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), (isset($context["bgColor"]) ? $context["bgColor"] : $this->getContext($context, "bgColor")), (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "col-sm-6 col-xs-12");
            echo "
";
            
            $__internal_dbbdcbb5b6ad6be80fb4e229282d8a46c6477526ea313a95ff5ddfbb1a6e5df7->leave($__internal_dbbdcbb5b6ad6be80fb4e229282d8a46c6477526ea313a95ff5ddfbb1a6e5df7_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 23
    public function getcountbox3($__text__ = null, $__count__ = null, $__bgColor__ = null, $__icon__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "count" => $__count__,
            "bgColor" => $__bgColor__,
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_53a2ce3e46a82d37fae09d3ceacc184343688c6d0d72ea4d1e126dee484052d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_53a2ce3e46a82d37fae09d3ceacc184343688c6d0d72ea4d1e126dee484052d3->enter($__internal_53a2ce3e46a82d37fae09d3ceacc184343688c6d0d72ea4d1e126dee484052d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "countbox3"));

            // line 24
            echo "    ";
            $context["m"] = $this;
            // line 25
            echo "    ";
            echo $context["m"]->getcountbox((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), (isset($context["bgColor"]) ? $context["bgColor"] : $this->getContext($context, "bgColor")), (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "col-sm-4 col-xs-12");
            echo "
";
            
            $__internal_53a2ce3e46a82d37fae09d3ceacc184343688c6d0d72ea4d1e126dee484052d3->leave($__internal_53a2ce3e46a82d37fae09d3ceacc184343688c6d0d72ea4d1e126dee484052d3_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 28
    public function getchartbox($__title__ = null, $__chart__ = null, $__type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "chart" => $__chart__,
            "type" => $__type__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_63c0fadfae3b215864aeee69a033bde51ffc0661d17cdb10fdeaa3c04b80202d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_63c0fadfae3b215864aeee69a033bde51ffc0661d17cdb10fdeaa3c04b80202d->enter($__internal_63c0fadfae3b215864aeee69a033bde51ffc0661d17cdb10fdeaa3c04b80202d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "chartbox"));

            // line 29
            echo "    <div class=\"box ";
            if ( !(null === (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))) {
                echo "box-";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            }
            echo "\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
            echo "</h3>
            <div class=\"box-tools pull-right\">
                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>            
                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class=\"box-body\">
            ";
            // line 39
            if ( !(null === (isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")))) {
                // line 40
                echo "                ";
                if (((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")) == false)) {
                    // line 41
                    echo "                    <p class=\"text-center\">Aucune donnée à afficher</p>
                ";
                } else {
                    // line 43
                    echo "                    <div id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")), "chart", array()), "chart", array()), "renderTo", array()), "html", null, true);
                    echo "\" style=\"width: 100%; height:350px;\"></div>
                    <script type=\"text/javascript\">
                        ";
                    // line 45
                    echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
                    echo "
                    </script>
                ";
                }
                // line 47
                echo "                       
            ";
            }
            // line 49
            echo "        </div>
        <!-- ./box-body -->        
    </div>
";
            
            $__internal_63c0fadfae3b215864aeee69a033bde51ffc0661d17cdb10fdeaa3c04b80202d->leave($__internal_63c0fadfae3b215864aeee69a033bde51ffc0661d17cdb10fdeaa3c04b80202d_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 54
    public function gettabbedchartbox($__title__ = null, $__charts__ = null, $__type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "charts" => $__charts__,
            "type" => $__type__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_f0ce496edb203b578e133d22983294448817a2be910ecb1bcb104afecece785a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_f0ce496edb203b578e133d22983294448817a2be910ecb1bcb104afecece785a->enter($__internal_f0ce496edb203b578e133d22983294448817a2be910ecb1bcb104afecece785a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "tabbedchartbox"));

            // line 55
            echo "    ";
            $context["ids"] = array();
            // line 56
            echo "    <div class=\"nav-tabs-custom\" style=\"cursor: move;\">        
        <!-- Tabs within a box -->
        <ul class=\"nav nav-tabs pull-right ui-sortable-handle\">
            ";
            // line 59
            if (( !(null === (isset($context["charts"]) ? $context["charts"] : $this->getContext($context, "charts"))) &&  !twig_test_empty((isset($context["charts"]) ? $context["charts"] : $this->getContext($context, "charts"))))) {
                // line 60
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["charts"]) ? $context["charts"] : $this->getContext($context, "charts")));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["label"] => $context["chart"]) {
                    // line 61
                    echo "                    ";
                    $context["ids"] = twig_array_merge((isset($context["ids"]) ? $context["ids"] : $this->getContext($context, "ids")), array($context["label"] => $this->getAttribute((isset($context["fadco"]) ? $context["fadco"] : $this->getContext($context, "fadco")), "uniqueId", array())));
                    // line 62
                    echo "                    <li class=\"";
                    if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                        echo "active";
                    }
                    echo "\">
                        <a href=\"#";
                    // line 63
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ids"]) ? $context["ids"] : $this->getContext($context, "ids")), $context["label"], array(), "array"), "html", null, true);
                    echo "\" data-toggle=\"tab\" aria-expanded=\"false\">
                            ";
                    // line 64
                    echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                    echo "
                        </a>
                    </li>
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['chart'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "                <li class=\"pull-left header\">";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
                echo "</li>
            ";
            }
            // line 69
            echo " 
        </ul>                       
        
        <div class=\"tab-content no-padding\">
            ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["charts"]) ? $context["charts"] : $this->getContext($context, "charts")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["label"] => $context["chart"]) {
                // line 74
                echo "                <div class=\"chart tab-pane ";
                if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                    echo "active";
                }
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ids"]) ? $context["ids"] : $this->getContext($context, "ids")), $context["label"], array(), "array"), "html", null, true);
                echo "\">
                    <div id=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["chart"], "chart", array()), "chart", array()), "renderTo", array()), "html", null, true);
                echo "\" style=\"width: 100%; height:350px; position: relative;\"></div>
                    <script type=\"text/javascript\">
                        ";
                // line 77
                echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart($context["chart"]);
                echo "
                    </script>
                </div>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['chart'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "        </div>
    </div>
";
            
            $__internal_f0ce496edb203b578e133d22983294448817a2be910ecb1bcb104afecece785a->leave($__internal_f0ce496edb203b578e133d22983294448817a2be910ecb1bcb104afecece785a_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "FadcoBundle:Distributeur:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 81,  401 => 77,  396 => 75,  387 => 74,  370 => 73,  364 => 69,  358 => 68,  340 => 64,  336 => 63,  329 => 62,  326 => 61,  308 => 60,  306 => 59,  301 => 56,  298 => 55,  281 => 54,  260 => 49,  256 => 47,  250 => 45,  244 => 43,  240 => 41,  237 => 40,  235 => 39,  224 => 31,  215 => 29,  198 => 28,  177 => 25,  174 => 24,  156 => 23,  135 => 20,  133 => 19,  113 => 18,  92 => 13,  86 => 9,  80 => 6,  76 => 5,  67 => 3,  58 => 2,  39 => 1,  31 => 53,  28 => 27,  25 => 22,  22 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro countbox(text, count, bgColor, icon, size) %}
    <div class=\"{% if size is not null %}{{ size }}{% else %}col-sm-4 col-lg-3{% endif %}\">
        <div class=\"small-box {{ bgColor }}\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"{{ count }} {{ text }}\" style=\"cursor:pointer\">
            <div class=\"inner text-center\">
                <h3>{{ count }}</h3>
                <p><span>{{ text }}</span></p>
            </div>
            <div class=\"icon\" style=\"left: 10px\">
                <i class=\"fa {{ icon }}\"></i>
            </div>
            <a href=\"#\" class=\"small-box-footer\">
                {#Voir détails <i class=\"fa fa-arrow-circle-right\"></i>#}
            </a>
        </div>
    </div>
{% endmacro %}

{% macro countbox2(text, count, bgColor, icon) %}   
    {% import _self as m %}
    {{ m.countbox(text, count, bgColor, icon,'col-sm-6 col-xs-12') }}
{% endmacro %}

{% macro countbox3(text, count, bgColor, icon) %}
    {% import _self as m %}
    {{ m.countbox(text, count, bgColor, icon,'col-sm-4 col-xs-12') }}
{% endmacro %}

{% macro chartbox(title, chart, type) %}
    <div class=\"box {% if type is not null %}box-{{ type }}{% endif %}\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">{{ title }}</h3>
            <div class=\"box-tools pull-right\">
                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>            
                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class=\"box-body\">
            {% if chart is not null %}
                {% if chart == false %}
                    <p class=\"text-center\">Aucune donnée à afficher</p>
                {% else %}
                    <div id=\"{{ chart.chart.chart.renderTo }}\" style=\"width: 100%; height:350px;\"></div>
                    <script type=\"text/javascript\">
                        {{ chart(chart) }}
                    </script>
                {% endif %}                       
            {% endif %}
        </div>
        <!-- ./box-body -->        
    </div>
{% endmacro %}

{% macro tabbedchartbox(title, charts, type) %}
    {% set ids = {} %}
    <div class=\"nav-tabs-custom\" style=\"cursor: move;\">        
        <!-- Tabs within a box -->
        <ul class=\"nav nav-tabs pull-right ui-sortable-handle\">
            {% if charts is not null and charts is not empty %}
                {% for label, chart in charts %}
                    {% set ids = ids | merge({(label): fadco.uniqueId}) %}
                    <li class=\"{% if loop.index0 == 0%}active{% endif %}\">
                        <a href=\"#{{ ids[label] }}\" data-toggle=\"tab\" aria-expanded=\"false\">
                            {{ label }}
                        </a>
                    </li>
                {% endfor %}
                <li class=\"pull-left header\">{{ title }}</li>
            {% endif %} 
        </ul>                       
        
        <div class=\"tab-content no-padding\">
            {% for label, chart in charts %}
                <div class=\"chart tab-pane {% if loop.index0 == 0%}active{% endif %}\" id=\"{{ ids[label] }}\">
                    <div id=\"{{ chart.chart.chart.renderTo }}\" style=\"width: 100%; height:350px; position: relative;\"></div>
                    <script type=\"text/javascript\">
                        {{ chart(chart) }}
                    </script>
                </div>
            {% endfor %}
        </div>
    </div>
{% endmacro %}", "FadcoBundle:Distributeur:macros.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\src\\FadcoBundle/Resources/views/Distributeur/macros.html.twig");
    }
}
