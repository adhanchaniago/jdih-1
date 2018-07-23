<?php namespace Pda\Peraturan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePdaPeraturanHukum3 extends Migration
{
    public function up()
    {
        Schema::table('pda_peraturan_hukum', function($table)
        {
            $table->renameColumn('id_jenis', 'id_kategori');
        });
    }
    
    public function down()
    {
        Schema::table('pda_peraturan_hukum', function($table)
        {
            $table->renameColumn('id_kategori', 'id_jenis');
        });
    }
}
