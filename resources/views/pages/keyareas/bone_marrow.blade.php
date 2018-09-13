@extends('layouts.main')

@section('title', 'Bone Marrow Transplant – BMT')

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
		<h3>Bone Marrow Transplant – BMT</h3>
	</div>

	<div class="container" id="keyareas-single">
		<div class="col-md-8">
			<p>The Bone Marrow Transplant Unit at Narayana Health is one of India's largest and most experienced units. Manned by a team of expert haemato-oncologists, we have extensive experience in both adult and paediatric bone marrow/stem cell transplants. The unit has an exceptional track record and has treated patients from across the world including ones from Oman, Iraq, Iran, Yemen, Afganistan, SriLanka, Nigeria, Bangladesh, Nepal, and Pakistan.</p><br>

			<p>A key advantage at Narayana Health is the multi speciality approach wich means that BMT team works closely with allied specialists to ensure appropriate care is provided to patients both pre and post the procedure. We are also among the few centres in India offering umbilical cord blood transplant and cord blood storage. Key conditions treated with BMT are Acute Myeloid Leukemia, Acute Lymphoid Leukemia, Anaplastic Anaemia, Multiple Myeloma, Lymphoma, Immunodeficiency Disorders, Thalassemia, and Congenital storage and metabolism disorders.</p><br>

		 	<h4 class="text-center input-lg bg-info">
		 		Types of Bone Marrow/Steam Cell Transplants Offered at Narayana Health:
		 	</h4> 

    		<ol>
    			<li>Autologous Bone Marrow Transplant</li>
			    <li>Allogeneic Bone Marrow Transplant</li>
			    <li>Peripheral Blood Steam Cell Transplant</li>
			    <li>Umbilical Cord Blood Transplant</li>
			    <li>Non-myeloablative or mini stem cell transplants for older patients and those with multiple health problems<li>

    		</ol>
				
			<h4 class="text-center input-lg bg-info">
		 		Key Features and Facilities:
		 	</h4> 
    		<ol>
    			<li>Cord Blood Banking</li>
			    <li>Stem Cell Cryopreservation</li>
			    <li>HLA Typing</li>
			    <li>Unrelated Donor Searches</li>
			    <li>Customised Treatment for Acute Leukemias</li>

    		</ol>


		</div>

		@include('partials.side_nav')
		
	</div>


@include('partials.copyright')
@endsection
