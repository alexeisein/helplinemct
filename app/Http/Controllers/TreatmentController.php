<?php

namespace Hmct\Http\Controllers;

use Hmct\Treatment;
use Hmct\Doctor;
use Storage;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Doctor $doctor)
    {
        $treatments = Treatment::orderBy('id')->paginate(20);
        $doctors = $doctor->all();
        return view('treatments.index', compact('treatments', 'doctors'));
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
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required|max:191|unique:treatments',
            'cost' => 'required|integer',
            'no_travellers' => 'required|integer',
            'in_duration' => 'required|integer',
            'out_duration' => 'required|integer',
            'total_duration' => 'required|integer',
            'description' => 'required|max:65500',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = str_slug($request->name) .'.' .$image->extension();
            $image->storeAs('public/treatments/', $imageName);

            $treatment = Treatment::create([
                'name' => $request->name,
                'cost' => $request->cost,
                'travellers' => $request->no_travellers,
                'inpatient_duration' => $request->in_duration,
                'outpatient_duration' => $request->out_duration,
                'total_duration' => $request->total_duration,
                'description' => $request->description,
                'slug' => str_slug($request->name),
                'image' => $imageName
            ]);

            $treatment->doctors()->sync($request->doctor_id, false);

            session()->flash('success_create', ucwords($treatment->name) ." Treatment Created Successfully!");
             return redirect()->back();
             // return redirect()->route('treatment.show', $treatment->slug);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \Hmct\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $treatment = Treatment::where('slug', $slug)->firstOrFail();
        return view('treatments.show', compact('treatment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Hmct\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function edit(Treatment $treatment, Doctor $doctor)
    {
        // $relIds = $treatment->doctors()->allRelatedIds();
        //$treatments = $treatment->where('slug', '=', $treatment->slug)->first();
        $doctors = $doctor->all();
        $doctorsIds = $treatment->doctors->pluck('id', 'name');//just for the "add button in edit page" to access doctors  k

        return view('treatments.edit', compact('treatment','doctorsIds', 'doctors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Hmct\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Treatment $treatment)
    {

        if ($treatment->name == $request->name) {
            $this->validate($request, [
                'cost' => 'required|integer',
                'no_travellers' => 'required|integer',
                'in_duration' => 'required|integer',
                'out_duration' => 'required|integer',
                'total_duration' => 'required|integer',
                'description' => 'required|max:65500',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        }else{
            $this->validate($request, [
                'name' => 'required|max:191|unique:treatments',
                'cost' => 'required|integer',
                'no_travellers' => 'required|integer',
                'in_duration' => 'required|integer',
                'out_duration' => 'required|integer',
                'total_duration' => 'required|integer',
                'description' => 'required|max:4000',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        }
// if the user upload-edit image & or other field(s), save it. else user only update other field(s) alone
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = str_slug($request->name) .'.' .$image->extension();
            $image->storeAs('public/treatments/', $imageName);

            $treatment->update([
                'image' => $imageName,
                ]);
        }else{
            $treatment->update([
                'name' => $request->name,
                'cost' => $request->cost,
                'travellers' => $request->no_travellers,
                'inpatient_duration' => $request->in_duration,
                'outpatient_duration' => $request->out_duration,
                'total_duration' => $request->total_duration,
                'description' => $request->description,
                'slug' => str_slug($request->name),
                ]);
            }

            session()->flash('success_update'," Treatment Updated Successfully!");
             return redirect()->route('treatment.edit', $treatment->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Hmct\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Treatment $treatment)
    {
        // dd($treatment->slug);
        $treatment = Treatment::where('slug', $treatment->slug)->first();
        Storage::delete('public/treatments/'.$treatment->image);
        $treatment->delete();

        session()->flash('success_delete', ' Deleted Successfully');
        return redirect()->route('treatment.index');
    }
}
