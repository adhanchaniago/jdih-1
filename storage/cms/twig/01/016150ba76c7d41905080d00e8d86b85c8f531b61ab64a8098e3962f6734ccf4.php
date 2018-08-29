<?php

/* G:\xampp\htdocs\jdih/themes/jdih/partials/footer.htm */
class __TwigTemplate_d780676e8a11c6227ce6e1e6c4a3c1847ef0d7d93698f0a235ed27d7f96a1605 extends Twig_Template
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
        echo "<!-- Footer -->
    <footer class=\"footer footer-widgets\">
            <div class=\"container\">
                <div class=\"row\"> 
                    <div class=\"col-lg-4\">  
                        <div class=\"widget widget_text widget_info\">
                            <h5 class=\"widget-title\">Tentang JDIH LAPAN</h5>
                            <div class=\"textwidget\">                                
                                <p align=\"justify\"><b>JDIH LAPAN</b> merupakan wadah pendayagunaan bersama atas dokumen hukum secara tertib, terpadu dan berkesinambungan di lingkungan Lembaga Penerbangan dan Antariksa Nasional.</p>                      
                            </div><!-- /.textwidget -->
                            <ul class=\"flat-infomation\">
                                <li><i class=\"fa fa-map-marker\"></i>Jl. Pemuda Persil No. 1 Rawamangun, Jakarta Timur, Indonesia</li>
                                <li><i class=\"fa fa-phone\"></i>+62 21 4892 802</li>
                            </ul>
                        </div><!-- /.widget -->      
                    </div><!-- /.col-lg-3 --> 

                    <div class=\"col-md-2\">  
                        <div id=\"nav_menu-2\" class=\"widget widget_nav_menu\">
                            <h5 class=\"widget-title\">Peta Situs</h5>
                            <div class=\"wrap-menufooter clearfix\">
                                <ul class=\"menu one-half\">
                                    ";
        // line 23
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("staticMenu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 24
        echo "                                </ul>
                            </div>
                        </div>
                    </div><!-- /.col-lg-3 -->

                    <div class=\"col-lg-2\">  
                        <div id=\"nav_menu-2\" class=\"widget widget_nav_menu\">
                            <h5 class=\"widget-title\">Tautan Terkait</h5>
                            <div class=\"wrap-menufooter clearfix\">
                                <ul class=\"icon one-half\">
                                    <li class=\"icon-item\"><a href=\"https://lapan.go.id/\" target=\"_blank\"><img src=\"";
        // line 34
        echo url("/");
        echo "/themes/jdih/assets/listany/images/badge-lapan.png\" alt=\"image\" height=\"50\" width=\"50\"></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href=\"http://jdihn.id/\" target=\"_blank\"><img src=\"";
        echo url("/");
        echo "/themes/jdih/assets/listany/images/badge-jdihn.png\" alt=\"image\" height=\"50\" width=\"50\"></a></li><br>
                                    <li class=\"icon-item\"><a href=\"https://setneg.go.id/menu_page/index/63\" target=\"_blank\"><img src=\"";
        // line 35
        echo url("/");
        echo "/themes/jdih/assets/listany/images/badge-setneg.png\" alt=\"image\" height=\"50\" width=\"50\">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href=\"http://peraturan.go.id/\" target=\"_blank\"><img src=\"";
        echo url("/");
        echo "/themes/jdih/assets/listany/images/badge-kumham.png\" alt=\"image\" height=\"50\" width=\"50\"></a></a></li><!-- 
                                    <li class=\"menu-item\"><a href=\"#\">Maintenance</a></li>
                                    <li class=\"menu-item\"><a href=\"#\">Corporate Client</a></li>
                                    <li class=\"menu-item\"><a href=\"#\">LearnPress</a></li>
                                    <li class=\"menu-item\"><a href=\"#\">Release Status</a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div><!-- /.col-lg-3 -->

                    <div class=\"col-lg-4\">
                       <div class=\"widget widget_listing\">
                            <h5 class=\"widget-title\">Peraturan Terkini</h5>
                            <ul>
                                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["peraturan"] ?? null), 0, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["aturan"]) {
            // line 50
            echo "                                <li>
                                    <div class=\"featured\">
                                        <a href=\"";
            // line 52
            echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["aturan"], "filename", array()));
            echo "\" class=\"effect\"><img src=\"";
            echo url("/");
            echo "/themes/jdih/assets/listany/images/icon-law-lapan.png\" alt=\"image\" height=\"50\" width=\"50\"></a>
                                    </div>
                                    <div class=\"info-listing\">
                                        <h6><a href=\"";
            // line 55
            echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["aturan"], "filename", array()));
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["aturan"], "tentang", array()), "html", null, true);
            echo "</a></h6>
                                        <div class=\"start-review\">
                                            <!-- <span class=\"flat-start\">
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                            </span> -->
                                            Kategori: <a href=\"";
            // line 64
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("listing", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["aturan"], "jenis_nama", array())));
            echo "\" class=\"review\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["aturan"], "jenis_nama", array()), "html", null, true);
            echo "</a>
                                        </div>
                                    </div>
                                </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aturan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                            </ul>
                        </div>
                    </div><!-- /.col-lg-3 -->

                    <!-- <div class=\"col-lg-3\">
                        <div class=\"widget widget_contact\">
                            <h5 class=\"widget-title\">Quick Contact</h5>
                            <ul class=\"clearfix\">                                
                                <li>
                                    <div class=\"thumb\">
                                        <a href=\"#\" class=\"effect\">
                                            <img src=\"";
        // line 80
        echo url("/");
        echo "/themes/jdih/assets/listany/images/flickr/1.jpg\" alt=\"image\">
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"thumb\">
                                        <a href=\"#\" class=\"effect\">
                                            <img src=\"";
        // line 87
        echo url("/");
        echo "/themes/jdih/assets/listany/images/flickr/2.jpg\" alt=\"image\">
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"thumb\">
                                        <a href=\"#\" class=\"effect\">
                                            <img src=\"";
        // line 94
        echo url("/");
        echo "/themes/jdih/assets/listany/images/flickr/3.jpg\" alt=\"image\">
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"thumb\">
                                        <a href=\"#\" class=\"effect\">
                                            <img src=\"";
        // line 101
        echo url("/");
        echo "/themes/jdih/assets/listany/images/flickr/4.jpg\" alt=\"image\">
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"thumb\">
                                        <a href=\"#\" class=\"effect\">
                                            <img src=\"";
        // line 108
        echo url("/");
        echo "/themes/jdih/assets/listany/images/flickr/5.jpg\" alt=\"image\">
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"thumb\">
                                        <a href=\"#\" class=\"effect\">
                                            <img src=\"";
        // line 115
        echo url("/");
        echo "/themes/jdih/assets/listany/images/flickr/6.jpg\" alt=\"image\">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> --><!-- /.col-md-3 -->
                </div><!-- /.row -->    
            </div><!-- /.container -->
            <div class=\"container\">
                <div class=\"bottom\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"copyright\"> 
                                <p>Copyright © 2018. Pustikpan <a href=\"https://lapan.go.id\">LAPAN</a>. All Rights Reserved.
                                </p>
                            </div>                   
                        </div><!-- /.col-md-12 -->
                        <div class=\"col-lg-6\">
                            <div class=\"social-links float-right\">
                                <a href=\"https://www.facebook.com/LAPANRI/\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a>
                                <a href=\"https://twitter.com/lapan_ri\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a>                  
                                <a href=\"https://www.youtube.com/channel/UCF9_BqpSgtLOGitq4YJaTwA/featured\" target=\"_blank\"><i class=\"fa fa-youtube\"></i></a>
                                <a href=\"https://www.instagram.com/lapan_ri/?hl=id\" target=\"_blank\"><i class=\"fa fa-instagram\"></i></a>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
    </footer> 
    
    <!-- Go Top -->
    <a class=\"go-top effect-button\">
        <i class=\"fa fa-angle-up\"></i>
    </a>   

    </div>";
    }

    public function getTemplateName()
    {
        return "G:\\xampp\\htdocs\\jdih/themes/jdih/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 115,  180 => 108,  170 => 101,  160 => 94,  150 => 87,  140 => 80,  127 => 69,  114 => 64,  100 => 55,  92 => 52,  88 => 50,  84 => 49,  65 => 35,  59 => 34,  47 => 24,  43 => 23,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Footer -->
    <footer class=\"footer footer-widgets\">
            <div class=\"container\">
                <div class=\"row\"> 
                    <div class=\"col-lg-4\">  
                        <div class=\"widget widget_text widget_info\">
                            <h5 class=\"widget-title\">Tentang JDIH LAPAN</h5>
                            <div class=\"textwidget\">                                
                                <p align=\"justify\"><b>JDIH LAPAN</b> merupakan wadah pendayagunaan bersama atas dokumen hukum secara tertib, terpadu dan berkesinambungan di lingkungan Lembaga Penerbangan dan Antariksa Nasional.</p>                      
                            </div><!-- /.textwidget -->
                            <ul class=\"flat-infomation\">
                                <li><i class=\"fa fa-map-marker\"></i>Jl. Pemuda Persil No. 1 Rawamangun, Jakarta Timur, Indonesia</li>
                                <li><i class=\"fa fa-phone\"></i>+62 21 4892 802</li>
                            </ul>
                        </div><!-- /.widget -->      
                    </div><!-- /.col-lg-3 --> 

                    <div class=\"col-md-2\">  
                        <div id=\"nav_menu-2\" class=\"widget widget_nav_menu\">
                            <h5 class=\"widget-title\">Peta Situs</h5>
                            <div class=\"wrap-menufooter clearfix\">
                                <ul class=\"menu one-half\">
                                    {% component 'staticMenu' %}
                                </ul>
                            </div>
                        </div>
                    </div><!-- /.col-lg-3 -->

                    <div class=\"col-lg-2\">  
                        <div id=\"nav_menu-2\" class=\"widget widget_nav_menu\">
                            <h5 class=\"widget-title\">Tautan Terkait</h5>
                            <div class=\"wrap-menufooter clearfix\">
                                <ul class=\"icon one-half\">
                                    <li class=\"icon-item\"><a href=\"https://lapan.go.id/\" target=\"_blank\"><img src=\"{{ url('/') }}/themes/jdih/assets/listany/images/badge-lapan.png\" alt=\"image\" height=\"50\" width=\"50\"></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href=\"http://jdihn.id/\" target=\"_blank\"><img src=\"{{ url('/') }}/themes/jdih/assets/listany/images/badge-jdihn.png\" alt=\"image\" height=\"50\" width=\"50\"></a></li><br>
                                    <li class=\"icon-item\"><a href=\"https://setneg.go.id/menu_page/index/63\" target=\"_blank\"><img src=\"{{ url('/') }}/themes/jdih/assets/listany/images/badge-setneg.png\" alt=\"image\" height=\"50\" width=\"50\">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href=\"http://peraturan.go.id/\" target=\"_blank\"><img src=\"{{ url('/') }}/themes/jdih/assets/listany/images/badge-kumham.png\" alt=\"image\" height=\"50\" width=\"50\"></a></a></li><!-- 
                                    <li class=\"menu-item\"><a href=\"#\">Maintenance</a></li>
                                    <li class=\"menu-item\"><a href=\"#\">Corporate Client</a></li>
                                    <li class=\"menu-item\"><a href=\"#\">LearnPress</a></li>
                                    <li class=\"menu-item\"><a href=\"#\">Release Status</a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div><!-- /.col-lg-3 -->

                    <div class=\"col-lg-4\">
                       <div class=\"widget widget_listing\">
                            <h5 class=\"widget-title\">Peraturan Terkini</h5>
                            <ul>
                                {% for aturan in peraturan|slice(0, 2) %}
                                <li>
                                    <div class=\"featured\">
                                        <a href=\"{{ aturan.filename|media }}\" class=\"effect\"><img src=\"{{ url('/') }}/themes/jdih/assets/listany/images/icon-law-lapan.png\" alt=\"image\" height=\"50\" width=\"50\"></a>
                                    </div>
                                    <div class=\"info-listing\">
                                        <h6><a href=\"{{ aturan.filename|media }}\" target=\"_blank\">{{ aturan.tentang }}</a></h6>
                                        <div class=\"start-review\">
                                            <!-- <span class=\"flat-start\">
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                            </span> -->
                                            Kategori: <a href=\"{{ 'listing'|page({ slug: aturan.jenis_nama }) }}\" class=\"review\">{{ aturan.jenis_nama }}</a>
                                        </div>
                                    </div>
                                </li>
                                {% endfor %}
                            </ul>
                        </div>
                    </div><!-- /.col-lg-3 -->

                    <!-- <div class=\"col-lg-3\">
                        <div class=\"widget widget_contact\">
                            <h5 class=\"widget-title\">Quick Contact</h5>
                            <ul class=\"clearfix\">                                
                                <li>
                                    <div class=\"thumb\">
                                        <a href=\"#\" class=\"effect\">
                                            <img src=\"{{ url('/') }}/themes/jdih/assets/listany/images/flickr/1.jpg\" alt=\"image\">
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"thumb\">
                                        <a href=\"#\" class=\"effect\">
                                            <img src=\"{{ url('/') }}/themes/jdih/assets/listany/images/flickr/2.jpg\" alt=\"image\">
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"thumb\">
                                        <a href=\"#\" class=\"effect\">
                                            <img src=\"{{ url('/') }}/themes/jdih/assets/listany/images/flickr/3.jpg\" alt=\"image\">
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"thumb\">
                                        <a href=\"#\" class=\"effect\">
                                            <img src=\"{{ url('/') }}/themes/jdih/assets/listany/images/flickr/4.jpg\" alt=\"image\">
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"thumb\">
                                        <a href=\"#\" class=\"effect\">
                                            <img src=\"{{ url('/') }}/themes/jdih/assets/listany/images/flickr/5.jpg\" alt=\"image\">
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"thumb\">
                                        <a href=\"#\" class=\"effect\">
                                            <img src=\"{{ url('/') }}/themes/jdih/assets/listany/images/flickr/6.jpg\" alt=\"image\">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> --><!-- /.col-md-3 -->
                </div><!-- /.row -->    
            </div><!-- /.container -->
            <div class=\"container\">
                <div class=\"bottom\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"copyright\"> 
                                <p>Copyright © 2018. Pustikpan <a href=\"https://lapan.go.id\">LAPAN</a>. All Rights Reserved.
                                </p>
                            </div>                   
                        </div><!-- /.col-md-12 -->
                        <div class=\"col-lg-6\">
                            <div class=\"social-links float-right\">
                                <a href=\"https://www.facebook.com/LAPANRI/\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a>
                                <a href=\"https://twitter.com/lapan_ri\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a>                  
                                <a href=\"https://www.youtube.com/channel/UCF9_BqpSgtLOGitq4YJaTwA/featured\" target=\"_blank\"><i class=\"fa fa-youtube\"></i></a>
                                <a href=\"https://www.instagram.com/lapan_ri/?hl=id\" target=\"_blank\"><i class=\"fa fa-instagram\"></i></a>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
    </footer> 
    
    <!-- Go Top -->
    <a class=\"go-top effect-button\">
        <i class=\"fa fa-angle-up\"></i>
    </a>   

    </div>", "G:\\xampp\\htdocs\\jdih/themes/jdih/partials/footer.htm", "");
    }
}
