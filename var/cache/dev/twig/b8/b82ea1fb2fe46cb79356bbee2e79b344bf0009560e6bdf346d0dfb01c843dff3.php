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
        $__internal_72051bd7c97751ddf1ee08e4e618cc9d55b2b3b422b8f6adbbcbfdd8c64768a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72051bd7c97751ddf1ee08e4e618cc9d55b2b3b422b8f6adbbcbfdd8c64768a9->enter($__internal_72051bd7c97751ddf1ee08e4e618cc9d55b2b3b422b8f6adbbcbfdd8c64768a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/register.html.twig"));

        $__internal_d277285f35b28d7e60284b323645baaa878ae8e42eff08adec563dfbfdf833d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d277285f35b28d7e60284b323645baaa878ae8e42eff08adec563dfbfdf833d7->enter($__internal_d277285f35b28d7e60284b323645baaa878ae8e42eff08adec563dfbfdf833d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72051bd7c97751ddf1ee08e4e618cc9d55b2b3b422b8f6adbbcbfdd8c64768a9->leave($__internal_72051bd7c97751ddf1ee08e4e618cc9d55b2b3b422b8f6adbbcbfdd8c64768a9_prof);

        
        $__internal_d277285f35b28d7e60284b323645baaa878ae8e42eff08adec563dfbfdf833d7->leave($__internal_d277285f35b28d7e60284b323645baaa878ae8e42eff08adec563dfbfdf833d7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_72c9ff93dac6a3469302b0f7230e8a5ffedcc7b40f94474c16628a38bc7c3b7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72c9ff93dac6a3469302b0f7230e8a5ffedcc7b40f94474c16628a38bc7c3b7d->enter($__internal_72c9ff93dac6a3469302b0f7230e8a5ffedcc7b40f94474c16628a38bc7c3b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ec922a6c499078ee28470cfca6922261063430a2e32474c4344b834772d1aa74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec922a6c499078ee28470cfca6922261063430a2e32474c4344b834772d1aa74->enter($__internal_ec922a6c499078ee28470cfca6922261063430a2e32474c4344b834772d1aa74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Register ";
        
        $__internal_ec922a6c499078ee28470cfca6922261063430a2e32474c4344b834772d1aa74->leave($__internal_ec922a6c499078ee28470cfca6922261063430a2e32474c4344b834772d1aa74_prof);

        
        $__internal_72c9ff93dac6a3469302b0f7230e8a5ffedcc7b40f94474c16628a38bc7c3b7d->leave($__internal_72c9ff93dac6a3469302b0f7230e8a5ffedcc7b40f94474c16628a38bc7c3b7d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_86423e75d094a6daa29f756997c3124fe256c0adb726ac751c50298b80340054 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86423e75d094a6daa29f756997c3124fe256c0adb726ac751c50298b80340054->enter($__internal_86423e75d094a6daa29f756997c3124fe256c0adb726ac751c50298b80340054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0bb4ca1976cff0389968c26a5fc1f3c7f99f738da11a8203d12602afa63e1f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0bb4ca1976cff0389968c26a5fc1f3c7f99f738da11a8203d12602afa63e1f6->enter($__internal_e0bb4ca1976cff0389968c26a5fc1f3c7f99f738da11a8203d12602afa63e1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e0bb4ca1976cff0389968c26a5fc1f3c7f99f738da11a8203d12602afa63e1f6->leave($__internal_e0bb4ca1976cff0389968c26a5fc1f3c7f99f738da11a8203d12602afa63e1f6_prof);

        
        $__internal_86423e75d094a6daa29f756997c3124fe256c0adb726ac751c50298b80340054->leave($__internal_86423e75d094a6daa29f756997c3124fe256c0adb726ac751c50298b80340054_prof);

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
