
@if(Session::has('success'))
    <div class="alert alert-success text-center" id="success-div">
        <h3>{{ Session::get('success') }}</h3>
    </div>
@endif

<script>

	setTimeout(function(){
		document.getElementById('success-div').style.display="none";
	}, 5000);
</script>