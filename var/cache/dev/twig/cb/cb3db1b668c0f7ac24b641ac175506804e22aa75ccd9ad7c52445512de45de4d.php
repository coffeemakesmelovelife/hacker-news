<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_e8c071f1682104620807a67d486deac8e7e6b927c134b98e6c26f22ff8f58af1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dad03eee9bf8b264ef238905a4b9a7f41fbce7582a77a4fb51cc521569334071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dad03eee9bf8b264ef238905a4b9a7f41fbce7582a77a4fb51cc521569334071->enter($__internal_dad03eee9bf8b264ef238905a4b9a7f41fbce7582a77a4fb51cc521569334071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_2cdb1f7dfd96ebd5ab3ae59f5368673e010a62d72b0f78922a32a8de8164be9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cdb1f7dfd96ebd5ab3ae59f5368673e010a62d72b0f78922a32a8de8164be9b->enter($__internal_2cdb1f7dfd96ebd5ab3ae59f5368673e010a62d72b0f78922a32a8de8164be9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_dad03eee9bf8b264ef238905a4b9a7f41fbce7582a77a4fb51cc521569334071->leave($__internal_dad03eee9bf8b264ef238905a4b9a7f41fbce7582a77a4fb51cc521569334071_prof);

        
        $__internal_2cdb1f7dfd96ebd5ab3ae59f5368673e010a62d72b0f78922a32a8de8164be9b->leave($__internal_2cdb1f7dfd96ebd5ab3ae59f5368673e010a62d72b0f78922a32a8de8164be9b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2e8b6b137eb9c077806f84c4932fd232ba764ae5d432fe525be3a4241fd6d180 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e8b6b137eb9c077806f84c4932fd232ba764ae5d432fe525be3a4241fd6d180->enter($__internal_2e8b6b137eb9c077806f84c4932fd232ba764ae5d432fe525be3a4241fd6d180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0d048a8f5ad14770b0d4228a8949d3ebf8af1b775fe1394f04e7dd56e1b6d1c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d048a8f5ad14770b0d4228a8949d3ebf8af1b775fe1394f04e7dd56e1b6d1c9->enter($__internal_0d048a8f5ad14770b0d4228a8949d3ebf8af1b775fe1394f04e7dd56e1b6d1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0d048a8f5ad14770b0d4228a8949d3ebf8af1b775fe1394f04e7dd56e1b6d1c9->leave($__internal_0d048a8f5ad14770b0d4228a8949d3ebf8af1b775fe1394f04e7dd56e1b6d1c9_prof);

        
        $__internal_2e8b6b137eb9c077806f84c4932fd232ba764ae5d432fe525be3a4241fd6d180->leave($__internal_2e8b6b137eb9c077806f84c4932fd232ba764ae5d432fe525be3a4241fd6d180_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/home/karim/Desktop/sandbox/hacker-news/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
