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
            $table->string("name");
            $table->float("ph_min");
            $table->float("ph_max");
            $table->float("temperature_min");
            $table->float("temperature_max");
            $table->float("size_avg");
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
