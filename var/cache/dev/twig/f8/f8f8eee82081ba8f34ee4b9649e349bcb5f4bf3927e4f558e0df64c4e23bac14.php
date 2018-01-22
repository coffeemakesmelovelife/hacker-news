<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_9a610f5e7e27b4b1be3eeb1c4ffc73d78d8dff68c4f1fbba5b39a2eaccb4ee8d extends Twig_Template
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
        $__internal_df1086f8cebaddac3a2a9f585206473e61bd8d518ec1d98dbc2c0989d827baa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df1086f8cebaddac3a2a9f585206473e61bd8d518ec1d98dbc2c0989d827baa6->enter($__internal_df1086f8cebaddac3a2a9f585206473e61bd8d518ec1d98dbc2c0989d827baa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b9bc60cb86c4cb7b0bbf4b1ab6cb324a6e5344b551d8633628c8e1d5da65c76d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9bc60cb86c4cb7b0bbf4b1ab6cb324a6e5344b551d8633628c8e1d5da65c76d->enter($__internal_b9bc60cb86c4cb7b0bbf4b1ab6cb324a6e5344b551d8633628c8e1d5da65c76d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df1086f8cebaddac3a2a9f585206473e61bd8d518ec1d98dbc2c0989d827baa6->leave($__internal_df1086f8cebaddac3a2a9f585206473e61bd8d518ec1d98dbc2c0989d827baa6_prof);

        
        $__internal_b9bc60cb86c4cb7b0bbf4b1ab6cb324a6e5344b551d8633628c8e1d5da65c76d->leave($__internal_b9bc60cb86c4cb7b0bbf4b1ab6cb324a6e5344b551d8633628c8e1d5da65c76d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_058d41e1df3af0b281206549e7c0bf41eae99b90949b05920b7b457798ddeff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_058d41e1df3af0b281206549e7c0bf41eae99b90949b05920b7b457798ddeff6->enter($__internal_058d41e1df3af0b281206549e7c0bf41eae99b90949b05920b7b457798ddeff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0636c6fb6bdf92b108bdfdfc092a91f9fd698aa3683f879b51fb51f0e2f02db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0636c6fb6bdf92b108bdfdfc092a91f9fd698aa3683f879b51fb51f0e2f02db8->enter($__internal_0636c6fb6bdf92b108bdfdfc092a91f9fd698aa3683f879b51fb51f0e2f02db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0636c6fb6bdf92b108bdfdfc092a91f9fd698aa3683f879b51fb51f0e2f02db8->leave($__internal_0636c6fb6bdf92b108bdfdfc092a91f9fd698aa3683f879b51fb51f0e2f02db8_prof);

        
        $__internal_058d41e1df3af0b281206549e7c0bf41eae99b90949b05920b7b457798ddeff6->leave($__internal_058d41e1df3af0b281206549e7c0bf41eae99b90949b05920b7b457798ddeff6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_50341cd45aa4506047bf77217cc36300f819340b513fe0ee11f2ce30d9f45e79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50341cd45aa4506047bf77217cc36300f819340b513fe0ee11f2ce30d9f45e79->enter($__internal_50341cd45aa4506047bf77217cc36300f819340b513fe0ee11f2ce30d9f45e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8e8fc430ef93433edf000f0bdd8c405cafbef4b14537de9437873ce74d380100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e8fc430ef93433edf000f0bdd8c405cafbef4b14537de9437873ce74d380100->enter($__internal_8e8fc430ef93433edf000f0bdd8c405cafbef4b14537de9437873ce74d380100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8e8fc430ef93433edf000f0bdd8c405cafbef4b14537de9437873ce74d380100->leave($__internal_8e8fc430ef93433edf000f0bdd8c405cafbef4b14537de9437873ce74d380100_prof);

        
        $__internal_50341cd45aa4506047bf77217cc36300f819340b513fe0ee11f2ce30d9f45e79->leave($__internal_50341cd45aa4506047bf77217cc36300f819340b513fe0ee11f2ce30d9f45e79_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_02f13a6ff427e918ded9373d06aca2e844e214c5d1a5158a3cfb803dbdba2809 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02f13a6ff427e918ded9373d06aca2e844e214c5d1a5158a3cfb803dbdba2809->enter($__internal_02f13a6ff427e918ded9373d06aca2e844e214c5d1a5158a3cfb803dbdba2809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6ca02ae1163996611bc93b0a5e4022452273fbc14d65ff551cfd70cf947168da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca02ae1163996611bc93b0a5e4022452273fbc14d65ff551cfd70cf947168da->enter($__internal_6ca02ae1163996611bc93b0a5e4022452273fbc14d65ff551cfd70cf947168da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_6ca02ae1163996611bc93b0a5e4022452273fbc14d65ff551cfd70cf947168da->leave($__internal_6ca02ae1163996611bc93b0a5e4022452273fbc14d65ff551cfd70cf947168da_prof);

        
        $__internal_02f13a6ff427e918ded9373d06aca2e844e214c5d1a5158a3cfb803dbdba2809->leave($__internal_02f13a6ff427e918ded9373d06aca2e844e214c5d1a5158a3cfb803dbdba2809_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/karim/Desktop/sandbox/hacker-news/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
