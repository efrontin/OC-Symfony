<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_2ff213ca0d66da57f25e6ffd7b3374158fa6fb233cf968f81a248f030b1d41e5 extends Twig_Template
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
        $__internal_26a885e120b8ce5c7e0e4d4680cca668ba7c67003475625f8cfb9599aee10406 = $this->env->getExtension("native_profiler");
        $__internal_26a885e120b8ce5c7e0e4d4680cca668ba7c67003475625f8cfb9599aee10406->enter($__internal_26a885e120b8ce5c7e0e4d4680cca668ba7c67003475625f8cfb9599aee10406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_26a885e120b8ce5c7e0e4d4680cca668ba7c67003475625f8cfb9599aee10406->leave($__internal_26a885e120b8ce5c7e0e4d4680cca668ba7c67003475625f8cfb9599aee10406_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
