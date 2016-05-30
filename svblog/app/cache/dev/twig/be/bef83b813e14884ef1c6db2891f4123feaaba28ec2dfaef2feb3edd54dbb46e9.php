<?php

/* BloggerBlogBundle:Blog:show.html.twig */
class __TwigTemplate_681a626a110e133d0a5a3edfca2447f9edfd152efba52d81e8ca39a9d6514b3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Blog:show.html.twig", 2);
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
        $__internal_2583425f38daa8121cd2417c8f5dc45ce0a2abf6b9d32690889958dde2e3962d = $this->env->getExtension("native_profiler");
        $__internal_2583425f38daa8121cd2417c8f5dc45ce0a2abf6b9d32690889958dde2e3962d->enter($__internal_2583425f38daa8121cd2417c8f5dc45ce0a2abf6b9d32690889958dde2e3962d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Blog:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2583425f38daa8121cd2417c8f5dc45ce0a2abf6b9d32690889958dde2e3962d->leave($__internal_2583425f38daa8121cd2417c8f5dc45ce0a2abf6b9d32690889958dde2e3962d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a480a06eca15b712620e8b04a48a62d8fede2b8a7192326b751b26f744fa887f = $this->env->getExtension("native_profiler");
        $__internal_a480a06eca15b712620e8b04a48a62d8fede2b8a7192326b751b26f744fa887f->enter($__internal_a480a06eca15b712620e8b04a48a62d8fede2b8a7192326b751b26f744fa887f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        
        $__internal_a480a06eca15b712620e8b04a48a62d8fede2b8a7192326b751b26f744fa887f->leave($__internal_a480a06eca15b712620e8b04a48a62d8fede2b8a7192326b751b26f744fa887f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_524fd846ec7a5a0a2592a1a23d6fe09ce75a8c9255a7e4dcbe3520432050148c = $this->env->getExtension("native_profiler");
        $__internal_524fd846ec7a5a0a2592a1a23d6fe09ce75a8c9255a7e4dcbe3520432050148c->enter($__internal_524fd846ec7a5a0a2592a1a23d6fe09ce75a8c9255a7e4dcbe3520432050148c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <article class=\"blog\">
        <header>
            <div class=\"date\"><time datetime=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created", array()), "c"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created", array()), "l, F j, Y"), "html", null, true);
        echo "</time></div>
            <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        echo "</h2>
        </header>
        <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "images/", 1 => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "image", array())))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        echo " image not found\" class=\"large\" />
        <div>
            <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "blog", array()), "html", null, true);
        echo "</p>
        </div>
    </article>
\t
\t<section class=\"comments\" id=\"comments\">
        <section class=\"previous-comments\">
            <h3>Comentarii</h3>
            ";
        // line 21
        $this->loadTemplate("BloggerBlogBundle:Comment:index.html.twig", "BloggerBlogBundle:Blog:show.html.twig", 21)->display(array_merge($context, array("comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        // line 22
        echo "        </section>
\t\t
\t\t<h3>Adauga un comentariu</h3>
        ";
        // line 25
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("BloggerBlogBundle:Comment:new", array("blog_id" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "id", array()))));
        echo "
    </section>

";
        
        $__internal_524fd846ec7a5a0a2592a1a23d6fe09ce75a8c9255a7e4dcbe3520432050148c->leave($__internal_524fd846ec7a5a0a2592a1a23d6fe09ce75a8c9255a7e4dcbe3520432050148c_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Blog:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 25,  87 => 22,  85 => 21,  75 => 14,  68 => 12,  63 => 10,  57 => 9,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }
}
/* {# src/Blogger/BlogBundle/Resouces/views/Blog/show.html.twig #}*/
/* {% extends 'BloggerBlogBundle::layout.html.twig' %}*/
/* */
/* {% block title %}{{ blog.title }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <article class="blog">*/
/*         <header>*/
/*             <div class="date"><time datetime="{{ blog.created|date('c') }}">{{ blog.created|date('l, F j, Y') }}</time></div>*/
/*             <h2>{{ blog.title }}</h2>*/
/*         </header>*/
/*         <img src="{{ asset(['images/', blog.image]|join) }}" alt="{{ blog.title }} image not found" class="large" />*/
/*         <div>*/
/*             <p>{{ blog.blog }}</p>*/
/*         </div>*/
/*     </article>*/
/* 	*/
/* 	<section class="comments" id="comments">*/
/*         <section class="previous-comments">*/
/*             <h3>Comentarii</h3>*/
/*             {% include 'BloggerBlogBundle:Comment:index.html.twig' with { 'comments': comments } %}*/
/*         </section>*/
/* 		*/
/* 		<h3>Adauga un comentariu</h3>*/
/*         {{ render(controller( 'BloggerBlogBundle:Comment:new', { 'blog_id': blog.id } )) }}*/
/*     </section>*/
/* */
/* {% endblock %}*/
/* */
