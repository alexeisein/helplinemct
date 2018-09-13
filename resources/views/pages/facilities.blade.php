@extends('layouts.main')

@section('title', 'Facilities')

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
	<section>
		<div class="w3ls-heading">
			<h3>Facilities</h3>
		</div>
	  <div class="container gal-container">
	    <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
	      <div class="box">
	        <a href="#" data-toggle="modal" data-target="#1">
	          <img src="{{ asset('images/facilities/advance_and_latest_medical_technology.jpg') }}">
	        </a>
	        <div class="modal fade" id="1" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="{{ asset('images/facilities/advance_and_latest_medical_technology.jpg') }}">
	              </div>
	                <div class="col-md-12 description">
	                  <h3 class="text-center">Advance and latest medical technology</h3>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
	      <div class="box">
	        <a href="#" data-toggle="modal" data-target="#2">
	          <img src="{{ asset('images/facilities/birthing_suite.jpg') }}">
	        </a>
	        <div class="modal fade" id="2" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="{{ asset('images/facilities/birthing_suite.jpg') }}">
	              </div>
	                <div class="col-md-12 description">
	                  <h3 class="text-center">Birthing Suite</h3>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
	      <div class="box">
	        <a href="#" data-toggle="modal" data-target="#3">
	          <img src="{{ asset('images/facilities/ct_scan.jpg') }}">
	        </a>
	        <div class="modal fade" id="3" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="{{ asset('images/facilities/ct_scan.jpg') }}">
	              </div>
	                <div class="col-md-12 description">
	                  <h3 class="text-center">CT Scan</h3>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
	      <div class="box">
	        <a href="#" data-toggle="modal" data-target="#4">
	          <img src="{{ asset('images/facilities/cyberknife.jpg') }}">
	        </a>
	        <div class="modal fade" id="4" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="{{ asset('images/facilities/cyberknife.jpg') }}">
	              </div>
	                <div class="col-md-12 description">
	                  <h3 class="text-center">Cyberknife</h3>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
	      <div class="box">
	        <a href="#" data-toggle="modal" data-target="#5">
	          <img src="{{ asset('images/facilities/gamma-cameras.jpg') }}">
	        </a>
	        <div class="modal fade" id="5" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="{{ asset('images/facilities/gamma-cameras.jpg') }}">
	              </div>
	                <div class="col-md-12 description">
	                  <h3 class="text-center">Gamma-Cameras</h3>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
	      <div class="box">
	        <a href="#" data-toggle="modal" data-target="#6">
	          <img src="{{ asset('images/facilities/lab.jpg') }}">
	        </a>
	        <div class="modal fade" id="6" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="{{ asset('images/facilities/lab.jpg') }}">
	              </div>
	                <div class="col-md-12 description">
	                  <h3 class="text-center">Laboratory</h3>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
	      <div class="box">
	        <a href="#" data-toggle="modal" data-target="#7">
	          <img src="{{ asset('images/facilities/library.jpg') }}">
	        </a>
	        <div class="modal fade" id="7" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="{{ asset('images/facilities/library.jpg') }}">
	              </div>
	                <div class="col-md-12 description">
	                  <h3 class="text-center">Library</h3>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
	      <div class="box">
	        <a href="#" data-toggle="modal" data-target="#8">
	          <img src="{{ asset('images/facilities/lounge.jpg') }}">
	        </a>
	        <div class="modal fade" id="8" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="{{ asset('images/facilities/lounge.jpg') }}">
	              </div>
	                <div class="col-md-12 description">
	                  <h3 class="text-center">Lounge</h3>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
	      <div class="box">
	        <a href="#" data-toggle="modal" data-target="#9">
	          <img src="{{ asset('images/facilities/mri.jpg') }}">
	        </a>
	        <div class="modal fade" id="9" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="{{ asset('images/facilities/mri.jpg') }}">
	              </div>
	                <div class="col-md-12 description">
	                  <h3 class="text-center">MRI</h3>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
	      <div class="box">
	        <a href="#" data-toggle="modal" data-target="#10">
	          <img src="{{ asset('images/facilities/neonatal_icu.jpg') }}">
	        </a>
	        <div class="modal fade" id="10" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="{{ asset('images/facilities/neonatal_icu.jpg') }}">
	              </div>
	                <div class="col-md-12 description">
	                  <h3 class="text-center">Neonatal ICU</h3>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
	      <div class="box">
	        <a href="#" data-toggle="modal" data-target="#11">
	          <img src="{{ asset('images/facilities/neuro_vascular_biplane_cath_lab.jpg') }}">
	        </a>
	        <div class="modal fade" id="11" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="{{ asset('images/facilities/neuro_vascular_biplane_cath_lab.jpg') }}">
	              </div>
	                <div class="col-md-12 description">
	                  <h3 class="text-center">Neuro Vascular Biplane Cath Lab</h3>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
	      <div class="box">
	        <a href="#" data-toggle="modal" data-target="#12">
	          <img src="{{ asset('images/facilities/neuro_vascular_biplane_cath_lab2.jpg') }}">
	        </a>
	        <div class="modal fade" id="12" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="{{ asset('images/facilities/neuro_vascular_biplane_cath_lab2.jpg') }}">
	              </div>
	                <div class="col-md-12 description">
	                  <h3 class="text-center">Neuro Vascular Biplane Cath Lab</h3>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
	      <div class="box">
	        <a href="#" data-toggle="modal" data-target="#13">
	          <img src="{{ asset('images/facilities/neuro_vascular_biplane_cath_lab3.jpg') }}">
	        </a>
	        <div class="modal fade" id="13" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="{{ asset('images/facilities/neuro_vascular_biplane_cath_lab3.jpg') }}">
	              </div>
	                <div class="col-md-12 description">
	                  <h3 class="text-center">Neuro Vascular Biplane Cath Lab</h3>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
	      <div class="box">
	        <a href="#" data-toggle="modal" data-target="#14">
	          <img src="{{ asset('images/facilities/opd_area.jpg') }}">
	        </a>
	        <div class="modal fade" id="14" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="{{ asset('images/facilities/opd_area.jpg') }}">
	              </div>
	                <div class="col-md-12 description">
	                  <h3 class="text-center">OPD Area</h3>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
	      <div class="box">
	        <a href="#" data-toggle="modal" data-target="#15">
	          <img src="{{ asset('images/facilities/patient_waiting_area.jpg') }}">
	        </a>
	        <div class="modal fade" id="15" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="{{ asset('images/facilities/patient_waiting_area.jpg') }}">
	              </div>
	                <div class="col-md-12 description">
	                  <h3 class="text-center">Patient waiting area</h3>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
	      <div class="box">
	        <a href="#" data-toggle="modal" data-target="#16">
	          <img src="{{ asset('images/facilities/petandCT.jpg') }}">
	        </a>
	        <div class="modal fade" id="16" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="{{ asset('images/facilities/petandCT.jpg') }}">
	              </div>
	                <div class="col-md-12 description">
	                  <h3 class="text-center">PET and CT</h3>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</section>

	@include('partials.copyright')
@endsection

