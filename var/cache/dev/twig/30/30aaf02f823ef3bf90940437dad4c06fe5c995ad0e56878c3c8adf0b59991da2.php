<?php

/* base.html.twig */
class __TwigTemplate_1bdbe4a5e7ffcb0fa4d78cd34e44d26c7fe5da24e6582d3b4b4bf4f79baa38d0 extends Twig_Template
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
        $__internal_5435d06470b10549a401ebe653185615977a6312cc86c4d0be84d83bb2651a23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5435d06470b10549a401ebe653185615977a6312cc86c4d0be84d83bb2651a23->enter($__internal_5435d06470b10549a401ebe653185615977a6312cc86c4d0be84d83bb2651a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4eb47929eea546a201eae0a94eaf50f671b3e54c8bed1999c9b8f7c6155765e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eb47929eea546a201eae0a94eaf50f671b3e54c8bed1999c9b8f7c6155765e4->enter($__internal_4eb47929eea546a201eae0a94eaf50f671b3e54c8bed1999c9b8f7c6155765e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <link href=\"https://fonts.googleapis.com/css?family=Electrolize\" rel=\"stylesheet\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>
    <body>
        ";
        // line 14
        $this->loadTemplate("default/navbar.html.twig", "base.html.twig", 14)->display($context);
        // line 15
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "        <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
        <script src=\"https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js\"></script>
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_5435d06470b10549a401ebe653185615977a6312cc86c4d0be84d83bb2651a23->leave($__internal_5435d06470b10549a401ebe653185615977a6312cc86c4d0be84d83bb2651a23_prof);

        
        $__internal_4eb47929eea546a201eae0a94eaf50f671b3e54c8bed1999c9b8f7c6155765e4->leave($__internal_4eb47929eea546a201eae0a94eaf50f671b3e54c8bed1999c9b8f7c6155765e4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f33cfc934b1cec7a3b45035aa74914a70124b426cfd0a532cfecc4a1274c4cc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f33cfc934b1cec7a3b45035aa74914a70124b426cfd0a532cfecc4a1274c4cc9->enter($__internal_f33cfc934b1cec7a3b45035aa74914a70124b426cfd0a532cfecc4a1274c4cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f5d8a23c9bac271d79f9393a14bfba437536831a1b41e1171c03b613ec226fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5d8a23c9bac271d79f9393a14bfba437536831a1b41e1171c03b613ec226fdd->enter($__internal_f5d8a23c9bac271d79f9393a14bfba437536831a1b41e1171c03b613ec226fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f5d8a23c9bac271d79f9393a14bfba437536831a1b41e1171c03b613ec226fdd->leave($__internal_f5d8a23c9bac271d79f9393a14bfba437536831a1b41e1171c03b613ec226fdd_prof);

        
        $__internal_f33cfc934b1cec7a3b45035aa74914a70124b426cfd0a532cfecc4a1274c4cc9->leave($__internal_f33cfc934b1cec7a3b45035aa74914a70124b426cfd0a532cfecc4a1274c4cc9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_20f908274e062c23dd58af6ceac4ad00d8d118f92b72c5391da469b16ef11973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20f908274e062c23dd58af6ceac4ad00d8d118f92b72c5391da469b16ef11973->enter($__internal_20f908274e062c23dd58af6ceac4ad00d8d118f92b72c5391da469b16ef11973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9dd7f8c630235ec71e59e88a523a6cec37363d6fdff0e12f93e6596a1ef089d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dd7f8c630235ec71e59e88a523a6cec37363d6fdff0e12f93e6596a1ef089d6->enter($__internal_9dd7f8c630235ec71e59e88a523a6cec37363d6fdff0e12f93e6596a1ef089d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9dd7f8c630235ec71e59e88a523a6cec37363d6fdff0e12f93e6596a1ef089d6->leave($__internal_9dd7f8c630235ec71e59e88a523a6cec37363d6fdff0e12f93e6596a1ef089d6_prof);

        
        $__internal_20f908274e062c23dd58af6ceac4ad00d8d118f92b72c5391da469b16ef11973->leave($__internal_20f908274e062c23dd58af6ceac4ad00d8d118f92b72c5391da469b16ef11973_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_72bcdd3b7f15ee9a125a66b4eebc1c5d2e7c41b12f7f3ed68ddfb32f885d294b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72bcdd3b7f15ee9a125a66b4eebc1c5d2e7c41b12f7f3ed68ddfb32f885d294b->enter($__internal_72bcdd3b7f15ee9a125a66b4eebc1c5d2e7c41b12f7f3ed68ddfb32f885d294b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b510519eec7a8c523ec7fe0498c6d142e51af6c029e4414c3d1b2776fcfa50c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b510519eec7a8c523ec7fe0498c6d142e51af6c029e4414c3d1b2776fcfa50c6->enter($__internal_b510519eec7a8c523ec7fe0498c6d142e51af6c029e4414c3d1b2776fcfa50c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b510519eec7a8c523ec7fe0498c6d142e51af6c029e4414c3d1b2776fcfa50c6->leave($__internal_b510519eec7a8c523ec7fe0498c6d142e51af6c029e4414c3d1b2776fcfa50c6_prof);

        
        $__internal_72bcdd3b7f15ee9a125a66b4eebc1c5d2e7c41b12f7f3ed68ddfb32f885d294b->leave($__internal_72bcdd3b7f15ee9a125a66b4eebc1c5d2e7c41b12f7f3ed68ddfb32f885d294b_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9654bbbb41d30887f0868d9ec59b6078c111adf207428fd8cce486ec33602240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9654bbbb41d30887f0868d9ec59b6078c111adf207428fd8cce486ec33602240->enter($__internal_9654bbbb41d30887f0868d9ec59b6078c111adf207428fd8cce486ec33602240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7c68ecaaae6dd378963d51c14e589ab50f9cdd9293dbc50ea6832400b6358fd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c68ecaaae6dd378963d51c14e589ab50f9cdd9293dbc50ea6832400b6358fd1->enter($__internal_7c68ecaaae6dd378963d51c14e589ab50f9cdd9293dbc50ea6832400b6358fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7c68ecaaae6dd378963d51c14e589ab50f9cdd9293dbc50ea6832400b6358fd1->leave($__internal_7c68ecaaae6dd378963d51c14e589ab50f9cdd9293dbc50ea6832400b6358fd1_prof);

        
        $__internal_9654bbbb41d30887f0868d9ec59b6078c111adf207428fd8cce486ec33602240->leave($__internal_9654bbbb41d30887f0868d9ec59b6078c111adf207428fd8cce486ec33602240_prof);

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
        return array (  135 => 16,  118 => 15,  101 => 6,  83 => 5,  69 => 21,  63 => 17,  60 => 16,  57 => 15,  55 => 14,  49 => 11,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <link href=\"https://fonts.googleapis.com/css?family=Electrolize\" rel=\"stylesheet\">
        <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">
    </head>
    <body>
        {% include 'default/navbar.html.twig' %}
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
        <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
        <script src=\"https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js\"></script>
        <script src=\"{{ asset('js/script.js') }}\"></script>
    </body>
</html>
", "base.html.twig", "/home/karim/Desktop/sandbox/hacker-news/app/Resources/views/base.html.twig");
    }
}
