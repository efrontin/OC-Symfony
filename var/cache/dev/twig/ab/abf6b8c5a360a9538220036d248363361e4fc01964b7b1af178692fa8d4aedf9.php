<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_841df37b6d42230ff3f63b87119388e7f969b0ec4880b29236800c93b6e15aef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_913af096f0960c3e044c908ee716cc0e24d361efaf8c5d1873933e4928f05502 = $this->env->getExtension("native_profiler");
        $__internal_913af096f0960c3e044c908ee716cc0e24d361efaf8c5d1873933e4928f05502->enter($__internal_913af096f0960c3e044c908ee716cc0e24d361efaf8c5d1873933e4928f05502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_913af096f0960c3e044c908ee716cc0e24d361efaf8c5d1873933e4928f05502->leave($__internal_913af096f0960c3e044c908ee716cc0e24d361efaf8c5d1873933e4928f05502_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5dad7ab52f311d911f1495ee5100eb47076c2a0fc4094239a76add32302c88d5 = $this->env->getExtension("native_profiler");
        $__internal_5dad7ab52f311d911f1495ee5100eb47076c2a0fc4094239a76add32302c88d5->enter($__internal_5dad7ab52f311d911f1495ee5100eb47076c2a0fc4094239a76add32302c88d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5dad7ab52f311d911f1495ee5100eb47076c2a0fc4094239a76add32302c88d5->leave($__internal_5dad7ab52f311d911f1495ee5100eb47076c2a0fc4094239a76add32302c88d5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
