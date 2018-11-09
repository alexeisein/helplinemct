<?php

namespace FreeNation\Http\Controllers;

use FreeNation\Doctor;
use FreeNation\Treatment;
use FreeNation\Department;
use FreeNation\Location;
use FreeNation\Hospital;
use Storage;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Department $department)
    {
        // $all = Doctor::whereBetween('years_experience', [0,70])->get();
        // dd($all->count());
        

        $treatments = Treatment::orderBy('id')->with('doctors')->paginate(20);
        
        $departments = Department::orderBy('name')->with('doctors')->paginate(20);

        $hospitals = Hospital::orderBy('name')->with('doctors')->paginate(20);


// Creating Hospital
        $docHospitals = Hospital::orderBy('id')->with('doctors')->get();
        $docDepartments = Department::orderBy('id')->with('doctors')->get();
        $docLocations = Location::orderBy('id')->with('doctors')->get();


// SORT DOCTORS BY YEARS OF EXPERIENCE
        $five_years = Doctor::FiveYears();
        $six_years = Doctor::SixYears();
        $twelve_years = Doctor::TwelveYears();
        $eighteen_years = Doctor::EighteenYears();
        $twentyfour_years = Doctor::TwentyFourYears();
        $thirty_years = Doctor::ThirtyYears();
        $thirtysix_years = Doctor::ThirtySixYears();
        $fourtytwo_years = Doctor::FourtyTwoYears();
        $fourtyeight_years = Doctor::FourtyEightYears();
        $fiftyfour_years = Doctor::FiftyFourYears();
        $sixty_years = Doctor::SixtyYears();

// Get DOCTOR AND CORRESPONDING LOCATIONS
        $locations = Location::orderBy('city')->with('doctors')->paginate(20);

        $search = $request->input('search');
        $doctors = Doctor::orderBY('id')->DoctorsByName($search)->paginate(20);
        // dd($doctors);

        return view('doctors.index', compact([
            'doctors', 'search', 'treatments', 'departments', 'locations', 'hospitals', 'five_years', 'six_years', 'twelve_years', 'eighteen_years', 'twentyfour_years', 'thirty_years', 'thirtysix_years', 'fourtytwo_years', 'fourtyeight_years', 'fiftyfour_years', 'sixty_years', 'docHospitals', 'docDepartments' ,'docLocations',
        ]));
    }


    // SHOW ALL DEOCTORS BY DEPARTMENT
    public function docDept(Request $request, Department $department)
    {
        $searches = $request->input('search');
        $searchDept = Doctor::where('department_id', '=', $department->id)->paginate(18);
        return view('doctors.index', compact('searchDept', 'searches'));
        // $search = $request->input('search');
        // Doctor::inRandomOrder()->DoctorsByName($search)->paginate(18);
        // $doctors = Doctor::with('department')->where('department_id', '=', $department->id)->get();
        
        //return view('doctors.departments.department', compact('doctors', 'search'));
    }

    // SHOW ALL DEOCTORS BY Location
    public function city(Request $request, Location $location)
    {
        $locations = Doctor::with(['location'])->where('location_id', '=', $location->id)->get();
        dd($locations);

        return view('doctors.departments.department', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:191|unique:doctors',
            'descipline' => 'required|max:1000',
            'gender' => 'required',
            'about' => 'required|max:3000',
            'experience' => 'required|max:1000',
            'years_experience' => 'required|integer',
            'education' => 'required|max:1000',
            'awards' => 'required|max:1000',
            'image' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = str_slug($request->name) .'.' .$image->extension();
            $image->storeAs('public/doctors/', $imageName);

            $doctor = Doctor::create([
                'hospital_id' => $request->hospital_id,
                'department_id' => $request->department_id,
                'location_id' => $request->location_id,
                'name' => $request->name,
                'descipline' => $request->descipline,
                'experience' => $request->experience,
                'gender' => $request->gender,
                'about' => $request->about,
                'years_experience' => $request->years_experience,
                'education' => $request->education,
                'awards' => $request->awards,
                'slug' => str_slug($request->name),
                'image' => $imageName
            ]);

            session()->flash('success_create', ucwords($doctor->name) ." Created Successfully!");
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \FreeNation\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        $doctor = Doctor::where('slug', $slug)->firstOrFail();

        $otherDoctors = Doctor::where('slug', !$slug)->OtherDoctors();
        return view('doctors.show', compact(['doctor', 'otherDoctors']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \FreeNation\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        dd($doctor->treatments()->allRelatedIds());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \FreeNation\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \FreeNation\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
