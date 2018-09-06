<?php

/* @OCPlatform/layout.html.twig */
class __TwigTemplate_10b164dd3ca0c1e1e54d48f047a44350f1bf37203c496d583c32be12007ee4f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "@OCPlatform/layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a4e9b131a68a255f10874c9de0e24d06ea56e81ca442830ace515a8b88723ad = $this->env->getExtension("native_profiler");
        $__internal_1a4e9b131a68a255f10874c9de0e24d06ea56e81ca442830ace515a8b88723ad->enter($__internal_1a4e9b131a68a255f10874c9de0e24d06ea56e81ca442830ace515a8b88723ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a4e9b131a68a255f10874c9de0e24d06ea56e81ca442830ace515a8b88723ad->leave($__internal_1a4e9b131a68a255f10874c9de0e24d06ea56e81ca442830ace515a8b88723ad_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6de378de4470483e773823fc71310df560bed5d59b1cde8672fb27ab4a76125 = $this->env->getExtension("native_profiler");
        $__internal_e6de378de4470483e773823fc71310df560bed5d59b1cde8672fb27ab4a76125->enter($__internal_e6de378de4470483e773823fc71310df560bed5d59b1cde8672fb27ab4a76125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e6de378de4470483e773823fc71310df560bed5d59b1cde8672fb27ab4a76125->leave($__internal_e6de378de4470483e773823fc71310df560bed5d59b1cde8672fb27ab4a76125_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ae2990490b0ddda830d832765f03c041660bc95eacf948fbc009f04cd228313 = $this->env->getExtension("native_profiler");
        $__internal_9ae2990490b0ddda830d832765f03c041660bc95eacf948fbc009f04cd228313->enter($__internal_9ae2990490b0ddda830d832765f03c041660bc95eacf948fbc009f04cd228313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_9ae2990490b0ddda830d832765f03c041660bc95eacf948fbc009f04cd228313->leave($__internal_9ae2990490b0ddda830d832765f03c041660bc95eacf948fbc009f04cd228313_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_e739556c513341cea1dd1e07b986b92bad50197233c2482134cad07d7e8e1edc = $this->env->getExtension("native_profiler");
        $__internal_e739556c513341cea1dd1e07b986b92bad50197233c2482134cad07d7e8e1edc->enter($__internal_e739556c513341cea1dd1e07b986b92bad50197233c2482134cad07d7e8e1edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_e739556c513341cea1dd1e07b986b92bad50197233c2482134cad07d7e8e1edc->leave($__internal_e739556c513341cea1dd1e07b986b92bad50197233c2482134cad07d7e8e1edc_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  78 => 17,  70 => 19,  67 => 17,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "OCCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*   <h1>Annonces</h1>*/
/* */
/*   <hr>*/
/* */
/*   {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*   {% block ocplatform_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
