<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItineraryContent extends Model
{
    public function itineraries()
    {
        return $this->belongsTo('App\Itineraries');
    }
}
