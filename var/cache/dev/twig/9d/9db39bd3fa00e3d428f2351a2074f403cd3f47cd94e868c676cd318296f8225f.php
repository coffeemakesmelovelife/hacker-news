<?php

/* default/index.html.twig */
class __TwigTemplate_0b815f0ef9614ea8ce24d3f255319831783f6a333b152d820bf540daba520993 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d4c09f192b9858d1322c935e79b079d37e70c48c456b7b7d162f257ec78f9d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d4c09f192b9858d1322c935e79b079d37e70c48c456b7b7d162f257ec78f9d4->enter($__internal_9d4c09f192b9858d1322c935e79b079d37e70c48c456b7b7d162f257ec78f9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_4e9083697470dbe566954b072f733e95ee3fb6e280dbfb7867ae3547dc7ab1e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e9083697470dbe566954b072f733e95ee3fb6e280dbfb7867ae3547dc7ab1e1->enter($__internal_4e9083697470dbe566954b072f733e95ee3fb6e280dbfb7867ae3547dc7ab1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d4c09f192b9858d1322c935e79b079d37e70c48c456b7b7d162f257ec78f9d4->leave($__internal_9d4c09f192b9858d1322c935e79b079d37e70c48c456b7b7d162f257ec78f9d4_prof);

        
        $__internal_4e9083697470dbe566954b072f733e95ee3fb6e280dbfb7867ae3547dc7ab1e1->leave($__internal_4e9083697470dbe566954b072f733e95ee3fb6e280dbfb7867ae3547dc7ab1e1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_84dd0ad6272bbfba5f05863df9fd95de0f3e71ab76b1ef18526e9302a6983b11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84dd0ad6272bbfba5f05863df9fd95de0f3e71ab76b1ef18526e9302a6983b11->enter($__internal_84dd0ad6272bbfba5f05863df9fd95de0f3e71ab76b1ef18526e9302a6983b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cf14b82f00787665df9bb1ee8cc0dc81edb91a3dc16604c0fe4c9b20fe42fe83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf14b82f00787665df9bb1ee8cc0dc81edb91a3dc16604c0fe4c9b20fe42fe83->enter($__internal_cf14b82f00787665df9bb1ee8cc0dc81edb91a3dc16604c0fe4c9b20fe42fe83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Hacker News ";
        
        $__internal_cf14b82f00787665df9bb1ee8cc0dc81edb91a3dc16604c0fe4c9b20fe42fe83->leave($__internal_cf14b82f00787665df9bb1ee8cc0dc81edb91a3dc16604c0fe4c9b20fe42fe83_prof);

        
        $__internal_84dd0ad6272bbfba5f05863df9fd95de0f3e71ab76b1ef18526e9302a6983b11->leave($__internal_84dd0ad6272bbfba5f05863df9fd95de0f3e71ab76b1ef18526e9302a6983b11_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_46beb889c120e15121bee66cab0380595b1e2035af6af9fb49a8e68b8ddf865e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46beb889c120e15121bee66cab0380595b1e2035af6af9fb49a8e68b8ddf865e->enter($__internal_46beb889c120e15121bee66cab0380595b1e2035af6af9fb49a8e68b8ddf865e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0acf88fcdb6001e7eed357ce14b69a0ee8cdb94c3448e058dec4216f270414bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0acf88fcdb6001e7eed357ce14b69a0ee8cdb94c3448e058dec4216f270414bd->enter($__internal_0acf88fcdb6001e7eed357ce14b69a0ee8cdb94c3448e058dec4216f270414bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"container\" style=\"padding-right: 0px; padding-left: 0px;\">
  <br>
  <h2 class=\"\">Posts by other Hackers:</h2>
  <br>
  ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 10
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 11
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\" role=\"alert\">
            ";
                // line 12
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</div>
  <div class=\"container main-section border\">
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 19
            echo "
      <div class=\"row\">
      <div class=\"col-lg-12 col-sm-12 col-12\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <h4 class=\"text-primary\"><a class=\"no-under\" href=\"/post/";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], 0, array(), "array"), "id", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], 0, array(), "array"), "post_title", array(), "array"), "html", null, true);
            echo "</a></h4>
            <p>
              ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], 0, array(), "array"), "post_body", array(), "array"), "html", null, true);
            echo "
            </p>
            <a class=\"no-under\" href=\"/\">
              <i class=\"fa fa-thumbs-o-up\" aria-hidden=\"true\"></i> &nbsp; Like
            </a>&nbsp;
            <a class=\"no-under\" href=\"/\">
              <i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i> &nbsp; Comment
            </a>
          </div>
        </div>
        <div class=\"row post-detail\">
          <div class=\"col-lg-12 col-sm-12 col-12\">
              <ul class=\"list-inline\">
                <li class=\"list-inline-item\">
                  <img src=\"https://dummyimage.com/20x20/a8a1a8/0f0f12\" class=\"rounded-circle\" width=\"20px\"> <span>by</span> <span class=\"text-info\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "username", array(), "array"), "html", null, true);
            echo "</span>
                </li>
                <li class=\"list-inline-item\">
                  <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> <span>";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], 0, array(), "array"), "posted_at", array(), "array"), "F jS \\a\\t g:ia"), "html", null, true);
            echo "</span>
                </li>
                <li class=\"list-inline-item\">
                  <i class=\"fa fa-comment\" aria-hidden=\"true\"></i> <span class=\"text-info\">3 Comments</span>
                </li>
              </ul>
          </div>
        </div>
      </div>
      </div>
      <hr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "  </div>
<style>
body{
}
.main-section{
\tpadding:15px;
\tbackground-color: #fff;
}
.list-inline-item{
\tborder-right:1px solid black;
\tpadding-right:6px;
\tline-height:0.4em;
}
.list-inline-item:last-child{
\tborder:none;
}
.post-detail ul{
\tmargin-top:15px;
}
</style>

";
        
        $__internal_0acf88fcdb6001e7eed357ce14b69a0ee8cdb94c3448e058dec4216f270414bd->leave($__internal_0acf88fcdb6001e7eed357ce14b69a0ee8cdb94c3448e058dec4216f270414bd_prof);

        
        $__internal_46beb889c120e15121bee66cab0380595b1e2035af6af9fb49a8e68b8ddf865e->leave($__internal_46beb889c120e15121bee66cab0380595b1e2035af6af9fb49a8e68b8ddf865e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 56,  148 => 43,  142 => 40,  125 => 26,  118 => 24,  111 => 19,  107 => 18,  103 => 16,  97 => 15,  88 => 12,  83 => 11,  78 => 10,  74 => 9,  68 => 5,  59 => 4,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %} Hacker News {% endblock %}

{% block body %}
<div class=\"container\" style=\"padding-right: 0px; padding-left: 0px;\">
  <br>
  <h2 class=\"\">Posts by other Hackers:</h2>
  <br>
  {% for label, messages in app.flashes %}
    {% for message in messages %}
        <div class=\"alert alert-{{ label }}\" role=\"alert\">
            {{ message }}
        </div>
    {% endfor %}
  {% endfor %}
</div>
  <div class=\"container main-section border\">
    {% for post in posts %}

      <div class=\"row\">
      <div class=\"col-lg-12 col-sm-12 col-12\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <h4 class=\"text-primary\"><a class=\"no-under\" href=\"/post/{{ post[0]['id'] }}\">{{ post[0]['post_title'] }}</a></h4>
            <p>
              {{ post[0]['post_body'] }}
            </p>
            <a class=\"no-under\" href=\"/\">
              <i class=\"fa fa-thumbs-o-up\" aria-hidden=\"true\"></i> &nbsp; Like
            </a>&nbsp;
            <a class=\"no-under\" href=\"/\">
              <i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i> &nbsp; Comment
            </a>
          </div>
        </div>
        <div class=\"row post-detail\">
          <div class=\"col-lg-12 col-sm-12 col-12\">
              <ul class=\"list-inline\">
                <li class=\"list-inline-item\">
                  <img src=\"https://dummyimage.com/20x20/a8a1a8/0f0f12\" class=\"rounded-circle\" width=\"20px\"> <span>by</span> <span class=\"text-info\">{{ post['username'] }}</span>
                </li>
                <li class=\"list-inline-item\">
                  <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> <span>{{ post[0]['posted_at']|date('F jS \\\\a\\\\t g:ia') }}</span>
                </li>
                <li class=\"list-inline-item\">
                  <i class=\"fa fa-comment\" aria-hidden=\"true\"></i> <span class=\"text-info\">3 Comments</span>
                </li>
              </ul>
          </div>
        </div>
      </div>
      </div>
      <hr>

    {% endfor %}
  </div>
<style>
body{
}
.main-section{
\tpadding:15px;
\tbackground-color: #fff;
}
.list-inline-item{
\tborder-right:1px solid black;
\tpadding-right:6px;
\tline-height:0.4em;
}
.list-inline-item:last-child{
\tborder:none;
}
.post-detail ul{
\tmargin-top:15px;
}
</style>

{% endblock %}
", "default/index.html.twig", "/home/karim/Desktop/sandbox/hacker-news/app/Resources/views/default/index.html.twig");
    }
}
