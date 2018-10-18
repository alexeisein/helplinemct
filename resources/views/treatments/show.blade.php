@extends('layouts.main')


@section('title', $treatment->name)

@section('content')

	{{-- Navigation --}}
	<div id="home" class="w3ls-banner" class="col-lg-12"> 
		<!-- header -->
		<div class="header-w3layouts"> 
			<!-- Navigation -->
			@include('partials.nav') 
		</div>	
	</div>

	{{-- Navigation --}}
	<div style="margin-top: 200px;">
		<h1 class="text-center" style="font-family:'Helvetica neue'; font-weight: lighter; "><i class="fas fa-hospital text-success"></i> {{ $treatment->name }}</h1><hr>
	</div><br>

	@include('partials.breadcrumbs.show',['showTitle' => $treatment->name, 'navUrl' => route('treatment.index'), 'modulName' => 'Treatments'])
	<br><hr>

	<div class="row">
		<div class="col-lg-6">
			<div style="width: 540px; height: 480px;" id="treatment-img">
				<h4><strong class="text-primary">{{ strtoupper($treatment->name) }}</strong></h4><br>
				<a href="{{ URL::to('storage/treatments/'.$treatment->image) }}" target="_blank"><img src="{{ asset('storage/treatments/'.$treatment->image) }}" alt="{{ $treatment->name }}" title="{{ $treatment->name }}" style="height: 100%; width: 100%;" class="img-thumbnail"></a>
			</div>
		</div>

		<div class="col-lg-6">
			<h4><strong class="text-primary"></strong></h4><br>
			<p>{{ $treatment->description }}</p>
		</div>
	</div>

	<br><hr><br>

	@include('partials.enquiry_form')


@include('partials.copyright')

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>

 //    	document.getElementById('treatment').addEventListener('change', function () {
    		
 //    		// alert('hi')

 //    		axios.get('/cost/2', {
	// 		    id: 2,
	// 		  })
	// 		  .then(function (response) {
	// 		    console.log(response);
	// 		  })
	// 		  .catch(function (error) {
	// 		    console.log(error);
	// 		  })
	// 		  .then(function () {
	// 		    // always executed
	// 		  });
    	
	// });

</script>

@endsection

