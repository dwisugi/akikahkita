<?php namespace Ugi\Akikahkita\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUgiAkikahkitaBrosur extends Migration
{
    public function up()
    {
        Schema::create('ugi_akikahkita_brosur', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ugi_akikahkita_brosur');
    }
}
