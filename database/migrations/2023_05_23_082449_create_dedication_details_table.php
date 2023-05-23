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
        Schema::create('dedication_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dedication_id');
            $table->unsignedBigInteger('dedication_type_id');
            $table->text('detail');
            $table->timestamps();

            $table->foreign('dedication_id')->references('id')->on('dedications')->onDelete('cascade');
            $table->foreign('dedication_type_id')->references('id')->on('dedication_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dedication_details');
    }
};
