<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        ini table relasi antara pendonasi sama target yang ingin di donasi Many to Many
        Schema::create('donations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pendonation_id')->unsigned();
            $table->integer('target_donation_id')->unsigned();
            $table->integer('nominal');
            $table->integer('no_rek');
            $table->integer('rekening');
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
        Schema::dropIfExists('donations');
    }
}
