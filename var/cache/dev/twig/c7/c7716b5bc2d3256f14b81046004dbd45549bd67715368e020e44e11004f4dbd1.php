<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_38bd2f47323623de567c53f7e21a09355f63e19842950b2fc9460e21b3a7a3f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bdff789102999205c51567861ff7fc4904734ccc5a99f1a6aeb34352bea32034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdff789102999205c51567861ff7fc4904734ccc5a99f1a6aeb34352bea32034->enter($__internal_bdff789102999205c51567861ff7fc4904734ccc5a99f1a6aeb34352bea32034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_803c07bddbe04a0f871ee68352ec3d5b3d19fe8115145a6963cb93e0584465c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_803c07bddbe04a0f871ee68352ec3d5b3d19fe8115145a6963cb93e0584465c3->enter($__internal_803c07bddbe04a0f871ee68352ec3d5b3d19fe8115145a6963cb93e0584465c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdff789102999205c51567861ff7fc4904734ccc5a99f1a6aeb34352bea32034->leave($__internal_bdff789102999205c51567861ff7fc4904734ccc5a99f1a6aeb34352bea32034_prof);

        
        $__internal_803c07bddbe04a0f871ee68352ec3d5b3d19fe8115145a6963cb93e0584465c3->leave($__internal_803c07bddbe04a0f871ee68352ec3d5b3d19fe8115145a6963cb93e0584465c3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f3290d033179afceb2a8a54ba3829036fbd8a1886a1fc0fff3afc672e18bd8e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3290d033179afceb2a8a54ba3829036fbd8a1886a1fc0fff3afc672e18bd8e2->enter($__internal_f3290d033179afceb2a8a54ba3829036fbd8a1886a1fc0fff3afc672e18bd8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f7d2bbf8a7e7fb891a3344946b03a6f0998a3171ca3cdb4a3d392a2bbc5522c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d2bbf8a7e7fb891a3344946b03a6f0998a3171ca3cdb4a3d392a2bbc5522c5->enter($__internal_f7d2bbf8a7e7fb891a3344946b03a6f0998a3171ca3cdb4a3d392a2bbc5522c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f7d2bbf8a7e7fb891a3344946b03a6f0998a3171ca3cdb4a3d392a2bbc5522c5->leave($__internal_f7d2bbf8a7e7fb891a3344946b03a6f0998a3171ca3cdb4a3d392a2bbc5522c5_prof);

        
        $__internal_f3290d033179afceb2a8a54ba3829036fbd8a1886a1fc0fff3afc672e18bd8e2->leave($__internal_f3290d033179afceb2a8a54ba3829036fbd8a1886a1fc0fff3afc672e18bd8e2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_586ae5ed820e2c819d339bec5d4cbb886fb53d8067c45b67ea92e83c1e1370f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_586ae5ed820e2c819d339bec5d4cbb886fb53d8067c45b67ea92e83c1e1370f9->enter($__internal_586ae5ed820e2c819d339bec5d4cbb886fb53d8067c45b67ea92e83c1e1370f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fed60136824323bd3f63d3a9671c83e63284f3b885b6e900cee91251b455faf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed60136824323bd3f63d3a9671c83e63284f3b885b6e900cee91251b455faf4->enter($__internal_fed60136824323bd3f63d3a9671c83e63284f3b885b6e900cee91251b455faf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_fed60136824323bd3f63d3a9671c83e63284f3b885b6e900cee91251b455faf4->leave($__internal_fed60136824323bd3f63d3a9671c83e63284f3b885b6e900cee91251b455faf4_prof);

        
        $__internal_586ae5ed820e2c819d339bec5d4cbb886fb53d8067c45b67ea92e83c1e1370f9->leave($__internal_586ae5ed820e2c819d339bec5d4cbb886fb53d8067c45b67ea92e83c1e1370f9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/home/karim/Desktop/sandbox/hacker-news/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
