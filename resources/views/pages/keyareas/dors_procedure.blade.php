@extends('layouts.main')

@section('title', 'Dor Procedure')

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
		<h3>Dor Procedure</h3>
	</div>

	<div class="container" id="keyareas-single">
		<div class="col-md-8 col-sm-8 col-xs-12">
			<p>Following a myocardial infarction or heart attack, the area of infarction often leaves behind a non-functional scar. This can lead to the dilatation of the heart over a period of time. The heart can also change its shape from a normal elliptical one to a globular one, resulting in the reduction of heart function; this can lead to heart failure. By an operation called Linear Endoventricular Patch plasty or commonly called Modified Dor's procedure, the elliptical shape of the heart is restored, thus restoring its normal pump function. This procedure is done in isolation or along with the routine CABG. This procedure has been pioneered by surgeons at NH and has become a well-accepted one, the world over. In fact, this modification is considered to be better than the original Dor's procedure. Surgeons at NH have aced this procedure after performing it on a large number of patients.</p><br>

			<h4 class="text-center bg-info input-lg">Key Advantages At NH:</h4>

		    <ul>
		    	<li>- Dedicated Cardiac Operating Theatres</li>
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
