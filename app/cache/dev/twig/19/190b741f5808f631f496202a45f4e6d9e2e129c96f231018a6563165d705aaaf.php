<?php

/* __string_template__892057061d345d427608108a8ae6bc25b1b22c10753c26dd4979a6a151024270 */
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
        $__internal_e9d9d5969a9a46c745aa414cdb82f9b0ec72577006d753c0e92da5ab639004a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d9d5969a9a46c745aa414cdb82f9b0ec72577006d753c0e92da5ab639004a0->enter($__internal_e9d9d5969a9a46c745aa414cdb82f9b0ec72577006d753c0e92da5ab639004a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__892057061d345d427608108a8ae6bc25b1b22c10753c26dd4979a6a151024270"));

        // line 1
        echo "<script>AjaxifySearch.URL = {count: \"";
        echo twig_escape_filter($this->env, (isset($context["count_url"]) ? $context["count_url"] : $this->getContext($context, "count_url")), "html", null, true);
        echo "\",search: \"";
        echo twig_escape_filter($this->env, (isset($context["search_url"]) ? $context["search_url"] : $this->getContext($context, "search_url")), "html", null, true);
        echo "\"}</script>";
        
        $__internal_e9d9d5969a9a46c745aa414cdb82f9b0ec72577006d753c0e92da5ab639004a0->leave($__internal_e9d9d5969a9a46c745aa414cdb82f9b0ec72577006d753c0e92da5ab639004a0_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__892057061d345d427608108a8ae6bc25b1b22c10753c26dd4979a6a151024270";
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
        return new Twig_Source("<script>AjaxifySearch.URL = {count: \"{{ count_url }}\",search: \"{{ search_url }}\"}</script>", "__string_template__892057061d345d427608108a8ae6bc25b1b22c10753c26dd4979a6a151024270", "");
    }
}
