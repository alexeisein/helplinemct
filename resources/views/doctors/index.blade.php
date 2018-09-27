@extends('layouts.main')

@section('title', 'Doctors')

@section('extracss')
	<link rel="stylesheet" href="{{ asset('css/search.css') }}">
	<style>
		@import url(https://fonts.googleapis.com/css?family=Roboto:400,700,300);
	</style>

<style>
/*FILTER*/
#filter-wrap{
	padding: 5px 0;
	border-radius: 5px;
	margin-bottom: 3px;
	margin-bottom: -50px;
}

ul.accordion-menu, .submenuItems li {
  list-style: none;
}


a.accordion-menu {
  text-decoration: none;
}

h2.accordion-menu {
  text-align: center;
  margin: 20px auto;
  color: #fff;
}

.accordion-menu {
  width: 100%;
  max-width: 350px;
  margin: 60px auto 20px;
  background: #fff;
  border-radius: 4px;
}

/*locate*/
.accordion-menu li.open .dropdownlink {
  color: #00695c;
  .fa-chevron-down {
    transform: rotate(180deg);
  }
}
.accordion-menu li:last-child .dropdownlink {
  border-bottom: 0;
}
.dropdownlink {
  cursor: pointer;
  display: block;
  padding: 15px 15px 15px 5px;
  font-size: 18px;
  border-bottom: 1px solid #ccc;
  color: #212121;
  position: relative;
  transition: all 0.4s ease-out;
  i {
    position: absolute;
    top: 17px;
    left: 16px;
  }
  .fa-chevron-down {
    right: 20px;
    left: auto;
    color: red;
  }
}

.submenuItems {
  display: none;
  background: #00695c;
  li {
    border-bottom: 1px solid #B6B6B6;
  }
}

.submenuItems a {
  display: block;
  color: #fff;
  padding: 12px 12px 12px 45px;
  transition: all 0.4s ease-out;
  &:hover {
    background-color: #CDDC39;
    color: #fff;
  }
}
.submenuItems a:hover{
	background-color: #2BBBAD;
}

	</style>
@stop

@section('topjs')
	<script src="{{ asset('js/search.js') }}"></script>

	<script>
		$(function() {
  var Accordion = function(el, multiple) {
    this.el = el || {};
    // more then one submenu open?
    this.multiple = multiple || false;
    
    var dropdownlink = this.el.find('.dropdownlink');
    dropdownlink.on('click',
                    { el: this.el, multiple: this.multiple },
                    this.dropdown);
  };
  
  Accordion.prototype.dropdown = function(e) {
    var $el = e.data.el,
        $this = $(this),
        //this is the ul.submenuItems
        $next = $this.next();
    
    $next.slideToggle();
    $this.parent().toggleClass('open');
    
    if(!e.data.multiple) {
      //show only one menu at the same time
      $el.find('.submenuItems').not($next).slideUp().parent().removeClass('open');
    }
  }
  
  var accordion = new Accordion($('.accordion-menu'), false);
})
	</script>
@endsection

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
	<div class="" style="margin-top: 150px;"><hr>

		<div class="w3ls-heading title-wrap">
			<h3><i class="fa fa-user-md fa-heading"></i> Some Notable Doctors In India</h3>
		</div><hr>

		@include('partials.doc_search')

		<div class="row" style="margin-top: 100px;">

		@include('partials.flash.error')
			
		<div class="col-md-3 agile_team_grid agile_team_grid2">
			<div class="bg-primary" id="filter-wrap">
				<h2 class="text-center"><i class="fas fa-filter"></i> FILTERS</h2>
			</div>

			{{-- <h2>Favorite books</h2> --}}
			<ul class="accordion-menu">
			  <li style="margin-left: 0;">
			    <div class="dropdownlink"> By Treatment
			      <i class="fa fa-chevron-down" aria-hidden="true"></i>
			    </div>
			    <ul class="submenuItems">
			    	@foreach ($treatments as $treatment)
			    		<li><a href="#">{{ $treatment->name }} ({{ $treatment->doctors->count() }} Dr.)</a></li>
			    	@endforeach
			    	{{ $treatments->links() }}
			    </ul>
			  </li>

			  <li>
			    <div class="dropdownlink"> By Department
			      <i class="fa fa-chevron-down" aria-hidden="true"></i>
			    </div>
			    <ul class="submenuItems">
				      @foreach ($departments as $department)
				    		<li><a href="">{{ $department->name }} ({{ $department->doctors->count() }} Dr.)</a></li>
				      @endforeach
				     {{ $departments->links() }}
			    </ul>
			  </li>

			  <li>
			    <div class="dropdownlink"> By City
			      <i class="fa fa-chevron-down" aria-hidden="true"></i>
			    </div>
			    <ul class="submenuItems">
			    	@foreach ($locations as $location)
				    		<li><a href="{{ route('doctor.city') }}">{{ $location->city }} ({{ $location->doctors->count() }} Dr.)</a></li>
				    @endforeach
				   
			    </ul>
			  </li>

			  <li>
			    <div class="dropdownlink"> By Experience
			      <i class="fa fa-chevron-down" aria-hidden="true"></i>
			    </div>
			    <ul class="submenuItems">
				    <li><a href="#">0 - 5 years ({{ $five_years->count() }} Dr.)</a></li>
				    <li><a href="#">6 - 11 years ({{ $six_years->count() }} Dr.)</a></li>
				    <li><a href="#">12 - 17 years ({{ $twelve_years->count() }} Dr.)</a></li>
				    <li><a href="#">18 - 23 years ({{ $eighteen_years->count() }} Dr.)</a></li>
				    <li><a href="#">24 - 29 years ({{ $twentyfour_years->count() }} Dr.)</a></li>
				    <li><a href="#">30 - 35 years ({{ $thirty_years->count() }} Dr.)</a></li>
				    <li><a href="#">36 - 41 years ({{ $thirtysix_years->count() }} Dr.)</a></li>
				    <li><a href="#">42 - 47 years ({{ $fourtytwo_years->count() }} Dr.)</a></li>
				    <li><a href="#">48 - 53 years ({{ $fourtyeight_years->count() }} Dr.)</a></li>
				    <li><a href="#">54 - 59 years ({{ $fiftyfour_years->count() }} Dr.)</a></li>
				    <li><a href="#">60 - 65 years ({{ $sixty_years->count() }} Dr.)</a></li>
			    </ul>
			  </li>

			  <li>
			    <div class="dropdownlink"> By Hospital
			      <i class="fa fa-chevron-down" aria-hidden="true"></i>
			    </div>
			    <ul class="submenuItems">
			    	@foreach ($hospitals as $hospital)
				    		<li><a href="">{{ $hospital->name }} ({{ $hospital->doctors->count() }} Dr.)</a></li>
				      @endforeach
				     {{ $hospitals->links() }}
			    </ul>
			  </li>
			</ul>
	
		</div>
	
		<div class="col-md-8">
			@foreach ($doctors as $doctor)
		        <div class="col-md-4 agile_team_grid agile_team_grid2">
					<div class="agile_team_grid_main">
						<a href="{{ route('doctor.show', $doctor->slug) }}"><img src="{{ asset('storage/doctors/dr-ashok-seth.jpg') }}" alt="{{ asset('$doctor->name') }} " class="img-responsive img-thumbnail" /></a>
						<div class="p-mask">
							<ul class="social-icons">
								<li><a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a></li>
								<li><a href="#" class="icon-button google"><i class="icon-google"></i><span></span></a></li>
								<li><a href="#" class="icon-button v"><i class="icon-v"></i><span></span></a></li>
								<li><a href="#" class="icon-button pinterest"><i class="pinterest"></i><span></span></a></li>
							</ul>
						</div>
					</div>
					<div class="agile_team_grid1">
						<a href="{{ route('doctor.show', $doctor->slug) }}">
							<h4>{{ $doctor->title .' ' .$doctor->name }}</h4>
							<p>{{ strstr($doctor->dicipline, ' ', true) }}</p>
							<small class="text-warning">{{ $doctor->years_experience }} Years Of Experience</small>
						</a>
					</div>
					<br>
				</div>
	        @endforeach
		</div>
	        
		</div>
	</div>

	<div class="text-center">{{ $doctors->appends(['search' => $search])->links() }}</div>

	<br><hr><br>

	@include('partials.enquiry_form')

@include('partials.copyright')

@endsection

@section('bottomjs')

<script type="text/javascript" src="{{ asset('js/hospital.js') }}"></script>

@stop