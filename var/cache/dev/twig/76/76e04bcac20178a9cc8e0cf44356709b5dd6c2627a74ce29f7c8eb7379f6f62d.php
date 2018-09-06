<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_8a9f50653e464a80644ee57b3a977e5170260c92db6f81a136085472cdf3ef2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_a8243ac5327946562425996d535783831b1a29ba1eaa40a402ded7acbf7669e4 = $this->env->getExtension("native_profiler");
        $__internal_a8243ac5327946562425996d535783831b1a29ba1eaa40a402ded7acbf7669e4->enter($__internal_a8243ac5327946562425996d535783831b1a29ba1eaa40a402ded7acbf7669e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8243ac5327946562425996d535783831b1a29ba1eaa40a402ded7acbf7669e4->leave($__internal_a8243ac5327946562425996d535783831b1a29ba1eaa40a402ded7acbf7669e4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_267e622cb0d9eccf750d47426c3ea5edf6ecbdabd6b129310c7add8ca77d3135 = $this->env->getExtension("native_profiler");
        $__internal_267e622cb0d9eccf750d47426c3ea5edf6ecbdabd6b129310c7add8ca77d3135->enter($__internal_267e622cb0d9eccf750d47426c3ea5edf6ecbdabd6b129310c7add8ca77d3135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_267e622cb0d9eccf750d47426c3ea5edf6ecbdabd6b129310c7add8ca77d3135->leave($__internal_267e622cb0d9eccf750d47426c3ea5edf6ecbdabd6b129310c7add8ca77d3135_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
