<?php

/* default/index.html.twig */
class __TwigTemplate_db993d9d228fccec8daace3324d570766a614f1cd68f9702ca90dbb4bcce283a extends Twig_Template
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
        $__internal_df54560e04246db3c148161f33fe5e85880c2186d8ad8e093f2be23475efbd5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df54560e04246db3c148161f33fe5e85880c2186d8ad8e093f2be23475efbd5b->enter($__internal_df54560e04246db3c148161f33fe5e85880c2186d8ad8e093f2be23475efbd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_070260c4a84d1cf3b39a7397d431240a0ac92424a53cba14062589148dd229e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070260c4a84d1cf3b39a7397d431240a0ac92424a53cba14062589148dd229e0->enter($__internal_070260c4a84d1cf3b39a7397d431240a0ac92424a53cba14062589148dd229e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df54560e04246db3c148161f33fe5e85880c2186d8ad8e093f2be23475efbd5b->leave($__internal_df54560e04246db3c148161f33fe5e85880c2186d8ad8e093f2be23475efbd5b_prof);

        
        $__internal_070260c4a84d1cf3b39a7397d431240a0ac92424a53cba14062589148dd229e0->leave($__internal_070260c4a84d1cf3b39a7397d431240a0ac92424a53cba14062589148dd229e0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6518b3af43713eeb528518d7c710029926e6873c67b6b14a82745988ed52676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6518b3af43713eeb528518d7c710029926e6873c67b6b14a82745988ed52676->enter($__internal_b6518b3af43713eeb528518d7c710029926e6873c67b6b14a82745988ed52676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d8a7c2cea39213941f51d7498038ec92a1789dfb8444d581cbcbc1dc54479472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8a7c2cea39213941f51d7498038ec92a1789dfb8444d581cbcbc1dc54479472->enter($__internal_d8a7c2cea39213941f51d7498038ec92a1789dfb8444d581cbcbc1dc54479472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d8a7c2cea39213941f51d7498038ec92a1789dfb8444d581cbcbc1dc54479472->leave($__internal_d8a7c2cea39213941f51d7498038ec92a1789dfb8444d581cbcbc1dc54479472_prof);

        
        $__internal_b6518b3af43713eeb528518d7c710029926e6873c67b6b14a82745988ed52676->leave($__internal_b6518b3af43713eeb528518d7c710029926e6873c67b6b14a82745988ed52676_prof);

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
