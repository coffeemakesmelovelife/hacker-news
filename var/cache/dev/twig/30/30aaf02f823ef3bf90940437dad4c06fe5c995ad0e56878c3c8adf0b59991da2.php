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
        $__internal_2fc80f8768b0350880ea850a28b4633bca57b0c8e6c8969a8fe862cc1ca7d969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fc80f8768b0350880ea850a28b4633bca57b0c8e6c8969a8fe862cc1ca7d969->enter($__internal_2fc80f8768b0350880ea850a28b4633bca57b0c8e6c8969a8fe862cc1ca7d969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5a38b7f2f3146b6818a689469d2e59ed455302078b1e89d4c3650bce3213a425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a38b7f2f3146b6818a689469d2e59ed455302078b1e89d4c3650bce3213a425->enter($__internal_5a38b7f2f3146b6818a689469d2e59ed455302078b1e89d4c3650bce3213a425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <script>


          \$(document).on('click', '.like', function(){
            var id = \$(this).attr('data-id');
            var self = this;
            \$.ajax({
              type: 'POST',
              url: '";
        // line 62
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
        // line 84
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

        </script>
    </body>
</html>
";
        
        $__internal_2fc80f8768b0350880ea850a28b4633bca57b0c8e6c8969a8fe862cc1ca7d969->leave($__internal_2fc80f8768b0350880ea850a28b4633bca57b0c8e6c8969a8fe862cc1ca7d969_prof);

        
        $__internal_5a38b7f2f3146b6818a689469d2e59ed455302078b1e89d4c3650bce3213a425->leave($__internal_5a38b7f2f3146b6818a689469d2e59ed455302078b1e89d4c3650bce3213a425_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_11a83467707d94f9f9272dcf4ffa0f7c1c9b54e082b60490d01220b1dc61b997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11a83467707d94f9f9272dcf4ffa0f7c1c9b54e082b60490d01220b1dc61b997->enter($__internal_11a83467707d94f9f9272dcf4ffa0f7c1c9b54e082b60490d01220b1dc61b997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_add372e9b0d44c9144debf021da7cde34cbbbb513abf2cf39a32de5c2dec3b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add372e9b0d44c9144debf021da7cde34cbbbb513abf2cf39a32de5c2dec3b17->enter($__internal_add372e9b0d44c9144debf021da7cde34cbbbb513abf2cf39a32de5c2dec3b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_add372e9b0d44c9144debf021da7cde34cbbbb513abf2cf39a32de5c2dec3b17->leave($__internal_add372e9b0d44c9144debf021da7cde34cbbbb513abf2cf39a32de5c2dec3b17_prof);

        
        $__internal_11a83467707d94f9f9272dcf4ffa0f7c1c9b54e082b60490d01220b1dc61b997->leave($__internal_11a83467707d94f9f9272dcf4ffa0f7c1c9b54e082b60490d01220b1dc61b997_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9d97b14d3833c0dde751afd028f38e7a359d736437c877df4027dc020c91a7cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d97b14d3833c0dde751afd028f38e7a359d736437c877df4027dc020c91a7cb->enter($__internal_9d97b14d3833c0dde751afd028f38e7a359d736437c877df4027dc020c91a7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0cd9478a0944e3c7a1326cbbff7b9116497ea6939c0c2431010f83873d52c163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cd9478a0944e3c7a1326cbbff7b9116497ea6939c0c2431010f83873d52c163->enter($__internal_0cd9478a0944e3c7a1326cbbff7b9116497ea6939c0c2431010f83873d52c163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0cd9478a0944e3c7a1326cbbff7b9116497ea6939c0c2431010f83873d52c163->leave($__internal_0cd9478a0944e3c7a1326cbbff7b9116497ea6939c0c2431010f83873d52c163_prof);

        
        $__internal_9d97b14d3833c0dde751afd028f38e7a359d736437c877df4027dc020c91a7cb->leave($__internal_9d97b14d3833c0dde751afd028f38e7a359d736437c877df4027dc020c91a7cb_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb33220de6edfe2d79e86bd0996498defabe6a4a9fafcfa0c6f5728146ff463c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb33220de6edfe2d79e86bd0996498defabe6a4a9fafcfa0c6f5728146ff463c->enter($__internal_fb33220de6edfe2d79e86bd0996498defabe6a4a9fafcfa0c6f5728146ff463c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3eac7ff4b71638dcb879d2c9b7676de2a927d5305c38bb32f48f1fa6d2f941b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eac7ff4b71638dcb879d2c9b7676de2a927d5305c38bb32f48f1fa6d2f941b7->enter($__internal_3eac7ff4b71638dcb879d2c9b7676de2a927d5305c38bb32f48f1fa6d2f941b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3eac7ff4b71638dcb879d2c9b7676de2a927d5305c38bb32f48f1fa6d2f941b7->leave($__internal_3eac7ff4b71638dcb879d2c9b7676de2a927d5305c38bb32f48f1fa6d2f941b7_prof);

        
        $__internal_fb33220de6edfe2d79e86bd0996498defabe6a4a9fafcfa0c6f5728146ff463c->leave($__internal_fb33220de6edfe2d79e86bd0996498defabe6a4a9fafcfa0c6f5728146ff463c_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fc569d6192dbfe0bd767b3667082ecc7f766842b651578c3e1261fe3f7ad6c1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc569d6192dbfe0bd767b3667082ecc7f766842b651578c3e1261fe3f7ad6c1a->enter($__internal_fc569d6192dbfe0bd767b3667082ecc7f766842b651578c3e1261fe3f7ad6c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a1b995e50e4c43cb71692c450f8fb2b79e36cea81b541a42c9ddc8e5b650d5ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b995e50e4c43cb71692c450f8fb2b79e36cea81b541a42c9ddc8e5b650d5ec->enter($__internal_a1b995e50e4c43cb71692c450f8fb2b79e36cea81b541a42c9ddc8e5b650d5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a1b995e50e4c43cb71692c450f8fb2b79e36cea81b541a42c9ddc8e5b650d5ec->leave($__internal_a1b995e50e4c43cb71692c450f8fb2b79e36cea81b541a42c9ddc8e5b650d5ec_prof);

        
        $__internal_fc569d6192dbfe0bd767b3667082ecc7f766842b651578c3e1261fe3f7ad6c1a->leave($__internal_fc569d6192dbfe0bd767b3667082ecc7f766842b651578c3e1261fe3f7ad6c1a_prof);

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
        return array (  215 => 50,  198 => 49,  181 => 6,  163 => 5,  132 => 84,  107 => 62,  94 => 51,  91 => 50,  88 => 49,  86 => 48,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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

        </script>
    </body>
</html>
", "base.html.twig", "/home/karim/Desktop/sandbox/hacker-news/app/Resources/views/base.html.twig");
    }
}
