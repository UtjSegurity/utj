<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('login', function (Blueprint $table) {
    
    $table->unsignedInteger('id_emple');
    $table->string('password');

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
        Schema::drop('login');
    }
}