<?php namespace Pda\Peraturan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePdaPeraturanHukum extends Migration
{
    public function up()
    {
        Schema::table('pda_peraturan_hukum', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('pda_peraturan_hukum', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }
}
