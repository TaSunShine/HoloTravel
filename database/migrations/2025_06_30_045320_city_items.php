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
        Schema::create('city_items', function (Blueprint $table) {
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('item_id');

            $table->primary(['city_id', 'item_id']);

            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->foreign('item_id')->references('id')->on('products')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('city_items');
    }
};
