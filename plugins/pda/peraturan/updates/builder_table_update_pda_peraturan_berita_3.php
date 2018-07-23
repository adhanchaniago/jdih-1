<?php namespace Pda\Peraturan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePdaPeraturanBerita3 extends Migration
{
    public function up()
    {
        Schema::table('pda_peraturan_berita', function($table)
        {
            $table->dropColumn('gambar');
        });
    }
    
    public function down()
    {
        Schema::table('pda_peraturan_berita', function($table)
        {
            $table->text('gambar');
        });
    }
}
