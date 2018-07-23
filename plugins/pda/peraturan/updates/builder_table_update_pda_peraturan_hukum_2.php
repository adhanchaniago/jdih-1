<?php namespace Pda\Peraturan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePdaPeraturanHukum2 extends Migration
{
    public function up()
    {
        Schema::table('pda_peraturan_hukum', function($table)
        {
            $table->integer('id_jenis');
        });
    }
    
    public function down()
    {
        Schema::table('pda_peraturan_hukum', function($table)
        {
            $table->dropColumn('id_jenis');
        });
    }
}
