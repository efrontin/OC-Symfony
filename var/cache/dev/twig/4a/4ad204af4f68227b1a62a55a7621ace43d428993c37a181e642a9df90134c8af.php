<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_30fc2adc4532dc5b27e2ee8f04f71676f0285c76a26b33923f5bd4a398eeba09 extends Twig_Template
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
        $__internal_2dec8b2c0c256d9a002d343e90c360ae4053c539108ccee8551de8449e2b9841 = $this->env->getExtension("native_profiler");
        $__internal_2dec8b2c0c256d9a002d343e90c360ae4053c539108ccee8551de8449e2b9841->enter($__internal_2dec8b2c0c256d9a002d343e90c360ae4053c539108ccee8551de8449e2b9841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_2dec8b2c0c256d9a002d343e90c360ae4053c539108ccee8551de8449e2b9841->leave($__internal_2dec8b2c0c256d9a002d343e90c360ae4053c539108ccee8551de8449e2b9841_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
