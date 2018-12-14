<?php

/* G:\xampp\htdocs\jdih/plugins/indikator/news/components/subscribe/default.htm */
class __TwigTemplate_b6c362e201f4ebbe8ee11bbfa1d48383b92fbbf6d80c8791ef2957ff96026f6b extends Twig_Template
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
        echo "<form class=\"flat-mailchimp\" data-request=\"onSubscription\" data-request-success=\"alert('";
        echo twig_escape_filter($this->env, ($context["text_messages"] ?? null), "html", null, true);
        echo "')\">
    <div class=\"field clearfix\" id=\"subscribe-content\">
        <p class=\"wrap-input-email\">
            <input name=\"name\" type=\"hidden\" class=\"form-control\" id=\"subscribersName\" value=\"unnamed\" required>
            <input type=\"hidden\" name=\"category\" value=\"0\">
        </p>
        <p class=\"wrap-input-email\">
            <input name=\"email\" type=\"email\" tabindex=\"2\" id=\"subscribersEmail\" name=\"subscribe-email\" placeholder=\"Masukan Email Anda\" required>
        </p>
        <p class=\"wrap-btn\">
            <button type=\"submit\" id=\"subscribe-button\" class=\" subscribe-submit effect-button\" title=\"Subscribe now\">";
        // line 11
        echo twig_escape_filter($this->env, ($context["text_button"] ?? null), "html", null, true);
        echo "</button>
        </p>
    </div>

    ";
        // line 15
        if ((($context["category_count"] ?? null) == 0)) {
            // line 16
            echo "    <input type=\"hidden\" name=\"category\" value=\"0\">
    ";
        } else {
            // line 18
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["category_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 19
                echo "        <input type=\"checkbox\" name=\"category[]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", array()), "html", null, true);
                echo "\" style=\"display: none;\" checked>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    ";
        }
        // line 22
        echo "</form>
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
        return array (  67 => 22,  64 => 21,  55 => 19,  50 => 18,  46 => 16,  44 => 15,  37 => 11,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form class=\"flat-mailchimp\" data-request=\"onSubscription\" data-request-success=\"alert('{{ text_messages }}')\">
    <div class=\"field clearfix\" id=\"subscribe-content\">
        <p class=\"wrap-input-email\">
            <input name=\"name\" type=\"hidden\" class=\"form-control\" id=\"subscribersName\" value=\"unnamed\" required>
            <input type=\"hidden\" name=\"category\" value=\"0\">
        </p>
        <p class=\"wrap-input-email\">
            <input name=\"email\" type=\"email\" tabindex=\"2\" id=\"subscribersEmail\" name=\"subscribe-email\" placeholder=\"Masukan Email Anda\" required>
        </p>
        <p class=\"wrap-btn\">
            <button type=\"submit\" id=\"subscribe-button\" class=\" subscribe-submit effect-button\" title=\"Subscribe now\">{{ text_button }}</button>
        </p>
    </div>

    {% if category_count == 0 %}
    <input type=\"hidden\" name=\"category\" value=\"0\">
    {% else %}
        {% for category in category_list %}
        <input type=\"checkbox\" name=\"category[]\" value=\"{{ category.id }}\" style=\"display: none;\" checked>
        {% endfor %}
    {% endif %}
</form>
                        ", "G:\\xampp\\htdocs\\jdih/plugins/indikator/news/components/subscribe/default.htm", "");
    }
}
