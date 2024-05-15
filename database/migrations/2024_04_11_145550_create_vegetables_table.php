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
            $table->string('heading');
            $table->text('heading_description');
            $table->text('first_description');
            $table->string('first_image');
            $table->string('variety_image');
            $table->json('variety_description')->length(500)->nullable();

            $table->string('soil_image');
            $table->json('soil_preparation')->length(500)->nullable();//steps by steps Soil Preparation

            $table->string('planting_image');
            $table->json('planting_techniques')->length(500)->nullable();//steps by steps Planting Techniques

            $table->string('care_image');
            $table->string('watering_practices_dis',500)->nullable();
            $table->json('watering_practices')->length(500)->nullable();

            $table->string('fertilization_strategy_dis',1000)->nullable();
            $table->json('fertilization_strategy')->length(1000)->nullable();

             $table->string('weed_management_dis',1000)->nullable();
            $table->json('weed_management')->length(1000)->nullable();

          $table->string('managing_pests_and_diseases',1000)->nullable();

            $table->string('harvesting_discription',1000)->nullable();
            $table->json('harvesting_table')->length(1000)->nullable();



            $table->json('faqs')->length(500)->nullable();
            $table->json('common_mistakestoavoid')->length(500)->nullable();
            $table->json('advanced_tips_for_maximizing_yield')->length(500)->nullable();
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
