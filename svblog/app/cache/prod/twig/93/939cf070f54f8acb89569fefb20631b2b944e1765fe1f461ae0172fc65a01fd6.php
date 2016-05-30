<?php

/* BloggerBlogBundle:Comment:create.html.twig */
class __TwigTemplate_be221cb683029f1c63c28e73e578298f1a42f8e081b5fc89317da1081105f4dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Comment:create.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Adauga un comentariu";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Adauga un comentariu pentru postarea \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "blog", array()), "title", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 7
        $this->loadTemplate("BloggerBlogBundle:Comment:form.html.twig", "BloggerBlogBundle:Comment:create.html.twig", 7)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : null))));
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Comment:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'BloggerBlogBundle::layout.html.twig' %}*/
/* */
/* {% block title %}Adauga un comentariu{% endblock%}*/
/* */
/* {% block body %}*/
/*     <h1>Adauga un comentariu pentru postarea "{{ comment.blog.title }}"</h1>*/
/*     {% include 'BloggerBlogBundle:Comment:form.html.twig' with { 'form': form } %}*/
/* {% endblock %}*/
/* */
