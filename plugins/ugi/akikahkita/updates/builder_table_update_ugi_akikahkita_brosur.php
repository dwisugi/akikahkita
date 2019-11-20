<?php namespace Ugi\Akikahkita\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUgiAkikahkitaBrosur extends Migration
{
    public function up()
    {
        Schema::table('ugi_akikahkita_brosur', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('ugi_akikahkita_brosur', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }
}
