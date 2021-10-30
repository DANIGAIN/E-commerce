<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
             $table->string('big_offer_image')->nullable();
             $table->decimal('big_offer')->default(0);
             $table->string('small_offer_top_image')->nullable();
             $table->decimal('small_offer_top')->default(0);
             $table->string('small_offer_bottom_image')->nullable();
             $table->decimal('small_offer_bottom')->default(0);
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
        Schema::dropIfExists('discounts');
    }
}
