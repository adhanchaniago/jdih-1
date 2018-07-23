<?php namespace Pda\Peraturan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePdaPeraturanBerita7 extends Migration
{
    public function up()
    {
        Schema::table('pda_peraturan_berita', function($table)
        {
            $table->string('lokasi');
        });
    }
    
    public function down()
    {
        Schema::table('pda_peraturan_berita', function($table)
        {
            $table->dropColumn('lokasi');
        });
    }
}
