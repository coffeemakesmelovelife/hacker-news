<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_076027510416fa696d777c34c991d0465169627e32f165557253edd4fc20431a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af416d9735f5b84d3dff44a7351480d527c4c073c9b53d81e6e6a3dcca772119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af416d9735f5b84d3dff44a7351480d527c4c073c9b53d81e6e6a3dcca772119->enter($__internal_af416d9735f5b84d3dff44a7351480d527c4c073c9b53d81e6e6a3dcca772119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d9ab1749d7938bdbac171a53cb2796b1cdd56c33e920389a2e37ba1fe6333848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9ab1749d7938bdbac171a53cb2796b1cdd56c33e920389a2e37ba1fe6333848->enter($__internal_d9ab1749d7938bdbac171a53cb2796b1cdd56c33e920389a2e37ba1fe6333848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af416d9735f5b84d3dff44a7351480d527c4c073c9b53d81e6e6a3dcca772119->leave($__internal_af416d9735f5b84d3dff44a7351480d527c4c073c9b53d81e6e6a3dcca772119_prof);

        
        $__internal_d9ab1749d7938bdbac171a53cb2796b1cdd56c33e920389a2e37ba1fe6333848->leave($__internal_d9ab1749d7938bdbac171a53cb2796b1cdd56c33e920389a2e37ba1fe6333848_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_73aee030a8fd203f224f4b8ff10c6981114a2e250f3396d99e407f9bd0900a88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73aee030a8fd203f224f4b8ff10c6981114a2e250f3396d99e407f9bd0900a88->enter($__internal_73aee030a8fd203f224f4b8ff10c6981114a2e250f3396d99e407f9bd0900a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4af49245111f3cf710006067f5e312566afca56dae9f01e61d78f3748a33f275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4af49245111f3cf710006067f5e312566afca56dae9f01e61d78f3748a33f275->enter($__internal_4af49245111f3cf710006067f5e312566afca56dae9f01e61d78f3748a33f275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_4af49245111f3cf710006067f5e312566afca56dae9f01e61d78f3748a33f275->leave($__internal_4af49245111f3cf710006067f5e312566afca56dae9f01e61d78f3748a33f275_prof);

        
        $__internal_73aee030a8fd203f224f4b8ff10c6981114a2e250f3396d99e407f9bd0900a88->leave($__internal_73aee030a8fd203f224f4b8ff10c6981114a2e250f3396d99e407f9bd0900a88_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_169ae85a2ba90c46b7904839033fc5300e31fafc4f98205439fadc69cb2cf5bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_169ae85a2ba90c46b7904839033fc5300e31fafc4f98205439fadc69cb2cf5bd->enter($__internal_169ae85a2ba90c46b7904839033fc5300e31fafc4f98205439fadc69cb2cf5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b9df5b4d91876071f9160333b2615e27ee0dcf988611841f6e2cdf18f1c2a4ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9df5b4d91876071f9160333b2615e27ee0dcf988611841f6e2cdf18f1c2a4ee->enter($__internal_b9df5b4d91876071f9160333b2615e27ee0dcf988611841f6e2cdf18f1c2a4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b9df5b4d91876071f9160333b2615e27ee0dcf988611841f6e2cdf18f1c2a4ee->leave($__internal_b9df5b4d91876071f9160333b2615e27ee0dcf988611841f6e2cdf18f1c2a4ee_prof);

        
        $__internal_169ae85a2ba90c46b7904839033fc5300e31fafc4f98205439fadc69cb2cf5bd->leave($__internal_169ae85a2ba90c46b7904839033fc5300e31fafc4f98205439fadc69cb2cf5bd_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7703dcc66a5d8f1177a9c9c1582d8fa0a948e660e1c5a7aacd992954a2089ba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7703dcc66a5d8f1177a9c9c1582d8fa0a948e660e1c5a7aacd992954a2089ba9->enter($__internal_7703dcc66a5d8f1177a9c9c1582d8fa0a948e660e1c5a7aacd992954a2089ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce465f0a80145de47f057119774454e397e53239cafd1370f14c8687ff0dfa64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce465f0a80145de47f057119774454e397e53239cafd1370f14c8687ff0dfa64->enter($__internal_ce465f0a80145de47f057119774454e397e53239cafd1370f14c8687ff0dfa64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ce465f0a80145de47f057119774454e397e53239cafd1370f14c8687ff0dfa64->leave($__internal_ce465f0a80145de47f057119774454e397e53239cafd1370f14c8687ff0dfa64_prof);

        
        $__internal_7703dcc66a5d8f1177a9c9c1582d8fa0a948e660e1c5a7aacd992954a2089ba9->leave($__internal_7703dcc66a5d8f1177a9c9c1582d8fa0a948e660e1c5a7aacd992954a2089ba9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/karim/Desktop/sandbox/hacker-news/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
