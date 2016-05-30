<?php

/* BloggerBlogBundle:Page:about.html.twig */
class __TwigTemplate_023cd918f3b44c5d86300244817115812d3c1f8bc08a4beaca63b0f98837b2bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Page:about.html.twig", 2);
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
        $__internal_81ba8bde809e2f1565c427aaeb7358abc9cdc877939ee8a009f9883fb0fcca34 = $this->env->getExtension("native_profiler");
        $__internal_81ba8bde809e2f1565c427aaeb7358abc9cdc877939ee8a009f9883fb0fcca34->enter($__internal_81ba8bde809e2f1565c427aaeb7358abc9cdc877939ee8a009f9883fb0fcca34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81ba8bde809e2f1565c427aaeb7358abc9cdc877939ee8a009f9883fb0fcca34->leave($__internal_81ba8bde809e2f1565c427aaeb7358abc9cdc877939ee8a009f9883fb0fcca34_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_b43098d2f568845ebc66b1a73e710018f273137d52127d2053ef74b50aee19ff = $this->env->getExtension("native_profiler");
        $__internal_b43098d2f568845ebc66b1a73e710018f273137d52127d2053ef74b50aee19ff->enter($__internal_b43098d2f568845ebc66b1a73e710018f273137d52127d2053ef74b50aee19ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "About";
        
        $__internal_b43098d2f568845ebc66b1a73e710018f273137d52127d2053ef74b50aee19ff->leave($__internal_b43098d2f568845ebc66b1a73e710018f273137d52127d2053ef74b50aee19ff_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7ab4dfb54f4a49b87cdc26df268a2b6da9d368d541174d566b9d210770bf8e9 = $this->env->getExtension("native_profiler");
        $__internal_b7ab4dfb54f4a49b87cdc26df268a2b6da9d368d541174d566b9d210770bf8e9->enter($__internal_b7ab4dfb54f4a49b87cdc26df268a2b6da9d368d541174d566b9d210770bf8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>Despre blogul meu</h1>
    </header>
    <article>
        <p>Donec imperdiet ante sed diam consequat et dictum erat faucibus. Aliquam sit
        amet vehicula leo. Morbi urna dui, tempor ac posuere et, rutrum at dui.
        Curabitur neque quam, ultricies ut imperdiet id, ornare varius arcu. Ut congue
        urna sit amet tellus malesuada nec elementum risus molestie. Donec gravida
        tellus sed tortor adipiscing fringilla. Donec nulla mauris, mollis egestas
        condimentum laoreet, lacinia vel lorem. Morbi vitae justo sit amet felis
        vehicula commodo a placerat lacus. Mauris at est elit, nec vehicula urna. Duis a
        lacus nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
        posuere cubilia Curae.</p>
    </article>
";
        
        $__internal_b7ab4dfb54f4a49b87cdc26df268a2b6da9d368d541174d566b9d210770bf8e9->leave($__internal_b7ab4dfb54f4a49b87cdc26df268a2b6da9d368d541174d566b9d210770bf8e9_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }
}
/* {# src/Blogger/BlogBundle/Resources/views/Page/about.html.twig #}*/
/* {% extends 'BloggerBlogBundle::layout.html.twig' %}*/
/* */
/* {% block title %}About{% endblock%}*/
/* */
/* {% block body %}*/
/*     <header>*/
/*         <h1>Despre blogul meu</h1>*/
/*     </header>*/
/*     <article>*/
/*         <p>Donec imperdiet ante sed diam consequat et dictum erat faucibus. Aliquam sit*/
/*         amet vehicula leo. Morbi urna dui, tempor ac posuere et, rutrum at dui.*/
/*         Curabitur neque quam, ultricies ut imperdiet id, ornare varius arcu. Ut congue*/
/*         urna sit amet tellus malesuada nec elementum risus molestie. Donec gravida*/
/*         tellus sed tortor adipiscing fringilla. Donec nulla mauris, mollis egestas*/
/*         condimentum laoreet, lacinia vel lorem. Morbi vitae justo sit amet felis*/
/*         vehicula commodo a placerat lacus. Mauris at est elit, nec vehicula urna. Duis a*/
/*         lacus nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices*/
/*         posuere cubilia Curae.</p>*/
/*     </article>*/
/* {% endblock %}*/
/* */
