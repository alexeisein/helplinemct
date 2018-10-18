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
	<div style="margin-top: 200px;">
		<div class="col-lg-1">@include('partials.modal.addtreatment')</div>
		<h1 class="text-center" style="font-family:'Helvetica neue'; font-weight: lighter; "><i class="fas fa-hospital text-success"></i> Medical Treatments & Cost</h1><hr>
	</div><br>

{{-- Bread Crumbs --}}
	@include('partials.breadcrumbs.index',['indexTitle' => 'Treatment'])
	<br>
	{{-- @include('partials.treatment_search') --}}
	@include('partials.flash.error')
	@include('partials.flash.success_create')
	@include('partials.flash.success_delete')

	<div class="row">
		<div class="col-lg-12">
			<table class="table">
				<thead style="background-color: #d9d9d9; text-shadow: 1px 1px #fff;">
					<tr>
						<th>#No</th>
						<th>Name</th>
						<th>Cost (USD)</th>
						<th>Description</th>
						<th>Photo</th>
						<th>Number Of Travellers</th>
						<th>In-patient Stay Duration</th>
						<th>Out-patient Stay Duration</th>
						<th>Total Stay Duration</th>
						<th class="text-danger"><i class="fa fa-switch"></i> Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($treatments as $treatment)
						<tr>
							<td>{{ $treatment->id }}</td>
							<td><a href="{{ route('treatment.show', $treatment->slug) }}">{{ $treatment->name }}</a></td>
							<td><a href="{{ route('treatment.show', $treatment->slug) }}">{{ number_format($treatment->cost) }}</td></a>
							<td><a href="{{ route('treatment.show', $treatment->slug) }}">{{ str_limit($treatment->description),200 }}</td></a>
							<td>
								<div style="width: 160px; height: 110px;">
									<a href="{{ route('treatment.show', $treatment->slug) }}">
										<img src="{{ asset('storage/treatments/'.$treatment->image) }}" alt="{{ $treatment->name }}" class="img-responsive img-rounded" style="width: 100%; height: 100%;">
									</a>
								</div>
							</td>
							<td><a href="{{ route('treatment.show', $treatment->slug) }}">{{ $treatment->travellers }}</td></a>
							<td><a href="{{ route('treatment.show', $treatment->slug) }}">{{ $treatment->inpatient_duration }}</td></a>
							<td><a href="{{ route('treatment.show', $treatment->slug) }}">{{ $treatment->outpatient_duration }}</td></a>
							<td><a href="{{ route('treatment.show', $treatment->slug) }}">{{ $treatment->total_duration }}</td></a>
							<td>
								<a class="btn btn-warning btn-sm btn-block" href="{{ route('treatment.edit', $treatment->slug) }}">Edit</a>
								<br>
								<form action="{{ route('treatment.destroy', $treatment->slug) }}" method="post" class="form-vertical">
									@csrf
									@method('delete')
									{{-- {{ method_field('delete') }} --}}
									<div class="form-group">
										<input type="submit" value="Delete" class="btn btn-danger btn-sm btn-block">
									</div>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

	<div class="text-center">{{ $treatments->links() }}</div>
	<br><hr><br>

	<div class="col-lg-1">@include('partials.modal.addtreatment')</div>

	<div class="row">
        @include('partials.enquiry_form')
    </div>

@include('partials.copyright')

@endsection

