	@extends('layouts.public')
    @section('content')
<!-- Home -->

{{-- @dump($tour) --}}
{{-- {{ $url }} --}}

		<div class="home">
			<div class="background_image" style="background-image:url({{asset('assets/images/news.jpg')}})"></div>
		</div>

		<!-- Search -->

		<div class="home_search">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_search_container">
							<div class="home_title">
												{{-- <h4>{{$tour->name}}</h4> --}}
											</div>
							<div class="home_search_title">{{$tour->name}}</div>
							<!-- <div class="home_search_content">
							<form action="#" class="home_search_form" id="home_search_form">
								<div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
									<input type="text" class="search_input search_input_1" placeholder="City" required="required">
									<input type="text" class="search_input search_input_2" placeholder="Departure" required="required">
									<input type="text" class="search_input search_input_3" placeholder="Arrival" required="required">
									<input type="text" class="search_input search_input_4" placeholder="Budget" required="required">
									<button class="home_search_button">search</button>
								</div>
							</form>
						</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- News -->

		{{-- @dump($destination) --}}

		<div class="news">
			<div class="container">
				<div class="row">

					<!-- News Container -->
					<div class="col-lg-8">
						<div class="news_container">
			

							<!-- News Post -->
							<div class="news_post">
								<div class="news_post_image"><img src="{{asset('assets/images/news_4.jpg')}}" alt=""></div>
								<div class="news_post_content">
									<div class="news_post_date d-flex flex-row align-items-end justify-content-start">
										<div>02</div>
										<div>june</div>
									</div>
									<div class="news_post_title"><a href="#">Best tips to travel light</a></div>
									<div class="news_post_category">
										<ul>
											<li><a href="#">lifestyle & travel</a></li>
										</ul>
									</div>
									<div class="news_post_text">
										<p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at
											leo. Vivamus massa.Tempor massa et laoreet. Pellentesque sit amet elementum
											ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa
											et laoreet.</p>
									</div>
									<div class="news_post_link"><a href="#">Read More</a></div>
								</div>
							</div>



						</div>

					</div>

					<!-- News Sidebar -->
					<div class="col-lg-4">
						<div class="news_sidebar">

							<!-- Categories -->
							<div class="categories">
								<div class="sidebar_title">Categories</div>
								<div class="sidebar_list">
									<ul>
										<li><a href="#">
												<div class="d-flex flex-row align-items-start justify-content-start">
													Travels<span class="ml-auto">(09)</span></div>
											</a></li>
										<li><a href="#">
												<div class="d-flex flex-row align-items-start justify-content-start">
													Organization<span class="ml-auto">(12)</span></div>
											</a></li>
										<li><a href="#">
												<div class="d-flex flex-row align-items-start justify-content-start">
													Tips & Tricks<span class="ml-auto">(16)</span></div>
											</a></li>
										<li><a href="#">
												<div class="d-flex flex-row align-items-start justify-content-start">
													Uncategorized<span class="ml-auto">(22)</span></div>
											</a></li>
									</ul>
								</div>
							</div>

							<!-- Latest News -->
							<div class="latest">
								<div class="sidebar_title">Destinasi</div>
								<div class="latest_container">



								@foreach ($tour->destination as $dst)
							
									<!-- Latest Post -->
									<div class="latest_post d-flex flex-row align-items-start justify-content-start">
										<div class="latest_post_image"><img src="{{asset('assets/images/latest_2.jpg')}}" alt=""></div>
										<div class="latest_post_content">
						
											<div class="latest_post_title"><a href="#">	{{ $dst->name }} </a>
											</div>
											<div class="latest_post_text">
												<p>Pellentesque sit </p>
											</div>
										</div>
									</div>
									
								@endforeach

								

								

								</div>
							</div>

							{{-- <div class="travello">
								<div class="background_image" style="background-image:url({{asset('assets/images/travello.jpg')}})"></div>
								<div class="travello_content">
									<div class="travello_content_inner">
										<div></div>
										<div></div>
									</div>
								</div>
								<div class="travello_container">
									<a href="#">
										<div class="d-flex flex-column align-items-center justify-content-end">
											<span class="travello_title">Get a 20% Discount</span>
											<span class="travello_subtitle">Buy Your Vacation Online Now</span>
										</div>
									</a>
								</div>
							</div> --}}

						</div>
					</div>
				</div>
			</div>
		</div>

    @endsection