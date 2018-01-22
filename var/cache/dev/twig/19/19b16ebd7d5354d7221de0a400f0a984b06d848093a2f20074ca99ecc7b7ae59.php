<?php

/* default/navbar.html.twig */
class __TwigTemplate_87b29ff08ef88a8e918c37c4180e41ff86e88faed92583d03e1123c054c2fa75 extends Twig_Template
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
        $__internal_4c67a6a6dc2fd435f386cdfcb72f7b462882041ae1994e8131bd28d2129365fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c67a6a6dc2fd435f386cdfcb72f7b462882041ae1994e8131bd28d2129365fe->enter($__internal_4c67a6a6dc2fd435f386cdfcb72f7b462882041ae1994e8131bd28d2129365fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/navbar.html.twig"));

        $__internal_0584162675854c635c8ac3c198744bfda6068659517f97c20b30214bf28a7295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0584162675854c635c8ac3c198744bfda6068659517f97c20b30214bf28a7295->enter($__internal_0584162675854c635c8ac3c198744bfda6068659517f97c20b30214bf28a7295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/navbar.html.twig"));

        // line 1
        $this->displayBlock('nav', $context, $blocks);
        
        $__internal_4c67a6a6dc2fd435f386cdfcb72f7b462882041ae1994e8131bd28d2129365fe->leave($__internal_4c67a6a6dc2fd435f386cdfcb72f7b462882041ae1994e8131bd28d2129365fe_prof);

        
        $__internal_0584162675854c635c8ac3c198744bfda6068659517f97c20b30214bf28a7295->leave($__internal_0584162675854c635c8ac3c198744bfda6068659517f97c20b30214bf28a7295_prof);

    }

    public function block_nav($context, array $blocks = array())
    {
        $__internal_bfa70c4d4c06f8ecf7a84887f48e33be53b9a4bd429c08b38cc2afb4997838e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfa70c4d4c06f8ecf7a84887f48e33be53b9a4bd429c08b38cc2afb4997838e2->enter($__internal_bfa70c4d4c06f8ecf7a84887f48e33be53b9a4bd429c08b38cc2afb4997838e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_a9876d5639a6ea5a449277da17e5aa729c33182dea31600ec74824968d69d3b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9876d5639a6ea5a449277da17e5aa729c33182dea31600ec74824968d69d3b7->enter($__internal_a9876d5639a6ea5a449277da17e5aa729c33182dea31600ec74824968d69d3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 2
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
  <a class=\"navbar-brand\" href=\"/\">
    &lt; Hacker News &gt;
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
        
        $__internal_a9876d5639a6ea5a449277da17e5aa729c33182dea31600ec74824968d69d3b7->leave($__internal_a9876d5639a6ea5a449277da17e5aa729c33182dea31600ec74824968d69d3b7_prof);

        
        $__internal_bfa70c4d4c06f8ecf7a84887f48e33be53b9a4bd429c08b38cc2afb4997838e2->leave($__internal_bfa70c4d4c06f8ecf7a84887f48e33be53b9a4bd429c08b38cc2afb4997838e2_prof);

    }

    public function getTemplateName()
    {
        return "default/navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  95 => 31,  89 => 28,  84 => 26,  81 => 25,  75 => 22,  68 => 18,  61 => 14,  58 => 13,  56 => 12,  44 => 2,  26 => 1,);
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
    &lt; Hacker News &gt;
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
