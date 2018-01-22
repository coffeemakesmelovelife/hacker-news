<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bd37f68edc64545820bc59d042c2099c2b753bce6f278c832a8b7b468b65741d extends Twig_Template
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
        $__internal_7e988ec6f87a657335dc6254f4e1a06e13b31ef5baeb0e8432402b632b1becc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e988ec6f87a657335dc6254f4e1a06e13b31ef5baeb0e8432402b632b1becc6->enter($__internal_7e988ec6f87a657335dc6254f4e1a06e13b31ef5baeb0e8432402b632b1becc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_893023ffd10d7f152bcc948c371b4fabeac198c94a6c8d51ff99c580b772d802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_893023ffd10d7f152bcc948c371b4fabeac198c94a6c8d51ff99c580b772d802->enter($__internal_893023ffd10d7f152bcc948c371b4fabeac198c94a6c8d51ff99c580b772d802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e988ec6f87a657335dc6254f4e1a06e13b31ef5baeb0e8432402b632b1becc6->leave($__internal_7e988ec6f87a657335dc6254f4e1a06e13b31ef5baeb0e8432402b632b1becc6_prof);

        
        $__internal_893023ffd10d7f152bcc948c371b4fabeac198c94a6c8d51ff99c580b772d802->leave($__internal_893023ffd10d7f152bcc948c371b4fabeac198c94a6c8d51ff99c580b772d802_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_34fdb1ad62b6f83a62ee422d68787949a0bd7a40c979773f3a0183752a149132 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34fdb1ad62b6f83a62ee422d68787949a0bd7a40c979773f3a0183752a149132->enter($__internal_34fdb1ad62b6f83a62ee422d68787949a0bd7a40c979773f3a0183752a149132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_82bd0a3168ed10582d358b791b556ec030ac499103990fc966a3ba770ac1b585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82bd0a3168ed10582d358b791b556ec030ac499103990fc966a3ba770ac1b585->enter($__internal_82bd0a3168ed10582d358b791b556ec030ac499103990fc966a3ba770ac1b585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_82bd0a3168ed10582d358b791b556ec030ac499103990fc966a3ba770ac1b585->leave($__internal_82bd0a3168ed10582d358b791b556ec030ac499103990fc966a3ba770ac1b585_prof);

        
        $__internal_34fdb1ad62b6f83a62ee422d68787949a0bd7a40c979773f3a0183752a149132->leave($__internal_34fdb1ad62b6f83a62ee422d68787949a0bd7a40c979773f3a0183752a149132_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5676fc73659e8d88230c9fb29753b4758f1cad0877f03383fb1cf37e46f6ee81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5676fc73659e8d88230c9fb29753b4758f1cad0877f03383fb1cf37e46f6ee81->enter($__internal_5676fc73659e8d88230c9fb29753b4758f1cad0877f03383fb1cf37e46f6ee81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7c437273a711b9bccca6c9d03eaf16792833ba5d57af605d797ff6122ad7fa18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c437273a711b9bccca6c9d03eaf16792833ba5d57af605d797ff6122ad7fa18->enter($__internal_7c437273a711b9bccca6c9d03eaf16792833ba5d57af605d797ff6122ad7fa18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7c437273a711b9bccca6c9d03eaf16792833ba5d57af605d797ff6122ad7fa18->leave($__internal_7c437273a711b9bccca6c9d03eaf16792833ba5d57af605d797ff6122ad7fa18_prof);

        
        $__internal_5676fc73659e8d88230c9fb29753b4758f1cad0877f03383fb1cf37e46f6ee81->leave($__internal_5676fc73659e8d88230c9fb29753b4758f1cad0877f03383fb1cf37e46f6ee81_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3eff9ce95b0a924d94008486ab3c8dc3a0df6dbe16597ea840355eb8d80f2010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eff9ce95b0a924d94008486ab3c8dc3a0df6dbe16597ea840355eb8d80f2010->enter($__internal_3eff9ce95b0a924d94008486ab3c8dc3a0df6dbe16597ea840355eb8d80f2010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ddfaceb2d1b3aef93fa4ca64670f629a3b2b996b4a6f56f93a9528a68d1a28a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddfaceb2d1b3aef93fa4ca64670f629a3b2b996b4a6f56f93a9528a68d1a28a6->enter($__internal_ddfaceb2d1b3aef93fa4ca64670f629a3b2b996b4a6f56f93a9528a68d1a28a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ddfaceb2d1b3aef93fa4ca64670f629a3b2b996b4a6f56f93a9528a68d1a28a6->leave($__internal_ddfaceb2d1b3aef93fa4ca64670f629a3b2b996b4a6f56f93a9528a68d1a28a6_prof);

        
        $__internal_3eff9ce95b0a924d94008486ab3c8dc3a0df6dbe16597ea840355eb8d80f2010->leave($__internal_3eff9ce95b0a924d94008486ab3c8dc3a0df6dbe16597ea840355eb8d80f2010_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/karim/Desktop/sandbox/hacker-news/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
