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
        $__internal_93622926c6e40ccf01e9a13da98b706ceb83c691637125872d72074f8c580e3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93622926c6e40ccf01e9a13da98b706ceb83c691637125872d72074f8c580e3f->enter($__internal_93622926c6e40ccf01e9a13da98b706ceb83c691637125872d72074f8c580e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $__internal_3450c4117b6da1dc5f92d537a29df4971f0b32b6c7972878ff12ed53f81f5359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3450c4117b6da1dc5f92d537a29df4971f0b32b6c7972878ff12ed53f81f5359->enter($__internal_3450c4117b6da1dc5f92d537a29df4971f0b32b6c7972878ff12ed53f81f5359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93622926c6e40ccf01e9a13da98b706ceb83c691637125872d72074f8c580e3f->leave($__internal_93622926c6e40ccf01e9a13da98b706ceb83c691637125872d72074f8c580e3f_prof);

        
        $__internal_3450c4117b6da1dc5f92d537a29df4971f0b32b6c7972878ff12ed53f81f5359->leave($__internal_3450c4117b6da1dc5f92d537a29df4971f0b32b6c7972878ff12ed53f81f5359_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a7e23af6270ceb79913be28f709b5b97b7045ca7997ed6dc564e75b41fe7f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a7e23af6270ceb79913be28f709b5b97b7045ca7997ed6dc564e75b41fe7f46->enter($__internal_7a7e23af6270ceb79913be28f709b5b97b7045ca7997ed6dc564e75b41fe7f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_68a7ea1cbd4ef85cc951ae2de858052a9d069d9126947d68d3246a0fffea9aa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a7ea1cbd4ef85cc951ae2de858052a9d069d9126947d68d3246a0fffea9aa0->enter($__internal_68a7ea1cbd4ef85cc951ae2de858052a9d069d9126947d68d3246a0fffea9aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Login ";
        
        $__internal_68a7ea1cbd4ef85cc951ae2de858052a9d069d9126947d68d3246a0fffea9aa0->leave($__internal_68a7ea1cbd4ef85cc951ae2de858052a9d069d9126947d68d3246a0fffea9aa0_prof);

        
        $__internal_7a7e23af6270ceb79913be28f709b5b97b7045ca7997ed6dc564e75b41fe7f46->leave($__internal_7a7e23af6270ceb79913be28f709b5b97b7045ca7997ed6dc564e75b41fe7f46_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_09e88690cc619e5f8327529b183403fb83909fed5c26352ea7be2a8194ca1a99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09e88690cc619e5f8327529b183403fb83909fed5c26352ea7be2a8194ca1a99->enter($__internal_09e88690cc619e5f8327529b183403fb83909fed5c26352ea7be2a8194ca1a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9daaebe376e608939022535d82c2cdce553fec6dd8b79a277f1c078a900f070e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9daaebe376e608939022535d82c2cdce553fec6dd8b79a277f1c078a900f070e->enter($__internal_9daaebe376e608939022535d82c2cdce553fec6dd8b79a277f1c078a900f070e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
";
        // line 7
        if (($context["errors"] ?? $this->getContext($context, "errors"))) {
            // line 8
            echo "<div class=\"alert alert-danger\" role=\"alert\">
";
            // line 9
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute(($context["errors"] ?? $this->getContext($context, "errors")), "messageKey", array()), array("Username could not be found." => "Email could not be found")), "html", null, true);
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
  <input type=\"email\" id=\"username\" name=\"username\" class=\"form-control\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["lastUser"] ?? $this->getContext($context, "lastUser")), "html", null, true);
        echo "\" placeholder=\"Username\" required autofocus>
  <label for=\"inputPassword\" class=\"sr-only\">Password</label>
  <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\" required>
  <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
  <button class=\"btn btn-lg btn-primary btn-block\" type=\"button\">
    <i class=\"fa fa-facebook-official\" aria-hidden=\"true\"></i>&nbsp;<a id=\"fbsign\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension')->getLoginUrl("facebook"), "html", null, true);
        echo "\">Sign in with Facebook</a>
  </button>
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

#fbsign {
  color: white;
}
#fbsign {
  text-decoration: none;
}
</style>
";
        
        $__internal_9daaebe376e608939022535d82c2cdce553fec6dd8b79a277f1c078a900f070e->leave($__internal_9daaebe376e608939022535d82c2cdce553fec6dd8b79a277f1c078a900f070e_prof);

        
        $__internal_09e88690cc619e5f8327529b183403fb83909fed5c26352ea7be2a8194ca1a99->leave($__internal_09e88690cc619e5f8327529b183403fb83909fed5c26352ea7be2a8194ca1a99_prof);

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
        return array (  99 => 21,  91 => 16,  85 => 13,  82 => 12,  76 => 9,  73 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
