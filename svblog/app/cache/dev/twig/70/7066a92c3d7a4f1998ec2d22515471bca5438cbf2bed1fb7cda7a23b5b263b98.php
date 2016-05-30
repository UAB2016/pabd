<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_aecd56f505bd174dd690a264a8c757bae6d27c148383b2c842d3a09fb1319577 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_fd86a4d381cdcb878e2dccbb149f486115ba42c2be52b25c3dff875207a1a243 = $this->env->getExtension("native_profiler");
        $__internal_fd86a4d381cdcb878e2dccbb149f486115ba42c2be52b25c3dff875207a1a243->enter($__internal_fd86a4d381cdcb878e2dccbb149f486115ba42c2be52b25c3dff875207a1a243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd86a4d381cdcb878e2dccbb149f486115ba42c2be52b25c3dff875207a1a243->leave($__internal_fd86a4d381cdcb878e2dccbb149f486115ba42c2be52b25c3dff875207a1a243_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_734c6a11147d6684657e68dc1fad253034db74c9f31fa494f6c7749cf940369c = $this->env->getExtension("native_profiler");
        $__internal_734c6a11147d6684657e68dc1fad253034db74c9f31fa494f6c7749cf940369c->enter($__internal_734c6a11147d6684657e68dc1fad253034db74c9f31fa494f6c7749cf940369c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_734c6a11147d6684657e68dc1fad253034db74c9f31fa494f6c7749cf940369c->leave($__internal_734c6a11147d6684657e68dc1fad253034db74c9f31fa494f6c7749cf940369c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_67def8a37118b6cc2f016a9d9a8361fc91e6681f061dec56fa32603557d41ecd = $this->env->getExtension("native_profiler");
        $__internal_67def8a37118b6cc2f016a9d9a8361fc91e6681f061dec56fa32603557d41ecd->enter($__internal_67def8a37118b6cc2f016a9d9a8361fc91e6681f061dec56fa32603557d41ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_67def8a37118b6cc2f016a9d9a8361fc91e6681f061dec56fa32603557d41ecd->leave($__internal_67def8a37118b6cc2f016a9d9a8361fc91e6681f061dec56fa32603557d41ecd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5a4b89d5f7d1afe5cff7eadb38d2776437e0c68dd7fdbc5aad6cabb0b6acf55b = $this->env->getExtension("native_profiler");
        $__internal_5a4b89d5f7d1afe5cff7eadb38d2776437e0c68dd7fdbc5aad6cabb0b6acf55b->enter($__internal_5a4b89d5f7d1afe5cff7eadb38d2776437e0c68dd7fdbc5aad6cabb0b6acf55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5a4b89d5f7d1afe5cff7eadb38d2776437e0c68dd7fdbc5aad6cabb0b6acf55b->leave($__internal_5a4b89d5f7d1afe5cff7eadb38d2776437e0c68dd7fdbc5aad6cabb0b6acf55b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
