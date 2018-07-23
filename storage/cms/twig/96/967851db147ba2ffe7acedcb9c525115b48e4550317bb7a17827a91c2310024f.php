<?php

/* G:\xampp\htdocs\jdih/plugins/rainlab/pages/components/staticmenu/default.htm */
class __TwigTemplate_25e66b80135b94c74c5ef4948a9713192d3ad2fb28b1ce038970e1b0307ea257 extends Twig_Template
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
        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "menuItems", array())) {
            // line 2
            echo "    <ul>
        ";
            // line 3
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "menuItems", array())            ;
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
        return array (  29 => 4,  24 => 3,  21 => 2,  19 => 1,);
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
