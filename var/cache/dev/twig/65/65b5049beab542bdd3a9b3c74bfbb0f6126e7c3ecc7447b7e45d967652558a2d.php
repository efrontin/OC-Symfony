<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_9184e8d7d05acb6bd586b6ff2e79983975fc7ae4eb1846623222668807b379e4 extends Twig_Template
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
        $__internal_a88e42025828e56dcf4ea8b508d0137ede50f7054e01aee06c86f488afc7d06d = $this->env->getExtension("native_profiler");
        $__internal_a88e42025828e56dcf4ea8b508d0137ede50f7054e01aee06c86f488afc7d06d->enter($__internal_a88e42025828e56dcf4ea8b508d0137ede50f7054e01aee06c86f488afc7d06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_a88e42025828e56dcf4ea8b508d0137ede50f7054e01aee06c86f488afc7d06d->leave($__internal_a88e42025828e56dcf4ea8b508d0137ede50f7054e01aee06c86f488afc7d06d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
