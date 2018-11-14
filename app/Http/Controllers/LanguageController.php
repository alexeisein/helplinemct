<?php

namespace Hmct\Http\Controllers;

use Hmct\Language;
use Hmct\Hospital;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('isAdmin:admin');
    }


    public function index()
    {
        $languages = Language::orderBy('id')->paginate(20);
        $hospitals = Hospital::pluck('id', 'name');

        return view('facilities.language.index', compact('languages', 'hospitals'));
    }

    // STORE
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:100|min:2|unique:departments',
        ]);

        $language = Language::create([
            'name' => $request->name,
            'hospital_id' => $request->hospital_id,
        ]);

        session()->flash('success_create', ucwords($language->name) ." Service Created Successfully!");
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Hmct\Comfort  $comfort
     * @return \Illuminate\Http\Response
     */
    public function edit(Language $language)
    {
        return view('facilities.language.edit', compact('language'));
    }

    // UPDATE UPDATE UPDATE
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $language = Language::findOrFail($id);
        
        $this->validate($request, [
            'name' => 'required|max:100|min:2|unique:departments',
        ]);
        
        $language->update([
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
        $language = Language::where('id', $id)->first();
        $language->delete();

        session()->flash('success_delete', ' Deleted Successfully');
        return redirect()->back();
    }

}
