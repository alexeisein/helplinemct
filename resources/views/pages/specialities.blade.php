@extends('layouts.main')

@section('title', 'Specialities')

@section('content')

<style>
	#description p, ol{
		font-size: 17px;
		font-family: 'Roboto';
		font-weight: lighter;
	}
	#description h4{
		background-color: lightblue;
		padding: 10px 0;
		font-weight: bold;
		color: #000;
		font-size: 20px;
		font-family: 'Raleway';
	}
</style>

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

<div class="container">
	
	<div class="w3ls-heading">
			<h3>Specialities</h3>
	</div>
	<br>

	<div>
        <p>
            With a wide range of medical specialities on offer, India is a one stop destination for affordable, quality services and care for international patients. <br><br>
        </p>
    </div>
	<br><br>

	<section>
	  <div class="container gal-container">
	    <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
	      <div class="box">
	      	<h3 class="text-center bg-success">
	      		Anaesthesia &amp; Critical Care
	      	</h3>
	        <a href="#" data-toggle="modal" data-target="#1">
	          <img src="{{ asset('images/specialities/anaesthesia_critical_care.jpg') }}">
	        </a>
	        <div class="modal fade" id="1" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="{{ asset('images/specialities/anaesthesia_critical_care.jpg') }}">
	              </div>
	                <div class="col-md-12 description" id="description">
	                  <h3 class="text-center">Anaesthesia &amp; Critical Care</h3>
	                  <p style="font-size: 17px;">The Department of Anaesthesia &amp; Critical Care provides crucial medical care before, during, and after critical medical procedures. Equipped with the latest in medical technology, our team of dedicated experts provide round-the-clock care to our patients; treating both simple and complex cases such as haemodynamic instability (hypertension/ hypotension), airway or respiratory compromise, acute renal failure, potentially lethal cardiac arrhythmias, and the cumulative effects of multiple organ failures to name a few.</p><br>

						<p>Our hospitals feature state-of-the-art infrastructure including laminar-flow Operating Theatres, and internationally accredited Intensive Care Units (ICU) and Paediatric Intensive Care Units (PICU). This, along with our comprehensive team of adult and paediatric anesthesiologists, intensivists, and critical care experts working in multispecialty teams ensures that our patients always receive timely, expert medical care.</p><br>

						<h4 class="text-center">Key Advantages at NH:</h4>

						<ol>
							<li>Expert adult and paediatric anesthesiologists/critical care experts.</li>
							<li>State-of-the-art Critical Care Units for adults and children.</li>
							<li>Dedicated Cardiac Critical Care Units including one of the largest such units in Asia.</li>
							<li>Intensive Care Units which follow international gold standards for quality and care.</li>
						</ol>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>

	    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
	      <div class="box">
	      	<h3 class="text-center bg-success">
	      		BONE MARROW TRANSPLANT
	      	</h3>
	        <a href="#" data-toggle="modal" data-target="#2">
	          <img src="{{ asset('images/specialities/bonemarrow.jpg') }}">
	        </a>
	        <div class="modal fade" id="2" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="{{ asset('images/specialities/bonemarrow.jpg') }}">
	              </div>
	                <div class="col-md-12 description" id="description">
	                  <h3 class="text-center">BONE MARROW TRANSPLANT</h3>
	                  <p>The Bone Marrow Transplant Unit is one of Indias largest and most experienced units. Manned by a team of expert haemato-oncologists, we have extensive experience in both adult and paediatric Bone Marrow/Stem Cell Transplants. The unit has an exceptional track record and has treated patients from across the world, including ones from Oman, Iraq, Iran, Yemen, Afganistan, Sri Lanka, Nigeria, Bangladesh, Nepal, and Pakistan.</p><br>

						<p>A key advantage is the multi-specialty approach which means the BMT team works closely with allied specialists to ensure appropriate care is provided to patients both pre and post the procedure. We are also among the few centres in India offering umbilical cord blood transplant and cord blood storage. Key conditions treated with BMT are Acute Myeloid Leukemia, Acute Lymphoid Leukemia, Anaplastic Anaemia, Multiple Myeloma, Lymphoma, Immunodeficiency Disorders, Thalassemia, and Congenital Storage and Metabolism Disorders.</p><br>

						<h4 class="text-center">Types of Bone Marrow/Steam Cell Transplants Offered:</h4>
						<ol>
							<li>Autologous Bone Marrow Transplant</li>
							<li>Allogeneic Bone Marrow Transplant</li>
							<li>Peripheral Blood Steam Cell Transplant</li>
							<li>Umbilical Cord Blood Transplant</li>
							<li>Non-Myeloablative or Mini Stem Cell Transplants for older patients and those with multiple health problems</li>
						</ol>

						<h4 class="text-center">Key Features and Facilities:</h4>
						<ol>
							<li>Cord Blood Banking</li>
							<li>Stem Cell Cryopreservation</li>
							<li>HLA Typing</li>
							<li>Unrelated Donor Searches</li>
							<li>Customised Treatment for Acute Leukemias</li>
						</ol>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
	      <div class="box">
	      	<h3 class="text-center bg-success">
	      		CANCER
	      	</h3>
	        <a href="#" data-toggle="modal" data-target="#3">
	          <img src="{{ asset('images/specialities/cancer.jpg') }}">
	        </a>
	        <div class="modal fade" id="3" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="{{ asset('images/specialities/cancer.jpg') }}">
	              </div>
	                <div class="col-md-12 description" id="description">
	                  <h3 class="text-center">CANCER</h3>
	                  <p>The Department of Oncology at runs a comprehensive cancer care programme that follows a trans-disciplinary and multi-modality approach in the field of adult and paediatric Oncology. The department has an extensive medical programme, with super-sub-specialists in the field of Medical Oncology, Haematology – Adult &amp; Paediatric, Radiation Oncology, Specialised Onco surgery. There are various specialised clinics and a range of Support services for prevention, diagnosis and treatment of cancer. The focus of the cancer treatment is on the conservation of the involved organ as much as possible, without compromising on the safety of the patient thereby ensuring faster recovery time, minimal or no disfiguration, and return to normal life at the earliest.</p><br>

					<p>With cutting-edge technology and a team of dedicated superspecialists, we offer care for all stages of cancer. Depending on nature and stage, a wide range of therapies are used for the cancer treatment. Besides conventional cancer treatments like Chemotherapy, Radiotherapy and Hormone-Therapy, the department of Oncology also excels in the newer fields of Nuclear Medicine and Stem Cell Transplants. The nurses and other support staff at the department are highly trained and diagnostic facilities include advanced MRI, CT, Mammogram, High-Resolution Scanners and PET scans. Radiotherapy equipment includes linear accelerators with IMRT, IGRT and V-Mat facilities.</p><br>

					<h4 class="text-center">Major Types of Cancers Treated:</h4>

					<ol>
						<li>- Haemato</li>
						<li>- Gastrointestinal</li>
						<li>- Head and Neck</li>
						<li>- Gastroenterological</li>
						<li>- Gynaecological</li>
						<li>- Medical</li>
						<li>- Neurological</li>
						<li>- Paediatric</li>
						<li>- Breast</li>
						<li>- Thoracic</li>
						<li>- Urological</li>
					</ol>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
	      <div class="box">
	      	<h3 class="text-center bg-success">
	      		CARDIAC SURGERY - ADULT
	      	</h3>
	        <a href="#" data-toggle="modal" data-target="#4">
	          <img src="{{ asset('images/specialities/cardiac.jpg') }}">
	        </a>
	        <div class="modal fade" id="4" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="{{ asset('images/specialities/cardiac.jpg') }}">
	              </div>
	                <div class="col-md-12 description" id="description">
	                  <h3 class="text-center">CARDIAC SURGERY - ADULT</h3>
						<p>Cardiac Surgery department is among Indias most experienced and well-known. We perform some of the most complex cardiac procedures known and treat all major cardiac conditions in adults. Our hospitals feature state-of-the-art, internationally accredited medical facilities including Cardiac Care Units (CCU) and dedicated cardiac operating theatres. The cardiac teams consist of some of the most experienced and skilled cardiac surgeons in India, with many having extensive training and experience abroad.</p><br>

						<p>The department works closely with other allied specialities to ensure that patients are properly diagnosed and treated based on their individual needs, thus leading to better outcomes. we work with patients and their caregivers to train them in basic care to improve the quality of life of our patients after their surgery. For those who have received implants such as pacemakers, programs are conducted in its care, safety and function.</p><br>

						<h4 class="text-center">Major Cardiac Surgeries Performed:</h4>

						<ol>
							<li>- Coronary Artery Bypass Graft (CABG) On-Pump/Off-Pump</li>
							<li>- Coronary Artery Bypass Graft (CABG) through LIMA/RIMA – Y Technique</li>
							<li>- Left Ventricular Assisted Device (LVAD) Implantation</li>
							<li>- Ross Procedure</li>
							<li>- Dor Procedure</li>
							<li>- Minimally Invasive Cardiac Surgery</li>
							<li>- Intra-Cardiac Repairs</li>
							<li>- Aortic Aneurysm Repair</li>
							<li>- Valvular Surgeries: Mitral Valve Replacement (MVR), Aortic Valve Replacement (AVR), &amp; Double Valve Repair (DVR)</li>
							<li>- Pacemaker Implantation</li>
							<li>- Implantable Cardioverter-Defibrillator (ICD) Implantation</li>
						</ol>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
	      <div class="box">
	      	<h3 class="text-center bg-success">
	      		CARDIAC SURGERY - PAEDIATRIC
	      	</h3>
	        <a href="#" data-toggle="modal" data-target="#5">
	          <img src="{{ asset('images/specialities/PediatricCardiacSurgery.jpg') }}">
	        </a>
	        <div class="modal fade" id="5" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="{{ asset('images/specialities/PediatricCardiacSurgery.jpg') }}">
	              </div>
	                <div class="col-md-12 description" id="description">
	                  <h3 class="text-center">CARDIAC SURGERY - PAEDIATRIC</h3>
	                  <p>The Paediatric Cardiac surgery department has over the years earned a reputation for medical excellence and patient care. The expert team of paediatric cardiac surgeons work with several allied paediatric specialists to perform some of the most complicated and rare cardiac procedures in the country. Equipped with state-of-the-art facilities including one of the largest Paediatric Intensive Care Units (PICU) in the world and a world-class medical team, our hospitals treat a wide range of paediatric cardiac conditions on children whose age range from newborn to young adults.</p><br>

					<p>The department has extensive experience in treating international patients and frequently receives patients from across the world including nations such as Nigeria, Kenya, Tanzania, Oman, Iraq, and Indonesia.</p><br>

					<h4 class="text-center">Major Paediatric Cardiac Procedures Performed:</h4>

					<ol>
						<li>- Atrial Septal Defect (ASD) Surgery</li>
						<li>- Ventricle Septal Defect (VSD) Surgery.</li>
						<li>- Tetralogy of Fallot (TOF)</li>
						<li>- Arterial Switches.</li>
						<li>- Congenital Heart Disease Repair</li>
						<li>- Minimally Invasive Paediatric Surgeries</li>
					</ol>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
	      <div class="box">
	      	<h3 class="text-center bg-success">
	      		CARDIOLOGY - ADULT
	      	</h3>
	        <a href="#" data-toggle="modal" data-target="#6">
	          <img src="{{ asset('images/specialities/cardiology-adult.jpg') }}">
	        </a>
	        <div class="modal fade" id="6" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="{{ asset('images/specialities/cardiology-adult.jpg') }}">
	              </div>
	                <div class="col-md-12 description" id="description">
	                  <h3 class="text-center">CARDIOLOGY - ADULT</h3>
	                  <p>The Cardiology department specialises in all streams of cardiology including Interventional Cardiology and Electrophysiology. The team consists of some of the most highly qualified and experienced cardiologists, electrophysiologists, and specialists in the country treating a wide range of cardiac conditions. Our state-of-the-art hospitals feature cutting-edge facilities including Hybrid and Digital Cath Labs, TMT, Holter monitors, and Radio Frequency Ablation (RFA) equipment. We also operates dedicated Electrophysiology and Arrhythmia clinics to provide specialist care for Heart Rhythm Disorders (HRD).</p><br>

						<p>Treatment for Cardiac conditions offered ranges from medication, treatment of underlying conditions, interventional procedures to both minimally invasive and open heart surgery. To provide comprehensive care to patients, the team works closely with allied departments to ensure accurate diagnosis are reached and appropriate pre and post treatment care is provided.</p><br>

						<h4 class="text-center">Major Cardiac Conditions Treated:</h4>

						<ol>
							<li>- Coronary artery disease</li>
							<li>- Peripheral arterial disease</li>
							<li>- Cerebrovascular disease</li>
							<li>- Renal artery stenosis</li>
							<li>- Hypertensive heart disease</li>
							<li>- Heart failure</li>
							<li>- Pulmonary heart disease</li>
							<li>- Cardiac dysrhythmias</li>
						</ol>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
	      <div class="box">
	      	<h3 class="text-center bg-success">
	      		CARDIOLOGY - PAEDIATRIC
	      	</h3>
	        <a href="#" data-toggle="modal" data-target="#7">
	          <img src="{{ asset('images/specialities/cardiology-paediatric.jpg') }}">
	        </a>
	        <div class="modal fade" id="7" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="{{ asset('images/specialities/cardiology-paediatric.jpg') }}">
	              </div>
	                <div class="col-md-12 description" id="description">
	                  <h3 class="text-center">CARDIOLOGY - PAEDIATRIC</h3>
	                  <p>The Paediatric Cardiology department is one of the most comprehensive and experienced in the country. Working closely with other paediatric departments, the team treats a wide range of foetal, neonatal and paediatric cardiac conditions. The team consists of highly qualified and skilled paediatric cardiologists and electrophysiologists with extensive experience. Facilities at our internationally accredited hospitals include Hybrid and Digital Cath Labs, TMT, Holter monitors, and dedicated Electrophysiology centres.</p><br>

						<p>Treatment for Paediatric Cardiac conditions vary based on the severity and complexity of the condition and ranges from medication, therapy, and lifestyle modifications to interventional procedures and heart surgeries.</p><br>

						<h4 class="text-center">Key Peadiac Cardiac Conditions Treated:</h4>

						<ol>
							<li>- Congenital Valve Defects</li>
							<li>- Congenital Heart Diseases</li>
							<li>- Inherited Congenital Heart Diseases</li>
							<li>- Heart Rhythm Disorders</li>
							<li>- Cardiac conditions caused by other medical conditions</li>
						</ol>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
	      <div class="box">
	      	<h3 class="text-center bg-success">
	      		CLINICAL NUTRITION &amp; DIETETICS
	      	</h3>
	        <a href="#" data-toggle="modal" data-target="#8">
	          <img src="{{ asset('images/specialities/CLINICALNUTRITION.jpg') }}">
	        </a>
	        <div class="modal fade" id="8" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="{{ asset('images/specialities/CLINICALNUTRITION.jpg') }}">
	              </div>
	                <div class="col-md-12 description" id="description">
	                  <h3 class="text-center">CLINICAL NUTRITION &amp; DIETETICS</h3>
	                  <p>We take pride in playing an important role in promoting improved health through good nutrition. A variety of services in Clinical Nutrition &amp; Dietetics are provided to our inpatients, outpatients and their attendants.</p><br>

						<h4 class="text-center">Inpatient Services:</h4>
						<p>Our clinical dietitians conduct comprehensive nutritional assessments for inpatients to identify goals for improving nutritional intake and health. Individualised care plans are designed to meet the patient’s specific medical and lifestyle needs. A variety of lectures and programs concerning nutrition wellness and health are also provided. For international patients, special consideration is given to cultural and religious preferences when meals are served</p><br>

						<h4 class="text-center">Specialty Areas:</h4>

						<ol>
							<li>- Management of Weight, Cholesterol, Hypertension, Diabetes, Dialysis and Non-Dialysis, Gastrointestinal Disorders, etc.</li>
							<li>- Oncology Nutrition</li>
							<li>- Wellness nutrition</li>
							<li>- Paediatric Nutrition</li>
							<li>- Weight Loss Management</li>
						</ol>

						<h4 class="text-center">Food Services:</h4>
						<p>The Food Services staff works very closely with the dieticians to offer nutritionally adequate and satisfying platters. Food Services provide meals and snacks for patients, staff, guests and visitors. The staff take great care to prepare and expedite the appropriate physician-ordered diet order for patients.</p><br>

						<h4 class="text-center">Therapeutic diets for Services:</h4>
						<p>Provide Therapeutic diets for in-patients like Diabetic Diet, Low Salt, High Protein etc according to the patient’s condition, likes and dislikes which help the patients to recover faster.</p>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
	      <div class="box">
	      	<h3 class="text-center bg-success">
	      		CRANIO-MAXILLO FACIAL SURGERY
	      	</h3>
	        <a href="#" data-toggle="modal" data-target="#9">
	          <img src="{{ asset('images/specialities/facialsurgery.jpg') }}">
	        </a>
	        <div class="modal fade" id="9" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="{{ asset('images/specialities/facialsurgery.jpg') }}">
	              </div>
	                <div class="col-md-12 description" id="description">
	                  <h3 class="text-center">CRANIO-MAXILLO FACIAL SURGERY</h3>
	                  <p>The department of Cranio-Maxillo Facial surgery is one of the most experienced in India and treats various diseases, injuries and defects in the head, neck, face, jaws and the hard and soft tissues of the oral (mouth) and maxillofacial (jaws and face) region. The team comprises of highly trained specialists with years of experience who work in multispecialty teams to provide comprehensive care to patients. Our hospitals are among the few in the country to offer craniofacial prosthetics and features state-of-the-art facilities including a fully equipped radiodiagnostic centre, 3D imaging tools to plan facial surgeries and world-class Intensive Care Units (ICU).</p><br>

						<h4 class="text-center">Key Cranio-Maxillo Facial Procedures Offered:</h4>
						<ol>
							<li>- Craniosynostosis correction</li>
							<li>- Cleft lip and palate correction</li>
							<li>- Surgical correction of snoring</li>
							<li>- TMJ (Jaw Joint) surgery</li>
							<li>- Facial Deformities surgery</li>
							<li>- Rhinoplasty (Nose surgery)</li>
							<li>- Facial Trauma correction</li>
							<li>- Facial aesthetic surgery</li>
						</ol>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
	      <div class="box">
	      	<h3 class="text-center bg-success">
	      		DENTAL SCIENCES
	      	</h3>
	        <a href="#" data-toggle="modal" data-target="#10">
	          <img src="{{ asset('images/specialities/dental.jpg') }}">
	        </a>
	        <div class="modal fade" id="10" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="{{ asset('images/specialities/dental.jpg') }}">
	              </div>
	                <div class="col-md-12 description" id="description">
	                  <h3 class="text-center">DENTAL SCIENCES</h3>
	                  <p>The Department of Dentistry consists of a team of expert paediatric dentists, orthodontists, endodontics, prosthodontics and periodontics. Our services are rendered to children, teens, adults and even patients with special healthcare needs. From common paediatric conditions like chipped tooth and overbites to more complex surgical treatments, our team of experts are equipped with years of experience to handle all major dental conditions. The services of the department are particularly popular with international patients because of the departments expertise, range of services, and state-of-the-art equipment.</p><br>

						<h4 class="text-center">Key Dental Procedures offered:</h4>
						<ol>
							<li>- Extractions</li>
							<li>- Crowns</li>
							<li>- Dentures</li>
							<li>- Restorations</li>
							<li>- Root canal treatment</li>
							<li>- Orthodontic procedures</li>
							<li>- Periodontal surgeries</li>
							<li>- Teeth whitening</li>
							<li>- Pulpotomy</li>
							<li>- Pulpectomy</li>
						</ol>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
	      <div class="box">
	      	<h3 class="text-center bg-success">
	      		DENTAL SCIENCES PAEDIATRIC
	      	</h3>
	        <a href="#" data-toggle="modal" data-target="#11">
	          <img src="{{ asset('images/specialities/dentalpaediatric.jpg') }}">
	        </a>
	        <div class="modal fade" id="11" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="{{ asset('images/specialities/dentalpaediatric.jpg') }}">
	              </div>
	                <div class="col-md-12 description" id="description">
	                  <h3 class="text-center">DENTAL SCIENCES PAEDIATRIC</h3>
	                  <p>Paediatric Dental care encompasses a wide range of dental issues, including common ones that occur during growth to more serious cases of tumours or trauma. The team also closely works with experts in several specialities such as rheumatology, neurology, and oncology to ensure that proper diagnosis and treatment is provided to patients. Some of the common dental problems treated at NH include</p><br>

						<ol>
							<li>Sores and tumours in the mouth</li>
							<li>Tooth decay</li>
							<li>Oral surgery</li>
							<li>Chipped teeth</li>
							<li>Dental emergencies</li>
							<li>Dental trauma</li>
						</ol>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
	      <div class="box">
	      	<h3 class="text-center bg-success">
	      		DERMATOLOGY
	      	</h3>
	        <a href="#" data-toggle="modal" data-target="#12">
	          <img src="{{ asset('images/specialities/dermotology.jpg') }}">
	        </a>
	        <div class="modal fade" id="12" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="{{ asset('images/specialities/dermotology.jpg') }}">
	              </div>
	                <div class="col-md-12 description" id="description">
	                  <h3 class="text-center">DERMATOLOGY</h3>
						<p>The department of Dermatology provides management and care for diseases related to skin, hair, nails, sexually transmitted diseases, and cosmetology and dermato-surgical procedures. The team consists of expert specialists with extensive experience in treating a wide range of paediatric and adult dermatological conditions. The department also works with other specialists to provide supportive care for a wide range of conditions.</p><br>


						<h4 class="text-center">Key Dermatology Conditions Treated:</h4>

						<ol>
							<li>- Skin conditions like eczemas, psoriasis, vitiligo, leprosy, fungal, viral and common bacterial conditions.</li>
							<li>- Hair disorders like baldness, hair loss, and nail disorders.</li>
							<li>- Diagnostic and cosmetic procedures like skin biopsies, electrocautery for removal of skin tags, warts curettage of molluscum contagiosum, chemical peels for pigmentation and scars.</li>
							<li>- Treatment of acne scars, derma roller for scars, ear piercing, cryotherapy for warts, corns</li>
							<li>- Intralesional injections for keloids, patchy hair loss, patch testing and allergy testing</li>
							<li>- Basal Cell Carcinoma (BCC)</li>
							<li>- Melanoma</li>
							<li>- Squamous Cell Carcinomas</li>
							<li>- Lymphomas</li>
						</ol>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
	      <div class="box">
	      	<h3 class="text-center bg-success">
	      		Diabetology
	      	</h3>
	        <a href="#" data-toggle="modal" data-target="#13">
	          <img src="{{ asset('images/specialities/Diabetology.jpg') }}">
	        </a>
	        <div class="modal fade" id="13" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="{{ asset('images/specialities/Diabetology.jpg') }}">
	              </div>
	                <div class="col-md-12 description" id="description">
	                  <h3 class="text-center">Diabetology</h3>
	            		<p>Treatment of Diabetes is comprehensive and starts with preventive checks which can help those at risk avoid completely. For those with diabetes, there's a Health’s team of expert diabetologists and trained medical staff offer care for the various types and stages of diabetes. The department also has certified educators to offer diabetes counselling and Dieticians to provide customised meal plans. Treatment options range from medication and dietary guidance to implanting insulin pumps and surgery in cases where the disease is caused by other conditions such as obesity. Our dedicated diabetes clinics provide services such as laboratory tests, glucose monitoring and insulin pump services.</p><br>

						<h4 class="text-center">Major Diabeties Services:</h4>

				    <ol>
				    	<li>- Foot care - Screening for high-risk cases and management of foot ulcers</li>
				    	<li>- Eye care - Care for Diabetes Retinopathy, Muscular Disorders, Cataracts, and Glaucoma</li>
				    	<li>- Kidney Care - Care to prevent or delay the development of diabetic kidney disease</li>
				    	<li> - Weight management - Services include guidance on appropriate nutrition and robotic bariatric surgery</li>
				    	<li>- Diabetes in Children - The paediatric, nutrition and other allied departments lend their expertise in treating and caring for minors with the disease.</li>
				    </ol>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
	      <div class="box">
	      	<h3 class="text-center bg-success">
	      		E.N.T - Paediatric
	      	</h3>
	        <a href="#" data-toggle="modal" data-target="#14">
	          <img src="{{ asset('images/specialities/ent_pediatric.jpg') }}">
	        </a>
	        <div class="modal fade" id="14" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="{{ asset('images/specialities/ent_pediatric.jpg') }}">
	              </div>
	                <div class="col-md-12 description" id="description">
	                  <h3 class="text-center">E.N.T - Paediatric</h3>
	                  <p>
	                  	Paediatric ENT or Otolaryngology specialises in the care of children’s Ears, Nose and Throat. ENT care for children is crucial as it covers some of the most prevalent issues that children face during growth. Narayana Health hosts paediatric ENT specialists who cater to issues both common and complex such as:
	                  </p><br>
	                  <ol>    
	                  	<li>- Tonsillitis</li>
	                  	<li>- Sinus disease</li>
	                  	<li>- Ear infections</li>
	                  	<li>- Airway disorders</li>
	                  	<li>- Congenital defects</li>
	                  	<li>- Hearing loss</li>
	                  	<li>- Communication disorders</li>
	                  	<li>- Deafness</li>
    					<li>- Cochlear implants</li>
	                  </ol>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
	      <div class="box">
	      	<h3 class="text-center bg-success">
	      		Endocrinology
	      	</h3>
	        <a href="#" data-toggle="modal" data-target="#15">
	          <img src="{{ asset('images/specialities/Endocrinology.jpg') }}">
	        </a>
	        <div class="modal fade" id="15" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="{{ asset('images/specialities/Endocrinology.jpg') }}">
	              </div>
	                <div class="col-md-12 description" id="description">
	                  <h3 class="text-center">Endocrinology</h3>
	                  <p>The Department of Endocrinology at Narayana Health offers treatment for all major endocrine diseases and works closely with other departments such as oncology, neurology, reproductive medicine, and genetics to provide accurate and comprehensive care for its patients. The department features a team of experienced adult and paediatric endocrinologists which allow us to provide a wide variety of treatments for patients. Key facilities include laboratory services for hormonal concentration estimation, Ultrasound services for thyroid and parathyroid disorders, and Fine Needle Aspiration Cytology (FNAC) for thyroid nodules.</p><br>


						<h4 class="text-center">Major Endocrine Diseases Treated At Narayna Health:</h4>

						<ol>
							<li>- Thyroid gland: Hypothyroidism, Hyperthyroidism, Thyroid Nodules, Thyroid Eye Disorders, and Thyroid Cancers</li>
							<li>- Pituitary gland: Pituitary Tumours, Acromegaly, Cushing’s disease, Prolactin Disorders, Diabetes Insipidus, Hypophysitis and Sheehan’s Syndrome</li>
							<li>- Reproductive endocrine disorders: PCOS, Hirsutism, Male &amp; Female Infertility, and Sexual Disorders</li>
							<li>- Paediatric Endocrinology: Growth, Thyroid, Puberty, Bone &amp; Calcium Disorders</li>
							<li>- Metabolic bone disorders: Vitamin D Deficiency, Rickets, Parathyroid Disorders, Osteoporosis, and Genetic Disorders of the Bone</li>
							<li>- Adrenal gland: Hypertension, Congenital Adrenal Hyperplasia, Adrenal Tumours, Pheochromocytoma, and Aldosteronism (Conn’s Syndrome)</li>
							<li>- Obesity Management: Childhood and Adult Obesity Management. Collaborates with bariatric surgeons and nutritionists for weight management</li>
						</ol>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
	      <div class="box">
	      	<h3 class="text-center bg-success">
	      		Endocrinology - Paediatric
	      	</h3>
	        <a href="#" data-toggle="modal" data-target="#16">
	          <img src="{{ asset('images/specialities/Endocrinology-pediatric.jpg') }}">
	        </a>
	        <div class="modal fade" id="16" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="{{ asset('images/specialities/Endocrinology-pediatric.jpg') }}">
	              </div>
	                <div class="col-md-12 description" id="description">
	                  <h3 class="text-center">Endocrinology - Paediatric</h3>
	                  <p>
	                  	The endocrine system releases hormones into the blood stream which regulate several aspects of the human body such as growth, mood, and metabolism. Paediatric endocrinologists at Narayana Heath treat various endocrine problems in children and adolescents. The team also works with several allied specialists at NH to ensure all-round care and treatment is provided for the patient's medical conditions. Some of the problems treated are:
	                  </p><br>
	                  	<ol>
	                  	    <li>- Diabetes</li>
						    <li>- Thyroid disease</li>
						    <li>- Growth disorders</li>
						    <li>- Hormone deficiency</li>
						    <li>- Puberty disorders</li>
						    <li>- Gonad disorders</li>
						    <li>- Pituitary disorders</li>
	                  	</ol>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</section>

</div>

@include('partials.copyright')
@endsection
