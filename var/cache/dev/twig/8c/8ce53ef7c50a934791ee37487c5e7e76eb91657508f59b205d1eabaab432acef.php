<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_9574bcb56bcd7b0b7cef1fe8d71d7010a1b3274e24598aad33a2327a23eca537 extends Twig_Template
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
        $__internal_8e18c3c4c3008c5dd0f038c6b019f95f62367bb71a186511026c9bc0a490dbad = $this->env->getExtension("native_profiler");
        $__internal_8e18c3c4c3008c5dd0f038c6b019f95f62367bb71a186511026c9bc0a490dbad->enter($__internal_8e18c3c4c3008c5dd0f038c6b019f95f62367bb71a186511026c9bc0a490dbad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_8e18c3c4c3008c5dd0f038c6b019f95f62367bb71a186511026c9bc0a490dbad->leave($__internal_8e18c3c4c3008c5dd0f038c6b019f95f62367bb71a186511026c9bc0a490dbad_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
