<?php

namespace App\Http\Controllers;

use App\TreatmentRelated;
use App\Hospital;

use Illuminate\Http\Request;

class TreatmentRelatedController extends Controller
{
    public function index()
    {
        $treatmentRelateds = TreatmentRelated::orderBy('id')->paginate(20);
        $hospitals = Hospital::pluck('id', 'name');

        return view('facilities.treatmentrelated.index', compact('treatmentRelateds', 'hospitals'));
    }

    // STORE
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:100|min:2|unique:departments',
        ]);

        $treatmentRelated = TreatmentRelated::create([
            'name' => $request->name,
            'hospital_id' => $request->hospital_id,
        ]);

        session()->flash('success_create', ucwords($treatmentRelated->name) ." Service Created Successfully!");
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comfort  $comfort
     * @return \Illuminate\Http\Response
     */
    public function edit(TreatmentRelated $treatmentrelated)
    {
        return view('facilities.treatmentrelated.edit', compact('treatmentrelated'));
    }

    // UPDATE UPDATE UPDATE
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $treatmentRelated = TreatmentRelated::findOrFail($id);
        
        $this->validate($request, [
            'name' => 'required|max:100|min:2|unique:departments',
        ]);
        
        $treatmentRelated->update([
            'name' => $request->name,
        ]);

        session()->flash('success_update', 'Update Successful !');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Food  $comfort
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $treatmentRelated = TreatmentRelated::where('id', $id)->first();
        $treatmentRelated->delete();

        session()->flash('success_delete', ' Deleted Successfully');
        return redirect()->route('treatmentrelated.index');
    }


}
