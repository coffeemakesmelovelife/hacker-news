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
        $__internal_17d39464b116605a494bd5f271d0d322230f579b71722934d8c5ce8cf25df288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d39464b116605a494bd5f271d0d322230f579b71722934d8c5ce8cf25df288->enter($__internal_17d39464b116605a494bd5f271d0d322230f579b71722934d8c5ce8cf25df288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_032a9e1429b83c6dd566f6897f8f4099a2768bde3e1fc977d5b7f69169cb08a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_032a9e1429b83c6dd566f6897f8f4099a2768bde3e1fc977d5b7f69169cb08a3->enter($__internal_032a9e1429b83c6dd566f6897f8f4099a2768bde3e1fc977d5b7f69169cb08a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_17d39464b116605a494bd5f271d0d322230f579b71722934d8c5ce8cf25df288->leave($__internal_17d39464b116605a494bd5f271d0d322230f579b71722934d8c5ce8cf25df288_prof);

        
        $__internal_032a9e1429b83c6dd566f6897f8f4099a2768bde3e1fc977d5b7f69169cb08a3->leave($__internal_032a9e1429b83c6dd566f6897f8f4099a2768bde3e1fc977d5b7f69169cb08a3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2184f7093e3f6b9d20f6069d60d5315cb395fc72fdbd3859f150fdf726e89aa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2184f7093e3f6b9d20f6069d60d5315cb395fc72fdbd3859f150fdf726e89aa8->enter($__internal_2184f7093e3f6b9d20f6069d60d5315cb395fc72fdbd3859f150fdf726e89aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9abe058fcef04ea0e9ffd8a3399632efe4231d12fe18c31886d3de9bedd5ae6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9abe058fcef04ea0e9ffd8a3399632efe4231d12fe18c31886d3de9bedd5ae6c->enter($__internal_9abe058fcef04ea0e9ffd8a3399632efe4231d12fe18c31886d3de9bedd5ae6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9abe058fcef04ea0e9ffd8a3399632efe4231d12fe18c31886d3de9bedd5ae6c->leave($__internal_9abe058fcef04ea0e9ffd8a3399632efe4231d12fe18c31886d3de9bedd5ae6c_prof);

        
        $__internal_2184f7093e3f6b9d20f6069d60d5315cb395fc72fdbd3859f150fdf726e89aa8->leave($__internal_2184f7093e3f6b9d20f6069d60d5315cb395fc72fdbd3859f150fdf726e89aa8_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_02c3f3487f392016c8af09a2c3c9f80a2a0dd828a116c5228ea77cc1616299a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02c3f3487f392016c8af09a2c3c9f80a2a0dd828a116c5228ea77cc1616299a8->enter($__internal_02c3f3487f392016c8af09a2c3c9f80a2a0dd828a116c5228ea77cc1616299a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_467e8f748bf8e40d462f3aa9dadd705ac55df89d4de95a68534c05792384f85e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_467e8f748bf8e40d462f3aa9dadd705ac55df89d4de95a68534c05792384f85e->enter($__internal_467e8f748bf8e40d462f3aa9dadd705ac55df89d4de95a68534c05792384f85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_467e8f748bf8e40d462f3aa9dadd705ac55df89d4de95a68534c05792384f85e->leave($__internal_467e8f748bf8e40d462f3aa9dadd705ac55df89d4de95a68534c05792384f85e_prof);

        
        $__internal_02c3f3487f392016c8af09a2c3c9f80a2a0dd828a116c5228ea77cc1616299a8->leave($__internal_02c3f3487f392016c8af09a2c3c9f80a2a0dd828a116c5228ea77cc1616299a8_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_306508854f4f489bdd21bd6a652e9a26124e457e0715948da633bc7c6d553f92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_306508854f4f489bdd21bd6a652e9a26124e457e0715948da633bc7c6d553f92->enter($__internal_306508854f4f489bdd21bd6a652e9a26124e457e0715948da633bc7c6d553f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7129f70b88d10cbf1b1a130e471a5b01fdf14722e260c4be2f47291aa592acbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7129f70b88d10cbf1b1a130e471a5b01fdf14722e260c4be2f47291aa592acbd->enter($__internal_7129f70b88d10cbf1b1a130e471a5b01fdf14722e260c4be2f47291aa592acbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7129f70b88d10cbf1b1a130e471a5b01fdf14722e260c4be2f47291aa592acbd->leave($__internal_7129f70b88d10cbf1b1a130e471a5b01fdf14722e260c4be2f47291aa592acbd_prof);

        
        $__internal_306508854f4f489bdd21bd6a652e9a26124e457e0715948da633bc7c6d553f92->leave($__internal_306508854f4f489bdd21bd6a652e9a26124e457e0715948da633bc7c6d553f92_prof);

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
", "@Twig/layout.html.twig", "/home/karim/Desktop/sandbox/hacker-news/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
