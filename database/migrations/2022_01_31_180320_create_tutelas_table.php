<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutelas', function (Blueprint $table) {
            $table->id();
            $table->string('radicado');
            $table->string('fecha');
            $table->string('name');
            $table->string('NIT');
            $table->string('email');
            $table->foreignId('user_id');
            $table->timestamps('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutelas');
    }
}
