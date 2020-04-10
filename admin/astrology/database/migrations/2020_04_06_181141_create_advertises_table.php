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
            $table->string('company')->nullable($value = true);
            $table->string('web_url');
            $table->string('adv_category')->nullable($value = true);
            $table->date('start_date')->nullable($value = true);
            $table->date('end_date')->nullable($value = true);
            $table->text('note')->nullable($value = true);
            $table->string('brand_image');
            $table->text('product_image');
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
