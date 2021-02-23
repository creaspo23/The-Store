<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $guarded = [];
    protected $with = ['order', 'product'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('M d Y');
    }

}



