

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio', function (Blueprint $table) {     
        $table->increments('id'); 
        $table->string('nombre_servicio'); 
        $table->Integer('cantidad');
        $table->string('duracion');
        $table->string('tipo_servicio');
        $table->string('comentario');
        #foraneas
        

        $table->timestamps();
        });
    }

 /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('servicio');
    }
}