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
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->unsignedBigInteger('sub_category_id');
            $table->foreign('sub_category_id')->references('id')->on('subcetagories')->onDelete('cascade');
            $table->string('name');
            $table->text('discription');
            $table->longText('details');
            $table->decimal('quantity')->default(0);
            $table->decimal('discount')->default(0);


            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();

            $table->boolean('featured_product')->default(false);
            $table->boolean('new_product')->default(false);
            $table->boolean('best_selling')->default(false);
            $table->boolean('new_arrival')->default(false);

            $table->boolean('status')->default(false);





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
