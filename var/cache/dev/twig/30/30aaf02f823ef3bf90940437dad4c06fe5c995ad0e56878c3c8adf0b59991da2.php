<?php

/* base.html.twig */
class __TwigTemplate_1bdbe4a5e7ffcb0fa4d78cd34e44d26c7fe5da24e6582d3b4b4bf4f79baa38d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef7244c7009dfc8ddd3a90bff68759c2f97033bc080105a09dcab2358a1ff8e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef7244c7009dfc8ddd3a90bff68759c2f97033bc080105a09dcab2358a1ff8e1->enter($__internal_ef7244c7009dfc8ddd3a90bff68759c2f97033bc080105a09dcab2358a1ff8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_85ba941b8c5d7542b9ef52199fad9ce1bae2f6c3a5d187551a081f4d32179f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ba941b8c5d7542b9ef52199fad9ce1bae2f6c3a5d187551a081f4d32179f2a->enter($__internal_85ba941b8c5d7542b9ef52199fad9ce1bae2f6c3a5d187551a081f4d32179f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
        <style>
          .no-under:hover {
            text-decoration: none !important;
          }
        </style>
    </head>
    <body>
        ";
        // line 17
        $this->loadTemplate("default/navbar.html.twig", "base.html.twig", 17)->display($context);
        // line 18
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
    </body>
</html>
";
        
        $__internal_ef7244c7009dfc8ddd3a90bff68759c2f97033bc080105a09dcab2358a1ff8e1->leave($__internal_ef7244c7009dfc8ddd3a90bff68759c2f97033bc080105a09dcab2358a1ff8e1_prof);

        
        $__internal_85ba941b8c5d7542b9ef52199fad9ce1bae2f6c3a5d187551a081f4d32179f2a->leave($__internal_85ba941b8c5d7542b9ef52199fad9ce1bae2f6c3a5d187551a081f4d32179f2a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_701962943c6ba152b7b792adbb8cfe20693f38c3bd23d747f7ca6aa16499920c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_701962943c6ba152b7b792adbb8cfe20693f38c3bd23d747f7ca6aa16499920c->enter($__internal_701962943c6ba152b7b792adbb8cfe20693f38c3bd23d747f7ca6aa16499920c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_06885b8f4c5ce2d5d5b0025718011d6c8143d9cf0fa8e1de04424020541b4ba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06885b8f4c5ce2d5d5b0025718011d6c8143d9cf0fa8e1de04424020541b4ba7->enter($__internal_06885b8f4c5ce2d5d5b0025718011d6c8143d9cf0fa8e1de04424020541b4ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_06885b8f4c5ce2d5d5b0025718011d6c8143d9cf0fa8e1de04424020541b4ba7->leave($__internal_06885b8f4c5ce2d5d5b0025718011d6c8143d9cf0fa8e1de04424020541b4ba7_prof);

        
        $__internal_701962943c6ba152b7b792adbb8cfe20693f38c3bd23d747f7ca6aa16499920c->leave($__internal_701962943c6ba152b7b792adbb8cfe20693f38c3bd23d747f7ca6aa16499920c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ffcad8e947772c663ef5e56f796fdc9d7e917e13803bb621b1291812802d85c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffcad8e947772c663ef5e56f796fdc9d7e917e13803bb621b1291812802d85c3->enter($__internal_ffcad8e947772c663ef5e56f796fdc9d7e917e13803bb621b1291812802d85c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_44256a9f2f5fa5112c682abbf68eccd6d1efce60f56a2aec86a4ffeea75f2072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44256a9f2f5fa5112c682abbf68eccd6d1efce60f56a2aec86a4ffeea75f2072->enter($__internal_44256a9f2f5fa5112c682abbf68eccd6d1efce60f56a2aec86a4ffeea75f2072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_44256a9f2f5fa5112c682abbf68eccd6d1efce60f56a2aec86a4ffeea75f2072->leave($__internal_44256a9f2f5fa5112c682abbf68eccd6d1efce60f56a2aec86a4ffeea75f2072_prof);

        
        $__internal_ffcad8e947772c663ef5e56f796fdc9d7e917e13803bb621b1291812802d85c3->leave($__internal_ffcad8e947772c663ef5e56f796fdc9d7e917e13803bb621b1291812802d85c3_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e8ccfeb5064948590e81b33dccd5e8e1478da0b6ba7c6ea694dc1c63ec2e780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e8ccfeb5064948590e81b33dccd5e8e1478da0b6ba7c6ea694dc1c63ec2e780->enter($__internal_0e8ccfeb5064948590e81b33dccd5e8e1478da0b6ba7c6ea694dc1c63ec2e780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0881bdaa9e692759d436f6175a0c7f64b0068ba3f46c4cac5a57e5846c5a9479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0881bdaa9e692759d436f6175a0c7f64b0068ba3f46c4cac5a57e5846c5a9479->enter($__internal_0881bdaa9e692759d436f6175a0c7f64b0068ba3f46c4cac5a57e5846c5a9479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0881bdaa9e692759d436f6175a0c7f64b0068ba3f46c4cac5a57e5846c5a9479->leave($__internal_0881bdaa9e692759d436f6175a0c7f64b0068ba3f46c4cac5a57e5846c5a9479_prof);

        
        $__internal_0e8ccfeb5064948590e81b33dccd5e8e1478da0b6ba7c6ea694dc1c63ec2e780->leave($__internal_0e8ccfeb5064948590e81b33dccd5e8e1478da0b6ba7c6ea694dc1c63ec2e780_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8766fce187b7cb4ac85f0a936ac259fed19b49396e2847e9dceaecce23aa67bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8766fce187b7cb4ac85f0a936ac259fed19b49396e2847e9dceaecce23aa67bb->enter($__internal_8766fce187b7cb4ac85f0a936ac259fed19b49396e2847e9dceaecce23aa67bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1a2818255b5ff6b113066dffe5a9e6534f569e8004547ff700d54e2faa048d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a2818255b5ff6b113066dffe5a9e6534f569e8004547ff700d54e2faa048d2d->enter($__internal_1a2818255b5ff6b113066dffe5a9e6534f569e8004547ff700d54e2faa048d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1a2818255b5ff6b113066dffe5a9e6534f569e8004547ff700d54e2faa048d2d->leave($__internal_1a2818255b5ff6b113066dffe5a9e6534f569e8004547ff700d54e2faa048d2d_prof);

        
        $__internal_8766fce187b7cb4ac85f0a936ac259fed19b49396e2847e9dceaecce23aa67bb->leave($__internal_8766fce187b7cb4ac85f0a936ac259fed19b49396e2847e9dceaecce23aa67bb_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 19,  113 => 18,  96 => 6,  78 => 5,  63 => 20,  60 => 19,  57 => 18,  55 => 17,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
        <style>
          .no-under:hover {
            text-decoration: none !important;
          }
        </style>
    </head>
    <body>
        {% include 'default/navbar.html.twig' %}
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
    </body>
</html>
", "base.html.twig", "/home/karim/Desktop/sandbox/hacker-news/app/Resources/views/base.html.twig");
    }
}
