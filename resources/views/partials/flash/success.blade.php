@if(Session::has('success'))
    <div class="alert alert-success text-center">
        <h2>{{ Session::get('success') }}</h2>
    </div>
@endif