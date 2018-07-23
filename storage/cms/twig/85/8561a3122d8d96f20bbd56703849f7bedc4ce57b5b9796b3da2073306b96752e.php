<?php

/* G:\xampp\htdocs\jdih/plugins/redmarlin/faq/components/faqfeatured/default.htm */
class __TwigTemplate_16001c866153288acf4b383077000016807ef67c83656522b10ae060ff27e77d extends Twig_Template
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
        $context["faqsfeatured"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "faqsfeatured", array());
        // line 2
        echo "<div>
 \t<h3>Hot Questions</h3>
    <ul>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["faqsfeatured"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["faqfeatured"]) {
            // line 6
            echo "      \t\t<li><a href=\"/faq/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["faqfeatured"], "id", array()), "html", null, true);
            echo "#question-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["faqfeatured"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["faqfeatured"], "question", array()), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faqfeatured'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </ul>
              
 </div>";
    }

    public function getTemplateName()
    {
        return "G:\\xampp\\htdocs\\jdih/plugins/redmarlin/faq/components/faqfeatured/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set faqsfeatured = __SELF__.faqsfeatured %}
<div>
 \t<h3>Hot Questions</h3>
    <ul>
        {% for faqfeatured in faqsfeatured %}
      \t\t<li><a href=\"/faq/{{ faqfeatured.id }}#question-{{ faqfeatured.id }}\">{{ faqfeatured.question }}</a></li>
        {% endfor %}
    </ul>
              
 </div>", "G:\\xampp\\htdocs\\jdih/plugins/redmarlin/faq/components/faqfeatured/default.htm", "");
    }
}
