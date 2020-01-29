	@extends('layouts.main')
    @section('content')
<br>
        <!-- ================ contact section start ================= -->
    {{-- <section class="contact-section"> --}}
            <div class="container">    
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Data Pemesan</h2><br>
                    </div>
                    <div class="col-lg-7">
                    <form action="{{url('tour/booking/save-booking')}}" method="POST">
                        @csrf
                        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="phone" id="phone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Phone Number'" placeholder="Enter Phone Number">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                    </div>
                                </div>

                                <input type="text" name="tourid" value="{{$tour['id']}}" hidden>

                                @foreach ($items as $key => $item)
                                <?php
                                if($item['qty'] != '')
                                { ?>
   <input type="text" name="data[{{ $key }}][id]"  value="{{ $item['id'] }}" hidden>
                    <input type="text" name="data[{{ $key }}][price]"  value="{{ $item['price'] }}" hidden>

                    <input type="number"  min="0" name="data[{{ $key }}][qty]" value="{{$item['qty']}}"  hidden  >
                                    <?php
                                }
                                ?>
                                @endforeach

                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <h3>Booking Summary</h3>
                        <br>
                        {{-- @dump($date) --}}
                        Nama : {{ $tour->name }} <br>
                        Tour Duration : <br>
                        Category : {{ $tour->category }} <br>
                        Departure : {{ $date->date_start }} <br>
                        <br>
                        {{-- @dum p($items) --}}
                        @foreach ($items as $key => $val)
                            {{-- @dump($val['price']) --}}
                    {{ $val['name'] }} - {{ $val['qty']  }} x  - Rp. {{  $val['price']   }} <br>
                        @endforeach

                        <br>
                         <h3>Total : Rp. {{ $total_biaya }} </h3>
                    </div>
                </div>
            </div>
        {{-- </section> --}}
    <!-- ================ contact section end ================= -->
<br>
<br>
    @endsection