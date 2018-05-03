<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        ini komen table
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pendonation_id')->unsigned();
            $table->foreign('pendonation_id')->references('id')->on('pendonations')->onDelete('cascade');
            $table->integer('target_donation_id')->unsigned();
            $table->foreign('target_donation_id')->references('id')->on('target_donations')->onDelete('cascade');
            $table->string('isi_komen');
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
        Schema::dropIfExists('comments');
    }
}
