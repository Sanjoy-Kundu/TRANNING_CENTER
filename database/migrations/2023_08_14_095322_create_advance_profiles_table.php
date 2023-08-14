<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * User_id

     */
    public function up(): void
    {
        Schema::create('advance_profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('job_profile_name');
            $table->string('job_profile_email')->unique();
            $table->string('job_profile_designation');
            $table->string('job_profile_phone_number');
            $table->longText('job_profile_address');
            $table->string('job_profile_your_skills');
            $table->string('job_profile_portfolio');
            $table->string('job_profile_github_account');
            $table->longText('job_profile_your_photo');
            $table->timestamps();
            $table->softDeletes();
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
