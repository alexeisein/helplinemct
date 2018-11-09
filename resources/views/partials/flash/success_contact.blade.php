
@if(Session::has('success_contact'))
    <div class="alert alert-success text-center" id="alert-div">
        <h3>{{ Session::get('success_contact') }}</h3>
    </div>
@endif