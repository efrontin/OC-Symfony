<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_7cdb10c390646611c453478b722041c4f7b9714b0edfde4eb4a7e38ec58ff9da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_cb36d774e8597ce3a4c5e73126720abe1b32bf2e48e70506eaf159b1bcac8f97 = $this->env->getExtension("native_profiler");
        $__internal_cb36d774e8597ce3a4c5e73126720abe1b32bf2e48e70506eaf159b1bcac8f97->enter($__internal_cb36d774e8597ce3a4c5e73126720abe1b32bf2e48e70506eaf159b1bcac8f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb36d774e8597ce3a4c5e73126720abe1b32bf2e48e70506eaf159b1bcac8f97->leave($__internal_cb36d774e8597ce3a4c5e73126720abe1b32bf2e48e70506eaf159b1bcac8f97_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_06ecf4158087bf234ce645021ad8f4bd9b79b2a1a3e79a689b3c1548fa144ca2 = $this->env->getExtension("native_profiler");
        $__internal_06ecf4158087bf234ce645021ad8f4bd9b79b2a1a3e79a689b3c1548fa144ca2->enter($__internal_06ecf4158087bf234ce645021ad8f4bd9b79b2a1a3e79a689b3c1548fa144ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_06ecf4158087bf234ce645021ad8f4bd9b79b2a1a3e79a689b3c1548fa144ca2->leave($__internal_06ecf4158087bf234ce645021ad8f4bd9b79b2a1a3e79a689b3c1548fa144ca2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
