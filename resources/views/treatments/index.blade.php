@extends('layouts.main')


@section('title', 'Treatments')

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
	<div style="margin-top: 200px;"><h1 class="text-center" style="font-family:'Helvetica neue'; font-weight: lighter; "><i class="fas fa-bed fa-heading"></i> Medical Treatments & Cost</h1><hr></div><br>

	<div class="">
		<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>Cost</th>
					<th>Number Of Travellers</th>
					<th>In-patient Stay Duration</th>
					<th>Out-patient Stay Duration</th>
					<th>Total Stay Duration</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($treatments as $treatment)
					<tr>
						<td><a href="{{ route('treatment.show', $treatment->slug) }}">{{ $treatment->name }}</a></td>
						<td>{{ $treatment->cost }}</td>
						<td>{{ $treatment->travellers }}</td>
						<td>{{ $treatment->inpatient_duration }}</td>
						<td>{{ $treatment->outpatient_duration }}</td>
						<td>{{ $treatment->total_duration }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="text-center">{{ $treatments->links() }}</div>
	<br><hr><br>

	<div class="row">
        @include('partials.enquiry_form')
    </div>

@include('partials.copyright')

@endsection

