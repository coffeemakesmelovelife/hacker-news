<?php

/* default/login.html.twig */
class __TwigTemplate_91ae5912ba1cd7846821fd9da10c84984ae536c59f817461c716679802df971a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa44b93acbed1d093545d2cec459c0ecf716c94668502bfcfc415e655a77ec12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa44b93acbed1d093545d2cec459c0ecf716c94668502bfcfc415e655a77ec12->enter($__internal_fa44b93acbed1d093545d2cec459c0ecf716c94668502bfcfc415e655a77ec12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $__internal_15d9de8d1e1ea09a01deca30f9936972906232f02366c6a2a92468f28ace9115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d9de8d1e1ea09a01deca30f9936972906232f02366c6a2a92468f28ace9115->enter($__internal_15d9de8d1e1ea09a01deca30f9936972906232f02366c6a2a92468f28ace9115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa44b93acbed1d093545d2cec459c0ecf716c94668502bfcfc415e655a77ec12->leave($__internal_fa44b93acbed1d093545d2cec459c0ecf716c94668502bfcfc415e655a77ec12_prof);

        
        $__internal_15d9de8d1e1ea09a01deca30f9936972906232f02366c6a2a92468f28ace9115->leave($__internal_15d9de8d1e1ea09a01deca30f9936972906232f02366c6a2a92468f28ace9115_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3284bc42a12971eae3ee9c4cccd044f104191ac85a1700aa84c5ce3dbeb1d579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3284bc42a12971eae3ee9c4cccd044f104191ac85a1700aa84c5ce3dbeb1d579->enter($__internal_3284bc42a12971eae3ee9c4cccd044f104191ac85a1700aa84c5ce3dbeb1d579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a73c8c755ef3b33ef6b12ae3ac4e7a07d105a795f7be5ef14095e759a4c43579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a73c8c755ef3b33ef6b12ae3ac4e7a07d105a795f7be5ef14095e759a4c43579->enter($__internal_a73c8c755ef3b33ef6b12ae3ac4e7a07d105a795f7be5ef14095e759a4c43579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Login ";
        
        $__internal_a73c8c755ef3b33ef6b12ae3ac4e7a07d105a795f7be5ef14095e759a4c43579->leave($__internal_a73c8c755ef3b33ef6b12ae3ac4e7a07d105a795f7be5ef14095e759a4c43579_prof);

        
        $__internal_3284bc42a12971eae3ee9c4cccd044f104191ac85a1700aa84c5ce3dbeb1d579->leave($__internal_3284bc42a12971eae3ee9c4cccd044f104191ac85a1700aa84c5ce3dbeb1d579_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_00d5cd28cc5764769e9fb4c50ff4a43554beebb30174ded376ceb85d9253dea3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00d5cd28cc5764769e9fb4c50ff4a43554beebb30174ded376ceb85d9253dea3->enter($__internal_00d5cd28cc5764769e9fb4c50ff4a43554beebb30174ded376ceb85d9253dea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9863fa20f5138aea4c3d0f11a51a29350b4233c1881c68809cb0611c7658be0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9863fa20f5138aea4c3d0f11a51a29350b4233c1881c68809cb0611c7658be0a->enter($__internal_9863fa20f5138aea4c3d0f11a51a29350b4233c1881c68809cb0611c7658be0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
";
        // line 7
        if (($context["errors"] ?? $this->getContext($context, "errors"))) {
            // line 8
            echo "<div class=\"alert alert-danger\" role=\"alert\">
";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errors"] ?? $this->getContext($context, "errors")), "messageKey", array()), "html", null, true);
            echo "
</div>
";
        }
        // line 12
        echo "
<form class=\"form-signin\" action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
  <h2 class=\"form-signin-heading\">Login</h2>
  <label for=\"inputEmail\" class=\"sr-only\">Username</label>
  <input type=\"text\" id=\"username\" name=\"username\" class=\"form-control\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["lastUser"] ?? $this->getContext($context, "lastUser")), "html", null, true);
        echo "\" placeholder=\"Username\" required autofocus>
  <label for=\"inputPassword\" class=\"sr-only\">Password</label>
  <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\" required>
  <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
  <a class=\"btn btn-lg btn-primary btn-block\" href=\"\" type=\"submit\">Sign in with Facebook</a>
  <br>Don't have an account? <a href=\"/register\">Register</a>
</form>

</div> <!-- /container -->
<style>
body {
  padding-top: 40px;
  padding-bottom: 40px;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type=\"email\"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type=\"password\"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
";
        
        $__internal_9863fa20f5138aea4c3d0f11a51a29350b4233c1881c68809cb0611c7658be0a->leave($__internal_9863fa20f5138aea4c3d0f11a51a29350b4233c1881c68809cb0611c7658be0a_prof);

        
        $__internal_00d5cd28cc5764769e9fb4c50ff4a43554beebb30174ded376ceb85d9253dea3->leave($__internal_00d5cd28cc5764769e9fb4c50ff4a43554beebb30174ded376ceb85d9253dea3_prof);

    }

    public function getTemplateName()
    {
        return "default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 16,  85 => 13,  82 => 12,  76 => 9,  73 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} Login {% endblock %}

{% block body %}
<div class=\"container\">
{% if(errors) %}
<div class=\"alert alert-danger\" role=\"alert\">
{{errors.messageKey}}
</div>
{% endif %}

<form class=\"form-signin\" action=\"{{ path('login') }}\" method=\"post\">
  <h2 class=\"form-signin-heading\">Login</h2>
  <label for=\"inputEmail\" class=\"sr-only\">Username</label>
  <input type=\"text\" id=\"username\" name=\"username\" class=\"form-control\" value=\"{{lastUser}}\" placeholder=\"Username\" required autofocus>
  <label for=\"inputPassword\" class=\"sr-only\">Password</label>
  <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\" required>
  <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
  <a class=\"btn btn-lg btn-primary btn-block\" href=\"\" type=\"submit\">Sign in with Facebook</a>
  <br>Don't have an account? <a href=\"/register\">Register</a>
</form>

</div> <!-- /container -->
<style>
body {
  padding-top: 40px;
  padding-bottom: 40px;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type=\"email\"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type=\"password\"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
{% endblock %}
", "default/login.html.twig", "/home/karim/Desktop/sandbox/symfony-standard-2/app/Resources/views/default/login.html.twig");
    }
}
