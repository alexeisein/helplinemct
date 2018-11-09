
@if(Session::has('success_delete'))
    <div class="alert alert-success text-center" id="alert-div">
        <h3>{{ Session::get('success_delete') }}</h3>
    </div>
@endif

