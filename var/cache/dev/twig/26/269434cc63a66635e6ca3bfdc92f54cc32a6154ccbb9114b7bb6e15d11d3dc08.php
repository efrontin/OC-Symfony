<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_5e61297298c4f3436b9d4c1cf1310f060ff9770fd53141a3348c5cf118972f9e extends Twig_Template
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
        $__internal_df0d36638380dda4e7cdf263c1e143371aaa8aa000edca87b83a869c0a247219 = $this->env->getExtension("native_profiler");
        $__internal_df0d36638380dda4e7cdf263c1e143371aaa8aa000edca87b83a869c0a247219->enter($__internal_df0d36638380dda4e7cdf263c1e143371aaa8aa000edca87b83a869c0a247219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_df0d36638380dda4e7cdf263c1e143371aaa8aa000edca87b83a869c0a247219->leave($__internal_df0d36638380dda4e7cdf263c1e143371aaa8aa000edca87b83a869c0a247219_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
