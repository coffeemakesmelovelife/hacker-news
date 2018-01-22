<?php

/* default/newpost.html.twig */
class __TwigTemplate_ed017cf23f902b9d1836a3964aa7ea353c10f9f7010d79284689dc295e395af9 extends Twig_Template
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
        $__internal_054850f26df9e19802ad3665d47634269eccdba52c747e36177bc57502b23017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_054850f26df9e19802ad3665d47634269eccdba52c747e36177bc57502b23017->enter($__internal_054850f26df9e19802ad3665d47634269eccdba52c747e36177bc57502b23017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/newpost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_054850f26df9e19802ad3665d47634269eccdba52c747e36177bc57502b23017->leave($__internal_054850f26df9e19802ad3665d47634269eccdba52c747e36177bc57502b23017_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6bd72079b5704555173c1fb04f4384fb00fc913ddcd9f6b46bfc7df094aeef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6bd72079b5704555173c1fb04f4384fb00fc913ddcd9f6b46bfc7df094aeef1->enter($__internal_b6bd72079b5704555173c1fb04f4384fb00fc913ddcd9f6b46bfc7df094aeef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Hacker News ";
        
        $__internal_b6bd72079b5704555173c1fb04f4384fb00fc913ddcd9f6b46bfc7df094aeef1->leave($__internal_b6bd72079b5704555173c1fb04f4384fb00fc913ddcd9f6b46bfc7df094aeef1_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_80ef2f138c7d6a8efd1f71960447154970d474263f4a901132b6260fe0f56b61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80ef2f138c7d6a8efd1f71960447154970d474263f4a901132b6260fe0f56b61->enter($__internal_80ef2f138c7d6a8efd1f71960447154970d474263f4a901132b6260fe0f56b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_80ef2f138c7d6a8efd1f71960447154970d474263f4a901132b6260fe0f56b61->leave($__internal_80ef2f138c7d6a8efd1f71960447154970d474263f4a901132b6260fe0f56b61_prof);

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
        return array (  58 => 8,  53 => 5,  47 => 4,  35 => 2,  11 => 1,);
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
