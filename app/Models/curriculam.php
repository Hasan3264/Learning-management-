<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class curriculam extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'week_day',
        'class_time',
        'end_date',
        'course_id'
    ];
    public function  Homework()
    {
        return $this->hasMany(Homework::class);
    }

    public function  Attendance()
    {
        return $this->hasMany(Attendance::class);
    }
    public function  notes()
    {
        return $this->belongsToMany(Note::class, 'curriculam_note', 'curriculam_id', 'note_id');
    }
    public function  course()
    {
        return $this->belongsTo(Course::class);
    }
    public function presentStudents()
    {
        return Attendance::where('class_id', $this->id)->count();
    }
}
