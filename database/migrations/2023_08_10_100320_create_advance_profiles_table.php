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
        Schema::create('advance_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('User_id');
            $table->string('your_name');
            $table->string('your_email')->unique();
            $table->string('your_designation');
            $table->string('your_mobile_number');
            $table->string('your_address');
            $table->string('your_skills');
            $table->string('your_portfolio');
            $table->string('your_github_link');
            $table->text('Your_image')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advance_profiles');
    }
};
