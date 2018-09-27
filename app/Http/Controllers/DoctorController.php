<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Treatment;
use App\Department;
use App\Location;
use App\Hospital;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $all = Doctor::whereBetween('years_experience', [0,70])->get();
        // dd($all->count());
        $search = $request->input('search');

        $treatments = Treatment::orderBy('id')->with('doctors')->paginate(20);
        // $doc = Doctor::orderBy('id')->with('treatments')->paginate(30);
            // dd($doc);
            // dd($treatments);
        // foreach ($treatments as $treatment) {
        //     echo $treatment->name .'<hr>';
        //     // dd($treatment->doctors->count());
        //     foreach ($treatment->doctors as $doctor) {
        //         // echo $doctor->name;
        //     }
        // }
        $departments = Department::orderBy('name')->with('doctors')->paginate(20);
        // dd($departments);
        $hospitals = Hospital::orderBy('name')->with('doctors')->paginate(20);

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
        $doctors = Doctor::inRandomOrder()->DoctorsByName($search)->paginate(18);
        return view('doctors.index', compact([
            'doctors',
            'search',
            'treatments',
            'departments',
            'locations',
            'hospitals',
            'five_years','six_years','twelve_years','eighteen_years','twentyfour_years','thirty_years','thirtysix_years','fourtytwo_years','fourtyeight_years','fiftyfour_years','sixty_years',
        ]));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctor  $doctor
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
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
