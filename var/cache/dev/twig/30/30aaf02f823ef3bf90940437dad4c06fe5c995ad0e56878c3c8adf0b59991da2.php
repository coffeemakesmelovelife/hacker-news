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
        $__internal_388b7c9044d1e7ad6dadbea8dd7fe8a78532ffa8971e6423ebafd1cd8efea658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_388b7c9044d1e7ad6dadbea8dd7fe8a78532ffa8971e6423ebafd1cd8efea658->enter($__internal_388b7c9044d1e7ad6dadbea8dd7fe8a78532ffa8971e6423ebafd1cd8efea658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e007ee101c5b8517afd64d5befd3fdbd8a1f28fe0d96525ca0b676053a82efd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e007ee101c5b8517afd64d5befd3fdbd8a1f28fe0d96525ca0b676053a82efd2->enter($__internal_e007ee101c5b8517afd64d5befd3fdbd8a1f28fe0d96525ca0b676053a82efd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_388b7c9044d1e7ad6dadbea8dd7fe8a78532ffa8971e6423ebafd1cd8efea658->leave($__internal_388b7c9044d1e7ad6dadbea8dd7fe8a78532ffa8971e6423ebafd1cd8efea658_prof);

        
        $__internal_e007ee101c5b8517afd64d5befd3fdbd8a1f28fe0d96525ca0b676053a82efd2->leave($__internal_e007ee101c5b8517afd64d5befd3fdbd8a1f28fe0d96525ca0b676053a82efd2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_181d5e1b76b68208e6ed7caafcb5d28dfabc47f7fed2faf92e8f1b9a81d5ba5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_181d5e1b76b68208e6ed7caafcb5d28dfabc47f7fed2faf92e8f1b9a81d5ba5e->enter($__internal_181d5e1b76b68208e6ed7caafcb5d28dfabc47f7fed2faf92e8f1b9a81d5ba5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ddf94a04fea1f69723562c3f9e3c3e86debd4db23ce50da206c297147af5106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ddf94a04fea1f69723562c3f9e3c3e86debd4db23ce50da206c297147af5106->enter($__internal_1ddf94a04fea1f69723562c3f9e3c3e86debd4db23ce50da206c297147af5106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1ddf94a04fea1f69723562c3f9e3c3e86debd4db23ce50da206c297147af5106->leave($__internal_1ddf94a04fea1f69723562c3f9e3c3e86debd4db23ce50da206c297147af5106_prof);

        
        $__internal_181d5e1b76b68208e6ed7caafcb5d28dfabc47f7fed2faf92e8f1b9a81d5ba5e->leave($__internal_181d5e1b76b68208e6ed7caafcb5d28dfabc47f7fed2faf92e8f1b9a81d5ba5e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aae18fceeabb4ca00a9f7ba690b64652d40975dbbd7796cc10519f940eb394c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aae18fceeabb4ca00a9f7ba690b64652d40975dbbd7796cc10519f940eb394c2->enter($__internal_aae18fceeabb4ca00a9f7ba690b64652d40975dbbd7796cc10519f940eb394c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_54d063a753302abfe6cde3086c1b5c54ee9cd9d204c524862f1c74ad06c1bbfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d063a753302abfe6cde3086c1b5c54ee9cd9d204c524862f1c74ad06c1bbfa->enter($__internal_54d063a753302abfe6cde3086c1b5c54ee9cd9d204c524862f1c74ad06c1bbfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_54d063a753302abfe6cde3086c1b5c54ee9cd9d204c524862f1c74ad06c1bbfa->leave($__internal_54d063a753302abfe6cde3086c1b5c54ee9cd9d204c524862f1c74ad06c1bbfa_prof);

        
        $__internal_aae18fceeabb4ca00a9f7ba690b64652d40975dbbd7796cc10519f940eb394c2->leave($__internal_aae18fceeabb4ca00a9f7ba690b64652d40975dbbd7796cc10519f940eb394c2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d5b527e49f577a669a0f7c4b4f20d18fa2d5ef8557f8786052b9b79dd3ac0f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d5b527e49f577a669a0f7c4b4f20d18fa2d5ef8557f8786052b9b79dd3ac0f3->enter($__internal_6d5b527e49f577a669a0f7c4b4f20d18fa2d5ef8557f8786052b9b79dd3ac0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_98a4fa9b6631a002a85a1a229bb9edcebad5868112b7531c7ee6a2c694612435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98a4fa9b6631a002a85a1a229bb9edcebad5868112b7531c7ee6a2c694612435->enter($__internal_98a4fa9b6631a002a85a1a229bb9edcebad5868112b7531c7ee6a2c694612435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_98a4fa9b6631a002a85a1a229bb9edcebad5868112b7531c7ee6a2c694612435->leave($__internal_98a4fa9b6631a002a85a1a229bb9edcebad5868112b7531c7ee6a2c694612435_prof);

        
        $__internal_6d5b527e49f577a669a0f7c4b4f20d18fa2d5ef8557f8786052b9b79dd3ac0f3->leave($__internal_6d5b527e49f577a669a0f7c4b4f20d18fa2d5ef8557f8786052b9b79dd3ac0f3_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3bae655c45fc9b9fe81cac9527701e93e2179fa0bd6b75e35921e74df938435b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bae655c45fc9b9fe81cac9527701e93e2179fa0bd6b75e35921e74df938435b->enter($__internal_3bae655c45fc9b9fe81cac9527701e93e2179fa0bd6b75e35921e74df938435b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_06472101e39cdbb427bcd78b7601505251584f209bfeb53b3e6000101faa612f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06472101e39cdbb427bcd78b7601505251584f209bfeb53b3e6000101faa612f->enter($__internal_06472101e39cdbb427bcd78b7601505251584f209bfeb53b3e6000101faa612f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_06472101e39cdbb427bcd78b7601505251584f209bfeb53b3e6000101faa612f->leave($__internal_06472101e39cdbb427bcd78b7601505251584f209bfeb53b3e6000101faa612f_prof);

        
        $__internal_3bae655c45fc9b9fe81cac9527701e93e2179fa0bd6b75e35921e74df938435b->leave($__internal_3bae655c45fc9b9fe81cac9527701e93e2179fa0bd6b75e35921e74df938435b_prof);

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
