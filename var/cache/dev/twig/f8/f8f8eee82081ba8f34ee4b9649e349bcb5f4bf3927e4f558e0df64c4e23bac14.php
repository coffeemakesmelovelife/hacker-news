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
        $__internal_d171db54e1a9c14d3adc3c4d3cd6127bf379992a415f1d91f1270ab960907568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d171db54e1a9c14d3adc3c4d3cd6127bf379992a415f1d91f1270ab960907568->enter($__internal_d171db54e1a9c14d3adc3c4d3cd6127bf379992a415f1d91f1270ab960907568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a97b284d56ebb1de3e41c2c8b021a3bc7a7c44be3b31dc55bd6841b38141c45b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a97b284d56ebb1de3e41c2c8b021a3bc7a7c44be3b31dc55bd6841b38141c45b->enter($__internal_a97b284d56ebb1de3e41c2c8b021a3bc7a7c44be3b31dc55bd6841b38141c45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d171db54e1a9c14d3adc3c4d3cd6127bf379992a415f1d91f1270ab960907568->leave($__internal_d171db54e1a9c14d3adc3c4d3cd6127bf379992a415f1d91f1270ab960907568_prof);

        
        $__internal_a97b284d56ebb1de3e41c2c8b021a3bc7a7c44be3b31dc55bd6841b38141c45b->leave($__internal_a97b284d56ebb1de3e41c2c8b021a3bc7a7c44be3b31dc55bd6841b38141c45b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5fc276719b9335ea1509b1d4d0413609e4f99fef625eb4a82171e0ffbc946080 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fc276719b9335ea1509b1d4d0413609e4f99fef625eb4a82171e0ffbc946080->enter($__internal_5fc276719b9335ea1509b1d4d0413609e4f99fef625eb4a82171e0ffbc946080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5f603ecd5d1cd4c0271cea5ad77302828ab6884a4db75d50b675f53d6c69e526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f603ecd5d1cd4c0271cea5ad77302828ab6884a4db75d50b675f53d6c69e526->enter($__internal_5f603ecd5d1cd4c0271cea5ad77302828ab6884a4db75d50b675f53d6c69e526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5f603ecd5d1cd4c0271cea5ad77302828ab6884a4db75d50b675f53d6c69e526->leave($__internal_5f603ecd5d1cd4c0271cea5ad77302828ab6884a4db75d50b675f53d6c69e526_prof);

        
        $__internal_5fc276719b9335ea1509b1d4d0413609e4f99fef625eb4a82171e0ffbc946080->leave($__internal_5fc276719b9335ea1509b1d4d0413609e4f99fef625eb4a82171e0ffbc946080_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fbb297ec8b5837b3250cc0c69d70f2d86e52901a6c9a87642d7f606f8ead8c50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbb297ec8b5837b3250cc0c69d70f2d86e52901a6c9a87642d7f606f8ead8c50->enter($__internal_fbb297ec8b5837b3250cc0c69d70f2d86e52901a6c9a87642d7f606f8ead8c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_68872ba8db4e0c5bb5870f275f6a4a0046db43434615ae5155e179a7b83be4a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68872ba8db4e0c5bb5870f275f6a4a0046db43434615ae5155e179a7b83be4a1->enter($__internal_68872ba8db4e0c5bb5870f275f6a4a0046db43434615ae5155e179a7b83be4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_68872ba8db4e0c5bb5870f275f6a4a0046db43434615ae5155e179a7b83be4a1->leave($__internal_68872ba8db4e0c5bb5870f275f6a4a0046db43434615ae5155e179a7b83be4a1_prof);

        
        $__internal_fbb297ec8b5837b3250cc0c69d70f2d86e52901a6c9a87642d7f606f8ead8c50->leave($__internal_fbb297ec8b5837b3250cc0c69d70f2d86e52901a6c9a87642d7f606f8ead8c50_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_32aed025dd6beb428bd2620d32a7384b1bfe653bbcb40a1a0f14a49aa0b045e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32aed025dd6beb428bd2620d32a7384b1bfe653bbcb40a1a0f14a49aa0b045e8->enter($__internal_32aed025dd6beb428bd2620d32a7384b1bfe653bbcb40a1a0f14a49aa0b045e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e51ea04295b8587ada8ca3478f03deba64309af1b115c5ad98d18b07fa18bca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e51ea04295b8587ada8ca3478f03deba64309af1b115c5ad98d18b07fa18bca8->enter($__internal_e51ea04295b8587ada8ca3478f03deba64309af1b115c5ad98d18b07fa18bca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e51ea04295b8587ada8ca3478f03deba64309af1b115c5ad98d18b07fa18bca8->leave($__internal_e51ea04295b8587ada8ca3478f03deba64309af1b115c5ad98d18b07fa18bca8_prof);

        
        $__internal_32aed025dd6beb428bd2620d32a7384b1bfe653bbcb40a1a0f14a49aa0b045e8->leave($__internal_32aed025dd6beb428bd2620d32a7384b1bfe653bbcb40a1a0f14a49aa0b045e8_prof);

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
