<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_c4afc037263f0dbaefe3d9a25aa896349417dbd579199606e9e6234407c0d809 extends Twig_Template
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
        $__internal_71e6471af49bd930bb22620aac3fb62dedab16c7307310e4267f98e7cc402dc2 = $this->env->getExtension("native_profiler");
        $__internal_71e6471af49bd930bb22620aac3fb62dedab16c7307310e4267f98e7cc402dc2->enter($__internal_71e6471af49bd930bb22620aac3fb62dedab16c7307310e4267f98e7cc402dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_71e6471af49bd930bb22620aac3fb62dedab16c7307310e4267f98e7cc402dc2->leave($__internal_71e6471af49bd930bb22620aac3fb62dedab16c7307310e4267f98e7cc402dc2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
