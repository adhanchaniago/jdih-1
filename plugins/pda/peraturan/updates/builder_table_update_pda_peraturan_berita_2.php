<?php namespace Pda\Peraturan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePdaPeraturanBerita2 extends Migration
{
    public function up()
    {
        Schema::table('pda_peraturan_berita', function($table)
        {
            $table->string('gambar', 65535)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('pda_peraturan_berita', function($table)
        {
            $table->text('gambar')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
