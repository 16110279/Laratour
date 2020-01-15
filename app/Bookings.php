<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{

    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
        'booking_code',
        'user_id',
        'total',
        // 'payment_option_id',
        'payment_status',
        'status',
    ];

     public function BookingItems()
    {
        return $this->hasMany('App\BookingItems', 'booking_id');
    }
}
