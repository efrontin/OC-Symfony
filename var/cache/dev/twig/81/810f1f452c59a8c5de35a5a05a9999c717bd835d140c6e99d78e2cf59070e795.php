<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_d1b6f2c94c2310ae56357759387a3d46289e41ec6aafd68686fe69a115b0afed extends Twig_Template
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
        $__internal_d7a372b20eef6d0a9f1db546590f6b81e9f8108c84751b1a7ee9d3468db75615 = $this->env->getExtension("native_profiler");
        $__internal_d7a372b20eef6d0a9f1db546590f6b81e9f8108c84751b1a7ee9d3468db75615->enter($__internal_d7a372b20eef6d0a9f1db546590f6b81e9f8108c84751b1a7ee9d3468db75615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d7a372b20eef6d0a9f1db546590f6b81e9f8108c84751b1a7ee9d3468db75615->leave($__internal_d7a372b20eef6d0a9f1db546590f6b81e9f8108c84751b1a7ee9d3468db75615_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
