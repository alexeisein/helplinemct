<?php

namespace Hmct\Http\Controllers;

use Hmct\Department;
use Hmct\Hospital;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
// use Illuminate\Http\UploadedFile;

class DepartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('isAdmin:admin')->except(['index','show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::orderBy('id')->paginate(10);
        $hospitals = Hospital::pluck('id', 'name');
        
        return view('department.index')->withDepartments($departments)->withHospitals($hospitals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('department.create');
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
            'description' => 'required|max:2000|min:2',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = str_slug($request->name).'.'.$image->extension();
// Move the image to a save directory.
            $image->storeAs('public/departments/',$imageName);

            $department = Department::create([
                'hospital_id' => $request->hospital_id,
                'name' => $request->name,
                'description' => $request->description,
                'image' => $imageName,
                'slug' => str_slug($request->name),
            ]);
        }

        session()->flash('success_create', $department->name ." Department Created Successfully!");
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \Hmct\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $department = Department::where('slug',$slug)->firstOrFail();
        $otherDepartments = Department::where('slug', '!=', $slug)->inRandomOrder()->latest()->paginate(8);
        return view('department.show', compact(['department', 'otherDepartments']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Hmct\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        $hospitals = Hospital::pluck('id', 'name');
        // dd($hospital);
        return view('department.edit', compact('department', 'hospitals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Hmct\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
// Name's unique. don't validate name if name input matches with DB name field.
        $department = Department::findOrFail($id);
        if ($department->name == $request->name) {
            $this->validate($request, [
                'description' => 'required|max:2000|min:2',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
        }else{
            // Otherwise, run validation
            $this->validate($request, [
                'name' => 'required|max:100|min:2|unique:departments',
                'description' => 'required|max:2000|min:2',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
        }

// hasFile checks if user uploads image, then save the file
            if ($request->hasFile('image')) {
                $image = $request->file('image'); //main file
                $imageName = str_slug($request->name).'.'.$image->extension(); //save this to DB image field
                $image->storeAs('public/departments/',$imageName);//save it in the drive with defined name.

                // $oldImage = $department->image;
                // $oldImgPath = $oldImage->storeAs('public/departments/', $oldImage);
                // $oldImage->image = $imageName; exclude this.
                // Storage::delete($oldImgPath);
                $department->update([
                    'image' => $imageName,
                ]);
            }else{
// Do this if user only wants to update other fields except image upload.
                $department->update([
                    'hospital_id' => $request->hospital_id,
                    'name' => $request->name,
                    'description' => $request->description,
                    'slug' => str_slug($request->name),
                ]);
            }

        session()->flash('success_update', ' Department Upadted Successfully !');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Hmct\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $department = Department::where('slug', $slug)->first();
        Storage::delete('public/departments/'.$department->image);
        $department->delete();

        session()->flash('success_delete', ' Deleted Successfully');
        return redirect()->route('department.index');
    }
}
