<?php

namespace FreeNation\Http\Controllers;

use FreeNation\MoneyMatter;
use FreeNation\Hospital;

use Illuminate\Http\Request;

class MoneyMatterController extends Controller
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
        $moneyMatters = MoneyMatter::orderBy('id')->paginate(20);
        $hospitals = Hospital::pluck('id', 'name');

        return view('facilities.moneymatter.index', compact('moneyMatters', 'hospitals'));
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
            'name' => 'required|max:100|min:2|unique:departments',
        ]);

        $moneyMatter = MoneyMatter::create([
            'name' => $request->name,
            'hospital_id' => $request->hospital_id,
        ]);

        session()->flash('success_create', ucwords($moneyMatter->name) ." Service Created Successfully!");
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \FreeNation\MoneyMatter  $moneyMatter
     * @return \Illuminate\Http\Response
     */
    public function show(MoneyMatter $moneyMatter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \FreeNation\MoneyMatter  $moneyMatter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $moneyMatter = MoneyMatter::findOrFail($id);
        return view('facilities.moneymatter.edit', compact('moneyMatter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \FreeNation\MoneyMatter  $moneyMatter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $moneyMatter = MoneyMatter::findOrFail($id);
        
        $this->validate($request, [
            'name' => 'required|max:100|min:2|unique:departments',
        ]);
        
        $moneyMatter->update([
            'name' => $request->name,
        ]);

        session()->flash('success_update', 'Update Successful !');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \FreeNation\MoneyMatter  $moneyMatter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $moneyMatter = MoneyMatter::where('id', $id)->first();
        $moneyMatter->delete();

        session()->flash('success_delete', ' Deleted Successfully');
        return redirect()->route('moneymatter.index');
    }
}
