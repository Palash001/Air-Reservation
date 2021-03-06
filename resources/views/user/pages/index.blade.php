@extends('user.layouts.app')

@section('title','Home page')

@section('main-content')

<div class="fh5co-hero">
	<div class="fh5co-overlay"></div>
	<div class="fh5co-cover" data-stellar-background-ratio="0.5"

	style="background-image: url( {{ asset('user/images/cover_bg_1.jpg') }})">

		<div class="desc">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="tabulation animate-box">

							<!-- Nav tabs -->
							 <!-- <ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active">
										<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Flights</a>
									</li>
							 </ul> -->


					 <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="1300">
						 <!-- Indicators -->
						 <ol class="carousel-indicators">
							 <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							 <li data-target="#myCarousel" data-slide-to="1"></li>
							 <li data-target="#myCarousel" data-slide-to="2"></li>
						 </ol>

						 <!-- Wrapper for slides -->
						 <div class="carousel-inner">

							 <div class="item active">
								 <img src="{{asset('user/images/aln1.jpg')}}" alt="Los Angeles" style="width:100%;">
								 <div class="carousel-caption">
									 <h3>Lufthansa</h3>
									 <p>LA is always so much fun!</p>
								 </div>
							 </div>

							 <div class="item">
								 <img src="{{asset('user/images/aln2.jpg')}}" alt="Chicago" style="width:100%;">
								 <div class="carousel-caption">
									 <h3>Boeing</h3>
									 <p>Thank you, Chicago!</p>
								 </div>
							 </div>

							 <div class="item">
								 <img src="{{asset('user/images/aln3.jpg')}}" alt="New York" style="width:100%;">
								 <div class="carousel-caption">
									 <h3>Air Buss</h3>
									 <p>We love Air Bus</p>
								 </div>
							 </div>

						 </div>

						 <!-- Left and right controls -->
						 <a class="left carousel-control" href="#myCarousel" data-slide="prev">
							 <span class="glyphicon glyphicon-chevron-left"></span>
							 <span class="sr-only">Previous</span>
						 </a>
						 <a class="right carousel-control" href="#myCarousel" data-slide="next">
							 <span class="glyphicon glyphicon-chevron-right"></span>
							 <span class="sr-only">Next</span>
						 </a>
					 </div>

							 <!-- Tab panes -->

                   <!--Form Search herer-->

						</div> <!--end of table of animation class-->
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<div id="fh5co-tours" class="fh5co-section-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
				<h3>Hot Tours</h3>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
				<div href="#"><img src="{{asset('user/images/place-1.jpg')}}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
					<div class="desc">
						<span></span>
						<h3>New York</h3>
						<span>3 nights + Flight 5*Hotel</span>
						<span class="price">$1,000</span>
						<a class="btn btn-primary btn-outline" href="#">Book Now <i class="icon-arrow-right22"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
				<div href="#"><img src="{{asset('user/images/place-2.jpg')}}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
					<div class="desc">
						<span></span>
						<h3>Philippines</h3>
						<span>4 nights + Flight 5*Hotel</span>
						<span class="price">$1,000</span>
						<a class="btn btn-primary btn-outline" href="#">Book Now <i class="icon-arrow-right22"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
				<div href="#"><img src="{{asset('user/images/place-3.jpg')}}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
					<div class="desc">
						<span></span>
						<h3>Hongkong</h3>
						<span>2 nights + Flight 4*Hotel</span>
						<span class="price">$1,000</span>
						<a class="btn btn-primary btn-outline" href="#">Book Now <i class="icon-arrow-right22"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-12 text-center animate-box">
				<p><a class="btn btn-primary btn-outline btn-lg" href="#">See All Offers <i class="icon-arrow-right22"></i></a></p>
			</div>
		</div>
	</div>
</div>

<!---Parallax---->

<div class="parallax"></div>

<div id="fh5co-features">
	<div class="container">
		<div class="row">
			<div class="col-md-4 animate-box">

				<div class="feature-left">
					<span class="icon">
						<i class="icon-hotairballoon"></i>
					</span>
					<div class="feature-copy">
						<h3>Family Travel</h3>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
						<p><a href="#">Learn More</a></p>
					</div>
				</div>

			</div>

			<div class="col-md-4 animate-box">
				<div class="feature-left">
					<span class="icon">
						<i class="icon-search"></i>
					</span>
					<div class="feature-copy">
						<h3>Travel Plans</h3>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
						<p><a href="#">Learn More</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-4 animate-box">
				<div class="feature-left">
					<span class="icon">
						<i class="icon-wallet"></i>
					</span>
					<div class="feature-copy">
						<h3>Honeymoon</h3>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
						<p><a href="#">Learn More</a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 animate-box">

				<div class="feature-left">
					<span class="icon">
						<i class="icon-wine"></i>
					</span>
					<div class="feature-copy">
						<h3>Business Travel</h3>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
						<p><a href="#">Learn More</a></p>
					</div>
				</div>

			</div>

			<div class="col-md-4 animate-box">
				<div class="feature-left">
					<span class="icon">
						<i class="icon-genius"></i>
					</span>
					<div class="feature-copy">
						<h3>Solo Travel</h3>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
						<p><a href="#">Learn More</a></p>
					</div>
				</div>

			</div>
			<div class="col-md-4 animate-box">
				<div class="feature-left">
					<span class="icon">
						<i class="icon-chat"></i>
					</span>
					<div class="feature-copy">
						<h3>Explorer</h3>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
						<p><a href="#">Learn More</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--end of parallax-->



<div id="fh5co-destination">
	<div class="tour-fluid">
		<div class="row">
			<div class="col-md-12">
				<ul id="fh5co-destination-list" class="animate-box">
					<li class="one-forth text-center"

					style="background-image: url({{ asset('user/images/place-1.jpg')}})">

						<a href="#">
							<div class="case-studies-summary">
								<h2>Los Angeles</h2>
							</div>
						</a>
					</li>
					<li class="one-forth text-center"

					style="background-image: url({{asset('user/images/place-2.jpg')}})">
						<a href="#">
							<div class="case-studies-summary">
								<h2>Hongkong</h2>
							</div>
						</a>
					</li>
					<li class="one-forth text-center"

				style="background-image: url({{asset('user/images/images/place-3.jpg')}})">
						<a href="#">
							<div class="case-studies-summary">
								<h2>Italy</h2>
							</div>
						</a>
					</li>
					<li class="one-forth text-center"

			style="background-image: url({{asset('user/images/place-4.jpg')}}) ">
						<a href="#">
							<div class="case-studies-summary">
								<h2>Philippines</h2>
							</div>
						</a>
					</li>

					<li class="one-forth text-center"

					style="background-image: url({{asset('user/images/place-5.jpg')}})">
						<a href="#">
							<div class="case-studies-summary">
								<h2>Japan</h2>
							</div>
						</a>
					</li>
					<li class="one-half text-center">
						<div class="title-bg">
							<div class="case-studies-summary">
								<h2>Most Popular Destinations</h2>
								<span><a href="#">View All Destinations</a></span>
							</div>
						</div>
					</li>
					<li class="one-forth text-center"

					style="background-image: url({{asset('user/images/place-6.jpg')}})">

						<a href="#">
							<div class="case-studies-summary">
								<h2>Paris</h2>
							</div>
						</a>
					</li>
					<li class="one-forth text-center"

					style="background-image: url({{asset('user/images/place-7.jpg')}})">
						<a href="#">
							<div class="case-studies-summary">
								<h2>Singapore</h2>
							</div>
						</a>
					</li>
					<li class="one-forth text-center"

					style="background-image: url({{asset('user/images/place-8.jpg')}})">
						<a href="#">
							<div class="case-studies-summary">
								<h2>Madagascar</h2>
							</div>
						</a>
					</li>
					<li class="one-forth text-center"

					style="background-image: url({{asset('user/images/place-9.jpg')}})">
						<a href="#">
							<div class="case-studies-summary">
								<h2>Egypt</h2>
							</div>
						</a>
					</li>
					<li class="one-forth text-center"

					style="background-image: url({{asset('user/images/place-10.jpg')}})">
						<a href="#">
							<div class="case-studies-summary">
								<h2>Indonesia</h2>
							</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div id="fh5co-blog-section" class="fh5co-section-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
				<h3>Recent From Blog</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row row-bottom-padded-md">
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="fh5co-blog animate-box">
					<a href="#"><img class="img-responsive"

						src="{{asset('user/images/place-1.jpg')}}" alt=""></a>

					<div class="blog-text">
						<div class="prod-title">
							<h3><a href="#">30% Discount to Travel All Around the World</a></h3>
							<span class="posted_by">Sep. 15th</span>
							<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<p><a href="#">Learn More...</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="fh5co-blog animate-box">
					<a href="#"><img class="img-responsive"

					 src="{{asset('user/images/place-2.jpg')}}" alt=""></a>

					<div class="blog-text">
						<div class="prod-title">
							<h3><a href="#">Planning for Vacation</a></h3>
							<span class="posted_by">Sep. 15th</span>
							<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<p><a href="#">Learn More...</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix visible-sm-block"></div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="fh5co-blog animate-box">
					<a href="#"><img class="img-responsive" src="{{asset('FrontEnd/images/place-3.jpg')}}" alt=""></a>
					<div class="blog-text">
						<div class="prod-title">
							<h3><a href="#">Visit Tokyo Japan</a></h3>
							<span class="posted_by">Sep. 15th</span>
							<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<p><a href="#">Learn More...</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix visible-md-block"></div>
		</div>

		<div class="col-md-12 text-center animate-box">
			<p><a class="btn btn-primary btn-outline btn-lg" href="#">See All Post <i class="icon-arrow-right22"></i></a></p>
		</div>

	</div>
</div>
<!-- fh5co-blog-section -->
<div id="fh5co-testimonial"

style="background-image:url({{asset('FrontEnd/images/img_bg_1.jpg')}})">

<div class="container">
	<div class="row animate-box">
		<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
			<h2>Happy Clients</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="box-testimony animate-box">
				<blockquote>
					<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
					<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
				</blockquote>
				<p class="author">John Doe, CEO <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
			</div>

		</div>
		<div class="col-md-4">
			<div class="box-testimony animate-box">
				<blockquote>
					<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
					<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
				</blockquote>
				<p class="author">John Doe, CEO <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
			</div>


		</div>
		<div class="col-md-4">
			<div class="box-testimony animate-box">
				<blockquote>
					<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
					<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
				</blockquote>
				<p class="author">John Doe, Founder <a href="#">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
			</div>

		</div>
	</div>
</div>
</div>

@endsection
