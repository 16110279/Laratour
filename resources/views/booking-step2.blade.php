	@extends('layouts.main')
    @section('content')
  
    @dump($booking)
    {{ $booking->booking_code }}  <br>
    {{ $booking->name }}  <br>
    {{ $booking->phone }}  <br>
    {{ $booking->email }}  <br>
    Rp. {{ $booking->total }}  <br>
    {{ $booking->payment_status }}  <br>
  


    @endsection