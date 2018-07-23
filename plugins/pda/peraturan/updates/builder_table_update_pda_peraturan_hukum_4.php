<?php namespace Pda\Peraturan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePdaPeraturanHukum4 extends Migration
{
    public function up()
    {
        Schema::table('pda_peraturan_hukum', function($table)
        {
            $table->integer('kategori_id')->nullable();
            $table->dropColumn('id_kategori');
        });
    }
    
    public function down()
    {
        Schema::table('pda_peraturan_hukum', function($table)
        {
            $table->dropColumn('kategori_id');
            $table->integer('id_kategori');
        });
    }
}
