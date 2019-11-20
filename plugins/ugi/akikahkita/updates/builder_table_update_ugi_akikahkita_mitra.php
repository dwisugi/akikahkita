<?php namespace Ugi\Akikahkita\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUgiAkikahkitaMitra extends Migration
{
    public function up()
    {
        Schema::table('ugi_akikahkita_mitra', function($table)
        {
            $table->string('foto_profil', 32);
            $table->dropColumn('telephone');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }
    
    public function down()
    {
        Schema::table('ugi_akikahkita_mitra', function($table)
        {
            $table->dropColumn('foto_profil');
            $table->bigInteger('telephone');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
}
