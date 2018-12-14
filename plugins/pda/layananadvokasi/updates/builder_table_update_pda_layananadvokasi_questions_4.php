<?php namespace Pda\LayananAdvokasi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePdaLayananadvokasiQuestions4 extends Migration
{
    public function up()
    {
        Schema::table('pda_layananadvokasi_questions', function($table)
        {
            $table->text('keterangan')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('pda_layananadvokasi_questions', function($table)
        {
            $table->dropColumn('keterangan');
        });
    }
}
