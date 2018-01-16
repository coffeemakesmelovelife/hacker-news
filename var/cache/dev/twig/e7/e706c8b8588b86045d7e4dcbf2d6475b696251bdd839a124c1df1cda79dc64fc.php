<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_24c89141ead3c08faba432a1193d6d4d02f8b1f13289d31c4693a8a8eddc19ab extends Twig_Template
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
        $__internal_fbb76a5a322d3b1c019cb6857cf57b1ce855871c6858b99f47c1acf7e0de485f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbb76a5a322d3b1c019cb6857cf57b1ce855871c6858b99f47c1acf7e0de485f->enter($__internal_fbb76a5a322d3b1c019cb6857cf57b1ce855871c6858b99f47c1acf7e0de485f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b1c88a164149d43e481f039f1368f79ef5e547d86f51580e330c4ed749236779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c88a164149d43e481f039f1368f79ef5e547d86f51580e330c4ed749236779->enter($__internal_b1c88a164149d43e481f039f1368f79ef5e547d86f51580e330c4ed749236779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_fbb76a5a322d3b1c019cb6857cf57b1ce855871c6858b99f47c1acf7e0de485f->leave($__internal_fbb76a5a322d3b1c019cb6857cf57b1ce855871c6858b99f47c1acf7e0de485f_prof);

        
        $__internal_b1c88a164149d43e481f039f1368f79ef5e547d86f51580e330c4ed749236779->leave($__internal_b1c88a164149d43e481f039f1368f79ef5e547d86f51580e330c4ed749236779_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_44b39e1cb131148c5531d2cbfdfb845be52fb852283bbaf2fdf5e7752483d25c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44b39e1cb131148c5531d2cbfdfb845be52fb852283bbaf2fdf5e7752483d25c->enter($__internal_44b39e1cb131148c5531d2cbfdfb845be52fb852283bbaf2fdf5e7752483d25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c176c0921f0582cbe5d8045c7f79e062a9c934cd9778dccd36f9744f1adf62e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c176c0921f0582cbe5d8045c7f79e062a9c934cd9778dccd36f9744f1adf62e6->enter($__internal_c176c0921f0582cbe5d8045c7f79e062a9c934cd9778dccd36f9744f1adf62e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c176c0921f0582cbe5d8045c7f79e062a9c934cd9778dccd36f9744f1adf62e6->leave($__internal_c176c0921f0582cbe5d8045c7f79e062a9c934cd9778dccd36f9744f1adf62e6_prof);

        
        $__internal_44b39e1cb131148c5531d2cbfdfb845be52fb852283bbaf2fdf5e7752483d25c->leave($__internal_44b39e1cb131148c5531d2cbfdfb845be52fb852283bbaf2fdf5e7752483d25c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_24a8cd0a62c3cea84569e5c7fe7bfecd088dfa21a04def5000359f30e1b1ee59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a8cd0a62c3cea84569e5c7fe7bfecd088dfa21a04def5000359f30e1b1ee59->enter($__internal_24a8cd0a62c3cea84569e5c7fe7bfecd088dfa21a04def5000359f30e1b1ee59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0a7e93c5eee75c8fe6177db70dd0ff2081ac7d08b29843350072f3b68520b618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a7e93c5eee75c8fe6177db70dd0ff2081ac7d08b29843350072f3b68520b618->enter($__internal_0a7e93c5eee75c8fe6177db70dd0ff2081ac7d08b29843350072f3b68520b618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_0a7e93c5eee75c8fe6177db70dd0ff2081ac7d08b29843350072f3b68520b618->leave($__internal_0a7e93c5eee75c8fe6177db70dd0ff2081ac7d08b29843350072f3b68520b618_prof);

        
        $__internal_24a8cd0a62c3cea84569e5c7fe7bfecd088dfa21a04def5000359f30e1b1ee59->leave($__internal_24a8cd0a62c3cea84569e5c7fe7bfecd088dfa21a04def5000359f30e1b1ee59_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb338ee1b80f6253030302eb82ffdcd424de47d23e8e2583da16993c1bde891a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb338ee1b80f6253030302eb82ffdcd424de47d23e8e2583da16993c1bde891a->enter($__internal_bb338ee1b80f6253030302eb82ffdcd424de47d23e8e2583da16993c1bde891a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7988dc4baf89a9035744ec78d6e89ed6ed5ac6101435b5fbc98d5544a7f6ff5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7988dc4baf89a9035744ec78d6e89ed6ed5ac6101435b5fbc98d5544a7f6ff5b->enter($__internal_7988dc4baf89a9035744ec78d6e89ed6ed5ac6101435b5fbc98d5544a7f6ff5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7988dc4baf89a9035744ec78d6e89ed6ed5ac6101435b5fbc98d5544a7f6ff5b->leave($__internal_7988dc4baf89a9035744ec78d6e89ed6ed5ac6101435b5fbc98d5544a7f6ff5b_prof);

        
        $__internal_bb338ee1b80f6253030302eb82ffdcd424de47d23e8e2583da16993c1bde891a->leave($__internal_bb338ee1b80f6253030302eb82ffdcd424de47d23e8e2583da16993c1bde891a_prof);

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
