<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_7dee31a6287c34e1d22f33eeaffce21eb731c2b64c0b3661375296bd6071c48f extends Twig_Template
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
        $__internal_84447be12b39e158ea82192550d32d7d5d4f67453145d664b180559eeb1cb4da = $this->env->getExtension("native_profiler");
        $__internal_84447be12b39e158ea82192550d32d7d5d4f67453145d664b180559eeb1cb4da->enter($__internal_84447be12b39e158ea82192550d32d7d5d4f67453145d664b180559eeb1cb4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_84447be12b39e158ea82192550d32d7d5d4f67453145d664b180559eeb1cb4da->leave($__internal_84447be12b39e158ea82192550d32d7d5d4f67453145d664b180559eeb1cb4da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
