<?php namespace Ugi\Akikahkita\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUgiAkikahkitaMitra extends Migration
{
    public function up()
    {
        Schema::create('ugi_akikahkita_mitra', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('nama', 32);
            $table->text('alamat');
            $table->bigInteger('telephone');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ugi_akikahkita_mitra');
    }
}
