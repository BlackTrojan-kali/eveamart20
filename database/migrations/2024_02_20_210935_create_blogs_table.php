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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string("blog_title1");
            $table->string("blog_image1");
            $table->text("blog_text1");
            $table->string("blog_title2");
            $table->string("blog_image2");
            $table->text("blog_text2");
            $table->unsignedBigInteger("id_admin");
            $table->timestamps();

            $table->foreign("id_admin")->references('id')->on('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
