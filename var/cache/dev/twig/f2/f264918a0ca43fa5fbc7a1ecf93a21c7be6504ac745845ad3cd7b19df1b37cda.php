<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_a07ae0ef04274787bd8f7c63b0a91169d95b84575fe6cc3e6d87c0cb90badc14 extends Twig_Template
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
        $__internal_5a92d38df40860fe8e5f66ebc6586dc1f0e25a0dafd55e29bf96f451802dabb2 = $this->env->getExtension("native_profiler");
        $__internal_5a92d38df40860fe8e5f66ebc6586dc1f0e25a0dafd55e29bf96f451802dabb2->enter($__internal_5a92d38df40860fe8e5f66ebc6586dc1f0e25a0dafd55e29bf96f451802dabb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_5a92d38df40860fe8e5f66ebc6586dc1f0e25a0dafd55e29bf96f451802dabb2->leave($__internal_5a92d38df40860fe8e5f66ebc6586dc1f0e25a0dafd55e29bf96f451802dabb2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
