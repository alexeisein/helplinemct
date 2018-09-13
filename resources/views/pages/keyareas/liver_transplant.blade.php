@extends('layouts.main')

@section('title', 'Liver Transplant')

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
		<h3>Liver Transplant</h3>
	</div>

	<div class="container" id="keyareas-single">
		<div class="col-md-8">
			<p>NH conducts complex liver surgeries with intra-operative ultrasound guidance, thus making these procedures safer with better outcomes and quicker recovery. Children with liver cancer and chronic liver disease are also given the option of a liver transplant, which the surgeons at NH perform regularly. The Department of Paediatric Surgery at NH is a pioneer in the field of organ transplantation. It has launched a dedicated paediatric liver transplant programme which is the only such programme in India.</p><br>

			<p>The team has a unique experience of performing several liver transplants in very small and high-risk babies and children, with outcomes that are at par with other such programmes in the West. The department has performed numerous Paediatric Liver Transplants and proves that liver transplantation in India is a feasible treatment option for children with liver diseases.</p><br>

		 	<h4 class="text-center input-lg bg-info">
		 		Types Of Liver Transplant At NH:
		 	</h4> 

    		<ul>
    			<li>- Orthotopic Transplant:</li>
    			<p>The most common type of liver transplant is the Orthotopic Transplant, where a whole liver is taken from a recently deceased donor.</p>
			    <li>- Living Donor Transplant:</li>
			    <p>In this form of Liver Transplant, the donor will have an operation to remove either the left or right side lobe of his liver. The right lobe transplant is performed in adult recipients as it is larger while the left lobe is used for liver transplants in younger recipients.</p>

			    <li>- Split Donation Transplant:</li>
			    <p>
			    	A Split Donation is a liver transplant carried out when an adult and child simultaneously require a liver transplant. In such instances, right lobe is transplanted into the adult while the left lobe is transplanted into the child from the suitable recipient. Split donation can be performed between 2 adult recipients but the adult recipients receiving the left lobe of liver should be an individual much smaller than average for the transplant to be successful.
			    </p>
			    
    		</ul>


		</div>

			@include('partials.side_nav')
		
	</div>


@include('partials.copyright')
@endsection
