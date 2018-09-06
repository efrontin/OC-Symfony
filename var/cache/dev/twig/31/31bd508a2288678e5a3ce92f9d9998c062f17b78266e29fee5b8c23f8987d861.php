<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_a25103bf8c0c2c9468318e1b64b4f55958010c7f6b9894f38d6ae25697c32535 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_2e74b182ffb1df084ea49b511b502f6f3b6547a0192720fc4347286fbcc2d88b = $this->env->getExtension("native_profiler");
        $__internal_2e74b182ffb1df084ea49b511b502f6f3b6547a0192720fc4347286fbcc2d88b->enter($__internal_2e74b182ffb1df084ea49b511b502f6f3b6547a0192720fc4347286fbcc2d88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e74b182ffb1df084ea49b511b502f6f3b6547a0192720fc4347286fbcc2d88b->leave($__internal_2e74b182ffb1df084ea49b511b502f6f3b6547a0192720fc4347286fbcc2d88b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_08b78c1efcebf3e9bd9433fcc0f3a727b766abc8ee5671daa4150666181de339 = $this->env->getExtension("native_profiler");
        $__internal_08b78c1efcebf3e9bd9433fcc0f3a727b766abc8ee5671daa4150666181de339->enter($__internal_08b78c1efcebf3e9bd9433fcc0f3a727b766abc8ee5671daa4150666181de339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_08b78c1efcebf3e9bd9433fcc0f3a727b766abc8ee5671daa4150666181de339->leave($__internal_08b78c1efcebf3e9bd9433fcc0f3a727b766abc8ee5671daa4150666181de339_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
