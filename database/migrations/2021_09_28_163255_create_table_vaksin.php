<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableVaksin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_vaksin', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_vaksin')->nullable();
            $table->integer('id_tgl')->nullable();
            $table->string('nama')->nullable();
            $table->string('nik')->nullable();
            $table->string('hp')->nullable();
            $table->longText('alamat')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('daftar_vaksin');
    }
}
