<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e45d17e4272ba559d7d008c73d2bb3bcf5ca5fe4c7671eb69dafb6d61c71120f extends Twig_Template
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
        $__internal_12d02a2e0719df47ec9dcec6a3724d55c8bd96335122f107813c7a9bc8b48718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12d02a2e0719df47ec9dcec6a3724d55c8bd96335122f107813c7a9bc8b48718->enter($__internal_12d02a2e0719df47ec9dcec6a3724d55c8bd96335122f107813c7a9bc8b48718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f435c6790c27c7343307e5f69d839a8ed1a58f622d1d0943ff059ec08fe805ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f435c6790c27c7343307e5f69d839a8ed1a58f622d1d0943ff059ec08fe805ed->enter($__internal_f435c6790c27c7343307e5f69d839a8ed1a58f622d1d0943ff059ec08fe805ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12d02a2e0719df47ec9dcec6a3724d55c8bd96335122f107813c7a9bc8b48718->leave($__internal_12d02a2e0719df47ec9dcec6a3724d55c8bd96335122f107813c7a9bc8b48718_prof);

        
        $__internal_f435c6790c27c7343307e5f69d839a8ed1a58f622d1d0943ff059ec08fe805ed->leave($__internal_f435c6790c27c7343307e5f69d839a8ed1a58f622d1d0943ff059ec08fe805ed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_05edca31dc2e05c08ae59f07275b21c819196d29651db2bd735fa8e126ca4262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05edca31dc2e05c08ae59f07275b21c819196d29651db2bd735fa8e126ca4262->enter($__internal_05edca31dc2e05c08ae59f07275b21c819196d29651db2bd735fa8e126ca4262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2f3529a125da2574ac13214003221f4cfa8df9910ce357a265865777ea438d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f3529a125da2574ac13214003221f4cfa8df9910ce357a265865777ea438d0d->enter($__internal_2f3529a125da2574ac13214003221f4cfa8df9910ce357a265865777ea438d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2f3529a125da2574ac13214003221f4cfa8df9910ce357a265865777ea438d0d->leave($__internal_2f3529a125da2574ac13214003221f4cfa8df9910ce357a265865777ea438d0d_prof);

        
        $__internal_05edca31dc2e05c08ae59f07275b21c819196d29651db2bd735fa8e126ca4262->leave($__internal_05edca31dc2e05c08ae59f07275b21c819196d29651db2bd735fa8e126ca4262_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_71653f548e920e3505020b76da4df210f33e8ade03949659e85ddc153d3d87e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71653f548e920e3505020b76da4df210f33e8ade03949659e85ddc153d3d87e1->enter($__internal_71653f548e920e3505020b76da4df210f33e8ade03949659e85ddc153d3d87e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_932743dd0c4e12081a17c036d5255f065edb4d192a992bf2b12082805082abd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_932743dd0c4e12081a17c036d5255f065edb4d192a992bf2b12082805082abd5->enter($__internal_932743dd0c4e12081a17c036d5255f065edb4d192a992bf2b12082805082abd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_932743dd0c4e12081a17c036d5255f065edb4d192a992bf2b12082805082abd5->leave($__internal_932743dd0c4e12081a17c036d5255f065edb4d192a992bf2b12082805082abd5_prof);

        
        $__internal_71653f548e920e3505020b76da4df210f33e8ade03949659e85ddc153d3d87e1->leave($__internal_71653f548e920e3505020b76da4df210f33e8ade03949659e85ddc153d3d87e1_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c26b693f959af0225f820a1c9e527bb9c36d6233626f18e92ff989295d1ac56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c26b693f959af0225f820a1c9e527bb9c36d6233626f18e92ff989295d1ac56->enter($__internal_9c26b693f959af0225f820a1c9e527bb9c36d6233626f18e92ff989295d1ac56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_02ceb5b5eac8b00930e909c41a500fb506ea16c09f91cb2958386de4c73314c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ceb5b5eac8b00930e909c41a500fb506ea16c09f91cb2958386de4c73314c0->enter($__internal_02ceb5b5eac8b00930e909c41a500fb506ea16c09f91cb2958386de4c73314c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_02ceb5b5eac8b00930e909c41a500fb506ea16c09f91cb2958386de4c73314c0->leave($__internal_02ceb5b5eac8b00930e909c41a500fb506ea16c09f91cb2958386de4c73314c0_prof);

        
        $__internal_9c26b693f959af0225f820a1c9e527bb9c36d6233626f18e92ff989295d1ac56->leave($__internal_9c26b693f959af0225f820a1c9e527bb9c36d6233626f18e92ff989295d1ac56_prof);

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
