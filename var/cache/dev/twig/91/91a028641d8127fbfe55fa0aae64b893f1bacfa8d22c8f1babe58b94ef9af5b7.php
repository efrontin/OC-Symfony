<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_23f61303b9b1489715dee5af37263d55787b706cc32279b9a5bd850cb4e771c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_7d1bbeb348db0807777f8df960fb13a50f90f4f5fef86461e373be1f15d5832c = $this->env->getExtension("native_profiler");
        $__internal_7d1bbeb348db0807777f8df960fb13a50f90f4f5fef86461e373be1f15d5832c->enter($__internal_7d1bbeb348db0807777f8df960fb13a50f90f4f5fef86461e373be1f15d5832c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d1bbeb348db0807777f8df960fb13a50f90f4f5fef86461e373be1f15d5832c->leave($__internal_7d1bbeb348db0807777f8df960fb13a50f90f4f5fef86461e373be1f15d5832c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_66a586290743e969138182a263be2345f1794ea34cd0abc1de128b69696537a9 = $this->env->getExtension("native_profiler");
        $__internal_66a586290743e969138182a263be2345f1794ea34cd0abc1de128b69696537a9->enter($__internal_66a586290743e969138182a263be2345f1794ea34cd0abc1de128b69696537a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_66a586290743e969138182a263be2345f1794ea34cd0abc1de128b69696537a9->leave($__internal_66a586290743e969138182a263be2345f1794ea34cd0abc1de128b69696537a9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
