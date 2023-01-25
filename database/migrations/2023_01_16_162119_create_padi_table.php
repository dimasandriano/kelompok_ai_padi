<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('padi', function (Blueprint $table) {
            $table->id();
            $table->string('varietas')->unique();
            $table->string('bentuk_gabah');
            $table->string('bentuk_tanaman');
            $table->integer('berat');
            $table->string('daun_bendera');
            $table->string('tekstur_nasi');
            $table->integer('umur');
            $table->string('hama');
            $table->string('pencegahan');
            $table->integer('hasil_sebelum');
            $table->string('hasil_terkena');
            $table->string('img');
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
        Schema::dropIfExists('padi');
    }
};
