<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_726bf73f9a997a86dd1ac48d936b918114a2d359094a93045ad07e25737d0ec4 extends Twig_Template
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
        $__internal_95525bea46388d486a916e6b649141ece1a0cc69e5ee941101ebcc27158c3081 = $this->env->getExtension("native_profiler");
        $__internal_95525bea46388d486a916e6b649141ece1a0cc69e5ee941101ebcc27158c3081->enter($__internal_95525bea46388d486a916e6b649141ece1a0cc69e5ee941101ebcc27158c3081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_95525bea46388d486a916e6b649141ece1a0cc69e5ee941101ebcc27158c3081->leave($__internal_95525bea46388d486a916e6b649141ece1a0cc69e5ee941101ebcc27158c3081_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
