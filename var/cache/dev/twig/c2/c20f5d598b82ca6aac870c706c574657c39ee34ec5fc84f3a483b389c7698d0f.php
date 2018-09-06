<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_91baeb139871974d6b34e0b3b85d8d1667e94d59199afbb1164cde491376677a extends Twig_Template
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
        $__internal_e2bffdb4e3d4f60038692f06a9592a065818b693a54540e602c08fa683ed1395 = $this->env->getExtension("native_profiler");
        $__internal_e2bffdb4e3d4f60038692f06a9592a065818b693a54540e602c08fa683ed1395->enter($__internal_e2bffdb4e3d4f60038692f06a9592a065818b693a54540e602c08fa683ed1395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e2bffdb4e3d4f60038692f06a9592a065818b693a54540e602c08fa683ed1395->leave($__internal_e2bffdb4e3d4f60038692f06a9592a065818b693a54540e602c08fa683ed1395_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
