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
        $__internal_1cb3f02089ca0df8c903339f788024f3577ad113cfe060e021099952b0757f6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cb3f02089ca0df8c903339f788024f3577ad113cfe060e021099952b0757f6a->enter($__internal_1cb3f02089ca0df8c903339f788024f3577ad113cfe060e021099952b0757f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/showpost.html.twig"));

        $__internal_568cd02b8c65ac6bcabef4ae63f1bbeb201cc2e5ec96e88b67c45617a070fb56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568cd02b8c65ac6bcabef4ae63f1bbeb201cc2e5ec96e88b67c45617a070fb56->enter($__internal_568cd02b8c65ac6bcabef4ae63f1bbeb201cc2e5ec96e88b67c45617a070fb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/showpost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cb3f02089ca0df8c903339f788024f3577ad113cfe060e021099952b0757f6a->leave($__internal_1cb3f02089ca0df8c903339f788024f3577ad113cfe060e021099952b0757f6a_prof);

        
        $__internal_568cd02b8c65ac6bcabef4ae63f1bbeb201cc2e5ec96e88b67c45617a070fb56->leave($__internal_568cd02b8c65ac6bcabef4ae63f1bbeb201cc2e5ec96e88b67c45617a070fb56_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c895f079f797eee7953ad6086a73e696630af9363261a5bb29e02dd7c56ab21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c895f079f797eee7953ad6086a73e696630af9363261a5bb29e02dd7c56ab21->enter($__internal_1c895f079f797eee7953ad6086a73e696630af9363261a5bb29e02dd7c56ab21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_97e963bd668bb950acaa4b5e825e2fc01b5cc9e3c5a551887a55c8278a60ffa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e963bd668bb950acaa4b5e825e2fc01b5cc9e3c5a551887a55c8278a60ffa8->enter($__internal_97e963bd668bb950acaa4b5e825e2fc01b5cc9e3c5a551887a55c8278a60ffa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Hacker News ";
        
        $__internal_97e963bd668bb950acaa4b5e825e2fc01b5cc9e3c5a551887a55c8278a60ffa8->leave($__internal_97e963bd668bb950acaa4b5e825e2fc01b5cc9e3c5a551887a55c8278a60ffa8_prof);

        
        $__internal_1c895f079f797eee7953ad6086a73e696630af9363261a5bb29e02dd7c56ab21->leave($__internal_1c895f079f797eee7953ad6086a73e696630af9363261a5bb29e02dd7c56ab21_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f73dff0b9bae3b9ba04ade54533c016071ef132d92cf80d53e313adf04bc1d3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f73dff0b9bae3b9ba04ade54533c016071ef132d92cf80d53e313adf04bc1d3c->enter($__internal_f73dff0b9bae3b9ba04ade54533c016071ef132d92cf80d53e313adf04bc1d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ddcf5bd07ec72dfbec1d6b18bb3f5a61fb7f282bb33b14dfc8f54bc93ce96bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddcf5bd07ec72dfbec1d6b18bb3f5a61fb7f282bb33b14dfc8f54bc93ce96bb6->enter($__internal_ddcf5bd07ec72dfbec1d6b18bb3f5a61fb7f282bb33b14dfc8f54bc93ce96bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
              <img src=\"https://www.my-opinion.de/online_en/images/icons/profil.png\" class=\"rounded-circle\" width=\"20px\"> <span>by</span> <span class=\"text-info\">";
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
            <img src=\"https://www.my-opinion.de/online_en/images/icons/profil.png\" class=\"rounded-circle\" width=\"20px\"> <span class=\"text-info\">";
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

";
        
        $__internal_ddcf5bd07ec72dfbec1d6b18bb3f5a61fb7f282bb33b14dfc8f54bc93ce96bb6->leave($__internal_ddcf5bd07ec72dfbec1d6b18bb3f5a61fb7f282bb33b14dfc8f54bc93ce96bb6_prof);

        
        $__internal_f73dff0b9bae3b9ba04ade54533c016071ef132d92cf80d53e313adf04bc1d3c->leave($__internal_f73dff0b9bae3b9ba04ade54533c016071ef132d92cf80d53e313adf04bc1d3c_prof);

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
              <img src=\"https://www.my-opinion.de/online_en/images/icons/profil.png\" class=\"rounded-circle\" width=\"20px\"> <span>by</span> <span class=\"text-info\">{{ post.getUser().getUserName() }}</span>
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
            <img src=\"https://www.my-opinion.de/online_en/images/icons/profil.png\" class=\"rounded-circle\" width=\"20px\"> <span class=\"text-info\">{{comment.getUser().getUsername()}}</span>
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

{% endblock %}
", "default/showpost.html.twig", "/home/karim/Desktop/sandbox/hacker-news/app/Resources/views/default/showpost.html.twig");
    }
}
