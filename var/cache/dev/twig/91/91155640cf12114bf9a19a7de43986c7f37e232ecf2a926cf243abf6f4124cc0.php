<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_78dad3cb5bd82b3d5e3e088d8c708fabf23be112c1fd020fa38ec924e484ba1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_a8b3e08ebaeb21253ca186ed721c0bf0d71a143b97b63e8d718253b2d92a361d = $this->env->getExtension("native_profiler");
        $__internal_a8b3e08ebaeb21253ca186ed721c0bf0d71a143b97b63e8d718253b2d92a361d->enter($__internal_a8b3e08ebaeb21253ca186ed721c0bf0d71a143b97b63e8d718253b2d92a361d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8b3e08ebaeb21253ca186ed721c0bf0d71a143b97b63e8d718253b2d92a361d->leave($__internal_a8b3e08ebaeb21253ca186ed721c0bf0d71a143b97b63e8d718253b2d92a361d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6dfd7e916b66a0515bb233d620d7d3d72fa8f55a07de654e3e86a0652240a18 = $this->env->getExtension("native_profiler");
        $__internal_c6dfd7e916b66a0515bb233d620d7d3d72fa8f55a07de654e3e86a0652240a18->enter($__internal_c6dfd7e916b66a0515bb233d620d7d3d72fa8f55a07de654e3e86a0652240a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c6dfd7e916b66a0515bb233d620d7d3d72fa8f55a07de654e3e86a0652240a18->leave($__internal_c6dfd7e916b66a0515bb233d620d7d3d72fa8f55a07de654e3e86a0652240a18_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc56268da0411ef194b0a3a4e59be25797085372825ec57c6e420c65b94a3ddc = $this->env->getExtension("native_profiler");
        $__internal_fc56268da0411ef194b0a3a4e59be25797085372825ec57c6e420c65b94a3ddc->enter($__internal_fc56268da0411ef194b0a3a4e59be25797085372825ec57c6e420c65b94a3ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fc56268da0411ef194b0a3a4e59be25797085372825ec57c6e420c65b94a3ddc->leave($__internal_fc56268da0411ef194b0a3a4e59be25797085372825ec57c6e420c65b94a3ddc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
