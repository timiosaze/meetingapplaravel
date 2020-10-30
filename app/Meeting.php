<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    //
    public function checkDate(){
        $date = Carbon::parse($this->meeting_date);
        if($date->isToday()){
            return 'text-red';
        } else {
            return '';
        }
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
