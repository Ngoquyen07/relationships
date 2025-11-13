<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    //
    function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    function students()
    {
        return $this->hasMany(Student::class);
    }
    function subjects(){
        return $this->belongsToMany(Subject::class, 'class_room_subjects', 'class_room_id', 'subject_id')
            ->withPivot('id','day_of_week');   
    }
}
