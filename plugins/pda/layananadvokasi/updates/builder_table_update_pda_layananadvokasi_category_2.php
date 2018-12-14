<?php namespace Pda\LayananAdvokasi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePdaLayananadvokasiCategory2 extends Migration
{
    public function up()
    {
        Schema::table('pda_layananadvokasi_category', function($table)
        {
            $table->text('title')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('pda_layananadvokasi_category', function($table)
        {
            $table->text('title')->nullable(false)->change();
        });
    }
}
