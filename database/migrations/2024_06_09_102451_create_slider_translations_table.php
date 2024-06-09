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
        Schema::create('slider_translations', function (Blueprint $table) {
            $table->id();
            $table->text('text1')->default('0');
            $table->text('text2')->default('0');
            $table->unsignedBigInteger('language_id');
            $table->foreign('language_id') ->references('id')->on('languages')->onDelete('cascade');
            $table->unsignedBigInteger('slider_id');
            $table->foreign('slider_id') ->references('id')->on('sliders')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slider_translations');
    }
};
