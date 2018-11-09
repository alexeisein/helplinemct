
@if(Session::has('success_create'))
    <div class="alert alert-success text-center" id="alert-div">
        <h3>{{ Session::get('success_create') }}</h3>
    </div>
@endif