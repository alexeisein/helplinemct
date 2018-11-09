@extends('layouts.main')

@section('title', 'Make an appointment today')

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
	<div class="line">
</div>
<div class="appointment">
	<div class="container">
		<div class="w3ls-heading">
			<h3>Make an appointment today</h3>
		</div>

		@include('partials.flash.error')
		@include('partials.flash.success_appointment')

		<div class="appointment-grid">
			<div class="col-md-4 appointmnet-left">
				<div class="inner">
					<div class="working-grid">
						<h4>working hours</h4>
						<p><i class="fa fa-calendar" aria-hidden="true"></i><span>Mon to fri</span> <span class="span1">9:00 am to 6:00 pm</span></p>
						<p><i class="fa fa-calendar" aria-hidden="true"></i><span>sat</span> <span class="span1">9:00 am to 10:00 pm</span></p>
						<p><i class="fa fa-calendar" aria-hidden="true"></i><span>sun</span> <span class="span1">10:00 am to 1:00 pm</span></p>
					<div class="clearfix"></div>
					</div>
					<div class="working-grid1">
						<h4>For help</h4>
						<h5><i class="fa fa-pencil" aria-hidden="true"></i>For appointment fill the form</h5>
						<p>We've doctors on board for a wide range of specialties across our network. <br>To meet the right physician for your medical issue, please fill this form and we will be in touch to schedule your appointment.</p>
					<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-4 appointmnet-middle">
				<div class="inner" id="inner">
					<h4>Appointment form</h4>
					<form action="{{ url('/appointment') }}" name="row" method="post" class="register">
						<input type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}">
						<input type="email" name="email" id="Email" placeholder="Email id" value="{{ old('email') }}">
						<input type="text" name="mobile_number" id="Mobile_Number" placeholder="Mobile Number" value="{{ old('mobile_number') }}">
						<input class="date" name="date" id="datepicker" type="text" placeholder="Appointment date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Appointment date';}"  value="{{ old('date') }}">

						<select required="required" class="form-control form-select required" id="nationality" name="nationality" style="margin-bottom: 15px;" onchange="changeVal()">
							<option value="{{ old('nationality') }}">
							
							{{ old('nationality') ? old('nationality') : 'Select Nationality' }}
	
							</option>
							<option value="angola">Angola</option>
							<option value="botswana">Botswana</option>
							<option value="burundi">Burundi</option>
							<option value="cameroon">Cameroon</option>
							<option value="congo">Congo</option>
							<option value="congodrc">Congo DRC</option>
							<option value="egypt">Egypt</option>
							<option value="eritrea">Eritrea</option>
							<option value="ethiopia">Ethiopia</option>
							<option value="Fiji">Fiji</option>
							<option value="ghana">Ghana</option>
							<option value="cotedivoire">Côte d’Ivoire</option>
							<option value="kenya">Kenya</option>
							<option value="lesotho">Lesotho</option>
							<option value="liberia">Liberia</option>
							<option value="madagascar">Madagascar</option>
							<option value="mauritius">Mauritius</option>
							<option value="morocco">Morocco</option>
							<option value="mozambiqie">Mozambique</option>
							<option value="nigeria">Nigeria</option>
							<option value="rwanda">Rwanda</option>
							<option value="sierraleon">Sierra Leone</option>
							<option value="southafrica">South Africa</option>
							<option value="southsudan">South Sudan</option>
							<option value="sudan">Sudan</option>
							<option value="tanzania">Tanzania</option>
							<option value="uganda">Uganda</option>
							<option value="zimbabwe">Zimbabwe</option>
							<option value="others" id="others">OTHERS</option>
						</select>

						<input type="text" name="other_nationality" id="other-nationality" placeholder="Nationality" value="{{ old('other_nationality') }}">

						<textarea name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Message...';}" >{{ old('message') }}</textarea>
						<input type="submit" onclick="myFunction()" value="book appointment ">

						{{ csrf_field() }}

					</form>
				</div>
			</div>
			<div class="col-md-4 appointmnet-right">
				<div class="inner">
					<img src="{{ asset('images/appointment.jpg') }}" alt=""/>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	</div>

	<script>
	function changeVal() {
		var nationVal = document.getElementById('nationality').value;
		if (nationVal == 'others') {

			var othersVal = document.getElementById('other-nationality').style.display = 'block';
			document.getElementById('inner').style.height = '535px';
		}else {
			var nationVal = document.getElementById('nationality').value;
			if (nationVal != 'others') {
				var othersVal = document.getElementById('other-nationality').style.display = 'none';
				// document.getElementById('inner').style.height = null;
				document.getElementById('inner').style.removeProperty('height');
			}
		}
	}

	</script>

	@include('partials.copyright')
@endsection
