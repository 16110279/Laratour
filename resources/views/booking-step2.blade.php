	@extends('layouts.main')
    @section('content')
<br>
        <!-- ================ contact section start ================= -->
    {{-- <section class="contact-section"> --}}
            <div class="container">    
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Konfirmasi Pembayaran</h2><br>
                    </div>
                    <div class="col-lg-7">
                    <form action="{{url('tour/booking/save-payment')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                            <div class="row">
                            <input type="text" name="booking_id" value="{{$booking->id}}" hidden>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Bank Tujuan</label>
                                    <select name="payment_option_id" class="form-control" id="exampleFormControlSelect1">
                                        <option value="" selected disabled>Select a Bank</option>                                        
                                        @foreach ($payment as $item)
                                    <option value="{{ $item->id }}">{{  $item->nama_bank   }}</option>                                            
                                        @endforeach

                                    </select>
                                </div>                                
                                </div>                                
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nominal Yang Dibayarkan</label>
                                    <input type="number" name="fee" class="form-control" id="exampleFormControlInput1" placeholder="Nominal Yang dibayarkan">
                                </div>                                
                                </div>                                
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nama</label>
                                    <input type="text" name="atas_nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama Yang Tertera di Rekening Pembayar">
                                </div>                                
                                </div>                                
                                <div class="col-12">
                                    <div class="form-group">
                                            <label for="exampleFormControlFile1">Bukti Pembayaran</label>
                                            <input type="file" name="bukti_transfer" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                           
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>


                    <div class="col-lg-4 offset-lg-1">
                    <div class="blog_right_sidebar">


  <aside class="single_sidebar_widget search_widget">
                            <h3 class="widget_title">Booking Summary</h3>
                            {{-- <div class="row justify-content-center"> --}}
                                <!-- <button><a href="booking.html">Order</a></button> -->
                                {{-- Nama Tour : {{ $tour->name }} <br>
                                Negara : {{ $tour->country->name }} <br>
                                Kategori : {{ $tour->category }} <br>
                                Durasi :  --}}



{{-- @dump($booking) --}}
Kode Booking :    {{ $booking->booking_code }}  <br>
Nama Pemesan :    {{ $booking->name }}  <br>
No Telp : {{ $booking->phone }}  <br>
Email :    {{ $booking->email }}  <br>
Total : Rp. {{ $booking->total }}  <br>
Status Booking : {{ $booking->status }}  <br>


                            {{-- </div> --}}
                        </aside>
  <aside class="single_sidebar_widget search_widget">
                            <h3 class="widget_title">Opsi Pembayaran</h3>
                            {{-- <div class="row justify-content-center"> --}}
                                <!-- <button><a href="booking.html">Order</a></button> -->
                                {{-- Nama Tour : {{ $tour->name }} <br>
                                Negara : {{ $tour->country->name }} <br>
                                Kategori : {{ $tour->category }} <br>
                                Durasi :  --}}


    @foreach ($payment as $item)
           <b> {{ $item->nama_bank }} </b> <br>
           {{ $item->no_rek }}<br>
           {{ $item->atas_nama }}<br>
           <br>
    @endforeach                                


                     {{-- {{ $booking->booking_code }}  <br>
    {{ $booking->name }}  <br>
    {{ $booking->phone }}  <br>
    {{ $booking->email }}  <br>
    Rp. {{ $booking->total }}  <br>
    {{ $booking->payment_status }}  <br> --}}


                            {{-- </div> --}}
                        </aside>
                    </div>
                    </div>





                </div>
            </div>




        {{-- </section> --}}
    <!-- ================ contact section end ================= -->
<br>
<br>
    @endsection