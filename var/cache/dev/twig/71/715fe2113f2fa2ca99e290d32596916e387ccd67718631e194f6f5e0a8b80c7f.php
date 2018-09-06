<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_3b8fbc522614eec8d6335d1fe182272feaf6e76f8dd613f39d0f58d64790103b extends Twig_Template
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
        $__internal_16285051f93d2801d0be04d1c315012cd075f74fe6103923019c7755d0dc0d2c = $this->env->getExtension("native_profiler");
        $__internal_16285051f93d2801d0be04d1c315012cd075f74fe6103923019c7755d0dc0d2c->enter($__internal_16285051f93d2801d0be04d1c315012cd075f74fe6103923019c7755d0dc0d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_16285051f93d2801d0be04d1c315012cd075f74fe6103923019c7755d0dc0d2c->leave($__internal_16285051f93d2801d0be04d1c315012cd075f74fe6103923019c7755d0dc0d2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
