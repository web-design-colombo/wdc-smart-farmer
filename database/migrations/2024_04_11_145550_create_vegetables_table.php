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
        Schema::create('vegetables', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');

            $table->string('heading');
            $table->text('heading_description');

            $table->json('variety')->length(500)->nullable();

            $table->text('climaticrequirements');
            $table->text('areas');

            $table->string('soil');

            $table->text('Seed_requirement');

            $table->string('Nursery_Management');

            $table->text('Land_preparation');

            $table->text('Planting');

            $table->text('Spacing');

            $table->json('Fertilizer');

            $table->text('Water_supply');

            $table->text('Weed_Control');

            $table->json('Pest_Management');
            $table->json('Disease_Management');

            $table->text('Harvesting');

            $table->text('Yield');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vegetables');
    }
};
