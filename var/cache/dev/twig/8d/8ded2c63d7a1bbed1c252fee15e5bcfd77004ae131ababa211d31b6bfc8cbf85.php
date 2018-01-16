<?php

/* default/login.html.twig */
class __TwigTemplate_bb21b39f55acdfaed2e4fe9cc2aa83de1af96da428ef4af70975e65884d4588b extends Twig_Template
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
        $__internal_9dab95639a59c4bc6bc0bf61d5439ae89780af67c637c29356313de1343ff99e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dab95639a59c4bc6bc0bf61d5439ae89780af67c637c29356313de1343ff99e->enter($__internal_9dab95639a59c4bc6bc0bf61d5439ae89780af67c637c29356313de1343ff99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $__internal_e045d5b584c88c1bb85f00c82317863803f3fecff243606a5c7cb186545c3624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e045d5b584c88c1bb85f00c82317863803f3fecff243606a5c7cb186545c3624->enter($__internal_e045d5b584c88c1bb85f00c82317863803f3fecff243606a5c7cb186545c3624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dab95639a59c4bc6bc0bf61d5439ae89780af67c637c29356313de1343ff99e->leave($__internal_9dab95639a59c4bc6bc0bf61d5439ae89780af67c637c29356313de1343ff99e_prof);

        
        $__internal_e045d5b584c88c1bb85f00c82317863803f3fecff243606a5c7cb186545c3624->leave($__internal_e045d5b584c88c1bb85f00c82317863803f3fecff243606a5c7cb186545c3624_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3794d7a814f01e777e1f3e45d590fc0f7989ff58d2a29c8b4964936ccff6d64c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3794d7a814f01e777e1f3e45d590fc0f7989ff58d2a29c8b4964936ccff6d64c->enter($__internal_3794d7a814f01e777e1f3e45d590fc0f7989ff58d2a29c8b4964936ccff6d64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ed0d71a9ab382f89eb223d31ed2b8562f22c6a6fc17a662c8043f5c1e727ead7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed0d71a9ab382f89eb223d31ed2b8562f22c6a6fc17a662c8043f5c1e727ead7->enter($__internal_ed0d71a9ab382f89eb223d31ed2b8562f22c6a6fc17a662c8043f5c1e727ead7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Login ";
        
        $__internal_ed0d71a9ab382f89eb223d31ed2b8562f22c6a6fc17a662c8043f5c1e727ead7->leave($__internal_ed0d71a9ab382f89eb223d31ed2b8562f22c6a6fc17a662c8043f5c1e727ead7_prof);

        
        $__internal_3794d7a814f01e777e1f3e45d590fc0f7989ff58d2a29c8b4964936ccff6d64c->leave($__internal_3794d7a814f01e777e1f3e45d590fc0f7989ff58d2a29c8b4964936ccff6d64c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c8b8d5dd0b4bc59b90dd7cc957dda1dadd2278df803a7cb7a36a4f6cfa504a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c8b8d5dd0b4bc59b90dd7cc957dda1dadd2278df803a7cb7a36a4f6cfa504a0->enter($__internal_6c8b8d5dd0b4bc59b90dd7cc957dda1dadd2278df803a7cb7a36a4f6cfa504a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e59ee609700c6bc1e36fb7e36fde786a9217166fcfb2651f2000e906bebf4ff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e59ee609700c6bc1e36fb7e36fde786a9217166fcfb2651f2000e906bebf4ff2->enter($__internal_e59ee609700c6bc1e36fb7e36fde786a9217166fcfb2651f2000e906bebf4ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, ($context["fb_login_url"] ?? $this->getContext($context, "fb_login_url")), "html", null, true);
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
        
        $__internal_e59ee609700c6bc1e36fb7e36fde786a9217166fcfb2651f2000e906bebf4ff2->leave($__internal_e59ee609700c6bc1e36fb7e36fde786a9217166fcfb2651f2000e906bebf4ff2_prof);

        
        $__internal_6c8b8d5dd0b4bc59b90dd7cc957dda1dadd2278df803a7cb7a36a4f6cfa504a0->leave($__internal_6c8b8d5dd0b4bc59b90dd7cc957dda1dadd2278df803a7cb7a36a4f6cfa504a0_prof);

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
  <a class=\"btn btn-lg btn-primary btn-block\" href=\"{{ fb_login_url }}\" type=\"submit\">Sign in with Facebook</a>
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
