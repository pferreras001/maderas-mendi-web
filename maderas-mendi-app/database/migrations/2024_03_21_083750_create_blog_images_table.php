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
        Schema::create('blog_images', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->unsignedBigInteger('blog_entry_id');
            $table->foreign('blog_entry_id')->references('id')->on('blog_entries');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_images');
    }
};
