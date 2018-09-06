<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8ad4496ec3c5b55292fa448fd216a24566b49e74d4559675dd210e7ccc08cc51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_f7969a9be48a74909d575cc71520afe43b924415681d0c7ea5d2cce6de483d89 = $this->env->getExtension("native_profiler");
        $__internal_f7969a9be48a74909d575cc71520afe43b924415681d0c7ea5d2cce6de483d89->enter($__internal_f7969a9be48a74909d575cc71520afe43b924415681d0c7ea5d2cce6de483d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7969a9be48a74909d575cc71520afe43b924415681d0c7ea5d2cce6de483d89->leave($__internal_f7969a9be48a74909d575cc71520afe43b924415681d0c7ea5d2cce6de483d89_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bd7a8eb0a5c95df2c0aa91759d646cf0c45c9ef87763b055adb2aa4acf0ea322 = $this->env->getExtension("native_profiler");
        $__internal_bd7a8eb0a5c95df2c0aa91759d646cf0c45c9ef87763b055adb2aa4acf0ea322->enter($__internal_bd7a8eb0a5c95df2c0aa91759d646cf0c45c9ef87763b055adb2aa4acf0ea322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bd7a8eb0a5c95df2c0aa91759d646cf0c45c9ef87763b055adb2aa4acf0ea322->leave($__internal_bd7a8eb0a5c95df2c0aa91759d646cf0c45c9ef87763b055adb2aa4acf0ea322_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d81cc65c81093abe8d1ebdf2e0bdc389a873474f28daf65559f80e91c577af89 = $this->env->getExtension("native_profiler");
        $__internal_d81cc65c81093abe8d1ebdf2e0bdc389a873474f28daf65559f80e91c577af89->enter($__internal_d81cc65c81093abe8d1ebdf2e0bdc389a873474f28daf65559f80e91c577af89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d81cc65c81093abe8d1ebdf2e0bdc389a873474f28daf65559f80e91c577af89->leave($__internal_d81cc65c81093abe8d1ebdf2e0bdc389a873474f28daf65559f80e91c577af89_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cdab6358a143395cd122ec8c309d744595bea893e8cb7aca53020a91f372e768 = $this->env->getExtension("native_profiler");
        $__internal_cdab6358a143395cd122ec8c309d744595bea893e8cb7aca53020a91f372e768->enter($__internal_cdab6358a143395cd122ec8c309d744595bea893e8cb7aca53020a91f372e768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cdab6358a143395cd122ec8c309d744595bea893e8cb7aca53020a91f372e768->leave($__internal_cdab6358a143395cd122ec8c309d744595bea893e8cb7aca53020a91f372e768_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
