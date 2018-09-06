<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_f5d5842265af35b32b85dacbd53f49be79ff138b587a0b495cb373f2b1389692 extends Twig_Template
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
        $__internal_6cf69a166a96503d220e2460120dee30c11674abd88e590db37813e5a6d36812 = $this->env->getExtension("native_profiler");
        $__internal_6cf69a166a96503d220e2460120dee30c11674abd88e590db37813e5a6d36812->enter($__internal_6cf69a166a96503d220e2460120dee30c11674abd88e590db37813e5a6d36812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_6cf69a166a96503d220e2460120dee30c11674abd88e590db37813e5a6d36812->leave($__internal_6cf69a166a96503d220e2460120dee30c11674abd88e590db37813e5a6d36812_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
