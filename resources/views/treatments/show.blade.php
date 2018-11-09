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

	@include('partials.breadcrumbs.show', ['navUrl' => route('treatment.index'), 'showTitle' => $treatment->name, 'modulName' => 'Treatments'])<br><br><br>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4 class="text-center"><strong class="text-primary">{{ strtoupper($treatment->name) }}</strong></h4><hr>
			</div>
			<hr>

			<div class="col-lg-6">
				<div style="width: 540px; height: 480px;" id="treatment-img">
					<a href="{{ URL::to('storage/treatments/'.$treatment->image) }}" target="_blank"><img src="{{ asset('storage/treatments/'.$treatment->image) }}" alt="{{ $treatment->name }}" title="{{ $treatment->name }}" style="height: 100%; width: 100%;" class="img-thumbnail"></a>
				</div>
			</div>

			<div class="col-lg-6">
				<p>{{ $treatment->description }}</p>
				<br><hr><br>
				@include('partials.modal.enquiry')
			</div>
			<div class="clearfix"></div><hr>

			<div class="col-lg-12">
				<div class="col-lg-2" style="border:2px solid green; border-radius: 10px; padding:2px;">
					<h3 class="text-center text-primary"><i class="fas fa-money"></i><strong> COST</strong></h3>
					<h4 class="btn btn-success text-center btn-lg btn-block" style="color: #fff;"><strong> {{ $treatment->cost }} USD</strong></h4>
				</div>

				<div class="col-lg-2" style="border:2px solid green; border-radius: 10px; padding:2px;">
					<h3 class="text-center text-primary"><i class="fas fa-users"></i><strong> TRAVELLERS' NO</strong></h3>
					<h4 class="btn btn-success text-center btn-lg btn-block" style="color: #fff;"><strong> {{ $treatment->travellers }} Days</strong></h4>
				</div>

				<div class="col-lg-3" style="border:2px solid green; border-radius: 10px; padding:2px;">
					<h3 class="text-center text-primary"><i class="fas fa-calendar-alt"></i><strong> DURATION IN-PATIENT</strong></h3>
					<h4 class="btn btn-success text-center btn-lg btn-block" style="color: #fff;"></i><strong> {{ $treatment->inpatient_duration }} Days</strong></h4>
				</div>

				<div class="col-lg-3" style="border:2px solid green; border-radius: 10px; padding:2px;">
					<h3 class="text-center text-primary"><i class="fas fa-calendar-alt"></i><strong> DURATION OUT-PATIENT</strong></h3>
					<h4 class="btn btn-success text-center btn-lg btn-block" style="color: #fff;"></i><strong> {{ $treatment->outpatient_duration }} Days</strong></h4>
				</div>
				
				<div class="col-lg-2" style="border:2px solid green; border-radius: 10px; padding:2px;">
					<h3 class="text-center text-primary"><i class="fas fa-calendar-alt"></i><strong> TOTAL DURATION</strong></h3>
					<h4 class="btn btn-success text-center btn-lg btn-block" style="color: #fff;"></i><strong> {{ $treatment->total_duration }} Days</strong></h4>
				</div>
			</div>
		</div>
	</div>

	<br>
	<hr>
	<br>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="well">
					<h1><strong class="text-primary">Doctors In This Treatment</strong></h1>
				</div><br>

				<ul>
					@foreach ($treatment->doctors as $docTreat)
						<div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-12 filter hdpe">
							<div class="col-12-lg col-md-12 col-sm-12 col-xs-12">
								<a href="{{ route('doctor.show', $docTreat->slug) }}"><h4 class="text-center">{{ $docTreat->name }}</h4></a>
							</div>

							<div class="col-xs-12">
								<div>
									<a href="{{ route('doctor.show', $docTreat->slug) }}"><img src="{{ asset('storage/doctors/'.$docTreat->image) }}" style="" class="img-thumbnail" alt="{{ $docTreat->name }}"></a>
								</div>
								<br>

								<div class="text-center">
									<strong>Years Of Experience: </strong><p class="label label-warning">{{ $docTreat->years_experience }}</p>
								</div>
								<br>
								
								<div>
									<span class="btn btn-danger btn-block btn-compose-email"> <h3><i class="fas fa-award" style="color:yellow;"></i> AWARDS <i class="fas fa-award" style="color:yellow;"></i></h3>

			                            <?php $awardArray = explode('.', $docTreat->awards);
			                            echo '<h4>' .count($awardArray) .'</h4>';
			                                for ($i=0; $i < count($awardArray); $i++) { 
			                                    echo '<i class="fas fa-star" style="color:yellow;"></i>';
			                                }
			                            ?>
		                        	</span>
		                        </div>
							</div>
						</div>
					@endforeach
				</ul>
			</div>
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

