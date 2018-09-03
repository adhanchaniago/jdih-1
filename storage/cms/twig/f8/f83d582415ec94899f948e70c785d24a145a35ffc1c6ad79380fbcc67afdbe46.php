<?php

/* G:\xampp\htdocs\jdih/themes/jdih/pages/profil/sejarah.htm */
class __TwigTemplate_e2a567a62b0ec90515cc25c949f95fae5fc0ec655b3034e9d4f2bd82cc1b7e10 extends Twig_Template
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
        echo "<section class=\"main-content blog-posts blog-single\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-9\">
                    <div class=\"post-wrap\">
                        <article class=\"post clearfix\">
                            <div class=\"content-post\">
                                <h3 class=\"title-post\" align=\"center\">SEJARAH SINGKAT JDIH LAPAN</h3>
                                <div align=\"justify\">                              
                                    ";
        // line 10
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["profil"] ?? null), "sejarah", array());
        echo "
                                </div>
                            </div><!-- /.content-post -->
                        </article> 
                    </div><!-- /.post-wrap -->                                  
                </div><!-- /.col-lg-9 -->  

                <div class=\"col-lg-3\">
                    <div class=\"sidebar\">
                        <div class=\"widget widget_categories\">
                            <h5 class=\"widget-title\">Profil</h5>
                            <ul>
                                <li><a href=\"#\">Sejarah Singkat</a></li>
                                <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("profil/visimisi");
        echo "\">Visi Misi</a></li>
                                <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("profil/struktur_organisasi");
        echo "\">Struktur Organisasi</a></li>
                            </ul>
                        </div><!-- /.widget-categories --><!-- /.widget-tag -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-3 -->             
            </div><!-- /.row -->           
        </div><!-- /.container -->   
    </section>";
    }

    public function getTemplateName()
    {
        return "G:\\xampp\\htdocs\\jdih/themes/jdih/pages/profil/sejarah.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 24,  46 => 23,  30 => 10,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"main-content blog-posts blog-single\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-9\">
                    <div class=\"post-wrap\">
                        <article class=\"post clearfix\">
                            <div class=\"content-post\">
                                <h3 class=\"title-post\" align=\"center\">SEJARAH SINGKAT JDIH LAPAN</h3>
                                <div align=\"justify\">                              
                                    {{ profil.sejarah|raw}}
                                </div>
                            </div><!-- /.content-post -->
                        </article> 
                    </div><!-- /.post-wrap -->                                  
                </div><!-- /.col-lg-9 -->  

                <div class=\"col-lg-3\">
                    <div class=\"sidebar\">
                        <div class=\"widget widget_categories\">
                            <h5 class=\"widget-title\">Profil</h5>
                            <ul>
                                <li><a href=\"#\">Sejarah Singkat</a></li>
                                <li><a href=\"{{ 'profil/visimisi'|page }}\">Visi Misi</a></li>
                                <li><a href=\"{{ 'profil/struktur_organisasi'|page }}\">Struktur Organisasi</a></li>
                            </ul>
                        </div><!-- /.widget-categories --><!-- /.widget-tag -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-3 -->             
            </div><!-- /.row -->           
        </div><!-- /.container -->   
    </section>", "G:\\xampp\\htdocs\\jdih/themes/jdih/pages/profil/sejarah.htm", "");
    }
}
