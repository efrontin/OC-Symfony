<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_cc9f04166576ee1a3f2667aca145404b0b57369b69c2faa55f493e7e2c52af2d extends Twig_Template
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
        $__internal_bf9da1869547c502172a474f5f20eed70b7c03eba372c8a17625b971a4cff70b = $this->env->getExtension("native_profiler");
        $__internal_bf9da1869547c502172a474f5f20eed70b7c03eba372c8a17625b971a4cff70b->enter($__internal_bf9da1869547c502172a474f5f20eed70b7c03eba372c8a17625b971a4cff70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_bf9da1869547c502172a474f5f20eed70b7c03eba372c8a17625b971a4cff70b->leave($__internal_bf9da1869547c502172a474f5f20eed70b7c03eba372c8a17625b971a4cff70b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
