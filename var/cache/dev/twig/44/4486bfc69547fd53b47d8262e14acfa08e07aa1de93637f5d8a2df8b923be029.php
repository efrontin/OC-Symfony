<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_176139a6adea9f718e4e243399682c176566ec7ed6cf9d340c18c17145720c85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_501a287e5e84d767d6a607d915ce6f324fe8f5bb19fc99ff60aa621f21f39dd0 = $this->env->getExtension("native_profiler");
        $__internal_501a287e5e84d767d6a607d915ce6f324fe8f5bb19fc99ff60aa621f21f39dd0->enter($__internal_501a287e5e84d767d6a607d915ce6f324fe8f5bb19fc99ff60aa621f21f39dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_501a287e5e84d767d6a607d915ce6f324fe8f5bb19fc99ff60aa621f21f39dd0->leave($__internal_501a287e5e84d767d6a607d915ce6f324fe8f5bb19fc99ff60aa621f21f39dd0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eab1f3605a2ba866dbbfc9946531c3a3152e829b1dd60fe580ca53cc4aadcaf8 = $this->env->getExtension("native_profiler");
        $__internal_eab1f3605a2ba866dbbfc9946531c3a3152e829b1dd60fe580ca53cc4aadcaf8->enter($__internal_eab1f3605a2ba866dbbfc9946531c3a3152e829b1dd60fe580ca53cc4aadcaf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_eab1f3605a2ba866dbbfc9946531c3a3152e829b1dd60fe580ca53cc4aadcaf8->leave($__internal_eab1f3605a2ba866dbbfc9946531c3a3152e829b1dd60fe580ca53cc4aadcaf8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_451c684813a9a53ee6cdb37bc44bb3364905a4940474e16ab0dea265b5afe25f = $this->env->getExtension("native_profiler");
        $__internal_451c684813a9a53ee6cdb37bc44bb3364905a4940474e16ab0dea265b5afe25f->enter($__internal_451c684813a9a53ee6cdb37bc44bb3364905a4940474e16ab0dea265b5afe25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_451c684813a9a53ee6cdb37bc44bb3364905a4940474e16ab0dea265b5afe25f->leave($__internal_451c684813a9a53ee6cdb37bc44bb3364905a4940474e16ab0dea265b5afe25f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
