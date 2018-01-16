<?php

/* default/register.html.twig */
class __TwigTemplate_5315af5ab949a1fa694db0fac2d17de6c3da4d1b59c055c62eba8750fa96ec6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/register.html.twig", 1);
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
        $__internal_34f0fd006b64a0bd89c612c0aa42127cd68039f93bf4f29d4c7c8cdda94eed2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34f0fd006b64a0bd89c612c0aa42127cd68039f93bf4f29d4c7c8cdda94eed2c->enter($__internal_34f0fd006b64a0bd89c612c0aa42127cd68039f93bf4f29d4c7c8cdda94eed2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/register.html.twig"));

        $__internal_33e9f4f7bd98d241ee4648574f480b2a45b479a48fa08a068174639e2a3ea599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e9f4f7bd98d241ee4648574f480b2a45b479a48fa08a068174639e2a3ea599->enter($__internal_33e9f4f7bd98d241ee4648574f480b2a45b479a48fa08a068174639e2a3ea599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34f0fd006b64a0bd89c612c0aa42127cd68039f93bf4f29d4c7c8cdda94eed2c->leave($__internal_34f0fd006b64a0bd89c612c0aa42127cd68039f93bf4f29d4c7c8cdda94eed2c_prof);

        
        $__internal_33e9f4f7bd98d241ee4648574f480b2a45b479a48fa08a068174639e2a3ea599->leave($__internal_33e9f4f7bd98d241ee4648574f480b2a45b479a48fa08a068174639e2a3ea599_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2859f29cc4aa47ac9117ae7dde7fd8014a6d3839b07d2f3bace09fbceac31c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2859f29cc4aa47ac9117ae7dde7fd8014a6d3839b07d2f3bace09fbceac31c8->enter($__internal_b2859f29cc4aa47ac9117ae7dde7fd8014a6d3839b07d2f3bace09fbceac31c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0b9936e3aeb2dbf2e7f224842d7f384be6266840ce237a5a4c3f1b7db0f87d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b9936e3aeb2dbf2e7f224842d7f384be6266840ce237a5a4c3f1b7db0f87d1c->enter($__internal_0b9936e3aeb2dbf2e7f224842d7f384be6266840ce237a5a4c3f1b7db0f87d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Register ";
        
        $__internal_0b9936e3aeb2dbf2e7f224842d7f384be6266840ce237a5a4c3f1b7db0f87d1c->leave($__internal_0b9936e3aeb2dbf2e7f224842d7f384be6266840ce237a5a4c3f1b7db0f87d1c_prof);

        
        $__internal_b2859f29cc4aa47ac9117ae7dde7fd8014a6d3839b07d2f3bace09fbceac31c8->leave($__internal_b2859f29cc4aa47ac9117ae7dde7fd8014a6d3839b07d2f3bace09fbceac31c8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_57b35d2367ce50cda9678b3b660fa8c959ff7fb9e0ef83d79ee05913d8966954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57b35d2367ce50cda9678b3b660fa8c959ff7fb9e0ef83d79ee05913d8966954->enter($__internal_57b35d2367ce50cda9678b3b660fa8c959ff7fb9e0ef83d79ee05913d8966954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_091db93c1276a4b26821c4d1487263c270502c113fa29c793d5238fd16988928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_091db93c1276a4b26821c4d1487263c270502c113fa29c793d5238fd16988928->enter($__internal_091db93c1276a4b26821c4d1487263c270502c113fa29c793d5238fd16988928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
  ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-signup")));
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row', array("label" => ""));
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'row');
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), "first", array()), 'row');
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), "second", array()), 'row');
        echo "
    <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
    <br>Already registered? <a href=\"/login\">Login</a>
  ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

<!--
<form class=\"form-signup\" action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
  <h2 class=\"form-signup-heading\">Register</h2>
  <label for=\"inputEmail\" class=\"sr-only\">Email address</label>
  <input type=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email address\" required autofocus>
  <label for=\"inputPassword\" class=\"sr-only\">Password</label>
  <label for=\"inputEmail\" class=\"sr-only\">Username</label>
  <input type=\"text\" id=\"inputUsername\" class=\"form-control\" placeholder=\"Username\" required>
  <label for=\"inputPassword\" class=\"sr-only\">Password</label>
  <input type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
</form>
-->
</div> <!-- /container -->
<style>
body {
  padding-top: 40px;
  padding-bottom: 40px;
}

.form-signup {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signup .form-signup-heading,
.form-signup .checkbox {
  margin-bottom: 10px;
}
.form-signup .checkbox {
  font-weight: 400;
}
.form-signup .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signup .form-control:focus {
  z-index: 2;
}
.form-signup input[type=\"email\"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signup input[type=\"password\"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
";
        
        $__internal_091db93c1276a4b26821c4d1487263c270502c113fa29c793d5238fd16988928->leave($__internal_091db93c1276a4b26821c4d1487263c270502c113fa29c793d5238fd16988928_prof);

        
        $__internal_57b35d2367ce50cda9678b3b660fa8c959ff7fb9e0ef83d79ee05913d8966954->leave($__internal_57b35d2367ce50cda9678b3b660fa8c959ff7fb9e0ef83d79ee05913d8966954_prof);

    }

    public function getTemplateName()
    {
        return "default/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 17,  93 => 14,  87 => 11,  83 => 10,  79 => 9,  75 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %} Register {% endblock %}

{% block body %}
<div class=\"container\">
  {{ form_start(form, {attr: {class: 'form-signup'} }) }}
    {{ form_row(form.email, {'label': ''}) }}
    {{ form_row(form.username) }}
    {{ form_row(form.password.first) }}
    {{ form_row(form.password.second) }}
    <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
    <br>Already registered? <a href=\"/login\">Login</a>
  {{ form_end(form)}}

<!--
<form class=\"form-signup\" action=\"{{ path('login') }}\" method=\"post\">
  <h2 class=\"form-signup-heading\">Register</h2>
  <label for=\"inputEmail\" class=\"sr-only\">Email address</label>
  <input type=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email address\" required autofocus>
  <label for=\"inputPassword\" class=\"sr-only\">Password</label>
  <label for=\"inputEmail\" class=\"sr-only\">Username</label>
  <input type=\"text\" id=\"inputUsername\" class=\"form-control\" placeholder=\"Username\" required>
  <label for=\"inputPassword\" class=\"sr-only\">Password</label>
  <input type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
</form>
-->
</div> <!-- /container -->
<style>
body {
  padding-top: 40px;
  padding-bottom: 40px;
}

.form-signup {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signup .form-signup-heading,
.form-signup .checkbox {
  margin-bottom: 10px;
}
.form-signup .checkbox {
  font-weight: 400;
}
.form-signup .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signup .form-control:focus {
  z-index: 2;
}
.form-signup input[type=\"email\"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signup input[type=\"password\"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
{% endblock %}
", "default/register.html.twig", "/home/karim/Desktop/sandbox/hacker-news/app/Resources/views/default/register.html.twig");
    }
}
