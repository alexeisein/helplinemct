@extends('layouts.main')

@section('title', 'Doctors')

@section('extracss')
	<link rel="stylesheet" href="{{ asset('css/search.css') }}">
@stop

@section('topjs')
	<script src="{{ asset('js/search.js') }}"></script>
@endsection

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
	<div class="" style="margin-top: 150px;"><hr>

		<div class="w3ls-heading title-wrap">
			<h3><i class="fa fa-user-md fa-heading"></i> Some Notable Doctors In India</h3>
		</div>
		<hr>

		@include('partials.doc_search')

		<div class="row" style="margin-top: 100px;">

			@include('partials.flash.error')

            @foreach ($doctors as $doctor)
		        
		        <div class="col-md-3 agile_team_grid agile_team_grid2">
				<div class="agile_team_grid_main">
					<a href="{{ route('doctor.show', $doctor->slug) }}"><img src="{{ asset('storage/doctors/dr-ashok-seth.jpg') }}" alt="{{ asset('$doctor->name') }} " class="img-responsive" /></a>
					<div class="p-mask">
						<ul class="social-icons">
							<li><a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a></li>
							<li><a href="#" class="icon-button google"><i class="icon-google"></i><span></span></a></li>
							<li><a href="#" class="icon-button v"><i class="icon-v"></i><span></span></a></li>
							<li><a href="#" class="icon-button pinterest"><i class="pinterest"></i><span></span></a></li>
						</ul>
					</div>
				</div>
				<div class="agile_team_grid1">
					<a href="{{ route('doctor.show', $doctor->slug) }}">
						<h4>{{ $doctor->title .' ' .$doctor->name }}</h4>
						<p>{{ strstr($doctor->dicipline, ' ', true) }}</p>
						<small class="text-warning">{{ $doctor->years_experience }} Years Of Experience</small>
					</a>
				</div>
				{{--  --}}
			</div>
            @endforeach
		</div>
	</div>

	<div class="text-center">{{ $doctors->appends(['search' => $search])->links() }}</div>

@include('partials.copyright')

@endsection

@section('bottomjs')

<script type="text/javascript" src="{{ asset('js/hospital.js') }}"></script>

@stop