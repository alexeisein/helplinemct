<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index: 20000">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center" style="background-color: lightblue;">
            	<div class="panel-heading">
					<div class="col-lg-8 text-left">
						<span class="modal-title w-80"><i class="fa fa-pen"></i> Add More Comforts</span>
					</div>
					<div class="col-lg-3">
						<span><a class="btn btn-info btn-sm" href="{{ route('comfort.index') }}"><i class="fa fa-arrow-circle-left"></i> BACK</a></span>
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

		    <form action="{{ route('comfort.store') }}" method="post" enctype="multipart/form-data">
		     {{ csrf_field() }}
		        <div class="modal-body mx-3">
		            <div class="md-form mb-5{{ $errors->has('name') ? ' has-error' : '' }}">
		                <i class="fas fa-building prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="form34">Comfort Name</label>
		                <input type="text" id="form34" name="name" class="form-control validate enquiry-form" value="{{ old('name') }}">

		                @if ($errors->has('name'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('name') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>

				{{-- Hospital ID --}}
		            <div class="md-form mb-5{{ $errors->has('hospital_id') ? ' has-error' : '' }}">
		                <i class="text-primary fas fa-bed prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="hospital_id">Hospital Comfort Created For</label>
		                <select name="hospital_id" id="hospital_id" class="form-control">
		                	@foreach ($hospitals as $hospital => $id)
		                		<option value="{{ $id }}">{{ $hospital }}</option>
		                	@endforeach
		                </select>
		                @if ($errors->has('hospital_id'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('hospital_id') }}</strong>
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
    <a href="" class="btn btn-primary btn-rounded mb-4 btn-lg" data-toggle="modal" data-target="#modalContactForm">Add Comfort</a>
</div>