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
        $__internal_20b4debed29b8d706ed67a71c4d7a3dc962d23fd1fef38379ab117ccee2c2cf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20b4debed29b8d706ed67a71c4d7a3dc962d23fd1fef38379ab117ccee2c2cf0->enter($__internal_20b4debed29b8d706ed67a71c4d7a3dc962d23fd1fef38379ab117ccee2c2cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_f5ddec94eb7b0df92dbf43bab06db242c75204e5a781872632285adfc8903bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ddec94eb7b0df92dbf43bab06db242c75204e5a781872632285adfc8903bc6->enter($__internal_f5ddec94eb7b0df92dbf43bab06db242c75204e5a781872632285adfc8903bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20b4debed29b8d706ed67a71c4d7a3dc962d23fd1fef38379ab117ccee2c2cf0->leave($__internal_20b4debed29b8d706ed67a71c4d7a3dc962d23fd1fef38379ab117ccee2c2cf0_prof);

        
        $__internal_f5ddec94eb7b0df92dbf43bab06db242c75204e5a781872632285adfc8903bc6->leave($__internal_f5ddec94eb7b0df92dbf43bab06db242c75204e5a781872632285adfc8903bc6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa4b3c033df03a60d4eeef53d87d491cadd2f566bce61c7b20b292ad1ab8b3f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa4b3c033df03a60d4eeef53d87d491cadd2f566bce61c7b20b292ad1ab8b3f3->enter($__internal_aa4b3c033df03a60d4eeef53d87d491cadd2f566bce61c7b20b292ad1ab8b3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_737e2dddb48309c2c8ecd5f421c7d9a3bcc2c908a9a141e3d7d33d7faa26bd95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_737e2dddb48309c2c8ecd5f421c7d9a3bcc2c908a9a141e3d7d33d7faa26bd95->enter($__internal_737e2dddb48309c2c8ecd5f421c7d9a3bcc2c908a9a141e3d7d33d7faa26bd95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Hacker News ";
        
        $__internal_737e2dddb48309c2c8ecd5f421c7d9a3bcc2c908a9a141e3d7d33d7faa26bd95->leave($__internal_737e2dddb48309c2c8ecd5f421c7d9a3bcc2c908a9a141e3d7d33d7faa26bd95_prof);

        
        $__internal_aa4b3c033df03a60d4eeef53d87d491cadd2f566bce61c7b20b292ad1ab8b3f3->leave($__internal_aa4b3c033df03a60d4eeef53d87d491cadd2f566bce61c7b20b292ad1ab8b3f3_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e2e32e87a7dbc61bbaa77df2debd7e76c310a23e3aa0b44d535aa3033e8a684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e2e32e87a7dbc61bbaa77df2debd7e76c310a23e3aa0b44d535aa3033e8a684->enter($__internal_3e2e32e87a7dbc61bbaa77df2debd7e76c310a23e3aa0b44d535aa3033e8a684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a9e2483186a7d462a613839da4f2bd205d1e7db60ee1ed04d1db5125542480e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9e2483186a7d462a613839da4f2bd205d1e7db60ee1ed04d1db5125542480e7->enter($__internal_a9e2483186a7d462a613839da4f2bd205d1e7db60ee1ed04d1db5125542480e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"container\">
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
                echo "        <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "post_title", array()), "html", null, true);
            echo "</a></h4>
          <p>
            ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "post_body", array()), "html", null, true);
            echo "
          </p>
          <button class=\"btn btn-sm btn-primary\">
            <i class=\"fa fa-thumbs-o-up\" aria-hidden=\"true\"></i> &nbsp; Like
          </button>
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
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "posted_at", array()), "F jS \\a\\t g:ia"), "html", null, true);
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
        // line 52
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
        
        $__internal_a9e2483186a7d462a613839da4f2bd205d1e7db60ee1ed04d1db5125542480e7->leave($__internal_a9e2483186a7d462a613839da4f2bd205d1e7db60ee1ed04d1db5125542480e7_prof);

        
        $__internal_3e2e32e87a7dbc61bbaa77df2debd7e76c310a23e3aa0b44d535aa3033e8a684->leave($__internal_3e2e32e87a7dbc61bbaa77df2debd7e76c310a23e3aa0b44d535aa3033e8a684_prof);

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
        return array (  160 => 52,  142 => 40,  125 => 26,  118 => 24,  111 => 19,  107 => 18,  103 => 16,  97 => 15,  88 => 12,  83 => 11,  78 => 10,  74 => 9,  68 => 5,  59 => 4,  41 => 2,  11 => 1,);
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
<div class=\"container\">
  <br>
  <h2 class=\"\">Posts by other Hackers:</h2>
  <br>
  {% for label, messages in app.flashes %}
    {% for message in messages %}
        <div class=\"flash-{{ label }}\">
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
          <h4 class=\"text-primary\"><a class=\"no-under\" href=\"/post/{{ post.id }}\">{{ post.post_title }}</a></h4>
          <p>
            {{ post.post_body }}
          </p>
          <button class=\"btn btn-sm btn-primary\">
            <i class=\"fa fa-thumbs-o-up\" aria-hidden=\"true\"></i> &nbsp; Like
          </button>
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
