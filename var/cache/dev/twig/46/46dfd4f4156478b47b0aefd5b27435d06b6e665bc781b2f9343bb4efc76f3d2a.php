<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
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
        $__internal_bbc4d5fcf07b4b249bd941463efc69d071a887f8442275b43d3bcbe966dcb6ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbc4d5fcf07b4b249bd941463efc69d071a887f8442275b43d3bcbe966dcb6ac->enter($__internal_bbc4d5fcf07b4b249bd941463efc69d071a887f8442275b43d3bcbe966dcb6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_0c7e243bba249c86236fb565e65324877e80d380e4bbf3ca87d08ea75649d865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c7e243bba249c86236fb565e65324877e80d380e4bbf3ca87d08ea75649d865->enter($__internal_0c7e243bba249c86236fb565e65324877e80d380e4bbf3ca87d08ea75649d865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_bbc4d5fcf07b4b249bd941463efc69d071a887f8442275b43d3bcbe966dcb6ac->leave($__internal_bbc4d5fcf07b4b249bd941463efc69d071a887f8442275b43d3bcbe966dcb6ac_prof);

        
        $__internal_0c7e243bba249c86236fb565e65324877e80d380e4bbf3ca87d08ea75649d865->leave($__internal_0c7e243bba249c86236fb565e65324877e80d380e4bbf3ca87d08ea75649d865_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e41bc75c97d79b2ad28829f6b9f27bb0c7babcf3be6942b4df31cfd98df8eafb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e41bc75c97d79b2ad28829f6b9f27bb0c7babcf3be6942b4df31cfd98df8eafb->enter($__internal_e41bc75c97d79b2ad28829f6b9f27bb0c7babcf3be6942b4df31cfd98df8eafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4819f5125e66de88eee49acf341a56910598f4cfa31f6d34b0a173a6897612cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4819f5125e66de88eee49acf341a56910598f4cfa31f6d34b0a173a6897612cb->enter($__internal_4819f5125e66de88eee49acf341a56910598f4cfa31f6d34b0a173a6897612cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4819f5125e66de88eee49acf341a56910598f4cfa31f6d34b0a173a6897612cb->leave($__internal_4819f5125e66de88eee49acf341a56910598f4cfa31f6d34b0a173a6897612cb_prof);

        
        $__internal_e41bc75c97d79b2ad28829f6b9f27bb0c7babcf3be6942b4df31cfd98df8eafb->leave($__internal_e41bc75c97d79b2ad28829f6b9f27bb0c7babcf3be6942b4df31cfd98df8eafb_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f31b17efda3b253a57e67f84823b6275c5ce3c6c320589c826780d55ffa8b9d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f31b17efda3b253a57e67f84823b6275c5ce3c6c320589c826780d55ffa8b9d8->enter($__internal_f31b17efda3b253a57e67f84823b6275c5ce3c6c320589c826780d55ffa8b9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2f6d6fa594d317b846a0061dbeda4bd37aacce1c16e2656293f059126935de89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f6d6fa594d317b846a0061dbeda4bd37aacce1c16e2656293f059126935de89->enter($__internal_2f6d6fa594d317b846a0061dbeda4bd37aacce1c16e2656293f059126935de89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2f6d6fa594d317b846a0061dbeda4bd37aacce1c16e2656293f059126935de89->leave($__internal_2f6d6fa594d317b846a0061dbeda4bd37aacce1c16e2656293f059126935de89_prof);

        
        $__internal_f31b17efda3b253a57e67f84823b6275c5ce3c6c320589c826780d55ffa8b9d8->leave($__internal_f31b17efda3b253a57e67f84823b6275c5ce3c6c320589c826780d55ffa8b9d8_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_bed50f4b4f7a75492a1d33e0b748bcc3db6bc0a0b8ef882cc82909f06cff2565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bed50f4b4f7a75492a1d33e0b748bcc3db6bc0a0b8ef882cc82909f06cff2565->enter($__internal_bed50f4b4f7a75492a1d33e0b748bcc3db6bc0a0b8ef882cc82909f06cff2565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a8e0b768e7a070840fcd817942871dbf885815807c541871e999fefc4a114a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8e0b768e7a070840fcd817942871dbf885815807c541871e999fefc4a114a68->enter($__internal_a8e0b768e7a070840fcd817942871dbf885815807c541871e999fefc4a114a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a8e0b768e7a070840fcd817942871dbf885815807c541871e999fefc4a114a68->leave($__internal_a8e0b768e7a070840fcd817942871dbf885815807c541871e999fefc4a114a68_prof);

        
        $__internal_bed50f4b4f7a75492a1d33e0b748bcc3db6bc0a0b8ef882cc82909f06cff2565->leave($__internal_bed50f4b4f7a75492a1d33e0b748bcc3db6bc0a0b8ef882cc82909f06cff2565_prof);

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
