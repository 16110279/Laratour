	@extends('layouts.main')
    @section('content')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style>

.form-select .nice-select {
    border: none;
    border-radius: 0px;
    /* height: 70px; */
    /* background: #dc3545; */
    /* padding-left: 45px; */
    /* padding-right: 40px; */
    width: 100%;
}


.form-control:disabled,
.form-control[readonly] {
    background-color: #fff;
    opacity: 1;
}



input[type=number]{
    width: 80px;
} 

        ul.timeline {
    list-style-type: none;
    position: relative;
}

ul.timeline:before {
    content: ' ';
    background: #d4d9df;
    display: inline-block;
    position: absolute;
    left: 29px;
    width: 2px;
    height: 100%;
    z-index: 400;
}

ul.timeline>li {
    margin: 20px 0;
    padding-left: 60px;
}

ul.timeline>li:before {
    content: ' ';
    background: white;
    display: inline-block;
    position: absolute;
    border-radius: 50%;
    border: 3px solid #22c0e8;
    left: 20px;
    width: 20px;
    height: 20px;
    z-index: 400;

    
}
.scrollable-menu {
    height: auto;
    max-height: 200px;
    overflow-x: hidden;
}
        </style>
{{-- 
       <!-- where_togo_area_start  -->
    <div class="where_togo_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="form_area">
                        <h3>Do you want to go ?</h3>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="search_wrap">
                        <form class="search_form" action="#">
                           
                            <div class="input_field">
                                <select>
                                    <option data-display="Tanggal Keberangkatan">Tanggal Keberangkatan</option>

                                @foreach ($schedule as $scd)
                                                                        <option value="1">{{$scd->date_start}}</option>


                                @endforeach
                                
                            </select> --}}

                                {{-- <input id="datepicker" placeholder="Date"> --}}
                                {{-- <input id="datepicker" placeholder="Date"> --}}
                            {{-- </div> --}}
                            {{-- <div class="input_field">
                                <select>
                                    <option data-display="Travel type">Travel type</option>
                                    <option value="1">Some option</option>
                                    <option value="2">Another option</option>
                                </select>
                            </div> --}}

                           
{{-- </div> --}}
                                                        {{-- <div class="input_field">

                                <form action="">
                                 <fieldset>
                                <input type="text" id="textfield">
                                 </fieldset>
                                 </form>

                                                        </div> --}}
                            {{-- <button onclick="myFunction()">Click Me</button> --}}

                            {{-- <div class="search_btn">
                                <button class="boxed-btn4 " type="submit" >Check</button>
                            </div> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- where_togo_area_end  -->


    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                                 {{-- <div class="blog_details"> --}}
                            {{-- <h2>{{ $tour->name }}
                            </h2>
                            <br>
                            <br> --}}

        
                        <div class="feature-img">
                            <img class="img-fluid" src="{{url('img/tour/'.$tour->img)}}" alt="">
                        </div>
                        <br>
                        <br>
               
                                  <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                           <h3>Itineraries</h3></a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse show">
                                    <div class="panel-body">
											<br>

                                            {!! $tour->itinerary !!}
											{{-- @foreach ($itineraries as $itn)
										
                                                {!! $itn->content !!}
											
											<br>
											@endforeach --}}


                                    </div>
                                </div>
                                <br>

                            {{-- </div> --}}

                                                    <br>
    <h3>Tour Pricing</h3>

                        <br>
<table id="penjualan" class="table table-responsive table-hover">
    <thead>
        <tr><th>Paket</th>
             <th>Harga (IDR)</th>
           
            <th>Jumlah</th>
            <th align="center"><span id="amount" class="amount">Subtotal</span> </th></tr>
        </thead>
        <tfoot>
            <tr><td colspan="3"></td>
                <td align="right">
                    <h3><span id="total" class="total text-success">Grand Total</span></h3>
                </td>
                
            </tr>
        </tfoot>
        
        <tbody>

        <form action="{{url('tour/booking')}}" method="POST">
            <div class="form-group">
                <select class="form-control" name="tanggal" id="exampleFormControlSelect1">
                        <option disabled selected>Tanggal Keberangkatan</option>
                            @foreach ($schedule as $scd)
                               <option value="{{$scd->id}}">{{$scd->date_start}}</option>  
                            @endforeach
                </select>
            </div>

    <input type="text" name="tour_id" value="{{$tour->id}}" hidden>
            @foreach ($price as $key => $value)
    
                 <tr><td>{{ $value->name }}</td>
                 <td>
                             @csrf
                    <input type="text" name="data[{{ $key }}][id]"  value="{{ $value->id }}" class="id form-control" hidden>
                    <input type="text" name="data[{{ $key }}][name]"  value="{{ $value->name }}" class="name form-control" hidden>
                    <input type="text" name="data[{{ $key }}][price]"  value="{{ $value->price }}" class="price form-control">
                </td>
                <td>
                    <input type="number"  min="0" name="data[{{ $key }}][qty]" class="qty form-control" placeholder="QTY">
                </td>
                     
                <td align="center">
                    <h4><span id="amount" class="amount">Rp. 0</span></h4>
                </td>

            </tr>
            @endforeach
                    <input type="number" name="totalinput" class="totalinput" hidden>
          
        </tbody>
        </table>
                <button type="submit" class="btn btn-danger">Booking</button>
                    </form>
                 
                    </div>
                    </div>

                        </div>

                  
                        </div>



                <div class="col-lg-4">
                    <div class="blog_right_sidebar">


  <aside class="single_sidebar_widget search_widget">
                            <h3 class="widget_title">Informasi Umum</h3>
                            {{-- <div class="row justify-content-center"> --}}
                                <!-- <button><a href="booking.html">Order</a></button> -->
                                Nama Tour : {{ $tour->name }} <br>
                                Negara : {{ $tour->country->name }} <br>
                                Kategori : {{ $tour->category }} <br>
                                {{-- Durasi :   --}}

                            {{-- </div> --}}
                        </aside>


{{-- <div id="showDiv" style="width:50px;height:50px;background-color:#6CF;"></div> --}}
<div id="showDiv" style="display:none"> 
                        <aside class="single_sidebar_widget search_widget">
                            <h3 class="widget_title">Booking Summary</h3>
                            <div class="row justify-content-center align-items-center">
                                <!-- <button><a href="booking.html">Order</a></button> -->
                            
                                   <button class="boxed-btn4" type="submit" >Booking</button>


                            </div>
                        </aside>
                                                    </div>

                                                               


                        <aside class="single_sidebar_widget popular_post_widget">
							<h3 class="widget_title">Destinasi</h3>
							
							    @foreach ($tour->destination as $dst)
								
									   <div class="media post_item">
                                <img src="{{url('img/destination/'.$dst->image)}}" alt="post" height="80" width="80">
                                <div class="media-body">
                                    {{-- <a href="single-blog.html"> --}}
                                        <h3>{{ $dst->name }}</h3>
                                    {{-- </a> --}}
                                    {{-- <p>January 12, 2019</p> --}}
                                </div>

                               
                            </div>
                                @endforeach
                                
                         
                            
                        </aside>

                          <aside class="single_sidebar_widget search_widget">
                            <h3 class="widget_title">Inclusions</h3>
                            {{-- <div class="row justify-content-center align-items-center"> --}}
                                <div class="panel-body">
                                <!-- <button><a href="booking.html">Order</a></button> -->
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.
                            </div>
                        </aside>
                          <aside class="single_sidebar_widget search_widget">
                            <h3 class="widget_title">Exclusions</h3>
                            {{-- <div class="row justify-content-center align-items-center"> --}}
                                <div class="panel-body">
                                <!-- <button><a href="booking.html">Order</a></button> -->
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.
                            </div>
                        </aside>
                          <aside class="single_sidebar_widget search_widget">
                            <h3 class="widget_title">Terms Of Service</h3>
                            {{-- <div class="row justify-content-center align-items-center"> --}}
                                <div class="panel-body">
                                <!-- <button><a href="booking.html">Order</a></button> -->
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.
                            </div>
                        </aside>


                  
                    

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Blog Area end =================-->




    <!-- newletter_area_start  -->
    <!-- <div class="newletter_area overlay">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="newsletter_text">
                                <h4>Subscribe Our Newsletter</h4>
                                <p>Subscribe newsletter to get offers and about
                                    new places to discover.</p>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="mail_form">
                                <div class="row no-gutters">
                                    <div class="col-lg-9 col-md-8">
                                        <div class="newsletter_field">
                                            <input type="email" placeholder="Your mail">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="newsletter_btn">
                                            <button class="boxed-btn4 " type="submit">Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- newletter_area_end  -->




    </div>
    </div>
    </div>

     <SCRIPT>
            $(document).ready(function(){
                total();
                $('.qty').change(function() {
                    total();
                });
                $('.amount').change(function() {
                    total();
                });               
            });

            function total()
            {
                var sum = 0;
                $('#penjualan > tbody  > tr').each(function() {
                    // var qty = $(this).find('option:selected').val();
                    var qty = $(this).find('.qty').val();
                    var price = $(this).find('.price').val();
                    var amount = (qty*price)
                    sum+=amount;
                    $(this).find('.amount').text('Rp.'+amount);
                });
                $('.total').text('Rp.'+sum);
                $('.totalinput').val(sum);

            }
        </SCRIPT>
    @endsection