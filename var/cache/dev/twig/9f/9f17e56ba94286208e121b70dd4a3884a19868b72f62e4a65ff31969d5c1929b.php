<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_89b17a0f7d16628ea0ff822a20479180600be0881469dc66860063a503887553 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_33d30e1e7b5a968c32e82733b73ee3665b8775d4bb632884d0f4a78f208c7f03 = $this->env->getExtension("native_profiler");
        $__internal_33d30e1e7b5a968c32e82733b73ee3665b8775d4bb632884d0f4a78f208c7f03->enter($__internal_33d30e1e7b5a968c32e82733b73ee3665b8775d4bb632884d0f4a78f208c7f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33d30e1e7b5a968c32e82733b73ee3665b8775d4bb632884d0f4a78f208c7f03->leave($__internal_33d30e1e7b5a968c32e82733b73ee3665b8775d4bb632884d0f4a78f208c7f03_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_90ab37dab2419c826b523cc78ee69a429be444cd7f6a33cf91349299e9fa0a08 = $this->env->getExtension("native_profiler");
        $__internal_90ab37dab2419c826b523cc78ee69a429be444cd7f6a33cf91349299e9fa0a08->enter($__internal_90ab37dab2419c826b523cc78ee69a429be444cd7f6a33cf91349299e9fa0a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_90ab37dab2419c826b523cc78ee69a429be444cd7f6a33cf91349299e9fa0a08->leave($__internal_90ab37dab2419c826b523cc78ee69a429be444cd7f6a33cf91349299e9fa0a08_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
