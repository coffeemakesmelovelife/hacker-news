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
        $__internal_586bc5f4e1bceab1f67c069b4cb55462fefe9cc5a6c551c1c517d742507c8e47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_586bc5f4e1bceab1f67c069b4cb55462fefe9cc5a6c551c1c517d742507c8e47->enter($__internal_586bc5f4e1bceab1f67c069b4cb55462fefe9cc5a6c551c1c517d742507c8e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_f13d3747f91c2cdbf6d5328ee2f1d57d7af0291edf6ad7b797133e7a351e6e92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f13d3747f91c2cdbf6d5328ee2f1d57d7af0291edf6ad7b797133e7a351e6e92->enter($__internal_f13d3747f91c2cdbf6d5328ee2f1d57d7af0291edf6ad7b797133e7a351e6e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_586bc5f4e1bceab1f67c069b4cb55462fefe9cc5a6c551c1c517d742507c8e47->leave($__internal_586bc5f4e1bceab1f67c069b4cb55462fefe9cc5a6c551c1c517d742507c8e47_prof);

        
        $__internal_f13d3747f91c2cdbf6d5328ee2f1d57d7af0291edf6ad7b797133e7a351e6e92->leave($__internal_f13d3747f91c2cdbf6d5328ee2f1d57d7af0291edf6ad7b797133e7a351e6e92_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_886f137d03eb1d7f9de99b2b8ba122b6882510575b9730566384dd898f1aab1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_886f137d03eb1d7f9de99b2b8ba122b6882510575b9730566384dd898f1aab1e->enter($__internal_886f137d03eb1d7f9de99b2b8ba122b6882510575b9730566384dd898f1aab1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7081b74c64b0070bdb6a4b829095c947779a15dd38d014d69566a67142411ee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7081b74c64b0070bdb6a4b829095c947779a15dd38d014d69566a67142411ee4->enter($__internal_7081b74c64b0070bdb6a4b829095c947779a15dd38d014d69566a67142411ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_7081b74c64b0070bdb6a4b829095c947779a15dd38d014d69566a67142411ee4->leave($__internal_7081b74c64b0070bdb6a4b829095c947779a15dd38d014d69566a67142411ee4_prof);

        
        $__internal_886f137d03eb1d7f9de99b2b8ba122b6882510575b9730566384dd898f1aab1e->leave($__internal_886f137d03eb1d7f9de99b2b8ba122b6882510575b9730566384dd898f1aab1e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8141e6145dbcadfe2907dee237348d769b4da091a862946cf2a4f82b460f2ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8141e6145dbcadfe2907dee237348d769b4da091a862946cf2a4f82b460f2ba->enter($__internal_a8141e6145dbcadfe2907dee237348d769b4da091a862946cf2a4f82b460f2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d94d009a778cd8b922da4e6366c8da7b0a962500ffe4f2924d51bf0c4a5006e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d94d009a778cd8b922da4e6366c8da7b0a962500ffe4f2924d51bf0c4a5006e->enter($__internal_3d94d009a778cd8b922da4e6366c8da7b0a962500ffe4f2924d51bf0c4a5006e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3d94d009a778cd8b922da4e6366c8da7b0a962500ffe4f2924d51bf0c4a5006e->leave($__internal_3d94d009a778cd8b922da4e6366c8da7b0a962500ffe4f2924d51bf0c4a5006e_prof);

        
        $__internal_a8141e6145dbcadfe2907dee237348d769b4da091a862946cf2a4f82b460f2ba->leave($__internal_a8141e6145dbcadfe2907dee237348d769b4da091a862946cf2a4f82b460f2ba_prof);

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
", "@WebProfiler/Profiler/open.html.twig", "/home/karim/Desktop/sandbox/symfony-standard-2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
