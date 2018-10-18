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
		<div class="col-lg-1">@include('partials.modal.addtreatment')</div>
		<h1 class="text-center" style="font-family:'Helvetica neue'; font-weight: lighter; "><i class="fas fa-hospital text-success"></i> Medical Treatments & Cost</h1><hr>
	</div><br>

	{{-- Bread Crumb --}}
	@include('partials.breadcrumbs.show', ['showTitle' => $treatment->name, 'navUrl' => route('treatment.index') ])
	<br><br><br>

	{{-- @include('partials.treatment_search') --}}
	@include('partials.flash.error')
	@include('partials.flash.success_update')
	@include('partials.flash.success_delete')
	@include('partials.flash.success_create')

	<div class="panel panel-info" id="form-body">
		<div class="panel-heading">
			<span class="col-lg-6"><i class="fa fa-map-marker-alt"></i> LIST OF TREATMENTS</span>
			<span class="col-lg-2 col-lg-offset-4"><a class="btn btn-info btn-sm" href="{{ route('treatment.index') }}"><i class="fa fa-arrow-circle-left"></i> BACK</a></span>
			<div class="clearfix"></div>
		</div><br>
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
						<tr>
							<form action="{{ route('treatment.update', $treatment->slug) }}" method="post" enctype="multipart/form-data">
								@csrf
								@method('patch')

							<td>{{ $treatment->id }}</td>
							<td class="{{ $errors->has('name') ? ' has-error' : '' }} col-lg-3">
								<input type="text" class="form-control" size="100%" name="name" value="{{ old('name', $treatment->name) }}">
								@if ($errors->has('name'))
									<span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
								@endif
							</td>

							<td class="{{ $errors->has('cost') ? ' has-error' : '' }} col-lg-3">
								<input type="text" class="form-control" size="100%" name="cost" value="{{ old('cost', intval($treatment->cost)) }}">
								@if ($errors->has('cost'))
									<span class="help-block"><strong>{{ $errors->first('cost') }}</strong></span>
								@endif
							</td>

							<td class="{{ $errors->has('description') ? ' has-error' : '' }}">
								<textarea name="description" cols="58" rows="10" class="form-control">{{ old('description', $treatment->description) }}</textarea>
								@if ($errors->has('description'))
									<span class="help-block"><strong>{{ $errors->first('description') }}</strong></span>
								@endif
							</td>

							<td class="col-lg-2">
								<input type="file" class="form-control btn btn-info " name="image">
								@if ($errors->has('image'))
									<span class="help-block">
										<strong>{{ $errors->first('image') }}</strong>
									</span>
								@endif
								<div style="width: 160px; height: 110px; margin-top: 10px;">
									<img src="{{ asset('storage/treatments/'.$treatment->image) }}" alt="{{ $treatment->name }}" class="img-responsive img-rounded" style="width: 100%; height: 100%;">
								</div>
							</td>

							<td class="{{ $errors->has('no_travellers') ? ' has-error' : '' }} col-lg-3">
								<input type="text" class="form-control" size="100%" name="no_travellers" value="{{ old('no_travellers', $treatment->travellers) }}">
								@if ($errors->has('no_travellers'))
									<span class="help-block"><strong>{{ $errors->first('no_travellers') }}</strong></span>
								@endif
							</td>

							<td class="{{ $errors->has('in_duration') ? ' has-error' : '' }} col-lg-3">
								<input type="text" class="form-control" size="100%" name="in_duration" value="{{ old('in_duration', $treatment->inpatient_duration) }}">
								@if ($errors->has('in_duration'))
									<span class="help-block"><strong>{{ $errors->first('in_duration') }}</strong></span>
								@endif
							</td>

							<td class="{{ $errors->has('out_duration') ? ' has-error' : '' }} col-lg-3">
								<input type="text" class="form-control" size="100%" name="out_duration" value="{{ old('out_duration', $treatment->outpatient_duration) }}">
								@if ($errors->has('out_duration'))
									<span class="help-block"><strong>{{ $errors->first('out_duration') }}</strong></span>
								@endif
							</td>
							
							<td class="{{ $errors->has('total_duration') ? ' has-error' : '' }} col-lg-3">
								<input type="text" class="form-control" size="100%" name="total_duration" value="{{ old('total_duration', $treatment->total_duration) }}">
								@if ($errors->has('total_duration'))
									<span class="help-block"><strong>{{ $errors->first('total_duration') }}</strong></span>
								@endif
							</td>

							<td>
								<div class="form-group">
									<input type="submit" value="Update" class="btn btn-success btn-sm btn-block">
								</div>
							</form>
						
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
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<br><hr><br>

	<div class="col-lg-1">@include('partials.modal.addtreatment')</div>

	<div class="row">
        @include('partials.enquiry_form')
    </div>

@include('partials.copyright')

@endsection

