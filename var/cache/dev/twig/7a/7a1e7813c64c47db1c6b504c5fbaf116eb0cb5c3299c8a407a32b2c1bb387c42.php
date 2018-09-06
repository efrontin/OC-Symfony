<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_5f17da4b02e291e5e55f59904f06cb9dfaedf54c3be7b5a36d0fb7659e925ac3 extends Twig_Template
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
        $__internal_1bfbcb01784ffca049922ddfff7faf5eacac3ae41bef4df741dbf5547d0f683b = $this->env->getExtension("native_profiler");
        $__internal_1bfbcb01784ffca049922ddfff7faf5eacac3ae41bef4df741dbf5547d0f683b->enter($__internal_1bfbcb01784ffca049922ddfff7faf5eacac3ae41bef4df741dbf5547d0f683b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1bfbcb01784ffca049922ddfff7faf5eacac3ae41bef4df741dbf5547d0f683b->leave($__internal_1bfbcb01784ffca049922ddfff7faf5eacac3ae41bef4df741dbf5547d0f683b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
