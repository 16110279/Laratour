<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    //
    protected $table = 'countries';

    public function destination()
    {
        return $this->hasMany('App\Destination','id');
    }

    public function country()
    {
        return $this->belongsTo('App\Tour');
    }
}
