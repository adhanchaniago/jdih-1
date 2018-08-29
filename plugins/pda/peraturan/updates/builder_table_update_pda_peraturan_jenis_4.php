<?php namespace Pda\Peraturan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePdaPeraturanJenis4 extends Migration
{
    public function up()
    {
        Schema::table('pda_peraturan_jenis', function($table)
        {
            $table->dropColumn('logo');
        });
    }
    
    public function down()
    {
        Schema::table('pda_peraturan_jenis', function($table)
        {
            $table->text('logo');
        });
    }
}
