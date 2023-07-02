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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('course_title')->unique();
            $table->integer('category_id');
            $table->integer('instructor_id');
            $table->integer('course_price');
            $table->integer('course_duration');
            $table->integer('discount');
            $table->integer('discounted_price');
            $table->longText('course_description');
            $table->longText('course_image');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
