<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_755a694bf976805dcf0219f35cb949ab46be6f7d6dd7b74242af580e39808a68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_904d61f8196ab7deb7d246e35bf8d3688288452cfc01c9345734db72ed2a3b40 = $this->env->getExtension("native_profiler");
        $__internal_904d61f8196ab7deb7d246e35bf8d3688288452cfc01c9345734db72ed2a3b40->enter($__internal_904d61f8196ab7deb7d246e35bf8d3688288452cfc01c9345734db72ed2a3b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_904d61f8196ab7deb7d246e35bf8d3688288452cfc01c9345734db72ed2a3b40->leave($__internal_904d61f8196ab7deb7d246e35bf8d3688288452cfc01c9345734db72ed2a3b40_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b5ef6bfd32772feeb0df7e0499e11d24682899d8fc78b812fa46869aa69d68b3 = $this->env->getExtension("native_profiler");
        $__internal_b5ef6bfd32772feeb0df7e0499e11d24682899d8fc78b812fa46869aa69d68b3->enter($__internal_b5ef6bfd32772feeb0df7e0499e11d24682899d8fc78b812fa46869aa69d68b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_b5ef6bfd32772feeb0df7e0499e11d24682899d8fc78b812fa46869aa69d68b3->leave($__internal_b5ef6bfd32772feeb0df7e0499e11d24682899d8fc78b812fa46869aa69d68b3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
