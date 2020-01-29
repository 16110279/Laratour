<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

    protected $fillable = [
        'fee',
        'atas_nama',
        'booking_id',
        'payment_option_id',  
        'validation',
        'bukti_transfer',  
    ];
    public function booking()
    {
        return $this->hasOne('App\Bookings', 'booking_id');
    }

    public function PaymentOption()
    {
        return $this->hasOne('App\PaymentOptions','payment_option_id');
    }
}
