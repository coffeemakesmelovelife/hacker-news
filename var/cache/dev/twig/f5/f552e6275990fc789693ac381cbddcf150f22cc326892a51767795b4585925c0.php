<?php

/* default/navbar.html.twig */
class __TwigTemplate_f53ecdd04f5bf3e1d409e4489048e66d2b6c5926a45d3860711b656bd2575bff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e1e1614933960d830e7a6eca655f4f66dc0b4162a4cf2ef0abceed16e7a0510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e1e1614933960d830e7a6eca655f4f66dc0b4162a4cf2ef0abceed16e7a0510->enter($__internal_2e1e1614933960d830e7a6eca655f4f66dc0b4162a4cf2ef0abceed16e7a0510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/navbar.html.twig"));

        // line 1
        $this->displayBlock('nav', $context, $blocks);
        
        $__internal_2e1e1614933960d830e7a6eca655f4f66dc0b4162a4cf2ef0abceed16e7a0510->leave($__internal_2e1e1614933960d830e7a6eca655f4f66dc0b4162a4cf2ef0abceed16e7a0510_prof);

    }

    public function block_nav($context, array $blocks = array())
    {
        $__internal_67f13c22c96cbd1623c0b8c958fd98e4921c037187f230510ed90ff027740cfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67f13c22c96cbd1623c0b8c958fd98e4921c037187f230510ed90ff027740cfc->enter($__internal_67f13c22c96cbd1623c0b8c958fd98e4921c037187f230510ed90ff027740cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 2
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
  <a class=\"navbar-brand\" href=\"/\">
    <i>Hacker News</i>
  </a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav ml-auto\">
      ";
        // line 12
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 13
            echo "      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">Home
          <span class=\"sr-only\"></span></a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newpost");
            echo "\">New Post
          <span class=\"sr-only\"></span></a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Logout</a>
      </li>
      ";
        } else {
            // line 25
            echo "      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Login</a>
      </li><li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
            echo "\">Register</a>
      </li>
      ";
        }
        // line 31
        echo "    </ul>
  </div>
</nav>
";
        
        $__internal_67f13c22c96cbd1623c0b8c958fd98e4921c037187f230510ed90ff027740cfc->leave($__internal_67f13c22c96cbd1623c0b8c958fd98e4921c037187f230510ed90ff027740cfc_prof);

    }

    public function getTemplateName()
    {
        return "default/navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  86 => 31,  80 => 28,  75 => 26,  72 => 25,  66 => 22,  59 => 18,  52 => 14,  49 => 13,  47 => 12,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block nav %}
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
  <a class=\"navbar-brand\" href=\"/\">
    <i>Hacker News</i>
  </a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav ml-auto\">
      {% if(is_granted('ROLE_USER')) %}
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('homepage') }}\">Home
          <span class=\"sr-only\"></span></a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('newpost') }}\">New Post
          <span class=\"sr-only\"></span></a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('logout') }}\">Logout</a>
      </li>
      {% else %}
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('login') }}\">Login</a>
      </li><li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('register') }}\">Register</a>
      </li>
      {% endif %}
    </ul>
  </div>
</nav>
{% endblock %}
", "default/navbar.html.twig", "/home/karim/Desktop/sandbox/hacker-news/app/Resources/views/default/navbar.html.twig");
    }
}
