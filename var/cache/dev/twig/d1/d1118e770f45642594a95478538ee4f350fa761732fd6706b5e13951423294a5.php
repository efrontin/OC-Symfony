<?php

/* @OCPlatform/Advert/edit.html.twig */
class __TwigTemplate_a56423ffbf2578c02f69c0261fab52bcf67a73b05407db13d49a15b99eca01a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "@OCPlatform/Advert/edit.html.twig", 3);
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
        $__internal_c3cf6ec0de288d0dc2dc8b827bfbe08e5ff0c323cdfd093a3faeb50736e8b547 = $this->env->getExtension("native_profiler");
        $__internal_c3cf6ec0de288d0dc2dc8b827bfbe08e5ff0c323cdfd093a3faeb50736e8b547->enter($__internal_c3cf6ec0de288d0dc2dc8b827bfbe08e5ff0c323cdfd093a3faeb50736e8b547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3cf6ec0de288d0dc2dc8b827bfbe08e5ff0c323cdfd093a3faeb50736e8b547->leave($__internal_c3cf6ec0de288d0dc2dc8b827bfbe08e5ff0c323cdfd093a3faeb50736e8b547_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4015b5cc33f63be93edecdd88624a4802535feeeba534d8e0b5aa7d02ff9ea48 = $this->env->getExtension("native_profiler");
        $__internal_4015b5cc33f63be93edecdd88624a4802535feeeba534d8e0b5aa7d02ff9ea48->enter($__internal_4015b5cc33f63be93edecdd88624a4802535feeeba534d8e0b5aa7d02ff9ea48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4015b5cc33f63be93edecdd88624a4802535feeeba534d8e0b5aa7d02ff9ea48->leave($__internal_4015b5cc33f63be93edecdd88624a4802535feeeba534d8e0b5aa7d02ff9ea48_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_3aeaeec0e234b910ead490dfb7f86af5c6b369ab293f66c198b0c5fad2bb4d94 = $this->env->getExtension("native_profiler");
        $__internal_3aeaeec0e234b910ead490dfb7f86af5c6b369ab293f66c198b0c5fad2bb4d94->enter($__internal_3aeaeec0e234b910ead490dfb7f86af5c6b369ab293f66c198b0c5fad2bb4d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_3aeaeec0e234b910ead490dfb7f86af5c6b369ab293f66c198b0c5fad2bb4d94->leave($__internal_3aeaeec0e234b910ead490dfb7f86af5c6b369ab293f66c198b0c5fad2bb4d94_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/edit.html.twig";
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
