<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_aad60a61e5b29d496f2835139f9b20e512d73ac2b5aa57da1be48077234728cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_6cd9cad022f7841005d547e09741d1e4cc48c735ff3d5a2e558ed1fa649a2ac0 = $this->env->getExtension("native_profiler");
        $__internal_6cd9cad022f7841005d547e09741d1e4cc48c735ff3d5a2e558ed1fa649a2ac0->enter($__internal_6cd9cad022f7841005d547e09741d1e4cc48c735ff3d5a2e558ed1fa649a2ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cd9cad022f7841005d547e09741d1e4cc48c735ff3d5a2e558ed1fa649a2ac0->leave($__internal_6cd9cad022f7841005d547e09741d1e4cc48c735ff3d5a2e558ed1fa649a2ac0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d00f3ed8df0a63e9e8e8a617025166dba7240464afde37158e5ee7128e40e8bf = $this->env->getExtension("native_profiler");
        $__internal_d00f3ed8df0a63e9e8e8a617025166dba7240464afde37158e5ee7128e40e8bf->enter($__internal_d00f3ed8df0a63e9e8e8a617025166dba7240464afde37158e5ee7128e40e8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_d00f3ed8df0a63e9e8e8a617025166dba7240464afde37158e5ee7128e40e8bf->leave($__internal_d00f3ed8df0a63e9e8e8a617025166dba7240464afde37158e5ee7128e40e8bf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
