<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2526ca861ae153dfb27b519f92ac9d73e14e18fb79180d6d0c717b65921ee0d5 extends Twig_Template
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
        $__internal_9dcc64bd4dfacf058b9c93ec4acaf85ea949d69bcd054eeb447f5006418376ed = $this->env->getExtension("native_profiler");
        $__internal_9dcc64bd4dfacf058b9c93ec4acaf85ea949d69bcd054eeb447f5006418376ed->enter($__internal_9dcc64bd4dfacf058b9c93ec4acaf85ea949d69bcd054eeb447f5006418376ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9dcc64bd4dfacf058b9c93ec4acaf85ea949d69bcd054eeb447f5006418376ed->leave($__internal_9dcc64bd4dfacf058b9c93ec4acaf85ea949d69bcd054eeb447f5006418376ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
