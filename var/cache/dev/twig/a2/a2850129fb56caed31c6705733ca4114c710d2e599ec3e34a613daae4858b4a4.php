<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_98866da2683627994df21d3e09066177a15d2a95b58a0e1af1071d703bfc9ab9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_9e1d84f8380b29a3d0950ee2e4a6697e2cb10df00035784e88e0993339e8b121 = $this->env->getExtension("native_profiler");
        $__internal_9e1d84f8380b29a3d0950ee2e4a6697e2cb10df00035784e88e0993339e8b121->enter($__internal_9e1d84f8380b29a3d0950ee2e4a6697e2cb10df00035784e88e0993339e8b121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e1d84f8380b29a3d0950ee2e4a6697e2cb10df00035784e88e0993339e8b121->leave($__internal_9e1d84f8380b29a3d0950ee2e4a6697e2cb10df00035784e88e0993339e8b121_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_654fd6ad8836f5d1e567c1c0c91a7b63c4d2a2b6b5e6fe8d5e181aa75a3586e8 = $this->env->getExtension("native_profiler");
        $__internal_654fd6ad8836f5d1e567c1c0c91a7b63c4d2a2b6b5e6fe8d5e181aa75a3586e8->enter($__internal_654fd6ad8836f5d1e567c1c0c91a7b63c4d2a2b6b5e6fe8d5e181aa75a3586e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_654fd6ad8836f5d1e567c1c0c91a7b63c4d2a2b6b5e6fe8d5e181aa75a3586e8->leave($__internal_654fd6ad8836f5d1e567c1c0c91a7b63c4d2a2b6b5e6fe8d5e181aa75a3586e8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
