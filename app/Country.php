<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    protected $table = 'countries';

    public function destination()
    {
        return $this->hasMany('App\Destination::class');
    }
}
