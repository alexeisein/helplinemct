@extends('layouts.main')

@section('title', 'Testimonials')

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

<div class="testimonials" id="testimonials">
	<div class="container">
		<div class="w3ls-heading">
			<h3>Testimonials</h3>
		</div>
		<div class="w3_agileits_testimonial_grids">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3_agileits_testimonial_grid">
								<p><i class="fa fa-quote-right" aria-hidden="true"></i>She had a minor surgery in her country, but unfortunately, the surgeons tampered with her kidneys &amp; damaged them without her knowledge.<br> Her kidneys were already damaged by the time she discovered her doctor's flaws. <br><br>She has successfully done a kidney transplant in India, &amp; she's doing very fine.<i class="fa fa-quote-right" aria-hidden="true"></i></p>
								<img src="{{ asset('images/tina.jpg') }}" alt="Kidney Transplant" class="img-responsive" />
								<h4>Tina Nchedo<span>Kidney Transplant</span></h4>
							</div>
						</li>
						<li>
							<div class="w3_agileits_testimonial_grid">
								<p><i class="fa fa-quote-right" aria-hidden="true"></i>He developed Tonsillitis, hence, couldn't get sound sleep, and he had difficulty in breathing, difficulty in swallowing, sore throat, bad breath and constant fever. <br><br> He had Tonsillectomy surgery by one of the best surgeons in New Delhi. <br>Now, he can enjoy his sleep and carry out his daily activities effectively<i class="fa fa-quote-right" aria-hidden="true"></i></p>
								<img src="{{ asset('images/ahmed.jpg') }}" alt=" " class="img-responsive" />
								<h4>Faz Azi Ahmed<span>Tonsillectomy</span></h4>
							</div>
						</li>
						<li>
							<div class="w3_agileits_testimonial_grid">
								<p><i class="fa fa-quote-right" aria-hidden="true"></i>He sustained a serious injury while doing what he loves the most, football.
								He was taken to several healing places, including traditional bone setters, but all to no avail. The wound wouldn't heal.
								He was referred to helpline medical care by word of mouth, flew to India after receiving and invitation.
								A special team consisting of Orthopedic and Reconstructive Surgeons carried out a knee replacement and a fracture repair surgeries respectively which were successful.
								He went from limping around with a walker to a elbow crutch, then to a simple walking stick to no support at all.<i class="fa fa-quote-right" aria-hidden="true"></i></p>
								<img src="{{ asset('images/haroon.jpg') }}" alt=" " class="img-responsive" />
								<h4>Haroon Ajizada <span>KNEE REPLACEMENT AND A FRACTURE REPAIR</span></h4>
							</div>
						</li>
					</ul>
				</div>
			</section>
			<!-- flexSlider -->
				<script defer src="{{ Asset('js/jquery.flexslider.js') }}"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
		</div>
	</div>
</div>
@include('partials.copyright')
@endsection
