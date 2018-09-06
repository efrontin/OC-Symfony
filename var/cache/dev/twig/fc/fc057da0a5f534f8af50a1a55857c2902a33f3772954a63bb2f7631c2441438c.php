<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_6f0216dc1d2b0765162612d4b304e8cde558e1a441b01fcc29c5b782cd7eabc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_4f40fc67c05ade76364e797de78f33e3a3ceb9d76523a1d11502a6daa02ec357 = $this->env->getExtension("native_profiler");
        $__internal_4f40fc67c05ade76364e797de78f33e3a3ceb9d76523a1d11502a6daa02ec357->enter($__internal_4f40fc67c05ade76364e797de78f33e3a3ceb9d76523a1d11502a6daa02ec357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f40fc67c05ade76364e797de78f33e3a3ceb9d76523a1d11502a6daa02ec357->leave($__internal_4f40fc67c05ade76364e797de78f33e3a3ceb9d76523a1d11502a6daa02ec357_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f45ed151ed884ba5bc25dec2fd6638c9b11873191af9709c212105a3008ec7ad = $this->env->getExtension("native_profiler");
        $__internal_f45ed151ed884ba5bc25dec2fd6638c9b11873191af9709c212105a3008ec7ad->enter($__internal_f45ed151ed884ba5bc25dec2fd6638c9b11873191af9709c212105a3008ec7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_f45ed151ed884ba5bc25dec2fd6638c9b11873191af9709c212105a3008ec7ad->leave($__internal_f45ed151ed884ba5bc25dec2fd6638c9b11873191af9709c212105a3008ec7ad_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
