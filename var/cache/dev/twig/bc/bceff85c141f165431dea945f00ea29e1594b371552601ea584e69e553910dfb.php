<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_8d3e2ca99bfa9c04ce4fdd4c1dfbb00041ea6c4e06f629e26807e2e5cf9b5b8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_6f42d22adee500d107fd99f8fede2c0b778322cd45a46169e7809867d4d4a69d = $this->env->getExtension("native_profiler");
        $__internal_6f42d22adee500d107fd99f8fede2c0b778322cd45a46169e7809867d4d4a69d->enter($__internal_6f42d22adee500d107fd99f8fede2c0b778322cd45a46169e7809867d4d4a69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f42d22adee500d107fd99f8fede2c0b778322cd45a46169e7809867d4d4a69d->leave($__internal_6f42d22adee500d107fd99f8fede2c0b778322cd45a46169e7809867d4d4a69d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_189466633b3da47d6bf341a4e4514eef772e9db8dfd3ff37fbadc3d4a5562ac4 = $this->env->getExtension("native_profiler");
        $__internal_189466633b3da47d6bf341a4e4514eef772e9db8dfd3ff37fbadc3d4a5562ac4->enter($__internal_189466633b3da47d6bf341a4e4514eef772e9db8dfd3ff37fbadc3d4a5562ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_189466633b3da47d6bf341a4e4514eef772e9db8dfd3ff37fbadc3d4a5562ac4->leave($__internal_189466633b3da47d6bf341a4e4514eef772e9db8dfd3ff37fbadc3d4a5562ac4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
