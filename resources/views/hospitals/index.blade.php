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
		<hr>

		@include('partials.hsp_search')


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
							<h4><b>DIRECTION:</b></h4><p> {{ str_limit($hospital->address) }}</p>
						</div><hr>

						<div>
							<h4><b>ABOUT:</b></h4></p> {{ str_limit($hospital->about) }} <br>
								<a href="{{ route('hospital.show', $hospital->slug) }}" class="btn btn-default btn-sm">Contine ...</a>
							</p>
						</div><hr>

						<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12"><h4><b>LOCATION:</b></h4>
							<p><b>City:</b> {{ str_limit($hospital->location->city) }}</p>
						 	<p><b>State:</b> {{ str_limit($hospital->location->state) }}</p>
							<p><b>Country:</b> {{ str_limit($hospital->location->country) }}</p>
						</div><hr>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<button class="btn btn-sm btn-danger pull-right">Make Enquiry</button>
						</div>
					</div>
        		<br><br>
        	@endforeach

		</div>

	</div>

	<div class="text-center">{{ $hospitals->appends(['search' => $search])->links() }}</div>

@include('partials.copyright')

@endsection

@section('bottomjs')

<script type="text/javascript" src="{{ asset('js/hospital.js') }}"></script>

@stop
