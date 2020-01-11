<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    public function destination()
    {
        return $this->belongsToMany(Destination::class, 'tour_destinations')->withTimestamps();
    }
}
