
@if(Session::has('success'))
    <div class="alert alert-success text-center" id="alert-div">
        <h3>{{ Session::get('success') }}</h3>
    </div>
@endif