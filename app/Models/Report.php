<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //
    function reportable()
    {
        return $this->morphTo();
    }
}
