<?php namespace Pda\LayananAdvokasi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePdaLayananadvokasiStatus extends Migration
{
    public function up()
    {
        Schema::table('pda_layananadvokasi_status', function($table)
        {
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->dropColumn('deskripsi');
        });
    }
    
    public function down()
    {
        Schema::table('pda_layananadvokasi_status', function($table)
        {
            $table->dropColumn('name');
            $table->dropColumn('description');
            $table->string('deskripsi', 191)->nullable();
        });
    }
}
