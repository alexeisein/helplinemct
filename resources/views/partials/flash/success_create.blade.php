
@if(Session::has('success_create'))
    <div class="alert alert-success text-center" id="success-div">
        <h3>{{ Session::get('success_create') }}</h3>
    </div>
@endif

<script>

	setTimeout(function(){
		document.getElementById('success-div').style.display="none";
	}, 5000);
</script>