<?php

/* modules/icons/templates/icon-select.html.twig */
class __TwigTemplate_7b6c6e539b0e24ab3ca72fdf47c21186606a63b310e8d7a16c8dcc06644dcb17 extends Twig_Template
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
        $tags = array("spaceless" => 15);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('spaceless'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 15
        ob_start();
        // line 16
        echo "    <div class=\"icons-picker\">
    <div class=\"icons-picker--selected\"></div>
    ";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["icon_picker"]) ? $context["icon_picker"] : null), "html", null, true));
        echo "
    </div>

    ";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["icon_select"]) ? $context["icon_select"] : null), "html", null, true));
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "modules/icons/templates/icon-select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 21,  49 => 18,  45 => 16,  43 => 15,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation for a select element.
 *
 * Available variables:
 * - attributes: HTML attributes for the <select> tag.
 * - options: The <option> element children.
 *
 * @see template_preprocess_select()
 *
 * @ingroup themeable
 */
#}
{% spaceless %}
    <div class=\"icons-picker\">
    <div class=\"icons-picker--selected\"></div>
    {{ icon_picker }}
    </div>

    {{ icon_select }}
{% endspaceless %}
";
    }
}
