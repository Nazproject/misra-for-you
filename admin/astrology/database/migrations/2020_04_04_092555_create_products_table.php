<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 225);
            $table->unique('slug', 'slug');
            $table->string('image', 225);
            $table->float('mrp_price', 11, 2);
            $table->float('mrp_gst_price', 11, 2);
            $table->float('price', 11, 2);
            $table->float('gst', 5, 2);
            $table->float('discount', 5, 2);
            $table->text('first_description')->nullable($value = true);
            $table->text('second_description')->nullable($value = true);
            $table->text('faq')->nullable($value = true);
            $table->integer('carat_id')->nullable($value = true);
            $table->enum('planet', ['Jupiter', 'Mars','Mercury','Moon','Saturn','Sun','Venus'])->nullable($value = true);
            $table->enum('zodiac_sign', ['Aries', 'Taurus','Gemini','Cancer','Leo','Virgo','Libra','Scorpio','Sagittarius','Capricorn','Aquarius','Pisces'])->nullable($value = true);
            $table->enum('top_selling', ['0', '1'])->default(0)->comment('0- no, 1- yes');
            $table->enum('stock', ['0', '1'])->default(1)->comment('0- out of stock, 1- in stock');
            $table->integer('product_count');
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
        Schema::dropIfExists('products');
    }
}
