<?php

/* G:\xampp\htdocs\jdih/plugins/indikator/news/components/post/default.htm */
class __TwigTemplate_1295bd671aedaca98ce935fadd8413749904b0237a049410b2c1dc095a59ec25 extends Twig_Template
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
        $context["post"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "post", array());
        // line 2
        echo "
<article class=\"post clearfix\">
\t";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "image", array())) {
            // line 5
            echo "    <div class=\"featured-post\" style=\"width: 870px; height: 600px;\">
        <img src=\"";
            // line 6
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "image", array()));
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", array()), "html", null, true);
            echo "\" style=\"width: 100%;\">
    </div><!-- /.feature-post -->
    ";
        }
        // line 9
        echo "    <div class=\"content-post\">
        <h3 class=\"title-post\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", array()), "html", null, true);
        echo "</h3>
        <ul class=\"meta-post clearfix\">
            <li class=\"time\">
                ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", array()), "Y-m-d"), "html", null, true);
        echo "
            </li><!-- 
            <li class=\"categories\"> 
                <a href=\"#\">Business</a>, <a href=\"#\">Leasing</a>
            </li> -->
        </ul><!-- /.meta-post -->
        ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", array())) {
            // line 20
            echo "        <div align=\"justify\">                              
            ";
            // line 21
            echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", array());
            echo "
        </div>
        ";
        }
        // line 24
        echo "
        <div class=\"direction clearfix\">
            <!-- <div class=\"tag-single float-left\">
                <span>Tags:</span>
                <a href=\"#\"> Business,</a>
                <a href=\"#\"> Tax,</a>
                <a href=\"#\"> Finance</a>
            </div> -->
            <div class=\"social-links float-right\">
                <span>Share:</span>
                ";
        // line 34
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("ssbuttonsnb"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 35
        echo "                <!-- <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                <a href=\"#\"><i class=\"fa fa-google-plus\"></i></a> -->
            </div>
        </div>
    </div><!-- /.content-post -->
</article> ";
    }

    public function getTemplateName()
    {
        return "G:\\xampp\\htdocs\\jdih/plugins/indikator/news/components/post/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 35,  83 => 34,  71 => 24,  65 => 21,  62 => 20,  60 => 19,  51 => 13,  45 => 10,  42 => 9,  34 => 6,  31 => 5,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set post = __SELF__.post %}

<article class=\"post clearfix\">
\t{% if post.image %}
    <div class=\"featured-post\" style=\"width: 870px; height: 600px;\">
        <img src=\"{{ post.image|media }}\" alt=\"{{ post.title }}\" style=\"width: 100%;\">
    </div><!-- /.feature-post -->
    {% endif %}
    <div class=\"content-post\">
        <h3 class=\"title-post\">{{ post.title }}</h3>
        <ul class=\"meta-post clearfix\">
            <li class=\"time\">
                {{ post.published_at|date('Y-m-d') }}
            </li><!-- 
            <li class=\"categories\"> 
                <a href=\"#\">Business</a>, <a href=\"#\">Leasing</a>
            </li> -->
        </ul><!-- /.meta-post -->
        {% if post.content %}
        <div align=\"justify\">                              
            {{ post.content|raw }}
        </div>
        {% endif %}

        <div class=\"direction clearfix\">
            <!-- <div class=\"tag-single float-left\">
                <span>Tags:</span>
                <a href=\"#\"> Business,</a>
                <a href=\"#\"> Tax,</a>
                <a href=\"#\"> Finance</a>
            </div> -->
            <div class=\"social-links float-right\">
                <span>Share:</span>
                {% component 'ssbuttonsnb' %}
                <!-- <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                <a href=\"#\"><i class=\"fa fa-google-plus\"></i></a> -->
            </div>
        </div>
    </div><!-- /.content-post -->
</article> ", "G:\\xampp\\htdocs\\jdih/plugins/indikator/news/components/post/default.htm", "");
    }
}
