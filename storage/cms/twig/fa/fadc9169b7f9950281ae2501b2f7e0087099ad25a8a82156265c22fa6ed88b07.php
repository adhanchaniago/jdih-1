<?php

/* G:\xampp\htdocs\jdih/plugins/pda/peraturan/components/tableperaturan/default.htm */
class __TwigTemplate_bc1d9db65d0205c1867b7b0309332bdc519e952c91227b80725c382d11a60cc0 extends Twig_Template
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
        $context["peraturan"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "peraturan", array());
        // line 2
        echo "
<table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">
    <thead>
        <tr>
            <th>Jenis</th>
            <th>Nomor</th>
            <th>Tahun</th>
            <th>Tentang</th>
        </tr>
    </thead>
</table>

<script type=\"text/javascript\">
    
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

        if('";
        // line 36
        echo twig_escape_filter($this->env, ($context["slug"] ?? null), "html", null, true);
        echo "' == 'default'){
            \$('#col0_filter').val(param('jenis'));
        } else {
            \$('#col0_filter').val('";
        // line 39
        echo twig_escape_filter($this->env, ($context["slug"] ?? null), "html", null, true);
        echo "');
        }

        \$('#col3_filter').val(param('tentang'));
        \$('#col1_filter').val(param('nomor'));
        \$('#col2_filter').val(param('tahun'));

        var table = \$('#example').DataTable( {
            \"ajax\": \"";
        // line 47
        echo url("/");
        echo "/apiPeraturan\",
            \"columns\": [
                { \"data\": \"jenis_nama\" },
                { \"data\": \"nomor\" },
                { \"data\": \"tahun\" },
                { \"data\": \"tentang\",
                    \"render\": function(data, type, row, meta){
                        if(type === 'display'){
                            data = '<a href=\"' + '";
        // line 55
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

</script>";
    }

    public function getTemplateName()
    {
        return "G:\\xampp\\htdocs\\jdih/plugins/pda/peraturan/components/tableperaturan/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 55,  74 => 47,  63 => 39,  57 => 36,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set peraturan = __SELF__.peraturan %}

<table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">
    <thead>
        <tr>
            <th>Jenis</th>
            <th>Nomor</th>
            <th>Tahun</th>
            <th>Tentang</th>
        </tr>
    </thead>
</table>

<script type=\"text/javascript\">
    
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

        if('{{ slug }}' == 'default'){
            \$('#col0_filter').val(param('jenis'));
        } else {
            \$('#col0_filter').val('{{ slug }}');
        }

        \$('#col3_filter').val(param('tentang'));
        \$('#col1_filter').val(param('nomor'));
        \$('#col2_filter').val(param('tahun'));

        var table = \$('#example').DataTable( {
            \"ajax\": \"{{ url('/') }}/apiPeraturan\",
            \"columns\": [
                { \"data\": \"jenis_nama\" },
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

</script>", "G:\\xampp\\htdocs\\jdih/plugins/pda/peraturan/components/tableperaturan/default.htm", "");
    }
}
