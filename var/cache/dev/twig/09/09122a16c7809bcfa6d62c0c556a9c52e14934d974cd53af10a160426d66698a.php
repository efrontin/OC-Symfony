<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_513a1fe4ba0d42dc4796a72fa428712296c3c718ca745c66451d52e981421c87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_c4d7dcf0f0a652616eb14dd8e2deb6d928a8f7e3896a0aa991a764e4af2d828a = $this->env->getExtension("native_profiler");
        $__internal_c4d7dcf0f0a652616eb14dd8e2deb6d928a8f7e3896a0aa991a764e4af2d828a->enter($__internal_c4d7dcf0f0a652616eb14dd8e2deb6d928a8f7e3896a0aa991a764e4af2d828a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4d7dcf0f0a652616eb14dd8e2deb6d928a8f7e3896a0aa991a764e4af2d828a->leave($__internal_c4d7dcf0f0a652616eb14dd8e2deb6d928a8f7e3896a0aa991a764e4af2d828a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0e9d10059afdf45390db9e6d63fa85e45ca07c1d77d7ad1bf9137f201decb614 = $this->env->getExtension("native_profiler");
        $__internal_0e9d10059afdf45390db9e6d63fa85e45ca07c1d77d7ad1bf9137f201decb614->enter($__internal_0e9d10059afdf45390db9e6d63fa85e45ca07c1d77d7ad1bf9137f201decb614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_0e9d10059afdf45390db9e6d63fa85e45ca07c1d77d7ad1bf9137f201decb614->leave($__internal_0e9d10059afdf45390db9e6d63fa85e45ca07c1d77d7ad1bf9137f201decb614_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
