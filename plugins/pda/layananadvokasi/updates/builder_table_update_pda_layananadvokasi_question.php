<?php namespace Pda\LayananAdvokasi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePdaLayananadvokasiQuestion extends Migration
{
    public function up()
    {
        Schema::table('pda_layananadvokasi_question', function($table)
        {
            $table->string('reply_email', 191)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('pda_layananadvokasi_question', function($table)
        {
            $table->dropColumn('reply_email');
        });
    }
}
