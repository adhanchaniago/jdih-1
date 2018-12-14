<?php namespace Pda\LayananAdvokasi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePdaLayananadvokasiCategory3 extends Migration
{
    public function up()
    {
        Schema::table('pda_layananadvokasi_category', function($table)
        {
            $table->renameColumn('title', 'name');
        });
    }
    
    public function down()
    {
        Schema::table('pda_layananadvokasi_category', function($table)
        {
            $table->renameColumn('name', 'title');
        });
    }
}
