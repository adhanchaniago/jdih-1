<?php namespace Pda\LayananAdvokasi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePdaLayananadvokasiQuestions3 extends Migration
{
    public function up()
    {
        Schema::table('pda_layananadvokasi_questions', function($table)
        {
            $table->integer('status_id')->nullable()->default(0);
            $table->dropColumn('status');
        });
    }
    
    public function down()
    {
        Schema::table('pda_layananadvokasi_questions', function($table)
        {
            $table->dropColumn('status_id');
            $table->integer('status')->default(0);
        });
    }
}
