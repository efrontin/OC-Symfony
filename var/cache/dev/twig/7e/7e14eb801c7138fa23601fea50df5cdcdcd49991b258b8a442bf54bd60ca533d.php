<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_9bbaada897eadb91059e1f519826a2bbfebd78c222f9c3450ba3fb0d29c0b35c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_804ecd58316581344a684d70e768cbd7ec1ee39057c0cc3b7a87303d5ae6ff1c = $this->env->getExtension("native_profiler");
        $__internal_804ecd58316581344a684d70e768cbd7ec1ee39057c0cc3b7a87303d5ae6ff1c->enter($__internal_804ecd58316581344a684d70e768cbd7ec1ee39057c0cc3b7a87303d5ae6ff1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_804ecd58316581344a684d70e768cbd7ec1ee39057c0cc3b7a87303d5ae6ff1c->leave($__internal_804ecd58316581344a684d70e768cbd7ec1ee39057c0cc3b7a87303d5ae6ff1c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bd1ff2826bbf40f5f90f8d5e1bd1eb38de30d862fc99591aee66cb2b6c4601ec = $this->env->getExtension("native_profiler");
        $__internal_bd1ff2826bbf40f5f90f8d5e1bd1eb38de30d862fc99591aee66cb2b6c4601ec->enter($__internal_bd1ff2826bbf40f5f90f8d5e1bd1eb38de30d862fc99591aee66cb2b6c4601ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bd1ff2826bbf40f5f90f8d5e1bd1eb38de30d862fc99591aee66cb2b6c4601ec->leave($__internal_bd1ff2826bbf40f5f90f8d5e1bd1eb38de30d862fc99591aee66cb2b6c4601ec_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d6a3a9ba53ec9ab8288cf88b22d67a6e754d8d6f6b583e1907852cde70dd0284 = $this->env->getExtension("native_profiler");
        $__internal_d6a3a9ba53ec9ab8288cf88b22d67a6e754d8d6f6b583e1907852cde70dd0284->enter($__internal_d6a3a9ba53ec9ab8288cf88b22d67a6e754d8d6f6b583e1907852cde70dd0284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d6a3a9ba53ec9ab8288cf88b22d67a6e754d8d6f6b583e1907852cde70dd0284->leave($__internal_d6a3a9ba53ec9ab8288cf88b22d67a6e754d8d6f6b583e1907852cde70dd0284_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ca4dfe9f0e4efdab83927af78ac6ea2cb12a496dd993bf167cca5b76cb4c37d7 = $this->env->getExtension("native_profiler");
        $__internal_ca4dfe9f0e4efdab83927af78ac6ea2cb12a496dd993bf167cca5b76cb4c37d7->enter($__internal_ca4dfe9f0e4efdab83927af78ac6ea2cb12a496dd993bf167cca5b76cb4c37d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ca4dfe9f0e4efdab83927af78ac6ea2cb12a496dd993bf167cca5b76cb4c37d7->leave($__internal_ca4dfe9f0e4efdab83927af78ac6ea2cb12a496dd993bf167cca5b76cb4c37d7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
