@if($errors->any())
    <div class="alert alert-danger">
    	@if(count($errors) == 1)
			<h4 class="text-center">Address this {{count($errors)}} error, please.</h4>
			@else
			<h4 class="text-center">Address these {{count($errors)}} errors, please.</h4>
    	@endif
    	<ol>
	        @foreach($errors->all() as $error)
	            <li><h4>* {{ $error }}</h4></li>
	        @endforeach
        </ol>
    </div>

@elseif(Session::has('error_contact'))
	<div class="alert alert-danger text-center" id="alert-div">
        <h3>{{ Session::get('error_contact') }}</h3>
    </div>
@endif
