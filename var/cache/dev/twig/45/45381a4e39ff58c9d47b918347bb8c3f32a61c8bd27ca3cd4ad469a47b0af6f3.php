<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_7d310c3d89921e7563fe39042d37c61113e007ba37045623a29599d58996aed1 extends Twig_Template
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
        $__internal_daf72ae30a8839736db84df19bd626d0ee44d395b6f7cedd4bb0cbf03ec81049 = $this->env->getExtension("native_profiler");
        $__internal_daf72ae30a8839736db84df19bd626d0ee44d395b6f7cedd4bb0cbf03ec81049->enter($__internal_daf72ae30a8839736db84df19bd626d0ee44d395b6f7cedd4bb0cbf03ec81049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_daf72ae30a8839736db84df19bd626d0ee44d395b6f7cedd4bb0cbf03ec81049->leave($__internal_daf72ae30a8839736db84df19bd626d0ee44d395b6f7cedd4bb0cbf03ec81049_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
