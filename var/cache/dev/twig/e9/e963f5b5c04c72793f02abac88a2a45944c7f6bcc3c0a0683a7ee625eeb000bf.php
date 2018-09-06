<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_d6c758f9abe22dba038f6301a0ab89f7dd7d962f5f909cb730c88e6b8f4235e7 extends Twig_Template
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
        $__internal_321a9570bc4c6c622413a69b92a423e88c152b29bea6a255365888e33acc4519 = $this->env->getExtension("native_profiler");
        $__internal_321a9570bc4c6c622413a69b92a423e88c152b29bea6a255365888e33acc4519->enter($__internal_321a9570bc4c6c622413a69b92a423e88c152b29bea6a255365888e33acc4519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_321a9570bc4c6c622413a69b92a423e88c152b29bea6a255365888e33acc4519->leave($__internal_321a9570bc4c6c622413a69b92a423e88c152b29bea6a255365888e33acc4519_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
