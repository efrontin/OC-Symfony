<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_0aae9f3edb0a9b28f29017db1f679d97d763389a209d07eb9e4e17975fb8cf4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_6bfb75a0ffba13aa3a59557abd15c00bb419a56c971f62ca89aa59399f9673d3 = $this->env->getExtension("native_profiler");
        $__internal_6bfb75a0ffba13aa3a59557abd15c00bb419a56c971f62ca89aa59399f9673d3->enter($__internal_6bfb75a0ffba13aa3a59557abd15c00bb419a56c971f62ca89aa59399f9673d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bfb75a0ffba13aa3a59557abd15c00bb419a56c971f62ca89aa59399f9673d3->leave($__internal_6bfb75a0ffba13aa3a59557abd15c00bb419a56c971f62ca89aa59399f9673d3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_549387b883ab24bdd6a4180a99c9f965fce923eaf2ad16e4c1a78bf72928b655 = $this->env->getExtension("native_profiler");
        $__internal_549387b883ab24bdd6a4180a99c9f965fce923eaf2ad16e4c1a78bf72928b655->enter($__internal_549387b883ab24bdd6a4180a99c9f965fce923eaf2ad16e4c1a78bf72928b655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_549387b883ab24bdd6a4180a99c9f965fce923eaf2ad16e4c1a78bf72928b655->leave($__internal_549387b883ab24bdd6a4180a99c9f965fce923eaf2ad16e4c1a78bf72928b655_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
