@extends('layouts.main')

@section('title', 'CABG &amp; Redo Coronary Artery Bypass Grafting')

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
		<h3>CABG &amp; Redo Coronary Artery Bypass Grafting</h3>
	</div>

	<div class="container" id="keyareas-single">
		<div class="col-md-8">
			<p>At Narayana Health, a significant number of surgeries carried out are Coronary Artery Bypass Grafting and Redo Coronary Artery Bypass Grafting. Having carried out over 13,000 Coronary Bypass Grafting and Redo Coronary Artery Bypass Grafting operations, the team of experts at NH are the most experienced in the country when it comes down to performing CABG, redo CABG's and Coronary Artery Bypass Grafting on a beating heart without the assistance of a Heart-Lung machine. Our cardiac surgeons usually complete arterial graft using internal mammary artery and radial arteries.</p><br>

			<p>Our hospitals feature state-of-the-art infrastructure and equipment including laminar flow operating theatres, world-class Cardiac Care Units and a wide range of cutting-edge diagnostic equipment. This allows us to provide comprehensive, quality cardiac care for our patients. </p><br>

		</div>

			@include('partials.side_nav')
		
	</div>


@include('partials.copyright')
@endsection
