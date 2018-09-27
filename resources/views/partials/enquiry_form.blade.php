<div class="col-md-12">
    <div class="well well-sm">
        <form action="{{ route('page.enquiry') }}" method="post">
        	{{ csrf_field() }}
        	
        <div class="row">
        	<h2 class="text-center" id="enquiry_header">Need Assistance?</h2>
        	<hr>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Name
	                    <div class="input-group">
	                    	<span class="input-group-addon"><span class="text-primary glyphicon glyphicon-user"></span>
	                        </span>
	                    	<input type="text" class="form-control" name="name" placeholder="Enter name" size="60">
	                	</div>
                	</label>
                </div>

                <div class="form-group">
                    <label>Email Address
	                    <div class="input-group">
	                        <span class="input-group-addon"><p class="text-primary" style="font-weight: bold;">@</p></span>
	                        </span>
	                        <input type="email" class="form-control"  name="email" placeholder="Enter email" size="60">
	                    </div>
                    </label>
                </div>

                <div class="form-group">
                    <label>Country
	                    <div class="input-group">
	                        <span class="input-group-addon"><span class="text-primary glyphicon glyphicon-map-marker"></span>
	                        </span>
	                        <input type="text" class="form-control" name="country" placeholder="Enter Country" size="60">
	                    </div>
	                </label>
                </div>

                <div class="form-group">
                    <label>Region / State
	                    <div class="input-group">
	                        <span class="input-group-addon"><span class="text-primary glyphicon glyphicon-map-marker"></span>
	                        </span>
	                        <input type="text" class="form-control"  name="region" placeholder="Enter Region" size="60">
	                    </div>
	                </label>
                </div>

                <div class="form-group">
                    <label>Mobile Number
	                    <div class="input-group">
	                        <span class="input-group-addon"><span class="text-primary glyphicon glyphicon-phone"></span>
	                        </span>
	                        <input type="text" class="form-control"  name="mobile" placeholder="Enter Mobile Number" size="60">
	                    </div>
                	</label>
                </div>
            </div>

            <div class="col-md-6">
                <label>Message
	                <div class="form-group">
	                    <textarea name="message" id="message" class="form-control" rows="14" cols="100" placeholder="Describe Your Requirement"></textarea>
	                </div>
                </label>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                    SUBMIT <i class="fas fa-paper-plane ml-1"></i>
                </button>
            </div>
        </div>
        </form>
    </div>
</div>