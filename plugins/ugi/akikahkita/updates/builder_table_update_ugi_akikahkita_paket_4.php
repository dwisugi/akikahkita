<?php namespace Ugi\Akikahkita\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUgiAkikahkitaPaket4 extends Migration
{
    public function up()
    {
        Schema::table('ugi_akikahkita_paket', function($table)
        {
            $table->renameColumn('paket_id', 'id');
        });
    }
    
    public function down()
    {
        Schema::table('ugi_akikahkita_paket', function($table)
        {
            $table->renameColumn('id', 'paket_id');
        });
    }
}
