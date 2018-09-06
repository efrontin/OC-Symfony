<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_344d5e9cbddbd83c69c9b207ff50f6dbb3a68fa53edaff0a683cc475d255cae4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_f318708a38041b81ab930e7c2ebf467f60560e1565f118ace93fe5fae9a3c0b1 = $this->env->getExtension("native_profiler");
        $__internal_f318708a38041b81ab930e7c2ebf467f60560e1565f118ace93fe5fae9a3c0b1->enter($__internal_f318708a38041b81ab930e7c2ebf467f60560e1565f118ace93fe5fae9a3c0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f318708a38041b81ab930e7c2ebf467f60560e1565f118ace93fe5fae9a3c0b1->leave($__internal_f318708a38041b81ab930e7c2ebf467f60560e1565f118ace93fe5fae9a3c0b1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_12b03ff8caaecb4d6c5ccaf96d4841a11ad6663a784c4d7b4ba738a14c5278f9 = $this->env->getExtension("native_profiler");
        $__internal_12b03ff8caaecb4d6c5ccaf96d4841a11ad6663a784c4d7b4ba738a14c5278f9->enter($__internal_12b03ff8caaecb4d6c5ccaf96d4841a11ad6663a784c4d7b4ba738a14c5278f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_12b03ff8caaecb4d6c5ccaf96d4841a11ad6663a784c4d7b4ba738a14c5278f9->leave($__internal_12b03ff8caaecb4d6c5ccaf96d4841a11ad6663a784c4d7b4ba738a14c5278f9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
