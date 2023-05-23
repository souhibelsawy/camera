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
        Schema::create('camera_model', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('camera_id');
            $table->unsignedBigInteger('model_id');
            $table->timestamps();

            $table->foreign('camera_id')->references('id')->on('cameras')->onDelete('cascade');
            $table->foreign('model_id')->references('id')->on('models')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camera_model');
    }
};
