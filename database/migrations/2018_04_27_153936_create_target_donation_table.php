<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTargetDonationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        ini table target yang ingin di donasikan
        Schema::create('target_donations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_target');
            $table->integer('umur');
            $table->string('pekerjaan');
            $table->string('foto');
            $table->string('gender');
            $table->integer('no_telp');
            $table->string('domisili');
            $table->string('alamat_lengkap');
            $table->text('deskripsi');
            $table->string('latitude');
            $table->string('longitude');
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
        Schema::dropIfExists('target_donations');
    }
}
