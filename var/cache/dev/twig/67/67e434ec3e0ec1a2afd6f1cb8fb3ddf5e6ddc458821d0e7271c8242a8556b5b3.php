<?php

/* @Httplug/webprofiler.html.twig */
class __TwigTemplate_4cc06cdc9c9a817276f62d98abdccaeaec6441838d33907c3f29d942b434adce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Httplug/webprofiler.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84bf5d1049d01b3bfb9484698f58f07532356d4ee8c121568878cdd1813e7c90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84bf5d1049d01b3bfb9484698f58f07532356d4ee8c121568878cdd1813e7c90->enter($__internal_84bf5d1049d01b3bfb9484698f58f07532356d4ee8c121568878cdd1813e7c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Httplug/webprofiler.html.twig"));

        $__internal_541653b65570052f59a7f54ac0e722779b951a225f603c6eee721c8880b34e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_541653b65570052f59a7f54ac0e722779b951a225f603c6eee721c8880b34e00->enter($__internal_541653b65570052f59a7f54ac0e722779b951a225f603c6eee721c8880b34e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Httplug/webprofiler.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84bf5d1049d01b3bfb9484698f58f07532356d4ee8c121568878cdd1813e7c90->leave($__internal_84bf5d1049d01b3bfb9484698f58f07532356d4ee8c121568878cdd1813e7c90_prof);

        
        $__internal_541653b65570052f59a7f54ac0e722779b951a225f603c6eee721c8880b34e00->leave($__internal_541653b65570052f59a7f54ac0e722779b951a225f603c6eee721c8880b34e00_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_488285bec9fb470fe49e64884d9e5a8c7ca2d508f17bc7c73a90223e82da9675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_488285bec9fb470fe49e64884d9e5a8c7ca2d508f17bc7c73a90223e82da9675->enter($__internal_488285bec9fb470fe49e64884d9e5a8c7ca2d508f17bc7c73a90223e82da9675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4745cc4b723c0b3da6803251b4e15f940504585f4f68d9b3e0f27abca6a69ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4745cc4b723c0b3da6803251b4e15f940504585f4f68d9b3e0f27abca6a69ff8->enter($__internal_4745cc4b723c0b3da6803251b4e15f940504585f4f68d9b3e0f27abca6a69ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stacks", array())) > 0)) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            ";
            echo twig_include($this->env, $context, "@Httplug/Icon/httplug.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stacks", array())), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-label\">in</span>
            <span class=\"sf-toolbar-value\">";
            // line 9
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totalDuration", array())), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-label\">ms</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 12
            echo "
        ";
            // line 13
            ob_start();
            // line 14
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>";
            // line 15
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stacks", array())), "html", null, true);
            echo " requests</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <table class=\"sf-toolbar-ajax-requests\">
                    <thead>
                    <tr>
                        <th>Client</th>
                        <th>Method</th>
                        <th>Target</th>
                        <th>Time</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody class=\"sf-toolbar-ajax-request-list\">
                        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stacks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["stack"]) {
                // line 30
                echo "                            <tr>
                                <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["stack"], "client", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["stack"], "requestMethod", array()), "html", null, true);
                echo "</td>
                                ";
                // line 33
                $context["target"] = $this->getAttribute($context["stack"], "requestTarget", array());
                // line 34
                echo "                                <td title=\"";
                echo twig_escape_filter($this->env, ($context["target"] ?? $this->getContext($context, "target")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, ($context["target"] ?? $this->getContext($context, "target"))) > 30)) ? ((twig_slice($this->env, ($context["target"] ?? $this->getContext($context, "target")), 0, 30) . "...")) : (($context["target"] ?? $this->getContext($context, "target")))), "html", null, true);
                echo "</td>
                                <td>";
                // line 35
                echo twig_escape_filter($this->env, ((($this->getAttribute($context["stack"], "duration", array()) == 0)) ? ("n/a") : ((twig_number_format_filter($this->env, $this->getAttribute($context["stack"], "duration", array())) . " ms"))), "html", null, true);
                echo "</td>
                                <td>";
                // line 36
                echo twig_escape_filter($this->env, (($this->getAttribute($context["stack"], "failed", array())) ? ("FAILED") : ((($this->getAttribute($context["stack"], "responseCode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["stack"], "responseCode", array()), "n/a")) : ("n/a")))), "html", null, true);
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stack'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                    </tbody>
                </table>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 43
            echo "
        ";
            // line 44
            $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@Httplug/webprofiler.html.twig", 44)->display(array_merge($context, array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "status" => ((twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "failedStacks", array()))) ? ("red") : ("")))));
            // line 45
            echo "    ";
        }
        
        $__internal_4745cc4b723c0b3da6803251b4e15f940504585f4f68d9b3e0f27abca6a69ff8->leave($__internal_4745cc4b723c0b3da6803251b4e15f940504585f4f68d9b3e0f27abca6a69ff8_prof);

        
        $__internal_488285bec9fb470fe49e64884d9e5a8c7ca2d508f17bc7c73a90223e82da9675->leave($__internal_488285bec9fb470fe49e64884d9e5a8c7ca2d508f17bc7c73a90223e82da9675_prof);

    }

    // line 48
    public function block_head($context, array $blocks = array())
    {
        $__internal_d2ea7e2675d5337289c2c87896abb01b9712b300f73ae50389e34016dacb15ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2ea7e2675d5337289c2c87896abb01b9712b300f73ae50389e34016dacb15ef->enter($__internal_d2ea7e2675d5337289c2c87896abb01b9712b300f73ae50389e34016dacb15ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8054774de921694dd887485e055fc13143d77882ddb65e01d5f25a03b62fe931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8054774de921694dd887485e055fc13143d77882ddb65e01d5f25a03b62fe931->enter($__internal_8054774de921694dd887485e055fc13143d77882ddb65e01d5f25a03b62fe931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 49
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/httplug/style/httplug.css"), "html", null, true);
        echo "\" />
    <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/httplug/script/httplug.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 51
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8054774de921694dd887485e055fc13143d77882ddb65e01d5f25a03b62fe931->leave($__internal_8054774de921694dd887485e055fc13143d77882ddb65e01d5f25a03b62fe931_prof);

        
        $__internal_d2ea7e2675d5337289c2c87896abb01b9712b300f73ae50389e34016dacb15ef->leave($__internal_d2ea7e2675d5337289c2c87896abb01b9712b300f73ae50389e34016dacb15ef_prof);

    }

    // line 54
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0549332b75e36cec1c3caf14d1746798653e9e26ae9fdf464204149a21b8825a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0549332b75e36cec1c3caf14d1746798653e9e26ae9fdf464204149a21b8825a->enter($__internal_0549332b75e36cec1c3caf14d1746798653e9e26ae9fdf464204149a21b8825a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_77e49b423dc7d9f56d2489cc65a3e387d21834101fca503c4d5c52637a30bed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77e49b423dc7d9f56d2489cc65a3e387d21834101fca503c4d5c52637a30bed7->enter($__internal_77e49b423dc7d9f56d2489cc65a3e387d21834101fca503c4d5c52637a30bed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 55
        echo "    ";
        // line 56
        echo "    <span class=\"label ";
        echo (((twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stacks", array())) == 0)) ? ("disabled") : (""));
        echo " ";
        echo ((twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "failedStacks", array()))) ? ("label-status-error") : (""));
        echo "\">
        <span class=\"icon\">
            ";
        // line 58
        echo twig_include($this->env, $context, "@Httplug/Icon/httplug.svg");
        echo "
        </span>
        <strong>Httplug</strong>
        ";
        // line 61
        if (twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "failedStacks", array()))) {
            // line 62
            echo "            <span class=\"count\">
                <span>";
            // line 63
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "failedStacks", array())), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 66
        echo "    </span>
";
        
        $__internal_77e49b423dc7d9f56d2489cc65a3e387d21834101fca503c4d5c52637a30bed7->leave($__internal_77e49b423dc7d9f56d2489cc65a3e387d21834101fca503c4d5c52637a30bed7_prof);

        
        $__internal_0549332b75e36cec1c3caf14d1746798653e9e26ae9fdf464204149a21b8825a->leave($__internal_0549332b75e36cec1c3caf14d1746798653e9e26ae9fdf464204149a21b8825a_prof);

    }

    // line 69
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6a3b23d9ec1707d6ccae56ff2c1d11e48d2f6487dc4b3ca91f45d71b4c84db13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a3b23d9ec1707d6ccae56ff2c1d11e48d2f6487dc4b3ca91f45d71b4c84db13->enter($__internal_6a3b23d9ec1707d6ccae56ff2c1d11e48d2f6487dc4b3ca91f45d71b4c84db13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5282c55f1e0fdd7bea8c714053859deaff71fe33d508ea037333de107045f9e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5282c55f1e0fdd7bea8c714053859deaff71fe33d508ea037333de107045f9e7->enter($__internal_5282c55f1e0fdd7bea8c714053859deaff71fe33d508ea037333de107045f9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 70
        echo "    <h2>HTTPlug</h2>
    <div class=\"sf-tabs\">
        ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "clients", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 73
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">";
            // line 74
            echo twig_escape_filter($this->env, $context["client"], "html", null, true);
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countClientMessages", array(0 => $context["client"]), "method"), "html", null, true);
            echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are sent by client named \"";
            // line 78
            echo twig_escape_filter($this->env, $context["client"], "html", null, true);
            echo "\".
                </p>

                ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "clientRootStacks", array(0 => $context["client"]), "method"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["stack"]) {
                // line 82
                echo "                    <div class=\"httplug-stack\">
                        ";
                // line 83
                $this->loadTemplate("@Httplug/stack.html.twig", "@Httplug/webprofiler.html.twig", 83)->display(array("collector" =>                 // line 84
($context["collector"] ?? $this->getContext($context, "collector")), "client" =>                 // line 85
$context["client"], "stack" =>                 // line 86
$context["stack"], "id" => $this->getAttribute(                // line 87
$context["loop"], "index", array())));
                // line 89
                echo "                    </div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stack'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 94
            echo "            <div class=\"empty\">
                <p>No request were sent.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "    </div>
";
        
        $__internal_5282c55f1e0fdd7bea8c714053859deaff71fe33d508ea037333de107045f9e7->leave($__internal_5282c55f1e0fdd7bea8c714053859deaff71fe33d508ea037333de107045f9e7_prof);

        
        $__internal_6a3b23d9ec1707d6ccae56ff2c1d11e48d2f6487dc4b3ca91f45d71b4c84db13->leave($__internal_6a3b23d9ec1707d6ccae56ff2c1d11e48d2f6487dc4b3ca91f45d71b4c84db13_prof);

    }

    public function getTemplateName()
    {
        return "@Httplug/webprofiler.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 98,  319 => 94,  312 => 91,  297 => 89,  295 => 87,  294 => 86,  293 => 85,  292 => 84,  291 => 83,  288 => 82,  271 => 81,  265 => 78,  256 => 74,  253 => 73,  248 => 72,  244 => 70,  235 => 69,  224 => 66,  218 => 63,  215 => 62,  213 => 61,  207 => 58,  199 => 56,  197 => 55,  188 => 54,  176 => 51,  172 => 50,  167 => 49,  158 => 48,  147 => 45,  145 => 44,  142 => 43,  136 => 39,  127 => 36,  123 => 35,  116 => 34,  114 => 33,  110 => 32,  106 => 31,  103 => 30,  99 => 29,  82 => 15,  79 => 14,  77 => 13,  74 => 12,  68 => 9,  63 => 7,  58 => 6,  55 => 5,  52 => 4,  43 => 3,  11 => 1,);
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
    {% if collector.stacks|length > 0 %}
        {% set icon %}
            {{ include('@Httplug/Icon/httplug.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.stacks|length }}</span>
            <span class=\"sf-toolbar-label\">in</span>
            <span class=\"sf-toolbar-value\">{{ collector.totalDuration|number_format }}</span>
            <span class=\"sf-toolbar-label\">ms</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>{{ collector.stacks|length }} requests</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <table class=\"sf-toolbar-ajax-requests\">
                    <thead>
                    <tr>
                        <th>Client</th>
                        <th>Method</th>
                        <th>Target</th>
                        <th>Time</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody class=\"sf-toolbar-ajax-request-list\">
                        {% for stack in collector.stacks %}
                            <tr>
                                <td>{{ stack.client }}</td>
                                <td>{{ stack.requestMethod }}</td>
                                {% set target = stack.requestTarget %}
                                <td title=\"{{ target }}\">{{ target|length > 30 ? target[:30] ~ '...' : target }}</td>
                                <td>{{ stack.duration == 0 ? 'n/a' : stack.duration|number_format ~ ' ms'}}</td>
                                <td>{{ stack.failed ? 'FAILED' : stack.responseCode|default('n/a') }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endset %}

        {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url, 'status': collector.failedStacks|length ? 'red' : '' } %}
    {% endif %}
{% endblock %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/httplug/style/httplug.css') }}\" />
    <script type=\"text/javascript\" src=\"{{ asset(\"bundles/httplug/script/httplug.js\") }}\"></script>
    {{ parent() }}
{% endblock %}

{% block menu %}
    {# This left-hand menu appears when using the full-screen profiler. #}
    <span class=\"label {{ collector.stacks|length == 0 ? 'disabled' }} {{ collector.failedStacks|length ? 'label-status-error' }}\">
        <span class=\"icon\">
            {{ include('@Httplug/Icon/httplug.svg') }}
        </span>
        <strong>Httplug</strong>
        {% if collector.failedStacks|length %}
            <span class=\"count\">
                <span>{{ collector.failedStacks|length }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>HTTPlug</h2>
    <div class=\"sf-tabs\">
        {% for client in collector.clients %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">{{ client }} <span class=\"badge\">{{ collector.countClientMessages(client) }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are sent by client named \"{{ client }}\".
                </p>

                {% for stack in collector.clientRootStacks(client) %}
                    <div class=\"httplug-stack\">
                        {% include '@Httplug/stack.html.twig' with {
                            'collector': collector,
                            'client': client,
                            'stack': stack,
                            'id': loop.index
                        } only %}
                    </div>
                {% endfor %}
            </div>
        </div>
        {% else %}
            <div class=\"empty\">
                <p>No request were sent.</p>
            </div>
        {% endfor %}
    </div>
{% endblock %}
", "@Httplug/webprofiler.html.twig", "/home/karim/Desktop/sandbox/symfony-standard-2/vendor/php-http/httplug-bundle/Resources/views/webprofiler.html.twig");
    }
}
