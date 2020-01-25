<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    //

    protected $fillable =
    [
        'name',
        'desc',
        'country_id',
        'image',
    ];

    protected $table = 'destinations';

    public function countries()
    { 
        return $this->belongsTo('App\Countries','country_id');
    }

    public function tour()
    {
        return $this->belongsToMany(App\Tour::class,'tour_destinations');
    }
}
