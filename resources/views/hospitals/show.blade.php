@extends('layouts.main')

@section('title', $hospital->name)

<style>
	.hsp-show h3{
		background-color: #fff !important;
		padding: 20px; font-weight: bolder;
	}
	.facilities{
		margin-top: 20px;
	}
	.facilities ul{
		font-size: 17px;
	}
	.hsp-show p{
		font-size: 20px !important;
		text-shadow: 1px 1px #fff;
		/*background-color: #d9d9d9;*/
	}
	.facilities h4{
		font-size: 17px !important;
		/*text-transform*/
	}
</style>

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

		@include('partials.flash.success_create')

		<div class="w3ls-heading">
			<div><h3 style="text-align: left;">{{ $hospital->name }}</h3></div>
			<div class=""><p class="text-warning"><small>{{ $hospital->location->city }}, {{ $hospital->location->state }}</small></p>
			</div>

			@auth
				@if (Auth::user()->permission == 'admin')
					<div class="pull-right" style="margin-top: -30px;">
						@include('partials.modal.addhospital')
					</div>
					<div class="pull-right" style="margin-top: -30px; margin-right:5%;">
						@include('partials.modal.edithospital')
					</div>
				@endif
			@endauth

			<hr>
		</div>
		<br>
{{-- BREAD CRUMBS --}}
		<div style="border:1px dotted #3e3e3e; padding: 5px; border-radius: 10px;" class="col-lg-12">
			<p class="label label-default" style="letter-spacing: 2px;"><a href="{{ route('homepage') }}" style="color: #fff;"><i class="fa fa-home"></i> Home</a></p>
			<p class="label label-default" style="letter-spacing: 2px;"><a href="{{ route('hospital.index') }}" style="color: #fff;">Hospitals</a></p>
			<p class="label label-info" style="letter-spacing: 2px;color: #fff;">{{ $hospital->name }}</p>
		</div>

		<div class="col-lg-12">
			<br>
		</div>

		<div class="row">
			<div id="carousel-example-generic" class="carousel slide col-md-8" data-ride="carousel">
		      <!-- Wrapper for slides -->
		      <div class="carousel-inner">
		        <div class="item active" style="width: 800px; height: 400px;">
		          <a href="{{ URL::to(asset('storage/hospitals/'.$hospital->image)) }}" target="_blank">
		          	<img id="myImg" src="{{ asset('storage/hospitals/'.$hospital->image) }}" style="width: 100%; height: 100%;" alt="{{ $hospital->name }}" class="img-thumbnail"></a>
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
		    	@include('partials.modal.enquiry')
		    </div>

		</div><br>
		
		<div class="">
			<p class="text-danger">Established In: {{ $hospital->established }}  &nbsp;|&nbsp;  Number Of Beds: {{ $hospital->beds }}  &nbsp;|&nbsp;   Number Of Icu Beds: {{ $hospital->icu_beds }}</p>
		</div><hr>

		<hr><br>

		<div class="well hsp-show">
			<h3 class="text-primary">ABOUT HOSPITAL</h3><hr><p>{{ $hospital->about }}</p>
		</div>
		<hr><br>

		<div class="well hsp-show">
			<h3 class="text-primary">INFRASTRUCTURES</h3><hr><p>{{ $hospital->infrastructure }}</p>
		</div>

		<hr><br>
		<div class="row hsp-show">
			<div class="col-lg-12 well hsp-show"><h3 class="text-primary">FACILITIES</h3></div><br><br>

			<div class="col-lg-2 facilities">
				<h4 class="btn btn-info btn-block"><i class="fa fa-bed"></i> COMFORT</h4><br>
				<ul class="list-unstyled">{!! implode('<li><hr></li>', $comforts) !!}</ul>
			</div>
			<div class="col-lg-2 facilities">
				<h4 class="btn btn-info btn-block"><i class="fa fa-money"></i> MONEY MATTERS</h4><br>
				<ul class="list-unstyled">{!! implode('<li><hr></li>', $money_matters) !!}</ul>
			</div>
			<div class="col-lg-2 facilities">
				<h4 class="btn btn-info btn-block"><i class="fas fa-utensils"></i> FOOD</h4><br>
				<ul class="list-unstyled">{!! implode('<li><hr></li>', $foods) !!}</ul>
			</div>
			<div class="col-lg-2 facilities">
				<h4 class="btn btn-info btn-block"><i class="fa fa-stethoscope"></i> TREATMENT RELATED</h4><br>
				<ul class="list-unstyled">{!! implode('<li><hr></li>', $treatment_relateds) !!}</ul>
			</div>
			<div class="col-lg-2 facilities">
				<h4 class="btn btn-info btn-block"><i class="fa fa-language"></i> LANGUAGE</h4><br>
				<ul class="list-unstyled">{!! implode('<li><hr></li>', $languages) !!}</ul>
			</div>
			<div class="col-lg-2 facilities">
				<h4 class="btn btn-info btn-block"><i class="fa fa-car"></i> TRANSPORTATION</h4><br>
				<ul class="list-unstyled">{!! implode('<li><hr></li>', $transportations) !!}</ul>
			</div>
			
				<div class="label label-default"></div>
		</div>
	</div>
	<br><br><hr>

{{-- Show SIMILAR HOSPITAL --}}
	<div class="container">
		<div class="well text-primary text-center"><h2><strong>OTHER HOSPITALS</strong></h2></div><hr>
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

	@include('partials.modal.enquiry')


@include('partials.copyright')

@endsection

@section('bottomjs')

<script type="text/javascript" src="{{ asset('js/hospital.js') }}"></script>

@stop

