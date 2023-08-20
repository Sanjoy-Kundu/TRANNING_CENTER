<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdvanceProfile extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
       ' job_profile_name',
       ' job_profile_email',
       ' job_profile_designation',
       ' job_profile_phone_number',
       ' job_profile_address',
       ' job_profile_portfolio',
       ' job_profile_github_account',
       ' job_profile_github_account',
    ];
}
