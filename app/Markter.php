<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Markter extends Model
{
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('M d Y');
    }
}
