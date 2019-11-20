<?php namespace Ugi\Akikahkita\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUgiAkikahkitaMitra3 extends Migration
{
    public function up()
    {
        Schema::table('ugi_akikahkita_mitra', function($table)
        {
            $table->dropColumn('foto_profil');
        });
    }
    
    public function down()
    {
        Schema::table('ugi_akikahkita_mitra', function($table)
        {
            $table->string('foto_profil', 32);
        });
    }
}
