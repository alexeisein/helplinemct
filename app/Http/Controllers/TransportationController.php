<?php

namespace App\Http\Controllers;

use App\Transportation;
use App\Hospital;

use Illuminate\Http\Request;

class TransportationController extends Controller
{
    public function index()
    {
        $transportations = Transportation::orderBy('id')->paginate(20);
        $hospitals = Hospital::pluck('id', 'name');

        return view('facilities.transportation.index', compact('transportations', 'hospitals'));
    }

    // STORE
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:100|min:2|unique:departments',
        ]);

        $transportation = Transportation::create([
            'name' => $request->name,
            'hospital_id' => $request->hospital_id,
        ]);

        session()->flash('success_create', ucwords($transportation->name) ." Service Created Successfully!");
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comfort  $comfort
     * @return \Illuminate\Http\Response
     */
    public function edit(Transportation $transportation)
    {
        return view('facilities.transportation.edit', compact('transportation'));
    }

    // UPDATE UPDATE UPDATE
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $transportation = Transportation::findOrFail($id);
        
        $this->validate($request, [
            'name' => 'required|max:100|min:2|unique:departments',
        ]);
        
        $transportation->update([
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
        $transportation = Transportation::where('id', $id)->first();
        $transportation->delete();

        session()->flash('success_delete', ' Deleted Successfully');
        return redirect()->route('transportation.index');
    }
}