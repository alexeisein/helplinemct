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
	<div style="margin-top: 200px;"><h1 class="text-center" style="font-family:'Helvetica neue'; font-weight: lighter; "><i class="fa fa-building text-danger"></i> Departments</h1><hr>
	</div><br>

{{-- BreadCrumbs --}}
	@include('partials.breadcrumbs.index', ['indexTitle' => 'Departments'])
	<br>

	@include('partials.flash.success_create')
	@include('partials.flash.error')

	<div class="col-lg-11">

		@include('partials.flash.success_delete')
		
		<div class="panel panel-info">
			<div class="panel-heading"><i class="fa fa-map-marker-alt"></i> LIST OF DEPARTMENTS</div>
			<table class="table table-bordered table-striped table-hover table-dark">
				<thead class="thead-dark">
					<tr class="text-primary">
						<th scope="col">#No</th>
						<th scope="col">Name</th>
						<th scope="col">Description</th>
						<th scope="col">Photo</th>
						@auth
							@if(Auth::user()->permission == 'admin')
								<th scope="col" class="text-danger text-right">ACTION</th>
							@endif
						@endauth
					</tr>
				</thead>
				<tbody>
					@foreach ($departments as $department)
						<tr>
							<td scope="row">{{ $department->id }}</td>
							<td>
								<a href="{{ route('department.show', $department->slug) }}">{{ $department->name }}</a>
							</td>

							<td>
								<a href="{{ route('department.show', $department->slug) }}" style="font-size: 17px; font-family: 'Raleway'; font-weight: lighter;">{{ str_limit($department->description, 250) }}</a>
							</td>
							<td>
								<div style="width: 160px; height: 110px;">
									<a href="{{ route('department.show', $department->slug) }}">
										<img src="{{ asset('storage/departments/'.$department->image) }}" alt="{{ $department->name }}" class="img-responsive" style="width: 100%; height: 100%;">
									</a>
								</div>
							</td>
							@auth
								@if (Auth::user()->permission == 'admin')
									<td><a class="btn btn-warning btn-sm btn-block" href="{{ route('department.edit', $department->id) }}">Edit</a>
									</td>
								
								<td>
									<form action="{{ route('department.destroy', $department->slug) }}" method="post" class="form-vertical">
										@csrf
										@method('delete')
										{{-- {{ method_field('delete') }} --}}
										<div class="form-group">
											<input type="submit" value="Delete" class="btn btn-danger btn-sm btn-block">
										</div>
									</form>
								</td>
								@endif
							@endauth
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="text-center">{{ $departments->links() }}</div>
	</div>

	@auth
		@if(Auth::user()->permission == 'admin')
			<div class="col-lg-1">@include('partials.modal.adddepartment')</div>
		@endif
	@endauth
	

	<br><hr><br>

	<div class="row">
        @include('partials.enquiry_form')
    </div>

@include('partials.copyright')

@endsection

