<?php

/* default/login.html.twig */
class __TwigTemplate_4e588f1ec77b9cad771b2299c66c541430d5830dcb7c01a074fe74ae4d78e50d extends Twig_Template
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
        $__internal_998f0242303ec572f3713a58fe5e6026b80f3267078c8c5d03e9076971e2452e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_998f0242303ec572f3713a58fe5e6026b80f3267078c8c5d03e9076971e2452e->enter($__internal_998f0242303ec572f3713a58fe5e6026b80f3267078c8c5d03e9076971e2452e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $__internal_c5669ed343b21859003b4ad469a589a33a4b61dc7c83d98c92ef777eec1fa8e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5669ed343b21859003b4ad469a589a33a4b61dc7c83d98c92ef777eec1fa8e5->enter($__internal_c5669ed343b21859003b4ad469a589a33a4b61dc7c83d98c92ef777eec1fa8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_998f0242303ec572f3713a58fe5e6026b80f3267078c8c5d03e9076971e2452e->leave($__internal_998f0242303ec572f3713a58fe5e6026b80f3267078c8c5d03e9076971e2452e_prof);

        
        $__internal_c5669ed343b21859003b4ad469a589a33a4b61dc7c83d98c92ef777eec1fa8e5->leave($__internal_c5669ed343b21859003b4ad469a589a33a4b61dc7c83d98c92ef777eec1fa8e5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_edb67486446caf04e9ca03b158b452cfc44bb22aeacf4e3c771b52b35236977f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edb67486446caf04e9ca03b158b452cfc44bb22aeacf4e3c771b52b35236977f->enter($__internal_edb67486446caf04e9ca03b158b452cfc44bb22aeacf4e3c771b52b35236977f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9a932e1314fda223777508fefe44084f9986a64847ab864a90f1af19e5ea7ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a932e1314fda223777508fefe44084f9986a64847ab864a90f1af19e5ea7ee3->enter($__internal_9a932e1314fda223777508fefe44084f9986a64847ab864a90f1af19e5ea7ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Login ";
        
        $__internal_9a932e1314fda223777508fefe44084f9986a64847ab864a90f1af19e5ea7ee3->leave($__internal_9a932e1314fda223777508fefe44084f9986a64847ab864a90f1af19e5ea7ee3_prof);

        
        $__internal_edb67486446caf04e9ca03b158b452cfc44bb22aeacf4e3c771b52b35236977f->leave($__internal_edb67486446caf04e9ca03b158b452cfc44bb22aeacf4e3c771b52b35236977f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4090b05fa817d557d6fe9a0ac548e18c9dbf040968897413ad870b58883b370 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4090b05fa817d557d6fe9a0ac548e18c9dbf040968897413ad870b58883b370->enter($__internal_e4090b05fa817d557d6fe9a0ac548e18c9dbf040968897413ad870b58883b370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_510152fd08213dd67954aaa38e580587409b605d8df5d62f9415a66995429e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_510152fd08213dd67954aaa38e580587409b605d8df5d62f9415a66995429e78->enter($__internal_510152fd08213dd67954aaa38e580587409b605d8df5d62f9415a66995429e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
  <a class=\"btn btn-lg btn-primary btn-block\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension')->getLoginUrl("facebook"), "html", null, true);
        echo "\" type=\"submit\">Sign in with Facebook</a>
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
        
        $__internal_510152fd08213dd67954aaa38e580587409b605d8df5d62f9415a66995429e78->leave($__internal_510152fd08213dd67954aaa38e580587409b605d8df5d62f9415a66995429e78_prof);

        
        $__internal_e4090b05fa817d557d6fe9a0ac548e18c9dbf040968897413ad870b58883b370->leave($__internal_e4090b05fa817d557d6fe9a0ac548e18c9dbf040968897413ad870b58883b370_prof);

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
        return array (  98 => 20,  91 => 16,  85 => 13,  82 => 12,  76 => 9,  73 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
  <a class=\"btn btn-lg btn-primary btn-block\" href=\"{{ hwi_oauth_login_url('facebook') }}\" type=\"submit\">Sign in with Facebook</a>
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
