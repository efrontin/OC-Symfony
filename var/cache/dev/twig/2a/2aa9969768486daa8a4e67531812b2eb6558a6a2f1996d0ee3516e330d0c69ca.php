<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_537927e1b3db97f4370a44742a4aa1d8f8635d0df7f3a761b77df1b62fafbed9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_c45ebddb0ad793cc048f25e50b4372fb56ff504216eb075ff4fa69c3b41ba307 = $this->env->getExtension("native_profiler");
        $__internal_c45ebddb0ad793cc048f25e50b4372fb56ff504216eb075ff4fa69c3b41ba307->enter($__internal_c45ebddb0ad793cc048f25e50b4372fb56ff504216eb075ff4fa69c3b41ba307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c45ebddb0ad793cc048f25e50b4372fb56ff504216eb075ff4fa69c3b41ba307->leave($__internal_c45ebddb0ad793cc048f25e50b4372fb56ff504216eb075ff4fa69c3b41ba307_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8f02ab43a19a102257a650de94cc58cbc31fc86dab7d5c7280a382aee780757f = $this->env->getExtension("native_profiler");
        $__internal_8f02ab43a19a102257a650de94cc58cbc31fc86dab7d5c7280a382aee780757f->enter($__internal_8f02ab43a19a102257a650de94cc58cbc31fc86dab7d5c7280a382aee780757f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_8f02ab43a19a102257a650de94cc58cbc31fc86dab7d5c7280a382aee780757f->leave($__internal_8f02ab43a19a102257a650de94cc58cbc31fc86dab7d5c7280a382aee780757f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
