<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourSchedule extends Model
{
    protected $fillable =
    [
        'date_start',
        'duration',
        'date_end',
        'tour_id',
    ];
}
