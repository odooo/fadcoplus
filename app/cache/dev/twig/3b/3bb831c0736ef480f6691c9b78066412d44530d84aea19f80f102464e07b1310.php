<?php

/* __string_template__50695c06fb7c2712c66f697b9c4e87bcbf3413542de7a7b095394b3e27c719d1 */
class __TwigTemplate_64e517ed173161613eeda7ad8f0545eaede89f59c0a23b42a34b3601285a3755 extends Twig_Template
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
        $__internal_4cc942841ca0710085961a934cabcf95a405c7e49de87dc7ba6c5f40cbe9b69e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cc942841ca0710085961a934cabcf95a405c7e49de87dc7ba6c5f40cbe9b69e->enter($__internal_4cc942841ca0710085961a934cabcf95a405c7e49de87dc7ba6c5f40cbe9b69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__50695c06fb7c2712c66f697b9c4e87bcbf3413542de7a7b095394b3e27c719d1"));

        // line 1
        echo "<script>AjaxifySearch.URL = {count: \"";
        echo twig_escape_filter($this->env, ($context["count_url"] ?? $this->getContext($context, "count_url")), "html", null, true);
        echo "\",search: \"";
        echo twig_escape_filter($this->env, ($context["search_url"] ?? $this->getContext($context, "search_url")), "html", null, true);
        echo "\"}</script>";
        
        $__internal_4cc942841ca0710085961a934cabcf95a405c7e49de87dc7ba6c5f40cbe9b69e->leave($__internal_4cc942841ca0710085961a934cabcf95a405c7e49de87dc7ba6c5f40cbe9b69e_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__50695c06fb7c2712c66f697b9c4e87bcbf3413542de7a7b095394b3e27c719d1";
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
        return new Twig_Source("<script>AjaxifySearch.URL = {count: \"{{ count_url }}\",search: \"{{ search_url }}\"}</script>", "__string_template__50695c06fb7c2712c66f697b9c4e87bcbf3413542de7a7b095394b3e27c719d1", "");
    }
}
