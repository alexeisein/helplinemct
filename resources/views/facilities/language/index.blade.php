@extends('layouts.main')


@section('title', 'Language')

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
	<div style="margin-top: 200px;"><h1 class="text-center" style="font-family:'Helvetica neue'; font-weight: lighter; "><i class="fa fa-language text-success"></i> Language</h1><hr>
	</div><br>

	<div style="border:1px dotted #3e3e3e; padding: 5px; border-radius: 10px;">
		<p class="label label-default" style="letter-spacing: 2px;"><a href="{{ route('homepage') }}" style="color: #fff;"><i class="fa fa-home"></i> Home</a></p>
		<p class="label label-info" style="letter-spacing: 2px;color: #fff;">Language</p>
	</div><br>

	@include('partials.flash.success_create')

	<div class="col-lg-11">

		@include('partials.flash.success_delete')
		@include('partials.flash.error')
		
		<div class="panel panel-info">
			<div class="panel-heading"><i class="fa fa-map-marker-alt"></i> Language</div>
			<table class="table table-bordered table-striped table-hover table-dark">
				<thead class="thead-dark">
					<tr class="text-primary">
						<th scope="col">#No</th>
						<th scope="col">Name</th>
						<th scope="col" class="text-danger text-right">ACTION</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($languages as $language)
						<tr>
							<td scope="row">{{ $language->id }}</td>
							<td>
								<a href="">{{ $language->name }}</a>
							</td>

							 
							<td><a class="btn btn-warning btn-sm btn-block" href="{{ route('language.edit', $language->id) }}">Edit</a></td>
							<td>
								<form action="{{ route('language.destroy', $language->id) }}" method="post" class="form-vertical">
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
		<div class="text-center">{{ $languages->links() }}</div>
	</div>

	<div class="col-lg-1">@include('partials.modal.addlanguage')</div>

	<br><hr><br>

	<div class="row">
        @include('partials.enquiry_form')
    </div>

@include('partials.copyright')

@endsection

