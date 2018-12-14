<?php

/* G:\xampp\htdocs\jdih/plugins/rainlab/pages/components/staticmenu/default.htm */
class __TwigTemplate_4c86bf4ea6d55cb2c149402b1718901f696e2cf3328028163e1437008d5ab54f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "menuItems", array())) {
            // line 2
            echo "    <ul>
        ";
            // line 3
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "menuItems", array())            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::items")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 4
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "G:\\xampp\\htdocs\\jdih/plugins/rainlab/pages/components/staticmenu/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if __SELF__.menuItems %}
    <ul>
        {% partial __SELF__ ~ \"::items\" items=__SELF__.menuItems %}
    </ul>
{% endif %}", "G:\\xampp\\htdocs\\jdih/plugins/rainlab/pages/components/staticmenu/default.htm", "");
    }
}
