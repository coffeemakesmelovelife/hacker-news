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
        $__internal_50b6a650b3056e63998e8444cd26467cf2e86c7a0681b8948edbfc7111bd3edf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50b6a650b3056e63998e8444cd26467cf2e86c7a0681b8948edbfc7111bd3edf->enter($__internal_50b6a650b3056e63998e8444cd26467cf2e86c7a0681b8948edbfc7111bd3edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b6e8d099ff26d5a325adf39993847f4f4b6f517ea0190ff534d61f470fce7de7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6e8d099ff26d5a325adf39993847f4f4b6f517ea0190ff534d61f470fce7de7->enter($__internal_b6e8d099ff26d5a325adf39993847f4f4b6f517ea0190ff534d61f470fce7de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50b6a650b3056e63998e8444cd26467cf2e86c7a0681b8948edbfc7111bd3edf->leave($__internal_50b6a650b3056e63998e8444cd26467cf2e86c7a0681b8948edbfc7111bd3edf_prof);

        
        $__internal_b6e8d099ff26d5a325adf39993847f4f4b6f517ea0190ff534d61f470fce7de7->leave($__internal_b6e8d099ff26d5a325adf39993847f4f4b6f517ea0190ff534d61f470fce7de7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4e6bde2e4d50b1096afad632c7016e1d5b5080c75b54447c93d1ad6c6d34b99e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e6bde2e4d50b1096afad632c7016e1d5b5080c75b54447c93d1ad6c6d34b99e->enter($__internal_4e6bde2e4d50b1096afad632c7016e1d5b5080c75b54447c93d1ad6c6d34b99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4c7f3b2c1d725caafcbda057ca82d799850aa2b89156c1543e82bcca075ed436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c7f3b2c1d725caafcbda057ca82d799850aa2b89156c1543e82bcca075ed436->enter($__internal_4c7f3b2c1d725caafcbda057ca82d799850aa2b89156c1543e82bcca075ed436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4c7f3b2c1d725caafcbda057ca82d799850aa2b89156c1543e82bcca075ed436->leave($__internal_4c7f3b2c1d725caafcbda057ca82d799850aa2b89156c1543e82bcca075ed436_prof);

        
        $__internal_4e6bde2e4d50b1096afad632c7016e1d5b5080c75b54447c93d1ad6c6d34b99e->leave($__internal_4e6bde2e4d50b1096afad632c7016e1d5b5080c75b54447c93d1ad6c6d34b99e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e37c0a53add2c388260ed5b4d8725ca24b65e77398fdaa0e586f276baa220693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e37c0a53add2c388260ed5b4d8725ca24b65e77398fdaa0e586f276baa220693->enter($__internal_e37c0a53add2c388260ed5b4d8725ca24b65e77398fdaa0e586f276baa220693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5485f556b6c9112c012c06db13bfc65d4eb1070bfcc182fc597500828969e60a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5485f556b6c9112c012c06db13bfc65d4eb1070bfcc182fc597500828969e60a->enter($__internal_5485f556b6c9112c012c06db13bfc65d4eb1070bfcc182fc597500828969e60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5485f556b6c9112c012c06db13bfc65d4eb1070bfcc182fc597500828969e60a->leave($__internal_5485f556b6c9112c012c06db13bfc65d4eb1070bfcc182fc597500828969e60a_prof);

        
        $__internal_e37c0a53add2c388260ed5b4d8725ca24b65e77398fdaa0e586f276baa220693->leave($__internal_e37c0a53add2c388260ed5b4d8725ca24b65e77398fdaa0e586f276baa220693_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ae85a3737b04d1555f0829d8915865cfb49a705bc4c4a7cb01842c80342c6d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ae85a3737b04d1555f0829d8915865cfb49a705bc4c4a7cb01842c80342c6d8->enter($__internal_8ae85a3737b04d1555f0829d8915865cfb49a705bc4c4a7cb01842c80342c6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b5d10d877ca1f113791e2aecf5236942ae4817773d7c4a3fabac59cbf7974c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b5d10d877ca1f113791e2aecf5236942ae4817773d7c4a3fabac59cbf7974c4->enter($__internal_2b5d10d877ca1f113791e2aecf5236942ae4817773d7c4a3fabac59cbf7974c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_2b5d10d877ca1f113791e2aecf5236942ae4817773d7c4a3fabac59cbf7974c4->leave($__internal_2b5d10d877ca1f113791e2aecf5236942ae4817773d7c4a3fabac59cbf7974c4_prof);

        
        $__internal_8ae85a3737b04d1555f0829d8915865cfb49a705bc4c4a7cb01842c80342c6d8->leave($__internal_8ae85a3737b04d1555f0829d8915865cfb49a705bc4c4a7cb01842c80342c6d8_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/karim/Desktop/sandbox/symfony-standard-2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
