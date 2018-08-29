<?php

/* G:\xampp\htdocs\jdih/plugins/indikator/news/components/posts/default.htm */
class __TwigTemplate_bd1f51de33d3e96eb1c299de0b806900d6789f19d6c6a1afeffd059794096d0d extends Twig_Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "posts", array());
        // line 2
        echo "
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 4
            echo "        <article class=\"post clearfix\">
            <h3 class=\"title-post\"><a href=\"/";
            // line 5
            echo twig_escape_filter($this->env, ($context["postPage"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "slug", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "</a></h3>                          
            <ul class=\"meta-post clearfix\">
                <li class=\"time\">
                    ";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "published_at", array()), "Y-m-d"), "html", null, true);
            echo "
                </li>
                <!-- <li class=\"author\">
                    <a href=\"#\">Admin</a>
                </li>
                <li class=\"categories\"> 
                    <a href=\"#\">Business</a>
                </li>
                <li class=\"vote\">
                    <a href=\"#\">No comment</a>
                </li> -->
            </ul><!-- /.meta-post -->
            ";
            // line 20
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "image", array())) {
                // line 21
                echo "            <div class=\"featured-post\">
                <a href=\"/";
                // line 22
                echo twig_escape_filter($this->env, ($context["postPage"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "slug", array()), "html", null, true);
                echo "\"><img src=\"";
                echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "image", array()));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
                echo "\"></a>
            </div><!-- /.feature-post -->
            ";
            }
            // line 25
            echo "            ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "introductory", array())) {
                // line 26
                echo "            <div class=\"content-post\">
                <div align=\"justify\">                              
                    ";
                // line 28
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "introductory", array());
                echo "
                    <div class=\"more-link\">
                        <a class=\"effect-button\" href=\"";
                // line 30
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("berita/detail", array("judul" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["berita"] ?? null), "slug", array())));
                echo "\">Read More <i class=\"fa fa-angle-right\"></i></a>
                    </div>
                </div>
            </div><!-- /.content-post -->
            ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(),             // line 34
$context["post"], "content", array())) {
                // line 35
                echo "            <div class=\"content-post\">
                <div align=\"justify\">                              
                    ";
                // line 37
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "content", array());
                echo "
                    <div class=\"more-link\">
                        <a class=\"effect-button\" href=\"";
                // line 39
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("berita/detail", array("judul" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["berita"] ?? null), "slug", array())));
                echo "\">Read More <i class=\"fa fa-angle-right\"></i></a>
                    </div>
                </div>
            </div><!-- /.content-post -->
            ";
            }
            // line 44
            echo "        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            echo "    <span class=\"post-nodata\">";
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
";
        // line 49
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "render", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "G:\\xampp\\htdocs\\jdih/plugins/indikator/news/components/posts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 49,  127 => 48,  118 => 46,  112 => 44,  104 => 39,  99 => 37,  95 => 35,  93 => 34,  86 => 30,  81 => 28,  77 => 26,  74 => 25,  62 => 22,  59 => 21,  57 => 20,  42 => 8,  32 => 5,  29 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set posts = __SELF__.posts %}

    {% for post in posts %}
        <article class=\"post clearfix\">
            <h3 class=\"title-post\"><a href=\"/{{ postPage }}/{{ post.slug }}\">{{ post.title }}</a></h3>                          
            <ul class=\"meta-post clearfix\">
                <li class=\"time\">
                    {{ post.published_at|date('Y-m-d') }}
                </li>
                <!-- <li class=\"author\">
                    <a href=\"#\">Admin</a>
                </li>
                <li class=\"categories\"> 
                    <a href=\"#\">Business</a>
                </li>
                <li class=\"vote\">
                    <a href=\"#\">No comment</a>
                </li> -->
            </ul><!-- /.meta-post -->
            {% if post.image %}
            <div class=\"featured-post\">
                <a href=\"/{{ postPage }}/{{ post.slug }}\"><img src=\"{{ post.image|media }}\" alt=\"{{ post.title }}\"></a>
            </div><!-- /.feature-post -->
            {% endif %}
            {% if post.introductory %}
            <div class=\"content-post\">
                <div align=\"justify\">                              
                    {{ post.introductory|raw }}
                    <div class=\"more-link\">
                        <a class=\"effect-button\" href=\"{{ 'berita/detail'|page({ judul: berita.slug }) }}\">Read More <i class=\"fa fa-angle-right\"></i></a>
                    </div>
                </div>
            </div><!-- /.content-post -->
            {% elseif post.content %}
            <div class=\"content-post\">
                <div align=\"justify\">                              
                    {{ post.content|raw }}
                    <div class=\"more-link\">
                        <a class=\"effect-button\" href=\"{{ 'berita/detail'|page({ judul: berita.slug }) }}\">Read More <i class=\"fa fa-angle-right\"></i></a>
                    </div>
                </div>
            </div><!-- /.content-post -->
            {% endif %}
        </article>
    {% else %}
    <span class=\"post-nodata\">{{ noPostsMessage }}</span>
    {% endfor %}

{{ posts.render|raw }}
", "G:\\xampp\\htdocs\\jdih/plugins/indikator/news/components/posts/default.htm", "");
    }
}
