@extends('frontend.layouts.master')

@section('title','DropshippingSupplier || About Us')

@section('main-content')

	<!-- Breadcrumbs -->
	<section  class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.html">{{ __('Home')}}<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.html">{{ __('About Us')}}</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Breadcrumbs -->
				<section class="container margin_60_35 add_bottom_30">
					<div class="main_title">
						<h2>{{ __('About Us')}}</h2>
						<p>Euismod phasellus ac lectus fusce parturient cubilia a nisi blandit sem cras nec tempor adipiscing rcu ullamcorper ligula.</p>
					</div>
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-5">
							<div class="box_about">
								<h2>Top Products</h2>
								<p class="lead">Est falli invenire interpretaris id, magna libris sensibus mel id.</p>
								<p>Per eu nostrud feugiat. Et quo molestiae persecuti neglegentur. At zril definitionem mei, vel ei choro volumus. An tota nulla soluta has, ei nec essent audiam, te nisl dignissim vel. Ex velit audire perfecto pro, ei mei doming vivendo legendos. Cu sit magna zril, an odio delectus constituto vis. Vis ludus omnesque ne, est veri quaeque ad.</p>
								<img src="{{asset('photos/arrow_about.png')}}" alt="" class="arrow_1">
							</div>
						</div>
						<div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
								<img src="{{asset('photos/about_1.svg')}}" alt="" class="img-fluid" width="350" height="268">
						</div>
					</div>
					<!-- /row -->
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-5 pr-lg-5 text-center d-none d-lg-block">
								<img src="{{asset('photos/about_2.svg')}}" alt="" class="img-fluid" width="350" height="268">
						</div>
						<div class="col-lg-5">
							<div class="box_about">
								<h2>Top Brands</h2>
								<p class="lead">Est falli invenire interpretaris id, magna libris sensibus mel id.</p>
								<p>Per eu nostrud feugiat. Et quo molestiae persecuti neglegentur. At zril definitionem mei, vel ei choro volumus. An tota nulla soluta has, ei nec essent audiam, te nisl dignissim vel. Ex velit audire perfecto pro, ei mei doming vivendo legendos. Cu sit magna zril, an odio delectus constituto vis. Vis ludus omnesque ne, est veri quaeque ad.</p>
								<img src="{{asset('photos/arrow_about.png')}}" alt="" class="arrow_2">
							</div>
						</div>
					</div>
					<!-- /row -->
					<div class="row justify-content-center align-items-center ">
						<div class="col-lg-5">
							<div class="box_about">
								<h2>+5000 products</h2>
								<p class="lead">Est falli invenire interpretaris id, magna libris sensibus mel id.</p>
								<p>Per eu nostrud feugiat. Et quo molestiae persecuti neglegentur. At zril definitionem mei, vel ei choro volumus. An tota nulla soluta has, ei nec essent audiam, te nisl dignissim vel. Ex velit audire perfecto pro, ei mei doming vivendo legendos. Cu sit magna zril, an odio delectus constituto vis. Vis ludus omnesque ne, est veri quaeque ad.</p>
							</div>

						</div>
						<div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
								<img src="{{asset('photos/about_3.svg')}}" alt="" class="img-fluid" width="350" height="316">
						</div>
					</div>
					<!-- /row -->
				</section>
				<!-- /container -->
	<!-- About Us -->
	<section class="about-us section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="about-content">
							@php
								$settings=DB::table('settings')->get();
							@endphp
							<p>@foreach($settings as $data) {{$data->description}} @endforeach</p>
							<div class="button">
								<a href="{{route('blog')}}" class="btn">{{ __('Our Blog')}}</a>
								<a href="{{route('contact')}}" class="btn primary">{{ __('Contact Us')}}</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="about-img overlay">
							 <div class="button">
								<a href="https://www.youtube.com/watch?v=nh2aYrGMrIE" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
							</div>
							<img src="@foreach($settings as $data) {{$data->photo}} @endforeach" alt="@foreach($settings as $data) {{$data->photo}} @endforeach">
						</div>
					</div>
				</div>
			</div>
	</section>
	<!-- End About Us -->
	
	<!-- Start Team -->
	{{-- <section id="team" class="team section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Our Expert Team</h2>
						<p>Business consulting excepteur sint occaecat cupidatat consulting non proident, sunt in culpa qui officia deserunt laborum market. </p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- Single Team -->
				<div class="col-lg-3 col-md-6 col-12">
					<div class="single-team">
						<!-- Image -->
						<div class="image">
							<img src="images/team/team1.jpg" alt="#">
						</div>
						<!-- End Image -->
						<div class="info-head">
							<!-- Info Box -->
							<div class="info-box">
								<h4 class="name"><a href="#">Dahlia Moore</a></h4>
								<span class="designation">Senior Manager</span>
							</div>
							<!-- End Info Box -->
							<!-- Social -->
							<div class="social-links">
								<ul class="social">
									<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-behance"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
							<!-- End Social -->
						</div>
					</div>
				</div>	
				<!-- End Single Team -->
				<div class="col-lg-3 col-md-6 col-12">
					<div class="single-team">
						<!-- Image -->
						<div class="image">
							<img src="images/team/team2.jpg" alt="#">
						</div>
						<!-- End Image -->
						<div class="info-head">
							<!-- Info Box -->
							<div class="info-box">
								<h4 class="name"><a href="#">Jhone digo</a></h4>
								<span class="designation">Markeitng</span>
							</div>
							<!-- End Info Box -->
							<!-- Social -->
							<div class="social-links">
								<ul class="social">
									<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-behance"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
							<!-- End Social -->
						</div>
					</div>
				</div>	
				<!-- End Single Team -->
				<div class="col-lg-3 col-md-6 col-12">
					<div class="single-team">
						<!-- Image -->
						<div class="image">
							<img src="images/team/team3.jpg" alt="#">
						</div>
						<!-- End Image -->
						<div class="info-head">
							<!-- Info Box -->
							<div class="info-box">
								<h4 class="name"><a href="#">Zara tingo</a></h4>
								<span class="designation">Web Developer</span>
							</div>
							<!-- End Info Box -->
							<!-- Social -->
							<div class="social-links">
								<ul class="social">
									<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-behance"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
							<!-- End Social -->
						</div>
					</div>
				</div>	
				<!-- End Single Team -->
				<div class="col-lg-3 col-md-6 col-12">
					<div class="single-team">
						<!-- Image -->
						<div class="image">
							<img src="images/team/team4.jpg" alt="#">
						</div>
						<!-- End Image -->
						<div class="info-head">
							<!-- Info Box -->
							<div class="info-box">
								<h4 class="name"><a href="#">David Zone</a></h4>
								<span class="designation">SEO Expert</span>
							</div>
							<!-- End Info Box -->
							<!-- Social -->
							<div class="social-links">
								<ul class="social">
									<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-behance"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
							<!-- End Social -->
						</div>
					</div>
				</div>	
				<!-- End Single Team -->
			</div>	
		</div>
	</section> --}}
	<!--/ End Team Area -->
	
	@include('frontend.layouts.services')
	
	@include('frontend.layouts.newsletter')
	
@endsection