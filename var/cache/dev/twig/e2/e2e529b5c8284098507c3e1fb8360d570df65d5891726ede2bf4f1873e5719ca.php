<?php

/* OCPlatformBundle:Advert:delete.html.twig */
class __TwigTemplate_502c700f236dfd0b2f23b4a87e5c158b8f90ba65b0189df72df66139c8785074 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:delete.html.twig", 3);
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
        $__internal_ab80760e284d6af3d6300f590bcdbaf3c66f190b93ee08bc66ff9d3ea368200a = $this->env->getExtension("native_profiler");
        $__internal_ab80760e284d6af3d6300f590bcdbaf3c66f190b93ee08bc66ff9d3ea368200a->enter($__internal_ab80760e284d6af3d6300f590bcdbaf3c66f190b93ee08bc66ff9d3ea368200a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab80760e284d6af3d6300f590bcdbaf3c66f190b93ee08bc66ff9d3ea368200a->leave($__internal_ab80760e284d6af3d6300f590bcdbaf3c66f190b93ee08bc66ff9d3ea368200a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_69a9ab96af25db41db0a86b7581c449ec9372d8ea27a9be167b70c8660144521 = $this->env->getExtension("native_profiler");
        $__internal_69a9ab96af25db41db0a86b7581c449ec9372d8ea27a9be167b70c8660144521->enter($__internal_69a9ab96af25db41db0a86b7581c449ec9372d8ea27a9be167b70c8660144521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_69a9ab96af25db41db0a86b7581c449ec9372d8ea27a9be167b70c8660144521->leave($__internal_69a9ab96af25db41db0a86b7581c449ec9372d8ea27a9be167b70c8660144521_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_2837ae534e482eb7f26d606e996b5fee4272d60610b08892431aab82ea30ed11 = $this->env->getExtension("native_profiler");
        $__internal_2837ae534e482eb7f26d606e996b5fee4272d60610b08892431aab82ea30ed11->enter($__internal_2837ae534e482eb7f26d606e996b5fee4272d60610b08892431aab82ea30ed11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Supprimer une annonce</h2>

  <p>
    Etes-vous certain de vouloir supprimer l'annonce \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 18
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
    ";
        // line 24
        echo "    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    ";
        // line 26
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  </form>

";
        
        $__internal_2837ae534e482eb7f26d606e996b5fee4272d60610b08892431aab82ea30ed11->leave($__internal_2837ae534e482eb7f26d606e996b5fee4272d60610b08892431aab82ea30ed11_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 26,  81 => 24,  74 => 19,  69 => 18,  63 => 14,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/delete.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <h2>Supprimer une annonce</h2>*/
/* */
/*   <p>*/
/*     Etes-vous certain de vouloir supprimer l'annonce "{{ advert.title }}" ?*/
/*   </p>*/
/* */
/*   {# On met l'id de l'annonce dans la route de l'action du formulaire #}*/
/*   <form action="{{ path('oc_platform_delete', {'id': advert.id}) }}" method="post">*/
/*     <a href="{{ path('oc_platform_view', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'annonce*/
/*     </a>*/
/*     {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*     <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*     {# Ceci va générer le champ CSRF #}*/
/*     {{ form_rest(form) }}*/
/*   </form>*/
/* */
/* {% endblock %}*/
/* */
