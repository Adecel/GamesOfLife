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
        Schema::create('carrousels', function (Blueprint $table) {
            $table->id();
            $table->integer('langue_id')->nullable();
            $table->string('titre')->nullable();
            $table->string('description_texte')->nullable();
            $table->string('description_html')->nullable();
            $table->string('lien_page_web')->nullable();
            $table->string('lien_video')->nullable();
            $table->string('lien_image')->nullable();
            $table->string('image01')->nullable();
            $table->string('image02')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carrousels');
    }
};
