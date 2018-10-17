<div class="panel panel-info">
	<div class="panel-heading">
		<span class="col-lg-6"><i class="fa fa-pen"></i> Add More Locations</span>
		<span class="col-lg-2 col-lg-offset-4"><a class="btn btn-info btn-sm" href="{{ route('location.index') }}"><i class="fa fa-arrow-circle-left"></i> BACK</a></span>
		<div class="clearfix"></div>
	</div>
	<form action="{{ route('location.store') }}" method="post" class="form-vertical" autocomplete="on"><br>
		@csrf
		<div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
			<label class="control-lable"> City
				<input type="text" class="form-control" size="100%" placeholder=" Enter City" name="city" value="{{ old('city') }}">
			</label>
			@if ($errors->has('city'))
				<span class="help-block">
					<strong>{{ $errors->first('city') }}</strong>
				</span>
			@endif
		</div><br>

		<div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
			<label class="control-lable"> State
				<input type="text" class="form-control" size="100%" placeholder=" Enter State" name="state" value="{{ old('state') }}">
			</label>
			@if ($errors->has('state'))
				<span class="help-block">
					<strong>{{ $errors->first('state') }}</strong>
				</span>
			@endif
		</div><br>

		<div class="form-group">
			<label class="control-lable"> Country
				<input type="text" class="form-control" size="100%" placeholder=" Enter country" name="country" value="India" disabled>
			</label>
		</div><br>

		<div class="form-group">
			<button class="btn btn-primary btn-sm btn-block" >ADD</button>
		</div>
	</form>
</div>