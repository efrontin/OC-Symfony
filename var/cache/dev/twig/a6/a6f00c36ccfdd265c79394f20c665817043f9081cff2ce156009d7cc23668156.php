<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_764de58fb0cf2230b24c58ce1708fb3ecb1c2cf1a190806233adc057c5402017 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_f6aa9917cd5174e7fb95fe1e10bd804a6a4a51f2f71d62615fa563832ab3112f = $this->env->getExtension("native_profiler");
        $__internal_f6aa9917cd5174e7fb95fe1e10bd804a6a4a51f2f71d62615fa563832ab3112f->enter($__internal_f6aa9917cd5174e7fb95fe1e10bd804a6a4a51f2f71d62615fa563832ab3112f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6aa9917cd5174e7fb95fe1e10bd804a6a4a51f2f71d62615fa563832ab3112f->leave($__internal_f6aa9917cd5174e7fb95fe1e10bd804a6a4a51f2f71d62615fa563832ab3112f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4055ac086726db15bd786d011cb5509f3b222b72a9eac6f752e5bb4b1acc2c9a = $this->env->getExtension("native_profiler");
        $__internal_4055ac086726db15bd786d011cb5509f3b222b72a9eac6f752e5bb4b1acc2c9a->enter($__internal_4055ac086726db15bd786d011cb5509f3b222b72a9eac6f752e5bb4b1acc2c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_4055ac086726db15bd786d011cb5509f3b222b72a9eac6f752e5bb4b1acc2c9a->leave($__internal_4055ac086726db15bd786d011cb5509f3b222b72a9eac6f752e5bb4b1acc2c9a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
