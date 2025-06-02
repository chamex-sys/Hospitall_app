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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->String('name')->nullable();
            $table->String('email')->nullable();
            $table->String('phone')->nullable();
            $table->String('doctor')->nullable();
            $table->String('date')->nullable();
            $table->String('message')->nullable();
            $table->String('status')->nullable();
            $table->String('user_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
