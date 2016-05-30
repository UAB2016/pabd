<?php

/* @BloggerBlog/layout.html.twig */
class __TwigTemplate_7fd99cc221b71013e926653deedb1ca6d8058613eb7be69226c8319df8af1bf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "@BloggerBlog/layout.html.twig", 2);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    ";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b41c622_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b41c622_0") : $this->env->getExtension('asset')->getAssetUrl("css/blogger_part_1_blog_1.css");
            // line 12
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
\t";
            // asset "b41c622_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b41c622_1") : $this->env->getExtension('asset')->getAssetUrl("css/blogger_part_1_sidebar_2.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
\t";
        } else {
            // asset "b41c622"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b41c622") : $this->env->getExtension('asset')->getAssetUrl("css/blogger.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
\t";
        }
        unset($context["asset_url"]);
        // line 14
        echo "
";
    }

    // line 17
    public function block_sidebar($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("BloggerBlogBundle:Page:sidebar"), array());
    }

    public function getTemplateName()
    {
        return "@BloggerBlog/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 18,  67 => 17,  62 => 14,  42 => 12,  38 => 7,  32 => 5,  29 => 4,  11 => 2,);
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
