<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index: 20000">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center" style="background-color: lightblue;">
            	<div class="panel-heading">
					<div class="col-lg-8 text-left">
						<span class="modal-title w-80"><i class="fa fa-pen"></i> Add More Facilities</span>
					</div>
					<div class="col-lg-3">
						<span><a class="btn btn-info btn-sm" href="{{ route('facility.index') }}"><i class="fa fa-arrow-circle-left"></i> BACK</a></span>
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

		    <form action="{{ route('facility.store') }}" method="post" enctype="multipart/form-data">
		     {{ csrf_field() }}
		        <div class="modal-body mx-3">
		            <div class="md-form mb-5{{ $errors->has('comfort') ? ' has-error' : '' }}">
		                <i class="fas fa-bed prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="form34">Comfort</label>
		                <input type="text" id="form34" name="comfort" class="form-control validate enquiry-form" value="{{ old('comfort') }}" placeholder=" Comfort">

		                @if ($errors->has('comfort'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('comfort') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>

		            {{-- MONEY MATTERS --}}
		            <div class="md-form mb-5{{ $errors->has('money_matters') ? ' has-error' : '' }}">
		                <i class="fas fa-dollar-sign prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="form34">Money Matters</label>
		                <input type="text" id="form34" name="money_matters" class="form-control validate enquiry-form" value="{{ old('money_matters') }}" placeholder=" Money Matters">

		                @if ($errors->has('money_matters'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('money_matters') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>

		            {{-- Travellers --}}
		            <div class="md-form mb-5{{ $errors->has('travellers') ? ' has-error' : '' }}">
		                <i class="fas fa-plane-departure prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="form34">Travellers</label>
		                <input type="text" id="form34" name="travellers" class="form-control validate enquiry-form" value="{{ old('travellers') }}" placeholder=" Number of Travellers">

		                @if ($errors->has('travellers'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('travellers') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>

		            {{-- FOOD --}}
		            <div class="md-form mb-5{{ $errors->has('food') ? ' has-error' : '' }}">
		                <i class="fas fa-utensils prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="form34">Food</label>
		                <input type="text" id="form34" name="food" class="form-control validate enquiry-form" value="{{ old('food') }}" placeholder=" Food">

		                @if ($errors->has('food'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('food') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>

		            {{-- Travellers --}}
		            <div class="md-form mb-5{{ $errors->has('treatment_related') ? ' has-error' : '' }}">
		                <i class="fas fa-sthetoscope prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="form34">Treatment Related</label>
		                <input type="text" id="form34" name="treatment_related" class="form-control validate enquiry-form" value="{{ old('treatment_related') }}" placeholder=" Treatment Related">

		                @if ($errors->has('treatment_related'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('treatment_related') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>

		            {{-- LANGUAGE --}}
		            <div class="md-form mb-5{{ $errors->has('language') ? ' has-error' : '' }}">
		                <i class="fas fa-language prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="form34">Language</label>
		                <input type="text" id="form34" name="language" class="form-control validate enquiry-form" value="{{ old('language') }}" placeholder=" Language">

		                @if ($errors->has('language'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('language') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>
					
					{{-- TRANSPORTATION --}}
		            <div class="md-form mb-5{{ $errors->has('transportation') ? ' has-error' : '' }}">
		                <i class="fas fa-taxi prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="form34">Transportation</label>
		                <input type="text" id="form34" name="transportation" class="form-control validate enquiry-form" value="{{ old('transportation') }}" placeholder=" Transportation">

		                @if ($errors->has('transportation'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('transportation') }}</strong>
		                	</span>
		                @endif
		            </div>
		            <br>

				{{-- SELECTOR --}}
		            {{-- <div class="md-form mb-5{{ $errors->has('identifier') ? ' has-error' : '' }}">
		                <i class="fas fa-bed prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="form34">Comfort</label>
		                <select name="identifier" id="form34" class="form-control">
		                	@foreach ($facilities as $facility)
		                		<option value="">{{ $facility->identifier }}</option>
		                	@endforeach
		                </select>

		                @if ($errors->has('identifier'))
		                	<span class="help-block">
		                		<strong>{{ $errors->first('identifier') }}</strong>
		                	</span>
		                @endif
		            </div> --}}
		        </div>

		        <div class="modal-footer d-flex justify-content-center">
		            <button class="btn btn-unique btn-danger btn-lg" id="addBtn">ADD
		                <i class="fas fa-paper-plane ml-1"></i></button>
		        </div>
		    </form>
        </div>
    </div>
</div>

<div class="text-center">
    <a href="" class="btn btn-primary btn-rounded mb-4 btn-lg" data-toggle="modal" data-target="#modalContactForm">Add Facility</a>
</div>

<script>
	// document.getElementById('addBtn').addEventListener('click', hideUpdateForm);
	// function hideUpdateForm() {
	// 	document.getElementById('form-body').style.opacity=0;
	// }
</script>