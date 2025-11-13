<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //
    function students(){
        return $this->belongsToMany(Student::class, 'Scores', 'subject_id', 'student_id')
            ->withPivot('score');
    }
    function classRooms(){
        return $this->belongsToMany(ClassRoom::class, 'class_room_subjects', 'subject_id', 'class_room_id')
            ->withPivot('day_of_week');
    }
}
