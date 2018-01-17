<?php

/* default/showpost.html.twig */
class __TwigTemplate_56ede09152d4361c2f69ac5d8a042f1bc1caa7518e44f5d51a477e3f9f746a36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/showpost.html.twig", 1);
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
        $__internal_ef32c6e835cf6ff45ba27f10ee9ad8db2d2d099566285ad3c6c651f10fa376e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef32c6e835cf6ff45ba27f10ee9ad8db2d2d099566285ad3c6c651f10fa376e3->enter($__internal_ef32c6e835cf6ff45ba27f10ee9ad8db2d2d099566285ad3c6c651f10fa376e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/showpost.html.twig"));

        $__internal_fb759310cf01cb69567e6130487e531c3e13a041472d6ab9c0fcbd683ab6b5e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb759310cf01cb69567e6130487e531c3e13a041472d6ab9c0fcbd683ab6b5e3->enter($__internal_fb759310cf01cb69567e6130487e531c3e13a041472d6ab9c0fcbd683ab6b5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/showpost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef32c6e835cf6ff45ba27f10ee9ad8db2d2d099566285ad3c6c651f10fa376e3->leave($__internal_ef32c6e835cf6ff45ba27f10ee9ad8db2d2d099566285ad3c6c651f10fa376e3_prof);

        
        $__internal_fb759310cf01cb69567e6130487e531c3e13a041472d6ab9c0fcbd683ab6b5e3->leave($__internal_fb759310cf01cb69567e6130487e531c3e13a041472d6ab9c0fcbd683ab6b5e3_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_84eef44f6a5faf92bae432922c829dd19399a9dcb56e74802a49463cde4dba69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84eef44f6a5faf92bae432922c829dd19399a9dcb56e74802a49463cde4dba69->enter($__internal_84eef44f6a5faf92bae432922c829dd19399a9dcb56e74802a49463cde4dba69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0d9cdc1145e556177e984837bd328a9823c78fa07fcb37b0d6c9464e3cba03ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d9cdc1145e556177e984837bd328a9823c78fa07fcb37b0d6c9464e3cba03ac->enter($__internal_0d9cdc1145e556177e984837bd328a9823c78fa07fcb37b0d6c9464e3cba03ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Hacker News ";
        
        $__internal_0d9cdc1145e556177e984837bd328a9823c78fa07fcb37b0d6c9464e3cba03ac->leave($__internal_0d9cdc1145e556177e984837bd328a9823c78fa07fcb37b0d6c9464e3cba03ac_prof);

        
        $__internal_84eef44f6a5faf92bae432922c829dd19399a9dcb56e74802a49463cde4dba69->leave($__internal_84eef44f6a5faf92bae432922c829dd19399a9dcb56e74802a49463cde4dba69_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b803537ff20aef5dc087eab7322cda5e2bcbdb6ee01f0a3167af3edccfb86ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b803537ff20aef5dc087eab7322cda5e2bcbdb6ee01f0a3167af3edccfb86ad->enter($__internal_2b803537ff20aef5dc087eab7322cda5e2bcbdb6ee01f0a3167af3edccfb86ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f162202640410e807bb2945adeb349c4a9f73d7b9a4cfa8ea1b1cb1813d42384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f162202640410e807bb2945adeb349c4a9f73d7b9a4cfa8ea1b1cb1813d42384->enter($__internal_f162202640410e807bb2945adeb349c4a9f73d7b9a4cfa8ea1b1cb1813d42384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<br>
<div class=\"container main-section border\">
  <div class=\"row\">
  <div class=\"col-lg-12 col-sm-12 col-12\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h4 class=\"text-primary\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "post_title", array()), "html", null, true);
        echo "</h4>
        <p>
          ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "post_body", array()), "html", null, true);
        echo "
        </p>
        <a class=\"\" href=\"/\">
          <i class=\"fa fa-thumbs-o-up\" aria-hidden=\"true\"></i> &nbsp; Like
        </a>
      </div>
    </div>
    <div class=\"row post-detail\">
      <div class=\"col-lg-12 col-sm-12 col-12\">
          <ul class=\"list-inline\">
            <li class=\"list-inline-item\">
              <img src=\"https://dummyimage.com/20x20/a8a1a8/0f0f12\" class=\"rounded-circle\" width=\"20px\"> <span>by</span> <span class=\"text-info\">Lisa</span>
            </li>
            <li class=\"list-inline-item\">
              <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> <span>";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "posted_at", array()), "F jS \\a\\t g:ia"), "html", null, true);
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
<form action=\"\" method=\"post\">
  <div class=\"form-group\">
    <textarea class=\"form-control\" name=\"comment\" placeholder=\"Write a comment ...\" rows=\"3\"></textarea><br>
    <button class=\"btn btn-primary\" type=\"submit\">Submit</button>
  </div>
</form>
</div>

<style>
body{
}
.main-section{
padding:15px;
background-color: #fff;
}
.list-inline-item{
border-right:1px solid black;
padding-right:6px;
line-height:0.4em;
}
.list-inline-item:last-child{
border:none;
}
.post-detail ul{
margin-top:15px;
}
</style>

";
        
        $__internal_f162202640410e807bb2945adeb349c4a9f73d7b9a4cfa8ea1b1cb1813d42384->leave($__internal_f162202640410e807bb2945adeb349c4a9f73d7b9a4cfa8ea1b1cb1813d42384_prof);

        
        $__internal_2b803537ff20aef5dc087eab7322cda5e2bcbdb6ee01f0a3167af3edccfb86ad->leave($__internal_2b803537ff20aef5dc087eab7322cda5e2bcbdb6ee01f0a3167af3edccfb86ad_prof);

    }

    public function getTemplateName()
    {
        return "default/showpost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 27,  81 => 13,  76 => 11,  68 => 5,  59 => 4,  41 => 2,  11 => 1,);
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
<br>
<div class=\"container main-section border\">
  <div class=\"row\">
  <div class=\"col-lg-12 col-sm-12 col-12\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h4 class=\"text-primary\">{{ post.post_title }}</h4>
        <p>
          {{ post.post_body }}
        </p>
        <a class=\"\" href=\"/\">
          <i class=\"fa fa-thumbs-o-up\" aria-hidden=\"true\"></i> &nbsp; Like
        </a>
      </div>
    </div>
    <div class=\"row post-detail\">
      <div class=\"col-lg-12 col-sm-12 col-12\">
          <ul class=\"list-inline\">
            <li class=\"list-inline-item\">
              <img src=\"https://dummyimage.com/20x20/a8a1a8/0f0f12\" class=\"rounded-circle\" width=\"20px\"> <span>by</span> <span class=\"text-info\">Lisa</span>
            </li>
            <li class=\"list-inline-item\">
              <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> <span>{{ post.posted_at|date('F jS \\\\a\\\\t g:ia') }}</span>
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
<form action=\"\" method=\"post\">
  <div class=\"form-group\">
    <textarea class=\"form-control\" name=\"comment\" placeholder=\"Write a comment ...\" rows=\"3\"></textarea><br>
    <button class=\"btn btn-primary\" type=\"submit\">Submit</button>
  </div>
</form>
</div>

<style>
body{
}
.main-section{
padding:15px;
background-color: #fff;
}
.list-inline-item{
border-right:1px solid black;
padding-right:6px;
line-height:0.4em;
}
.list-inline-item:last-child{
border:none;
}
.post-detail ul{
margin-top:15px;
}
</style>

{% endblock %}
", "default/showpost.html.twig", "/home/karim/Desktop/sandbox/hacker-news/app/Resources/views/default/showpost.html.twig");
    }
}
