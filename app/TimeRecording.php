<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeRecording extends Model
{
    protected $fillable = [
       'name', 'timein', 'timeout', 'Leaveclock','text','Daily','Delay',
    ];
}
