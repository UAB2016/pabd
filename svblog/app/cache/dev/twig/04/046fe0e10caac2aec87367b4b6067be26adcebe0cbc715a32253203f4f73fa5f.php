<?php

/* ::base.html.twig */
class __TwigTemplate_3bed205db6660ad4e6115e6f0d6c9d757abc4d088487fd7485ca6f6d19b912fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_329f9cd89b2e376853cf3055f44a518ac1f2c0ed70ecd87ad2fa7fc57f52ab55 = $this->env->getExtension("native_profiler");
        $__internal_329f9cd89b2e376853cf3055f44a518ac1f2c0ed70ecd87ad2fa7fc57f52ab55->enter($__internal_329f9cd89b2e376853cf3055f44a518ac1f2c0ed70ecd87ad2fa7fc57f52ab55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - svblog</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 24
        $this->displayBlock('navigation', $context, $blocks);
        // line 33
        echo "                </div>

                <hgroup>
                    <h2>";
        // line 36
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 37
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 45
        $this->displayBlock('sidebar', $context, $blocks);
        // line 46
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 49
        $this->displayBlock('footer', $context, $blocks);
        // line 52
        echo "            </div>
        </section>

        ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "    </body>
</html>";
        
        $__internal_329f9cd89b2e376853cf3055f44a518ac1f2c0ed70ecd87ad2fa7fc57f52ab55->leave($__internal_329f9cd89b2e376853cf3055f44a518ac1f2c0ed70ecd87ad2fa7fc57f52ab55_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee7e6fcc61ce9a2c07eada45da547cb960fec22e449426f58f5740f9c36db920 = $this->env->getExtension("native_profiler");
        $__internal_ee7e6fcc61ce9a2c07eada45da547cb960fec22e449426f58f5740f9c36db920->enter($__internal_ee7e6fcc61ce9a2c07eada45da547cb960fec22e449426f58f5740f9c36db920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "blogul lui Sică";
        
        $__internal_ee7e6fcc61ce9a2c07eada45da547cb960fec22e449426f58f5740f9c36db920->leave($__internal_ee7e6fcc61ce9a2c07eada45da547cb960fec22e449426f58f5740f9c36db920_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8bc7e1d3dd617e1bb97dbaa32d11181e53473e0403a1b15ed705419af050f106 = $this->env->getExtension("native_profiler");
        $__internal_8bc7e1d3dd617e1bb97dbaa32d11181e53473e0403a1b15ed705419af050f106->enter($__internal_8bc7e1d3dd617e1bb97dbaa32d11181e53473e0403a1b15ed705419af050f106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            ";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "51c56cc_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_51c56cc_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/51c56cc_part_1_51c56cc_1.css");
            // line 14
            echo "\t\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
\t\t\t";
            // asset "51c56cc_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_51c56cc_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/51c56cc_part_1_blogger_2.css");
            echo "\t\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
\t\t\t";
            // asset "51c56cc_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_51c56cc_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/51c56cc_part_1_screen_3.css");
            echo "\t\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
\t\t\t";
        } else {
            // asset "51c56cc"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_51c56cc") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/51c56cc.css");
            echo "\t\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
\t\t\t";
        }
        unset($context["asset_url"]);
        // line 16
        echo "        ";
        
        $__internal_8bc7e1d3dd617e1bb97dbaa32d11181e53473e0403a1b15ed705419af050f106->leave($__internal_8bc7e1d3dd617e1bb97dbaa32d11181e53473e0403a1b15ed705419af050f106_prof);

    }

    // line 24
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_dde4af13c26ad96a5831f4aa8846171fcfeed4045be91491bc55db8bf705541a = $this->env->getExtension("native_profiler");
        $__internal_dde4af13c26ad96a5831f4aa8846171fcfeed4045be91491bc55db8bf705541a->enter($__internal_dde4af13c26ad96a5831f4aa8846171fcfeed4045be91491bc55db8bf705541a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 25
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">Acasă</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_about");
        echo "\">Despre</a></li>
                                <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_contact");
        echo "\">Contact</a></li>
                            </ul>
                        </nav>
                    ";
        
        $__internal_dde4af13c26ad96a5831f4aa8846171fcfeed4045be91491bc55db8bf705541a->leave($__internal_dde4af13c26ad96a5831f4aa8846171fcfeed4045be91491bc55db8bf705541a_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_92c321ff6d4544e9940df7d3132909d844350afbee05a6377b04bacab3dc43f2 = $this->env->getExtension("native_profiler");
        $__internal_92c321ff6d4544e9940df7d3132909d844350afbee05a6377b04bacab3dc43f2->enter($__internal_92c321ff6d4544e9940df7d3132909d844350afbee05a6377b04bacab3dc43f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">svblog</a>";
        
        $__internal_92c321ff6d4544e9940df7d3132909d844350afbee05a6377b04bacab3dc43f2->leave($__internal_92c321ff6d4544e9940df7d3132909d844350afbee05a6377b04bacab3dc43f2_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_bded8b3beb3a002353b50e557e1c41dd9e1f76fab6b9853a258ed0d9aeb8142d = $this->env->getExtension("native_profiler");
        $__internal_bded8b3beb3a002353b50e557e1c41dd9e1f76fab6b9853a258ed0d9aeb8142d->enter($__internal_bded8b3beb3a002353b50e557e1c41dd9e1f76fab6b9853a258ed0d9aeb8142d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">blog creat cu Symfony 2.8.6</a>";
        
        $__internal_bded8b3beb3a002353b50e557e1c41dd9e1f76fab6b9853a258ed0d9aeb8142d->leave($__internal_bded8b3beb3a002353b50e557e1c41dd9e1f76fab6b9853a258ed0d9aeb8142d_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6c5d6c99688ddea65974f5f512882059c5c4547c4ddaa569efad80b19a47a0c = $this->env->getExtension("native_profiler");
        $__internal_b6c5d6c99688ddea65974f5f512882059c5c4547c4ddaa569efad80b19a47a0c->enter($__internal_b6c5d6c99688ddea65974f5f512882059c5c4547c4ddaa569efad80b19a47a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b6c5d6c99688ddea65974f5f512882059c5c4547c4ddaa569efad80b19a47a0c->leave($__internal_b6c5d6c99688ddea65974f5f512882059c5c4547c4ddaa569efad80b19a47a0c_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_34741381299ee476c64a8e54d19f576a70cd77504b578cea91a01291d0c9e4d5 = $this->env->getExtension("native_profiler");
        $__internal_34741381299ee476c64a8e54d19f576a70cd77504b578cea91a01291d0c9e4d5->enter($__internal_34741381299ee476c64a8e54d19f576a70cd77504b578cea91a01291d0c9e4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_34741381299ee476c64a8e54d19f576a70cd77504b578cea91a01291d0c9e4d5->leave($__internal_34741381299ee476c64a8e54d19f576a70cd77504b578cea91a01291d0c9e4d5_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_48d4eab353a0d4bbab874509edd51a4ce752e8312ff69d5c45ed8e265628fa2a = $this->env->getExtension("native_profiler");
        $__internal_48d4eab353a0d4bbab874509edd51a4ce752e8312ff69d5c45ed8e265628fa2a->enter($__internal_48d4eab353a0d4bbab874509edd51a4ce752e8312ff69d5c45ed8e265628fa2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog creat de <a href=\"https://github.com/svasile\">Sica</a>
                ";
        
        $__internal_48d4eab353a0d4bbab874509edd51a4ce752e8312ff69d5c45ed8e265628fa2a->leave($__internal_48d4eab353a0d4bbab874509edd51a4ce752e8312ff69d5c45ed8e265628fa2a_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d24ea96db915e460c6c40b3789f7399f6bc0dd8c39844a31db7227cda30978e3 = $this->env->getExtension("native_profiler");
        $__internal_d24ea96db915e460c6c40b3789f7399f6bc0dd8c39844a31db7227cda30978e3->enter($__internal_d24ea96db915e460c6c40b3789f7399f6bc0dd8c39844a31db7227cda30978e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d24ea96db915e460c6c40b3789f7399f6bc0dd8c39844a31db7227cda30978e3->leave($__internal_d24ea96db915e460c6c40b3789f7399f6bc0dd8c39844a31db7227cda30978e3_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 55,  251 => 50,  245 => 49,  234 => 45,  223 => 42,  209 => 37,  195 => 36,  184 => 29,  180 => 28,  176 => 27,  172 => 25,  166 => 24,  159 => 16,  133 => 14,  129 => 13,  125 => 11,  119 => 10,  107 => 6,  99 => 56,  97 => 55,  92 => 52,  90 => 49,  85 => 46,  83 => 45,  79 => 43,  77 => 42,  69 => 37,  65 => 36,  60 => 33,  58 => 24,  47 => 17,  45 => 10,  38 => 6,  31 => 1,);
    }
}
/* <!-- app/Resources/views/base.html.twig -->*/
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta http-equiv="Content-Type" content="text/html"; charset=utf-8" />*/
/*         <title>{% block title %}blogul lui Sică{% endblock %} - svblog</title>*/
/*         <!--[if lt IE 9]>*/
/*             <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>*/
/*         <![endif]-->*/
/*         {% block stylesheets %}*/
/*             <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>*/
/*             <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>*/
/*             {% stylesheets'css/*'%}*/
/* 				<link href="{{ asset_url }}" rel="stylesheet" media="screen" />*/
/* 			{% endstylesheets %}*/
/*         {% endblock %}*/
/*         <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/* */
/*         <section id="wrapper">*/
/*             <header id="header">*/
/*                 <div class="top">*/
/*                     {% block navigation %}*/
/*                         <nav>*/
/*                             <ul class="navigation">*/
/*                                 <li><a href="{{ path('BloggerBlogBundle_homepage') }}">Acasă</a></li>*/
/* 								<li><a href="{{ path('BloggerBlogBundle_about') }}">Despre</a></li>*/
/*                                 <li><a href="{{ path('BloggerBlogBundle_contact') }}">Contact</a></li>*/
/*                             </ul>*/
/*                         </nav>*/
/*                     {% endblock %}*/
/*                 </div>*/
/* */
/*                 <hgroup>*/
/*                     <h2>{% block blog_title %}<a href="{{ path('BloggerBlogBundle_homepage') }}">svblog</a>{% endblock %}</h2>*/
/*                     <h3>{% block blog_tagline %}<a href="{{ path('BloggerBlogBundle_homepage') }}">blog creat cu Symfony 2.8.6</a>{% endblock %}</h3>*/
/*                 </hgroup>*/
/*             </header>*/
/* */
/*             <section class="main-col">*/
/*                 {% block body %}{% endblock %}*/
/*             </section>*/
/*             <aside class="sidebar">*/
/*                 {% block sidebar %}{% endblock %}*/
/*             </aside>*/
/* */
/*             <div id="footer">*/
/*                 {% block footer %}*/
/*                     Blog creat de <a href="https://github.com/svasile">Sica</a>*/
/*                 {% endblock %}*/
/*             </div>*/
/*         </section>*/
/* */
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
