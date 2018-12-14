<?php namespace Pda\LayananAdvokasi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePdaLayananadvokasiCategory extends Migration
{
    public function up()
    {
        Schema::create('pda_layananadvokasi_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pda_layananadvokasi_category');
    }
}
