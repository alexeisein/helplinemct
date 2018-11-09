<?php

namespace Hmct\Http\Controllers;

use Hmct\Food;
use Hmct\Hospital;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function __construct()
    {
        $this->middleware('isAdmin:admin');
    }
    
    public function index()
    {
        $foods = Food::orderBy('id')->paginate(20);
        $hospitals = Hospital::pluck('id', 'name');

        return view('facilities.food.index', compact('foods', 'hospitals'));
    }

// STORE
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:100|min:2|unique:departments',
        ]);

        $food = Food::create([
            'name' => $request->name,
            'hospital_id' => $request->hospital_id,
        ]);

        session()->flash('success_create', ucwords($food->name) ." Service Created Successfully!");
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Hmct\Comfort  $comfort
     * @return \Illuminate\Http\Response
     */
    public function edit(Food $food)
    {
        return view('facilities.food.edit', compact('food'));
    }

    // UPDATE UPDATE UPDATE
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $food = Food::findOrFail($id);
        
        $this->validate($request, [
            'name' => 'required|max:100|min:2|unique:departments',
        ]);
        
        $food->update([
            'name' => $request->name,
        ]);

        session()->flash('success_update', 'Update Successful !');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Hmct\Food  $comfort
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $food = Food::where('id', $id)->first();
        $food->delete();

        session()->flash('success_delete', ' Deleted Successfully');
        return redirect()->route('food.index');
    }
}
