<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_f199110c73fce88354ac0bfa70ae86ebdc78f0c498099f74a5f55d49e68780dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a87f7acb38256c47b5542cbfcbf36d2e36f06f70dea3520a8c44f8f347939446 = $this->env->getExtension("native_profiler");
        $__internal_a87f7acb38256c47b5542cbfcbf36d2e36f06f70dea3520a8c44f8f347939446->enter($__internal_a87f7acb38256c47b5542cbfcbf36d2e36f06f70dea3520a8c44f8f347939446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_a87f7acb38256c47b5542cbfcbf36d2e36f06f70dea3520a8c44f8f347939446->leave($__internal_a87f7acb38256c47b5542cbfcbf36d2e36f06f70dea3520a8c44f8f347939446_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
