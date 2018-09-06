<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_27fd183740f4a24e544835997c4a912ea9e0d0f3a47f757939b1cab31bbf3856 extends Twig_Template
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
        $__internal_92b20bd71d41bfa16716901a66b2d2d509459b27f4cb1e2cbf5c18c2407b2ec2 = $this->env->getExtension("native_profiler");
        $__internal_92b20bd71d41bfa16716901a66b2d2d509459b27f4cb1e2cbf5c18c2407b2ec2->enter($__internal_92b20bd71d41bfa16716901a66b2d2d509459b27f4cb1e2cbf5c18c2407b2ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_92b20bd71d41bfa16716901a66b2d2d509459b27f4cb1e2cbf5c18c2407b2ec2->leave($__internal_92b20bd71d41bfa16716901a66b2d2d509459b27f4cb1e2cbf5c18c2407b2ec2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
