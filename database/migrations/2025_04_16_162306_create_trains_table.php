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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', length: 100);
            $table->string('departure_station', length: 255);
            $table->string('arrival_station', length: 255);
            $table->dateTime('departure_time', precision: 0);
            $table->dateTime('arrival_time', precision: 0);
            $table->string('train_code', length: 100);
            $table->smallInteger('train_carriage_number');
            $table->boolean('on_time');
            $table->boolean('late');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
