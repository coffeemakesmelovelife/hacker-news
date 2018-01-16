<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5ac9fced6e330bb37c96287f4e2edd6021f8bce385ad3e0b01b1807e6d40978c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b4781b07b6b7d75a72d77e566dfeb9e444d22d5d20b0f4c5960f8fb55b66857 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b4781b07b6b7d75a72d77e566dfeb9e444d22d5d20b0f4c5960f8fb55b66857->enter($__internal_3b4781b07b6b7d75a72d77e566dfeb9e444d22d5d20b0f4c5960f8fb55b66857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9b5dc3df542688559acd63453b155a07e1cda7769d7dc4b15dcc59fa4b576fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b5dc3df542688559acd63453b155a07e1cda7769d7dc4b15dcc59fa4b576fd2->enter($__internal_9b5dc3df542688559acd63453b155a07e1cda7769d7dc4b15dcc59fa4b576fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b4781b07b6b7d75a72d77e566dfeb9e444d22d5d20b0f4c5960f8fb55b66857->leave($__internal_3b4781b07b6b7d75a72d77e566dfeb9e444d22d5d20b0f4c5960f8fb55b66857_prof);

        
        $__internal_9b5dc3df542688559acd63453b155a07e1cda7769d7dc4b15dcc59fa4b576fd2->leave($__internal_9b5dc3df542688559acd63453b155a07e1cda7769d7dc4b15dcc59fa4b576fd2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_13e2bcd01bac77f60433a43e4d25bcaf873f92f8b856899eda410ef9c8e92f3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13e2bcd01bac77f60433a43e4d25bcaf873f92f8b856899eda410ef9c8e92f3b->enter($__internal_13e2bcd01bac77f60433a43e4d25bcaf873f92f8b856899eda410ef9c8e92f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d47ba43fed559bc915e977696b26fd847926a957bc87ca60cf04dc636ccbf075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d47ba43fed559bc915e977696b26fd847926a957bc87ca60cf04dc636ccbf075->enter($__internal_d47ba43fed559bc915e977696b26fd847926a957bc87ca60cf04dc636ccbf075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d47ba43fed559bc915e977696b26fd847926a957bc87ca60cf04dc636ccbf075->leave($__internal_d47ba43fed559bc915e977696b26fd847926a957bc87ca60cf04dc636ccbf075_prof);

        
        $__internal_13e2bcd01bac77f60433a43e4d25bcaf873f92f8b856899eda410ef9c8e92f3b->leave($__internal_13e2bcd01bac77f60433a43e4d25bcaf873f92f8b856899eda410ef9c8e92f3b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_05edf8a5a52fcca0b1c8c69c329473de457907eef7dfaa9d6236b8df7adbf071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05edf8a5a52fcca0b1c8c69c329473de457907eef7dfaa9d6236b8df7adbf071->enter($__internal_05edf8a5a52fcca0b1c8c69c329473de457907eef7dfaa9d6236b8df7adbf071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3a9f65719e9c186787f3a0f5652e7aba1ab527551d0ae6df40534bf4ca170dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a9f65719e9c186787f3a0f5652e7aba1ab527551d0ae6df40534bf4ca170dd5->enter($__internal_3a9f65719e9c186787f3a0f5652e7aba1ab527551d0ae6df40534bf4ca170dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3a9f65719e9c186787f3a0f5652e7aba1ab527551d0ae6df40534bf4ca170dd5->leave($__internal_3a9f65719e9c186787f3a0f5652e7aba1ab527551d0ae6df40534bf4ca170dd5_prof);

        
        $__internal_05edf8a5a52fcca0b1c8c69c329473de457907eef7dfaa9d6236b8df7adbf071->leave($__internal_05edf8a5a52fcca0b1c8c69c329473de457907eef7dfaa9d6236b8df7adbf071_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_de8eeb3e6c93577f93c1b238464d33a8bbe9a1a892a0509701f7bec05183ec1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de8eeb3e6c93577f93c1b238464d33a8bbe9a1a892a0509701f7bec05183ec1b->enter($__internal_de8eeb3e6c93577f93c1b238464d33a8bbe9a1a892a0509701f7bec05183ec1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d49fbdb020fa70c2d97ff56458b9dda0e2b37b00419d56231253fc1553166149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d49fbdb020fa70c2d97ff56458b9dda0e2b37b00419d56231253fc1553166149->enter($__internal_d49fbdb020fa70c2d97ff56458b9dda0e2b37b00419d56231253fc1553166149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d49fbdb020fa70c2d97ff56458b9dda0e2b37b00419d56231253fc1553166149->leave($__internal_d49fbdb020fa70c2d97ff56458b9dda0e2b37b00419d56231253fc1553166149_prof);

        
        $__internal_de8eeb3e6c93577f93c1b238464d33a8bbe9a1a892a0509701f7bec05183ec1b->leave($__internal_de8eeb3e6c93577f93c1b238464d33a8bbe9a1a892a0509701f7bec05183ec1b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/karim/Desktop/sandbox/symfony-standard-2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
