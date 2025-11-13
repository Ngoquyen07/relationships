<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    function users(){
        return $this->belongsTo(User::class);
    }
    function teacher(){
        return $this->hasOneThrough(
            Teacher::class,
            ClassRoom::class,
            'id', // Foreign key on ClassRoom table...
            'id', // Foreign key on Teacher table...
            'class_room_id', // Local key on Student table...
            'teacher_id' // Local key on ClassRoom table...
        );
    }
    function classRoom()
    {
        return $this->belongsTo(ClassRoom::class);
    }
    function subjects(){
        return $this->belongsToMany(Subject::class, 'Scores', 'student_id', 'subject_id')
            ->withPivot('id','score');
    }
}
