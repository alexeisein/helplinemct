<?php

namespace Hmct\Http\Controllers;

use Hmct\Comfort;
use Hmct\Hospital;

use Illuminate\Http\Request;

class ComfortController extends Controller
{
    public function __construct()
    {
        $this->middleware('isAdmin:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comforts = Comfort::orderBy('id')->paginate(20);
        $hospitals = Hospital::pluck('id', 'name');

        return view('facilities.comfort.index', compact('comforts', 'hospitals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'name' => 'required|max:100|min:2|unique:departments',
        ]);

        $comfort = Comfort::create([
            'name' => $request->name,
            'hospital_id' => $request->hospital_id,
        ]);

        session()->flash('success_create', ucwords($comfort->name) ." Service Created Successfully!");
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \Hmct\Comfort  $comfort
     * @return \Illuminate\Http\Response
     */
    public function show(Comfort $comfort)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Hmct\Comfort  $comfort
     * @return \Illuminate\Http\Response
     */
    public function edit(Comfort $comfort)
    {
        return view('facilities.comfort.edit', compact('comfort'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Hmct\Comfort  $comfort
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $comfort = Comfort::findOrFail($id);
        
        $this->validate($request, [
            'name' => 'required|max:100|min:2|unique:departments',
        ]);
        
        $comfort->update([
            'name' => $request->name,
        ]);

        session()->flash('success_update', 'Update Successful !');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Hmct\Comfort  $comfort
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comfort = Comfort::where('id', $id)->first();
        $comfort->delete();

        session()->flash('success_delete', ' Deleted Successfully');
        return redirect()->back();
    }
}
