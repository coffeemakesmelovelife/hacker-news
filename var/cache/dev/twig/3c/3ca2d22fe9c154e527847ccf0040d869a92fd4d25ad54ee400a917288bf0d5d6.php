<?php

/* default/newpost.html.twig */
class __TwigTemplate_33cb2b4c14d86889212fff51ddfa358a6f86edd450fc9e594651d5cd02296015 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/newpost.html.twig", 1);
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
        $__internal_276bbedb12a5ea20f5db4955865156705ea4f95c251d5e9f287bd16079a5cbf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_276bbedb12a5ea20f5db4955865156705ea4f95c251d5e9f287bd16079a5cbf1->enter($__internal_276bbedb12a5ea20f5db4955865156705ea4f95c251d5e9f287bd16079a5cbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/newpost.html.twig"));

        $__internal_02ebf4f2cd9e990c93a6c19a033e1adcd4da7a7254c48d76c620f051541ab507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ebf4f2cd9e990c93a6c19a033e1adcd4da7a7254c48d76c620f051541ab507->enter($__internal_02ebf4f2cd9e990c93a6c19a033e1adcd4da7a7254c48d76c620f051541ab507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/newpost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_276bbedb12a5ea20f5db4955865156705ea4f95c251d5e9f287bd16079a5cbf1->leave($__internal_276bbedb12a5ea20f5db4955865156705ea4f95c251d5e9f287bd16079a5cbf1_prof);

        
        $__internal_02ebf4f2cd9e990c93a6c19a033e1adcd4da7a7254c48d76c620f051541ab507->leave($__internal_02ebf4f2cd9e990c93a6c19a033e1adcd4da7a7254c48d76c620f051541ab507_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_dfeba0956f90baeaa6696b3a185e7064b5dc13e13798dbfc1048c5b5160f4b33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfeba0956f90baeaa6696b3a185e7064b5dc13e13798dbfc1048c5b5160f4b33->enter($__internal_dfeba0956f90baeaa6696b3a185e7064b5dc13e13798dbfc1048c5b5160f4b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_de69f647975582278e58ed087a9acb1ae3abc6a7295fc250e7751675bad82906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de69f647975582278e58ed087a9acb1ae3abc6a7295fc250e7751675bad82906->enter($__internal_de69f647975582278e58ed087a9acb1ae3abc6a7295fc250e7751675bad82906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Hacker News ";
        
        $__internal_de69f647975582278e58ed087a9acb1ae3abc6a7295fc250e7751675bad82906->leave($__internal_de69f647975582278e58ed087a9acb1ae3abc6a7295fc250e7751675bad82906_prof);

        
        $__internal_dfeba0956f90baeaa6696b3a185e7064b5dc13e13798dbfc1048c5b5160f4b33->leave($__internal_dfeba0956f90baeaa6696b3a185e7064b5dc13e13798dbfc1048c5b5160f4b33_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_c71236453a099a029e56f7f4785214e2b1d8a3dbed668053d0836d22057a1a44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c71236453a099a029e56f7f4785214e2b1d8a3dbed668053d0836d22057a1a44->enter($__internal_c71236453a099a029e56f7f4785214e2b1d8a3dbed668053d0836d22057a1a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_40e93f59c52a8ee1e8f710b397e78543b1c96be468e7e023c3a389e68f02fb3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e93f59c52a8ee1e8f710b397e78543b1c96be468e7e023c3a389e68f02fb3c->enter($__internal_40e93f59c52a8ee1e8f710b397e78543b1c96be468e7e023c3a389e68f02fb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "  <br>
  <div class=\"container\">
    <h2 class=\"\">New post: </h2>
    <form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newpost");
        echo "\" method=\"post\">
      <div class=\"form-group\">
        <label for=\"post_title\">Title: </label>
        <input type=\"text\" class=\"form-control\" name=\"post_title\" id=\"post_title\">
      </div>
      <div class=\"form-group\">
        <label for=\"post_body\">Body: </label>
        <textarea class=\"form-control\" name=\"post_body\" id=\"post_body\" rows=\"8\"></textarea><br>
        <button class=\"btn btn-primary\" type=\"submit\">Submit</button>
      </div>
    </form>
  </div>
";
        
        $__internal_40e93f59c52a8ee1e8f710b397e78543b1c96be468e7e023c3a389e68f02fb3c->leave($__internal_40e93f59c52a8ee1e8f710b397e78543b1c96be468e7e023c3a389e68f02fb3c_prof);

        
        $__internal_c71236453a099a029e56f7f4785214e2b1d8a3dbed668053d0836d22057a1a44->leave($__internal_c71236453a099a029e56f7f4785214e2b1d8a3dbed668053d0836d22057a1a44_prof);

    }

    public function getTemplateName()
    {
        return "default/newpost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 8,  68 => 5,  59 => 4,  41 => 2,  11 => 1,);
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
{% block title %} Hacker News {% endblock %}

{% block body %}
  <br>
  <div class=\"container\">
    <h2 class=\"\">New post: </h2>
    <form action=\"{{ path('newpost') }}\" method=\"post\">
      <div class=\"form-group\">
        <label for=\"post_title\">Title: </label>
        <input type=\"text\" class=\"form-control\" name=\"post_title\" id=\"post_title\">
      </div>
      <div class=\"form-group\">
        <label for=\"post_body\">Body: </label>
        <textarea class=\"form-control\" name=\"post_body\" id=\"post_body\" rows=\"8\"></textarea><br>
        <button class=\"btn btn-primary\" type=\"submit\">Submit</button>
      </div>
    </form>
  </div>
{% endblock %}
", "default/newpost.html.twig", "/home/karim/Desktop/sandbox/hacker-news/app/Resources/views/default/newpost.html.twig");
    }
}
