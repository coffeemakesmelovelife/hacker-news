<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
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
        $__internal_7e37bac9ce2fdfcf00eb09da412dd1ba9f97795648d1a11009fb20ab8ea65c8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e37bac9ce2fdfcf00eb09da412dd1ba9f97795648d1a11009fb20ab8ea65c8e->enter($__internal_7e37bac9ce2fdfcf00eb09da412dd1ba9f97795648d1a11009fb20ab8ea65c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_98ca7def25126ba7c7d381e2cdd2e9431debae67b745e837650226ef153199df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ca7def25126ba7c7d381e2cdd2e9431debae67b745e837650226ef153199df->enter($__internal_98ca7def25126ba7c7d381e2cdd2e9431debae67b745e837650226ef153199df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
    </body>
</html>
";
        
        $__internal_7e37bac9ce2fdfcf00eb09da412dd1ba9f97795648d1a11009fb20ab8ea65c8e->leave($__internal_7e37bac9ce2fdfcf00eb09da412dd1ba9f97795648d1a11009fb20ab8ea65c8e_prof);

        
        $__internal_98ca7def25126ba7c7d381e2cdd2e9431debae67b745e837650226ef153199df->leave($__internal_98ca7def25126ba7c7d381e2cdd2e9431debae67b745e837650226ef153199df_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_44122541aaf99ba173fd375043544c550e62f963b7bbcd9614c355a2e6a20993 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44122541aaf99ba173fd375043544c550e62f963b7bbcd9614c355a2e6a20993->enter($__internal_44122541aaf99ba173fd375043544c550e62f963b7bbcd9614c355a2e6a20993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9b72020e598ae74ffb60260ebd06134e2f3c9d3d26fb374eb69770e79f5b28ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b72020e598ae74ffb60260ebd06134e2f3c9d3d26fb374eb69770e79f5b28ea->enter($__internal_9b72020e598ae74ffb60260ebd06134e2f3c9d3d26fb374eb69770e79f5b28ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9b72020e598ae74ffb60260ebd06134e2f3c9d3d26fb374eb69770e79f5b28ea->leave($__internal_9b72020e598ae74ffb60260ebd06134e2f3c9d3d26fb374eb69770e79f5b28ea_prof);

        
        $__internal_44122541aaf99ba173fd375043544c550e62f963b7bbcd9614c355a2e6a20993->leave($__internal_44122541aaf99ba173fd375043544c550e62f963b7bbcd9614c355a2e6a20993_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_55a7ccbb21cea28776279990eb11f34f0a138089024c46dbe59057a8a9841ec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55a7ccbb21cea28776279990eb11f34f0a138089024c46dbe59057a8a9841ec6->enter($__internal_55a7ccbb21cea28776279990eb11f34f0a138089024c46dbe59057a8a9841ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_51a5957bb68bee2bc5aa7f7675fe4f6dfdcaad9163baa93d8ce01f29a7f0338b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a5957bb68bee2bc5aa7f7675fe4f6dfdcaad9163baa93d8ce01f29a7f0338b->enter($__internal_51a5957bb68bee2bc5aa7f7675fe4f6dfdcaad9163baa93d8ce01f29a7f0338b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_51a5957bb68bee2bc5aa7f7675fe4f6dfdcaad9163baa93d8ce01f29a7f0338b->leave($__internal_51a5957bb68bee2bc5aa7f7675fe4f6dfdcaad9163baa93d8ce01f29a7f0338b_prof);

        
        $__internal_55a7ccbb21cea28776279990eb11f34f0a138089024c46dbe59057a8a9841ec6->leave($__internal_55a7ccbb21cea28776279990eb11f34f0a138089024c46dbe59057a8a9841ec6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_693bd5561b643cced5ee5ab03ce1cd830f1207413fa2974ab15ecd1dff409cab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_693bd5561b643cced5ee5ab03ce1cd830f1207413fa2974ab15ecd1dff409cab->enter($__internal_693bd5561b643cced5ee5ab03ce1cd830f1207413fa2974ab15ecd1dff409cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f3a40267b855d04abc500b8c3dffe075aebe63ac75370053806873a20722d35b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a40267b855d04abc500b8c3dffe075aebe63ac75370053806873a20722d35b->enter($__internal_f3a40267b855d04abc500b8c3dffe075aebe63ac75370053806873a20722d35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f3a40267b855d04abc500b8c3dffe075aebe63ac75370053806873a20722d35b->leave($__internal_f3a40267b855d04abc500b8c3dffe075aebe63ac75370053806873a20722d35b_prof);

        
        $__internal_693bd5561b643cced5ee5ab03ce1cd830f1207413fa2974ab15ecd1dff409cab->leave($__internal_693bd5561b643cced5ee5ab03ce1cd830f1207413fa2974ab15ecd1dff409cab_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8a31a86fee7b0707f8282a6389105daaecad97fa3741efb5fc4b661473cce0fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a31a86fee7b0707f8282a6389105daaecad97fa3741efb5fc4b661473cce0fe->enter($__internal_8a31a86fee7b0707f8282a6389105daaecad97fa3741efb5fc4b661473cce0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6e874ef06744ee6aac62b755bac056e6397593d0f40772be546f346162c394f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e874ef06744ee6aac62b755bac056e6397593d0f40772be546f346162c394f1->enter($__internal_6e874ef06744ee6aac62b755bac056e6397593d0f40772be546f346162c394f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6e874ef06744ee6aac62b755bac056e6397593d0f40772be546f346162c394f1->leave($__internal_6e874ef06744ee6aac62b755bac056e6397593d0f40772be546f346162c394f1_prof);

        
        $__internal_8a31a86fee7b0707f8282a6389105daaecad97fa3741efb5fc4b661473cce0fe->leave($__internal_8a31a86fee7b0707f8282a6389105daaecad97fa3741efb5fc4b661473cce0fe_prof);

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
        return array (  121 => 12,  104 => 11,  87 => 6,  69 => 5,  54 => 13,  51 => 12,  49 => 11,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
    </body>
</html>
", "base.html.twig", "/home/karim/Desktop/sandbox/symfony-standard-2/app/Resources/views/base.html.twig");
    }
}
