<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index: 20000">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center" style="background-color: lightblue;">
            	<div class="panel-heading">
					<div class="col-lg-8 text-left">
						<span class="modal-title w-80"><i class="fa fa-pen"></i> Create Treatment &amp; Cost</span>
					</div>
					<div class="col-lg-3">
						<span><a class="btn btn-info btn-sm" href="{{ route('treatment.index') }}"><i class="fa fa-arrow-circle-left"></i> BACK</a></span>
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

		    <form action="{{ route('treatment.store') }}" method="post" enctype="multipart/form-data">
		     {{ csrf_field() }}
		        <div class="modal-body mx-3">
		            <div class="md-form mb-5{{ $errors->has('name') ? ' has-error' : '' }}">
		                <i class="fas fa-building prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="name">Treatment Name</label>
		                <input type="text" id="name" name="name" class="form-control validate enquiry-form" value="{{ old('name') }}" placeholder=" Treatment Name">
		                @if ($errors->has('name'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('name') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>

		            <div class="md-form mb-5{{ $errors->has('cost') ? ' has-error' : '' }}">
		                <i class="fas fa-building prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="cost">Treatment Cost</label>
		                <input type="text" id="cost" name="cost" class="form-control validate enquiry-form" value="{{ old('cost') }}" placeholder=" Treatment Cost">
		                @if ($errors->has('cost'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('cost') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>

		            <div class="md-form{{ $errors->has('description') ? ' has-error' : '' }}">
		                <i class="text-primary fas fa-info prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="description">Treatment Description</label>
		                <textarea type="text" id="description" name="description" class="md-textarea form-control" rows="4" placeholder="Treatment Description">{{ old('description') }}</textarea>
		                @if ($errors->has('description'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('description') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>

		            <div class="md-form mb-5{{ $errors->has('no_travellers') ? ' has-error' : '' }}">
		                <i class="fas fa-building prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="no_travellers">Number of Travellers</label>
		                <input type="text" id="no_travellers" name="no_travellers" class="form-control validate enquiry-form" value="{{ old('no_travellers') }}" placeholder=" Number of Travellers">
		                @if ($errors->has('no_travellers'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('no_travellers') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>

		            <div class="md-form mb-5{{ $errors->has('in_duration') ? ' has-error' : '' }}">
		                <i class="fas fa-building prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="in_duration">In-Patient Duration</label>
		                <input type="text" id="in_duration" name="in_duration" class="form-control validate enquiry-form" value="{{ old('in_duration') }}" placeholder=" In-Patient Duration">
		                @if ($errors->has('in_duration'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('in_duration') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>

		            <div class="md-form mb-5{{ $errors->has('out_duration') ? ' has-error' : '' }}">
		                <i class="fas fa-building prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="out_duration">Out-Patient Duration</label>
		                <input type="text" id="out_duration" name="out_duration" class="form-control validate enquiry-form" value="{{ old('out_duration') }}" placeholder=" Out-Patient Duration">
		                @if ($errors->has('out_duration'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('out_duration') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>
					
					<div class="md-form mb-5{{ $errors->has('total_duration') ? ' has-error' : '' }}">
		                <i class="fas fa-building prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="total_duration">Total Duration</label>
		                <input type="text" id="total_duration" name="total_duration" class="form-control validate enquiry-form" value="{{ old('total_duration') }}" placeholder=" Total Duration">
		                @if ($errors->has('total_duration'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('total_duration') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>

		             {{-- DOCTOR ID --}}
		            <div class="md-form mb-5{{ $errors->has('doctor_id') ? ' has-error' : '' }}">
		                <i class="text-primary fas fa-bed prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="doctor_id"><b>Select Doctors Specialized in Treatment</b></label>
		                <select name="doctor_id[]" id="doctor_id" class="form-control" multiple="multiple">
		                	@foreach ($doctors as $doctor)
		                		<option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
		                	@endforeach
		                </select>
		                @if ($errors->has('doctor_id'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('doctor_id') }}</strong>
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
    	<a href="" class="btn btn-primary btn-rounded mb-4 btn-lg" data-toggle="modal" data-target="#modalContactForm">Add Treatment</a>
    	@endif 
</div>

<script>
  tinymce.init({
    selector: '#description'
  });
  </script>