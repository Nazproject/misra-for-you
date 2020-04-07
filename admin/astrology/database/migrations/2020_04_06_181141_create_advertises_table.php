<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertises', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->string('email');
            $table->string('mobile_no');
            $table->string('company');
            $table->string('web_url');
            $table->string('adv_category');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('note');
            $table->string('image');
            $table->enum('status', ['0', '1'])->default(0)->comment('0- pending, 1- verified');
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
        Schema::dropIfExists('advertises');
    }
}
