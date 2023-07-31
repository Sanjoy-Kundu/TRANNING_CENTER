<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notice extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['notice_name', 'notice_description', 'status'];

    public function relationWithUser(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}

