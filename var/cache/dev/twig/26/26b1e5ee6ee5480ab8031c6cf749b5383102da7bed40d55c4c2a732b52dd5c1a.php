<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_7f6bd62a3b6ec6b3437255f455b4e0f4dfa6381e0eacdcbe91b7ac65c634519c extends Twig_Template
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
        $__internal_3a62d062ec951c4404045261b91594b57e8db21dd1579c5cbf78a5ace78ce34d = $this->env->getExtension("native_profiler");
        $__internal_3a62d062ec951c4404045261b91594b57e8db21dd1579c5cbf78a5ace78ce34d->enter($__internal_3a62d062ec951c4404045261b91594b57e8db21dd1579c5cbf78a5ace78ce34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3a62d062ec951c4404045261b91594b57e8db21dd1579c5cbf78a5ace78ce34d->leave($__internal_3a62d062ec951c4404045261b91594b57e8db21dd1579c5cbf78a5ace78ce34d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
