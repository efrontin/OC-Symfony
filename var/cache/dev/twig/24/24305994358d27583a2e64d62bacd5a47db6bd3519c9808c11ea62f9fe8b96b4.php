<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_7dbca4b6343eb090f00dba66e4070693d541407d61c6936ecd48a3b137f7a2db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27ca1392870b52dfa78541a729750e8614d926a2932fa8bd6a42dbdda1d4ff0a = $this->env->getExtension("native_profiler");
        $__internal_27ca1392870b52dfa78541a729750e8614d926a2932fa8bd6a42dbdda1d4ff0a->enter($__internal_27ca1392870b52dfa78541a729750e8614d926a2932fa8bd6a42dbdda1d4ff0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_27ca1392870b52dfa78541a729750e8614d926a2932fa8bd6a42dbdda1d4ff0a->leave($__internal_27ca1392870b52dfa78541a729750e8614d926a2932fa8bd6a42dbdda1d4ff0a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a06dd858eb1d045d2747fc1b2cd6b337ce77581258d55746004be57df6ce8240 = $this->env->getExtension("native_profiler");
        $__internal_a06dd858eb1d045d2747fc1b2cd6b337ce77581258d55746004be57df6ce8240->enter($__internal_a06dd858eb1d045d2747fc1b2cd6b337ce77581258d55746004be57df6ce8240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a06dd858eb1d045d2747fc1b2cd6b337ce77581258d55746004be57df6ce8240->leave($__internal_a06dd858eb1d045d2747fc1b2cd6b337ce77581258d55746004be57df6ce8240_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
