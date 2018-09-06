<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_25658901d66ca2c3996cd113714427e29b81596b30da6a0159ef689623d11e25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_7a4549612c32dac48deed6336508404c177d0c671253d8f4299480d87df1693d = $this->env->getExtension("native_profiler");
        $__internal_7a4549612c32dac48deed6336508404c177d0c671253d8f4299480d87df1693d->enter($__internal_7a4549612c32dac48deed6336508404c177d0c671253d8f4299480d87df1693d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a4549612c32dac48deed6336508404c177d0c671253d8f4299480d87df1693d->leave($__internal_7a4549612c32dac48deed6336508404c177d0c671253d8f4299480d87df1693d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bf7ed5505405516d51b021a33732255640c53a39f6da3b0905de71b3e70f6548 = $this->env->getExtension("native_profiler");
        $__internal_bf7ed5505405516d51b021a33732255640c53a39f6da3b0905de71b3e70f6548->enter($__internal_bf7ed5505405516d51b021a33732255640c53a39f6da3b0905de71b3e70f6548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_bf7ed5505405516d51b021a33732255640c53a39f6da3b0905de71b3e70f6548->leave($__internal_bf7ed5505405516d51b021a33732255640c53a39f6da3b0905de71b3e70f6548_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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
