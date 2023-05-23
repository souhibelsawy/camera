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
        Schema::create('dedications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('camera_id');
            $table->string('image')->nullable();
            $table->timestamps();

            $table->foreign('camera_id')->references('id')->on('cameras')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dedications');
    }
};
