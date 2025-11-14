<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function student(){
        return $this->morphedByMany(Student::class, 'projectable');
    }
    public function teacher(){
        return $this->morphedByMany(Teacher::class, 'projectable');
    }
}
