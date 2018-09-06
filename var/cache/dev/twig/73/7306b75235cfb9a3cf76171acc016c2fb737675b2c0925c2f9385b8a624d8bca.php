<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_6dac992d2ac80c466c24486c627ea50f73ff5b04312d8fbf7b3152a5fffc5cc9 extends Twig_Template
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
        $__internal_ed2f90c63a6e5f904b1e0f9decc7d809549a83d0d1e0dda600b59e7ca20096b5 = $this->env->getExtension("native_profiler");
        $__internal_ed2f90c63a6e5f904b1e0f9decc7d809549a83d0d1e0dda600b59e7ca20096b5->enter($__internal_ed2f90c63a6e5f904b1e0f9decc7d809549a83d0d1e0dda600b59e7ca20096b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ed2f90c63a6e5f904b1e0f9decc7d809549a83d0d1e0dda600b59e7ca20096b5->leave($__internal_ed2f90c63a6e5f904b1e0f9decc7d809549a83d0d1e0dda600b59e7ca20096b5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bafc3cd750525deadab884b53caa52381692992b05e1779a053f4c75bb8bb189 = $this->env->getExtension("native_profiler");
        $__internal_bafc3cd750525deadab884b53caa52381692992b05e1779a053f4c75bb8bb189->enter($__internal_bafc3cd750525deadab884b53caa52381692992b05e1779a053f4c75bb8bb189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bafc3cd750525deadab884b53caa52381692992b05e1779a053f4c75bb8bb189->leave($__internal_bafc3cd750525deadab884b53caa52381692992b05e1779a053f4c75bb8bb189_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6418fa26e758e5cd14194dca9fd4a734c62168b7459afef8f0364f92184385b9 = $this->env->getExtension("native_profiler");
        $__internal_6418fa26e758e5cd14194dca9fd4a734c62168b7459afef8f0364f92184385b9->enter($__internal_6418fa26e758e5cd14194dca9fd4a734c62168b7459afef8f0364f92184385b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6418fa26e758e5cd14194dca9fd4a734c62168b7459afef8f0364f92184385b9->leave($__internal_6418fa26e758e5cd14194dca9fd4a734c62168b7459afef8f0364f92184385b9_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3571298daf93e0bc7c8bc96afd7f45dce876a31ca46d466eb20c3fcf16fa659b = $this->env->getExtension("native_profiler");
        $__internal_3571298daf93e0bc7c8bc96afd7f45dce876a31ca46d466eb20c3fcf16fa659b->enter($__internal_3571298daf93e0bc7c8bc96afd7f45dce876a31ca46d466eb20c3fcf16fa659b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3571298daf93e0bc7c8bc96afd7f45dce876a31ca46d466eb20c3fcf16fa659b->leave($__internal_3571298daf93e0bc7c8bc96afd7f45dce876a31ca46d466eb20c3fcf16fa659b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
