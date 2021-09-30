<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTglVaksin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tgl_vaksin', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tgl')->nullable();
            $table->string('jam')->nullable();
            $table->integer('kuota')->nullable();
            $table->dateTime('datetime')->nullable();
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
        Schema::dropIfExists('tgl_vaksin');
    }
}
