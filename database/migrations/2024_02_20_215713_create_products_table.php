<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('product_image1');
            $table->string("product-image2")->nullable();
            $table->string("product-price");
            $table->text("product_desc")->nullable();
            $table->float("product_weight")->nullable();
            $table->integer("outcomes")->nullable();
            $table->string("product_type")->nullable();
            $table->integer("qty_in_stock");
            $table->smallInteger("promo")->nullable();
            $table->unsignedBigInteger("id_category");
            $table->unsignedBigInteger("id_mart");

            $table->foreign("id_category")->references("id")->on("categories");
            $table->foreign("id_mart")->references("id")->on("marts");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
