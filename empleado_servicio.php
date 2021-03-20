<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleado_servicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado_servicio', function (Blueprint $table) {
    $table->increments('id');
    $table->unsignedInteger('id_emple');
    $table->unsignedInteger('id_servicio');

    #foraneas
    $table->foreign('id_emple')->references('id')->on('empleado');
    $table->foreign('id_servicio')->references('id')->on('servicio');

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
        Schema::drop('empleado_servicio');
    }
}