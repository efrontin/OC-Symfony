<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_5e2c0eda9aaabd3aa857dcd809920db620a538ba5db1d1921a5eed10c989b887 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_46b6abb9e2d4acec41bc087f7a4720ffb886de7a330e60bfd627658eebca73c9 = $this->env->getExtension("native_profiler");
        $__internal_46b6abb9e2d4acec41bc087f7a4720ffb886de7a330e60bfd627658eebca73c9->enter($__internal_46b6abb9e2d4acec41bc087f7a4720ffb886de7a330e60bfd627658eebca73c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46b6abb9e2d4acec41bc087f7a4720ffb886de7a330e60bfd627658eebca73c9->leave($__internal_46b6abb9e2d4acec41bc087f7a4720ffb886de7a330e60bfd627658eebca73c9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2769742e0649c937f612d1527ed57d37185c1bb59be2d40fb5e8d5f4d0270c26 = $this->env->getExtension("native_profiler");
        $__internal_2769742e0649c937f612d1527ed57d37185c1bb59be2d40fb5e8d5f4d0270c26->enter($__internal_2769742e0649c937f612d1527ed57d37185c1bb59be2d40fb5e8d5f4d0270c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_2769742e0649c937f612d1527ed57d37185c1bb59be2d40fb5e8d5f4d0270c26->leave($__internal_2769742e0649c937f612d1527ed57d37185c1bb59be2d40fb5e8d5f4d0270c26_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
