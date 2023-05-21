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
            $table->string("name", 50);
            $table->longText("description");
            $table->string("blog_image", 20);
            $table->unsignedBigInteger("id_dept");
            $table->foreign('id_dept')->references('id')->on('departments')->onDelete('cascade')->onUpdate('cascade');
            $table->string("author", 30);
            $table->timestamps();
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
