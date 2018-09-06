<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0e8accbb332918353f7cd341c04ac955ff0af344be361b4d3a43807b71ab9533 extends Twig_Template
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
        $__internal_4fd69bdf3473b2cb84fd363c11386445beb55837d002730ae6ae0c5f18be064a = $this->env->getExtension("native_profiler");
        $__internal_4fd69bdf3473b2cb84fd363c11386445beb55837d002730ae6ae0c5f18be064a->enter($__internal_4fd69bdf3473b2cb84fd363c11386445beb55837d002730ae6ae0c5f18be064a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4fd69bdf3473b2cb84fd363c11386445beb55837d002730ae6ae0c5f18be064a->leave($__internal_4fd69bdf3473b2cb84fd363c11386445beb55837d002730ae6ae0c5f18be064a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
