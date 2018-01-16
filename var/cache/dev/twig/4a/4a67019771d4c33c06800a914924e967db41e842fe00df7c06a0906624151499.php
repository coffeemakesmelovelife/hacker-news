<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1878275fdbc32b660cfbee6afea5d6e15c55adb100b0dbddcb4be415750c22a8 extends Twig_Template
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
        $__internal_edd1dfc493268859ddeb37d52b1639371356a95a990754dfbbbfbdf631dbbf92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edd1dfc493268859ddeb37d52b1639371356a95a990754dfbbbfbdf631dbbf92->enter($__internal_edd1dfc493268859ddeb37d52b1639371356a95a990754dfbbbfbdf631dbbf92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_037461559d34e1696bd5b60fdbe047328d152926370250e689b8375c3ade6707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_037461559d34e1696bd5b60fdbe047328d152926370250e689b8375c3ade6707->enter($__internal_037461559d34e1696bd5b60fdbe047328d152926370250e689b8375c3ade6707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edd1dfc493268859ddeb37d52b1639371356a95a990754dfbbbfbdf631dbbf92->leave($__internal_edd1dfc493268859ddeb37d52b1639371356a95a990754dfbbbfbdf631dbbf92_prof);

        
        $__internal_037461559d34e1696bd5b60fdbe047328d152926370250e689b8375c3ade6707->leave($__internal_037461559d34e1696bd5b60fdbe047328d152926370250e689b8375c3ade6707_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ef14927cfcb75c39e76e464e98bb5693d1a311ef873cdcc84839306ac6280349 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef14927cfcb75c39e76e464e98bb5693d1a311ef873cdcc84839306ac6280349->enter($__internal_ef14927cfcb75c39e76e464e98bb5693d1a311ef873cdcc84839306ac6280349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_39d540bed7dbc2d4cc7d656318702ecc99c46a06718f600764e4922e19b5b935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d540bed7dbc2d4cc7d656318702ecc99c46a06718f600764e4922e19b5b935->enter($__internal_39d540bed7dbc2d4cc7d656318702ecc99c46a06718f600764e4922e19b5b935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_39d540bed7dbc2d4cc7d656318702ecc99c46a06718f600764e4922e19b5b935->leave($__internal_39d540bed7dbc2d4cc7d656318702ecc99c46a06718f600764e4922e19b5b935_prof);

        
        $__internal_ef14927cfcb75c39e76e464e98bb5693d1a311ef873cdcc84839306ac6280349->leave($__internal_ef14927cfcb75c39e76e464e98bb5693d1a311ef873cdcc84839306ac6280349_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_4acf89e6fffcd91b58c5ce64962a5c7862d946776eb1358ed7edcc56f70a2fd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4acf89e6fffcd91b58c5ce64962a5c7862d946776eb1358ed7edcc56f70a2fd0->enter($__internal_4acf89e6fffcd91b58c5ce64962a5c7862d946776eb1358ed7edcc56f70a2fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f173792eadddf2cedf2af797bd00453175a8a69117ab073a85e14419b66d517d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f173792eadddf2cedf2af797bd00453175a8a69117ab073a85e14419b66d517d->enter($__internal_f173792eadddf2cedf2af797bd00453175a8a69117ab073a85e14419b66d517d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f173792eadddf2cedf2af797bd00453175a8a69117ab073a85e14419b66d517d->leave($__internal_f173792eadddf2cedf2af797bd00453175a8a69117ab073a85e14419b66d517d_prof);

        
        $__internal_4acf89e6fffcd91b58c5ce64962a5c7862d946776eb1358ed7edcc56f70a2fd0->leave($__internal_4acf89e6fffcd91b58c5ce64962a5c7862d946776eb1358ed7edcc56f70a2fd0_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_75a5bc6ff74d78d29fc19aff305e5ad7550f24c8b01c19cca55666ad7f8573f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75a5bc6ff74d78d29fc19aff305e5ad7550f24c8b01c19cca55666ad7f8573f5->enter($__internal_75a5bc6ff74d78d29fc19aff305e5ad7550f24c8b01c19cca55666ad7f8573f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de92c4270d29bc9f8fb4eaab23027dd9cc0cf46d2f4e4ca2c378cbe33eb934fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de92c4270d29bc9f8fb4eaab23027dd9cc0cf46d2f4e4ca2c378cbe33eb934fb->enter($__internal_de92c4270d29bc9f8fb4eaab23027dd9cc0cf46d2f4e4ca2c378cbe33eb934fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_de92c4270d29bc9f8fb4eaab23027dd9cc0cf46d2f4e4ca2c378cbe33eb934fb->leave($__internal_de92c4270d29bc9f8fb4eaab23027dd9cc0cf46d2f4e4ca2c378cbe33eb934fb_prof);

        
        $__internal_75a5bc6ff74d78d29fc19aff305e5ad7550f24c8b01c19cca55666ad7f8573f5->leave($__internal_75a5bc6ff74d78d29fc19aff305e5ad7550f24c8b01c19cca55666ad7f8573f5_prof);

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
