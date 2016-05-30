<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cd704fc003a3c09ec4fdc22fbb5c1d7e67357cd4e06ea84bc12b7a4d9a9d8c88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3073ba109a7c108389a3b53d05f6ee158d882a09b1208cb5752222ace44edc7d = $this->env->getExtension("native_profiler");
        $__internal_3073ba109a7c108389a3b53d05f6ee158d882a09b1208cb5752222ace44edc7d->enter($__internal_3073ba109a7c108389a3b53d05f6ee158d882a09b1208cb5752222ace44edc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3073ba109a7c108389a3b53d05f6ee158d882a09b1208cb5752222ace44edc7d->leave($__internal_3073ba109a7c108389a3b53d05f6ee158d882a09b1208cb5752222ace44edc7d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6a7bce56eafe98e5cdac734a0dc327a03f184c77160f0be95257027f0e169709 = $this->env->getExtension("native_profiler");
        $__internal_6a7bce56eafe98e5cdac734a0dc327a03f184c77160f0be95257027f0e169709->enter($__internal_6a7bce56eafe98e5cdac734a0dc327a03f184c77160f0be95257027f0e169709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6a7bce56eafe98e5cdac734a0dc327a03f184c77160f0be95257027f0e169709->leave($__internal_6a7bce56eafe98e5cdac734a0dc327a03f184c77160f0be95257027f0e169709_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_95b1813b123c5c0ca2627a4845863e67ba20ed03092ae6b2b60f9ccf7fd8338b = $this->env->getExtension("native_profiler");
        $__internal_95b1813b123c5c0ca2627a4845863e67ba20ed03092ae6b2b60f9ccf7fd8338b->enter($__internal_95b1813b123c5c0ca2627a4845863e67ba20ed03092ae6b2b60f9ccf7fd8338b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_95b1813b123c5c0ca2627a4845863e67ba20ed03092ae6b2b60f9ccf7fd8338b->leave($__internal_95b1813b123c5c0ca2627a4845863e67ba20ed03092ae6b2b60f9ccf7fd8338b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4cc4398c9f4d5592fc4aa5d1be1621bca5be98599249e4ffc0a850626b5bd833 = $this->env->getExtension("native_profiler");
        $__internal_4cc4398c9f4d5592fc4aa5d1be1621bca5be98599249e4ffc0a850626b5bd833->enter($__internal_4cc4398c9f4d5592fc4aa5d1be1621bca5be98599249e4ffc0a850626b5bd833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4cc4398c9f4d5592fc4aa5d1be1621bca5be98599249e4ffc0a850626b5bd833->leave($__internal_4cc4398c9f4d5592fc4aa5d1be1621bca5be98599249e4ffc0a850626b5bd833_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
