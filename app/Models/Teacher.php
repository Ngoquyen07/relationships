<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    // Quan hệ 1 - 1 với User
    function user()
    {
        return $this->belongsTo(User::class);
    }
    // Dùng hasManyThrough để lấy ra các students thông qua ClassRoom
    function  students(){
        return $this->hasManyThrough(
            Student::class,
            ClassRoom::class,
            'teacher_id', // Foreign key on ClassRoom table...
            'class_room_id', // Foreign key on Student table...
            'id', // Local key on Teacher table...
            'id' // Local key on ClassRoom table...
        );
    }
    //Quan hệ 1 - nhiều với ClassRoom
    function classRooms()
    {
        return $this->hasMany(ClassRoom::class);
    }
}
