<?php

/* BloggerBlogBundle::layout.html.twig */
class __TwigTemplate_67b47c4dcfb42e3b33a30a53f6c6f15e3164775fcdf2ef29eeec119b07a8f6d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "BloggerBlogBundle::layout.html.twig", 2);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6df8ef1620338fb7a42a443123ab470c3026ed3346f6c6b1b7c0eff66e6f7b6 = $this->env->getExtension("native_profiler");
        $__internal_a6df8ef1620338fb7a42a443123ab470c3026ed3346f6c6b1b7c0eff66e6f7b6->enter($__internal_a6df8ef1620338fb7a42a443123ab470c3026ed3346f6c6b1b7c0eff66e6f7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6df8ef1620338fb7a42a443123ab470c3026ed3346f6c6b1b7c0eff66e6f7b6->leave($__internal_a6df8ef1620338fb7a42a443123ab470c3026ed3346f6c6b1b7c0eff66e6f7b6_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fba6540c1373aac477a3f39af3a83af14e16a7134629220e9279ee7a6d9571fe = $this->env->getExtension("native_profiler");
        $__internal_fba6540c1373aac477a3f39af3a83af14e16a7134629220e9279ee7a6d9571fe->enter($__internal_fba6540c1373aac477a3f39af3a83af14e16a7134629220e9279ee7a6d9571fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    ";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b41c622_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b41c622_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/blogger_part_1_blog_1.css");
            // line 12
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
\t";
            // asset "b41c622_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b41c622_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/blogger_part_1_sidebar_2.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
\t";
        } else {
            // asset "b41c622"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b41c622") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/blogger.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
\t";
        }
        unset($context["asset_url"]);
        // line 14
        echo "
";
        
        $__internal_fba6540c1373aac477a3f39af3a83af14e16a7134629220e9279ee7a6d9571fe->leave($__internal_fba6540c1373aac477a3f39af3a83af14e16a7134629220e9279ee7a6d9571fe_prof);

    }

    // line 17
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_f9d0a3d6c27f4328c51d8ba5bae1bbb9ed575c9589b72b4d5e71cca30675ede5 = $this->env->getExtension("native_profiler");
        $__internal_f9d0a3d6c27f4328c51d8ba5bae1bbb9ed575c9589b72b4d5e71cca30675ede5->enter($__internal_f9d0a3d6c27f4328c51d8ba5bae1bbb9ed575c9589b72b4d5e71cca30675ede5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("BloggerBlogBundle:Page:sidebar"), array());
        
        $__internal_f9d0a3d6c27f4328c51d8ba5bae1bbb9ed575c9589b72b4d5e71cca30675ede5->leave($__internal_f9d0a3d6c27f4328c51d8ba5bae1bbb9ed575c9589b72b4d5e71cca30675ede5_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 18,  79 => 17,  71 => 14,  51 => 12,  47 => 7,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* {# src/Blogger/BlogBundle/Resources/views/layout.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent () }}*/
/* */
/*     {% stylesheets*/
/*     '@BloggerBlogBundle/Resources/public/css/*'*/
/*     output='css/blogger.css'*/
/*     filter='yui_css'*/
/* 	%}*/
/*     <link href="{{ asset_url }}" rel="stylesheet" media="screen" />*/
/* 	{% endstylesheets %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     {% render controller('BloggerBlogBundle:Page:sidebar') %}*/
/* {% endblock %}*/
