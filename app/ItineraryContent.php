<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItineraryContent extends Model
{
    protected $fillable =
    [
        'title',
        'itineraries_id',
        'content'
    ];

    public function itineraries()
    {
        return $this->belongsTo('App\Itineraries');
    }
}
