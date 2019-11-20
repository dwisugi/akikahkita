<?php namespace Ugi\Akikahkita\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUgiAkikahkitaPaket extends Migration
{
    public function up()
    {
        Schema::table('ugi_akikahkita_paket', function($table)
        {
            $table->text('kelebihan');
            $table->dropColumn('nilai_plus');
        });
    }
    
    public function down()
    {
        Schema::table('ugi_akikahkita_paket', function($table)
        {
            $table->dropColumn('kelebihan');
            $table->integer('nilai_plus');
        });
    }
}
