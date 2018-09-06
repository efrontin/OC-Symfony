<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_b77e513b81038c53956a2954c366a7c63904575004a3c72e504bf462ea4a6fd6 extends Twig_Template
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
        $__internal_a8175c57bda4df270904bfa0bb355a81d4ae624ab09eca36eefa74bfa3907fd5 = $this->env->getExtension("native_profiler");
        $__internal_a8175c57bda4df270904bfa0bb355a81d4ae624ab09eca36eefa74bfa3907fd5->enter($__internal_a8175c57bda4df270904bfa0bb355a81d4ae624ab09eca36eefa74bfa3907fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a8175c57bda4df270904bfa0bb355a81d4ae624ab09eca36eefa74bfa3907fd5->leave($__internal_a8175c57bda4df270904bfa0bb355a81d4ae624ab09eca36eefa74bfa3907fd5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e3fda9048df0aaab1695a0751882e65e1d60218c0c7224e01f3f81fe20553f6e = $this->env->getExtension("native_profiler");
        $__internal_e3fda9048df0aaab1695a0751882e65e1d60218c0c7224e01f3f81fe20553f6e->enter($__internal_e3fda9048df0aaab1695a0751882e65e1d60218c0c7224e01f3f81fe20553f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e3fda9048df0aaab1695a0751882e65e1d60218c0c7224e01f3f81fe20553f6e->leave($__internal_e3fda9048df0aaab1695a0751882e65e1d60218c0c7224e01f3f81fe20553f6e_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6e7fb35a6f0a932ef99060da68aa37d20cbf1056f30babdaa95ab7924e30c20d = $this->env->getExtension("native_profiler");
        $__internal_6e7fb35a6f0a932ef99060da68aa37d20cbf1056f30babdaa95ab7924e30c20d->enter($__internal_6e7fb35a6f0a932ef99060da68aa37d20cbf1056f30babdaa95ab7924e30c20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6e7fb35a6f0a932ef99060da68aa37d20cbf1056f30babdaa95ab7924e30c20d->leave($__internal_6e7fb35a6f0a932ef99060da68aa37d20cbf1056f30babdaa95ab7924e30c20d_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e9a432896973f51f32a0e2a890ef8fa6f07aad70ea6891eac3c50fa5738fc2fd = $this->env->getExtension("native_profiler");
        $__internal_e9a432896973f51f32a0e2a890ef8fa6f07aad70ea6891eac3c50fa5738fc2fd->enter($__internal_e9a432896973f51f32a0e2a890ef8fa6f07aad70ea6891eac3c50fa5738fc2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e9a432896973f51f32a0e2a890ef8fa6f07aad70ea6891eac3c50fa5738fc2fd->leave($__internal_e9a432896973f51f32a0e2a890ef8fa6f07aad70ea6891eac3c50fa5738fc2fd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
