
@if(Session::has('success_update'))
    <div class="alert alert-success text-center" id="alert-div">
        <h3>{{ Session::get('success_update') }}</h3>
    </div>
@endif
