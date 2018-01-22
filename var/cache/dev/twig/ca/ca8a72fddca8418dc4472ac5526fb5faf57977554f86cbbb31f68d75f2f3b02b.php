<?php

/* base.html.twig */
class __TwigTemplate_8ed9f7030abbdb65e33b48a8fd8e7cfa76ce58c426f86c3a1735350899224b21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d755e0ab30d8bd74b897477ea9270da5a14b504691b456d6123fe8dc623f5a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d755e0ab30d8bd74b897477ea9270da5a14b504691b456d6123fe8dc623f5a7->enter($__internal_4d755e0ab30d8bd74b897477ea9270da5a14b504691b456d6123fe8dc623f5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
        <style>
          .no-under:hover {
            text-decoration: none !important;
          }
          .no-pad {
            padding-right: 0px; padding-left: 0px;
          }
        </style>
    </head>
    <body>
        ";
        // line 20
        $this->loadTemplate("default/navbar.html.twig", "base.html.twig", 20)->display($context);
        // line 21
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "        <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
        <script>
          \$('.like').click(function(){
            var id = \$(this).attr('data-id');
            \$.ajax({
              type: 'POST',
              url: '";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("upvotepost");
        echo "',
              data: {
                id: id
              },
              success: function(data){
                console.log(data);
              }
            });
          });
        </script>
    </body>
</html>
";
        
        $__internal_4d755e0ab30d8bd74b897477ea9270da5a14b504691b456d6123fe8dc623f5a7->leave($__internal_4d755e0ab30d8bd74b897477ea9270da5a14b504691b456d6123fe8dc623f5a7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eca1ddd42a92a4992b5a76c17e9db5b7691a745173e7b84d6c85e03d249e187c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca1ddd42a92a4992b5a76c17e9db5b7691a745173e7b84d6c85e03d249e187c->enter($__internal_eca1ddd42a92a4992b5a76c17e9db5b7691a745173e7b84d6c85e03d249e187c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_eca1ddd42a92a4992b5a76c17e9db5b7691a745173e7b84d6c85e03d249e187c->leave($__internal_eca1ddd42a92a4992b5a76c17e9db5b7691a745173e7b84d6c85e03d249e187c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bca2eb685e1d79dd941baa70b9a1c4c75449928f13d3bc479032f73dbf624713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bca2eb685e1d79dd941baa70b9a1c4c75449928f13d3bc479032f73dbf624713->enter($__internal_bca2eb685e1d79dd941baa70b9a1c4c75449928f13d3bc479032f73dbf624713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bca2eb685e1d79dd941baa70b9a1c4c75449928f13d3bc479032f73dbf624713->leave($__internal_bca2eb685e1d79dd941baa70b9a1c4c75449928f13d3bc479032f73dbf624713_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc26d5c3d9b4fcf01652814c88785934d1a719f3a47d574cfe29c07f6dd00127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc26d5c3d9b4fcf01652814c88785934d1a719f3a47d574cfe29c07f6dd00127->enter($__internal_cc26d5c3d9b4fcf01652814c88785934d1a719f3a47d574cfe29c07f6dd00127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cc26d5c3d9b4fcf01652814c88785934d1a719f3a47d574cfe29c07f6dd00127->leave($__internal_cc26d5c3d9b4fcf01652814c88785934d1a719f3a47d574cfe29c07f6dd00127_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2339a235ac3242dac88fef5e72721f3da92324a26fde2ac199b1ef8b92b992ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2339a235ac3242dac88fef5e72721f3da92324a26fde2ac199b1ef8b92b992ee->enter($__internal_2339a235ac3242dac88fef5e72721f3da92324a26fde2ac199b1ef8b92b992ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2339a235ac3242dac88fef5e72721f3da92324a26fde2ac199b1ef8b92b992ee->leave($__internal_2339a235ac3242dac88fef5e72721f3da92324a26fde2ac199b1ef8b92b992ee_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 22,  116 => 21,  105 => 6,  93 => 5,  73 => 31,  63 => 23,  60 => 22,  57 => 21,  55 => 20,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
        <style>
          .no-under:hover {
            text-decoration: none !important;
          }
          .no-pad {
            padding-right: 0px; padding-left: 0px;
          }
        </style>
    </head>
    <body>
        {% include 'default/navbar.html.twig' %}
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
        <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
        <script>
          \$('.like').click(function(){
            var id = \$(this).attr('data-id');
            \$.ajax({
              type: 'POST',
              url: '{{ path(('upvotepost')) }}',
              data: {
                id: id
              },
              success: function(data){
                console.log(data);
              }
            });
          });
        </script>
    </body>
</html>
", "base.html.twig", "/home/karim/Desktop/sandbox/hacker-news/app/Resources/views/base.html.twig");
    }
}
