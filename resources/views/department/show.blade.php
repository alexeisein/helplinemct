@extends('layouts.main')


@section('title', $department->name)

@section('content')

	{{-- Navigation --}}
	<div id="home" class="w3ls-banner" class="col-lg-12"> 
		<!-- header -->
		<div class="header-w3layouts"> 
			<!-- Navigation -->
			@include('partials.nav') 
		</div>	
	</div>	
	{{--Navi --}}
	<div style="margin-top: 200px;" class="col-lg-12"><h1 class="text-center" style="font-family:'Helvetica neue'; font-weight: lighter; "><i class="fa fa-building text-danger"></i> Departments</h1><hr>
	</div>

	{{-- Breadcrumbs --}}
	@include('partials.breadcrumbs.show', ['navUrl' => route('department.index'), 'showTitle' => $department->name, 'modulName' => 'Departments'])<br>

	<div class="col-lg-12"><br></div>

	<div class="row">
		<div class="col-lg-8">
			<h2 class="col-lg-12">{{ $department->name }}</h2><br>
			<div class=" col-lg-12" id="department-img" style="margin-top: 20px;">
				<img src="{{ asset('storage/departments/'.$department->image) }}" alt="{{ $department->name }}" title="{{ $department->name }}" style="height: 100%; width: 100%;" class="img-thumbnail img-responsive">
			</div>

			<div class=" col-lg-12" style="font-size: 17px; margin-top: 20px;"><p>{{ $department->description }}</p></div>
		</div>

		<div class="col-lg-4">
			@include('partials.modal.enquiry')
		</div>
	</div>

	<div class="col-lg-12">
		<hr>
	</div>

	{{-- Show Other Departments --}}
        <div class="container">
            <div>
                <h2 style="text-align: left;">OTHER DEPARTMENTS</h2>
            </div>
            <hr>
            @foreach ($otherDepartments as $otherDepartment)
            <div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-12 filter hdpe">
                <div class="col-12-lg col-md-12 col-sm-12 col-xs-12">
                    <a href="{{ route('department.show', $department->slug) }}"><h4>{{ str_limit($otherDepartment->name), 20 }}</h4></a>
                </div>

                <div class="row">
                	<div class="" style="width: 240px; height: 240px; margin-bottom: 30px;">
                		<a href="{{ route('department.show', $otherDepartment->slug) }}">
	                    	<img src="{{ asset('storage/departments/'.$otherDepartment->image) }}" class="img-thumbnail" alt="{{ $otherDepartment->name }}" style="width: 100%; height: 100%;">
		        		</a>
                	</div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center">{{ $otherDepartments->links() }}</div>


	@include('partials.enquiry_form')


@include('partials.copyright')

@endsection

