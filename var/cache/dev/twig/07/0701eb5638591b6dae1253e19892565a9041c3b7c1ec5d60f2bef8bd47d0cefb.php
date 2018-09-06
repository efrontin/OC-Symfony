<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_8965232069a9a98d83918338bdb4a413adff5239c80a7b4d8c2ec768972f1f55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
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
        $__internal_8dad3562722a965ad25260373e6b016faaa86035cf5f16e4e5efbb436ad0aec6 = $this->env->getExtension("native_profiler");
        $__internal_8dad3562722a965ad25260373e6b016faaa86035cf5f16e4e5efbb436ad0aec6->enter($__internal_8dad3562722a965ad25260373e6b016faaa86035cf5f16e4e5efbb436ad0aec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dad3562722a965ad25260373e6b016faaa86035cf5f16e4e5efbb436ad0aec6->leave($__internal_8dad3562722a965ad25260373e6b016faaa86035cf5f16e4e5efbb436ad0aec6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c352b063e08dfdf742a5ec82b1666d9da099f446d8484965aba5fbca12c684f8 = $this->env->getExtension("native_profiler");
        $__internal_c352b063e08dfdf742a5ec82b1666d9da099f446d8484965aba5fbca12c684f8->enter($__internal_c352b063e08dfdf742a5ec82b1666d9da099f446d8484965aba5fbca12c684f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c352b063e08dfdf742a5ec82b1666d9da099f446d8484965aba5fbca12c684f8->leave($__internal_c352b063e08dfdf742a5ec82b1666d9da099f446d8484965aba5fbca12c684f8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_99f14e408c77dfa4e4b3758f27cc9cdad4f54d12030510ca070d0b2df00d7b0d = $this->env->getExtension("native_profiler");
        $__internal_99f14e408c77dfa4e4b3758f27cc9cdad4f54d12030510ca070d0b2df00d7b0d->enter($__internal_99f14e408c77dfa4e4b3758f27cc9cdad4f54d12030510ca070d0b2df00d7b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_99f14e408c77dfa4e4b3758f27cc9cdad4f54d12030510ca070d0b2df00d7b0d->leave($__internal_99f14e408c77dfa4e4b3758f27cc9cdad4f54d12030510ca070d0b2df00d7b0d_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_1703e4a1385de2a2969e9cb9ed0380c7b543b0356309250db9055356270eeb78 = $this->env->getExtension("native_profiler");
        $__internal_1703e4a1385de2a2969e9cb9ed0380c7b543b0356309250db9055356270eeb78->enter($__internal_1703e4a1385de2a2969e9cb9ed0380c7b543b0356309250db9055356270eeb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_1703e4a1385de2a2969e9cb9ed0380c7b543b0356309250db9055356270eeb78->leave($__internal_1703e4a1385de2a2969e9cb9ed0380c7b543b0356309250db9055356270eeb78_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
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
