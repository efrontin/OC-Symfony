<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_4bcfda348d57dd69b424a478554bb360d9dbc4fa4ec72fffd03f3fc7314cf9cb extends Twig_Template
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
        $__internal_d202476ac619d500af4d7df561f453c520cd662af4ba0e4b771f065a799c130a = $this->env->getExtension("native_profiler");
        $__internal_d202476ac619d500af4d7df561f453c520cd662af4ba0e4b771f065a799c130a->enter($__internal_d202476ac619d500af4d7df561f453c520cd662af4ba0e4b771f065a799c130a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d202476ac619d500af4d7df561f453c520cd662af4ba0e4b771f065a799c130a->leave($__internal_d202476ac619d500af4d7df561f453c520cd662af4ba0e4b771f065a799c130a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
