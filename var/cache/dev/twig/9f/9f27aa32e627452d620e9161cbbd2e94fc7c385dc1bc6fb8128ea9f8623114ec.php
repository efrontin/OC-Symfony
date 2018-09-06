<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_6e0e0e0a11e8d1787ffd172ee749adc63e6cb2d71e53cf641ef97f97a7b8c6d7 extends Twig_Template
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
        $__internal_a4af623c767bc0aea3e68243219a18bebe487b200bddb1750214da365dd3735e = $this->env->getExtension("native_profiler");
        $__internal_a4af623c767bc0aea3e68243219a18bebe487b200bddb1750214da365dd3735e->enter($__internal_a4af623c767bc0aea3e68243219a18bebe487b200bddb1750214da365dd3735e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a4af623c767bc0aea3e68243219a18bebe487b200bddb1750214da365dd3735e->leave($__internal_a4af623c767bc0aea3e68243219a18bebe487b200bddb1750214da365dd3735e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
