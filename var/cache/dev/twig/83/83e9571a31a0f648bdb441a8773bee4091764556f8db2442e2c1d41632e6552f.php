<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_281a55ff60efcbc2e829fd8cdc0088b9bc8041b11fe09632084c6edf4b987b75 extends Twig_Template
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
        $__internal_b3d74de777840680a9fbd0a1e0c123d4d121eb45e07a758ba4a1d9b3e614d505 = $this->env->getExtension("native_profiler");
        $__internal_b3d74de777840680a9fbd0a1e0c123d4d121eb45e07a758ba4a1d9b3e614d505->enter($__internal_b3d74de777840680a9fbd0a1e0c123d4d121eb45e07a758ba4a1d9b3e614d505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_b3d74de777840680a9fbd0a1e0c123d4d121eb45e07a758ba4a1d9b3e614d505->leave($__internal_b3d74de777840680a9fbd0a1e0c123d4d121eb45e07a758ba4a1d9b3e614d505_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */