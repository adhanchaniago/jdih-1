<?php

/* G:\xampp\htdocs\jdih/plugins/rainlab/googleanalytics/components/realvisitor/default.htm */
class __TwigTemplate_f63ca517dbabfbcf80a928fa9d4880feff1cbca5e31dabb684b8721b46b4cfde extends Twig_Template
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
        echo " 
";
        // line 2
        echo twig_escape_filter($this->env, ($context["var"] ?? null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "G:\\xampp\\htdocs\\jdih/plugins/rainlab/googleanalytics/components/realvisitor/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source(" 
{{ var }}", "G:\\xampp\\htdocs\\jdih/plugins/rainlab/googleanalytics/components/realvisitor/default.htm", "");
    }
}
