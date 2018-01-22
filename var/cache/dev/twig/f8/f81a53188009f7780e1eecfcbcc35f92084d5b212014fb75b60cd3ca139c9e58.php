<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_84677b60e386e68653aa7d0f75627d6988faef422bc600437f0035154d74d548 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1f9d70d6807b94d6d12ccf279d4129590774dba9c4f8799f1cc0b735ed754ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1f9d70d6807b94d6d12ccf279d4129590774dba9c4f8799f1cc0b735ed754ab->enter($__internal_d1f9d70d6807b94d6d12ccf279d4129590774dba9c4f8799f1cc0b735ed754ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_535590280d253316e476341bf1d7c9129a14ff86349e540b0e4754e6cdab6c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_535590280d253316e476341bf1d7c9129a14ff86349e540b0e4754e6cdab6c33->enter($__internal_535590280d253316e476341bf1d7c9129a14ff86349e540b0e4754e6cdab6c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1f9d70d6807b94d6d12ccf279d4129590774dba9c4f8799f1cc0b735ed754ab->leave($__internal_d1f9d70d6807b94d6d12ccf279d4129590774dba9c4f8799f1cc0b735ed754ab_prof);

        
        $__internal_535590280d253316e476341bf1d7c9129a14ff86349e540b0e4754e6cdab6c33->leave($__internal_535590280d253316e476341bf1d7c9129a14ff86349e540b0e4754e6cdab6c33_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6509259640595bbd99a3a3c6f41b2bf2feaf5c967a12f41e6ce54223efa77bb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6509259640595bbd99a3a3c6f41b2bf2feaf5c967a12f41e6ce54223efa77bb2->enter($__internal_6509259640595bbd99a3a3c6f41b2bf2feaf5c967a12f41e6ce54223efa77bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1b26aae743678839375b9d020e73b6480769fc9e9fb282ce47cd921202c9d0dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b26aae743678839375b9d020e73b6480769fc9e9fb282ce47cd921202c9d0dd->enter($__internal_1b26aae743678839375b9d020e73b6480769fc9e9fb282ce47cd921202c9d0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_1b26aae743678839375b9d020e73b6480769fc9e9fb282ce47cd921202c9d0dd->leave($__internal_1b26aae743678839375b9d020e73b6480769fc9e9fb282ce47cd921202c9d0dd_prof);

        
        $__internal_6509259640595bbd99a3a3c6f41b2bf2feaf5c967a12f41e6ce54223efa77bb2->leave($__internal_6509259640595bbd99a3a3c6f41b2bf2feaf5c967a12f41e6ce54223efa77bb2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/karim/Desktop/sandbox/hacker-news/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
