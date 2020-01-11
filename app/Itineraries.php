<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itineraries extends Model
{
    public function ItineraryContent()
    {
        return $this->hasMany('App\ItineraryContent');
    }
}
