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
	    		<li><a href="">{{ $treatment->name }} ({{ $treatment->doctors->count() }} Dr.)</a></li>
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
		    		<li>
		    			<a href="{{ route('doctor.index', $department->id) }}">{{ $department->name }} ({{ $department->doctors->count() }} Dr.)</a>
		    		</li>
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
		    		<li><a href="{{ route('doctor.city', $location->id) }}">{{ $location->city }} ({{ $location->doctors->count() }} Dr.)</a></li>
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