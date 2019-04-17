<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTTempatTidur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t__tempat_tidur', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('kd_TempatTidur');
            $table->string('nama_ruangan',100);
            $table->string('nama_gedung',100);
            $table->integer('status');
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
        Schema::dropIfExists('t__tempat_tidur');
    }
}
