<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_6d04a20d0e3c6177ea292d581f60221cebd3c3ab07650f8406000c7073c7e0bf extends Twig_Template
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
        $__internal_741ded14fb18c59d6e4d5fe13d810581126da598a69ba55c0c0548efc0af880b = $this->env->getExtension("native_profiler");
        $__internal_741ded14fb18c59d6e4d5fe13d810581126da598a69ba55c0c0548efc0af880b->enter($__internal_741ded14fb18c59d6e4d5fe13d810581126da598a69ba55c0c0548efc0af880b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_741ded14fb18c59d6e4d5fe13d810581126da598a69ba55c0c0548efc0af880b->leave($__internal_741ded14fb18c59d6e4d5fe13d810581126da598a69ba55c0c0548efc0af880b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
