<?php namespace Pda\Peraturan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePdaPeraturanHukum5 extends Migration
{
    public function up()
    {
        Schema::table('pda_peraturan_hukum', function($table)
        {
            $table->renameColumn('kategori_id', 'jenis_id');
        });
    }
    
    public function down()
    {
        Schema::table('pda_peraturan_hukum', function($table)
        {
            $table->renameColumn('jenis_id', 'kategori_id');
        });
    }
}
