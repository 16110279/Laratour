<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    //

    protected $table = 'destinations';

    public function countries()
    { 
        return $this->belongsTo('App\Countries','country_id');
    }
}
