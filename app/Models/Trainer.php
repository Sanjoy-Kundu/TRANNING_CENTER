<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trainer extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ["trainer_name","trainer_title","trainer_description","trainer_salary","trainer_facebook_link","trainer_linkdin_link","trainer_image"];
}
