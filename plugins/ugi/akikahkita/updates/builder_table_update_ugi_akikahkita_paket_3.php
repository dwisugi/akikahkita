<?php namespace Ugi\Akikahkita\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUgiAkikahkitaPaket3 extends Migration
{
    public function up()
    {
        Schema::table('ugi_akikahkita_paket', function($table)
        {
            $table->integer('promo_id');
        });
    }
    
    public function down()
    {
        Schema::table('ugi_akikahkita_paket', function($table)
        {
            $table->dropColumn('promo_id');
        });
    }
}
