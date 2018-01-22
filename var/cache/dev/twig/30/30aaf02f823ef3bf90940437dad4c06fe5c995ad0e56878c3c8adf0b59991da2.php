<?php

/* base.html.twig */
class __TwigTemplate_1bdbe4a5e7ffcb0fa4d78cd34e44d26c7fe5da24e6582d3b4b4bf4f79baa38d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee07a2a7a2828628ef6167980bd1c6695755edec7221343d844a6f0cf532a3ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee07a2a7a2828628ef6167980bd1c6695755edec7221343d844a6f0cf532a3ea->enter($__internal_ee07a2a7a2828628ef6167980bd1c6695755edec7221343d844a6f0cf532a3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a5532eb5f2f8797daaff5c08e1cdde17bb207c3c56fd86cea92841cd0a2ca83b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5532eb5f2f8797daaff5c08e1cdde17bb207c3c56fd86cea92841cd0a2ca83b->enter($__internal_a5532eb5f2f8797daaff5c08e1cdde17bb207c3c56fd86cea92841cd0a2ca83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
        <link href=\"https://fonts.googleapis.com/css?family=Electrolize\" rel=\"stylesheet\">
        <style>
          body {
            font-family: 'electrolize';
          }
          .navbar-brand {
            color: #00d431 !important;
          }
          #navbarSupportedContent > ul > li > a {
            color: white;
          }
          .no-under:hover {
            text-decoration: none !important;
          }
          .btn-link,
          .btn-link:hover {
            text-decoration: none !important;
            color: black;
          }
          .no-pad {
            padding-right: 0px; padding-left: 0px;
          }
          .upvote-count {
            color: #17a2b8;
          }
          .article-panel {
            border: solid 1px #dddddd;
            margin: 5px;
            padding:3px;
            border-radius: 5px;
          }
          .unlike, .active-default-btn {
            background: #afafaf;
            color: white;
          }
        </style>
    </head>
    <body>
        ";
        // line 48
        $this->loadTemplate("default/navbar.html.twig", "base.html.twig", 48)->display($context);
        // line 49
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "        <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
        <script src=\"https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js\"></script>
        <script>


          \$(document).on('click', '.like', function(){
            var id = \$(this).attr('data-id');
            var self = this;
            \$.ajax({
              type: 'POST',
              url: '";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("upvotepost");
        echo "',
              data: {
                id: id
              },
              success: function(data, textStatus, xhrStatus){
                if(xhrStatus.status == 200){
                  var newCount = parseInt(\$('#upvote-'+id).text());
                  newCount++;
                  \$('#upvote-'+id).html(newCount);
                  \$(self).removeClass('like').addClass('unlike');
                }
              }
            });
          });

          \$(document).on('click', '.unlike', function(){
            var id = \$(this).attr('data-id');
            var user_id = \$(this).attr('data-userid');
            var post_id = \$(this).attr('data-postid');
            var self = this;
            \$.ajax({
              type: 'POST',
              url: '";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("downvotepost");
        echo "',
              data: {
                user_id: user_id,
                post_id: post_id

              },
              success: function(data, textStatus, xhrStatus){
                if (xhrStatus.status == 200) {
                  var newCount = parseInt(\$('#upvote-'+id).text());
                  newCount--;
                  \$('#upvote-'+id).html(newCount);
                  \$(self).removeClass('unlike').addClass('like');
                }
              }
            });
          });

          \$('.container').infiniteScroll({
            path: '/page/";
        // line 103
        echo "{{#}}";
        echo "',
            append: '.post',
            button: '.view-more-button',
            scrollThreshold: false,
            status: '.page-load-status',
          });

        </script>
    </body>
</html>
";
        
        $__internal_ee07a2a7a2828628ef6167980bd1c6695755edec7221343d844a6f0cf532a3ea->leave($__internal_ee07a2a7a2828628ef6167980bd1c6695755edec7221343d844a6f0cf532a3ea_prof);

        
        $__internal_a5532eb5f2f8797daaff5c08e1cdde17bb207c3c56fd86cea92841cd0a2ca83b->leave($__internal_a5532eb5f2f8797daaff5c08e1cdde17bb207c3c56fd86cea92841cd0a2ca83b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7073e5061ef9e1c2a4a2cc51bf32b45c6ac49c4c09177eca7174a473c27ae04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7073e5061ef9e1c2a4a2cc51bf32b45c6ac49c4c09177eca7174a473c27ae04->enter($__internal_f7073e5061ef9e1c2a4a2cc51bf32b45c6ac49c4c09177eca7174a473c27ae04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c4ce42f6e64b1fc2cf6c7591b149328a763e1e2ec6bc902ad559795dd52d65a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ce42f6e64b1fc2cf6c7591b149328a763e1e2ec6bc902ad559795dd52d65a5->enter($__internal_c4ce42f6e64b1fc2cf6c7591b149328a763e1e2ec6bc902ad559795dd52d65a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c4ce42f6e64b1fc2cf6c7591b149328a763e1e2ec6bc902ad559795dd52d65a5->leave($__internal_c4ce42f6e64b1fc2cf6c7591b149328a763e1e2ec6bc902ad559795dd52d65a5_prof);

        
        $__internal_f7073e5061ef9e1c2a4a2cc51bf32b45c6ac49c4c09177eca7174a473c27ae04->leave($__internal_f7073e5061ef9e1c2a4a2cc51bf32b45c6ac49c4c09177eca7174a473c27ae04_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_88a73b7d5ad3c17e67f2b2d5283d75e6e6f107245d613833d4ac74ecc2d22a73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88a73b7d5ad3c17e67f2b2d5283d75e6e6f107245d613833d4ac74ecc2d22a73->enter($__internal_88a73b7d5ad3c17e67f2b2d5283d75e6e6f107245d613833d4ac74ecc2d22a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_650ff5a6f65e8612a35f142ad55a4e5a1af7fb05daaa431bc57eeb47e92537a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_650ff5a6f65e8612a35f142ad55a4e5a1af7fb05daaa431bc57eeb47e92537a0->enter($__internal_650ff5a6f65e8612a35f142ad55a4e5a1af7fb05daaa431bc57eeb47e92537a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_650ff5a6f65e8612a35f142ad55a4e5a1af7fb05daaa431bc57eeb47e92537a0->leave($__internal_650ff5a6f65e8612a35f142ad55a4e5a1af7fb05daaa431bc57eeb47e92537a0_prof);

        
        $__internal_88a73b7d5ad3c17e67f2b2d5283d75e6e6f107245d613833d4ac74ecc2d22a73->leave($__internal_88a73b7d5ad3c17e67f2b2d5283d75e6e6f107245d613833d4ac74ecc2d22a73_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_4569352119c35143aef8ebfc56fa8ecd973df38d62487fd2cb4800edf8637f29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4569352119c35143aef8ebfc56fa8ecd973df38d62487fd2cb4800edf8637f29->enter($__internal_4569352119c35143aef8ebfc56fa8ecd973df38d62487fd2cb4800edf8637f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8730621cc3ee13c32e43e703625e612dd6aeb79096a2b61a6fd4b433d5b45203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8730621cc3ee13c32e43e703625e612dd6aeb79096a2b61a6fd4b433d5b45203->enter($__internal_8730621cc3ee13c32e43e703625e612dd6aeb79096a2b61a6fd4b433d5b45203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8730621cc3ee13c32e43e703625e612dd6aeb79096a2b61a6fd4b433d5b45203->leave($__internal_8730621cc3ee13c32e43e703625e612dd6aeb79096a2b61a6fd4b433d5b45203_prof);

        
        $__internal_4569352119c35143aef8ebfc56fa8ecd973df38d62487fd2cb4800edf8637f29->leave($__internal_4569352119c35143aef8ebfc56fa8ecd973df38d62487fd2cb4800edf8637f29_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b167ca30eb6eacbec5466016159e786e3f244bf050c9a3d6b8af093f6f10c8fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b167ca30eb6eacbec5466016159e786e3f244bf050c9a3d6b8af093f6f10c8fe->enter($__internal_b167ca30eb6eacbec5466016159e786e3f244bf050c9a3d6b8af093f6f10c8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8c0958e572b6bc00fd0d89c82fc3827e4dc9b7f8d03a415a53d76759d72718cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c0958e572b6bc00fd0d89c82fc3827e4dc9b7f8d03a415a53d76759d72718cd->enter($__internal_8c0958e572b6bc00fd0d89c82fc3827e4dc9b7f8d03a415a53d76759d72718cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8c0958e572b6bc00fd0d89c82fc3827e4dc9b7f8d03a415a53d76759d72718cd->leave($__internal_8c0958e572b6bc00fd0d89c82fc3827e4dc9b7f8d03a415a53d76759d72718cd_prof);

        
        $__internal_b167ca30eb6eacbec5466016159e786e3f244bf050c9a3d6b8af093f6f10c8fe->leave($__internal_b167ca30eb6eacbec5466016159e786e3f244bf050c9a3d6b8af093f6f10c8fe_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 50,  210 => 49,  193 => 6,  175 => 5,  154 => 103,  133 => 85,  108 => 63,  94 => 51,  91 => 50,  88 => 49,  86 => 48,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
        <link href=\"https://fonts.googleapis.com/css?family=Electrolize\" rel=\"stylesheet\">
        <style>
          body {
            font-family: 'electrolize';
          }
          .navbar-brand {
            color: #00d431 !important;
          }
          #navbarSupportedContent > ul > li > a {
            color: white;
          }
          .no-under:hover {
            text-decoration: none !important;
          }
          .btn-link,
          .btn-link:hover {
            text-decoration: none !important;
            color: black;
          }
          .no-pad {
            padding-right: 0px; padding-left: 0px;
          }
          .upvote-count {
            color: #17a2b8;
          }
          .article-panel {
            border: solid 1px #dddddd;
            margin: 5px;
            padding:3px;
            border-radius: 5px;
          }
          .unlike, .active-default-btn {
            background: #afafaf;
            color: white;
          }
        </style>
    </head>
    <body>
        {% include 'default/navbar.html.twig' %}
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
        <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
        <script src=\"https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js\"></script>
        <script>


          \$(document).on('click', '.like', function(){
            var id = \$(this).attr('data-id');
            var self = this;
            \$.ajax({
              type: 'POST',
              url: '{{ path(('upvotepost')) }}',
              data: {
                id: id
              },
              success: function(data, textStatus, xhrStatus){
                if(xhrStatus.status == 200){
                  var newCount = parseInt(\$('#upvote-'+id).text());
                  newCount++;
                  \$('#upvote-'+id).html(newCount);
                  \$(self).removeClass('like').addClass('unlike');
                }
              }
            });
          });

          \$(document).on('click', '.unlike', function(){
            var id = \$(this).attr('data-id');
            var user_id = \$(this).attr('data-userid');
            var post_id = \$(this).attr('data-postid');
            var self = this;
            \$.ajax({
              type: 'POST',
              url: '{{ path(('downvotepost')) }}',
              data: {
                user_id: user_id,
                post_id: post_id

              },
              success: function(data, textStatus, xhrStatus){
                if (xhrStatus.status == 200) {
                  var newCount = parseInt(\$('#upvote-'+id).text());
                  newCount--;
                  \$('#upvote-'+id).html(newCount);
                  \$(self).removeClass('unlike').addClass('like');
                }
              }
            });
          });

          \$('.container').infiniteScroll({
            path: '/page/{{ '{{#}}' }}',
            append: '.post',
            button: '.view-more-button',
            scrollThreshold: false,
            status: '.page-load-status',
          });

        </script>
    </body>
</html>
", "base.html.twig", "/home/karim/Desktop/sandbox/hacker-news/app/Resources/views/base.html.twig");
    }
}
