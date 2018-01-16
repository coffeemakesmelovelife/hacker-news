<?php

/* base.html.twig */
class __TwigTemplate_aa4299a6f123a68b7461265a2c1f770e816ead7c186020a41fc65cf9924a65f6 extends Twig_Template
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
        $__internal_52217806f0217ef9a095a05423443964361737eff8fae2fb266110b99dbcbbb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52217806f0217ef9a095a05423443964361737eff8fae2fb266110b99dbcbbb7->enter($__internal_52217806f0217ef9a095a05423443964361737eff8fae2fb266110b99dbcbbb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_326905ebbe3ee604a307c5ebdc1f74d62b7c4051ce3ba05b726c20a80c712c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_326905ebbe3ee604a307c5ebdc1f74d62b7c4051ce3ba05b726c20a80c712c6f->enter($__internal_326905ebbe3ee604a307c5ebdc1f74d62b7c4051ce3ba05b726c20a80c712c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_52217806f0217ef9a095a05423443964361737eff8fae2fb266110b99dbcbbb7->leave($__internal_52217806f0217ef9a095a05423443964361737eff8fae2fb266110b99dbcbbb7_prof);

        
        $__internal_326905ebbe3ee604a307c5ebdc1f74d62b7c4051ce3ba05b726c20a80c712c6f->leave($__internal_326905ebbe3ee604a307c5ebdc1f74d62b7c4051ce3ba05b726c20a80c712c6f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0be3619ce4204a0a19911091844bf1762504589313d044d7873136577f1bb384 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0be3619ce4204a0a19911091844bf1762504589313d044d7873136577f1bb384->enter($__internal_0be3619ce4204a0a19911091844bf1762504589313d044d7873136577f1bb384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4a71a7383a96bce3f35726e274b1a07a5df9a79719a749b55e44c9438c37e02c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a71a7383a96bce3f35726e274b1a07a5df9a79719a749b55e44c9438c37e02c->enter($__internal_4a71a7383a96bce3f35726e274b1a07a5df9a79719a749b55e44c9438c37e02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4a71a7383a96bce3f35726e274b1a07a5df9a79719a749b55e44c9438c37e02c->leave($__internal_4a71a7383a96bce3f35726e274b1a07a5df9a79719a749b55e44c9438c37e02c_prof);

        
        $__internal_0be3619ce4204a0a19911091844bf1762504589313d044d7873136577f1bb384->leave($__internal_0be3619ce4204a0a19911091844bf1762504589313d044d7873136577f1bb384_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_522feae552a1717a225f2027d0595df84c565b25ce97bf095a18d1078437efff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_522feae552a1717a225f2027d0595df84c565b25ce97bf095a18d1078437efff->enter($__internal_522feae552a1717a225f2027d0595df84c565b25ce97bf095a18d1078437efff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f688d0e181233041b5956fa1e395b664b07735f2fad9df3ecb51bd4dea8bef2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f688d0e181233041b5956fa1e395b664b07735f2fad9df3ecb51bd4dea8bef2d->enter($__internal_f688d0e181233041b5956fa1e395b664b07735f2fad9df3ecb51bd4dea8bef2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f688d0e181233041b5956fa1e395b664b07735f2fad9df3ecb51bd4dea8bef2d->leave($__internal_f688d0e181233041b5956fa1e395b664b07735f2fad9df3ecb51bd4dea8bef2d_prof);

        
        $__internal_522feae552a1717a225f2027d0595df84c565b25ce97bf095a18d1078437efff->leave($__internal_522feae552a1717a225f2027d0595df84c565b25ce97bf095a18d1078437efff_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_674833a9d48e926d360e0219834ed17504de7fb6590e7c6d8ca75d0a06666a66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_674833a9d48e926d360e0219834ed17504de7fb6590e7c6d8ca75d0a06666a66->enter($__internal_674833a9d48e926d360e0219834ed17504de7fb6590e7c6d8ca75d0a06666a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_31ede8ee10a54a2b8533895977a1e790e45c85a72b68a32df8ac07f79202721a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ede8ee10a54a2b8533895977a1e790e45c85a72b68a32df8ac07f79202721a->enter($__internal_31ede8ee10a54a2b8533895977a1e790e45c85a72b68a32df8ac07f79202721a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_31ede8ee10a54a2b8533895977a1e790e45c85a72b68a32df8ac07f79202721a->leave($__internal_31ede8ee10a54a2b8533895977a1e790e45c85a72b68a32df8ac07f79202721a_prof);

        
        $__internal_674833a9d48e926d360e0219834ed17504de7fb6590e7c6d8ca75d0a06666a66->leave($__internal_674833a9d48e926d360e0219834ed17504de7fb6590e7c6d8ca75d0a06666a66_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ad75d869a17bcc83321b3fb661dd60ec8fe241a928090ef2cce2c1347377c92c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad75d869a17bcc83321b3fb661dd60ec8fe241a928090ef2cce2c1347377c92c->enter($__internal_ad75d869a17bcc83321b3fb661dd60ec8fe241a928090ef2cce2c1347377c92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d0abca554ac9f3e4e79ff6f3e8a9e49425aa51afc503d6a49ba47a155594145e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0abca554ac9f3e4e79ff6f3e8a9e49425aa51afc503d6a49ba47a155594145e->enter($__internal_d0abca554ac9f3e4e79ff6f3e8a9e49425aa51afc503d6a49ba47a155594145e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d0abca554ac9f3e4e79ff6f3e8a9e49425aa51afc503d6a49ba47a155594145e->leave($__internal_d0abca554ac9f3e4e79ff6f3e8a9e49425aa51afc503d6a49ba47a155594145e_prof);

        
        $__internal_ad75d869a17bcc83321b3fb661dd60ec8fe241a928090ef2cce2c1347377c92c->leave($__internal_ad75d869a17bcc83321b3fb661dd60ec8fe241a928090ef2cce2c1347377c92c_prof);

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
