<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    //
    public function getMeetingDateAttribute($value)
    {
        return Carbon::parse($value)->format('F,d Y | h:ia');
    }
}
