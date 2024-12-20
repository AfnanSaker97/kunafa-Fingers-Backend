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
         
            $table->string('price');
            $table->string('new_price')->default('0');
            $table->boolean('isActive')->default(1);
            $table->string('tags')->default('0');
            $table->string('code')->default('0');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id') ->references('id')->on('categories')->onDelete('cascade');
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
