	@extends('layouts.main')
    @section('content')
     <br>
         <div class="container">    
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Status Booking</h2><br>
                    </div>
                    <div class="col-lg-7">
                       Status Pembayaran Booking <b> {{ $booking->booking_code }} </b> saat ini adalah {{ $pay->validation }}
                    </div>
                </div>
        </div>

        <br>

    @endsection