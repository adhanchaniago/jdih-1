<?php namespace Pda\Peraturan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePdaPeraturanBerita extends Migration
{
    public function up()
    {
        Schema::create('pda_peraturan_berita', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('judul', 250);
            $table->text('isi');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pda_peraturan_berita');
    }
}
