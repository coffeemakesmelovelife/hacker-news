<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_84677b60e386e68653aa7d0f75627d6988faef422bc600437f0035154d74d548 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78e0ab2dc92ddeb5ca910d23e5f68983d4e7e4c7ab4f5ce43e68eaa1a9f21ad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78e0ab2dc92ddeb5ca910d23e5f68983d4e7e4c7ab4f5ce43e68eaa1a9f21ad9->enter($__internal_78e0ab2dc92ddeb5ca910d23e5f68983d4e7e4c7ab4f5ce43e68eaa1a9f21ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_05b4e5c6d3f9835021918e19b5ee6c65a3b24ae1e2fbe1b153df318b706117ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b4e5c6d3f9835021918e19b5ee6c65a3b24ae1e2fbe1b153df318b706117ed->enter($__internal_05b4e5c6d3f9835021918e19b5ee6c65a3b24ae1e2fbe1b153df318b706117ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78e0ab2dc92ddeb5ca910d23e5f68983d4e7e4c7ab4f5ce43e68eaa1a9f21ad9->leave($__internal_78e0ab2dc92ddeb5ca910d23e5f68983d4e7e4c7ab4f5ce43e68eaa1a9f21ad9_prof);

        
        $__internal_05b4e5c6d3f9835021918e19b5ee6c65a3b24ae1e2fbe1b153df318b706117ed->leave($__internal_05b4e5c6d3f9835021918e19b5ee6c65a3b24ae1e2fbe1b153df318b706117ed_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f3eaa5500b4ad732f1bfef192a5d501285c61e0271b5d98e1ef74ff4f2d50537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3eaa5500b4ad732f1bfef192a5d501285c61e0271b5d98e1ef74ff4f2d50537->enter($__internal_f3eaa5500b4ad732f1bfef192a5d501285c61e0271b5d98e1ef74ff4f2d50537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_862143e8343fc962506646163625bb27d5f07702cc3f4f8c8562caf80668d27c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_862143e8343fc962506646163625bb27d5f07702cc3f4f8c8562caf80668d27c->enter($__internal_862143e8343fc962506646163625bb27d5f07702cc3f4f8c8562caf80668d27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_862143e8343fc962506646163625bb27d5f07702cc3f4f8c8562caf80668d27c->leave($__internal_862143e8343fc962506646163625bb27d5f07702cc3f4f8c8562caf80668d27c_prof);

        
        $__internal_f3eaa5500b4ad732f1bfef192a5d501285c61e0271b5d98e1ef74ff4f2d50537->leave($__internal_f3eaa5500b4ad732f1bfef192a5d501285c61e0271b5d98e1ef74ff4f2d50537_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/karim/Desktop/sandbox/symfony-standard-2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
