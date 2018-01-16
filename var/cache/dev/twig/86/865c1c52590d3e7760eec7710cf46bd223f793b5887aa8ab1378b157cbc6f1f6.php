<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
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
        $__internal_9e6833b776df9a0940f194bc6d611ea96ed622fc7a5008571157db0467670a7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e6833b776df9a0940f194bc6d611ea96ed622fc7a5008571157db0467670a7e->enter($__internal_9e6833b776df9a0940f194bc6d611ea96ed622fc7a5008571157db0467670a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3d431bb8d49ad19e0caf774263ec28d4aa20d8280fd4bed65cdf369749a08008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d431bb8d49ad19e0caf774263ec28d4aa20d8280fd4bed65cdf369749a08008->enter($__internal_3d431bb8d49ad19e0caf774263ec28d4aa20d8280fd4bed65cdf369749a08008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e6833b776df9a0940f194bc6d611ea96ed622fc7a5008571157db0467670a7e->leave($__internal_9e6833b776df9a0940f194bc6d611ea96ed622fc7a5008571157db0467670a7e_prof);

        
        $__internal_3d431bb8d49ad19e0caf774263ec28d4aa20d8280fd4bed65cdf369749a08008->leave($__internal_3d431bb8d49ad19e0caf774263ec28d4aa20d8280fd4bed65cdf369749a08008_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e3e0e837972836a70d2b3d2665708a18b327400c0ff0832ddcf213d50ff49bed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3e0e837972836a70d2b3d2665708a18b327400c0ff0832ddcf213d50ff49bed->enter($__internal_e3e0e837972836a70d2b3d2665708a18b327400c0ff0832ddcf213d50ff49bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_30c22e960a2a8c7d3e0e25878d7857132e0524e735f7f500ebbd109f93eacb3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c22e960a2a8c7d3e0e25878d7857132e0524e735f7f500ebbd109f93eacb3b->enter($__internal_30c22e960a2a8c7d3e0e25878d7857132e0524e735f7f500ebbd109f93eacb3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_30c22e960a2a8c7d3e0e25878d7857132e0524e735f7f500ebbd109f93eacb3b->leave($__internal_30c22e960a2a8c7d3e0e25878d7857132e0524e735f7f500ebbd109f93eacb3b_prof);

        
        $__internal_e3e0e837972836a70d2b3d2665708a18b327400c0ff0832ddcf213d50ff49bed->leave($__internal_e3e0e837972836a70d2b3d2665708a18b327400c0ff0832ddcf213d50ff49bed_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6e0451ba1c17b77a7dd0e2359c0fb1ad7b3ffe7f01df3f3c23a618df94f4f83c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e0451ba1c17b77a7dd0e2359c0fb1ad7b3ffe7f01df3f3c23a618df94f4f83c->enter($__internal_6e0451ba1c17b77a7dd0e2359c0fb1ad7b3ffe7f01df3f3c23a618df94f4f83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4aeb0a9545a5e7c06e0235dfef6a81fc387271be321dcd4bbafc2f677262a97b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aeb0a9545a5e7c06e0235dfef6a81fc387271be321dcd4bbafc2f677262a97b->enter($__internal_4aeb0a9545a5e7c06e0235dfef6a81fc387271be321dcd4bbafc2f677262a97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4aeb0a9545a5e7c06e0235dfef6a81fc387271be321dcd4bbafc2f677262a97b->leave($__internal_4aeb0a9545a5e7c06e0235dfef6a81fc387271be321dcd4bbafc2f677262a97b_prof);

        
        $__internal_6e0451ba1c17b77a7dd0e2359c0fb1ad7b3ffe7f01df3f3c23a618df94f4f83c->leave($__internal_6e0451ba1c17b77a7dd0e2359c0fb1ad7b3ffe7f01df3f3c23a618df94f4f83c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d97132f7294aca26f89a40d986e88a0630252b623cc6da4ba7282f78f35ab9c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d97132f7294aca26f89a40d986e88a0630252b623cc6da4ba7282f78f35ab9c5->enter($__internal_d97132f7294aca26f89a40d986e88a0630252b623cc6da4ba7282f78f35ab9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0a720d6d7baa8981481a32eed25477b195aa19cc59c5149cfc67e55f179b05f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a720d6d7baa8981481a32eed25477b195aa19cc59c5149cfc67e55f179b05f3->enter($__internal_0a720d6d7baa8981481a32eed25477b195aa19cc59c5149cfc67e55f179b05f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0a720d6d7baa8981481a32eed25477b195aa19cc59c5149cfc67e55f179b05f3->leave($__internal_0a720d6d7baa8981481a32eed25477b195aa19cc59c5149cfc67e55f179b05f3_prof);

        
        $__internal_d97132f7294aca26f89a40d986e88a0630252b623cc6da4ba7282f78f35ab9c5->leave($__internal_d97132f7294aca26f89a40d986e88a0630252b623cc6da4ba7282f78f35ab9c5_prof);

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
