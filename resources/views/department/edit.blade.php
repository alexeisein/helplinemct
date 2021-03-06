@extends('layouts.main')


@section('title', 'Department')

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
	<div style="margin-top: 200px;"><h1 class="text-center" style="font-family:'Helvetica neue'; font-weight: lighter; "><i class="fa fa-map-marker-alt text-danger"></i> Department</h1><hr></div><br>

	{{-- @include('partials.treatment_search') --}}
	<div class="col-lg-11">

		@include('partials.flash.success_create')
		@include('partials.flash.success_update')
		@include('partials.flash.success_delete')
		@include('partials.flash.error')

		<div class="panel panel-info" id="form-body">
			<div class="panel-heading">
				<span class="col-lg-6"><i class="fa fa-map-marker-alt"></i> LIST OF DEPARTMENTS</span>
				<span class="col-lg-2 col-lg-offset-4"><a class="btn btn-info btn-sm" href="{{ route('department.index') }}"><i class="fa fa-arrow-circle-left"></i> BACK</a></span>
				<div class="clearfix"></div>
			</div>
			<table class="table table-bordered table-striped table-hover table-dark">
				<thead class="thead-dark">
					<tr class="text-primary">
						<th scope="col">#No</th>
						<th scope="col">Name</th>
						<th scope="col">Description</th>
						<th scope="col">Department</th>
						<th scope="col">Photo</th>
						<th scope="col" class="text-danger text-right">ACTION</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<form action="{{ route('department.update', $department->id) }}" method="post" enctype="multipart/form-data">
							@csrf
							@method('patch')
							<th scope="row">{{ $department->id }}</th>
							<td class="{{ $errors->has('name') ? ' has-error' : '' }} col-lg-3">
								<input type="text" class="form-control" size="100%" name="name" value="{{ old('name', $department->name) }}">
								@if ($errors->has('name'))
									<span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
								@endif
							</td>

							<td class="{{ $errors->has('description') ? ' has-error' : '' }}">
								<textarea name="description" cols="58" rows="10" class="form-control">{{ old('description', $department->description) }}</textarea>
								@if ($errors->has('description'))
									<span class="help-block"><strong>{{ $errors->first('description') }}</strong></span>
								@endif
							</td>

							<td>
								{{-- Hospital ID --}}
					            <div class="md-form mb-5{{ $errors->has('hospital_id') ? ' has-error' : '' }}">
					                <i class="text-primary fas fa-bed prefix grey-text"></i>
					                <label data-error="wrong" data-success="right" for="hospital_id">Hospital Department Created For</label>
					                <select name="hospital_id" class="form-control">
					                	@foreach ($hospitals as $hospital => $id)
					                		<option value="{{ $id }}"
					                			{{ ($id == $department->hospital_id) ? 'selected' : '' }}
					                			>{{ $hospital }}</option>
					                		{{-- @if ($id == $department->hospital_id)
					                			<option value="{{ $id }}" selected>{{ $hospital }}</option>
					                		@else
					                			<option value="{{ $id }}">{{ $hospital }}</option>
					                		@endif --}}
					                	@endforeach
					                </select>
					                @if ($errors->has('hospital_id'))
					                	<span class="help-block">
					                		<strong>{{ $errors->first('hospital_id') }}</strong>
					                	</span>
					                @endif
					            </div>

							</td>
							<td class="col-lg-2">
								<input type="file" class="form-control btn btn-info " name="image">
								@if ($errors->has('image'))
									<span class="help-block">
										<strong>{{ $errors->first('image') }}</strong>
									</span>
								@endif
								<div style="width: 160px; height: 110px; margin-top: 10px;">
									<img src="{{ asset('storage/departments/'.$department->image) }}" alt="{{ $department->name }}" class="img-responsive img-rounded" style="width: 100%; height: 100%;">
								</div>
							</td>
							<td>
								<div class="form-group">
									<input type="submit" value="Update" class="btn btn-success btn-sm btn-block">
								</div>
							</td>
						</form>
						<td>
							<form action="{{ route('department.destroy', $department->slug) }}" method="post">
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
		
		@if (Session::has('success_update'))
			<div class="panel panel-info">
				<table class="table table-bordered table-striped table-hover table-dark">
					<thead class="thead-dark">
						<tr class="text-primary">
							<th scope="col">#No</th>
							<th scope="col">Name</th>
							<th scope="col">Description</th>
							<th scope="col">Photo</th>
						</tr>
					</thead>
						
					<tbody>
						<tr>
							<td scope="row">{{ $department->id }}</td>
							<td>
								<a href="{{ route('department.show', $department->slug) }}" target="_blank">{{ $department->name }}</a>
							</td>

							<td>
								<a href="{{ route('department.show', $department->slug) }}" target="_blank" style="font-size: 17px; font-family: 'Raleway'; font-weight: lighter;">{{ str_limit($department->description, 250) }}</a>
							</td>
							<td>
								<div style="width: 160px; height: 110px;">
									<a href="{{ route('department.show', $department->slug) }}" target="_blank">
										<img src="{{ asset('storage/departments/'.$department->image) }}" alt="{{ $department->name }}" class="img-responsive" style="width: 100%; height: 100%;">
									</a>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		@endif
		
	</div>

	<div class="col-lg-1">@include('partials.modal.adddepartment')</div>

	<br><hr><br>

	<div class="row">
        @include('partials.enquiry_form')
    </div>

@include('partials.copyright')

@endsection

