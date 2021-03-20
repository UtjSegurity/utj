

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJornadaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jornada', function (Blueprint $table) {     
        $table->increments('id');  
        $table->unsignedInteger('id_emple');
        $table->string('horario');
        
        #foraneas
        $table->foreign('id_emple')->references('id')->on('empleado');


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
        Schema::drop('jornada');
    }
}