<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index: 20000">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Fill The Form 
				<button type="button" class="close text-danger sbmt-btn" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" id="sbmt-btn-span">X</span>
				</button>
				</h4>
            </div>

		    <form action="{{ route('page.enquiry') }}" method="post">
		     {{ csrf_field() }}
		        <div class="modal-body mx-3">
		            <div class="md-form mb-5">
		                <i class="fas fa-user prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="form34">Your Name</label>
		                <input type="text" id="form34" name="name" class="form-control validate enquiry-form">
		            </div>
		            <br>

		            <div class="md-form mb-5">
		                <i class="fas fa-at prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="form29">Your E-mail</label>
		                <input type="email" id="form29" name="email" class="form-control validate enquiry-form">
		            </div>
		            <br>

		            <div class="md-form mb-5">
		                <i class="fas fa-map-marker-alt prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="country">Country</label>
		                <input type="text" id="country" name="country" class="form-control validate enquiry-form">
		            </div>
		            <br>

		            <div class="md-form mb-5">
		                <i class="fas fa-map-marker-alt prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="region">Region / State</label>
		                <input type="text" id="region" name="region" class="form-control validate enquiry-form">
		            </div>
		            <br>

		            <div class="md-form mb-5">
		                <i class="fas fa-mobile-alt prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="form32">Mobile Number</label>
		                <input type="text" id="form32" name="mobile" class="form-control validate enquiry-form">
		            </div>
		            <br>

		            <div class="md-form">
		                <i class="fas fa-pencil-alt prefix grey-text"></i>
		                <label data-error="wrong" data-success="right" for="form8">Your Message</label>
		                <textarea type="text" id="form8" name="message" class="md-textarea form-control" rows="4"></textarea>
		            </div>
		        </div>

		        <div class="modal-footer d-flex justify-content-center">
		            <button class="btn btn-unique btn-danger btn-lg">SUBMIT
		                <i class="fas fa-paper-plane ml-1"></i></button>
		        </div>
		    </form>
        </div>
    </div>
</div>

<div class="text-center">
    <a href="" class="btn btn-danger btn-rounded mb-4 btn-lg" data-toggle="modal" data-target="#modalContactForm">Send Enquiry</a>
</div>