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
        Schema::create('vegetablecals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('days_to_harvest');
            $table->decimal('fertilizer_per_sq_meter', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vegetablecals');
    }
};
