<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_432653fe8b5074fe0b551bb172fb9508e028d7dc3b073b45b95c1795f73c32e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_5990a51bc8df688a1aeee771dc6b77b4478b6a47669d95ad4903ee4026e73665 = $this->env->getExtension("native_profiler");
        $__internal_5990a51bc8df688a1aeee771dc6b77b4478b6a47669d95ad4903ee4026e73665->enter($__internal_5990a51bc8df688a1aeee771dc6b77b4478b6a47669d95ad4903ee4026e73665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5990a51bc8df688a1aeee771dc6b77b4478b6a47669d95ad4903ee4026e73665->leave($__internal_5990a51bc8df688a1aeee771dc6b77b4478b6a47669d95ad4903ee4026e73665_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d43f7533785d72cbbefa4a5e4ad3bad8bffed7c38d94c8c4a1f35d13f6ddc602 = $this->env->getExtension("native_profiler");
        $__internal_d43f7533785d72cbbefa4a5e4ad3bad8bffed7c38d94c8c4a1f35d13f6ddc602->enter($__internal_d43f7533785d72cbbefa4a5e4ad3bad8bffed7c38d94c8c4a1f35d13f6ddc602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_d43f7533785d72cbbefa4a5e4ad3bad8bffed7c38d94c8c4a1f35d13f6ddc602->leave($__internal_d43f7533785d72cbbefa4a5e4ad3bad8bffed7c38d94c8c4a1f35d13f6ddc602_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
