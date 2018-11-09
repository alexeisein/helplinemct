@extends('layouts.main')

@section('title', 'Hospitals')

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
			<h3><i class="far fa-hospital fa-heading"></i> Hospitals In India</h3>
		</div>
		
		@auth
			@if (Auth::user()->permission == 'admin')
				@include('partials.modal.addhospital')</div>
			@endif
		@endauth
		
		<br>
		@include('partials.flash.success_create')
		<hr>

		@include('partials.hsp_search')

		{{-- BREAD CRUMBS --}}
		<div style="border:1px dotted #3e3e3e; padding: 5px; border-radius: 10px; margin-top: 60px;" class="col-lg-12">
			<p class="label label-default" style="letter-spacing: 2px;"><a href="{{ route('homepage') }}" style="color: #fff;"><i class="fa fa-home"></i> Home</a></p>
			<p class="label label-info" style="letter-spacing: 2px;color: #fff;">Hospitals</p>
		</div>

		<div class="col-lg-12">
			<br>
		</div>


		<div class="row" style="margin-top: 100px;">
		{{-- <div align="center">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="hdpe">HDPE Pipes</button>
            <button class="btn btn-default filter-button" data-filter="sprinkle">Sprinkle Pipes</button>
            <button class="btn btn-default filter-button" data-filter="spray">Spray Nozzle</button>
            <button class="btn btn-default filter-button" data-filter="irrigation">Irrigation Pipes</button>
        </div>
        <br/> --}}
            @foreach ($hospitals as $hospital)
					<div class="row">
	            		<div class="gallery_product col-lg-8 col-md-8 col-sm-8 col-xs-12 filter hdpe">
							<div class="col-12-lg col-md-12 col-sm-12 col-xs-12">
								<a href="{{ route('hospital.show', $hospital->slug) }}"><h2>{{ $hospital->name }}</h2></a>
							</div>

							<div class="col-12-lg col-md-12 col-sm-12 col-xs-12">
								<p><strong class="text-warning"><small>Established in: {{ $hospital->established }} | Number of Beds : {{ $hospital->beds }}</small></strong> </p>
							</div>

							<div id="img-wrap" class="col-xs-12">
								<a href="{{ route('hospital.show', $hospital->slug) }}"><img src="{{ asset('storage/hospitals/'.$hospital->image) }}" style="width: 100%; height: 100%;" class="img-thumbnail" alt="{{ $hospital->name }}"></a>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 well" id="well">
							<div>
								<h4 class="text-primary"><b>DIRECTION:</b></h4><p> {{ str_limit($hospital->address) }}</p>
							</div><hr>

							<div>
								<h4 class="text-primary"><b>ABOUT:</b></h4></p> {{ str_limit($hospital->about) }} <br><br>
									<a href="{{ route('hospital.show', $hospital->slug) }}" class="btn btn-info btn-sm">Contine Reading [...]</a>
								</p>
							</div><hr>

							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border-bottom:1px solid #d9d9d9; padding-bottom: 10px; margin-bottom: 10px;"><h4 class="text-primary"><b>LOCATION:</b></h4>
								<p><b>City:</b> {{ str_limit($hospital->location->city) }}</p>
							 	<p><b>State:</b> {{ str_limit($hospital->location->state) }}</p>
								<p><b>Country:</b> {{ str_limit($hospital->location->country) }}</p>
							</div>

							@include('partials.modal.enquiry')

						</div>
					</div>
					<div class="col-lg-12" style="border-bottom:2px solid #d9d9d9; margin-bottom: 40px;"></div>
        	@endforeach

		</div>

	</div>

	<div class="text-center">{{ $hospitals->appends(['search' => $search])->links() }}</div>
	<br><br>

	@include('partials.enquiry_form')

@include('partials.copyright')

@endsection

@section('bottomjs')

<script type="text/javascript" src="{{ asset('js/hospital.js') }}"></script>

@stop

