<?php

/* @OCPlatform/Advert/delete.html.twig */
class __TwigTemplate_5bac41c233e5f65a3397169383010e6fb1481d20749aba2092c1076cf66caa0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "@OCPlatform/Advert/delete.html.twig", 3);
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
        $__internal_245cfe80ce24a087c792479c1e08ceba5876ab0435dbe917eed608859626378c = $this->env->getExtension("native_profiler");
        $__internal_245cfe80ce24a087c792479c1e08ceba5876ab0435dbe917eed608859626378c->enter($__internal_245cfe80ce24a087c792479c1e08ceba5876ab0435dbe917eed608859626378c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_245cfe80ce24a087c792479c1e08ceba5876ab0435dbe917eed608859626378c->leave($__internal_245cfe80ce24a087c792479c1e08ceba5876ab0435dbe917eed608859626378c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_35f62da468837948614d55612889cdfc955a0a99c7c92d4f21f974ab5ec8cbee = $this->env->getExtension("native_profiler");
        $__internal_35f62da468837948614d55612889cdfc955a0a99c7c92d4f21f974ab5ec8cbee->enter($__internal_35f62da468837948614d55612889cdfc955a0a99c7c92d4f21f974ab5ec8cbee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_35f62da468837948614d55612889cdfc955a0a99c7c92d4f21f974ab5ec8cbee->leave($__internal_35f62da468837948614d55612889cdfc955a0a99c7c92d4f21f974ab5ec8cbee_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_c40d71ba92f7a3f3ee0b6a96d48b49d645a82e604e7f8c2b20ad8e6b07a92a70 = $this->env->getExtension("native_profiler");
        $__internal_c40d71ba92f7a3f3ee0b6a96d48b49d645a82e604e7f8c2b20ad8e6b07a92a70->enter($__internal_c40d71ba92f7a3f3ee0b6a96d48b49d645a82e604e7f8c2b20ad8e6b07a92a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_c40d71ba92f7a3f3ee0b6a96d48b49d645a82e604e7f8c2b20ad8e6b07a92a70->leave($__internal_c40d71ba92f7a3f3ee0b6a96d48b49d645a82e604e7f8c2b20ad8e6b07a92a70_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/delete.html.twig";
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
