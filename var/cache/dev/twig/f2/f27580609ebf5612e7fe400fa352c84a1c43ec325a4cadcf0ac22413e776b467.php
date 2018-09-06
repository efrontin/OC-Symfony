<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_67187d914019bb0b052d25082d97b5dd1c5632dedfdf74e1cb3c5e87a36f4bca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90a25c6972340b7b9e2da52210bc4e8669902407d5621e4e0cfd72f3ab6692c1 = $this->env->getExtension("native_profiler");
        $__internal_90a25c6972340b7b9e2da52210bc4e8669902407d5621e4e0cfd72f3ab6692c1->enter($__internal_90a25c6972340b7b9e2da52210bc4e8669902407d5621e4e0cfd72f3ab6692c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90a25c6972340b7b9e2da52210bc4e8669902407d5621e4e0cfd72f3ab6692c1->leave($__internal_90a25c6972340b7b9e2da52210bc4e8669902407d5621e4e0cfd72f3ab6692c1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a89ef25c623c1af09af6ccd7ebf141bc4ef44fd4bfcfa6b10b3478a7c77b69ed = $this->env->getExtension("native_profiler");
        $__internal_a89ef25c623c1af09af6ccd7ebf141bc4ef44fd4bfcfa6b10b3478a7c77b69ed->enter($__internal_a89ef25c623c1af09af6ccd7ebf141bc4ef44fd4bfcfa6b10b3478a7c77b69ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_a89ef25c623c1af09af6ccd7ebf141bc4ef44fd4bfcfa6b10b3478a7c77b69ed->leave($__internal_a89ef25c623c1af09af6ccd7ebf141bc4ef44fd4bfcfa6b10b3478a7c77b69ed_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
