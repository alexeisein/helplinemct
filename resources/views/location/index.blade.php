@extends('layouts.main')


@section('title', 'Locations')

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
	<div style="margin-top: 200px;"><h1 class="text-center" style="font-family:'Helvetica neue'; font-weight: lighter; "><i class="fa fa-map-marker-alt text-danger"></i> Locations</h1><hr></div><br>

	{{-- @include('partials.treatment_search') --}}

	<div class="col-lg-7">

		@include('partials.flash.success_delete')
		
		<div class="panel panel-info">
			<div class="panel-heading"><i class="fa fa-map-marker-alt"></i> LIST OF LOCATIONS</div>
			<table class="table table-bordered table-striped table-hover table-dark">
				<thead class="thead-dark">
					<tr class="text-primary">
						<th scope="col">#No</th>
						<th scope="col">City</th>
						<th scope="col">State</th>
						<th scope="col">Country</th>
						<th scope="col" class="text-danger text-right">ACTION</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($locations as $location)
						<tr>
							<th scope="row">{{ $location->id }}</th>
							<td>{{ $location->city }}</td>
							<td>{{ $location->state }}</td>
							<td>{{ $location->country }}</td>
							<td><a class="btn btn-warning btn-sm btn-block" href="{{ route('location.edit', $location->id) }}">Edit</a></td>
							<td>
								<form action="{{ route('location.destroy', $location->slug) }}" method="post" class="form-vertical">
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

	<div class="col-lg-5">

		@include('partials.flash.success_create')
		@include('partials.flash.error')
		@include('partials.location.add')

	</div>

	<div class="text-center">{{ $locations->links() }}</div>
	<br><hr><br>

	<div class="row">
        @include('partials.enquiry_form')
    </div>

@include('partials.copyright')

@endsection

