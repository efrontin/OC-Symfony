<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_6449a1020b253c6e540f7cf0495ff47706dee96a9d94db09d8d337fd568b9af7 extends Twig_Template
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
        $__internal_709d2a7d1385b7544188d4bc721200c33d050712a3d66afe8f3e02db685eca91 = $this->env->getExtension("native_profiler");
        $__internal_709d2a7d1385b7544188d4bc721200c33d050712a3d66afe8f3e02db685eca91->enter($__internal_709d2a7d1385b7544188d4bc721200c33d050712a3d66afe8f3e02db685eca91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_709d2a7d1385b7544188d4bc721200c33d050712a3d66afe8f3e02db685eca91->leave($__internal_709d2a7d1385b7544188d4bc721200c33d050712a3d66afe8f3e02db685eca91_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
