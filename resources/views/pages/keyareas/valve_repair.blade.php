@extends('layouts.main')

@section('title', 'Valve Repair')

@section('content')

	{{-- Navigation --}}
	<div id="home" class="w3ls-banner"> 
		<!-- header -->
		<div class="header-w3layouts"> 
			<!-- Navigation -->
			@include('partials.nav') 
		</div>	
	</div>

	<div class="line"></div>
		
	<div class="w3ls-heading" style="margin-bottom: 20px;">
		<h3>Valve Repair</h3>
	</div>

	<div class="container" id="keyareas-single">
		<div class="col-md-8">
			<p>Operations on valves are one of the most common cardiac surgeries. Rheumatic Heart Disease is often the cause of valve problems in India and many other developing countries. Replacement with artificial valves is a very simple procedure but is associated with its own set of problems, some of which are life-threatening. To avoid such problems, Valve Repair techniques have been devised. However, the valve problems in Rheumatic Heart Disease are very complex. Surgeons at NH have mastered the Valve repair and perform very complex repairs on patients, thus saving many from the problems associated with Valve Replacements. NH is considered as the centre of excellence for Valve Repairs and a large number of these are done every year.</p><br>

			<h4 class="text-center bg-info input-lg">Key Advantages At NH:</h4>

		    <ul>
		    	<li>- Dedicated Cardiac Operating Theatres</li>
				<li>- Extensive Adult &amp; Paediatric Cardiac Experience</li>
				<li>- State-of-the-art Diagnostic and Intensive Care Facilities</li>
				<li>- Multispecialty Approach, Which Leads To Better Medical Outcomes</li>

		    </ul>
		</div>

			@include('partials.side_nav')
		
	</div>


@include('partials.copyright')
@endsection
