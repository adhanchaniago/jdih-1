<?php namespace Pda\LayananAdvokasi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePdaLayananadvokasiQuestion extends Migration
{
    public function up()
    {
        Schema::create('pda_layananadvokasi_question', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('question')->nullable();
            $table->text('answer')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('status')->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pda_layananadvokasi_question');
    }
}
