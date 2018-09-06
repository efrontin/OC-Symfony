<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_1a4a39371abfaf3821ea2c2317f85e5476d3084d96615dcd1425a8f2a330cd43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:add.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49be4292a1069355cd671e1d54bf97c5650841e7d5103a435509e956d168ac6c = $this->env->getExtension("native_profiler");
        $__internal_49be4292a1069355cd671e1d54bf97c5650841e7d5103a435509e956d168ac6c->enter($__internal_49be4292a1069355cd671e1d54bf97c5650841e7d5103a435509e956d168ac6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49be4292a1069355cd671e1d54bf97c5650841e7d5103a435509e956d168ac6c->leave($__internal_49be4292a1069355cd671e1d54bf97c5650841e7d5103a435509e956d168ac6c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_40875257276e02376acc04f7a1faf36ed82f74dc6111c87d82a4b9cc22c83b06 = $this->env->getExtension("native_profiler");
        $__internal_40875257276e02376acc04f7a1faf36ed82f74dc6111c87d82a4b9cc22c83b06->enter($__internal_40875257276e02376acc04f7a1faf36ed82f74dc6111c87d82a4b9cc22c83b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Ajouter une annonce</h2>

  ";
        // line 9
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

";
        
        $__internal_40875257276e02376acc04f7a1faf36ed82f74dc6111c87d82a4b9cc22c83b06->leave($__internal_40875257276e02376acc04f7a1faf36ed82f74dc6111c87d82a4b9cc22c83b06_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2>Ajouter une annonce</h2>*/
/* */
/*   {{ include("OCPlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Attention : cette annonce sera ajoutée directement*/
/*     sur la page d'accueil après validation du formulaire.*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
