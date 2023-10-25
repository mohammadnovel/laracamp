@extends('layouts.app')

@section('content')
    <div class="hero-wrap js-fullheight" style="background-image: url('{{asset('images/bali-gambar.jpeg')}}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Explore <br></strong> your sustainable travel</h1>
            {{-- <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Find great places to stay, eat, shop, or visit from local experts</p> --}}
            <div class="block-17 my-4">
              <form action="" method="post" class="d-block d-flex">
                <div class="fields d-block d-flex">
                  <div class="textfield-search one-third">
                  	<input type="text" class="form-control" placeholder="Ex: camp, backpacker, trail running">
                  </div>
                  {{-- <div class="select-wrap one-third">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="" id="" class="form-control" placeholder="Keyword search">
                      <option value="">Where</option>
                      <option value="">San Francisco USA</option>
                      <option value="">Berlin Germany</option>
                      <option value="">Lodon United Kingdom</option>
                      <option value="">Paris Italy</option>
                    </select>
                  </div> --}}
                </div>
                <input type="submit" class="search-submit btn btn-primary" value="Search">  
              </form>
            </div>
            <p>Or browse the highlights</p>
            <p class="browse d-md-flex">
            	<span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="flaticon-fork"></i>Activities</a></span>
            	<span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="flaticon-hotel"></i>Accommodation</a></span> 
            	<span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="flaticon-meeting-point"></i>Places</a></span> 
            	<span class="d-flex justify-content-md-center align-items-md-	center"><a href="#"><i class="flaticon-shopping-bag"></i>Destination</a></span>
            </p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-meeting-point"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Sustainable Destinations</h3>
                <p>Selected destinations that meet strict sustainability criteria across environmental, social, and economic dimensions, also rate and review.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-like"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Eco-Friendly Accommodations</h3>
                <p>Offers specialized filters for users to find green accommodations. <br> spotlighting those with trusted certifications.
				</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-detective"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Responsible Activities</h3>
                <p>Our platform curates activities that positively impact local communities and environments.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-support"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Interactive Map</h3>
                <p>Our map tool pinpoints sustainable spots and suggests green travel routes, providing insights on local conservation and community sustainability efforts.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section ftco-destination">
    	<div class="container">
    		<div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
          	<span class="subheading">Sustainable</span>
            <h2 class="mb-4"><strong>Sustainable</strong> Destination</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="destination-slider owl-carousel ftco-animate">
    					<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url({{asset('images/bali.jpeg')}});">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<h3><a href="#">Bali</a></h3>
		    						<span class="listing">15 Listing</span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url({{asset('images/baluran.jpeg')}});">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<h3><a href="#">Baluran</a></h3>
		    						<span class="listing">20 Listing</span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url({{asset('images/90187738323749149385-min.jpg')}});">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<h3><a href="#">Pulau Komodo</a></h3>
		    						<span class="listing">10 Listing</span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url({{asset('images/wakatobi.jpeg')}});">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<h3><a href="#">Wakatobi</a></h3>
		    						<span class="listing">3 Listing</span>
		    					</div>
		    				</div>
	    				</div>
	    				{{-- <div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url({{asset('images/destination-5.jpg')}});">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<h3><a href="#">Bangka Belitung</a></h3>
		    						<span class="listing">3 Listing</span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url({{asset('images/destination-6.jpg')}});">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<h3><a href="#">Paris, Italy</a></h3>
		    						<span class="listing">3 Listing</span>
		    					</div>
		    				</div>
	    				</div> --}}
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
          	<span class="subheading">Special Offers</span>
            <h2 class="mb-4"><strong>Top</strong> Tour Packages</h2>
          </div>
        </div>    		
    	</div>
    	<div class="container-fluid">
    		<div class="row">
				{{-- @foreach ($tours as $tour)
				<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination">
    					<a href="{{route('checkout.create', $tour->slug)}}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{asset('images/destination-1.jpg')}});">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="{{route('checkout.create', $tour->slug)}}">{{$tour->title}}</a></h3>
		    						<p class="rate">
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star-o"></i>
		    							<span>8 Rating</span>
		    						</p>
									<p class="rate">
		    							<i class="icon-leaf" style="color: teal"></i>
		    							<i class="icon-leaf" style="color: teal"></i>
		    							<i class="icon-leaf" style="color: teal"></i>
		    							<i class="icon-leaf" style="color: teal"></i>
		    							<i class="icon-star-o"></i>
		    							<span style="  padding:2px; font-size: 12px">Travel Sustainable Level 2</span>
		    						</p>
									<p class="rate">
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star-o"></i>
		    							<span>8 Rating</span>
		    						</p>
									<p class="rate">
		    							<i class="icon-leaf" style="color: teal"></i>
		    							<i class="icon-leaf" style="color: teal"></i>
		    							<i class="icon-leaf" style="color: teal"></i>
		    							<i class="icon-leaf" style="color: teal"></i>
		    							<i class="icon-star-o"></i>
		    							<span style="  padding:2px; font-size: 12px">Travel Sustainable Level 2</span>
		    						</p>
	    						</div>
	    						
    						</div>
							<div class="flex">
								<div class="one">
									<span>Harga : </span>
								</div>
								<div class="">
	    							<span class="price"> Rp. {{number_format($tour->price, 0, ',', '.')}}</span>
    							</div>
							</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<p class="days"><span>2 days 3 nights</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> {{$tour->address}}</span> 
    							<span class="ml-auto"><a href="#">{{$tour->tour_category->name}}</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
				@endforeach --}}
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{asset('images/bali.jpeg')}});">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">Bali</a></h3>
		    						<p class="rate">
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star-o"></i>
		    							<span>8 Rating</span>
		    						</p>
									<p class="rate">
		    							<i class="icon-leaf" style="color: teal"></i>
		    							<i class="icon-leaf" style="color: teal"></i>
		    							{{-- <i class="icon-leaf" style="color: teal"></i>
		    							<i class="icon-leaf" style="color: teal"></i>
		    							<i class="icon-leaf" style="color: teal"></i> --}}
		    							<span style="  padding:2px; font-size: 12px">Travel Sustainable Level 2</span>
		    						</p>
	    						</div>
	    						<div class="two">
	    							<span class="price">$200</span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<p class="days"><span>2 days 3 nights</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> Bali</span> 
    							<span class="ml-auto"><a href="#">Discover</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
				<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{asset('images/90187738323749149385-min.jpg')}});">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">Baluran</a></h3>
		    						<p class="rate">
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star-o"></i>
		    							<span>8 Rating</span>
		    						</p>
									<p class="rate">
		    							<i class="icon-leaf" style="color: teal"></i>
		    							<i class="icon-leaf" style="color: teal"></i>
		    							{{-- <i class="icon-leaf" style="color: teal"></i>
		    							<i class="icon-leaf" style="color: teal"></i>
		    							<i class="icon-leaf" style="color: teal"></i> --}}
		    							<span style="  padding:2px; font-size: 12px">Travel Sustainable Level 2</span>
		    						</p>
	    						</div>
	    						<div class="two">
	    							<span class="price">$200</span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<p class="days"><span>2 days 3 nights</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> Taman Nasional Baluran</span> 
    							<span class="ml-auto"><a href="#">Discover</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{asset('images/baluran.jpeg')}});">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">Pulau Komodo</a></h3>
		    						<p class="rate">
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star-o"></i>
		    							<span>8 Rating</span>
		    						</p>
									<p class="rate">
		    							<i class="icon-leaf" style="color: teal"></i>
		    							<i class="icon-leaf" style="color: teal"></i>
		    							{{-- <i class="icon-leaf" style="color: teal"></i> --}}
		    							{{-- <i class="icon-leaf" style="color: teal"></i>
		    							<i class="icon-leaf" style="color: teal"></i> --}}
		    							<span style=" padding:2px; font-size:12px;">Travel Sustainable Level 3</span>
		    						</p>
	    						</div>
	    						<div class="two">
	    							<span class="price">$200</span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<p class="days"><span>2 days 3 nights</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> Pulau Komodo</span> 
    							<span class="ml-auto"><a href="#">Discover</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{asset('images/wakatobi.jpeg')}});">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">Wakatobi</a></h3>
		    						<p class="rate">
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star-o"></i>
		    							<span>8 Rating</span>
		    						</p>
									<p class="rate">
		    							<i class="icon-leaf" style="color: teal"></i>
		    							{{-- <i class="icon-leaf" style="color: teal"></i>
		    							<i class="icon-leaf" style="color: teal"></i>
		    							<i class="icon-leaf" style="color: teal"></i>
		    							<i class="icon-leaf" style="color: teal"></i> --}}
		    							<span style="  padding:2px; font-size: 12px">Travel Sustainable Level 1</span>
		    						</p>
	    						</div>
	    						<div class="two">
	    							<span class="price">$200</span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<p class="days"><span>2 days 3 nights</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> Wakatobi </span> 
    							<span class="ml-auto"><a href="#">Discover</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url({{asset('frontend/images/bg_1.jpg')}});">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-4">Some fun facts</h2>
            <span class="subheading">More than 100,000 websites hosted</span>
          </div>
        </div>
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100000">0</strong>
		                <span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="40000">0</strong>
		                <span>Destination Places</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="87000">0</strong>
		                <span>Tours</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="56400">0</strong>
		                <span>Locations </span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-start">
          <div class="col-md-5 heading-section ftco-animate">
          	<span class="subheading">Best Directory Website</span>
            <h2 class="mb-4 pb-3"><strong>Why</strong> Choose Us?</h2>
            <p>
				"GreenTraveler" is a mobile and website-based application designed to promote and facilitate sustainable tourism throughout the world, especially now in Indonesia  by connecting travelers with eco-friendly options and authentic experiences. This application will provide information about destinations, accommodation, restaurants and activities that comply with sustainability principles.
			</p>
            {{-- <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p> --}}
            {{-- <p><a href="#" class="btn btn-primary btn-outline-primary mt-4 px-4 py-3">Read more</a></p> --}}
          </div>
					<div class="col-md-1"></div>
          <div class="col-md-6 heading-section ftco-animate">
          	<span class="subheading">Testimony</span>
            <h2 class="mb-4 pb-3"><strong>Our</strong> Guests Says</h2>
          	<div class="row ftco-animate">
		          <div class="col-md-12">
		            <div class="carousel-testimony owl-carousel">
		              <div class="item">
		                <div class="testimony-wrap d-flex">
		                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text ml-md-4">
		                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
		                    <p class="name">Dennis Green</p>
		                    <span class="position">Guest from italy</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap d-flex">
		                  <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text ml-md-4">
		                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
		                    <p class="name">Dennis Green</p>
		                    <span class="position">Guest from London</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap d-flex">
		                  <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text ml-md-4">
		                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
		                    <p class="name">Dennis Green</p>
		                    <span class="position">Guest from Philippines</span>
		                  </div>
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <span class="subheading">Recent Article</span>
            <h2><strong>Tips</strong> &amp; Articles</h2>
          </div>
        </div>
        <div class="row d-flex">
		{{-- @foreach ($articles as $article)
		<div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="{{route('article.detail', $article->id)}}" class="block-20" style="background-image: url('{{Storage::url($article->thumbnail)}}');">
              </a>
              <div class="text p-4 d-block">
              	<span class="tag">Tips, Travel</span>
                <h3 class="heading mt-3"><a href="#">{{$article->title}}</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">{{ date('d F Y h:i', strtotime($article->created_at)) }}</a></div>
                </div>
              </div>
            </div>
		</div>
		@endforeach --}}
          
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="#" class="block-20" style="background-image: url('{{asset('frontend/images/eco-1.jpeg')}}');">
              </a>
              <div class="text p-4">
              	<span class="tag">Culture</span>
                <h3 class="heading mt-3"><a href="#">Choose Eco-Friendly Destinations</a></h3>
				<p>When planning your travels, opt for destinations committed to sustainability. Select places with environmental conservation programs, reduced waste initiatives, and support for local communities.</p>
                <div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="#" class="block-20" style="background-image: url('{{asset('frontend/images/eco-2.jpeg')}}');">
              </a>
              <div class="text p-4">
              	<span class="tag">Tips, Travel</span>
                <h3 class="heading mt-3"><a href="#">Use Eco-Friendly Transportation</a></h3>
				<p>
					When traveling, consider using public transportation, biking, or walking whenever possible. These transportation options have a lower environmental impact compared to private cars or air travel.
				</p>
                <div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="#" class="block-20" style="background-image: url('{{asset('frontend/images/eco-3.jpeg')}}');">
              </a>
              <div class="text p-4">
              	<span class="tag">Tips, Travel</span>
                <h3 class="heading mt-3"><a href="#">Conserve Energy</a></h3>
				<p>
					Practice energy conservation during your accommodation stay. Turn off lights, air conditioning, and electronic devices when not in use. Bring small items like reusable water bottles and solar-powered flashlights to reduce plastic waste and energy consumption.
				</p>
                <div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
		  <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="#" class="block-20" style="background-image: url('{{asset('frontend/images/eco-4.jpeg')}}');">
              </a>
              <div class="text p-4">
              	<span class="tag">Tips, Travel</span>
                <h3 class="heading mt-3"><a href="#">Respect Local Culture</a></h3>
				<p>
					When visiting new places, learn about and respect local customs and traditions. Consider participating in activities that support the local community, such as buying local products.
				</p>
                <div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		
	<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection