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
        Schema::create('free_courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name')->nullable();
            $table->string('course_by')->nullable();
            $table->string('course_link')->nullable();
            $table->string('course_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('free_courses');
    }
};
