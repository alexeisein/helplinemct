@extends('layouts.main')

@section('title', 'About Us')

@section('content')

	{{-- Navigation --}}
	<div id="home" class="w3ls-banner"> 
		<!-- header -->
		<div class="header-w3layouts"> 
			<!-- Navigation -->
			@include('partials.nav') 
		</div>	
	</div>	
	{{-- Navigation --}}
	<div class="line"></div>
	<div class="about" id="about">
		<div class="container">
			<div class="w3ls-heading">
				<h3>About</h3>
			</div>
			<div class="col-md-6 about-left">
				<div class="w3labout-img boxw3-agile"> 
					<img src="{{ asset('images/about.jpg') }}" alt="" class="img-responsive" />
					<div class="agile-caption">
						<h3>Helpline Medical care &amp; Tour</h3>
						<p>Assisting people in need of Medical &amp; Surgical Treatment in India</p>
					</div> 
				</div>
			</div>
			<div class="col-md-6 about-right">
				<h2>What you need to know</h2>
				<p style="font-family: 'Raleway">India is the preferred destination for millions of international patients for medical &amp; surgical treatment for effective recuperration &amp; at the most affordable rates than anywhere else in the world without compromising standards.<br>Helpline Medical Care Pvt  assists you with free medical advice, expert opinion from reputed specialist Doctors and also help with your travel &amp; stay.<br><br>

	We operate under the international Patient division in internationally accredited Hospitals in India.<br>
	Our primary assignment is to profer assistance to international patients who are considering traveling to India for medical treatments, surgeries or any other medical reason.<br><br></p>
				{{-- <a href="#myModal" class="w3more" data-toggle="modal"><i class="fa fa-mail-forward" aria-hidden="true"></i> Read more</a> --}}
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	@include('partials.copyright')
@endsection
