<?php namespace Pda\Peraturan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePdaPeraturanJenis2 extends Migration
{
    public function up()
    {
        Schema::table('pda_peraturan_jenis', function($table)
        {
            $table->integer('level');
        });
    }
    
    public function down()
    {
        Schema::table('pda_peraturan_jenis', function($table)
        {
            $table->dropColumn('level');
        });
    }
}
