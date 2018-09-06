<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_3215b52da19d3047deec440afba1dd153a6dff7a08699cd499f99654419a3378 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_86e5a343162c68718aa8dec5ea58bd6fab22eae566e0a41e885e27c23782137c = $this->env->getExtension("native_profiler");
        $__internal_86e5a343162c68718aa8dec5ea58bd6fab22eae566e0a41e885e27c23782137c->enter($__internal_86e5a343162c68718aa8dec5ea58bd6fab22eae566e0a41e885e27c23782137c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86e5a343162c68718aa8dec5ea58bd6fab22eae566e0a41e885e27c23782137c->leave($__internal_86e5a343162c68718aa8dec5ea58bd6fab22eae566e0a41e885e27c23782137c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_23f9ffc0d1eae7af0b97f5c2690abcef4a3088e6e3f0bd3afda51c968e35521f = $this->env->getExtension("native_profiler");
        $__internal_23f9ffc0d1eae7af0b97f5c2690abcef4a3088e6e3f0bd3afda51c968e35521f->enter($__internal_23f9ffc0d1eae7af0b97f5c2690abcef4a3088e6e3f0bd3afda51c968e35521f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_23f9ffc0d1eae7af0b97f5c2690abcef4a3088e6e3f0bd3afda51c968e35521f->leave($__internal_23f9ffc0d1eae7af0b97f5c2690abcef4a3088e6e3f0bd3afda51c968e35521f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
