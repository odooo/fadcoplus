<?php

/* FadcoBundle:Rigth:change.html.twig */
class __TwigTemplate_92b14be3cdde327bcb774625daff21562d15e1d0fdd8785c47c21348e15267e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_148ac18cd5daf125bf4c0d9d5c274a3268f845472c699e6954646b144899cee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_148ac18cd5daf125bf4c0d9d5c274a3268f845472c699e6954646b144899cee2->enter($__internal_148ac18cd5daf125bf4c0d9d5c274a3268f845472c699e6954646b144899cee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FadcoBundle:Rigth:change.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_148ac18cd5daf125bf4c0d9d5c274a3268f845472c699e6954646b144899cee2->leave($__internal_148ac18cd5daf125bf4c0d9d5c274a3268f845472c699e6954646b144899cee2_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_8b7b951fdbbc3664772ef6d38ea112757aae927d48b9c25773aa8cdae67a1dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7b951fdbbc3664772ef6d38ea112757aae927d48b9c25773aa8cdae67a1dcb->enter($__internal_8b7b951fdbbc3664772ef6d38ea112757aae927d48b9c25773aa8cdae67a1dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <section class=\"content\">
        <div class=\"box box-primary\">
            <div class=\"box-header with-border\">
                <center> <h1 class=\"box-title\"><b>Liste des Droits</b></h1></center>
                <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\">
                        <i class=\"fa fa-minus\"></i>
                    </button>
                </div>
            </div>
            <div class=\"box-body\">
                <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rigth_change", array("userId" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "option" => (isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")))), "html", null, true);
        echo "\" class=\"form-horizontal\"  method=\"POST\">
                    <input type=\"hidden\" name=\"user\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "html", null, true);
        echo "\"/>
                    <input type=\"hidden\" name=\"option\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "html", null, true);
        echo "\"/>

                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "                        <div class=\"form-group\" style=\"display: block; margin-left: auto;\">
                            <div class=\"form-group\" style=\"display: block;\">
                                <label class=\"control-label\" for=\"email\">";
            // line 21
            echo twig_escape_filter($this->env, $context["entity"], "html", null, true);
            echo "</label>
                                <input type=\"checkbox\"  name=\"roles[]\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, $context["entity"], "html", null, true);
            echo "\" /> 
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                    <div style=\"display: block; margin-left: auto;\">
                        <button type=\"submit\" class=\"btn btn-primary\" >Valider</button> 
                    </div>             
                </form>

            </div>
    </div>
    </section>
";
        
        $__internal_8b7b951fdbbc3664772ef6d38ea112757aae927d48b9c25773aa8cdae67a1dcb->leave($__internal_8b7b951fdbbc3664772ef6d38ea112757aae927d48b9c25773aa8cdae67a1dcb_prof);

    }

    public function getTemplateName()
    {
        return "FadcoBundle:Rigth:change.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  86 => 26,  76 => 22,  72 => 21,  68 => 19,  64 => 18,  59 => 16,  55 => 15,  51 => 14,  38 => 3,  26 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block content %}
    <section class=\"content\">
        <div class=\"box box-primary\">
            <div class=\"box-header with-border\">
                <center> <h1 class=\"box-title\"><b>Liste des Droits</b></h1></center>
                <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\">
                        <i class=\"fa fa-minus\"></i>
                    </button>
                </div>
            </div>
            <div class=\"box-body\">
                <form action=\"{{ path('rigth_change', { 'userId': user,'option': option }) }}\" class=\"form-horizontal\"  method=\"POST\">
                    <input type=\"hidden\" name=\"user\" value=\"{{user}}\"/>
                    <input type=\"hidden\" name=\"option\" value=\"{{option}}\"/>

                    {% for entity in roles %}
                        <div class=\"form-group\" style=\"display: block; margin-left: auto;\">
                            <div class=\"form-group\" style=\"display: block;\">
                                <label class=\"control-label\" for=\"email\">{{entity}}</label>
                                <input type=\"checkbox\"  name=\"roles[]\" value=\"{{entity}}\" /> 
                            </div>
                        </div>
                    {% endfor %}
                    <div style=\"display: block; margin-left: auto;\">
                        <button type=\"submit\" class=\"btn btn-primary\" >Valider</button> 
                    </div>             
                </form>

            </div>
    </div>
    </section>
{% endblock %}
", "FadcoBundle:Rigth:change.html.twig", "C:\\xampp\\htdocs\\fadcoplus\\src\\FadcoBundle/Resources/views/Rigth/change.html.twig");
    }
}
