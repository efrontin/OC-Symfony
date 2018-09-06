<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_94ebbc72af815df05c38c068862db63441678769c60965bd5aaf1da4f497423b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_f6a50bebd71da3abebc05feffc46ae394fb47301265ddf0539c69e19bad18ba2 = $this->env->getExtension("native_profiler");
        $__internal_f6a50bebd71da3abebc05feffc46ae394fb47301265ddf0539c69e19bad18ba2->enter($__internal_f6a50bebd71da3abebc05feffc46ae394fb47301265ddf0539c69e19bad18ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6a50bebd71da3abebc05feffc46ae394fb47301265ddf0539c69e19bad18ba2->leave($__internal_f6a50bebd71da3abebc05feffc46ae394fb47301265ddf0539c69e19bad18ba2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e9c46b06deb87c98cd65bbd07603eed3cab8eb0aa0ca8d6051daa347e2d2f767 = $this->env->getExtension("native_profiler");
        $__internal_e9c46b06deb87c98cd65bbd07603eed3cab8eb0aa0ca8d6051daa347e2d2f767->enter($__internal_e9c46b06deb87c98cd65bbd07603eed3cab8eb0aa0ca8d6051daa347e2d2f767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_e9c46b06deb87c98cd65bbd07603eed3cab8eb0aa0ca8d6051daa347e2d2f767->leave($__internal_e9c46b06deb87c98cd65bbd07603eed3cab8eb0aa0ca8d6051daa347e2d2f767_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
