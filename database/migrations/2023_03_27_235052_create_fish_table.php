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
        Schema::create('fish', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("family_id");
            $table->string("name");
            $table->string("scientific_name");
            $table->integer("shoal_min")->nullable();
            $table->integer("shoal_max")->nullable();
            $table->float("size_avg")->nullable();
            $table->float("ph_min")->nullable();
            $table->float("ph_max")->nullable();
            $table->float("temperature_min")->nullable();
            $table->float("temperature_max")->nullable();
            $table->boolean("aggressive")->default(false);
            $table->foreign('family_id')->references('id')->on('fish_families');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fish');
    }
};
