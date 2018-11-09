@extends('layouts.main')

@section('title', 'Helpline Medical Care & Tour')

@section('content')

<style>
	.home_img{
		border: 3px solid lightblue;
		padding: 30px;
		border-radius: 50%;
		transition: all 0.4s ease-out;
		width: 200px;
		height: 200px;
	}
	.home_img:hover{
		padding: 10px;
	}

</style>

	<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
		<!-- banner -->
		<div id="home" class="w3ls-banner"> 
			<!-- header -->
			<div class="header-w3layouts"> 
				<!-- Navigation -->
				@include('partials.nav') 
			</div>
			<!--Slider-->
				@include('partials.slider')
			<!--//banner-->
			
		</div>

		@include('partials.flash.access_error')
		<!-- //banner --> 
		<br><br>
		<div class="w3ls-heading">
			<h3>
				WHY CHOOSE US?
			</h3>
		</div>
		<hr>

	<div class="container">
		<div class="col-md-3 col-sm-6 col-xs-12 home_img_div">
			<img class="home_img" src="{{ asset('images/icons/trusted.jpg') }}" alt=""><br><br>
			<h3 class="text-center text-warning">Trusted</h3><br>
			<p>
				Care meets cure. Choose from a pool of highly skilled, renowned and credible doctors.
			</p>
		</div>

		<div class="col-md-3 col-sm-6 col-xs-12 home_img_div">
			<img class="home_img" src="{{ asset('images/icons/health.jpg') }}" alt=""><br><br>
			<h3 class="text-center text-warning">Healthcare Simplified!</h3><br>
			<p>
				Health solutions at the click of a button. Yes, it’s that simple.
			</p>
		</div>

		<div class="col-md-3 col-sm-6 col-xs-12 home_img_div">
			<img class="home_img" src="{{ asset('images/icons/privacy.jpg') }}" alt=""><br><br>
			<h3 class="text-center text-warning">Uncompromised Privacy!</h3><br>
			<p>
				With strong encryption techniques and processes, your data is always safe and confidential.
			</p>
		</div>

		<div class="col-md-3 col-sm-6 col-xs-12 home_img_div">
			<img class="home_img" src="{{ asset('images/icons/onestop.jpg') }}" alt=""><br><br>
			<h3 class="text-center text-warning">One-stop Solution</h3><br>
			<p>
				Whatever be it that you are looking for, we have a ready solution. That too all under the same hood.
			</p>
		</div>
	</div>

	<div class="col-lg-12">
		<br><hr><br>
	</div>

	<div class="containter">
		<div class="row">
			<div class="col-lg-3">
				<h3>Hospitals</h3>
				

			</div>
		</div>
	</div>

	<!-- team -->	<!-- Our specialists -->
	@include('partials.ourteam')
	<!-- //team -->	<!-- //Our specialists -->

	<!-- copyright -->
	@include('partials.copyright')
	<!-- //copyright -->
	
@stop