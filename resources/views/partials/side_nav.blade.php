<div class="col-md-3 col-sm-3 col-xs-12 col-md-offset-1 bg-warning input-lg">
	<div class="col-md-12" style="margin-bottom: 10px;">
		<a href="{{ url('/keyareas') }}"><h2 class="text-center">Key Procedures</h2>
		</a>
		<a href=""></a>
	</div>

	<div class="col-md-12 col-xs-12 key_pro">
		<a id="key-link" class="{{ Request::is('/ross_procedure') ? 'selected' : ''}}" href="{{ route('keyareas.ross') }}">
			<img class="img-rounded" src="{{ asset('images/keyareas/ross_procedure.jpg') }}" alt="Ross Procedures">
			<div class="box_data_side">
				<span>Ross Procedure</span>
			</div>
		</a>
	</div>

	<div class="col-md-12 col-xs-12 key_pro">
		<a id="key-link" class="{{ Request::is('/valve_repair') ? 'selected' : ''}}" href="{{ route('keyareas.valve') }}">
			<img class="img-rounded" src="{{ asset('images/keyareas/ValveRepair.jpg') }}" alt="Valve Repair">
			<div class="box_data_side">
				<span>Valve Repair</span>
			</div>
		</a>
	</div>

	<div class="col-md-12 col-xs-12 key_pro">
		<a id="key-link" class="{{ Request::is('/Dors_Procedure') ? 'selected' : ''}}" href="{{ route('keyareas.dors') }}">
			<img class="img-rounded" src="{{ asset('images/keyareas/dor_procedure.jpg') }}" alt="Dors Procedure">
			<div class="box_data_side">
				<span>Dors Procedure</span>
			</div>
		</a>
	</div>

	<div class="col-md-12 col-xs-12 key_pro">
		<a id="key-link" class="{{ Request::is('/lvad') ? 'selected' : ''}}" href="{{ route('keyareas.lvad') }}">
			<img class="img-rounded" src="{{ asset('images/keyareas/LVAD_Exchange.jpg') }}" alt="Left Ventricular Assisted Device (LVAD)">
			<div class="box_data_side">
				<span>(LVAD)</span>
			</div>
		</a>
	</div>

	<div class="col-md-12 col-xs-12 key_pro">
		<a id="key-link" class="{{ Request::is('/cabg') ? 'selected' : ''}}" href="{{ route('keyareas.cabg') }}">
			<img class="img-rounded" src="{{ asset('images/keyareas/coronary_bypass.jpg') }}" alt="CABG & Redo Coronary Artery Bypass Grafting">
			<div class="box_data_side">
				<span>CABG</span>
			</div>
		</a>
	</div>

	<div class="col-md-12 col-xs-12 key_pro">
		<a id="key-link" class="{{ Request::is('/joint_replacement') ? 'selected' : ''}}" href="{{ route('keyareas.joint') }}">
			<img class="img-rounded" src="{{ asset('images/keyareas/joint_replacement.jpg') }}" alt="Joint Replacement">
			<div class="box_data_side">
				<span>Joint Replacement</span>
			</div>
		</a>
	</div>

	<div class="col-md-12 col-xs-12 key_pro">
		<a id="key-link" class="{{ Request::is('/liver_transplant') ? 'selected' : ''}}" href="{{ route('keyareas.liver') }}">
			<img class="img-rounded" src="{{ asset('images/keyareas/liver_transplant.jpg') }}" alt="Liver Transplant">
			<div class="box_data_side">
				<span>Liver Transplant</span>
			</div>
		</a>
	</div>

	<div class="col-md-12 col-xs-12 key_pro">
		<a id="key-link" class="{{ Request::is('/kidney_transplant') ? 'selected' : ''}}" href="{{ route('keyareas.kidney') }}">
			<img class="img-rounded" src="{{ asset('images/keyareas/kidney_transplant.jpg') }}" alt="Kidney Transplant">
			<div class="box_data_side">
				<span>Kidney Transplant</span>
			</div>
		</a>
	</div>

	<div class="col-md-12 col-xs-12 key_pro">
		<a id="key-link" class="{{ Request::is('/bone_marrow') ? 'selected' : ''}}" href="{{ route('keyareas.bone') }}">
			<img class="img-rounded" src="{{ asset('images/keyareas/bmt.jpg') }}" alt="Bone Marrow Transplant – BMT">
			<div class="box_data_side">
				<span>BMT</span>
			</div>
		</a>
	</div>

	<div class="col-md-12 col-xs-12 key_pro">
		<a id="key-link" class="{{ Request::is('/cochlear_implant') ? 'selected' : ''}}" href="{{ route('keyareas.cochlear') }}">
			<img class="img-rounded" src="{{ asset('images/keyareas/cochlear.jpg') }}" alt="Cochlear Implant">
			<div class="box_data_side">
				<span>Cochlear Implant</span>
			</div>
		</a>
	</div>
</div>

