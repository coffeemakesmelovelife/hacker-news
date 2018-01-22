<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_2d7740086f999ab22713fefc3970451ee9585ed51d21857cf6b8191582ec80d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_712ffbb90db86cce9f954e0157a475aec29f82cb21c9ff3b437d5198a57d35c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_712ffbb90db86cce9f954e0157a475aec29f82cb21c9ff3b437d5198a57d35c5->enter($__internal_712ffbb90db86cce9f954e0157a475aec29f82cb21c9ff3b437d5198a57d35c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_12fc270f03a7610ec478069581ccc18a87c2422fbada1fee4e26b430a2d5c1f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12fc270f03a7610ec478069581ccc18a87c2422fbada1fee4e26b430a2d5c1f3->enter($__internal_12fc270f03a7610ec478069581ccc18a87c2422fbada1fee4e26b430a2d5c1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_712ffbb90db86cce9f954e0157a475aec29f82cb21c9ff3b437d5198a57d35c5->leave($__internal_712ffbb90db86cce9f954e0157a475aec29f82cb21c9ff3b437d5198a57d35c5_prof);

        
        $__internal_12fc270f03a7610ec478069581ccc18a87c2422fbada1fee4e26b430a2d5c1f3->leave($__internal_12fc270f03a7610ec478069581ccc18a87c2422fbada1fee4e26b430a2d5c1f3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/karim/Desktop/sandbox/hacker-news/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
