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
        $__internal_93d40fc14e0ef305a6cfe758969cee711c6c9b15ff9c9a75fc2f8a027430e007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93d40fc14e0ef305a6cfe758969cee711c6c9b15ff9c9a75fc2f8a027430e007->enter($__internal_93d40fc14e0ef305a6cfe758969cee711c6c9b15ff9c9a75fc2f8a027430e007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Httplug/webprofiler.html.twig"));

        $__internal_8a4078090f32f4e5f3be7537e20b434f1df050d80a49f2cc0a372dcc6ef6a0b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a4078090f32f4e5f3be7537e20b434f1df050d80a49f2cc0a372dcc6ef6a0b4->enter($__internal_8a4078090f32f4e5f3be7537e20b434f1df050d80a49f2cc0a372dcc6ef6a0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Httplug/webprofiler.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93d40fc14e0ef305a6cfe758969cee711c6c9b15ff9c9a75fc2f8a027430e007->leave($__internal_93d40fc14e0ef305a6cfe758969cee711c6c9b15ff9c9a75fc2f8a027430e007_prof);

        
        $__internal_8a4078090f32f4e5f3be7537e20b434f1df050d80a49f2cc0a372dcc6ef6a0b4->leave($__internal_8a4078090f32f4e5f3be7537e20b434f1df050d80a49f2cc0a372dcc6ef6a0b4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f7b178953f91d1b605b05f59ad5c5755adddc1f15f0c84dd0eaf25b5062a8099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7b178953f91d1b605b05f59ad5c5755adddc1f15f0c84dd0eaf25b5062a8099->enter($__internal_f7b178953f91d1b605b05f59ad5c5755adddc1f15f0c84dd0eaf25b5062a8099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_093b1cbaf1a81f77e3609d2bd266dbc0d9b16e569dcb26e2f0a23a944ff37231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_093b1cbaf1a81f77e3609d2bd266dbc0d9b16e569dcb26e2f0a23a944ff37231->enter($__internal_093b1cbaf1a81f77e3609d2bd266dbc0d9b16e569dcb26e2f0a23a944ff37231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_093b1cbaf1a81f77e3609d2bd266dbc0d9b16e569dcb26e2f0a23a944ff37231->leave($__internal_093b1cbaf1a81f77e3609d2bd266dbc0d9b16e569dcb26e2f0a23a944ff37231_prof);

        
        $__internal_f7b178953f91d1b605b05f59ad5c5755adddc1f15f0c84dd0eaf25b5062a8099->leave($__internal_f7b178953f91d1b605b05f59ad5c5755adddc1f15f0c84dd0eaf25b5062a8099_prof);

    }

    // line 48
    public function block_head($context, array $blocks = array())
    {
        $__internal_b7e37041480712fa046f0f6a826de544b9073c2a29a305687fbf0683c6fe2223 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7e37041480712fa046f0f6a826de544b9073c2a29a305687fbf0683c6fe2223->enter($__internal_b7e37041480712fa046f0f6a826de544b9073c2a29a305687fbf0683c6fe2223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a42f9c5c0356512cf3307a29319a4a1d0c5c778f0df579e39ba7cf9abd1fe8c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a42f9c5c0356512cf3307a29319a4a1d0c5c778f0df579e39ba7cf9abd1fe8c8->enter($__internal_a42f9c5c0356512cf3307a29319a4a1d0c5c778f0df579e39ba7cf9abd1fe8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a42f9c5c0356512cf3307a29319a4a1d0c5c778f0df579e39ba7cf9abd1fe8c8->leave($__internal_a42f9c5c0356512cf3307a29319a4a1d0c5c778f0df579e39ba7cf9abd1fe8c8_prof);

        
        $__internal_b7e37041480712fa046f0f6a826de544b9073c2a29a305687fbf0683c6fe2223->leave($__internal_b7e37041480712fa046f0f6a826de544b9073c2a29a305687fbf0683c6fe2223_prof);

    }

    // line 54
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4874d6935622d69f327676ce9a6d3f70dc24915fe126efadc875ba0255e56dd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4874d6935622d69f327676ce9a6d3f70dc24915fe126efadc875ba0255e56dd5->enter($__internal_4874d6935622d69f327676ce9a6d3f70dc24915fe126efadc875ba0255e56dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d433bd3ddfa134f2b31667ff42441399bb274f55f2c49071db7f4b75cd02d482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d433bd3ddfa134f2b31667ff42441399bb274f55f2c49071db7f4b75cd02d482->enter($__internal_d433bd3ddfa134f2b31667ff42441399bb274f55f2c49071db7f4b75cd02d482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d433bd3ddfa134f2b31667ff42441399bb274f55f2c49071db7f4b75cd02d482->leave($__internal_d433bd3ddfa134f2b31667ff42441399bb274f55f2c49071db7f4b75cd02d482_prof);

        
        $__internal_4874d6935622d69f327676ce9a6d3f70dc24915fe126efadc875ba0255e56dd5->leave($__internal_4874d6935622d69f327676ce9a6d3f70dc24915fe126efadc875ba0255e56dd5_prof);

    }

    // line 69
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a2ff8b0caff6bbce0535a5d37f8a3518aa29f43f1581a22f749a605d5a657b14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2ff8b0caff6bbce0535a5d37f8a3518aa29f43f1581a22f749a605d5a657b14->enter($__internal_a2ff8b0caff6bbce0535a5d37f8a3518aa29f43f1581a22f749a605d5a657b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_72d3d758349b555cb37b576ec15ebb77e42971ada66b998a5360d94b414bc1e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72d3d758349b555cb37b576ec15ebb77e42971ada66b998a5360d94b414bc1e0->enter($__internal_72d3d758349b555cb37b576ec15ebb77e42971ada66b998a5360d94b414bc1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_72d3d758349b555cb37b576ec15ebb77e42971ada66b998a5360d94b414bc1e0->leave($__internal_72d3d758349b555cb37b576ec15ebb77e42971ada66b998a5360d94b414bc1e0_prof);

        
        $__internal_a2ff8b0caff6bbce0535a5d37f8a3518aa29f43f1581a22f749a605d5a657b14->leave($__internal_a2ff8b0caff6bbce0535a5d37f8a3518aa29f43f1581a22f749a605d5a657b14_prof);

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
", "@Httplug/webprofiler.html.twig", "/home/karim/Desktop/sandbox/hacker-news/vendor/php-http/httplug-bundle/Resources/views/webprofiler.html.twig");
    }
}
