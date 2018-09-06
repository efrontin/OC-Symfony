<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_f652fededbdeca5bd966dcccaf6f053792a95372a942f574078ffa49695226f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_7a0e1bacd027792b8415ac6ce41efddbe3a484db1867c4e118e63a520331f13e = $this->env->getExtension("native_profiler");
        $__internal_7a0e1bacd027792b8415ac6ce41efddbe3a484db1867c4e118e63a520331f13e->enter($__internal_7a0e1bacd027792b8415ac6ce41efddbe3a484db1867c4e118e63a520331f13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a0e1bacd027792b8415ac6ce41efddbe3a484db1867c4e118e63a520331f13e->leave($__internal_7a0e1bacd027792b8415ac6ce41efddbe3a484db1867c4e118e63a520331f13e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_398ebcdee18b358974c207dd54f447caacfeff9b916f8d8e283d23200fceb8d4 = $this->env->getExtension("native_profiler");
        $__internal_398ebcdee18b358974c207dd54f447caacfeff9b916f8d8e283d23200fceb8d4->enter($__internal_398ebcdee18b358974c207dd54f447caacfeff9b916f8d8e283d23200fceb8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_398ebcdee18b358974c207dd54f447caacfeff9b916f8d8e283d23200fceb8d4->leave($__internal_398ebcdee18b358974c207dd54f447caacfeff9b916f8d8e283d23200fceb8d4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
