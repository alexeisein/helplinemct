@extends('layouts.main')

@section('title', 'Left Ventricular Assisted Device (LVAD)')

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
		<h3>Left Ventricular Assisted Device (LVAD)</h3>
	</div>

	<div class="container" id="keyareas-single">
		<div class="col-md-8">
			<p>Due to a cardiac seizure, the heart becomes weak and can't maintain adequate blood flow to meet an individual’s body requirement. Usually, the affected patient can barely walk, talk or even lie down flat. Patients who have reached the terminal stages are recommended to undergo an LVAD implantation. NH was among the first to offer this implant in the country. It is a small battery operated pumping device that runs on rechargeable batteries. The pump is implanted in the thoracic region just below the heart, while the batteries are outside. Once implanted it takes over the entire blood pumping function of the heart and the patient gets a new lease of life, along with a few lifestyle restrictions. It can be used either as a "Bridge to transplant”, that is, to keep the patient well until a heart is available for transplantation. It can also be used as "Destination therapy", making it a permanent solution for patients who are not suitable for transplant.</p><br>

			<h4 class="text-center bg-info input-lg">Benefits Of Left Ventricular Assisted Device (LVAD):</h4>

		    <ul>
			    <li>- Can be performed on select patients awaiting a heart transplant</li>
			    <li>- LVAD helps restore the blood flow to a person with a weak heart</li>
			    <li>- Improves the patient quality of life</li>
			    <li>- Improves the efficiency of other organ functions</li>

		    </ul>
		</div>

			@include('partials.side_nav')
		
	</div>


@include('partials.copyright')
@endsection
