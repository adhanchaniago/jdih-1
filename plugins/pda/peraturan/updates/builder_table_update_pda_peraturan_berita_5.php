<?php namespace Pda\Peraturan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePdaPeraturanBerita5 extends Migration
{
    public function up()
    {
        Schema::table('pda_peraturan_berita', function($table)
        {
            $table->string('judul')->change();
            $table->string('slug')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('pda_peraturan_berita', function($table)
        {
            $table->string('judul', 191)->change();
            $table->string('slug', 191)->nullable(false)->change();
        });
    }
}
