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
        $__internal_37fca522900c7b6306c60fd65bc187353816f6b7e06c95683a8bebe9d1fc3650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37fca522900c7b6306c60fd65bc187353816f6b7e06c95683a8bebe9d1fc3650->enter($__internal_37fca522900c7b6306c60fd65bc187353816f6b7e06c95683a8bebe9d1fc3650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/showpost.html.twig"));

        $__internal_c2e3a971b2ddf7ce93883eda2da0230c1f64e57478c0a42df241b98d93150c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e3a971b2ddf7ce93883eda2da0230c1f64e57478c0a42df241b98d93150c9d->enter($__internal_c2e3a971b2ddf7ce93883eda2da0230c1f64e57478c0a42df241b98d93150c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/showpost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37fca522900c7b6306c60fd65bc187353816f6b7e06c95683a8bebe9d1fc3650->leave($__internal_37fca522900c7b6306c60fd65bc187353816f6b7e06c95683a8bebe9d1fc3650_prof);

        
        $__internal_c2e3a971b2ddf7ce93883eda2da0230c1f64e57478c0a42df241b98d93150c9d->leave($__internal_c2e3a971b2ddf7ce93883eda2da0230c1f64e57478c0a42df241b98d93150c9d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d28682d9821e6da79ba621fb7036b4a53661070b728c686653de7457480c0c0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d28682d9821e6da79ba621fb7036b4a53661070b728c686653de7457480c0c0c->enter($__internal_d28682d9821e6da79ba621fb7036b4a53661070b728c686653de7457480c0c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d38d2cf0381f9f1632accb756199bdd2c706d0bc8e51821bd75cf7534aef94e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d38d2cf0381f9f1632accb756199bdd2c706d0bc8e51821bd75cf7534aef94e7->enter($__internal_d38d2cf0381f9f1632accb756199bdd2c706d0bc8e51821bd75cf7534aef94e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Hacker News ";
        
        $__internal_d38d2cf0381f9f1632accb756199bdd2c706d0bc8e51821bd75cf7534aef94e7->leave($__internal_d38d2cf0381f9f1632accb756199bdd2c706d0bc8e51821bd75cf7534aef94e7_prof);

        
        $__internal_d28682d9821e6da79ba621fb7036b4a53661070b728c686653de7457480c0c0c->leave($__internal_d28682d9821e6da79ba621fb7036b4a53661070b728c686653de7457480c0c0c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e75813c7aa80593727b18f59d4f626dbf66ec50b058e144ebf6ec3ffc3077ed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e75813c7aa80593727b18f59d4f626dbf66ec50b058e144ebf6ec3ffc3077ed0->enter($__internal_e75813c7aa80593727b18f59d4f626dbf66ec50b058e144ebf6ec3ffc3077ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_985983baf39113ba85411a264f7984f5d14cff3ba63fbf678c843a41b2500e61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_985983baf39113ba85411a264f7984f5d14cff3ba63fbf678c843a41b2500e61->enter($__internal_985983baf39113ba85411a264f7984f5d14cff3ba63fbf678c843a41b2500e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<br>
<div class=\"container no-pad\">
  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 8
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 9
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\" role=\"alert\">
            ";
                // line 10
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</div>
<div class=\"container main-section border\">
  <div class=\"row\">
  <div class=\"col-lg-12 col-sm-12 col-12\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h4 class=\"text-primary\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), 0, array(), "array"), "post_title", array(), "array"), "html", null, true);
        echo "</h4>
        <p>
          ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), 0, array(), "array"), "post_body", array(), "array"), "html", null, true);
        echo "
        </p>
        <a class=\"no-under\" href=\"/\">
          <i class=\"fa fa-thumbs-o-up\" aria-hidden=\"true\"></i> &nbsp; Like
        </a>
      </div>
    </div>
    <div class=\"row post-detail\">
      <div class=\"col-lg-12 col-sm-12 col-12\">
          <ul class=\"list-inline\">
            <li class=\"list-inline-item\">
              <img src=\"https://dummyimage.com/20x20/a8a1a8/0f0f12\" class=\"rounded-circle\" width=\"20px\"> <span>by</span> <span class=\"text-info\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "username", array(), "array"), "html", null, true);
        echo "</span>
            </li>
            <li class=\"list-inline-item\">
              <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> <span>";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), 0, array(), "array"), "posted_at", array(), "array"), "F jS \\a\\t g:ia"), "html", null, true);
        echo "</span>
            </li>
            <li class=\"list-inline-item\">
              <i class=\"fa fa-comment\" aria-hidden=\"true\"></i> <span class=\"text-info\">";
        // line 39
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["comments"] ?? $this->getContext($context, "comments"))), "html", null, true);
        echo "</span>
            </li>
          </ul>
      </div>
    </div>
  </div>
</div>
<hr>
<form action=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newcomment");
        echo "\" method=\"post\">
  <div class=\"form-group\">
    <textarea class=\"form-control\" name=\"comment\" placeholder=\"Write a comment ...\" rows=\"3\"></textarea><br>
    <input type=\"text\" hidden=\"\" name=\"postid\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), 0, array(), "array"), "id", array(), "array"), "html", null, true);
        echo "\">
    <button class=\"btn btn-primary\" type=\"submit\">Submit</button>
  </div>
</form>
";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 55
            echo "<hr>
<div class=\"col-lg-12 col-sm-12 col-12\">
  <div class=\"row\">
    <div class=\"col-lg-12\">
      <p>
        ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], 0, array(), "array"), "comment_text", array(), "array"), "html", null, true);
            echo "
      </p>
    </div>
  </div>
  <div class=\"row post-detail\">
    <div class=\"col-lg-12 col-sm-12 col-12\">
        <ul class=\"list-inline\">
          <li class=\"list-inline-item\">
            <img src=\"https://dummyimage.com/20x20/a8a1a8/0f0f12\" class=\"rounded-circle\" width=\"20px\"> <span class=\"text-info\">";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "username", array(), "array"), "html", null, true);
            echo "</span>
          </li>
          <li class=\"list-inline-item\">
            <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> <span>";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], 0, array(), "array"), "posted_at", array(), "array"), "F jS \\a\\t g:ia"), "html", null, true);
            echo "</span>
          </li>
        </ul>
    </div>
  </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "
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
        
        $__internal_985983baf39113ba85411a264f7984f5d14cff3ba63fbf678c843a41b2500e61->leave($__internal_985983baf39113ba85411a264f7984f5d14cff3ba63fbf678c843a41b2500e61_prof);

        
        $__internal_e75813c7aa80593727b18f59d4f626dbf66ec50b058e144ebf6ec3ffc3077ed0->leave($__internal_e75813c7aa80593727b18f59d4f626dbf66ec50b058e144ebf6ec3ffc3077ed0_prof);

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
        return array (  205 => 78,  192 => 71,  186 => 68,  175 => 60,  168 => 55,  164 => 54,  157 => 50,  151 => 47,  140 => 39,  134 => 36,  128 => 33,  114 => 22,  109 => 20,  101 => 14,  95 => 13,  86 => 10,  81 => 9,  76 => 8,  72 => 7,  68 => 5,  59 => 4,  41 => 2,  11 => 1,);
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
<div class=\"container no-pad\">
  {% for label, messages in app.flashes %}
    {% for message in messages %}
        <div class=\"alert alert-{{ label }}\" role=\"alert\">
            {{ message }}
        </div>
    {% endfor %}
  {% endfor %}
</div>
<div class=\"container main-section border\">
  <div class=\"row\">
  <div class=\"col-lg-12 col-sm-12 col-12\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h4 class=\"text-primary\">{{ post[0]['post_title'] }}</h4>
        <p>
          {{ post[0]['post_body'] }}
        </p>
        <a class=\"no-under\" href=\"/\">
          <i class=\"fa fa-thumbs-o-up\" aria-hidden=\"true\"></i> &nbsp; Like
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
              <i class=\"fa fa-comment\" aria-hidden=\"true\"></i> <span class=\"text-info\">{{ comments|length }}</span>
            </li>
          </ul>
      </div>
    </div>
  </div>
</div>
<hr>
<form action=\"{{ path('newcomment') }}\" method=\"post\">
  <div class=\"form-group\">
    <textarea class=\"form-control\" name=\"comment\" placeholder=\"Write a comment ...\" rows=\"3\"></textarea><br>
    <input type=\"text\" hidden=\"\" name=\"postid\" value=\"{{ post[0]['id'] }}\">
    <button class=\"btn btn-primary\" type=\"submit\">Submit</button>
  </div>
</form>
{% for comment in comments %}
<hr>
<div class=\"col-lg-12 col-sm-12 col-12\">
  <div class=\"row\">
    <div class=\"col-lg-12\">
      <p>
        {{ comment[0]['comment_text'] }}
      </p>
    </div>
  </div>
  <div class=\"row post-detail\">
    <div class=\"col-lg-12 col-sm-12 col-12\">
        <ul class=\"list-inline\">
          <li class=\"list-inline-item\">
            <img src=\"https://dummyimage.com/20x20/a8a1a8/0f0f12\" class=\"rounded-circle\" width=\"20px\"> <span class=\"text-info\">{{comment['username']}}</span>
          </li>
          <li class=\"list-inline-item\">
            <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> <span>{{ comment[0]['posted_at']|date('F jS \\\\a\\\\t g:ia') }}</span>
          </li>
        </ul>
    </div>
  </div>
</div>
{% endfor %}

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
