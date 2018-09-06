<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_635fda23c0272babb97bbefe6fec1bb32ffc4dfbd9d655604e99b7b1ff773c8c extends Twig_Template
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
        $__internal_a55a4d063aaaefd6b13eb2324a8c171c1051902411e93179ac552628d4c83401 = $this->env->getExtension("native_profiler");
        $__internal_a55a4d063aaaefd6b13eb2324a8c171c1051902411e93179ac552628d4c83401->enter($__internal_a55a4d063aaaefd6b13eb2324a8c171c1051902411e93179ac552628d4c83401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_a55a4d063aaaefd6b13eb2324a8c171c1051902411e93179ac552628d4c83401->leave($__internal_a55a4d063aaaefd6b13eb2324a8c171c1051902411e93179ac552628d4c83401_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
