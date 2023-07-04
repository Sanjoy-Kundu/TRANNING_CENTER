<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['course_image'];

    function relationWithTrainers(){
        return $this->hasOne(Trainer::class, 'id', 'instructor_id');
    }

    function relationWithCategory(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
