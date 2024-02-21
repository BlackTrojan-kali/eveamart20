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
        Schema::create('assignations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_admin");
            $table->unsignedBigInteger("id_mart");
            $table->boolean("value");
            $table->foreign('id_admin')->references("id")->on("users")->cascadeOnDelete();
            $table->foreign("id_mart")->references('id')->on("marts")->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignations');
    }
};
