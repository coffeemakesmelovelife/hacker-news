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
        $__internal_bb439d7a4b4acf28bdaf833fda41d03b805456b5590113c0ba4df08fedaa9bb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb439d7a4b4acf28bdaf833fda41d03b805456b5590113c0ba4df08fedaa9bb0->enter($__internal_bb439d7a4b4acf28bdaf833fda41d03b805456b5590113c0ba4df08fedaa9bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $__internal_dae07a2a9d02bf197c97ab011f116c3ac86551289c5a9eeeda499531275c9bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dae07a2a9d02bf197c97ab011f116c3ac86551289c5a9eeeda499531275c9bd7->enter($__internal_dae07a2a9d02bf197c97ab011f116c3ac86551289c5a9eeeda499531275c9bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb439d7a4b4acf28bdaf833fda41d03b805456b5590113c0ba4df08fedaa9bb0->leave($__internal_bb439d7a4b4acf28bdaf833fda41d03b805456b5590113c0ba4df08fedaa9bb0_prof);

        
        $__internal_dae07a2a9d02bf197c97ab011f116c3ac86551289c5a9eeeda499531275c9bd7->leave($__internal_dae07a2a9d02bf197c97ab011f116c3ac86551289c5a9eeeda499531275c9bd7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0dc27450fd9d94f258101cc19c936ddad69d38e65703131d329e037c905d0753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dc27450fd9d94f258101cc19c936ddad69d38e65703131d329e037c905d0753->enter($__internal_0dc27450fd9d94f258101cc19c936ddad69d38e65703131d329e037c905d0753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_45024d52df6195fcc84c3eb7ca0b11f721800e481f7c1c3e9ae9148e83c1b37d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45024d52df6195fcc84c3eb7ca0b11f721800e481f7c1c3e9ae9148e83c1b37d->enter($__internal_45024d52df6195fcc84c3eb7ca0b11f721800e481f7c1c3e9ae9148e83c1b37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Login ";
        
        $__internal_45024d52df6195fcc84c3eb7ca0b11f721800e481f7c1c3e9ae9148e83c1b37d->leave($__internal_45024d52df6195fcc84c3eb7ca0b11f721800e481f7c1c3e9ae9148e83c1b37d_prof);

        
        $__internal_0dc27450fd9d94f258101cc19c936ddad69d38e65703131d329e037c905d0753->leave($__internal_0dc27450fd9d94f258101cc19c936ddad69d38e65703131d329e037c905d0753_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_60f9b3dbb2d6c55851fc3e9ab9c64ed5d03267e9e0213e8dc17ef3637effc806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60f9b3dbb2d6c55851fc3e9ab9c64ed5d03267e9e0213e8dc17ef3637effc806->enter($__internal_60f9b3dbb2d6c55851fc3e9ab9c64ed5d03267e9e0213e8dc17ef3637effc806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6d6488208dd42a9b81e75872899bb3efd138fdcf7d92ae4d4a8d3a38cbeffa08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d6488208dd42a9b81e75872899bb3efd138fdcf7d92ae4d4a8d3a38cbeffa08->enter($__internal_6d6488208dd42a9b81e75872899bb3efd138fdcf7d92ae4d4a8d3a38cbeffa08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6d6488208dd42a9b81e75872899bb3efd138fdcf7d92ae4d4a8d3a38cbeffa08->leave($__internal_6d6488208dd42a9b81e75872899bb3efd138fdcf7d92ae4d4a8d3a38cbeffa08_prof);

        
        $__internal_60f9b3dbb2d6c55851fc3e9ab9c64ed5d03267e9e0213e8dc17ef3637effc806->leave($__internal_60f9b3dbb2d6c55851fc3e9ab9c64ed5d03267e9e0213e8dc17ef3637effc806_prof);

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
