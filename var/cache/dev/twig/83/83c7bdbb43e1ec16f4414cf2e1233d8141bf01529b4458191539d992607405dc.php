<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_ac137a9fc30d5bf087b5f41042093af5373a9167821e8be38b5df542651b40b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_e46c732d7a05b55009221cee1bc7e4fdbb1d272bef8aeeb0cd6f5241ba6a710d = $this->env->getExtension("native_profiler");
        $__internal_e46c732d7a05b55009221cee1bc7e4fdbb1d272bef8aeeb0cd6f5241ba6a710d->enter($__internal_e46c732d7a05b55009221cee1bc7e4fdbb1d272bef8aeeb0cd6f5241ba6a710d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e46c732d7a05b55009221cee1bc7e4fdbb1d272bef8aeeb0cd6f5241ba6a710d->leave($__internal_e46c732d7a05b55009221cee1bc7e4fdbb1d272bef8aeeb0cd6f5241ba6a710d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ec703c6a65024ec24aaeb4c33d04ab6bdbca8e70bb96f57d81f62af56307e3ca = $this->env->getExtension("native_profiler");
        $__internal_ec703c6a65024ec24aaeb4c33d04ab6bdbca8e70bb96f57d81f62af56307e3ca->enter($__internal_ec703c6a65024ec24aaeb4c33d04ab6bdbca8e70bb96f57d81f62af56307e3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_ec703c6a65024ec24aaeb4c33d04ab6bdbca8e70bb96f57d81f62af56307e3ca->leave($__internal_ec703c6a65024ec24aaeb4c33d04ab6bdbca8e70bb96f57d81f62af56307e3ca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
