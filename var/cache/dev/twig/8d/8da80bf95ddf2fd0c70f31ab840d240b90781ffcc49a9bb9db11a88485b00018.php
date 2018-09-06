<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_6ef89c6b1407cef90d2fad66e52a77a5c495fa41e059a9c963b47f268b99c08a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_771e997d4834d94f2431df42e6e30da8170d743b81d7e02e16be226b185be8c9 = $this->env->getExtension("native_profiler");
        $__internal_771e997d4834d94f2431df42e6e30da8170d743b81d7e02e16be226b185be8c9->enter($__internal_771e997d4834d94f2431df42e6e30da8170d743b81d7e02e16be226b185be8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_771e997d4834d94f2431df42e6e30da8170d743b81d7e02e16be226b185be8c9->leave($__internal_771e997d4834d94f2431df42e6e30da8170d743b81d7e02e16be226b185be8c9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a1851d66aaf8577b4fe7ccadd57247808c3307c6a60798537e1aab7c5c274458 = $this->env->getExtension("native_profiler");
        $__internal_a1851d66aaf8577b4fe7ccadd57247808c3307c6a60798537e1aab7c5c274458->enter($__internal_a1851d66aaf8577b4fe7ccadd57247808c3307c6a60798537e1aab7c5c274458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a1851d66aaf8577b4fe7ccadd57247808c3307c6a60798537e1aab7c5c274458->leave($__internal_a1851d66aaf8577b4fe7ccadd57247808c3307c6a60798537e1aab7c5c274458_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
