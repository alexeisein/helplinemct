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
	<div class="col-lg-8" style="margin-top: 200px;">
		<h2 class="text-center">{{ $treatment->name }}</h2><hr>
		<div style="width: 320px; height: 250px;" id="treatment-img">
			<img src="" alt="{{ $treatment->name }}" title="{{ $treatment->name }}" style="height: 100%; width: 100%;" class="img-thumbnail">
		</div>
		<hr>
		<div><p></p></div>

	</div>


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

