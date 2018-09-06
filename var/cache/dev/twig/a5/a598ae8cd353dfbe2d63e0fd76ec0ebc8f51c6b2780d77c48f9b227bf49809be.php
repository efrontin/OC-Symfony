<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_54f3b1c14f5496d429db53530224ae284a562ef11b5c19733ab65e10fd298a3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_6f90cde73e6ef06d0ec78943914b033631cb609a2eff47b9ae78d9bc98e53da0 = $this->env->getExtension("native_profiler");
        $__internal_6f90cde73e6ef06d0ec78943914b033631cb609a2eff47b9ae78d9bc98e53da0->enter($__internal_6f90cde73e6ef06d0ec78943914b033631cb609a2eff47b9ae78d9bc98e53da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f90cde73e6ef06d0ec78943914b033631cb609a2eff47b9ae78d9bc98e53da0->leave($__internal_6f90cde73e6ef06d0ec78943914b033631cb609a2eff47b9ae78d9bc98e53da0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1bc5011e3db24c20d48a49929698eb27464eb7da2205825fb16492d47573b15c = $this->env->getExtension("native_profiler");
        $__internal_1bc5011e3db24c20d48a49929698eb27464eb7da2205825fb16492d47573b15c->enter($__internal_1bc5011e3db24c20d48a49929698eb27464eb7da2205825fb16492d47573b15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_1bc5011e3db24c20d48a49929698eb27464eb7da2205825fb16492d47573b15c->leave($__internal_1bc5011e3db24c20d48a49929698eb27464eb7da2205825fb16492d47573b15c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
