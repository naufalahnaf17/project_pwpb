<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTPendaftaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_pendaftaran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('no_registrasi');
            $table->integer('no_rawat');
            $table->integer('id_caraMasuk');
            $table->integer('kd_tempatTidur');
            $table->date('tgl_daftar');
            $table->string('dokter_penanggung',100);
            $table->integer('id_poliKlinik');
            $table->integer('jenis_bayar');
            $table->integer('no_reka_medis');
            $table->string('nama_pasien',100);
            $table->date('tgl_lahir');
            $table->string('nm_penanggung',100);
            $table->integer('id_hub_penanggung');
            $table->string('alamat',100);
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
        Schema::dropIfExists('t_pendaftaran');
    }
}
