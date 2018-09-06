<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_3f7d9eff4f8e42dfa4185ea5d21fdeb83766333e5baba53b2113e6ee2acb1cdb extends Twig_Template
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
        $__internal_e1a93e7db97be656de9e6b359f310b1849f851132419ce8f0565db06d7fa6e24 = $this->env->getExtension("native_profiler");
        $__internal_e1a93e7db97be656de9e6b359f310b1849f851132419ce8f0565db06d7fa6e24->enter($__internal_e1a93e7db97be656de9e6b359f310b1849f851132419ce8f0565db06d7fa6e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_e1a93e7db97be656de9e6b359f310b1849f851132419ce8f0565db06d7fa6e24->leave($__internal_e1a93e7db97be656de9e6b359f310b1849f851132419ce8f0565db06d7fa6e24_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
