<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_ea53857df32540053397871030cc89595c531eeb5f5fe237183aa7d1e2d88b25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05356bcd333c20679fe486d48678571f25bf06303f492ad2b76a310496fe8139 = $this->env->getExtension("native_profiler");
        $__internal_05356bcd333c20679fe486d48678571f25bf06303f492ad2b76a310496fe8139->enter($__internal_05356bcd333c20679fe486d48678571f25bf06303f492ad2b76a310496fe8139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_05356bcd333c20679fe486d48678571f25bf06303f492ad2b76a310496fe8139->leave($__internal_05356bcd333c20679fe486d48678571f25bf06303f492ad2b76a310496fe8139_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
