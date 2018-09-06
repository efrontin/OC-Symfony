<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_33c61abd62e86b2931c279d7017d36c3fc05586e7320ad765a170e301d349c2c extends Twig_Template
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
        $__internal_73a71f79a76cba60082a227319fd9793468f9f3bffd4dc3fa46b028a90d60d9f = $this->env->getExtension("native_profiler");
        $__internal_73a71f79a76cba60082a227319fd9793468f9f3bffd4dc3fa46b028a90d60d9f->enter($__internal_73a71f79a76cba60082a227319fd9793468f9f3bffd4dc3fa46b028a90d60d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_73a71f79a76cba60082a227319fd9793468f9f3bffd4dc3fa46b028a90d60d9f->leave($__internal_73a71f79a76cba60082a227319fd9793468f9f3bffd4dc3fa46b028a90d60d9f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
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
