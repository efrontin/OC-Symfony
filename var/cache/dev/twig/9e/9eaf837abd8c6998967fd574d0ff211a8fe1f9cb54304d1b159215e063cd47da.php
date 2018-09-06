<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_e4ef770a619f0cfbd8b5a87e3a35bb172eb6f8c5c680f9c92f5e482e816e0a42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_37660a0583197ac7a76745206ab61ded52994ac96ca7bc099cb708dafd417523 = $this->env->getExtension("native_profiler");
        $__internal_37660a0583197ac7a76745206ab61ded52994ac96ca7bc099cb708dafd417523->enter($__internal_37660a0583197ac7a76745206ab61ded52994ac96ca7bc099cb708dafd417523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37660a0583197ac7a76745206ab61ded52994ac96ca7bc099cb708dafd417523->leave($__internal_37660a0583197ac7a76745206ab61ded52994ac96ca7bc099cb708dafd417523_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ed4da59a4d4c6f219661648521747d16e492bdb89de878c470d36a6dde4efa1c = $this->env->getExtension("native_profiler");
        $__internal_ed4da59a4d4c6f219661648521747d16e492bdb89de878c470d36a6dde4efa1c->enter($__internal_ed4da59a4d4c6f219661648521747d16e492bdb89de878c470d36a6dde4efa1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_ed4da59a4d4c6f219661648521747d16e492bdb89de878c470d36a6dde4efa1c->leave($__internal_ed4da59a4d4c6f219661648521747d16e492bdb89de878c470d36a6dde4efa1c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
