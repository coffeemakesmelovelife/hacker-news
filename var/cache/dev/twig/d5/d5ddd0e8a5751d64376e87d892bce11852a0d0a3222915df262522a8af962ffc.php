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
        $__internal_d2d867c908fe4df409f33b138ffa2313f2ea1dcdd0eee44115b30c5575937fd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2d867c908fe4df409f33b138ffa2313f2ea1dcdd0eee44115b30c5575937fd4->enter($__internal_d2d867c908fe4df409f33b138ffa2313f2ea1dcdd0eee44115b30c5575937fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_400d35dfb2d4af78c9dd9dbedf9e8b94c059796e6545ad71418956dd33e9550c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400d35dfb2d4af78c9dd9dbedf9e8b94c059796e6545ad71418956dd33e9550c->enter($__internal_400d35dfb2d4af78c9dd9dbedf9e8b94c059796e6545ad71418956dd33e9550c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2d867c908fe4df409f33b138ffa2313f2ea1dcdd0eee44115b30c5575937fd4->leave($__internal_d2d867c908fe4df409f33b138ffa2313f2ea1dcdd0eee44115b30c5575937fd4_prof);

        
        $__internal_400d35dfb2d4af78c9dd9dbedf9e8b94c059796e6545ad71418956dd33e9550c->leave($__internal_400d35dfb2d4af78c9dd9dbedf9e8b94c059796e6545ad71418956dd33e9550c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_50d4414e21159bfa76b15b26570d217a49d27cd9e1a720d91b6762a5a99e4202 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50d4414e21159bfa76b15b26570d217a49d27cd9e1a720d91b6762a5a99e4202->enter($__internal_50d4414e21159bfa76b15b26570d217a49d27cd9e1a720d91b6762a5a99e4202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c7341b6642107984828c8a67362fbc51f37b309edf399af5bcd1ec6ff8bb4918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7341b6642107984828c8a67362fbc51f37b309edf399af5bcd1ec6ff8bb4918->enter($__internal_c7341b6642107984828c8a67362fbc51f37b309edf399af5bcd1ec6ff8bb4918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c7341b6642107984828c8a67362fbc51f37b309edf399af5bcd1ec6ff8bb4918->leave($__internal_c7341b6642107984828c8a67362fbc51f37b309edf399af5bcd1ec6ff8bb4918_prof);

        
        $__internal_50d4414e21159bfa76b15b26570d217a49d27cd9e1a720d91b6762a5a99e4202->leave($__internal_50d4414e21159bfa76b15b26570d217a49d27cd9e1a720d91b6762a5a99e4202_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4e8d7db0bda2cfd0f13a7ee37526dc11cee3844bb4771c3d6d295120c2e22604 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e8d7db0bda2cfd0f13a7ee37526dc11cee3844bb4771c3d6d295120c2e22604->enter($__internal_4e8d7db0bda2cfd0f13a7ee37526dc11cee3844bb4771c3d6d295120c2e22604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d6b9832d708cce9de0eac0a1ce9170e454bb2c1b785540d48138289a51212144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6b9832d708cce9de0eac0a1ce9170e454bb2c1b785540d48138289a51212144->enter($__internal_d6b9832d708cce9de0eac0a1ce9170e454bb2c1b785540d48138289a51212144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d6b9832d708cce9de0eac0a1ce9170e454bb2c1b785540d48138289a51212144->leave($__internal_d6b9832d708cce9de0eac0a1ce9170e454bb2c1b785540d48138289a51212144_prof);

        
        $__internal_4e8d7db0bda2cfd0f13a7ee37526dc11cee3844bb4771c3d6d295120c2e22604->leave($__internal_4e8d7db0bda2cfd0f13a7ee37526dc11cee3844bb4771c3d6d295120c2e22604_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_10b11ba8db48e53976977d967c542f76cc27f3ff3e23a09f4500fb5bc82475a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10b11ba8db48e53976977d967c542f76cc27f3ff3e23a09f4500fb5bc82475a5->enter($__internal_10b11ba8db48e53976977d967c542f76cc27f3ff3e23a09f4500fb5bc82475a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_75d77886f5c8b48b590b89e6729f9e8aa1cea864c997957e1a474ee60c96e0cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d77886f5c8b48b590b89e6729f9e8aa1cea864c997957e1a474ee60c96e0cf->enter($__internal_75d77886f5c8b48b590b89e6729f9e8aa1cea864c997957e1a474ee60c96e0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_75d77886f5c8b48b590b89e6729f9e8aa1cea864c997957e1a474ee60c96e0cf->leave($__internal_75d77886f5c8b48b590b89e6729f9e8aa1cea864c997957e1a474ee60c96e0cf_prof);

        
        $__internal_10b11ba8db48e53976977d967c542f76cc27f3ff3e23a09f4500fb5bc82475a5->leave($__internal_10b11ba8db48e53976977d967c542f76cc27f3ff3e23a09f4500fb5bc82475a5_prof);

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
