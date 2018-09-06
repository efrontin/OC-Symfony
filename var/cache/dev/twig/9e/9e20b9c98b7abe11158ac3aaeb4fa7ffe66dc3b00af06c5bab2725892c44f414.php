<?php

/* @OCPlatform/Advert/add.html.twig */
class __TwigTemplate_6429d5916d5f5039e95058372c430022400d0d86d2fcd4feef3d696e3aba4637 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "@OCPlatform/Advert/add.html.twig", 3);
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
        $__internal_98b14b34032d5f3d74aa5960c2949dbda14665164ff7cb2714cbdfe909b3039e = $this->env->getExtension("native_profiler");
        $__internal_98b14b34032d5f3d74aa5960c2949dbda14665164ff7cb2714cbdfe909b3039e->enter($__internal_98b14b34032d5f3d74aa5960c2949dbda14665164ff7cb2714cbdfe909b3039e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98b14b34032d5f3d74aa5960c2949dbda14665164ff7cb2714cbdfe909b3039e->leave($__internal_98b14b34032d5f3d74aa5960c2949dbda14665164ff7cb2714cbdfe909b3039e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf793ec5457b795065c975cf0f758105775e050024d451133e54d67e1f946fa3 = $this->env->getExtension("native_profiler");
        $__internal_cf793ec5457b795065c975cf0f758105775e050024d451133e54d67e1f946fa3->enter($__internal_cf793ec5457b795065c975cf0f758105775e050024d451133e54d67e1f946fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cf793ec5457b795065c975cf0f758105775e050024d451133e54d67e1f946fa3->leave($__internal_cf793ec5457b795065c975cf0f758105775e050024d451133e54d67e1f946fa3_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/add.html.twig";
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
