<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_3109f6fddfde753c4adfbea6e53f0b7d9bfe23d1fa3d22e8a27ba700a3565d4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:edit.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c14a08a3cf9ab97ba56e2f79828d52f09b2efaf0c314bf2a08bbb7a776ce6b45 = $this->env->getExtension("native_profiler");
        $__internal_c14a08a3cf9ab97ba56e2f79828d52f09b2efaf0c314bf2a08bbb7a776ce6b45->enter($__internal_c14a08a3cf9ab97ba56e2f79828d52f09b2efaf0c314bf2a08bbb7a776ce6b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c14a08a3cf9ab97ba56e2f79828d52f09b2efaf0c314bf2a08bbb7a776ce6b45->leave($__internal_c14a08a3cf9ab97ba56e2f79828d52f09b2efaf0c314bf2a08bbb7a776ce6b45_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4a54417fa9efe6a094af3956369a07ea73869233d5a4934218eb01fb4475988 = $this->env->getExtension("native_profiler");
        $__internal_a4a54417fa9efe6a094af3956369a07ea73869233d5a4934218eb01fb4475988->enter($__internal_a4a54417fa9efe6a094af3956369a07ea73869233d5a4934218eb01fb4475988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a4a54417fa9efe6a094af3956369a07ea73869233d5a4934218eb01fb4475988->leave($__internal_a4a54417fa9efe6a094af3956369a07ea73869233d5a4934218eb01fb4475988_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_3817af20dc793619d750d6215caf5f6c269d109ebfa6e04ff666bfce9f5606a0 = $this->env->getExtension("native_profiler");
        $__internal_3817af20dc793619d750d6215caf5f6c269d109ebfa6e04ff666bfce9f5606a0->enter($__internal_3817af20dc793619d750d6215caf5f6c269d109ebfa6e04ff666bfce9f5606a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Modifier une annonce</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_3817af20dc793619d750d6215caf5f6c269d109ebfa6e04ff666bfce9f5606a0->leave($__internal_3817af20dc793619d750d6215caf5f6c269d109ebfa6e04ff666bfce9f5606a0_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <h2>Modifier une annonce</h2>*/
/* */
/*   {{ include("OCPlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Vous éditez une annonce déjà existante, merci de ne pas changer*/
/*     l'esprit générale de l'annonce déjà publiée.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('oc_platform_view', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'annonce*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
