<?php

namespace Hmct\Http\Controllers;

use Illuminate\Http\Request;
use Hmct\Location;

class LocationController extends Controller
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
        $locations = Location::orderBy('id')->paginate(25);
        return view('location.index')->withLocations($locations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('location.create');
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
            'city' => 'required|max:100|min:2',
            'state' => 'required|max:100|min:2',
            // 'slug' => 'required|max:100|min:2'
        ]);

        $location = Location::create([
            'city' => $request->city,
            'state' => $request->state,
            'slug' => str_slug($request->city .'-' .$request->state),
        ]);

        session()->flash('success_create', $location->city ." City created successfully!");
        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $location = Location::where('id', $id)->firstOrFail();
        $location = Location::findOrFail($id);
        return view('location.edit', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $this->validate($request, [
            'city' => 'required|max:100|min:2',
            'state' => 'required|max:100|min:2',
        ]);

        Location::where('id', $id)->update([
            'city' => $request->city,
            'state' => $request->state,
            'slug' => str_slug($request->city .'-' .$request->state),
        ]);

        session()->flash('success_update', 'Update Successful !');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        try{
            $location = Location::where('slug', $slug)->delete();
            session()->flash('success_delete', ' Deleted Successfully');
            return redirect()->route('location.index');

        }catch(Exception $e){
            return $e->getMessage();
        }
    }
}
