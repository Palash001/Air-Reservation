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
					<div class="col-md-5 col-sm-5">

            <div class="tabulation animate-box">

							<!-- Nav tabs -->
							 <ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active">
										<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Flights</a>
									</li>
							 </ul>

							 <!-- Tab panes -->
							<div class="tab-content">
							 <div role="tabpanel" class="tab-pane active" id="flights">
								<div class="row">



									<form method="get"  action="{{ route('user_search.find') }}" enctype="multipart/form-data">


										<!-- <div class="form-group">
										 <div class="col-lg-10">
											 <div class="radio">
												 <label>
													 <input type="radio" name="path" id="routes"value="oneway" onclick="setReadOnly(this)">
													 One Way
												 </label>
												 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												 <label>
													 <input type="radio" name="path" id="routes" value="return" checked onclick="setReadOnly(this)">
													 Return
												 </label>
											 </div>
										 </div>
									 </div> -->

										<div class="col-xxs-12 col-xs-6 mt">
										<div class="input-field">
											<label for="from_city">From:</label>
											<select name="from_city" id="from_city" class="cs-select cs-skin-border">
												<option value="" disabled selected>Ex:Usa,Uk</option>
												@foreach($flightSearches as $flightSearch)
												<option value="{{$flightSearch->from_city}}">{{$flightSearch->from_city}}</option>
												@endforeach
											</select>
										</div>
									</div>

										<div class="col-xxs-12 col-xs-6 mt">
										<div class="input-field">
											<label for="to_city">To:</label>
											<select name="to_city" id="to_city" class="cs-select cs-skin-border">
												<option value="" disabled selected>Ex:Bel,Den</option>
												@foreach($flightSearches as $flightSearch)
												<option value="{{$flightSearch->to_city}}">{{$flightSearch->to_city}}</option>
												@endforeach
											</select>
										</div>
									</div>

									<div class="col-xxs-12 col-xs-6 mt alternate">
										<div class="input-field">
											<label for="departure_date">Departure Date:</label>
											<input type="date" class="form-control" name="departure_date"  placeholder="mm/dd/yyyy"/>
										</div>
									</div>
									<div class="col-xxs-12 col-xs-6 mt alternate">
										<div class="input-field">
											<label for="arrival_date">Arrival Date:</label>
											<input type="date" class="form-control" name="arrival_date"  placeholder="mm/dd/yyyy"/>
										</div>
									</div>

									<div class="col-xxs-12 col-xs-6 mt">
									<div class="input-field">
										<label for="adult">Adult</label>
										<select name="adult" id="adult" class="cs-select cs-skin-border">
											<option value="" disabled selected></option>
											@foreach($flightSearches as $flightSearch)
											<option value="{{$flightSearch->adult}}">{{$flightSearch->adult}}</option>
											@endforeach
										</select>
									</div>
								</div>

								<div class="col-xxs-12 col-xs-6 mt">
								<div class="input-field">
									<label for="child">Child</label>
									<select name="child" id="child" class="cs-select cs-skin-border">
										<option value="" disabled selected></option>
										@foreach($flightSearches as $flightSearch)
										<option value="{{$flightSearch->child}}">{{$flightSearch->child}}</option>
										@endforeach
									</select>
								</div>
							</div>


									<div class="col-xs-12">
										<input type="submit" class="btn btn-primary btn-block" id="btnSearch" value="Search Flight">
									</div>


									</form>


							</div> <!--end of row-->

							 </div> <!--end of tabl panel-->

							</div> <!--end of tab content-->


						</div> <!--end of tabulation -->

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
			<div class="col-md-12 text-center animate-box">
				<p><a class="btn btn-primary btn-outline btn-lg" href="#">See All Offers <i class="icon-arrow-right22"></i></a></p>
			</div>
		</div>
	</div>
</div>

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


		</div>
	</div>
</div>


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


@endsection
