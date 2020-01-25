<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourPricing extends Model
{
    protected $fillable =
    [
        'tour_id',
        'name',
        'price'
    ];
}
