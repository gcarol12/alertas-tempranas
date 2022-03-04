<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsolvenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insolvencias', function (Blueprint $table) {
            $table->id();
            $table->string('liquidacion')->unique()->required();
            $table->string('fecha')->required();
            $table->string('name')->required();
            $table->string('NIT')->required();
            $table->string('email')->required();
            $table->foreignId('user_id')->required();
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
        Schema::dropIfExists('insolvencias');
    }
}
