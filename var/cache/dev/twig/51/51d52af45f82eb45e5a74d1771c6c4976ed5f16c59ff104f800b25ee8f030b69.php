<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_03dae5202100a2917ac84d78c57384c4ba4774bbfb0bc790e13f98751a443621 extends Twig_Template
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
        $__internal_67820b5529eaf8ecf99da57c9d8f2cc0f9dfef021220693b87070acbef70c4e2 = $this->env->getExtension("native_profiler");
        $__internal_67820b5529eaf8ecf99da57c9d8f2cc0f9dfef021220693b87070acbef70c4e2->enter($__internal_67820b5529eaf8ecf99da57c9d8f2cc0f9dfef021220693b87070acbef70c4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_67820b5529eaf8ecf99da57c9d8f2cc0f9dfef021220693b87070acbef70c4e2->leave($__internal_67820b5529eaf8ecf99da57c9d8f2cc0f9dfef021220693b87070acbef70c4e2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
