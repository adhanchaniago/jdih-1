<?php

/* G:\xampp\htdocs\jdih/themes/jdih/pages/listing.htm */
class __TwigTemplate_2d116c7608717deca74bec04de267a9d7159b6ecc8324573fdcb9427fb80e931 extends Twig_Template
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
                        <h1 class=\"title\">Peraturan</h1>
                    </div><!-- /.page-title-captions -->
                    <div class=\"breadcrumbs\">
                        <ul>
                            <li><a href=\"";
        // line 13
        echo url("/");
        echo "\">Home</a></li>
                            <li> - </li>                            
                            <li>Produk Hukum</li>
                        </ul>                   
                    </div><!-- /.breadcrumbs -->   
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title -->

    <!-- Blog posts -->
    <section class=\"main-content page-listing-grid\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-9\">
                    <div id=\"partialPeraturan\">
                        ";
        // line 29
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("tablePeraturan"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 30
        echo "                    </div>
                </div><!-- /.col-lg-9 -->    
                <div class=\"col-lg-3\">
                    <div class=\"sidebar\">
                        <div class=\" widget widget-form style2\">
                            <h5 class=\"widget-title\">
                                Pencarian
                            </h5>
                            
                                ";
        // line 39
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), array("ajax", "onSearchPeraturan", array("update" => array("peraturan/peraturan" => "#partialPeraturan", "peraturan/pagination" => "#partialPagination"), "class" => "filter-form clearfix")));
        echo "
                                <div id=\"PeraturanSearch\">
                                    <p id=\"filter_col4\" class=\"book-notes\" data-column=\"3\">                                      
                                        <input type=\"text\" class=\"column_filter\" id=\"col3_filter\" placeholder=\"Tentang\">
                                    </p>
                                    <p id=\"filter_col1\" class=\"book-notes\" data-column=\"0\">                                      
                                        <input type=\"text\" class=\"column_filter\" id=\"col0_filter\" placeholder=\"Jenis\">
                                    </p>
                                    <p id=\"filter_col2\" class=\"book-notes\" data-column=\"1\">                                      
                                        <input type=\"text\" class=\"column_filter\" id=\"col1_filter\" placeholder=\"Nomor\">
                                    </p>
                                    <p id=\"filter_col3\" class=\"book-notes\" data-column=\"2\">                                      
                                        <input type=\"text\" class=\"column_filter\" id=\"col2_filter\" placeholder=\"Tahun\">
                                    </p>
                                </div>
                                ";
        // line 54
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
        echo "
                        </div>
                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-3 -->            
            </div><!-- /.row -->           
        </div><!-- /.container -->   
    </section>
    <!-- <script type=\"text/javascript\">
        // Setup - add a text input to each footer cell
        

        function filterGlobal () {
            \$('#example').DataTable().search(
                \$('#global_filter').val()
            ).draw();
        }
         
        function filterColumn ( i ) {
            \$('#example').DataTable().column( i ).search(
                \$('#col'+i+'_filter').val()
            ).draw();
        }

        function param(name) {
            var results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(window.location.href);
            return results ? decodeURIComponent(results[1].replace(/\\+/g, '%20')) : null;
            // return (location.search.split(name + '=')[1] || '').split('&')[0];
        }

        \$(document).ready(function() {

            \$('#col3_filter').val(param('tentang'));
            \$('#col0_filter').val(param('jenis'));
            \$('#col1_filter').val(param('nomor'));
            \$('#col2_filter').val(param('tahun'));

            var table = \$('#example').DataTable( {
                \"ajax\": \"";
        // line 91
        echo url("/");
        echo "/api/v1/peraturan\",
                \"columns\": [
                    { \"data\": \"jenis\" },
                    { \"data\": \"nomor\" },
                    { \"data\": \"tahun\" },
                    { \"data\": \"tentang\",
                        \"render\": function(data, type, row, meta){
                            if(type === 'display'){
                                data = '<a href=\"' + '";
        // line 99
        echo $this->env->getExtension('System\Twig\Extension')->mediaFilter("");
        echo "' + row.filename + '\" target=\"_blank\">' + data + '</a>';
                            }
                            return data;
                         }
                    }
                ],
                'mark': true,
                \"order\": [[ 2, \"desc\" ]],
                \"pageLength\": 25,
                \"dom\": 'tipr'
                // \"deferRender\":    true,
                // \"scrollY\":        300,
                // \"scrollX\":        true,
                // \"paging\" :        false
                // \"scroller\": {
                //     \"loadingIndicator\": true
                // }
                // \"stateSave\": true
            } ).columns(3).search(
                \$('#col3_filter').val()
            ).columns(0).search(
                \$('#col0_filter').val()
            ).columns(1).search(
                \$('#col1_filter').val()
            ).columns(2).search(
                \$('#col2_filter').val()
            ).draw();

            \$('#example').on( 'page.dt', function () {
              \$('html, body').animate({
                  scrollTop: 0
              }, 'slow');
            } );

            \$('input.global_filter').on( 'keyup', function () {
                filterGlobal();
            } );
         
            \$('input.column_filter').on( 'keyup', function () {
                filterColumn( \$(this).parents('p').attr('data-column') );
            } );


        } );

        

        
    </script> -->";
    }

    public function getTemplateName()
    {
        return "G:\\xampp\\htdocs\\jdih/themes/jdih/pages/listing.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 99,  125 => 91,  85 => 54,  67 => 39,  56 => 30,  52 => 29,  33 => 13,  19 => 1,);
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
                        <h1 class=\"title\">Peraturan</h1>
                    </div><!-- /.page-title-captions -->
                    <div class=\"breadcrumbs\">
                        <ul>
                            <li><a href=\"{{ url('/') }}\">Home</a></li>
                            <li> - </li>                            
                            <li>Produk Hukum</li>
                        </ul>                   
                    </div><!-- /.breadcrumbs -->   
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title -->

    <!-- Blog posts -->
    <section class=\"main-content page-listing-grid\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-9\">
                    <div id=\"partialPeraturan\">
                        {% component  'tablePeraturan' %}
                    </div>
                </div><!-- /.col-lg-9 -->    
                <div class=\"col-lg-3\">
                    <div class=\"sidebar\">
                        <div class=\" widget widget-form style2\">
                            <h5 class=\"widget-title\">
                                Pencarian
                            </h5>
                            
                                {{ form_ajax('onSearchPeraturan', {update:{'peraturan/peraturan':'#partialPeraturan', 'peraturan/pagination':'#partialPagination'}, class: 'filter-form clearfix'}) }}
                                <div id=\"PeraturanSearch\">
                                    <p id=\"filter_col4\" class=\"book-notes\" data-column=\"3\">                                      
                                        <input type=\"text\" class=\"column_filter\" id=\"col3_filter\" placeholder=\"Tentang\">
                                    </p>
                                    <p id=\"filter_col1\" class=\"book-notes\" data-column=\"0\">                                      
                                        <input type=\"text\" class=\"column_filter\" id=\"col0_filter\" placeholder=\"Jenis\">
                                    </p>
                                    <p id=\"filter_col2\" class=\"book-notes\" data-column=\"1\">                                      
                                        <input type=\"text\" class=\"column_filter\" id=\"col1_filter\" placeholder=\"Nomor\">
                                    </p>
                                    <p id=\"filter_col3\" class=\"book-notes\" data-column=\"2\">                                      
                                        <input type=\"text\" class=\"column_filter\" id=\"col2_filter\" placeholder=\"Tahun\">
                                    </p>
                                </div>
                                {{ form_close() }}
                        </div>
                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-3 -->            
            </div><!-- /.row -->           
        </div><!-- /.container -->   
    </section>
    <!-- <script type=\"text/javascript\">
        // Setup - add a text input to each footer cell
        

        function filterGlobal () {
            \$('#example').DataTable().search(
                \$('#global_filter').val()
            ).draw();
        }
         
        function filterColumn ( i ) {
            \$('#example').DataTable().column( i ).search(
                \$('#col'+i+'_filter').val()
            ).draw();
        }

        function param(name) {
            var results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(window.location.href);
            return results ? decodeURIComponent(results[1].replace(/\\+/g, '%20')) : null;
            // return (location.search.split(name + '=')[1] || '').split('&')[0];
        }

        \$(document).ready(function() {

            \$('#col3_filter').val(param('tentang'));
            \$('#col0_filter').val(param('jenis'));
            \$('#col1_filter').val(param('nomor'));
            \$('#col2_filter').val(param('tahun'));

            var table = \$('#example').DataTable( {
                \"ajax\": \"{{ url('/') }}/api/v1/peraturan\",
                \"columns\": [
                    { \"data\": \"jenis\" },
                    { \"data\": \"nomor\" },
                    { \"data\": \"tahun\" },
                    { \"data\": \"tentang\",
                        \"render\": function(data, type, row, meta){
                            if(type === 'display'){
                                data = '<a href=\"' + '{{''|media }}' + row.filename + '\" target=\"_blank\">' + data + '</a>';
                            }
                            return data;
                         }
                    }
                ],
                'mark': true,
                \"order\": [[ 2, \"desc\" ]],
                \"pageLength\": 25,
                \"dom\": 'tipr'
                // \"deferRender\":    true,
                // \"scrollY\":        300,
                // \"scrollX\":        true,
                // \"paging\" :        false
                // \"scroller\": {
                //     \"loadingIndicator\": true
                // }
                // \"stateSave\": true
            } ).columns(3).search(
                \$('#col3_filter').val()
            ).columns(0).search(
                \$('#col0_filter').val()
            ).columns(1).search(
                \$('#col1_filter').val()
            ).columns(2).search(
                \$('#col2_filter').val()
            ).draw();

            \$('#example').on( 'page.dt', function () {
              \$('html, body').animate({
                  scrollTop: 0
              }, 'slow');
            } );

            \$('input.global_filter').on( 'keyup', function () {
                filterGlobal();
            } );
         
            \$('input.column_filter').on( 'keyup', function () {
                filterColumn( \$(this).parents('p').attr('data-column') );
            } );


        } );

        

        
    </script> -->", "G:\\xampp\\htdocs\\jdih/themes/jdih/pages/listing.htm", "");
    }
}
