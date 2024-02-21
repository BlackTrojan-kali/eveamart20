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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('Order_code');
            $table->json('super_cart');
            $table->float('total_weight');
            $table->float("expedition_price");
            $table->string('client_name');
            $table->float("total_price");
            $table->string("email_client");
            $table->string("address_order");
            $table->string("city_order");
            $table->string("region_order");
            $table->string('order_statut');
            $table->string('client_statut');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
