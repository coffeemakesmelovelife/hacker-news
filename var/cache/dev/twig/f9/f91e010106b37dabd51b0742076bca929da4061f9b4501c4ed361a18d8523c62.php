<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_1394694270f69217e999abbe3d967e23888a4966182d813d7d12885a57830c59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87f0e0aae73e09ef228abb648fb2e472f89ff00a1a4855179aad03799b49b51b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87f0e0aae73e09ef228abb648fb2e472f89ff00a1a4855179aad03799b49b51b->enter($__internal_87f0e0aae73e09ef228abb648fb2e472f89ff00a1a4855179aad03799b49b51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_121b7772f77565a19aaf3ecc392d28e151fb9cb5216fca8d9b9e71e47ad4e56f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_121b7772f77565a19aaf3ecc392d28e151fb9cb5216fca8d9b9e71e47ad4e56f->enter($__internal_121b7772f77565a19aaf3ecc392d28e151fb9cb5216fca8d9b9e71e47ad4e56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_87f0e0aae73e09ef228abb648fb2e472f89ff00a1a4855179aad03799b49b51b->leave($__internal_87f0e0aae73e09ef228abb648fb2e472f89ff00a1a4855179aad03799b49b51b_prof);

        
        $__internal_121b7772f77565a19aaf3ecc392d28e151fb9cb5216fca8d9b9e71e47ad4e56f->leave($__internal_121b7772f77565a19aaf3ecc392d28e151fb9cb5216fca8d9b9e71e47ad4e56f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2c41dc676c209e2ecc7bb605c3d0394e631512d0ce77d2ab31c5d3bec6b513e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2c41dc676c209e2ecc7bb605c3d0394e631512d0ce77d2ab31c5d3bec6b513e->enter($__internal_f2c41dc676c209e2ecc7bb605c3d0394e631512d0ce77d2ab31c5d3bec6b513e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5b7cb483f7bd7f3480e38025e54cb4777d8f22bac3d3a6479dc414bbe11fae4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b7cb483f7bd7f3480e38025e54cb4777d8f22bac3d3a6479dc414bbe11fae4c->enter($__internal_5b7cb483f7bd7f3480e38025e54cb4777d8f22bac3d3a6479dc414bbe11fae4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5b7cb483f7bd7f3480e38025e54cb4777d8f22bac3d3a6479dc414bbe11fae4c->leave($__internal_5b7cb483f7bd7f3480e38025e54cb4777d8f22bac3d3a6479dc414bbe11fae4c_prof);

        
        $__internal_f2c41dc676c209e2ecc7bb605c3d0394e631512d0ce77d2ab31c5d3bec6b513e->leave($__internal_f2c41dc676c209e2ecc7bb605c3d0394e631512d0ce77d2ab31c5d3bec6b513e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d1485ba248f5f0650b662364816505aed4771decdc66650547a7c1e40aabbe62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1485ba248f5f0650b662364816505aed4771decdc66650547a7c1e40aabbe62->enter($__internal_d1485ba248f5f0650b662364816505aed4771decdc66650547a7c1e40aabbe62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fdefc0dd0fb22076e48b568fc84134b3f6febe49cc87d6912dfff7ef16636d47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdefc0dd0fb22076e48b568fc84134b3f6febe49cc87d6912dfff7ef16636d47->enter($__internal_fdefc0dd0fb22076e48b568fc84134b3f6febe49cc87d6912dfff7ef16636d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_fdefc0dd0fb22076e48b568fc84134b3f6febe49cc87d6912dfff7ef16636d47->leave($__internal_fdefc0dd0fb22076e48b568fc84134b3f6febe49cc87d6912dfff7ef16636d47_prof);

        
        $__internal_d1485ba248f5f0650b662364816505aed4771decdc66650547a7c1e40aabbe62->leave($__internal_d1485ba248f5f0650b662364816505aed4771decdc66650547a7c1e40aabbe62_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_13a6325b5b91ba63e96249cc93bf5daf50255aa40f1c0ce4decab2ab6556f5a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13a6325b5b91ba63e96249cc93bf5daf50255aa40f1c0ce4decab2ab6556f5a3->enter($__internal_13a6325b5b91ba63e96249cc93bf5daf50255aa40f1c0ce4decab2ab6556f5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d06b97376941e9fc30cfdb3de767ca7cb5de27f74f187369f25e201e011421f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d06b97376941e9fc30cfdb3de767ca7cb5de27f74f187369f25e201e011421f->enter($__internal_3d06b97376941e9fc30cfdb3de767ca7cb5de27f74f187369f25e201e011421f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3d06b97376941e9fc30cfdb3de767ca7cb5de27f74f187369f25e201e011421f->leave($__internal_3d06b97376941e9fc30cfdb3de767ca7cb5de27f74f187369f25e201e011421f_prof);

        
        $__internal_13a6325b5b91ba63e96249cc93bf5daf50255aa40f1c0ce4decab2ab6556f5a3->leave($__internal_13a6325b5b91ba63e96249cc93bf5daf50255aa40f1c0ce4decab2ab6556f5a3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/karim/Desktop/sandbox/symfony-standard-2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
