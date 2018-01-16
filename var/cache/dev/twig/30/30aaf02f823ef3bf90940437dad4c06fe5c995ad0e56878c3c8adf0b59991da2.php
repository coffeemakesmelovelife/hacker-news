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
        $__internal_eb2df04fa4e0be648aa623e861815ffd867c2e7f16b9e35f5e58a0489127eb2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb2df04fa4e0be648aa623e861815ffd867c2e7f16b9e35f5e58a0489127eb2b->enter($__internal_eb2df04fa4e0be648aa623e861815ffd867c2e7f16b9e35f5e58a0489127eb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ec57f7a151f31c12f4e92bfdb2fb50a6c7bcb4ef8eeb3ba20e87e84ab53ce4f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec57f7a151f31c12f4e92bfdb2fb50a6c7bcb4ef8eeb3ba20e87e84ab53ce4f4->enter($__internal_ec57f7a151f31c12f4e92bfdb2fb50a6c7bcb4ef8eeb3ba20e87e84ab53ce4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
    </body>
</html>
";
        
        $__internal_eb2df04fa4e0be648aa623e861815ffd867c2e7f16b9e35f5e58a0489127eb2b->leave($__internal_eb2df04fa4e0be648aa623e861815ffd867c2e7f16b9e35f5e58a0489127eb2b_prof);

        
        $__internal_ec57f7a151f31c12f4e92bfdb2fb50a6c7bcb4ef8eeb3ba20e87e84ab53ce4f4->leave($__internal_ec57f7a151f31c12f4e92bfdb2fb50a6c7bcb4ef8eeb3ba20e87e84ab53ce4f4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ab3290d36abfe6a1556ca2d42058bf6554ae72942a2c4c89bcd8c7fd0dc315b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ab3290d36abfe6a1556ca2d42058bf6554ae72942a2c4c89bcd8c7fd0dc315b->enter($__internal_6ab3290d36abfe6a1556ca2d42058bf6554ae72942a2c4c89bcd8c7fd0dc315b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_afe34608aa1692b4c278a723e45ffea25a13e3cae865ff5f45474e016dd0a43f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afe34608aa1692b4c278a723e45ffea25a13e3cae865ff5f45474e016dd0a43f->enter($__internal_afe34608aa1692b4c278a723e45ffea25a13e3cae865ff5f45474e016dd0a43f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_afe34608aa1692b4c278a723e45ffea25a13e3cae865ff5f45474e016dd0a43f->leave($__internal_afe34608aa1692b4c278a723e45ffea25a13e3cae865ff5f45474e016dd0a43f_prof);

        
        $__internal_6ab3290d36abfe6a1556ca2d42058bf6554ae72942a2c4c89bcd8c7fd0dc315b->leave($__internal_6ab3290d36abfe6a1556ca2d42058bf6554ae72942a2c4c89bcd8c7fd0dc315b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c86e6007ae668421b138af74841160b4f853fe8886249091a660783080c78c74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c86e6007ae668421b138af74841160b4f853fe8886249091a660783080c78c74->enter($__internal_c86e6007ae668421b138af74841160b4f853fe8886249091a660783080c78c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a43776e1b3c19e985fe14d0312b9ca052b573783b24469e84cdc14bcd56b8d6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a43776e1b3c19e985fe14d0312b9ca052b573783b24469e84cdc14bcd56b8d6c->enter($__internal_a43776e1b3c19e985fe14d0312b9ca052b573783b24469e84cdc14bcd56b8d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a43776e1b3c19e985fe14d0312b9ca052b573783b24469e84cdc14bcd56b8d6c->leave($__internal_a43776e1b3c19e985fe14d0312b9ca052b573783b24469e84cdc14bcd56b8d6c_prof);

        
        $__internal_c86e6007ae668421b138af74841160b4f853fe8886249091a660783080c78c74->leave($__internal_c86e6007ae668421b138af74841160b4f853fe8886249091a660783080c78c74_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_3975658e8b291a4bdd91c33efa26672adf2cc4a450298a2ec87a24cff906b2b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3975658e8b291a4bdd91c33efa26672adf2cc4a450298a2ec87a24cff906b2b9->enter($__internal_3975658e8b291a4bdd91c33efa26672adf2cc4a450298a2ec87a24cff906b2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed791e33d958f6aba2ca98926261d4bcb6e5538198ec108e062517aa8e3b461c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed791e33d958f6aba2ca98926261d4bcb6e5538198ec108e062517aa8e3b461c->enter($__internal_ed791e33d958f6aba2ca98926261d4bcb6e5538198ec108e062517aa8e3b461c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ed791e33d958f6aba2ca98926261d4bcb6e5538198ec108e062517aa8e3b461c->leave($__internal_ed791e33d958f6aba2ca98926261d4bcb6e5538198ec108e062517aa8e3b461c_prof);

        
        $__internal_3975658e8b291a4bdd91c33efa26672adf2cc4a450298a2ec87a24cff906b2b9->leave($__internal_3975658e8b291a4bdd91c33efa26672adf2cc4a450298a2ec87a24cff906b2b9_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cbce419c6db2f3bf8f24b6c6181756875ee147cfaafd81adf03fe1b3b1801762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbce419c6db2f3bf8f24b6c6181756875ee147cfaafd81adf03fe1b3b1801762->enter($__internal_cbce419c6db2f3bf8f24b6c6181756875ee147cfaafd81adf03fe1b3b1801762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_473b4cabc8ac56d6bd2931b8f9fe821c3ab2d7b90d508dba209413773fbdcb24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_473b4cabc8ac56d6bd2931b8f9fe821c3ab2d7b90d508dba209413773fbdcb24->enter($__internal_473b4cabc8ac56d6bd2931b8f9fe821c3ab2d7b90d508dba209413773fbdcb24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_473b4cabc8ac56d6bd2931b8f9fe821c3ab2d7b90d508dba209413773fbdcb24->leave($__internal_473b4cabc8ac56d6bd2931b8f9fe821c3ab2d7b90d508dba209413773fbdcb24_prof);

        
        $__internal_cbce419c6db2f3bf8f24b6c6181756875ee147cfaafd81adf03fe1b3b1801762->leave($__internal_cbce419c6db2f3bf8f24b6c6181756875ee147cfaafd81adf03fe1b3b1801762_prof);

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
        return array (  122 => 13,  105 => 12,  88 => 6,  70 => 5,  55 => 14,  52 => 13,  50 => 12,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
    </body>
</html>
", "base.html.twig", "/home/karim/Desktop/sandbox/hacker-news/app/Resources/views/base.html.twig");
    }
}
