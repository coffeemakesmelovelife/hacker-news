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
        $__internal_385ce8d06eeb54ece49e3866c335643be6a09e7ccff0ebd421ee906ea0b6ab70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_385ce8d06eeb54ece49e3866c335643be6a09e7ccff0ebd421ee906ea0b6ab70->enter($__internal_385ce8d06eeb54ece49e3866c335643be6a09e7ccff0ebd421ee906ea0b6ab70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $__internal_90e5a536e0dd41060fbc1be3f24f0a180b4c2f313ee44044763e1942d8b7ab55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e5a536e0dd41060fbc1be3f24f0a180b4c2f313ee44044763e1942d8b7ab55->enter($__internal_90e5a536e0dd41060fbc1be3f24f0a180b4c2f313ee44044763e1942d8b7ab55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_385ce8d06eeb54ece49e3866c335643be6a09e7ccff0ebd421ee906ea0b6ab70->leave($__internal_385ce8d06eeb54ece49e3866c335643be6a09e7ccff0ebd421ee906ea0b6ab70_prof);

        
        $__internal_90e5a536e0dd41060fbc1be3f24f0a180b4c2f313ee44044763e1942d8b7ab55->leave($__internal_90e5a536e0dd41060fbc1be3f24f0a180b4c2f313ee44044763e1942d8b7ab55_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f50984421484b068afe3fff80c7b3205e933027f8fdffb6f3e0833f684f0441b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f50984421484b068afe3fff80c7b3205e933027f8fdffb6f3e0833f684f0441b->enter($__internal_f50984421484b068afe3fff80c7b3205e933027f8fdffb6f3e0833f684f0441b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3a84be323fbe8ed9d67a5c73a86ca82d61da25a009de77e8cc96747d04edca3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a84be323fbe8ed9d67a5c73a86ca82d61da25a009de77e8cc96747d04edca3e->enter($__internal_3a84be323fbe8ed9d67a5c73a86ca82d61da25a009de77e8cc96747d04edca3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Login ";
        
        $__internal_3a84be323fbe8ed9d67a5c73a86ca82d61da25a009de77e8cc96747d04edca3e->leave($__internal_3a84be323fbe8ed9d67a5c73a86ca82d61da25a009de77e8cc96747d04edca3e_prof);

        
        $__internal_f50984421484b068afe3fff80c7b3205e933027f8fdffb6f3e0833f684f0441b->leave($__internal_f50984421484b068afe3fff80c7b3205e933027f8fdffb6f3e0833f684f0441b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c84767c035aade6857d567c11ecbbec1af652ea738ff46140d5c3bc0d2a3080 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c84767c035aade6857d567c11ecbbec1af652ea738ff46140d5c3bc0d2a3080->enter($__internal_1c84767c035aade6857d567c11ecbbec1af652ea738ff46140d5c3bc0d2a3080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f77997f74a94ced05371bd23b21e4dfa127944d5d4da58436c502b2d30b00a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77997f74a94ced05371bd23b21e4dfa127944d5d4da58436c502b2d30b00a31->enter($__internal_f77997f74a94ced05371bd23b21e4dfa127944d5d4da58436c502b2d30b00a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
";
        // line 5
        if (($context["errors"] ?? $this->getContext($context, "errors"))) {
            // line 6
            echo "<div class=\"alert alert-danger\" role=\"alert\">
";
            // line 7
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute(($context["errors"] ?? $this->getContext($context, "errors")), "messageKey", array()), array("Username could not be found." => "Email could not be found")), "html", null, true);
            echo "
</div>
";
        }
        // line 10
        echo "
<form class=\"form-signin\" action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
  <h2 class=\"form-signin-heading\">Login</h2>
  <label for=\"inputEmail\" class=\"sr-only\">Username</label>
  <input type=\"email\" id=\"username\" name=\"username\" class=\"form-control\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["lastUser"] ?? $this->getContext($context, "lastUser")), "html", null, true);
        echo "\" placeholder=\"Username\" required autofocus>
  <label for=\"inputPassword\" class=\"sr-only\">Password</label>
  <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\" required>
  <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
  <button class=\"btn btn-lg btn-primary btn-block\" type=\"button\">
    <i class=\"fa fa-facebook-official\" aria-hidden=\"true\"></i>&nbsp;<a id=\"fbsign\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension')->getLoginUrl("facebook"), "html", null, true);
        echo "\">Sign in with Facebook</a>
  </button>
  <br>Don't have an account? <a href=\"/register\">Register</a>
</form>

</div> <!-- /container -->
<style>
body {
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

#fbsign {
  color: white;
}
#fbsign {
  text-decoration: none;
}
</style>
";
        
        $__internal_f77997f74a94ced05371bd23b21e4dfa127944d5d4da58436c502b2d30b00a31->leave($__internal_f77997f74a94ced05371bd23b21e4dfa127944d5d4da58436c502b2d30b00a31_prof);

        
        $__internal_1c84767c035aade6857d567c11ecbbec1af652ea738ff46140d5c3bc0d2a3080->leave($__internal_1c84767c035aade6857d567c11ecbbec1af652ea738ff46140d5c3bc0d2a3080_prof);

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
        return array (  99 => 19,  91 => 14,  85 => 11,  82 => 10,  76 => 7,  73 => 6,  71 => 5,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{{errors.messageKey | replace({'Username could not be found.': 'Email could not be found'})}}
</div>
{% endif %}

<form class=\"form-signin\" action=\"{{ path('login') }}\" method=\"post\">
  <h2 class=\"form-signin-heading\">Login</h2>
  <label for=\"inputEmail\" class=\"sr-only\">Username</label>
  <input type=\"email\" id=\"username\" name=\"username\" class=\"form-control\" value=\"{{lastUser}}\" placeholder=\"Username\" required autofocus>
  <label for=\"inputPassword\" class=\"sr-only\">Password</label>
  <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\" required>
  <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
  <button class=\"btn btn-lg btn-primary btn-block\" type=\"button\">
    <i class=\"fa fa-facebook-official\" aria-hidden=\"true\"></i>&nbsp;<a id=\"fbsign\" href=\"{{ hwi_oauth_login_url('facebook') }}\">Sign in with Facebook</a>
  </button>
  <br>Don't have an account? <a href=\"/register\">Register</a>
</form>

</div> <!-- /container -->
<style>
body {
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

#fbsign {
  color: white;
}
#fbsign {
  text-decoration: none;
}
</style>
{% endblock %}
", "default/login.html.twig", "/home/karim/Desktop/sandbox/hacker-news/app/Resources/views/default/login.html.twig");
    }
}
