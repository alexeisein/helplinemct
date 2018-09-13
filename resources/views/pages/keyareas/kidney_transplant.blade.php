@extends('layouts.main')

@section('title', 'Kidney Transplant')

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
		<h3>Kidney Transplant</h3>
	</div>

	<div class="container" id="keyareas-single">
		<div class="col-md-8">
			<p>The Kidney Transplant team at NH is among the most experienced and skilled in India and was among the first to perform an ABO incompatible transplant in the region and is among the few centres nationally to perform cadaveric transplants. The expert team of nephrologists, urologists, and transplant specialists work together to perform challenging transplant cases such as highly sensitised cases, repeat transplants, paediatric cases and cases where transplant recipients face complex medical issues. </p><br>

			<p>Key advantages at NH include the well-equipped blood bank service, the In-house molecular biology lab and the radiology services. In addition, our hospitals also feature round the clock dialysis services and modern Intensive Care Units and isolated patient rooms for post-surgery care.</p><br>

		 	<h4 class="text-center input-lg bg-info">
		 		Kidney Transplant Services At NH:
		 	</h4> 

    		<ul>
    			<li>- Established Swap Registry for Renal Transplant where family members with ABO incompatibility, register and exchange donors with other members within the legal framework</li>
			    <li>- HLA to check donor compatibility with potential recipients</li>
			    <li>- Basic laboratory and imaging studies to assess general health and in particular kidney function</li>
			    <li>- Tests to check for serious illnesses that could affect the process, such as cardiac disorders and untreated/improperly managed chronic infections</li>
			    <li>- Laparoscopic Nephrectomy which leaves a smaller scar on the donor and allows for faster recovery</li>
			    <li>- Post-operative care including dietary guidance and monitoring</li>

			    
    		</ul>


		</div>

			@include('partials.side_nav')
		
	</div>


@include('partials.copyright')
@endsection
