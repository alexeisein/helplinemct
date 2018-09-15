@extends('layouts.main')

@section('title', $hospital->name)

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

		<div class="w3ls-heading">
			<div><h3 style="text-align: left;">{{ $hospital->name }}</h3></div>
			<div class=""><p class="text-warning"><small>{{ $hospital->location->city }}, {{ $hospital->location->state }}</small></p>
			</div><hr>
		</div>
		<br>

		<div class="row">
			{{-- <div class="">
				<img src="{{ asset('storage/hospitals/'.$hospital->image) }}" alt="{{ $hospital->name }}" class="img-thumbnail">
			</div> --}}
			<div id="carousel-example-generic" class="carousel slide col-md-8" data-ride="carousel">
		      <!-- Indicators -->
		      <!-- Wrapper for slides -->
		      <div class="carousel-inner">
		        <div class="item active" style="width: 800px; height: 365px;">
		          <img src="{{ asset('storage/hospitals/'.$hospital->image) }}" style="width: 100%; height: 100%;" alt="{{ $hospital->name }}" class="img-thumbnail">
		          <div class="carousel-caption">
		            <h2>{{ $hospital->name }}</h2>
		          </div>
		        </div>
		      </div>
		    </div>

		    <div class="">
		    	<p><h4 class="text-primary">DIRECTION: </h4>{{ $hospital->address }}</p>
		    </div>
		    <br><hr><br>

		    <div class="">
		    	{{-- <button class="btn btn-lg btn-danger">Make Enquiry</button> --}}
		    	@include('partials.modal_enquiry')
		    </div>

		</div><br>
		
		<div class="">
			<p class="text-danger">Established In: {{ $hospital->established }}  &nbsp;|&nbsp;  Number Of Beds: {{ $hospital->beds }}  &nbsp;|&nbsp;   Number Of Icu Beds: {{ $hospital->icu_beds }}</p>
		</div><hr>

		<div class="">
			<h3 class="text-primary">ABOUT HOSPITAL</h3><hr><p>{{ $hospital->about }}</p>
		</div>
		<hr><br>

		<div class="">
			<h3 class="text-primary">INFRASTRUCTURES</h3><hr><p>{{ $hospital->infrastructures }}</p>
		</div>
	</div>
	<br><br><hr>

{{-- Show SIMILAR HOSPITAL --}}
	<div class="container">
		<div><h2 class="text-primary text-center">OTHER HOSPITALS</h2></div><hr>
		@foreach ($OterHospitals as $OterHospital)
			<div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-12 filter hdpe">
				<div class="col-12-lg col-md-12 col-sm-12 col-xs-12">
					<a href="{{ route('hospital.show', $OterHospital->slug) }}"><h4>{{ $OterHospital->name }}</h4></a>
				</div>

				<div class="col-xs-12">
					<a href="{{ route('hospital.show', $OterHospital->slug) }}"><img src="{{ asset('storage/hospitals/'.$OterHospital->image) }}" style="" class="img-thumbnail" alt="{{ $OterHospital->name }}"></a>
				</div>
			</div>
		@endforeach

		<div class="text-center">{{ $OterHospitals->links() }}</div>
	</div>

	<br><hr><br>

	@include('partials.enquiry_form')


@include('partials.copyright')

@endsection

@section('bottomjs')

<script type="text/javascript" src="{{ asset('js/hospital.js') }}"></script>

@stop

