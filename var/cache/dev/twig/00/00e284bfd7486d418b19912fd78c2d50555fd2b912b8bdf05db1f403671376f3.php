<?php

/* default/register.html.twig */
class __TwigTemplate_346598f6edf4f21ccf93e1f686e9d3dca075460e64d4b6f000f998627e6a91e0 extends Twig_Template
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
        $__internal_c15bcbb703064fdf3f8d8414178034f74d33ef204a46150c83e6380fa08fb7bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c15bcbb703064fdf3f8d8414178034f74d33ef204a46150c83e6380fa08fb7bb->enter($__internal_c15bcbb703064fdf3f8d8414178034f74d33ef204a46150c83e6380fa08fb7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/register.html.twig"));

        $__internal_512149db93ba3e3c6737a4b17bf7f04770c779cbd5168dfab275c6a77178e7c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_512149db93ba3e3c6737a4b17bf7f04770c779cbd5168dfab275c6a77178e7c5->enter($__internal_512149db93ba3e3c6737a4b17bf7f04770c779cbd5168dfab275c6a77178e7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c15bcbb703064fdf3f8d8414178034f74d33ef204a46150c83e6380fa08fb7bb->leave($__internal_c15bcbb703064fdf3f8d8414178034f74d33ef204a46150c83e6380fa08fb7bb_prof);

        
        $__internal_512149db93ba3e3c6737a4b17bf7f04770c779cbd5168dfab275c6a77178e7c5->leave($__internal_512149db93ba3e3c6737a4b17bf7f04770c779cbd5168dfab275c6a77178e7c5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3bf06ca42352a1d78a14a5b2e44d3b51f76921278e1e5fe0d196e7d29cfc7ee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bf06ca42352a1d78a14a5b2e44d3b51f76921278e1e5fe0d196e7d29cfc7ee8->enter($__internal_3bf06ca42352a1d78a14a5b2e44d3b51f76921278e1e5fe0d196e7d29cfc7ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cd9fd92fcf645916548b83bef060aa43876712512de69b3ad46875486ccfff95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd9fd92fcf645916548b83bef060aa43876712512de69b3ad46875486ccfff95->enter($__internal_cd9fd92fcf645916548b83bef060aa43876712512de69b3ad46875486ccfff95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Register ";
        
        $__internal_cd9fd92fcf645916548b83bef060aa43876712512de69b3ad46875486ccfff95->leave($__internal_cd9fd92fcf645916548b83bef060aa43876712512de69b3ad46875486ccfff95_prof);

        
        $__internal_3bf06ca42352a1d78a14a5b2e44d3b51f76921278e1e5fe0d196e7d29cfc7ee8->leave($__internal_3bf06ca42352a1d78a14a5b2e44d3b51f76921278e1e5fe0d196e7d29cfc7ee8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2f51fc1ee5ffced291fc8ba46f5b368bc21f6dcace513027a3d0098697337b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2f51fc1ee5ffced291fc8ba46f5b368bc21f6dcace513027a3d0098697337b5->enter($__internal_e2f51fc1ee5ffced291fc8ba46f5b368bc21f6dcace513027a3d0098697337b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9f245799b32167e1edeb3034e2aa06ac71f128c082e6132e87cfa271c91414dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f245799b32167e1edeb3034e2aa06ac71f128c082e6132e87cfa271c91414dd->enter($__internal_9f245799b32167e1edeb3034e2aa06ac71f128c082e6132e87cfa271c91414dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9f245799b32167e1edeb3034e2aa06ac71f128c082e6132e87cfa271c91414dd->leave($__internal_9f245799b32167e1edeb3034e2aa06ac71f128c082e6132e87cfa271c91414dd_prof);

        
        $__internal_e2f51fc1ee5ffced291fc8ba46f5b368bc21f6dcace513027a3d0098697337b5->leave($__internal_e2f51fc1ee5ffced291fc8ba46f5b368bc21f6dcace513027a3d0098697337b5_prof);

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
", "default/register.html.twig", "/home/karim/Desktop/sandbox/symfony-standard-2/app/Resources/views/default/register.html.twig");
    }
}
