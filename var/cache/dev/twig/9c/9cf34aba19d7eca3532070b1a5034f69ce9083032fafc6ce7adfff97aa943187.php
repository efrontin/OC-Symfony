<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_285706617900416f89854c200f09f63b96a43476c3c240782fa4bf03a96e882f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_cd4ffece9567b6b07b2f8023d8784ed1cfae8a3480ff7f870587e351900e7c8a = $this->env->getExtension("native_profiler");
        $__internal_cd4ffece9567b6b07b2f8023d8784ed1cfae8a3480ff7f870587e351900e7c8a->enter($__internal_cd4ffece9567b6b07b2f8023d8784ed1cfae8a3480ff7f870587e351900e7c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd4ffece9567b6b07b2f8023d8784ed1cfae8a3480ff7f870587e351900e7c8a->leave($__internal_cd4ffece9567b6b07b2f8023d8784ed1cfae8a3480ff7f870587e351900e7c8a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a1c3c2e92525f6fb99b060659d86825f47b80866cc8e4c32c2a520d0098b6090 = $this->env->getExtension("native_profiler");
        $__internal_a1c3c2e92525f6fb99b060659d86825f47b80866cc8e4c32c2a520d0098b6090->enter($__internal_a1c3c2e92525f6fb99b060659d86825f47b80866cc8e4c32c2a520d0098b6090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_a1c3c2e92525f6fb99b060659d86825f47b80866cc8e4c32c2a520d0098b6090->leave($__internal_a1c3c2e92525f6fb99b060659d86825f47b80866cc8e4c32c2a520d0098b6090_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
