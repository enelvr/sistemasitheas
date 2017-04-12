<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->text('nservicio');
            $table->date('fecha');
            $table->text('solicitud');
            $table->text('nombres');
            $table->string('estadocivil', 15);
            $table->string('calle', 30);
            $table->string('colonia', 30);
            $table->string('municipio', 30);
            $table->string('estado', 30);
            $table->string('postal', 8);
            $table->text('telefono');
            $table->string('correo');
            $table->text('referencias');
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
        Schema::dropIfExists('estudios');
    }
}
