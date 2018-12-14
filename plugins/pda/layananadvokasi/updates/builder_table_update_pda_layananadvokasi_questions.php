<?php namespace Pda\LayananAdvokasi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePdaLayananadvokasiQuestions extends Migration
{
    public function up()
    {
        Schema::rename('pda_layananadvokasi_question', 'pda_layananadvokasi_questions');
        Schema::table('pda_layananadvokasi_questions', function($table)
        {
            $table->renameColumn('reply_email', 'email');
        });
    }
    
    public function down()
    {
        Schema::rename('pda_layananadvokasi_questions', 'pda_layananadvokasi_question');
        Schema::table('pda_layananadvokasi_question', function($table)
        {
            $table->renameColumn('email', 'reply_email');
        });
    }
}
