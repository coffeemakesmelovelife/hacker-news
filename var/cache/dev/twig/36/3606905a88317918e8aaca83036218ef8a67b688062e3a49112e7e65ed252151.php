<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d416c7ed49b4333dd461f1df9e2c73ada132ddfde3b888652721d39b4c46c213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d416c7ed49b4333dd461f1df9e2c73ada132ddfde3b888652721d39b4c46c213->enter($__internal_d416c7ed49b4333dd461f1df9e2c73ada132ddfde3b888652721d39b4c46c213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7c38b3804b10fb4fcd7a378f08c82fe192b6e2b3fe6750541d24d562187ba2bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c38b3804b10fb4fcd7a378f08c82fe192b6e2b3fe6750541d24d562187ba2bd->enter($__internal_7c38b3804b10fb4fcd7a378f08c82fe192b6e2b3fe6750541d24d562187ba2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d416c7ed49b4333dd461f1df9e2c73ada132ddfde3b888652721d39b4c46c213->leave($__internal_d416c7ed49b4333dd461f1df9e2c73ada132ddfde3b888652721d39b4c46c213_prof);

        
        $__internal_7c38b3804b10fb4fcd7a378f08c82fe192b6e2b3fe6750541d24d562187ba2bd->leave($__internal_7c38b3804b10fb4fcd7a378f08c82fe192b6e2b3fe6750541d24d562187ba2bd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e549fdd49fecdbe96c5db6a8330ffa6a9adb4593010ecf0f674466a52fab71fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e549fdd49fecdbe96c5db6a8330ffa6a9adb4593010ecf0f674466a52fab71fa->enter($__internal_e549fdd49fecdbe96c5db6a8330ffa6a9adb4593010ecf0f674466a52fab71fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bc927801dc6001b81a2e1947f7e6cf66d26c661e1d69dc2751ab7d19e68e4d38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc927801dc6001b81a2e1947f7e6cf66d26c661e1d69dc2751ab7d19e68e4d38->enter($__internal_bc927801dc6001b81a2e1947f7e6cf66d26c661e1d69dc2751ab7d19e68e4d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bc927801dc6001b81a2e1947f7e6cf66d26c661e1d69dc2751ab7d19e68e4d38->leave($__internal_bc927801dc6001b81a2e1947f7e6cf66d26c661e1d69dc2751ab7d19e68e4d38_prof);

        
        $__internal_e549fdd49fecdbe96c5db6a8330ffa6a9adb4593010ecf0f674466a52fab71fa->leave($__internal_e549fdd49fecdbe96c5db6a8330ffa6a9adb4593010ecf0f674466a52fab71fa_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ce1302da188006513aada223687641350b1ab73948b8793915f5f52ed9db2e26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce1302da188006513aada223687641350b1ab73948b8793915f5f52ed9db2e26->enter($__internal_ce1302da188006513aada223687641350b1ab73948b8793915f5f52ed9db2e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9741618082fb69b13d9630af4447951801cc9079a41686851d2f0113665a89c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9741618082fb69b13d9630af4447951801cc9079a41686851d2f0113665a89c6->enter($__internal_9741618082fb69b13d9630af4447951801cc9079a41686851d2f0113665a89c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9741618082fb69b13d9630af4447951801cc9079a41686851d2f0113665a89c6->leave($__internal_9741618082fb69b13d9630af4447951801cc9079a41686851d2f0113665a89c6_prof);

        
        $__internal_ce1302da188006513aada223687641350b1ab73948b8793915f5f52ed9db2e26->leave($__internal_ce1302da188006513aada223687641350b1ab73948b8793915f5f52ed9db2e26_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_11fbe698114a98b951a1caaf2d8d4daf660957b1ef5f04ed079dc8085e521d42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11fbe698114a98b951a1caaf2d8d4daf660957b1ef5f04ed079dc8085e521d42->enter($__internal_11fbe698114a98b951a1caaf2d8d4daf660957b1ef5f04ed079dc8085e521d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4ba123b0739bb753bb0bdafb50e856e7c0c9908e7fdb4d528ca7b57f1f1fca32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ba123b0739bb753bb0bdafb50e856e7c0c9908e7fdb4d528ca7b57f1f1fca32->enter($__internal_4ba123b0739bb753bb0bdafb50e856e7c0c9908e7fdb4d528ca7b57f1f1fca32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4ba123b0739bb753bb0bdafb50e856e7c0c9908e7fdb4d528ca7b57f1f1fca32->leave($__internal_4ba123b0739bb753bb0bdafb50e856e7c0c9908e7fdb4d528ca7b57f1f1fca32_prof);

        
        $__internal_11fbe698114a98b951a1caaf2d8d4daf660957b1ef5f04ed079dc8085e521d42->leave($__internal_11fbe698114a98b951a1caaf2d8d4daf660957b1ef5f04ed079dc8085e521d42_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/karim/Desktop/sandbox/symfony-standard-2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
