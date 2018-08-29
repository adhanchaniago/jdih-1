<?php namespace Pda\Peraturan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePdaPeraturanProfil extends Migration
{
    public function up()
    {
        Schema::create('pda_peraturan_profil', function($table)
        {
            $table->engine = 'InnoDB';
            $table->text('sejarah');
            $table->text('visi');
            $table->text('misi');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pda_peraturan_profil');
    }
}
