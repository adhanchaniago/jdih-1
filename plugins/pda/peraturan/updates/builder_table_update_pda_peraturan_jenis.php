<?php namespace Pda\Peraturan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePdaPeraturanJenis extends Migration
{
    public function up()
    {
        Schema::rename('pda_peraturan_kategori', 'pda_peraturan_jenis');
    }
    
    public function down()
    {
        Schema::rename('pda_peraturan_jenis', 'pda_peraturan_kategori');
    }
}
