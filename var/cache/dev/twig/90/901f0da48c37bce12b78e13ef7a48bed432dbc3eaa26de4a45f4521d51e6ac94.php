<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_6a58b213e79bad180c76c846a971f88c3135c600ae3ffab3ba9c2e7a535cf5a5 extends Twig_Template
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
        $__internal_dab501cfca93f756fc4755cedea883618105e673192bf73ac6187c7c9e10cce4 = $this->env->getExtension("native_profiler");
        $__internal_dab501cfca93f756fc4755cedea883618105e673192bf73ac6187c7c9e10cce4->enter($__internal_dab501cfca93f756fc4755cedea883618105e673192bf73ac6187c7c9e10cce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_dab501cfca93f756fc4755cedea883618105e673192bf73ac6187c7c9e10cce4->leave($__internal_dab501cfca93f756fc4755cedea883618105e673192bf73ac6187c7c9e10cce4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
