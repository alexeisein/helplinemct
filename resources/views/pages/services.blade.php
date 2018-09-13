@extends('layouts.main')

@section('title', 'What We Do')

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
<div class="line">
</div>
	<div class="demo" id="services">    
		<div class="container"> 
						<div class="w3ls-heading">
							<h3>What We Do</h3>
						</div>
		<div class="horizontalTab" id="horizontalTab">
			<ul class="resp-tabs-list list-group">
				<li class="list-group-item text-center">Int. Division</li>
				<li class="list-group-item text-center">Concierge</li>
				<li class="list-group-item text-center">Language</li>
				<li class="list-group-item text-center">Medical opinion &amp; Visa invitation</li>
				<li class="list-group-item text-center">Int. Cuisine</li>
				<li class="list-group-item text-center">Prayer Room</li>
				<li class="list-group-item text-center">Int. Television</li>
				<li class="list-group-item text-center">Travel &amp; Tour</li>
				<li class="list-group-item text-center">Medical/Legal</li>
				<li class="list-group-item text-center">Patient Rooms</li>
				<li class="list-group-item text-center">Post Travel Medical Care</li>
			</ul>
			<div class="resp-tabs-container">
				<!-- section -->
				<div class="bhoechie-tab-content active">
					<div class="services-grids">
						<div class="ser-img">
							<img src="{{ asset('images/international-patients.jpg') }}" title="service" alt="" />
						</div>
						<div class="ser-info">
							<h3>The International Division</h3>
							<p>We understand that every patient’s needs and requirements are different, and hence to provide the best patient services possible, the international division assists our patients from start to finish, patient representatives are highly trained and act as a point of contact for all your questions and requirements.
							</p>
							<a href="#myModal" data-toggle="modal"><i class="fa fa-mail-forward" aria-hidden="true"></i> Know More</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>

				<div class="bhoechie-tab-content active">
					<div class="services-grids">
						<div class="ser-img">
							<img src="{{ asset('images/concierge.jpg') }}" title="service" alt="" />
						</div>
						<div class="ser-info">
							<h3>Concierge Services</h3>
							<p>Our patients and their caretakers are received at the airport by our Airport Manager, and a complimentary transport service is provided to the accommodation/hospital on availability. 
							</p>
							<a href="#myModal" data-toggle="modal"><i class="fa fa-mail-forward" aria-hidden="true"></i> Know More</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>

				<div class="bhoechie-tab-content active">
					<div class="services-grids">
						<div class="ser-img">
							<img src="{{ asset('images/language.png') }}" title="service" alt="" />
						</div>
						<div class="ser-info">
							<h3>Language Interpretation Services</h3>
							<p>We have patient service representatives who can speak in Arabic, French, and Bengali. We also help in providing other language translation services on request and availability. 
							</p>
							<a href="#myModal" data-toggle="modal"><i class="fa fa-mail-forward" aria-hidden="true"></i> Know More</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>

				<div class="bhoechie-tab-content active">
					<div class="services-grids">
						<div class="ser-img">
							<img src="{{ asset('images/visa.jpg') }}" title="service" alt="" />
						</div>
						<div class="ser-info">
							<h3>Medical opinion &amp; Visa invitation</h3>
							<p>International patients can seek a medical opinion from our Health’s team of experienced and qualified doctors in a wide range of medical specialities. The International division also provides patients with treatment and visa invitation letters to help patients obtain a medical visa. 
							</p>
							<a href="#myModal" data-toggle="modal"><i class="fa fa-mail-forward" aria-hidden="true"></i> Know More</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>

				<div class="bhoechie-tab-content active">
					<div class="services-grids">
						<div class="ser-img">
							<img src="{{ asset('images/cuisine.jpg') }}" title="service" alt="" />
						</div>
						<div class="ser-info">
							<h3>International Cuisine</h3>
							<p>The meals served to patients are supervised by the dietary department. We offer healthy, international cuisines including continental, Middle Eastern and African. 
							</p>
							<a href="#myModal" data-toggle="modal"><i class="fa fa-mail-forward" aria-hidden="true"></i> Know More</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!--  section -->
				<div class="bhoechie-tab-content">
					<div class="services-grids">
						<div class="ser-img">
							<img src="{{ asset('images/prayer.jpg') }}" title="service" alt="" />
						</div>
						<div class="ser-info">
							<h3>Prayer Place</h3>
							<p>We understand and respect all beliefs and faith of patients and their attendees. The hospitals feature prayer rooms suitable for all. 
							</p>
							<a href="#myModal" data-toggle="modal"><i class="fa fa-mail-forward" aria-hidden="true"></i> Know More</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>

				<!--  search -->
				<div class="bhoechie-tab-content">
					<div class="services-grids">
						<div class="ser-img">
							<img src="{{ asset('images/television.jpg') }}" title="service" alt="" />
						</div>
						<div class="ser-info">
							<h3>International Television</h3>
							<p>We understand the need for patients to keep updated with local and international news and events. Our suites feature televisions broadcasting International channels including Al Jazeera, France 5, BBC, etc.
							</p>
							<a href="#myModal" data-toggle="modal"><i class="fa fa-mail-forward" aria-hidden="true"></i> Know More</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="bhoechie-tab-content">
					<div class="services-grids">
						<div class="ser-img">
							<img src="{{ asset('images/travel.jpg') }}" title="service" alt="" />
						</div>
						<div class="ser-info">
							<h3>Travel &amp; Tour Assistance</h3>
							<p>From assisting in booking air, train and bus tickets, providing sightseeing information, to processing Medical Form (MEDA) and currency exchange, the dedicated Travel Desk at every NH facility provides all the necessary travel assistance to our patients.
							</p>
							<a href="#myModal" data-toggle="modal"><i class="fa fa-mail-forward" aria-hidden="true"></i> Know More</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="bhoechie-tab-content">
					<div class="services-grids">
						<div class="ser-img">
							<img src="{{ asset('images/legal.jpg') }}" title="service" alt="" />
						</div>
						<div class="ser-info">
							<h3>Medical/Legal Assistance</h3>
							<p>Our patient representatives provide patients and their families assistance with various legal and administrative formalities such as FRRO, Visa extension, police verification to name a few. 
							</p>
							<a href="#myModal" data-toggle="modal"><i class="fa fa-mail-forward" aria-hidden="true"></i> Know More</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>

				<div class="bhoechie-tab-content">
					<div class="services-grids">
						<div class="ser-img">
							<img src="{{ asset('images/patient-room.jpg') }}" title="service" alt="" />
						</div>
						<div class="ser-info">
							<h3>Patient Rooms</h3>
							<p>We provide a wide choice of patient rooms to suit individual requirements; from well-furnished, world-class individual suites at the Platinum wing, state-of-the-art deluxe private rooms to comfortable shared rooms.
							</p>
							<a href="#myModal" data-toggle="modal"><i class="fa fa-mail-forward" aria-hidden="true"></i> Know More</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>

				<div class="bhoechie-tab-content">
					<div class="services-grids">
						<div class="ser-img">
							<img src="{{ asset('images/post-medical-care.jpg') }}" title="service" alt="" />
						</div>
						<div class="ser-info">
							<h3>Post Travel Medical Care</h3>
							<p>The international division maintains long-term relationships with patients to ensure continuity of care, and assists in setting up communication between doctors and patients. 
							</p>
							<a href="#myModal" data-toggle="modal"><i class="fa fa-mail-forward" aria-hidden="true"></i> Know More</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@include('partials.modal')

@include('partials.copyright')
@endsection
