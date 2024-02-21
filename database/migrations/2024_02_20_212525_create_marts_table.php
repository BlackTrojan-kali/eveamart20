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
        Schema::create('marts', function (Blueprint $table) {
            $table->id();
            $table->string("mart_name");
            $table->string("mart_country");
            $table->string("mart_logo")->nullable();
            $table->string("mart_email")->nullable();
            $table->string("mart_city")->nullable();
            $table->json("mart_position")->nullable();
            $table->Integer("mart_MOMO")->nullable();
            $table->Integer("mart_OM")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marts');
    }
};
