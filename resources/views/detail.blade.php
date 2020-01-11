	@extends('layouts.main')
    @section('content')

    <style>
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
        </style>

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
                                
                            </select>

                                {{-- <input id="datepicker" placeholder="Date"> --}}
                                {{-- <input id="datepicker" placeholder="Date"> --}}
                            </div>
                            <div class="input_field">
                                <select>
                                    <option data-display="Travel type">Travel type</option>
                                    <option value="1">Some option</option>
                                    <option value="2">Another option</option>
                                </select>
                            </div>
                            <div class="input_field">
                                <input type="number" name="" onChange="myFunction()" id="">
                            </div>


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
                        <div class="feature-img">
                            <img class="img-fluid" src="{{asset('assets/img/blog/single_blog_1.png')}}" alt="">
                        </div>
                        <div class="blog_details">
                            <h2>{{ $tour->name }}
                            </h2>

                                  <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                           <h3> </h3></a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse show">
                                    <div class="panel-body">
											<br>

                                        <ul class="timeline">
											@foreach ($itineraries as $itn)
											<li>
                                                <b>{{ $itn->title }}</b>
                                                <p>{{$itn->content}}</p>
											</li>
											<br>
											@endforeach

											{{-- @dump($itineraries) --}}
                           
                                            {{-- <li>
                                                Day 2
                                                <p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis.
                                                    Nam pellentesque felis vitae justo
                                                    accumsan, sed semper nisi sollicitudin...</p>
                                            </li>
                                            <li>
                                                Day 3
                                                <p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla
                                                    odio, tincidunt vitae nunc vitae, mollis
                                                    pharetra velit. Sed nec tempor nibh...</p>
                                            </li> --}}
                                        </ul>

                                    </div>
                                </div>
                                <br>

                            </div>

                            {{-- <p class="excert">
                                MCSE boot camps have its supporters and its detractors. Some people do not understand
                                why you
                                should have to spend money on boot camp when you can get the MCSE study materials
                                yourself at a
                                fraction of the camp price. However, who has the willpower
                            </p>
                            <p>
                                MCSE boot camps have its supporters and its detractors. Some people do not understand
                                why you
                                should have to spend money on boot camp when you can get the MCSE study materials
                                yourself at a
                                fraction of the camp price. However, who has the willpower to actually sit through a
                                self-imposed MCSE training. who has the willpower to actually
                            </p> --}}
                            <div class="quote-wrapper">
                                <div class="quotes">
                                    MCSE boot camps have its supporters and its detractors. Some people do not
                                    understand why you
                                    should have to spend money on boot camp when you can get the MCSE study materials
                                    yourself at
                                    a fraction of the camp price. However, who has the willpower to actually sit through
                                    a
                                    self-imposed MCSE training.
                                </div>
                            </div>

                        </div>

                  
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                            <h3> Inclusions</h3></a>
                                    </h4>
                                </div>
                                
                                <div id="collapse4" class="panel-collapse collapse show">
                                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.</div>
                                </div>
                                <br>

                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                            <h3> Exclusions</h3></a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse show">
                                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.</div>
                                </div>
                                <br>

                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                            <h3> Terms of Service</h3>  </a>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.</div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">


  <aside class="single_sidebar_widget search_widget">
                            <h3 class="widget_title">Starting from</h3>
                            <div class="row justify-content-center align-items-center">
                                <!-- <button><a href="booking.html">Order</a></button> -->
                            


                            </div>
                        </aside>

<div id="myDIV" style="display:none"> 
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
                                <img src="{{asset('assets/img/post/post_1.png')}}" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>{{ $dst->name }}</h3>
                                    </a>
                                    {{-- <p>January 12, 2019</p> --}}
                                </div>

                               
                            </div>
                                @endforeach
                                
                         
                            
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

    @endsection