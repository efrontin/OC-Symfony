<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_a68b1abb7ace69828e01af098259437d90e1bc649c93277dd45338770d9ec6bb extends Twig_Template
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
        $__internal_57466ec6e1215e5759e6a09f22844a6c03cd0a8c0bb79c51cd84c59212b0af7d = $this->env->getExtension("native_profiler");
        $__internal_57466ec6e1215e5759e6a09f22844a6c03cd0a8c0bb79c51cd84c59212b0af7d->enter($__internal_57466ec6e1215e5759e6a09f22844a6c03cd0a8c0bb79c51cd84c59212b0af7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_57466ec6e1215e5759e6a09f22844a6c03cd0a8c0bb79c51cd84c59212b0af7d->leave($__internal_57466ec6e1215e5759e6a09f22844a6c03cd0a8c0bb79c51cd84c59212b0af7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
