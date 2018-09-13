@extends('layouts.main')

@section('title', 'Cochlear Implant')

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
		<h3>Cochlear Implant</h3>
	</div>

	<div class="container" id="keyareas-single">
		<div class="col-md-8">
			<p>Loss of hearing or congenitally hearing impaired patients can have a simple solution to their problem. At NH, Cochlear Implants are routinely done for those who have become deaf or have hearing issues due to various reasons. Cochlear Implants transform speech and other sounds into electrical energy that is used to stimulate hearing nerves in the inner ear. This implant has both internal and external components consisting of an external speech processor, headset (worn behind the ear) and a surgically implanted receiver/stimulator package with an electrode array in the skull. Through a surgery, an electronic device is fitted in the ear. It does the function of damaged parts in the inner ear and sends signals to the brain.</p><br>

		 	<h4 class="text-center input-lg bg-info">
		 		How the device works:
		 	</h4> 

    		<p>The external sound processor captures, filters and processes sounds. The sound processor translates filtered sounds into digital information, which is then transmitted to the internal part of the implant system. The internal implant converts the digital information into electrical signals and sends them to tiny delicate curls of electrodes that are placed inside the cochlea. The electrical signals from the electrodes stimulate the hearing nerve. It bypasses the damaged cells and allows the brain to perceive sound.</p><br>

			<p>Prospective patients who may need cochlear implant first meet an audiologist and ENT surgeon. A number of preliminary tests are done including audiological evaluation, to ascertain the level of hearing loss, speech therapist assessment and trial with hearing aids. Thereafter, the patient is cleared for a cochlear implant. The surgery lasts about two hours and is performed under General Anaesthesia.</p><br>

			<p>An electrode array is inserted into the cochlea while the receiver/ stimulator is secured in the skull. Typically, patients stay in the hospital for four days and within a week, they can return to their normal routine. But the patient requires spending three more weeks in the rehabilitation process. Activation of the implant takes place within 2-3 weeks after the surgery, allowing sufficient time for the incision to heal well. Mapping the implant is done on a regular basis during post-operative rehabilitation. This helps in fine tuning the processor and getting the best performance, as patients begin to get used to hearing with the implant.</p><br>

			<p>We provide rehabilitation therapy which is necessary to maximize the benefits from the implant. This is called Auditory Verbal therapy (AVT). In AVT, the patient is taught to listen with the implant, understand speech and talk. Learning to listen takes time and the patient requires support from family and speech therapists during the initial three week period.</p><br>

		</div>

			@include('partials.side_nav')
	</div>

	

@include('partials.copyright')
@endsection
