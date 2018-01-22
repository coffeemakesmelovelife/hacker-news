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
        $__internal_acbe1e73e2d3b38dff797a6759669d929924d2b5f76e26272dd7c5e6dabf990c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acbe1e73e2d3b38dff797a6759669d929924d2b5f76e26272dd7c5e6dabf990c->enter($__internal_acbe1e73e2d3b38dff797a6759669d929924d2b5f76e26272dd7c5e6dabf990c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/showpost.html.twig"));

        $__internal_fc40a95f5b75e3c2e2e0a565ebaba17630ee52a15b3ce5595e295a28aceffe5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc40a95f5b75e3c2e2e0a565ebaba17630ee52a15b3ce5595e295a28aceffe5f->enter($__internal_fc40a95f5b75e3c2e2e0a565ebaba17630ee52a15b3ce5595e295a28aceffe5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/showpost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acbe1e73e2d3b38dff797a6759669d929924d2b5f76e26272dd7c5e6dabf990c->leave($__internal_acbe1e73e2d3b38dff797a6759669d929924d2b5f76e26272dd7c5e6dabf990c_prof);

        
        $__internal_fc40a95f5b75e3c2e2e0a565ebaba17630ee52a15b3ce5595e295a28aceffe5f->leave($__internal_fc40a95f5b75e3c2e2e0a565ebaba17630ee52a15b3ce5595e295a28aceffe5f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6110932762411a5919f00a67fe22d1cf78f7d305892573667fb52e81f01a981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6110932762411a5919f00a67fe22d1cf78f7d305892573667fb52e81f01a981->enter($__internal_d6110932762411a5919f00a67fe22d1cf78f7d305892573667fb52e81f01a981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_651f003e4854e703a3194850f498428cc8ce40b5bdca0643db0f12811c4242e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651f003e4854e703a3194850f498428cc8ce40b5bdca0643db0f12811c4242e7->enter($__internal_651f003e4854e703a3194850f498428cc8ce40b5bdca0643db0f12811c4242e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Hacker News ";
        
        $__internal_651f003e4854e703a3194850f498428cc8ce40b5bdca0643db0f12811c4242e7->leave($__internal_651f003e4854e703a3194850f498428cc8ce40b5bdca0643db0f12811c4242e7_prof);

        
        $__internal_d6110932762411a5919f00a67fe22d1cf78f7d305892573667fb52e81f01a981->leave($__internal_d6110932762411a5919f00a67fe22d1cf78f7d305892573667fb52e81f01a981_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b38b5bb754a53e64d460ddf27cf3a913b7fc6edcb36b4e02b6647284defedf15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b38b5bb754a53e64d460ddf27cf3a913b7fc6edcb36b4e02b6647284defedf15->enter($__internal_b38b5bb754a53e64d460ddf27cf3a913b7fc6edcb36b4e02b6647284defedf15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c891eb6080e02e33c9b3e6fa9533bf6f949ecd311afb630d0da84efe4e817290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c891eb6080e02e33c9b3e6fa9533bf6f949ecd311afb630d0da84efe4e817290->enter($__internal_c891eb6080e02e33c9b3e6fa9533bf6f949ecd311afb630d0da84efe4e817290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getPostTitle", array(), "method"), "html", null, true);
        echo "</h4>
        <p>
          ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getPostBody", array(), "method"), "html", null, true);
        echo "
        </p>
        <span class=\"upvote-count\" id=\"upvote-";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getId", array(), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getUpvotesCount", array(), "method"), "html", null, true);
        echo "</span>&nbsp; <span class=\"upvote-count\">Likes</span>&nbsp; <hr>
        <button class=\"btn btn-sm btn-default
        ";
        // line 26
        if ($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "likedByCurrentUser", array(0 => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "getId", array(), "method")), "method")) {
            // line 27
            echo "        unlike
        ";
        } else {
            // line 29
            echo "        like
        ";
        }
        // line 31
        echo "        \" data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getId", array(), "method"), "html", null, true);
        echo "\" data-userid=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "getId", array(), "method"), "html", null, true);
        echo "\" data-postid=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getId", array(), "method"), "html", null, true);
        echo "\">
          <i class=\"fa fa-thumbs-o-up\" aria-hidden=\"true\"></i> &nbsp; Like
        </button>&nbsp;
      </div>
    </div>
    <div class=\"row post-detail\">
      <div class=\"col-lg-12 col-sm-12 col-12\">
          <ul class=\"list-inline\">
            <li class=\"list-inline-item\">
              <img src=\"https://cdn.pixabay.com/photo/2016/11/08/15/21/user-1808597_960_720.png\" class=\"rounded-circle\" width=\"20px\"> <span>by</span> <span class=\"text-info\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getUser", array(), "method"), "getUserName", array(), "method"), "html", null, true);
        echo "</span>
            </li>
            <li class=\"list-inline-item\">
              <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> <span>";
        // line 43
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getPostedAt", array(), "method"), "F jS \\a\\t g:ia"), "html", null, true);
        echo "</span>
            </li>
            <li class=\"list-inline-item\">
              <i class=\"fa fa-comment\" aria-hidden=\"true\"></i> <span class=\"text-info\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getCommentsCount", array()), "html", null, true);
        echo "</span>
            </li>
          </ul>
      </div>
    </div>
  </div>
</div>
<hr>
<form action=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newcomment");
        echo "\" method=\"post\" id=\"comment\">
  <div class=\"form-group\">
    <textarea class=\"form-control\" name=\"comment\" placeholder=\"Write a comment ...\" rows=\"3\"></textarea><br>
    <input type=\"text\" hidden=\"\" name=\"postid\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getId", array(), "method"), "html", null, true);
        echo "\">
    <button class=\"btn btn-primary\" type=\"submit\">Submit</button>
  </div>
</form>
";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getComments", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 62
            echo "<hr>
<div class=\"col-lg-12 col-sm-12 col-12\">
  <div class=\"row\">
    <div class=\"col-lg-12\">
      <p>
        ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "getCommentText", array(), "method"), "html", null, true);
            echo "
      </p>
    </div>
  </div>
  <div class=\"row post-detail\">
    <div class=\"col-lg-12 col-sm-12 col-12\">
        <ul class=\"list-inline\">
          <li class=\"list-inline-item\">
            <img src=\"https://dummyimage.com/20x20/a8a1a8/0f0f12\" class=\"rounded-circle\" width=\"20px\"> <span class=\"text-info\">";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "getUser", array(), "method"), "getUsername", array(), "method"), "html", null, true);
            echo "</span>
          </li>
          <li class=\"list-inline-item\">
            <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> <span>";
            // line 78
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "getPostedAt", array(), "method"), "F jS \\a\\t g:ia"), "html", null, true);
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
        // line 85
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
        
        $__internal_c891eb6080e02e33c9b3e6fa9533bf6f949ecd311afb630d0da84efe4e817290->leave($__internal_c891eb6080e02e33c9b3e6fa9533bf6f949ecd311afb630d0da84efe4e817290_prof);

        
        $__internal_b38b5bb754a53e64d460ddf27cf3a913b7fc6edcb36b4e02b6647284defedf15->leave($__internal_b38b5bb754a53e64d460ddf27cf3a913b7fc6edcb36b4e02b6647284defedf15_prof);

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
        return array (  230 => 85,  217 => 78,  211 => 75,  200 => 67,  193 => 62,  189 => 61,  182 => 57,  176 => 54,  165 => 46,  159 => 43,  153 => 40,  136 => 31,  132 => 29,  128 => 27,  126 => 26,  119 => 24,  114 => 22,  109 => 20,  101 => 14,  95 => 13,  86 => 10,  81 => 9,  76 => 8,  72 => 7,  68 => 5,  59 => 4,  41 => 2,  11 => 1,);
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
        <h4 class=\"text-primary\">{{ post.getPostTitle() }}</h4>
        <p>
          {{ post.getPostBody() }}
        </p>
        <span class=\"upvote-count\" id=\"upvote-{{ post.getId() }}\">{{ post.getUpvotesCount() }}</span>&nbsp; <span class=\"upvote-count\">Likes</span>&nbsp; <hr>
        <button class=\"btn btn-sm btn-default
        {% if(post.likedByCurrentUser(app.user.getId())) %}
        unlike
        {% else %}
        like
        {% endif %}
        \" data-id=\"{{ post.getId() }}\" data-userid=\"{{ app.user.getId() }}\" data-postid=\"{{ post.getId() }}\">
          <i class=\"fa fa-thumbs-o-up\" aria-hidden=\"true\"></i> &nbsp; Like
        </button>&nbsp;
      </div>
    </div>
    <div class=\"row post-detail\">
      <div class=\"col-lg-12 col-sm-12 col-12\">
          <ul class=\"list-inline\">
            <li class=\"list-inline-item\">
              <img src=\"https://cdn.pixabay.com/photo/2016/11/08/15/21/user-1808597_960_720.png\" class=\"rounded-circle\" width=\"20px\"> <span>by</span> <span class=\"text-info\">{{ post.getUser().getUserName() }}</span>
            </li>
            <li class=\"list-inline-item\">
              <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> <span>{{ post.getPostedAt()|date('F jS \\\\a\\\\t g:ia') }}</span>
            </li>
            <li class=\"list-inline-item\">
              <i class=\"fa fa-comment\" aria-hidden=\"true\"></i> <span class=\"text-info\">{{ post.getCommentsCount }}</span>
            </li>
          </ul>
      </div>
    </div>
  </div>
</div>
<hr>
<form action=\"{{ path('newcomment') }}\" method=\"post\" id=\"comment\">
  <div class=\"form-group\">
    <textarea class=\"form-control\" name=\"comment\" placeholder=\"Write a comment ...\" rows=\"3\"></textarea><br>
    <input type=\"text\" hidden=\"\" name=\"postid\" value=\"{{ post.getId() }}\">
    <button class=\"btn btn-primary\" type=\"submit\">Submit</button>
  </div>
</form>
{% for comment in post.getComments() %}
<hr>
<div class=\"col-lg-12 col-sm-12 col-12\">
  <div class=\"row\">
    <div class=\"col-lg-12\">
      <p>
        {{ comment.getCommentText() }}
      </p>
    </div>
  </div>
  <div class=\"row post-detail\">
    <div class=\"col-lg-12 col-sm-12 col-12\">
        <ul class=\"list-inline\">
          <li class=\"list-inline-item\">
            <img src=\"https://dummyimage.com/20x20/a8a1a8/0f0f12\" class=\"rounded-circle\" width=\"20px\"> <span class=\"text-info\">{{comment.getUser().getUsername()}}</span>
          </li>
          <li class=\"list-inline-item\">
            <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> <span>{{ comment.getPostedAt()|date('F jS \\\\a\\\\t g:ia') }}</span>
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
