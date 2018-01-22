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
        $__internal_7fbc35e7d5040e8a6893cdadf3a89089327868e8addf18f8c0210a185dae504d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fbc35e7d5040e8a6893cdadf3a89089327868e8addf18f8c0210a185dae504d->enter($__internal_7fbc35e7d5040e8a6893cdadf3a89089327868e8addf18f8c0210a185dae504d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/newpost.html.twig"));

        $__internal_fefed5e9e2086ed3808ed6bfed4571d7b435a44f92d98df99f2bb8e58666f0fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fefed5e9e2086ed3808ed6bfed4571d7b435a44f92d98df99f2bb8e58666f0fa->enter($__internal_fefed5e9e2086ed3808ed6bfed4571d7b435a44f92d98df99f2bb8e58666f0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/newpost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fbc35e7d5040e8a6893cdadf3a89089327868e8addf18f8c0210a185dae504d->leave($__internal_7fbc35e7d5040e8a6893cdadf3a89089327868e8addf18f8c0210a185dae504d_prof);

        
        $__internal_fefed5e9e2086ed3808ed6bfed4571d7b435a44f92d98df99f2bb8e58666f0fa->leave($__internal_fefed5e9e2086ed3808ed6bfed4571d7b435a44f92d98df99f2bb8e58666f0fa_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_82320c6bb62feef95aa185e06708f68c3ed21bcda7df039838503ddee4257999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82320c6bb62feef95aa185e06708f68c3ed21bcda7df039838503ddee4257999->enter($__internal_82320c6bb62feef95aa185e06708f68c3ed21bcda7df039838503ddee4257999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_02c1ac5f119115388f8adab1cc75e09d0ca20acd1524a8264e78cc9bb61044a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c1ac5f119115388f8adab1cc75e09d0ca20acd1524a8264e78cc9bb61044a7->enter($__internal_02c1ac5f119115388f8adab1cc75e09d0ca20acd1524a8264e78cc9bb61044a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Hacker News ";
        
        $__internal_02c1ac5f119115388f8adab1cc75e09d0ca20acd1524a8264e78cc9bb61044a7->leave($__internal_02c1ac5f119115388f8adab1cc75e09d0ca20acd1524a8264e78cc9bb61044a7_prof);

        
        $__internal_82320c6bb62feef95aa185e06708f68c3ed21bcda7df039838503ddee4257999->leave($__internal_82320c6bb62feef95aa185e06708f68c3ed21bcda7df039838503ddee4257999_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9bd26b83e89407335a107a197ffe75633c1668edf26c7721ac333ed9b7ab48b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9bd26b83e89407335a107a197ffe75633c1668edf26c7721ac333ed9b7ab48b->enter($__internal_d9bd26b83e89407335a107a197ffe75633c1668edf26c7721ac333ed9b7ab48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8f625e8472f9fa61b3a856088d84c20bf52f9267f9da7cd62fafc691046b07c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f625e8472f9fa61b3a856088d84c20bf52f9267f9da7cd62fafc691046b07c1->enter($__internal_8f625e8472f9fa61b3a856088d84c20bf52f9267f9da7cd62fafc691046b07c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8f625e8472f9fa61b3a856088d84c20bf52f9267f9da7cd62fafc691046b07c1->leave($__internal_8f625e8472f9fa61b3a856088d84c20bf52f9267f9da7cd62fafc691046b07c1_prof);

        
        $__internal_d9bd26b83e89407335a107a197ffe75633c1668edf26c7721ac333ed9b7ab48b->leave($__internal_d9bd26b83e89407335a107a197ffe75633c1668edf26c7721ac333ed9b7ab48b_prof);

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
