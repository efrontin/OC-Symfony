<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d4f10e6956a94ab55b3e0a7324098a383d54cf1288415fea07c13970383198b1 extends Twig_Template
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
        $__internal_401d60fcc9f2b20c2ab3fe4bf62ebab2f0911476c55df34c50f01fcb4457678b = $this->env->getExtension("native_profiler");
        $__internal_401d60fcc9f2b20c2ab3fe4bf62ebab2f0911476c55df34c50f01fcb4457678b->enter($__internal_401d60fcc9f2b20c2ab3fe4bf62ebab2f0911476c55df34c50f01fcb4457678b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_401d60fcc9f2b20c2ab3fe4bf62ebab2f0911476c55df34c50f01fcb4457678b->leave($__internal_401d60fcc9f2b20c2ab3fe4bf62ebab2f0911476c55df34c50f01fcb4457678b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
