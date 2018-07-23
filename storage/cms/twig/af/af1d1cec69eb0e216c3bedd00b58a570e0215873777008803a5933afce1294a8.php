<?php

/* G:\xampp\htdocs\jdih/plugins/redmarlin/faq/components/faqall/default.htm */
class __TwigTemplate_a6313f06ab9663e925fa662f23e2dbeb3d7833aecb2c29f2bb1090d03994a5aa extends Twig_Template
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
        $context["faqs"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "faqs", array());
        // line 2
        echo "<ul>
 \t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["faqs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
            // line 4
            echo "\t\t<li>
\t\t\t<div id=\"question_";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["faq"], "id", array()), "html", null, true);
            echo "\">
\t\t\t\t<h3>Q: ";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["faq"], "question", array()), "html", null, true);
            echo "</h3>
\t\t\t\t<span>";
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["faq"], "created_at", array()), "d-m-Y"), "html", null, true);
            echo "</span>
\t\t\t\t<span>";
            // line 8
            echo call_user_func_array($this->env->getFilter('md')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), $context["faq"], "answer", array())));
            echo " </span>\t
\t\t\t</div>
 \t\t</li>
 \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo " </ul>";
    }

    public function getTemplateName()
    {
        return "G:\\xampp\\htdocs\\jdih/plugins/redmarlin/faq/components/faqall/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set faqs = __SELF__.faqs %}
<ul>
 \t{% for faq in faqs %}
\t\t<li>
\t\t\t<div id=\"question_{{ faq.id }}\">
\t\t\t\t<h3>Q: {{ faq.question }}</h3>
\t\t\t\t<span>{{ faq.created_at|date(\"d-m-Y\")}}</span>
\t\t\t\t<span>{{ faq.answer|md }} </span>\t
\t\t\t</div>
 \t\t</li>
 \t{% endfor %}
 </ul>", "G:\\xampp\\htdocs\\jdih/plugins/redmarlin/faq/components/faqall/default.htm", "");
    }
}
