@extends('layouts.main')

@section('title', 'Key Areas')

@section('content')

	{{-- Navigation --}}
	<div id="home" class="w3ls-banner"> 
		<!-- header -->
		<div class="header-w3layouts"> 
			<!-- Navigation -->
			@include('partials.nav') 
		</div>	
	</div>	
	{{-- Navigation --}}
	<div class="line"></div>
		
		<div class="w3ls-heading">
			<h3>Key Procedures</h3>
		</div>

	<div class="container">
		<ul class="gallery_box">
			<li>
				<div class="boxes">
					<a href="{{ route('keyareas.ross') }}"><img class="key_area_img" src="{{ asset('images/keyareas/ross_procedure.jpg') }}">
					<div class="box_data">
						<span>Ross Procedure</span>
					</div></a>
				</div>
			</li>

			<li>
				<div class="boxes">
					<a href="{{ route('keyareas.valve') }}"><img class="key_area_img" src="{{ asset('images/keyareas/ValveRepair.jpg') }}">
					<div class="box_data">
						<span>Valve Repair</span>
					</div></a>
				</div>
			</li>

			<li>
				<div class="boxes">
					<a href="{{ route('keyareas.dors') }}"><img class="key_area_img" src="{{ asset('images/keyareas/dor_procedure.jpg') }}">
					<div class="box_data">
						<span>DOR Procedure</span>
					</div></a>
				</div>
			</li>

			<li>
				<div class="boxes">
					<a href="{{ route('keyareas.lvad') }}"><img class="key_area_img" src="{{ asset('images/keyareas/lvad_exchange.jpg') }}">
					<div class="box_data">
						<span>Left Ventricular Assisted Device (LVAD)</span>
					</div></a>
				</div>
			</li>

			<li>
				<div class="boxes">
					<a href="{{ route('keyareas.cabg') }}"><img class="key_area_img" src="{{ asset('images/keyareas/coronary_bypass.jpg') }}">
					<div class="box_data">
						<span>CABG &amp; Redo Coronary Artery Bypass Grafting</span>
					</div></a>
				</div>
			</li>

			<li>
				<div class="boxes">
					<a href="{{ route('keyareas.joint') }}"><img class="key_area_img" src="{{ asset('images/keyareas/joint_replacement.jpg') }}">
					<div class="box_data">
						<span>Joint Replacement</span>
					</div></a>
				</div>
			</li>

			<li>
				<div class="boxes">
					<a href="{{ route('keyareas.liver') }}"><img class="key_area_img" src="{{ asset('images/keyareas/liver_transplant.jpg') }}">
					<div class="box_data">
						<span>Liver Transplant</span>
					</div></a>
				</div>
			</li>

			<li>
				<div class="boxes">
					<a href="{{ route('keyareas.kidney') }}"><img class="key_area_img" src="{{ asset('images/keyareas/kidney_transplant.jpg') }}">
					<div class="box_data">
						<span>Kidney Transplant</span>
					</div></a>
				</div>
			</li>

			<li>
				<div class="boxes">
					<a href="{{ route('keyareas.bone') }}"><img class="key_area_img" src="{{ asset('images/keyareas/bmt.jpg') }}">
					<div class="box_data">
						<span>Bone Marrow Transplant – BMT</span>
					</div></a>
				</div>
			</li>

			<li>
				<div class="boxes">
					<a href="{{ route('keyareas.cochlear') }}"><img class="key_area_img" src="{{ asset('images/keyareas/cochlear.jpg') }}">
					<div class="box_data">
						<span>Cochlear Implant</span>
					</div></a>
				</div>
			</li>
			
		</ul>
	</div>
@include('partials.copyright')
@endsection
