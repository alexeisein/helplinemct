<?php

namespace FreeNation\Http\Controllers;

use FreeNation\Hospital;
use FreeNation\Location;
use FreeNation\Comfort;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    protected $hospitalObj;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // }
        // dd($request);
        $search = $request->input('search');
        $location = Location::pluck('id', 'city');
        $hospitals = Hospital::inRandomOrder()->SearchHospital($search)->paginate(20);
        return view('hospitals.index', compact('hospitals', 'search', 'location'));
        //the returned search is for pagination appendition in view, else, search works.
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hospital.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required|max:190',
            'about' => 'required|max:2000',
            'bed' => 'required|integer',
            'icu_bed' => 'required|integer',
            'established' => 'required|integer',
            'achievment' => 'required|max:2000',
            'infrastructure' => 'required|max:2000',
            'address' => 'required|max:2000',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = str_slug($request->name) .'.' .$image->extension();
            $image->storeAs('public/hospitals/', $imageName);

            $hospital = Hospital::create([
                'location_id' => $request->location_id,
                'name' => $request->name,
                'about' => $request->about,
                'bed' => $request->bed,
                'icu_bed' => $request->icu_bed,
                'established' => $request->established,
                'achievment' => $request->achievment,
                'infrastructure' => $request->infrastructure,
                'address' => $request->address,
                'slug' => str_slug($request->name),
                'image' => $imageName
                ]
            );

            session()->flash('success_create', $hospital ." Hospital Created Successfully!");
             return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \FreeNation\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $hospital = Hospital::where('slug', $slug)->firstOrFail();//Show Hospital

        $this->hospitalObj = $hospital; //Making hospiral Object accessible to other memebers in the class

        $OterHospitals = Hospital::where('slug', '!=', $slug)->OterHospitals(); //Show other Hospital
        $location = Location::pluck('id', 'city');//Avail only id & city Field
        $facilityComfort = Comfort::pluck('id', 'name');//Avail only id & city Field

        // LONG METHOD
        // $comfort;
        // foreach ($hospital->comforts as $com): 
        //     $comfort[] = $com->name;
        // endforeach;
        // echo implode('<br>', $comfort);

// SHORT METHOD WITH A FUNCTION
        $comforts = $this->looper($this->hospitalObj->comforts);
        $money_matters = $this->looper($this->hospitalObj->money_matters);
        $foods = $this->looper($this->hospitalObj->foods);
        $treatment_relateds = $this->looper($this->hospitalObj->treatment_relateds);
        $languages = $this->looper($this->hospitalObj->languages);
        $transportations = $this->looper($this->hospitalObj->transportations);
       
        return view('hospitals.show', compact(['hospital', 'OterHospitals', 'location','comforts','money_matters','foods','treatment_relateds','languages','transportations','facilityComfort']));
    }

// To get the "Facilities" relation with the hospitals.
    public function looper($modelRel)
    {
        $newObject=[];
        foreach ($modelRel as $arrItem): 
            $newObject[] = $arrItem->name;
        endforeach;

        return $newObject;
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \FreeNation\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function edit(Hospital $hospital)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \FreeNation\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hospital $hospital)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \FreeNation\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hospital $hospital)
    {
        //
    }
}
