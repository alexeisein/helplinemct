@extends('layouts.main')

@section('title', 'Contact')

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

 <div class="contact" id="contact">
	<div class="container">
		<div class="w3ls-heading text-center">
			<h3><i class="fas fa-envelope text-success"></i> Contact Us</h3>
		</div>
		<hr>
		@include('partials.flash.success_contact')
		@include('partials.flash.error_contact')

		<div class="contact-w3ls">
			<form action="{{ route('page.contact') }}" method="post" autocomplete="on">
				<div class="col-md-7 col-sm-7 contact-left agileits-w3layouts">
					<input type="text" name="fname" placeholder="First Name" value="{{ old('fname') }}">
					<input type="text" class="email" name="lname" placeholder="Last Name" value="{{ old('lname') }}">
					<input type="email"  class="email" name="email" placeholder="Email" value="{{ old('email') }}">
					<input type="text" name="number" placeholder="Mobile Number with Country Code" value="{{ old('number') }}">
					{{-- CAPTCHA RESPONSE --}}
					<input type="hidden" name="g-captcha-response" id="g-captcha-response">
				</div> 
				<div class="col-md-5 col-sm-5 contact-right agileits-w3layouts">
					<textarea name="message" placeholder="Message">{{ old('message') }}</textarea>
					<input type="submit" value="Submit">
				</div>
				<div class="clearfix"> </div>
			{{ csrf_field() }}
			</form>
		</div><hr>

		<div class="contact-top-grids">
			<div class="col-md-6 contact-left-">
				<div class="left-top">
					<h4>Contact information</h4>
					<p><i class="fa fa-calendar" aria-hidden="true"></i><strong>Monday - Saturday <span class="dot">:</span></strong>9:00 A.M to 6:00 P.M ( GMT +5.5)</p>
					<p><i class="fa fa-map-marker" aria-hidden="true"></i><strong class="p">address <span class="dot1">:</span></strong>Helpline Medical Care &amp; Tour ( HMCT ) pvt, New Delhi - 110076, India</p>
					<p><i class="fa fa-phone" aria-hidden="true"></i><strong class="p1">phone <span class="dot2">:</span></strong>(+91)9711897005</p>
					<p><i class="fa fa-envelope" aria-hidden="true"></i><strong class="p2">email <span class="dot3">:</span></strong><a href="mailto:info@helplinemedicalcare.com">info@helplinemedicalcare.com</a></p>
				</div>
				<div class="left-bottom">
					<h4>get connected</h4>
					<p>Kindly fill the form below if you've medical related queries and we will get to you as soon as possible or you can contact us directly by dialing (+91)9971995455. Availability: 9:00 A.M to 6:00 P.M ( GMT +5.5).</p>
					<div class="right-w3l fotw3">
						<ul class="top-links">
							<li><a href="https://www.facebook.com/HelplineMedicalCare/" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/HMCandTour" target="_blank"><i class="fa fa-twitter"></i></a></li>
							{{-- <li><a href="#"><i class="fa fa-google-plus"></i></a></li> --}}
							{{-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> --}}
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-6 contact-right">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.9894276033046!2d77.28037871470309!3d28.54003749501284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce3fe5b666b25%3A0xdd097ac632ec3f2b!2sApollo+Hospital!5e0!3m2!1sen!2sin!4v1520519286818" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

@include('partials.copyright')
@endsection

@section('bottomjs')
	<script>
	grecaptcha.ready(function() {
		grecaptcha.execute('6LcI-3gUAAAAAAB-kIg6LSLu9CCdHu4dTYV8jV7l', {action: 'action_name'})
		.then(function(token) {
			// console.log(token);
			document.getElementById('g-captcha-response').value = token;
		});
	});
	</script>

@endsection
