<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_ca93154e25ad64ff8aa868bc16d5713f28a5c3477daa4295aed01fd2733b1695 extends Twig_Template
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
        $__internal_60ed8b290cb61340ed0f2e3a400ddf1d5e37932a77de051e08e6525d24f6edca = $this->env->getExtension("native_profiler");
        $__internal_60ed8b290cb61340ed0f2e3a400ddf1d5e37932a77de051e08e6525d24f6edca->enter($__internal_60ed8b290cb61340ed0f2e3a400ddf1d5e37932a77de051e08e6525d24f6edca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_60ed8b290cb61340ed0f2e3a400ddf1d5e37932a77de051e08e6525d24f6edca->leave($__internal_60ed8b290cb61340ed0f2e3a400ddf1d5e37932a77de051e08e6525d24f6edca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
