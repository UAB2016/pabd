<?php

/* @BloggerBlog/Page/contactEmail.txt.twig */
class __TwigTemplate_2db0d064bae1f1a7f2896cca46d0f47dc5b2a3f500984fefdac9f8cd29e4159b extends Twig_Template
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
        // line 2
        echo "Mesajul a fost trimis de ";
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : null), "name", array());
        echo " la ";
        echo twig_date_format_filter($this->env, "now", "Y-m-d H:i");
        echo ".

Reply-To: ";
        // line 4
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : null), "email", array());
        echo "
Subject: ";
        // line 5
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : null), "subject", array());
        echo "
Body:
";
        // line 7
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : null), "body", array());
    }

    public function getTemplateName()
    {
        return "@BloggerBlog/Page/contactEmail.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  31 => 5,  27 => 4,  19 => 2,);
    }
}
/* {# src/Blogger/BlogBundle/Resources/views/Page/contactEmail.txt.twig #}*/
/* Mesajul a fost trimis de {{ enquiry.name }} la {{ "now" | date("Y-m-d H:i") }}.*/
/* */
/* Reply-To: {{ enquiry.email }}*/
/* Subject: {{ enquiry.subject }}*/
/* Body:*/
/* {{ enquiry.body }}*/
