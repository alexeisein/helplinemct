<div class="modal fade2" id="modalContactForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true" style="z-index: 20000">
    <div class="modal-dialog2" role="document">
        <div class="modal-content2">
            <div class="modal-header text-center" style="background-color: lightblue;">
            	<div class="panel-heading">
					<div class="col-lg-8 text-left">
						<span class="modal-title w-80"><i class="text-primary fa fa-pen"></i> Edit Hospitals</span>
					</div>
					<div class="col-lg-3">
						<span><a class="btn btn-info btn-sm" href="{{ route('hospital.index') }}"><i class="text-primary fa fa-arrow-circle-left"></i> BACK</a></span>
					</div>
					
					<div class="col-lg-1">
						<button type="button" class="close sbmt-btn2" id="cancelBtn2" style="opacity: 1; background-color: red; padding: 5px 10px; border-radius: 50%;" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true" id="sbmt-btn-span2" style="color: #fff;">X</span>
						</button>
					</div>
				<div class="clearfix"></div>
				</div>
                {{-- <h4 class="modal-title w-100 font-weight-bold">Fill The Form  --}}
				
				{{-- </h4> --}}
            </div>

		    <form action="{{ route('hospital.store') }}" method="post" enctype="multipart/form-data">
		     {{ csrf_field() }}
		        <div class="modal-body mx-3">
		            <div class="md-form mb-5{{ $errors->has('name') ? ' has-error' : '' }}">
		                <i class="text-primary fas fa-hospital-o prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="form34"> Name Of Hospital</label>
		                <input type="text" id="form34" name="name" class="form-control validate enquiry-form" value="{{ old('name') }}" placeholder=" Hospital Name">

		                @if ($errors->has('name'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('name') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>

		            {{-- About hospital --}}
		            <div class="md-form{{ $errors->has('about') ? ' has-error' : '' }}">
		                <i class="text-primary fas fa-info prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="about">About Hospital</label>
		                <textarea type="text" id="about" name="about" class="md-textarea form-control" rows="4" placeholder="About Hospital">{{ old('about') }}</textarea>
		                @if ($errors->has('about'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('about') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>

		            {{-- Achievments --}}
		            <div class="md-form{{ $errors->has('achievment') ? ' has-error' : '' }}">
		                <i class="text-primary fas fa-trophy prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="achievment">Achievment</label>
		                <textarea type="text" id="achievment" name="achievment" class="md-textarea form-control" rows="4" placeholder="Achievment Hospital">{{ old('achievment') }}</textarea>
		                @if ($errors->has('achievment'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('achievment') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>

		            {{-- Infrastructures --}}
		            <div class="md-form{{ $errors->has('infrastructure') ? ' has-error' : '' }}">
		                <i class="text-primary fas fa-industry prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="infrastructure">Infrastructure</label>
		                <textarea type="text" id="infrastructure" name="infrastructure" class="md-textarea form-control" rows="4" placeholder="Infrastructure Hospital">{{ old('infrastructure') }}</textarea>
		                @if ($errors->has('infrastructure'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('infrastructure') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>

		            {{-- Address --}}
		            <div class="md-form{{ $errors->has('address') ? ' has-error' : '' }}">
		                <i class="text-primary fas fa-address-card prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="address">Address</label>
		                <textarea type="text" id="address" name="address" class="md-textarea form-control" rows="4" placeholder="Address Hospital">{{ old('address') }}</textarea>
		                @if ($errors->has('address'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('address') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>

		            {{-- Hospital's City --}}
		            <div class="md-form mb-5{{ $errors->has('location_id') ? ' has-error' : '' }}">
		                <i class="text-primary fas fa-bed prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="location_id">Hospital's City</label>
		                <select name="location_id" id="location_id" class="form-control">
		                	@foreach ($location as $city => $id)
		                		<option value="{{ $id }}">{{ $city }}</option>
		                	@endforeach
		                </select>
		                @if ($errors->has('location_id'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('location_id') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>

		            {{-- BEDS --}}
		            <div class="md-form mb-5{{ $errors->has('bed') ? ' has-error' : '' }}">
		                <i class="text-primary fas fa-bed prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="bed">Number Of Beds</label>
		                <input type="text" id="bed" name="bed" class="form-control validate enquiry-form" value="{{ old('bed') }}" placeholder=" bed">

		                @if ($errors->has('bed'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('bed') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>
					
					{{-- ICU BEDS --}}
		            <div class="md-form mb-5{{ $errors->has('icu_bed') ? ' has-error' : '' }}">
		                <i class="text-primary fas fa-bed prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="icu_bed">Number Of ICU Beds</label>
		                <input type="text" id="icu_bed" name="icu_bed" class="form-control validate enquiry-form" value="{{ old('icu_bed') }}" placeholder=" icu_bed">

		                @if ($errors->has('icu_bed'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('icu_bed') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>

					{{-- Established --}}
		            <div class="md-form mb-5{{ $errors->has('established') ? ' has-error' : '' }}">
		                <i class="text-primary fas fa-bed prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="established">Year Established</label>
		                <input type="text" id="established" name="established" class="form-control validate enquiry-form" value="{{ old('established') }}" placeholder=" established">

		                @if ($errors->has('established'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('established') }}</strong>
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
		            <button class="btn btn-unique btn-success btn-sm btn-block" id="addBtn"><i class="fas fa-paper-plane ml-1"></i> UPDATE</button>
		        </div>

		    </form>
        </div>
    </div>
</div>

<div class="text-center" >
    
    	@if ($errors->any())
    		<a style="" href="" class="btn btn-danger btn-rounded mb-4 btn-lg" data-toggle="modal" data-target="#modalContactForm2">FORM NOT SENT. THERE ARE ( {{ $errors->count() }} ) ERRORS. ADDRESSED THEM.</a>
    	@else
    		<a style="" id="addHsp" href="" class="btn btn-warning btn-rounded mb-4 btn-lg" data-toggle="modal" data-target="#modalContactForm2">EDIT HOSPITAL</a>
    	@endif
</div>