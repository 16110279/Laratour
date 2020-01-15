<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingItems extends Model
{

    protected $fillable = [
        'booking_id',
        'tourpricings_id',
        'price',
        'qty',
        'subtotal',
    ];

    public function booking()
    {
        return $this->belongsTo('App\Bookings', 'bookings_id');
    }
}
