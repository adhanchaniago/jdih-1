<?php

/* G:\xampp\htdocs\jdih/themes/jdih/pages/berita/category.htm */
class __TwigTemplate_9ed44650d3ccbd2ff586d38140014b70553cbbd8034dc4d50fabd04241b2493b extends Twig_Template
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
        echo "<!-- Page title -->
    <div class=\"page-title parallax parallax1\">
        <div class=\"section-overlay\">
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">                    
                    <div class=\"page-title-heading\">
                        <h1 class=\"title\">\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["kategori"] ?? null), "name", array()), "html", null, true);
        echo "\"</h1>
                    </div><!-- /.page-title-captions -->
                    <div class=\"breadcrumbs\">
                        <ul>
                            <li><a href=\"";
        // line 13
        echo url("/");
        echo "\">Beranda</a></li>
                            <li> - </li>                            
                            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("berita/listing");
        echo "\">Berita</a></li>
                        </ul>                   
                    </div><!-- /.breadcrumbs -->   
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title --> 

    <!-- Blog posts -->
    <section class=\"main-content blog-posts\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-9\">
                    <div class=\"post-wrap\">
                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["news"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 30
            echo "\t\t\t\t        <article class=\"post clearfix\">
\t\t\t\t            <h3 class=\"title-post\"><a href=\"";
            // line 31
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("berita/detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "slug", array())));
            echo "\">
\t\t\t\t                ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "
\t\t\t\t                </a></h3>                          
\t\t\t\t            <ul class=\"meta-post clearfix\">
\t\t\t\t                <li class=\"time\">
\t\t\t\t                    ";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "published_at", array()), "Y-m-d"), "html", null, true);
            echo "
\t\t\t\t                </li>
\t\t\t\t                <!-- <li class=\"author\">
\t\t\t\t                    <a href=\"#\">Admin</a>
\t\t\t\t                </li>
\t\t\t\t                <li class=\"categories\"> 
\t\t\t\t                    <a href=\"#\">Business</a>
\t\t\t\t                </li>
\t\t\t\t                <li class=\"vote\">
\t\t\t\t                    <a href=\"#\">No comment</a>
\t\t\t\t                </li> -->
\t\t\t\t            </ul><!-- /.meta-post -->
\t\t\t\t            ";
            // line 48
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "image", array())) {
                // line 49
                echo "\t\t\t\t            <div class=\"featured-post\" style=\"width: 870px; height: 367px;\">
\t\t\t\t                <a href=\"";
                // line 50
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("berita/detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "slug", array())));
                echo "\"><img src=\"";
                echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "image", array()));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
                echo "\" style=\"width: 100%;\"></a>
\t\t\t\t            </div><!-- /.feature-post -->
\t\t\t\t            ";
            }
            // line 53
            echo "\t\t\t\t            ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "introductory", array())) {
                // line 54
                echo "\t\t\t\t            <div class=\"content-post\">
\t\t\t\t                <div align=\"justify\">                              
\t\t\t\t                    ";
                // line 56
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "introductory", array());
                echo "
\t\t\t\t                    <div class=\"more-link\">
\t\t\t\t                        <a class=\"effect-button\" href=\"";
                // line 58
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("berita/detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "slug", array())));
                echo "\">Read More <i class=\"fa fa-angle-right\"></i></a>
\t\t\t\t                    </div>
\t\t\t\t                </div>
\t\t\t\t            </div><!-- /.content-post -->
\t\t\t\t            ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(),             // line 62
$context["post"], "content", array())) {
                // line 63
                echo "\t\t\t\t            <div class=\"content-post\">
\t\t\t\t                <div align=\"justify\">                              
\t\t\t\t                    ";
                // line 65
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "introductory", array());
                echo "
\t\t\t\t                    <div class=\"more-link\">
\t\t\t\t                        <a class=\"effect-button\" href=\"";
                // line 67
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("berita/detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "slug", array())));
                echo "\">Read More <i class=\"fa fa-angle-right\"></i></a>
\t\t\t\t                    </div>
\t\t\t\t                </div>
\t\t\t\t            </div><!-- /.content-post -->
\t\t\t\t            ";
            }
            // line 72
            echo "\t\t\t\t        </article>
\t\t\t\t    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 74
            echo "\t\t\t\t    <span class=\"post-nodata\">";
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</span>
\t\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                    </div><!-- /.post-wrap --> 

                    <div class=\"blog-pagination\">
                        ";
        // line 79
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["all"] ?? null), "render", array());
        echo "<!-- /.flat-pagination -->
                    </div><!-- /.blog-pagination -->                  
                </div><!-- /.col-lg-9 -->    
                <div class=\"col-lg-3\">
                    <div class=\"sidebar\">
                        <div class=\"widget widget-recent-news\">
                            <h5 class=\"widget-title\">Recent Post</h5>
                            <ul class=\"popular-news clearfix\">
                                ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["posts"] ?? null), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 88
            echo "                                    <li>
                                        <div class=\"text\">
                                            <h6>
                                                <a href=\"";
            // line 91
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("berita/detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "slug", array())));
            echo "\">
                                                ";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "
                                                </a>
                                            </h6>  
                                            <p>";
            // line 95
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "published_at", array()), "F j, Y"), "html", null, true);
            echo "</p>                                     
                                        </div>
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                            </ul><!-- /.popular-news -->
                        </div><!-- /.widget-popular-news -->
                        <!-- <div class=\"widget widget_categories\">
                            <h5 class=\"widget-title\">Category</h5>
                            <ul>
                                <li><a href=\"#\">Business</a></li>
                                <li><a href=\"#\">Finanve</a></li>
                                <li><a href=\"#\">Insurance</a></li>
                                <li><a href=\"#\">Leasing</a></li>
                            </ul>
                        </div> --><!-- /.widget-categories -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-3 -->            
            </div><!-- /.row -->           
        </div><!-- /.container -->   
    </section>";
    }

    public function getTemplateName()
    {
        return "G:\\xampp\\htdocs\\jdih/themes/jdih/pages/berita/category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 99,  195 => 95,  189 => 92,  185 => 91,  180 => 88,  176 => 87,  165 => 79,  160 => 76,  151 => 74,  145 => 72,  137 => 67,  132 => 65,  128 => 63,  126 => 62,  119 => 58,  114 => 56,  110 => 54,  107 => 53,  97 => 50,  94 => 49,  92 => 48,  77 => 36,  70 => 32,  66 => 31,  63 => 30,  58 => 29,  41 => 15,  36 => 13,  29 => 9,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Page title -->
    <div class=\"page-title parallax parallax1\">
        <div class=\"section-overlay\">
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">                    
                    <div class=\"page-title-heading\">
                        <h1 class=\"title\">\"{{ kategori.name }}\"</h1>
                    </div><!-- /.page-title-captions -->
                    <div class=\"breadcrumbs\">
                        <ul>
                            <li><a href=\"{{ url('/') }}\">Beranda</a></li>
                            <li> - </li>                            
                            <li><a href=\"{{ 'berita/listing'|page }}\">Berita</a></li>
                        </ul>                   
                    </div><!-- /.breadcrumbs -->   
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title --> 

    <!-- Blog posts -->
    <section class=\"main-content blog-posts\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-9\">
                    <div class=\"post-wrap\">
                        {% for post in news %}
\t\t\t\t        <article class=\"post clearfix\">
\t\t\t\t            <h3 class=\"title-post\"><a href=\"{{ 'berita/detail'|page({ slug: post.slug }) }}\">
\t\t\t\t                {{ post.title }}
\t\t\t\t                </a></h3>                          
\t\t\t\t            <ul class=\"meta-post clearfix\">
\t\t\t\t                <li class=\"time\">
\t\t\t\t                    {{ post.published_at|date('Y-m-d') }}
\t\t\t\t                </li>
\t\t\t\t                <!-- <li class=\"author\">
\t\t\t\t                    <a href=\"#\">Admin</a>
\t\t\t\t                </li>
\t\t\t\t                <li class=\"categories\"> 
\t\t\t\t                    <a href=\"#\">Business</a>
\t\t\t\t                </li>
\t\t\t\t                <li class=\"vote\">
\t\t\t\t                    <a href=\"#\">No comment</a>
\t\t\t\t                </li> -->
\t\t\t\t            </ul><!-- /.meta-post -->
\t\t\t\t            {% if post.image %}
\t\t\t\t            <div class=\"featured-post\" style=\"width: 870px; height: 367px;\">
\t\t\t\t                <a href=\"{{ 'berita/detail'|page({ slug: post.slug }) }}\"><img src=\"{{ post.image|media }}\" alt=\"{{ post.title }}\" style=\"width: 100%;\"></a>
\t\t\t\t            </div><!-- /.feature-post -->
\t\t\t\t            {% endif %}
\t\t\t\t            {% if post.introductory %}
\t\t\t\t            <div class=\"content-post\">
\t\t\t\t                <div align=\"justify\">                              
\t\t\t\t                    {{ post.introductory|raw }}
\t\t\t\t                    <div class=\"more-link\">
\t\t\t\t                        <a class=\"effect-button\" href=\"{{ 'berita/detail'|page({ slug: post.slug }) }}\">Read More <i class=\"fa fa-angle-right\"></i></a>
\t\t\t\t                    </div>
\t\t\t\t                </div>
\t\t\t\t            </div><!-- /.content-post -->
\t\t\t\t            {% elseif post.content %}
\t\t\t\t            <div class=\"content-post\">
\t\t\t\t                <div align=\"justify\">                              
\t\t\t\t                    {{ post.introductory|raw }}
\t\t\t\t                    <div class=\"more-link\">
\t\t\t\t                        <a class=\"effect-button\" href=\"{{ 'berita/detail'|page({ slug: post.slug }) }}\">Read More <i class=\"fa fa-angle-right\"></i></a>
\t\t\t\t                    </div>
\t\t\t\t                </div>
\t\t\t\t            </div><!-- /.content-post -->
\t\t\t\t            {% endif %}
\t\t\t\t        </article>
\t\t\t\t    {% else %}
\t\t\t\t    <span class=\"post-nodata\">{{ noPostsMessage }}</span>
\t\t\t\t    {% endfor %}
                    </div><!-- /.post-wrap --> 

                    <div class=\"blog-pagination\">
                        {{ all.render|raw }}<!-- /.flat-pagination -->
                    </div><!-- /.blog-pagination -->                  
                </div><!-- /.col-lg-9 -->    
                <div class=\"col-lg-3\">
                    <div class=\"sidebar\">
                        <div class=\"widget widget-recent-news\">
                            <h5 class=\"widget-title\">Recent Post</h5>
                            <ul class=\"popular-news clearfix\">
                                {% for post in posts|slice(0,5) %}
                                    <li>
                                        <div class=\"text\">
                                            <h6>
                                                <a href=\"{{ 'berita/detail'|page({ slug: post.slug }) }}\">
                                                {{ post.title }}
                                                </a>
                                            </h6>  
                                            <p>{{ post.published_at|date('F j, Y') }}</p>                                     
                                        </div>
                                    </li>
                                {% endfor %}
                            </ul><!-- /.popular-news -->
                        </div><!-- /.widget-popular-news -->
                        <!-- <div class=\"widget widget_categories\">
                            <h5 class=\"widget-title\">Category</h5>
                            <ul>
                                <li><a href=\"#\">Business</a></li>
                                <li><a href=\"#\">Finanve</a></li>
                                <li><a href=\"#\">Insurance</a></li>
                                <li><a href=\"#\">Leasing</a></li>
                            </ul>
                        </div> --><!-- /.widget-categories -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-3 -->            
            </div><!-- /.row -->           
        </div><!-- /.container -->   
    </section>", "G:\\xampp\\htdocs\\jdih/themes/jdih/pages/berita/category.htm", "");
    }
}
