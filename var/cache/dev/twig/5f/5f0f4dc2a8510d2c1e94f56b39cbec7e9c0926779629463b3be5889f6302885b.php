<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_ad5243f415eee5a89313af6f10c46acc0ffde951bf5c2e3997c98392b39d9846 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e002edbb7f24e805d2aa8e594b696576abc77712794c462e273e2e950282ef49 = $this->env->getExtension("native_profiler");
        $__internal_e002edbb7f24e805d2aa8e594b696576abc77712794c462e273e2e950282ef49->enter($__internal_e002edbb7f24e805d2aa8e594b696576abc77712794c462e273e2e950282ef49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e002edbb7f24e805d2aa8e594b696576abc77712794c462e273e2e950282ef49->leave($__internal_e002edbb7f24e805d2aa8e594b696576abc77712794c462e273e2e950282ef49_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2d4df36778b570316bf039e27be86ea3e2b4b64a7e557dbeb91db9466a1f3a76 = $this->env->getExtension("native_profiler");
        $__internal_2d4df36778b570316bf039e27be86ea3e2b4b64a7e557dbeb91db9466a1f3a76->enter($__internal_2d4df36778b570316bf039e27be86ea3e2b4b64a7e557dbeb91db9466a1f3a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_2d4df36778b570316bf039e27be86ea3e2b4b64a7e557dbeb91db9466a1f3a76->leave($__internal_2d4df36778b570316bf039e27be86ea3e2b4b64a7e557dbeb91db9466a1f3a76_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_cb3cb1abc758931877c85c08f33ee01f9e96711e2a4c01d6b542276ffeb5cc18 = $this->env->getExtension("native_profiler");
        $__internal_cb3cb1abc758931877c85c08f33ee01f9e96711e2a4c01d6b542276ffeb5cc18->enter($__internal_cb3cb1abc758931877c85c08f33ee01f9e96711e2a4c01d6b542276ffeb5cc18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cb3cb1abc758931877c85c08f33ee01f9e96711e2a4c01d6b542276ffeb5cc18->leave($__internal_cb3cb1abc758931877c85c08f33ee01f9e96711e2a4c01d6b542276ffeb5cc18_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2e4b3a687426c32208624a53272faee19c0d2ea0d03e88f6aa03aee7ae044697 = $this->env->getExtension("native_profiler");
        $__internal_2e4b3a687426c32208624a53272faee19c0d2ea0d03e88f6aa03aee7ae044697->enter($__internal_2e4b3a687426c32208624a53272faee19c0d2ea0d03e88f6aa03aee7ae044697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2e4b3a687426c32208624a53272faee19c0d2ea0d03e88f6aa03aee7ae044697->leave($__internal_2e4b3a687426c32208624a53272faee19c0d2ea0d03e88f6aa03aee7ae044697_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
