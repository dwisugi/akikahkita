<?php namespace Ugi\Akikahkita\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUgiAkikahkitaPaket extends Migration
{
    public function up()
    {
        Schema::create('ugi_akikahkita_paket', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('mitra_id');
            $table->string('kode');
            $table->string('nama_paket');
            $table->string('kategori_paket');
            $table->string('menu_masakan');
            $table->string('jk_kambing');
            $table->text('keterangan');
            $table->string('porsi');
            $table->bigInteger('harga');
            $table->integer('nilai_plus');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ugi_akikahkita_paket');
    }
}
