

<nav class="navbar navbar-default navbar-fixed-top" style="background-color: rgba(25, 25, 25, 0.8); margin-bottom: 100px;">
	{{-- <div>
		<a href="{{ url('/') }}">
			<img src="{{ asset('images/logo/logo.png') }}" alt="Helpline Medical Care &amp; Tour" style="width: 150px; height: 50px;">
		</a>
	</div> --}}
	<div class="container">
		
		<div class="navbar-header page-scroll">
			<div class="text-center">
				<a href="{{ url('/') }}">
					<img src="{{ asset('images/logo/logo.png') }}" alt="Helpline Medical Care &amp; Tour" style="width: 150px; height: 50px;">
				</a>
			</div>

			<h1><a class="navbar-brand" href="{{ url('/') }}"><small style="color: lightblue">Helpline Medical Care &amp; Tour</small></a></h1>

		</div> 

		<div class="pull-right" style="color: #fff; font-size: 15px;">
			<div>
				<a style="color: #fff; border: 1px solid #d9d9d9; padding: 3px; border-radius: 10px;" href="mailto:hello@helplinemct.com"><i class="fa fa-envelope"></i> hello@helplinemct.com</a>
				
				<p style="border: 1px solid #d9d9d9; padding: 3px; border-radius: 10px;"><i class="fa fa-phone"></i>+91-9971995455</p>
			</div>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav navbar-right cl-effect-15">
				<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
				<li class="hidden"><a class="page-scroll" href="#page-top"></a>	</li>
				<li><a class="page-scroll scroll" href="{{ url('/') }}">Home</a></li>
				<li><a class="page-scroll scroll" href="{{ route('doctor.index') }}">Doctors</a></li>
				<li><a class="page-scroll scroll" href="{{ route('treatment.index') }}">Treatments</a></li>
				{{-- <li><a class="page-scroll scroll" href="#specialities">Specialities</a></li> --}}
				<li><a class="" href="{{ route('hospital.index') }}">Hospitals</a></li>
				<li><a class="" href="">Blog</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Specialities <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a class="page-scroll scroll" href="{{ url('/specialities') }}">Specialities</a></li>
						<li><a class="page-scroll scroll" href="{{ url('/keyareas') }}">Key Areas</a></li>
					</ul>
				</li>

				<li><a class="page-scroll scroll" href="{{ url('/services') }}">Services</a></li>
				{{-- <li><a class="page-scroll scroll" href="#team">Team</a></li> --}}
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a class="page-scroll scroll" href="{{ url('/facilities') }}">Facilities</a></li>
						<li><a class="page-scroll scroll" href="{{ url('/testimonies') }}">Testimonials</a></li>
						<li><a id="acc" class="page-scroll scroll" href="{{ url('/accommodation') }}">Accommodation</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Get in Touch <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a class="page-scroll scroll" href="{{ url('/appointment') }}">Appointment</a></li>
						<li><a class="page-scroll scroll" href="{{ url('/contact') }}">Contact</a></li>
					</ul>
				</li>
				
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</nav> 
<div class="clearfix"></div>