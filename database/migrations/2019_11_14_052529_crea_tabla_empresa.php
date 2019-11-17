<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreaTablaEmpresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //acá creamos la tabla para la empresa, con los 3 atributos necesarios, además de ID, para duplicar nombres de empresa sin problema.
		Schema::create('empresa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre')->required();
            $table->string('numero_trabajadores')->nullable();
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
        //
    }
}
