<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_27279ab81189a73e0eddc6ae54043b73885c8d375c453def75183940e58dae0d extends Twig_Template
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
        $__internal_133cc8949afe086827435a210e388a454ae283f086eb7360cdc40b8674aa1da5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_133cc8949afe086827435a210e388a454ae283f086eb7360cdc40b8674aa1da5->enter($__internal_133cc8949afe086827435a210e388a454ae283f086eb7360cdc40b8674aa1da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ab46b77e98cdf09791159d20801cd1e0ff4211b22947693496b43d7d215fb04c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab46b77e98cdf09791159d20801cd1e0ff4211b22947693496b43d7d215fb04c->enter($__internal_ab46b77e98cdf09791159d20801cd1e0ff4211b22947693496b43d7d215fb04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_133cc8949afe086827435a210e388a454ae283f086eb7360cdc40b8674aa1da5->leave($__internal_133cc8949afe086827435a210e388a454ae283f086eb7360cdc40b8674aa1da5_prof);

        
        $__internal_ab46b77e98cdf09791159d20801cd1e0ff4211b22947693496b43d7d215fb04c->leave($__internal_ab46b77e98cdf09791159d20801cd1e0ff4211b22947693496b43d7d215fb04c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4d48939386ed355b8a3b2aab9ea1ffc2ac21fcb4666c853bb7ea9de478fa7793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d48939386ed355b8a3b2aab9ea1ffc2ac21fcb4666c853bb7ea9de478fa7793->enter($__internal_4d48939386ed355b8a3b2aab9ea1ffc2ac21fcb4666c853bb7ea9de478fa7793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_10cb85baf8e080c93a5337fb3da23d5cb389b4389d254cd1506a9c17a91e07ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10cb85baf8e080c93a5337fb3da23d5cb389b4389d254cd1506a9c17a91e07ab->enter($__internal_10cb85baf8e080c93a5337fb3da23d5cb389b4389d254cd1506a9c17a91e07ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_10cb85baf8e080c93a5337fb3da23d5cb389b4389d254cd1506a9c17a91e07ab->leave($__internal_10cb85baf8e080c93a5337fb3da23d5cb389b4389d254cd1506a9c17a91e07ab_prof);

        
        $__internal_4d48939386ed355b8a3b2aab9ea1ffc2ac21fcb4666c853bb7ea9de478fa7793->leave($__internal_4d48939386ed355b8a3b2aab9ea1ffc2ac21fcb4666c853bb7ea9de478fa7793_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/home/karim/Desktop/sandbox/symfony-standard-2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
