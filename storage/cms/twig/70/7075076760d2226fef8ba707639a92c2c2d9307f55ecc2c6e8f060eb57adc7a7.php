<?php

/* G:\xampp\htdocs\jdih/plugins/indikator/news/components/subscribe/default.htm */
class __TwigTemplate_360848f15188f997ee5e77cbcf1c7015f69a5d6c1a05b5c0a896ede5ecf02bba extends Twig_Template
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
        echo "<form data-request=\"onSubscription\" data-request-success=\"alert('";
        echo twig_escape_filter($this->env, ($context["text_messages"] ?? null), "html", null, true);
        echo "')\">
    <div class=\"form-group\">
        <label for=\"subscribersName\">";
        // line 3
        echo twig_escape_filter($this->env, ($context["text_name"] ?? null), "html", null, true);
        echo "</label>
        <input name=\"name\" type=\"text\" class=\"form-control\" id=\"subscribersName\" required>
    </div>

    <div class=\"form-group\">
        <label for=\"subscribersEmail\">";
        // line 8
        echo twig_escape_filter($this->env, ($context["text_email"] ?? null), "html", null, true);
        echo "</label>
        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"subscribersEmail\" required>
    </div>

    ";
        // line 12
        if ((($context["category_count"] ?? null) == 0)) {
            // line 13
            echo "    <input type=\"hidden\" name=\"category\" value=\"0\">
    ";
        } else {
            // line 15
            echo "    <div class=\"form-group\">
        <label>";
            // line 16
            echo twig_escape_filter($this->env, ($context["text_category"] ?? null), "html", null, true);
            echo "</label>
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["category_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 18
                echo "        <div class=\"checkbox\">
            <label>
                <input type=\"checkbox\" name=\"category[]\" value=\"";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array()), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
                echo "
            </label>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    </div>
    ";
        }
        // line 26
        echo "
    <button type=\"submit\" class=\"btn btn-default\">";
        // line 27
        echo twig_escape_filter($this->env, ($context["text_button"] ?? null), "html", null, true);
        echo "</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "G:\\xampp\\htdocs\\jdih/plugins/indikator/news/components/subscribe/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 27,  77 => 26,  73 => 24,  61 => 20,  57 => 18,  53 => 17,  49 => 16,  46 => 15,  42 => 13,  40 => 12,  33 => 8,  25 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form data-request=\"onSubscription\" data-request-success=\"alert('{{ text_messages }}')\">
    <div class=\"form-group\">
        <label for=\"subscribersName\">{{ text_name }}</label>
        <input name=\"name\" type=\"text\" class=\"form-control\" id=\"subscribersName\" required>
    </div>

    <div class=\"form-group\">
        <label for=\"subscribersEmail\">{{ text_email }}</label>
        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"subscribersEmail\" required>
    </div>

    {% if category_count == 0 %}
    <input type=\"hidden\" name=\"category\" value=\"0\">
    {% else %}
    <div class=\"form-group\">
        <label>{{ text_category }}</label>
        {% for category in category_list %}
        <div class=\"checkbox\">
            <label>
                <input type=\"checkbox\" name=\"category[]\" value=\"{{ category.id }}\"> {{ category.name }}
            </label>
        </div>
        {% endfor %}
    </div>
    {% endif %}

    <button type=\"submit\" class=\"btn btn-default\">{{ text_button }}</button>
</form>
", "G:\\xampp\\htdocs\\jdih/plugins/indikator/news/components/subscribe/default.htm", "");
    }
}
