
@if(Session::has('success_appointment'))
    <div class="alert alert-success text-center" id="alert-div">
        <h3>{{ Session::get('success_appointment') }}</h3>
    </div>
@endif