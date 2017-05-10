<?php

/* __string_template__c39ece7766a814f2bb020ed957fe0291a416648c07dcf14b3535287dde66ab8d */
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
        $__internal_00c59e5daca6595b74704952aa98e4dbbeaeec8398847594387184ff095971fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00c59e5daca6595b74704952aa98e4dbbeaeec8398847594387184ff095971fb->enter($__internal_00c59e5daca6595b74704952aa98e4dbbeaeec8398847594387184ff095971fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__c39ece7766a814f2bb020ed957fe0291a416648c07dcf14b3535287dde66ab8d"));

        // line 1
        echo "<script>AjaxifySearch.URL = {count: \"";
        echo twig_escape_filter($this->env, (isset($context["count_url"]) ? $context["count_url"] : $this->getContext($context, "count_url")), "html", null, true);
        echo "\",search: \"";
        echo twig_escape_filter($this->env, (isset($context["search_url"]) ? $context["search_url"] : $this->getContext($context, "search_url")), "html", null, true);
        echo "\"}</script>";
        
        $__internal_00c59e5daca6595b74704952aa98e4dbbeaeec8398847594387184ff095971fb->leave($__internal_00c59e5daca6595b74704952aa98e4dbbeaeec8398847594387184ff095971fb_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__c39ece7766a814f2bb020ed957fe0291a416648c07dcf14b3535287dde66ab8d";
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
        return new Twig_Source("<script>AjaxifySearch.URL = {count: \"{{ count_url }}\",search: \"{{ search_url }}\"}</script>", "__string_template__c39ece7766a814f2bb020ed957fe0291a416648c07dcf14b3535287dde66ab8d", "");
    }
}
