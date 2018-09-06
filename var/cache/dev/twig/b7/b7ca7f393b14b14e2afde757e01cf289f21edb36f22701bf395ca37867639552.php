<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_8470993716bb687821dae488fd888af205f70be704a806dff1b164bae602ea90 extends Twig_Template
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
        $__internal_9a84b26dc41901961ff3497899b98ffa47cbda09b273466103126e9d665e2f17 = $this->env->getExtension("native_profiler");
        $__internal_9a84b26dc41901961ff3497899b98ffa47cbda09b273466103126e9d665e2f17->enter($__internal_9a84b26dc41901961ff3497899b98ffa47cbda09b273466103126e9d665e2f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9a84b26dc41901961ff3497899b98ffa47cbda09b273466103126e9d665e2f17->leave($__internal_9a84b26dc41901961ff3497899b98ffa47cbda09b273466103126e9d665e2f17_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7f19e21a1d4b2e0343a9648e5fff03b7584e6437d418eb7950af799d5780d8ec = $this->env->getExtension("native_profiler");
        $__internal_7f19e21a1d4b2e0343a9648e5fff03b7584e6437d418eb7950af799d5780d8ec->enter($__internal_7f19e21a1d4b2e0343a9648e5fff03b7584e6437d418eb7950af799d5780d8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_7f19e21a1d4b2e0343a9648e5fff03b7584e6437d418eb7950af799d5780d8ec->leave($__internal_7f19e21a1d4b2e0343a9648e5fff03b7584e6437d418eb7950af799d5780d8ec_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_16a1f82e7842a59c985640916a47bedf8ca70796d5f3c314eeb49f850b96fc54 = $this->env->getExtension("native_profiler");
        $__internal_16a1f82e7842a59c985640916a47bedf8ca70796d5f3c314eeb49f850b96fc54->enter($__internal_16a1f82e7842a59c985640916a47bedf8ca70796d5f3c314eeb49f850b96fc54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_16a1f82e7842a59c985640916a47bedf8ca70796d5f3c314eeb49f850b96fc54->leave($__internal_16a1f82e7842a59c985640916a47bedf8ca70796d5f3c314eeb49f850b96fc54_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_10570f26c4018f5b60a6ce13ec21209ecae1dc178d8f3b9075527c3e64105cbf = $this->env->getExtension("native_profiler");
        $__internal_10570f26c4018f5b60a6ce13ec21209ecae1dc178d8f3b9075527c3e64105cbf->enter($__internal_10570f26c4018f5b60a6ce13ec21209ecae1dc178d8f3b9075527c3e64105cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_10570f26c4018f5b60a6ce13ec21209ecae1dc178d8f3b9075527c3e64105cbf->leave($__internal_10570f26c4018f5b60a6ce13ec21209ecae1dc178d8f3b9075527c3e64105cbf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
