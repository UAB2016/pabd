<?php

/* BloggerBlogBundle:Comment:form.html.twig */
class __TwigTemplate_3074e638a86110d8e6fa8750371a6b3c84a540279638387d6c1b95e1b8fba12b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f9591d2aa11691185e11a4c2f2aafb67fbb3583c50e26cf28631b1848863c5a = $this->env->getExtension("native_profiler");
        $__internal_8f9591d2aa11691185e11a4c2f2aafb67fbb3583c50e26cf28631b1848863c5a->enter($__internal_8f9591d2aa11691185e11a4c2f2aafb67fbb3583c50e26cf28631b1848863c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Comment:form.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_comment_create", array("blog_id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "blog", array()), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo " class=\"blogger\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <p>
        <input type=\"submit\" value=\"Submit\">
    </p>
</form>";
        
        $__internal_8f9591d2aa11691185e11a4c2f2aafb67fbb3583c50e26cf28631b1848863c5a->leave($__internal_8f9591d2aa11691185e11a4c2f2aafb67fbb3583c50e26cf28631b1848863c5a_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Comment:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  25 => 3,  22 => 2,);
    }
}
/* {# src/Blogger/BlogBundle/Resources/views/Comment/form.html.twig #}*/
/* */
/* <form action="{{ path('BloggerBlogBundle_comment_create', { 'blog_id' : comment.blog.id } ) }}" method="post" {{ form_start(form) }} class="blogger">*/
/*     {{ form_widget(form) }}*/
/*     <p>*/
/*         <input type="submit" value="Submit">*/
/*     </p>*/
/* </form>*/
