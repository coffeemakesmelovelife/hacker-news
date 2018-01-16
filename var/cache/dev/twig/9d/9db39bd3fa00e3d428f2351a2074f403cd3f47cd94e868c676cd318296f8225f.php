<?php

/* default/index.html.twig */
class __TwigTemplate_0b815f0ef9614ea8ce24d3f255319831783f6a333b152d820bf540daba520993 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0832fb404c54c5316d3dba9b6adccd160517c05a478fa006d4640dffda65f21e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0832fb404c54c5316d3dba9b6adccd160517c05a478fa006d4640dffda65f21e->enter($__internal_0832fb404c54c5316d3dba9b6adccd160517c05a478fa006d4640dffda65f21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_394e034125483be166b4f920dbcffd9e668de307cb3455feaf7f9472f0d87b01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_394e034125483be166b4f920dbcffd9e668de307cb3455feaf7f9472f0d87b01->enter($__internal_394e034125483be166b4f920dbcffd9e668de307cb3455feaf7f9472f0d87b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0832fb404c54c5316d3dba9b6adccd160517c05a478fa006d4640dffda65f21e->leave($__internal_0832fb404c54c5316d3dba9b6adccd160517c05a478fa006d4640dffda65f21e_prof);

        
        $__internal_394e034125483be166b4f920dbcffd9e668de307cb3455feaf7f9472f0d87b01->leave($__internal_394e034125483be166b4f920dbcffd9e668de307cb3455feaf7f9472f0d87b01_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cab046f11abf300be3f9aa626c819e8420c665e3d5742411d74a2e2e82455b44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cab046f11abf300be3f9aa626c819e8420c665e3d5742411d74a2e2e82455b44->enter($__internal_cab046f11abf300be3f9aa626c819e8420c665e3d5742411d74a2e2e82455b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a6243b3021d77b4632160335168b2e7f87ed2d1a63c13f502fc1bea6a131cb43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6243b3021d77b4632160335168b2e7f87ed2d1a63c13f502fc1bea6a131cb43->enter($__internal_a6243b3021d77b4632160335168b2e7f87ed2d1a63c13f502fc1bea6a131cb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
<a class=\"navbar-brand\" href=\"/\"><i>Hacker News</i></a>
<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
  <span class=\"navbar-toggler-icon\"></span>
</button>

<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
  <ul class=\"navbar-nav ml-auto\">
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home <span class=\"sr-only\"></span></a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\">Logout</a>
    </li>
  </ul>
</div>
</nav>
      <h1 class=\"text-center\">Home</h1>
";
        
        $__internal_a6243b3021d77b4632160335168b2e7f87ed2d1a63c13f502fc1bea6a131cb43->leave($__internal_a6243b3021d77b4632160335168b2e7f87ed2d1a63c13f502fc1bea6a131cb43_prof);

        
        $__internal_cab046f11abf300be3f9aa626c819e8420c665e3d5742411d74a2e2e82455b44->leave($__internal_cab046f11abf300be3f9aa626c819e8420c665e3d5742411d74a2e2e82455b44_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 16,  60 => 13,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
<a class=\"navbar-brand\" href=\"/\"><i>Hacker News</i></a>
<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
  <span class=\"navbar-toggler-icon\"></span>
</button>

<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
  <ul class=\"navbar-nav ml-auto\">
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"{{ path('homepage') }}\">Home <span class=\"sr-only\"></span></a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"{{ path('logout') }}\">Logout</a>
    </li>
  </ul>
</div>
</nav>
      <h1 class=\"text-center\">Home</h1>
{% endblock %}
", "default/index.html.twig", "/home/karim/Desktop/sandbox/symfony-standard-2/app/Resources/views/default/index.html.twig");
    }
}
