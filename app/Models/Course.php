<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'slug',
        'price',
        'user_id'
    ];
    public function  curriculams(){
       return $this->hasMany(curriculam::class);
    }
    public function  students(){
       return $this->belongsToMany(User::class, 'course_student', 'course_id', 'user_id');
    }
}
