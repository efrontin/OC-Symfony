<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_0318f9e4b1530302c26dde5d62c5dbcbaa25dadf57906bc3033472ee0df5e94e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_8da041dbec420ca47b4b41535bfc11b3e18e074ef41a665365e60d94bbb903f1 = $this->env->getExtension("native_profiler");
        $__internal_8da041dbec420ca47b4b41535bfc11b3e18e074ef41a665365e60d94bbb903f1->enter($__internal_8da041dbec420ca47b4b41535bfc11b3e18e074ef41a665365e60d94bbb903f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8da041dbec420ca47b4b41535bfc11b3e18e074ef41a665365e60d94bbb903f1->leave($__internal_8da041dbec420ca47b4b41535bfc11b3e18e074ef41a665365e60d94bbb903f1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ca27b6eee50d09aee4a0e0e2c229e96eb12c63b42fcfc52667a1ea4a0b021f20 = $this->env->getExtension("native_profiler");
        $__internal_ca27b6eee50d09aee4a0e0e2c229e96eb12c63b42fcfc52667a1ea4a0b021f20->enter($__internal_ca27b6eee50d09aee4a0e0e2c229e96eb12c63b42fcfc52667a1ea4a0b021f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ca27b6eee50d09aee4a0e0e2c229e96eb12c63b42fcfc52667a1ea4a0b021f20->leave($__internal_ca27b6eee50d09aee4a0e0e2c229e96eb12c63b42fcfc52667a1ea4a0b021f20_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_74a21e001cb89abcbde0fd3ef4e4eeea5259ec709c08f22f320bf823b3445e88 = $this->env->getExtension("native_profiler");
        $__internal_74a21e001cb89abcbde0fd3ef4e4eeea5259ec709c08f22f320bf823b3445e88->enter($__internal_74a21e001cb89abcbde0fd3ef4e4eeea5259ec709c08f22f320bf823b3445e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_74a21e001cb89abcbde0fd3ef4e4eeea5259ec709c08f22f320bf823b3445e88->leave($__internal_74a21e001cb89abcbde0fd3ef4e4eeea5259ec709c08f22f320bf823b3445e88_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cf08436c28aa5ca6e6f3f577c2c39a12bd0ef3d3458f00802d7906697964425 = $this->env->getExtension("native_profiler");
        $__internal_1cf08436c28aa5ca6e6f3f577c2c39a12bd0ef3d3458f00802d7906697964425->enter($__internal_1cf08436c28aa5ca6e6f3f577c2c39a12bd0ef3d3458f00802d7906697964425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1cf08436c28aa5ca6e6f3f577c2c39a12bd0ef3d3458f00802d7906697964425->leave($__internal_1cf08436c28aa5ca6e6f3f577c2c39a12bd0ef3d3458f00802d7906697964425_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
