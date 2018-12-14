<?php namespace Pda\LayananAdvokasi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePdaLayananadvokasiQuestions2 extends Migration
{
    public function up()
    {
        Schema::table('pda_layananadvokasi_questions', function($table)
        {
            $table->integer('user_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('pda_layananadvokasi_questions', function($table)
        {
            $table->dropColumn('user_id');
        });
    }
}
