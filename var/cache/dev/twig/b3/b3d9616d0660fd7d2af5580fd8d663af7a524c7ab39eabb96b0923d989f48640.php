<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_52d0bc1e95e02284eee24fc86371692278200dd7ed7096e418d86c2e56d0d56b extends Twig_Template
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
        $__internal_171e74454068fa870fb1c6a3825d8e30d9f1470e2e349b52e58fcfd40a3cf0f8 = $this->env->getExtension("native_profiler");
        $__internal_171e74454068fa870fb1c6a3825d8e30d9f1470e2e349b52e58fcfd40a3cf0f8->enter($__internal_171e74454068fa870fb1c6a3825d8e30d9f1470e2e349b52e58fcfd40a3cf0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_171e74454068fa870fb1c6a3825d8e30d9f1470e2e349b52e58fcfd40a3cf0f8->leave($__internal_171e74454068fa870fb1c6a3825d8e30d9f1470e2e349b52e58fcfd40a3cf0f8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
