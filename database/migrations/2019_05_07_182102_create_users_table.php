<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id'); 
            $table->string('nombre', 50);
            $table->string('apellido' , 50);
            $table->integer('telefono',10);
            $table->date('fecha de nacimiento');
            $table->string('pais', 50);
            $table->string('ciudad' , 50);
            $table->string('correo electronico')->unique();
            $table->timestamp('Verificar correo electronico')->nullable();
            $table->string('contraseña');
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
        Schema::dropIfExists('users');
    }
}
