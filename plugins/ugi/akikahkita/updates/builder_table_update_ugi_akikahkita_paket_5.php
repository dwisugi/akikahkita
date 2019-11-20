<?php namespace Ugi\Akikahkita\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUgiAkikahkitaPaket5 extends Migration
{
    public function up()
    {
        Schema::table('ugi_akikahkita_paket', function($table)
        {
            $table->text('kelebihan')->nullable()->change();
            $table->integer('promo_id')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('ugi_akikahkita_paket', function($table)
        {
            $table->text('kelebihan')->nullable(false)->change();
            $table->integer('promo_id')->nullable(false)->change();
        });
    }
}
