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
        $__internal_94b31fb2259fd5d74265519f1ab061114babe56f77eb8c7e3f00194a5ce5708d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94b31fb2259fd5d74265519f1ab061114babe56f77eb8c7e3f00194a5ce5708d->enter($__internal_94b31fb2259fd5d74265519f1ab061114babe56f77eb8c7e3f00194a5ce5708d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_19bc6aad0a40bdb12c08be343f2bff1c4116593169627adc7ff0d29069b72d01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19bc6aad0a40bdb12c08be343f2bff1c4116593169627adc7ff0d29069b72d01->enter($__internal_19bc6aad0a40bdb12c08be343f2bff1c4116593169627adc7ff0d29069b72d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
    </body>
</html>
";
        
        $__internal_94b31fb2259fd5d74265519f1ab061114babe56f77eb8c7e3f00194a5ce5708d->leave($__internal_94b31fb2259fd5d74265519f1ab061114babe56f77eb8c7e3f00194a5ce5708d_prof);

        
        $__internal_19bc6aad0a40bdb12c08be343f2bff1c4116593169627adc7ff0d29069b72d01->leave($__internal_19bc6aad0a40bdb12c08be343f2bff1c4116593169627adc7ff0d29069b72d01_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b74850567963290f7290db07d7f712269bf957e36bc6716291e16ee9d5c13f8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b74850567963290f7290db07d7f712269bf957e36bc6716291e16ee9d5c13f8a->enter($__internal_b74850567963290f7290db07d7f712269bf957e36bc6716291e16ee9d5c13f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_257f9e6dec52cd77370ec83f825a66a72c1b35b7aa1e45745ee9c8b9d9249ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257f9e6dec52cd77370ec83f825a66a72c1b35b7aa1e45745ee9c8b9d9249ad0->enter($__internal_257f9e6dec52cd77370ec83f825a66a72c1b35b7aa1e45745ee9c8b9d9249ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_257f9e6dec52cd77370ec83f825a66a72c1b35b7aa1e45745ee9c8b9d9249ad0->leave($__internal_257f9e6dec52cd77370ec83f825a66a72c1b35b7aa1e45745ee9c8b9d9249ad0_prof);

        
        $__internal_b74850567963290f7290db07d7f712269bf957e36bc6716291e16ee9d5c13f8a->leave($__internal_b74850567963290f7290db07d7f712269bf957e36bc6716291e16ee9d5c13f8a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f7fa219c31e3124fe5b28897a0765825a5fb81e3dec33c5608f2ebc75bae5490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7fa219c31e3124fe5b28897a0765825a5fb81e3dec33c5608f2ebc75bae5490->enter($__internal_f7fa219c31e3124fe5b28897a0765825a5fb81e3dec33c5608f2ebc75bae5490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d4a087d3d5b0fc7e6f896a01a7aca5a230cda06f6984554872b3b1ef0556759e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4a087d3d5b0fc7e6f896a01a7aca5a230cda06f6984554872b3b1ef0556759e->enter($__internal_d4a087d3d5b0fc7e6f896a01a7aca5a230cda06f6984554872b3b1ef0556759e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d4a087d3d5b0fc7e6f896a01a7aca5a230cda06f6984554872b3b1ef0556759e->leave($__internal_d4a087d3d5b0fc7e6f896a01a7aca5a230cda06f6984554872b3b1ef0556759e_prof);

        
        $__internal_f7fa219c31e3124fe5b28897a0765825a5fb81e3dec33c5608f2ebc75bae5490->leave($__internal_f7fa219c31e3124fe5b28897a0765825a5fb81e3dec33c5608f2ebc75bae5490_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_df0a7502a1b3d0149ee3a2c6008f35ea071969385cc983793164645871f26335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df0a7502a1b3d0149ee3a2c6008f35ea071969385cc983793164645871f26335->enter($__internal_df0a7502a1b3d0149ee3a2c6008f35ea071969385cc983793164645871f26335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f7667c412ddf9b5aeb1fc93e05f4f761db04cc72c5be5ce54afbedd0316dba12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7667c412ddf9b5aeb1fc93e05f4f761db04cc72c5be5ce54afbedd0316dba12->enter($__internal_f7667c412ddf9b5aeb1fc93e05f4f761db04cc72c5be5ce54afbedd0316dba12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f7667c412ddf9b5aeb1fc93e05f4f761db04cc72c5be5ce54afbedd0316dba12->leave($__internal_f7667c412ddf9b5aeb1fc93e05f4f761db04cc72c5be5ce54afbedd0316dba12_prof);

        
        $__internal_df0a7502a1b3d0149ee3a2c6008f35ea071969385cc983793164645871f26335->leave($__internal_df0a7502a1b3d0149ee3a2c6008f35ea071969385cc983793164645871f26335_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8fb1719a8f3da7cf19aab57d50f0649c519698799e05f4403ba682d6508dfd8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fb1719a8f3da7cf19aab57d50f0649c519698799e05f4403ba682d6508dfd8d->enter($__internal_8fb1719a8f3da7cf19aab57d50f0649c519698799e05f4403ba682d6508dfd8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e8c3404b1e6e2585916cb24165ac0e7dcf7283be4777ac48a07f89072a9f90be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8c3404b1e6e2585916cb24165ac0e7dcf7283be4777ac48a07f89072a9f90be->enter($__internal_e8c3404b1e6e2585916cb24165ac0e7dcf7283be4777ac48a07f89072a9f90be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e8c3404b1e6e2585916cb24165ac0e7dcf7283be4777ac48a07f89072a9f90be->leave($__internal_e8c3404b1e6e2585916cb24165ac0e7dcf7283be4777ac48a07f89072a9f90be_prof);

        
        $__internal_8fb1719a8f3da7cf19aab57d50f0649c519698799e05f4403ba682d6508dfd8d->leave($__internal_8fb1719a8f3da7cf19aab57d50f0649c519698799e05f4403ba682d6508dfd8d_prof);

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
        return array (  133 => 22,  116 => 21,  99 => 6,  81 => 5,  66 => 23,  63 => 22,  60 => 21,  58 => 20,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
    </body>
</html>
", "base.html.twig", "/home/karim/Desktop/sandbox/hacker-news/app/Resources/views/base.html.twig");
    }
}
