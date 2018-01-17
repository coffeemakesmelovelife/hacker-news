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
        $__internal_ec397c5547431836035542b56ddd86f6e9c02afddaca8d89460561d323f30900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec397c5547431836035542b56ddd86f6e9c02afddaca8d89460561d323f30900->enter($__internal_ec397c5547431836035542b56ddd86f6e9c02afddaca8d89460561d323f30900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/register.html.twig"));

        $__internal_b30ffb7d577497018718e90b5d8007db05025cb6cc588e4cfa504bd01bc8daf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b30ffb7d577497018718e90b5d8007db05025cb6cc588e4cfa504bd01bc8daf7->enter($__internal_b30ffb7d577497018718e90b5d8007db05025cb6cc588e4cfa504bd01bc8daf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec397c5547431836035542b56ddd86f6e9c02afddaca8d89460561d323f30900->leave($__internal_ec397c5547431836035542b56ddd86f6e9c02afddaca8d89460561d323f30900_prof);

        
        $__internal_b30ffb7d577497018718e90b5d8007db05025cb6cc588e4cfa504bd01bc8daf7->leave($__internal_b30ffb7d577497018718e90b5d8007db05025cb6cc588e4cfa504bd01bc8daf7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dee8123084e79484edf2f480feaf04430f25ff7155ef567263367213da241981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dee8123084e79484edf2f480feaf04430f25ff7155ef567263367213da241981->enter($__internal_dee8123084e79484edf2f480feaf04430f25ff7155ef567263367213da241981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a6d43def3262c32a40f86e5434c011bdbe8515db3d17ad9fe0d2d7d58ebf1d02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6d43def3262c32a40f86e5434c011bdbe8515db3d17ad9fe0d2d7d58ebf1d02->enter($__internal_a6d43def3262c32a40f86e5434c011bdbe8515db3d17ad9fe0d2d7d58ebf1d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Register ";
        
        $__internal_a6d43def3262c32a40f86e5434c011bdbe8515db3d17ad9fe0d2d7d58ebf1d02->leave($__internal_a6d43def3262c32a40f86e5434c011bdbe8515db3d17ad9fe0d2d7d58ebf1d02_prof);

        
        $__internal_dee8123084e79484edf2f480feaf04430f25ff7155ef567263367213da241981->leave($__internal_dee8123084e79484edf2f480feaf04430f25ff7155ef567263367213da241981_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_09f66f4b8aab50ebbf6a0cbe47aaf28fc297558c962782693bd83a5cf6f5f960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09f66f4b8aab50ebbf6a0cbe47aaf28fc297558c962782693bd83a5cf6f5f960->enter($__internal_09f66f4b8aab50ebbf6a0cbe47aaf28fc297558c962782693bd83a5cf6f5f960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da766b1f618c046a064a77281e23f3d333129dff47f18e7137870e539dd5b3dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da766b1f618c046a064a77281e23f3d333129dff47f18e7137870e539dd5b3dc->enter($__internal_da766b1f618c046a064a77281e23f3d333129dff47f18e7137870e539dd5b3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
  ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-signup")));
        echo "
    <h2 class=\"form-signup-heading\">Register</h2>
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row', array("label" => ""));
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'row');
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), "first", array()), 'row');
        echo "
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), "second", array()), 'row');
        echo "
    <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign up</button>
    <br>Already registered? <a href=\"/login\">Login</a>
  ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

</div> <!-- /container -->
<style>
body {
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
        
        $__internal_da766b1f618c046a064a77281e23f3d333129dff47f18e7137870e539dd5b3dc->leave($__internal_da766b1f618c046a064a77281e23f3d333129dff47f18e7137870e539dd5b3dc_prof);

        
        $__internal_09f66f4b8aab50ebbf6a0cbe47aaf28fc297558c962782693bd83a5cf6f5f960->leave($__internal_09f66f4b8aab50ebbf6a0cbe47aaf28fc297558c962782693bd83a5cf6f5f960_prof);

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
        return array (  94 => 15,  88 => 12,  84 => 11,  80 => 10,  76 => 9,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
    <h2 class=\"form-signup-heading\">Register</h2>
    {{ form_row(form.email, {'label': ''}) }}
    {{ form_row(form.username) }}
    {{ form_row(form.password.first) }}
    {{ form_row(form.password.second) }}
    <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign up</button>
    <br>Already registered? <a href=\"/login\">Login</a>
  {{ form_end(form)}}

</div> <!-- /container -->
<style>
body {
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
