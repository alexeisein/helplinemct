@extends('layouts.main')


@section('title', 'Edit Location')

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

		@include('partials.flash.success_update')
		@include('partials.flash.error')

		<div class="panel panel-info">
			<div class="panel-heading">
				<span class="col-lg-6"><i class="fa fa-map-marker-alt"></i> LIST OF LOCATIONS</span>
				<span class="col-lg-2 col-lg-offset-4"><a class="btn btn-info btn-sm" href="{{ route('location.index') }}"><i class="fa fa-arrow-circle-left"></i> BACK</a></span>
				<div class="clearfix"></div>
			</div>
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
					<tr>
						<form action="{{ route('location.update', $location->id) }}" method="post">
							@csrf
							@method('patch')
						<th scope="row">{{ $location->id }}</th>
						<td class="{{ $errors->has('city') ? ' has-error' : '' }}">
							<input type="text" class="form-control" size="100%" name="city" value="{{ old('city', $location->city) }}">
							@if ($errors->has('city'))
								<span class="help-block"><strong>{{ $errors->first('city') }}</strong></span>
							@endif
						</td>

						<td class="{{ $errors->has('state') ? ' has-error' : '' }}">
							<input type="text" class="form-control" size="100%" name="state" value="{{ old('state', $location->state) }}">
							@if ($errors->has('state'))
								<span class="help-block"><strong>{{ $errors->first('state') }}</strong></span>
							@endif
						</td>
						<td>{{ $location->country }}</td>
						<td>
								<div class="form-group">
									<input type="submit" value="Update" class="btn btn-success btn-sm btn-block">
								</div>
							</form>
						</td>
						<td>
							<form action="{{ route('location.destroy', $location->slug) }}" method="post">
								@csrf
								@method('delete')
								{{-- {{ method_field('delete') }} --}}
								<div class="form-group">
									<input type="submit" value="Delete" class="btn btn-danger btn-sm btn-block">
								</div>
							</form>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div class="col-lg-5">

		@include('partials.flash.success_create')
		@include('partials.flash.error')
		@include('partials.location.add')
		
	</div>

	<br><hr><br>

	<div class="row">
        @include('partials.enquiry_form')
    </div>

@include('partials.copyright')

@endsection

