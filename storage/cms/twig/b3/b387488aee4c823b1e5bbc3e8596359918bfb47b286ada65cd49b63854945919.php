<?php

/* G:\xampp\htdocs\jdih/themes/jdih/partials/header.htm */
class __TwigTemplate_3f0eae42780a5462fcdae17f2d961d3bfa5c8d1f9dc4abcd4b87b4161d21877e extends Twig_Template
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
        echo "<!-- Preloader -->
    <section class=\"loading-overlay\">
        <div class=\"Loading-Page\">
            <h2 class=\"loader\">Loading</h2>
        </div>
    </section> 

    <!-- Boxed -->
    <div class=\"boxed\">

    <!-- Header -->            
    <header id=\"header\" class=\"header clearfix\">
        <div class=\"container\">
            <div class=\"row\">                 
                <div class=\"col-lg-4\">
                    <div id=\"logo\" class=\"logo float-left\">
                        <a href=\"";
        // line 17
        echo url("/");
        echo "\" rel=\"home\">
                            <img src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/images/logo_jdih.png");
        echo "\" alt=\"image\" style=\"width: 350px; height: 55px;\">
                        </a>
                    </div><!-- /.logo -->
                    <div class=\"btn-menu\">
                        <span></span>
                    </div><!-- //mobile menu button -->
                </div><!-- /.col-lg-4 -->
                <div class=\"col-lg-8\">
                    <div class=\"nav-wrap\">                            
                        <nav id=\"mainnav\" class=\"mainnav float-left\">
                            
                                ";
        // line 29
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("staticMenu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 30
        echo "                                
                        </nav><!-- /.mainnav -->  
                        <div class=\"button-addlist float-right\">
\t                        <a href=\"https://lapan.go.id/\" rel=\"home\" target=\"_blank\">
\t                            <img src=\"";
        // line 34
        echo url("/");
        echo "/themes/jdih/assets/listany/images/logo-lapan.png\" alt=\"image\" style=\"width: 72px; height: 52px;\">
\t                        </a>
\t                    </div>
                        <!-- <div class=\"button-addlist float-right\">
                            <button type=\"button\" class=\"flat-button\" onclick=\"location.href='page-addlisting.html'\">Add Listing</button>
                         </div> --> 
                    </div><!-- /.nav-wrap -->
                </div><!-- /.col-lg-8 -->                                    
            </div><!-- /.row -->
        </div>
    </header><!-- /.header -->";
    }

    public function getTemplateName()
    {
        return "G:\\xampp\\htdocs\\jdih/themes/jdih/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 34,  63 => 30,  59 => 29,  45 => 18,  41 => 17,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Preloader -->
    <section class=\"loading-overlay\">
        <div class=\"Loading-Page\">
            <h2 class=\"loader\">Loading</h2>
        </div>
    </section> 

    <!-- Boxed -->
    <div class=\"boxed\">

    <!-- Header -->            
    <header id=\"header\" class=\"header clearfix\">
        <div class=\"container\">
            <div class=\"row\">                 
                <div class=\"col-lg-4\">
                    <div id=\"logo\" class=\"logo float-left\">
                        <a href=\"{{ url('/') }}\" rel=\"home\">
                            <img src=\"{{ 'assets/listany/images/logo_jdih.png'|theme }}\" alt=\"image\" style=\"width: 350px; height: 55px;\">
                        </a>
                    </div><!-- /.logo -->
                    <div class=\"btn-menu\">
                        <span></span>
                    </div><!-- //mobile menu button -->
                </div><!-- /.col-lg-4 -->
                <div class=\"col-lg-8\">
                    <div class=\"nav-wrap\">                            
                        <nav id=\"mainnav\" class=\"mainnav float-left\">
                            
                                {% component 'staticMenu' %}
                                
                        </nav><!-- /.mainnav -->  
                        <div class=\"button-addlist float-right\">
\t                        <a href=\"https://lapan.go.id/\" rel=\"home\" target=\"_blank\">
\t                            <img src=\"{{ url('/') }}/themes/jdih/assets/listany/images/logo-lapan.png\" alt=\"image\" style=\"width: 72px; height: 52px;\">
\t                        </a>
\t                    </div>
                        <!-- <div class=\"button-addlist float-right\">
                            <button type=\"button\" class=\"flat-button\" onclick=\"location.href='page-addlisting.html'\">Add Listing</button>
                         </div> --> 
                    </div><!-- /.nav-wrap -->
                </div><!-- /.col-lg-8 -->                                    
            </div><!-- /.row -->
        </div>
    </header><!-- /.header -->", "G:\\xampp\\htdocs\\jdih/themes/jdih/partials/header.htm", "");
    }
}
