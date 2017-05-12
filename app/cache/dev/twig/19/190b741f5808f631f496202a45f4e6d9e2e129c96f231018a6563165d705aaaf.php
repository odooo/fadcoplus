<?php

/* __string_template__dfa317db17407d098f67fbd388c36da6608582ede7cf20eb5776a8221f062484 */
class __TwigTemplate_bd9adaf3d97ff5285200488fbf5feda475dcbafa23af9063e6b959e5c46e1728 extends Twig_Template
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
        $__internal_b53e918d01f18cae57720f5cbafcecb70261cdebe41391a12af1bdfb2cd2557f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b53e918d01f18cae57720f5cbafcecb70261cdebe41391a12af1bdfb2cd2557f->enter($__internal_b53e918d01f18cae57720f5cbafcecb70261cdebe41391a12af1bdfb2cd2557f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__dfa317db17407d098f67fbd388c36da6608582ede7cf20eb5776a8221f062484"));

        // line 1
        echo "<script>AjaxifySearch.URL = {count: \"";
        echo twig_escape_filter($this->env, (isset($context["count_url"]) ? $context["count_url"] : $this->getContext($context, "count_url")), "html", null, true);
        echo "\",search: \"";
        echo twig_escape_filter($this->env, (isset($context["search_url"]) ? $context["search_url"] : $this->getContext($context, "search_url")), "html", null, true);
        echo "\"}</script>";
        
        $__internal_b53e918d01f18cae57720f5cbafcecb70261cdebe41391a12af1bdfb2cd2557f->leave($__internal_b53e918d01f18cae57720f5cbafcecb70261cdebe41391a12af1bdfb2cd2557f_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__dfa317db17407d098f67fbd388c36da6608582ede7cf20eb5776a8221f062484";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>AjaxifySearch.URL = {count: \"{{ count_url }}\",search: \"{{ search_url }}\"}</script>", "__string_template__dfa317db17407d098f67fbd388c36da6608582ede7cf20eb5776a8221f062484", "");
    }
}
