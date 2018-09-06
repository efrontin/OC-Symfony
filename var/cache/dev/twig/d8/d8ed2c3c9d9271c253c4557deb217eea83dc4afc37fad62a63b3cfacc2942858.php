<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_4fb11f8d3f06a56bcc97c0100b7771823a5ba8548b25f7e613d25826417ec936 extends Twig_Template
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
        $__internal_56b3aa18262326d41127aaf091a146cb8824eca096a8166e47d9e4aaa53484bf = $this->env->getExtension("native_profiler");
        $__internal_56b3aa18262326d41127aaf091a146cb8824eca096a8166e47d9e4aaa53484bf->enter($__internal_56b3aa18262326d41127aaf091a146cb8824eca096a8166e47d9e4aaa53484bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_56b3aa18262326d41127aaf091a146cb8824eca096a8166e47d9e4aaa53484bf->leave($__internal_56b3aa18262326d41127aaf091a146cb8824eca096a8166e47d9e4aaa53484bf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
