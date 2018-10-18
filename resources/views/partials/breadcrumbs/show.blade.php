{{-- Bread Crumb --}}
	<div style="border:1px dotted #3e3e3e; padding: 5px; border-radius: 10px;" class="col-lg-12">
		<p class="label label-default" style="letter-spacing: 2px;"><a href="{{ route('homepage') }}" style="color: #fff;"><i class="fa fa-home"></i> Home</a></p>
		<p class="label label-default" style="letter-spacing: 2px;"><a href="{{ $navUrl }}" style="color: #fff;">{{ $modulName }}</a></p>
		<p class="label label-info" style="letter-spacing: 2px;color: #fff;">{{ $showTitle}}</p>
	</div>