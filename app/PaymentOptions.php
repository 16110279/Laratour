<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentOptions extends Model
{
    public function Payment()
    {
        return $this->hasOne('App\Payment','id');
    }
}
