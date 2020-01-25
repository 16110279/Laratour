<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{

       protected $fillable = [
        'name',
        'slug',
        'img',
        'category',
        'itinerary',
        'country_id',
      
    ];

    public function destination()
    {
        return $this->belongsToMany(Destination::class, 'tour_destinations')->withTimestamps();
    }

    public function country()
    {
        return $this->belongsTo('App\Countries','country_id');
    }
}
