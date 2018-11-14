<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index: 20000">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center" style="background-color: lightblue;">
            	<div class="panel-heading">
					<div class="col-lg-8 text-left">
						<span class="modal-title w-80"><i class="fa fa-doctor"></i> Create A Doctor</span>
					</div>
					<div class="col-lg-3">
						<span><a class="btn btn-info btn-sm" href="{{ route('doctor.index') }}"><i class="fa fa-arrow-circle-left"></i> BACK</a></span>
					</div>
					
					<div class="col-lg-1">
						<button type="button" class="close sbmt-btn" style="opacity: 1; background-color: red; padding: 5px 10px; border-radius: 50%;" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true" id="sbmt-btn-span" style="color: #fff;">X</span>
					</button>
					</div>
				<div class="clearfix"></div>
				</div>
                {{-- <h4 class="modal-title w-100 font-weight-bold">Fill The Form  --}}
				
				{{-- </h4> --}}
            </div>

		    <form action="{{ route('doctor.store') }}" method="post" enctype="multipart/form-data" autocomplete="on">
		     {{ csrf_field() }}
		        <div class="modal-body mx-3">
		            <div class="md-form mb-5{{ $errors->has('name') ? ' has-error' : '' }}">
		                <i class="fas fa-user-md prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="name">Doctor Name</label>
		                <input type="text" id="name" name="name" class="form-control validate enquiry-form" value="{{ old('name') }}">
		                @if ($errors->has('name'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('name') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>

		            <div class="md-form mb-5{{ $errors->has('hospital_id') ? ' has-error' : '' }}">
		                <i class="text-primary fas fa-hospital prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="hospital_id">Doctor's Hospital</label>
		                <select name="hospital_id" id="hospital_id" class="form-control">
		                	@foreach ($docHospitals as $hospital)
		                		<option value="{{ $hospital->id }}">{{ $hospital->name }}</option>
		                	@endforeach
		                </select>
		                @if ($errors->has('hospital_id'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('hospital_id') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>

		            <div class="md-form mb-5{{ $errors->has('department_id') ? ' has-error' : '' }}">
		                <i class="text-primary fas fa-building prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="department_id">Doctor's Department</label>
		                <select name="department_id" id="department_id" class="form-control">
		                	@foreach ($docDepartments as $department)
		                		<option value="{{ $department->id }}">{{ $department->name }}</option>
		                	@endforeach
		                </select>
		                @if ($errors->has('department_id'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('department_id') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>

		            <div class="md-form mb-5{{ $errors->has('location_id') ? ' has-error' : '' }}">
		                <i class="text-primary fas fa-map-marker-alt prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="location_id">Doctor's Location</label>
		                <select name="location_id" id="location_id" class="form-control">
		                	@foreach ($docLocations as $location)
		                		<option value="{{ $location->id }}">{{ $location->city }}</option>
		                	@endforeach
		                </select>
		                @if ($errors->has('location_id'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('location_id') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>

		            <div class="md-form mb-5{{ $errors->has('descipline') ? ' has-error' : '' }}">
		                <i class="fas fa-building prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="descipline">Descipline</label>
		                <input type="text" id="descipline" name="descipline" class="form-control validate enquiry-form" value="{{ old('descipline') }}" placeholder=" Doctor's descipline i.e Cardiac Surgeon">
		                @if ($errors->has('descipline'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('descipline') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>
					
		            <div class="md-form mb-5{{ $errors->has('gender') ? ' has-error' : '' }}">
		                <i class="text-primary fas fa-bed prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="gender">Gender</label>
		                <select name="gender" id="gender" class="form-control">
	                		<option value="male">Male</option>
	                		<option value="female">Female</option>
		                </select>
		                @if ($errors->has('gender'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('gender') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>

		            <div class="md-form{{ $errors->has('about') ? ' has-error' : '' }}">
		                <i class="fas fa-pencil-alt prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="form8">About</label>
		                <textarea type="text" id="about" name="about" class="md-textarea form-control" rows="4">{{ old('about') }}</textarea>
		                @if ($errors->has('about'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('about') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>

		            <div class="md-form{{ $errors->has('experience') ? ' has-error' : '' }}">
		                <i class="fas fa-pencil-alt prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="experience">Experience</label>
		                <textarea type="text" id="experience" name="experience" class="md-textarea form-control" rows="4">{{ old('experience') }}</textarea>
		                @if ($errors->has('experience'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('experience') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>

		            <div class="md-form mb-5{{ $errors->has('years_experience') ? ' has-error' : '' }}">
		                <i class="fas fa-building prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="years_experience">Years Of Experience</label>
		                <input type="text" id="years_experience" name="years_experience" class="form-control validate enquiry-form" value="{{ old('years_experience') }}">
		                @if ($errors->has('years_experience'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('years_experience') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>

		            <div class="md-form{{ $errors->has('education') ? ' has-error' : '' }}">
		                <i class="fas fa-pencil-alt prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="education">Education</label>
		                <textarea type="text" id="education" name="education" class="md-textarea form-control" rows="4" placeholder=" Each education should end with a fullstop">{{ old('education') }}</textarea>
		                @if ($errors->has('education'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('education') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>
					
					<div class="md-form{{ $errors->has('awards') ? ' has-error' : '' }}">
		                <i class="fas fa-pencil-alt prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="awards">Awards</label>
		                <textarea type="text" id="awards" name="awards" class="md-textarea form-control" rows="4" placeholder=" Each Award should end with a full stop">{{ old('awards') }}</textarea>
		                @if ($errors->has('awards'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('awards') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>

		            <div class="md-form mb-5{{ $errors->has('image') ? ' has-error' : '' }}">
		                <i class="text-primary fas fa-image prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="image">Upload Photo</label>
		                <input type="file" id="image" name="image" class="form-control validate enquiry-form btn btn-info" style="width: 30%;">
		                @if ($errors->has('image'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('image') }}</strong>
		                	</span>
		                @endif
		            </div>
		        </div>

		        <div class="modal-footer d-flex justify-content-center">
		            <button class="btn btn-unique btn-success btn-lg" id="addBtn">ADD
		                <i class="fas fa-paper-plane ml-1"></i></button>
		        </div>
		    </form>
        </div>
    </div>
</div>

<div class="text-center">
    	@if ($errors->any())
    	<a href="" class="btn btn-danger btn-rounded mb-4 btn-lg" data-toggle="modal" data-target="#modalContactForm">Unsuccessful. Click To Rectify</a>

		@else
    	<a href="" class="btn btn-primary btn-rounded mb-4 btn-lg" data-toggle="modal" data-target="#modalContactForm">Add Doctor</a>
    	@endif 
</div>

<script>
	tinymce.init({
	    mode: 'textareas',
	  });
</script>