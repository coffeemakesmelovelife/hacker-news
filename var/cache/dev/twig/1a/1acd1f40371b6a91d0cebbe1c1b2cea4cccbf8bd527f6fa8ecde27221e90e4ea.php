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
        $__internal_384e494e994319003662dff8e09dbb8b96bc05d755b431818760ef405dd443d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_384e494e994319003662dff8e09dbb8b96bc05d755b431818760ef405dd443d2->enter($__internal_384e494e994319003662dff8e09dbb8b96bc05d755b431818760ef405dd443d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $__internal_4c7a7efb75a0a3e03caf3b21a9f9917362213f37489e37944bf5e6370be41611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c7a7efb75a0a3e03caf3b21a9f9917362213f37489e37944bf5e6370be41611->enter($__internal_4c7a7efb75a0a3e03caf3b21a9f9917362213f37489e37944bf5e6370be41611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_384e494e994319003662dff8e09dbb8b96bc05d755b431818760ef405dd443d2->leave($__internal_384e494e994319003662dff8e09dbb8b96bc05d755b431818760ef405dd443d2_prof);

        
        $__internal_4c7a7efb75a0a3e03caf3b21a9f9917362213f37489e37944bf5e6370be41611->leave($__internal_4c7a7efb75a0a3e03caf3b21a9f9917362213f37489e37944bf5e6370be41611_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_44b96ee7d83e2d29ef203e38348f8a5099f6ae1c7a8085a87738f1f726fea390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44b96ee7d83e2d29ef203e38348f8a5099f6ae1c7a8085a87738f1f726fea390->enter($__internal_44b96ee7d83e2d29ef203e38348f8a5099f6ae1c7a8085a87738f1f726fea390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ce12bfd32ed94861bc8f6e457898cc4da3a9762aff90822b90083af9b37c1ec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce12bfd32ed94861bc8f6e457898cc4da3a9762aff90822b90083af9b37c1ec0->enter($__internal_ce12bfd32ed94861bc8f6e457898cc4da3a9762aff90822b90083af9b37c1ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Login ";
        
        $__internal_ce12bfd32ed94861bc8f6e457898cc4da3a9762aff90822b90083af9b37c1ec0->leave($__internal_ce12bfd32ed94861bc8f6e457898cc4da3a9762aff90822b90083af9b37c1ec0_prof);

        
        $__internal_44b96ee7d83e2d29ef203e38348f8a5099f6ae1c7a8085a87738f1f726fea390->leave($__internal_44b96ee7d83e2d29ef203e38348f8a5099f6ae1c7a8085a87738f1f726fea390_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ecfffb662f1c856c5d830baa93f2aa492ef02e473a02fe89b8d2f9646467f6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ecfffb662f1c856c5d830baa93f2aa492ef02e473a02fe89b8d2f9646467f6d->enter($__internal_7ecfffb662f1c856c5d830baa93f2aa492ef02e473a02fe89b8d2f9646467f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d753e0e83a821c8dadfbc8ee40446c6c4e722e379e93ba8b2eb1d8ff97f17669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d753e0e83a821c8dadfbc8ee40446c6c4e722e379e93ba8b2eb1d8ff97f17669->enter($__internal_d753e0e83a821c8dadfbc8ee40446c6c4e722e379e93ba8b2eb1d8ff97f17669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
  <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">
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
        
        $__internal_d753e0e83a821c8dadfbc8ee40446c6c4e722e379e93ba8b2eb1d8ff97f17669->leave($__internal_d753e0e83a821c8dadfbc8ee40446c6c4e722e379e93ba8b2eb1d8ff97f17669_prof);

        
        $__internal_7ecfffb662f1c856c5d830baa93f2aa492ef02e473a02fe89b8d2f9646467f6d->leave($__internal_7ecfffb662f1c856c5d830baa93f2aa492ef02e473a02fe89b8d2f9646467f6d_prof);

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
  <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">
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
