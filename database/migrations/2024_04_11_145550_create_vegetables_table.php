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
            //name
            $table->string('name');
            //image 1
            $table->string('imagehome');
            $table->string('imageback');
            $table->string('botanicalname');
            $table->text('home_description');
            $table->text('looks_description');
            $table->text('likes_description');
            $table->text('dislike_description');
            $table->text('didyouknow_description');
            $table->text('howtogrow_description');
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
