<?php namespace Pda\Peraturan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePdaPeraturanProfil extends Migration
{
    public function up()
    {
        Schema::table('pda_peraturan_profil', function($table)
        {
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::table('pda_peraturan_profil', function($table)
        {
            $table->dropColumn('id');
        });
    }
}
