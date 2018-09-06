<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_e92e731242dda760b41f8521a10059d2d1a84b50c3af2eca1784258473d93201 extends Twig_Template
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
        $__internal_8f71bc32e2822656c570c0b5ba4fe100e644a6c2af883cfe017d384ad0446e17 = $this->env->getExtension("native_profiler");
        $__internal_8f71bc32e2822656c570c0b5ba4fe100e644a6c2af883cfe017d384ad0446e17->enter($__internal_8f71bc32e2822656c570c0b5ba4fe100e644a6c2af883cfe017d384ad0446e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_8f71bc32e2822656c570c0b5ba4fe100e644a6c2af883cfe017d384ad0446e17->leave($__internal_8f71bc32e2822656c570c0b5ba4fe100e644a6c2af883cfe017d384ad0446e17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
