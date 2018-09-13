@extends('layouts.main')

@section('title', 'Ross Procedure')

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
		<h3>Ross Procedure</h3>
	</div>

	<div class="container" id="keyareas-single">
		<div class="col-md-8">
			<p>The Ross Procedure, also known as Pulmonary Valve Translocation, was developed by Donald Ross in 1967. This operation uses the patient’s own pulmonary valve along with a part of the main pulmonary artery as a unit to replace the aortic valve and ascending aorta. A homograft valve harvested from a cadaver is then placed in the pulmonary position. The pulmonary valve is identical in shape, size, and in fact stronger than the aortic valve. Hence, this is an ideal replacement for the diseased aortic valve. NH surgeons have expertise in successful valve replacements using homografts and Ross operations, having performed over 100 such procedures with excellent results. These operations are being done at very few centres in the country. Workshops to teach other cardiac surgeons are regularly conducted. We also have some of the most experienced surgeons in the World, who can perform operations like Bental Procedure for Aortic Aneurysm and Aortic Arch replacement surgery for dissecting Aneurysm of Aorta.</p><br>

			<h4 class="text-center bg-info input-lg">Advantages Of Ross Procedure:</h4>

		    <ul>
		    	<li>- Freedom from Thromboembolism without the need for anticoagulation medicine</li>
		    	<li>- The valve grows as the patient grows older</li>
		    	<li>- No foreign material in placed in the valve</li>
		    </ul>
		    
		    

			<h4 class="text-center bg-info input-lg">Key Advantages At NH:</h4>

		    <ul>
		    	<li>- Dedicated Cardiac Operating Theatres</li>
		    	<li>- Extensive Adult &amp; Paediatric Cardiac Experience</li>
		    	<li>- State-of-the-art Diagnostic and Intensive Care Facilities</li>
		    	<li>- Multispecialty approach, which leads to better medical outcomes</li>
		    </ul>
		</div>

			@include('partials.side_nav')
		
	</div>


@include('partials.copyright')
@endsection
