<?php

/* G:\xampp\htdocs\jdih/themes/jdih/pages/berita/detail.htm */
class __TwigTemplate_f22c1bd2a9cce831d428191216f9ac5e3f5060a52c6bf913dabea3ecb6a2feaf extends Twig_Template
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
                        <h1 class=\"title\">Berita</h1>
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
                            <li> - </li>
                            <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("berita/detail", array("judul" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["berita"] ?? null), "slug", array())));
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["berita"] ?? null), "judul", array()), "html", null, true);
        echo "</a></li>
                        </ul>                   
                    </div><!-- /.breadcrumbs -->   
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title --> 

    <!-- Blog posts -->
    <section class=\"main-content blog-posts blog-single\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-9\">
                    <div class=\"post-wrap\">
                        <article class=\"post clearfix\">
                            <div class=\"featured-post\">
                                <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["berita"] ?? null), "gambar", array()), "thumb", array(0 => 870, 1 => 600, 2 => array("mode" => "crop")), "method"), "html", null, true);
        echo "\" alt=\"image\">
                            </div><!-- /.feature-post -->
                            <div class=\"content-post\">
                                <h3 class=\"title-post\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["berita"] ?? null), "judul", array()), "html", null, true);
        echo "</h3>
                                <ul class=\"meta-post clearfix\">
                                    <li class=\"time\">
                                        ";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["berita"] ?? null), "tanggal", array()), "F j, Y"), "html", null, true);
        echo "
                                    </li>
                                    <li class=\"categories\"> 
                                        <a href=\"#\">Business</a>, <a href=\"#\">Leasing</a>
                                    </li>
                                </ul><!-- /.meta-post -->
                                <div align=\"justify\">                              
                                    ";
        // line 46
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["berita"] ?? null), "isi", array());
        echo "
                                </div>

                                <div class=\"direction clearfix\">
                                    <div class=\"tag-single float-left\">
                                        <span>Tags:</span>
                                        <a href=\"#\"> Business,</a>
                                        <a href=\"#\"> Tax,</a>
                                        <a href=\"#\"> Finance</a>
                                    </div>
                                    <div class=\"social-links float-right\">
                                        <span>Share:</span>
                                        <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                        <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                        <a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
                                    </div>
                                </div>
                            </div><!-- /.content-post -->
                        </article>
                        <div>
                            <h2>Tanyakan pada kami</h2>
                           ";
        // line 67
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("FaqAsk"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 68
        echo "                        </div>   
                        <div id=\"disqus_thread\"></div>
                        <script>

                        /**
                        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                        
                        var disqus_config = function () {
                        this.page.url = \"";
        // line 77
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("");
        echo "\";  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = \"";
        // line 78
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("");
        echo "\"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };
                        
                        (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://jdih-2.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                        })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>
                                           
                        
                    </div><!-- /.post-wrap -->                                  
                </div><!-- /.col-lg-9 -->  

                <div class=\"col-lg-3\">
                    <div class=\"sidebar\">
                        <div class=\"widget widget-recent-news\">
                            <h5 class=\"widget-title\">Berita Terkini</h5>
                            <ul class=\"popular-news clearfix\">
                            \t";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["all"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 100
            echo "                            \t\t<li>
\t                                    <div class=\"text\">
\t                                        <h6>
\t                                            <a href=\"";
            // line 103
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("berita/detail", array("judul" => twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "slug", array())));
            echo "\">
\t                                            ";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "judul", array()), "html", null, true);
            echo "
\t                                            </a>
\t                                        </h6>  
\t                                        <p>";
            // line 107
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "tanggal", array()), "F j, Y"), "html", null, true);
            echo "</p>                                     
\t                                    </div>
\t                                </li>
                            \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                            </ul><!-- /.popular-news -->
                        </div><!-- /.widget-popular-news -->
                        <div class=\"widget widget_categories\">
                            <h5 class=\"widget-title\">Category</h5>
                            <ul>
                                <li><a href=\"#\">Business</a></li>
                                <li><a href=\"#\">Finanve</a></li>
                                <li><a href=\"#\">Insurance</a></li>
                                <li><a href=\"#\">Leasing</a></li>
                            </ul>
                        </div><!-- /.widget-categories -->
 
                        <div class=\"widget widget_tag\">
                            <h5 class=\"widget-title\">Tags</h5>
                            <div class=\"tag-list\">
                                <a href=\"#\">Business</a>
                                <a href=\"#\">Consulting</a>
                                <a href=\"#\">Finanve</a>
                                <a href=\"#\">Insurance</a>
                                <a href=\"#\">Management</a>
                                <a href=\"#\">Portfolio</a>    
                            </div>
                        </div><!-- /.widget-tag -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-3 -->             
            </div><!-- /.row -->           
        </div><!-- /.container -->   
    </section>   

    <section class=\"flat-row v1 bg-theme\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"title-section\">
                        <h1 class=\"title\">Newsletter</h1>
                        <div class=\"sub-title\">
                            Subscribe now and receive weekly newsletter with
                        </div>
                    </div>
                    <form id=\"subscribe-form\" class=\"flat-mailchimp\" method=\"post\" action=\"#\" data-mailchimp=\"true\">
                        <div class=\"field clearfix\" id=\"subscribe-content\"> 
                            <p class=\"wrap-input-email\">
                                <input type=\"text\" tabindex=\"2\" id=\"subscribe-email\" name=\"subscribe-email\" placeholder=\"Your Email Here\">
                            </p>
                            <p class=\"wrap-btn\">
                                <button type=\"button\" id=\"subscribe-button\" class=\" subscribe-submit effect-button\" title=\"Subscribe now\">SUBSCRIBE</button>
                            </p>
                        </div>
                        <div id=\"subscribe-msg\"></div>
                    </form>
                </div>
                <div class=\"col-lg-2\">
                    <div class=\"flat-counter text-center\">                            
                        <div class=\"content-counter\">
                            <div class=\"icon-count\">
                                <i class=\"ion-waterdrop\"></i>
                            </div>
                            <div class=\"name-count\">Listing</div>
                            <div class=\"numb-count\" data-to=\"1897\" data-speed=\"2000\" data-waypoint-active=\"yes\">1897</div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2\">
                    <div class=\"flat-counter text-center\">                            
                        <div class=\"content-counter\">
                            <div class=\"icon-count\">
                                <i class=\"ion-pricetags\"></i>
                            </div>
                            <div class=\"name-count\">Categories</div>
                            <div class=\"numb-count\" data-to=\"967\" data-speed=\"2000\" data-waypoint-active=\"yes\">967</div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2\">
                    <div class=\"flat-counter text-center\">                            
                        <div class=\"content-counter\">
                            <div class=\"icon-count\">
                                <i class=\"ion-ios-people\"></i>
                            </div>
                            <div class=\"name-count\">Users</div>
                            <div class=\"numb-count\" data-to=\"1101\" data-speed=\"2000\" data-waypoint-active=\"yes\">1101</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </section>";
    }

    public function getTemplateName()
    {
        return "G:\\xampp\\htdocs\\jdih/themes/jdih/pages/berita/detail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 111,  172 => 107,  166 => 104,  162 => 103,  157 => 100,  153 => 99,  129 => 78,  125 => 77,  114 => 68,  110 => 67,  86 => 46,  76 => 39,  70 => 36,  64 => 33,  43 => 17,  38 => 15,  33 => 13,  19 => 1,);
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
                        <h1 class=\"title\">Berita</h1>
                    </div><!-- /.page-title-captions -->
                    <div class=\"breadcrumbs\">
                        <ul>
                            <li><a href=\"{{ url('/') }}\">Beranda</a></li>
                            <li> - </li>                            
                            <li><a href=\"{{ 'berita/listing'|page }}\">Berita</a></li>
                            <li> - </li>
                            <li><a href=\"{{ 'berita/detail'|page({ judul: berita.slug }) }}\">{{ berita.judul }}</a></li>
                        </ul>                   
                    </div><!-- /.breadcrumbs -->   
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title --> 

    <!-- Blog posts -->
    <section class=\"main-content blog-posts blog-single\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-9\">
                    <div class=\"post-wrap\">
                        <article class=\"post clearfix\">
                            <div class=\"featured-post\">
                                <img src=\"{{ berita.gambar.thumb(870, 600, {'mode' : 'crop'}) }}\" alt=\"image\">
                            </div><!-- /.feature-post -->
                            <div class=\"content-post\">
                                <h3 class=\"title-post\">{{ berita.judul }}</h3>
                                <ul class=\"meta-post clearfix\">
                                    <li class=\"time\">
                                        {{ berita.tanggal| date('F j, Y') }}
                                    </li>
                                    <li class=\"categories\"> 
                                        <a href=\"#\">Business</a>, <a href=\"#\">Leasing</a>
                                    </li>
                                </ul><!-- /.meta-post -->
                                <div align=\"justify\">                              
                                    {{ berita.isi|raw}}
                                </div>

                                <div class=\"direction clearfix\">
                                    <div class=\"tag-single float-left\">
                                        <span>Tags:</span>
                                        <a href=\"#\"> Business,</a>
                                        <a href=\"#\"> Tax,</a>
                                        <a href=\"#\"> Finance</a>
                                    </div>
                                    <div class=\"social-links float-right\">
                                        <span>Share:</span>
                                        <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                        <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                        <a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
                                    </div>
                                </div>
                            </div><!-- /.content-post -->
                        </article>
                        <div>
                            <h2>Tanyakan pada kami</h2>
                           {% component 'FaqAsk' %}
                        </div>   
                        <div id=\"disqus_thread\"></div>
                        <script>

                        /**
                        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                        
                        var disqus_config = function () {
                        this.page.url = \"{{ ''| page }}\";  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = \"{{ ''| page }}\"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };
                        
                        (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://jdih-2.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                        })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>
                                           
                        
                    </div><!-- /.post-wrap -->                                  
                </div><!-- /.col-lg-9 -->  

                <div class=\"col-lg-3\">
                    <div class=\"sidebar\">
                        <div class=\"widget widget-recent-news\">
                            <h5 class=\"widget-title\">Berita Terkini</h5>
                            <ul class=\"popular-news clearfix\">
                            \t{% for list in all %}
                            \t\t<li>
\t                                    <div class=\"text\">
\t                                        <h6>
\t                                            <a href=\"{{ 'berita/detail'|page({ judul: list.slug }) }}\">
\t                                            {{ list.judul }}
\t                                            </a>
\t                                        </h6>  
\t                                        <p>{{ list.tanggal|date('F j, Y') }}</p>                                     
\t                                    </div>
\t                                </li>
                            \t{% endfor %}
                            </ul><!-- /.popular-news -->
                        </div><!-- /.widget-popular-news -->
                        <div class=\"widget widget_categories\">
                            <h5 class=\"widget-title\">Category</h5>
                            <ul>
                                <li><a href=\"#\">Business</a></li>
                                <li><a href=\"#\">Finanve</a></li>
                                <li><a href=\"#\">Insurance</a></li>
                                <li><a href=\"#\">Leasing</a></li>
                            </ul>
                        </div><!-- /.widget-categories -->
 
                        <div class=\"widget widget_tag\">
                            <h5 class=\"widget-title\">Tags</h5>
                            <div class=\"tag-list\">
                                <a href=\"#\">Business</a>
                                <a href=\"#\">Consulting</a>
                                <a href=\"#\">Finanve</a>
                                <a href=\"#\">Insurance</a>
                                <a href=\"#\">Management</a>
                                <a href=\"#\">Portfolio</a>    
                            </div>
                        </div><!-- /.widget-tag -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-3 -->             
            </div><!-- /.row -->           
        </div><!-- /.container -->   
    </section>   

    <section class=\"flat-row v1 bg-theme\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"title-section\">
                        <h1 class=\"title\">Newsletter</h1>
                        <div class=\"sub-title\">
                            Subscribe now and receive weekly newsletter with
                        </div>
                    </div>
                    <form id=\"subscribe-form\" class=\"flat-mailchimp\" method=\"post\" action=\"#\" data-mailchimp=\"true\">
                        <div class=\"field clearfix\" id=\"subscribe-content\"> 
                            <p class=\"wrap-input-email\">
                                <input type=\"text\" tabindex=\"2\" id=\"subscribe-email\" name=\"subscribe-email\" placeholder=\"Your Email Here\">
                            </p>
                            <p class=\"wrap-btn\">
                                <button type=\"button\" id=\"subscribe-button\" class=\" subscribe-submit effect-button\" title=\"Subscribe now\">SUBSCRIBE</button>
                            </p>
                        </div>
                        <div id=\"subscribe-msg\"></div>
                    </form>
                </div>
                <div class=\"col-lg-2\">
                    <div class=\"flat-counter text-center\">                            
                        <div class=\"content-counter\">
                            <div class=\"icon-count\">
                                <i class=\"ion-waterdrop\"></i>
                            </div>
                            <div class=\"name-count\">Listing</div>
                            <div class=\"numb-count\" data-to=\"1897\" data-speed=\"2000\" data-waypoint-active=\"yes\">1897</div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2\">
                    <div class=\"flat-counter text-center\">                            
                        <div class=\"content-counter\">
                            <div class=\"icon-count\">
                                <i class=\"ion-pricetags\"></i>
                            </div>
                            <div class=\"name-count\">Categories</div>
                            <div class=\"numb-count\" data-to=\"967\" data-speed=\"2000\" data-waypoint-active=\"yes\">967</div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2\">
                    <div class=\"flat-counter text-center\">                            
                        <div class=\"content-counter\">
                            <div class=\"icon-count\">
                                <i class=\"ion-ios-people\"></i>
                            </div>
                            <div class=\"name-count\">Users</div>
                            <div class=\"numb-count\" data-to=\"1101\" data-speed=\"2000\" data-waypoint-active=\"yes\">1101</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </section>", "G:\\xampp\\htdocs\\jdih/themes/jdih/pages/berita/detail.htm", "");
    }
}
