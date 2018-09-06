<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a62750800799e7d8d337fb31655f61adecc6803b23d850a5a6cf62835ce5d71f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_22e25e231c748a3d4c4b0e576f5c1ca8d2eda779ba2b5317048697ff5abf233d = $this->env->getExtension("native_profiler");
        $__internal_22e25e231c748a3d4c4b0e576f5c1ca8d2eda779ba2b5317048697ff5abf233d->enter($__internal_22e25e231c748a3d4c4b0e576f5c1ca8d2eda779ba2b5317048697ff5abf233d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22e25e231c748a3d4c4b0e576f5c1ca8d2eda779ba2b5317048697ff5abf233d->leave($__internal_22e25e231c748a3d4c4b0e576f5c1ca8d2eda779ba2b5317048697ff5abf233d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ed52a5d003bdb29aebe83cded5b91e3d9407e3f27b32d9b907d906b5fa60d074 = $this->env->getExtension("native_profiler");
        $__internal_ed52a5d003bdb29aebe83cded5b91e3d9407e3f27b32d9b907d906b5fa60d074->enter($__internal_ed52a5d003bdb29aebe83cded5b91e3d9407e3f27b32d9b907d906b5fa60d074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ed52a5d003bdb29aebe83cded5b91e3d9407e3f27b32d9b907d906b5fa60d074->leave($__internal_ed52a5d003bdb29aebe83cded5b91e3d9407e3f27b32d9b907d906b5fa60d074_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_254315930d59ca08d1c3418b2cf173a63caa74ec00bb856a3990b9da80b2a5db = $this->env->getExtension("native_profiler");
        $__internal_254315930d59ca08d1c3418b2cf173a63caa74ec00bb856a3990b9da80b2a5db->enter($__internal_254315930d59ca08d1c3418b2cf173a63caa74ec00bb856a3990b9da80b2a5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_254315930d59ca08d1c3418b2cf173a63caa74ec00bb856a3990b9da80b2a5db->leave($__internal_254315930d59ca08d1c3418b2cf173a63caa74ec00bb856a3990b9da80b2a5db_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e0f9793fe33e3be707a421ad5b567195a3e1367d8132092cfa6c551e7053e9b = $this->env->getExtension("native_profiler");
        $__internal_1e0f9793fe33e3be707a421ad5b567195a3e1367d8132092cfa6c551e7053e9b->enter($__internal_1e0f9793fe33e3be707a421ad5b567195a3e1367d8132092cfa6c551e7053e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1e0f9793fe33e3be707a421ad5b567195a3e1367d8132092cfa6c551e7053e9b->leave($__internal_1e0f9793fe33e3be707a421ad5b567195a3e1367d8132092cfa6c551e7053e9b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
