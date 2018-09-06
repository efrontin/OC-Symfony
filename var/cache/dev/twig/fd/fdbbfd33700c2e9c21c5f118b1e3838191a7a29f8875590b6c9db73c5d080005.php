<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_d86f0daaed9c0b7f388ac6503535afb08756ff38a090945417a69bec118c1cd8 extends Twig_Template
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
        $__internal_4d75a0f7310c9d5e77c77b5e574375d45f437dfd2d39ab8bd5524d1439343409 = $this->env->getExtension("native_profiler");
        $__internal_4d75a0f7310c9d5e77c77b5e574375d45f437dfd2d39ab8bd5524d1439343409->enter($__internal_4d75a0f7310c9d5e77c77b5e574375d45f437dfd2d39ab8bd5524d1439343409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_4d75a0f7310c9d5e77c77b5e574375d45f437dfd2d39ab8bd5524d1439343409->leave($__internal_4d75a0f7310c9d5e77c77b5e574375d45f437dfd2d39ab8bd5524d1439343409_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
