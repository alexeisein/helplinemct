
<div style="z-index: 40000;">
	@if(Session::has('access_error'))
    <div class="alert alert-danger text-center" id="alert-div">
        <h3>{{ Session::get('access_error') }}</h3>
    </div>
@endif
</div>