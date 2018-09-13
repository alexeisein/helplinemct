@extends('layouts.main')

@section('title', 'Joint Replacement')

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
		<h3>Joint Replacement</h3>
	</div>

	<div class="container" id="keyareas-single">
		<div class="col-md-8">
			<p>Joint Replacement is a surgery that allows total relief from pain and improved quality of life for patients suffering from painful joints. The orthopaedic surgeons at NH have extensive experience with joint replacements and are capable of providing excellent results for both children and adults.There may be many reasons for requiring a knee replacement but the most common cause is arthritis, a debilitating disease. In early stages, medicines, physiotherapy, splints, diathermy and weight reduction can control pain. On the resurfaced area, hip or knee joints made up of specialised alloy metal and ultra-high density polyethene (UHDP) plastic is placed. It can be fixed with or without cement.</p><br>

		 	<h4 class="text-center input-lg bg-info">
		 		Key Joint Replacement Procedures At NH:
		 	</h4> 

    		<ul>
    			<li>- Total hip replacement</li>
			    <li>- Total knee replacement</li>
			    <li>- Replacement of shoulder and elbow</li>
			    <li>- Revision joint replacement surgeries</li>
			    <li>- Uni-compartmental knee replacement</li>
			    <li>- Custom made implant surgeries</li>
			    <li>- Minimally invasive procedures</li>
			    <li>- High Tibial Osteotomy</li>
    		</ul>


		</div>

			@include('partials.side_nav')
		
	</div>


@include('partials.copyright')
@endsection
