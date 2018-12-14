<?php namespace Pda\LayananAdvokasi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePdaLayananadvokasiQuestions5 extends Migration
{
    public function up() { Schema::table('pda_layananadvokasi_questions', function($table) { $table-&gt;smallInteger('notify')-&gt;nullable()-&gt;default(0); }); } public function down() { Schema::table('pda_layananadvokasi_questions', function($table) { $table-&gt;dropColumn('notify'); }); }
}
