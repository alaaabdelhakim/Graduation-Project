<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\School;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools= School::all();
        return view('dashboard.schools.index', compact('schools'));    }


    public function create()
    {
        return view('dashboard.schools.create');
    }


    public function store(Request $request)
    {
        $school = new school;

            $image = $request->file('image');
            $input['image'] = time(). '.' .$image->getClientOriginalExtension();
            $dist = public_path('/images/schools/');
            $image->move($dist, $input['image']);
            $school->image=$input['image'];

            $school->s_name=$request->s_name;
            $school->s_link=$request->s_link;
            $school->s_address=$request->s_address;


        $school->save();
        
        toast('School Added Successfully!','success');
        return redirect()->route('dashboard.schools.index');
    }


    public function show(School $school)
    {
        //
    }


    public function edit(School $school)
    {
        return view('dashboard.schools.edit', compact('school'));
    }


    public function update(Request $request, School $school)
    {
        $schools = school::find($request->id);

        if ($request->image) {

            $image = $request->file('image');
            $input['image'] = time(). '.' .$image->getClientOriginalExtension();
            $dist = public_path('/images/schools/');
            $image->move($dist, $input['image']);
            $school->image=$input['image'];

        }//end of if

        $school->s_name=$request->s_name;
        $school->s_link=$request->s_link;
        $school->s_address=$request->s_address;

        $school->save();
        toast('School Updated Successfully!','success');
        return redirect()->route('dashboard.schools.index');
    }


    public function destroy(School $school)
    {
        $school->delete();
        toast('School Deleted Successfully!','success');
        return redirect()->route('dashboard.schools.index');
    }
}
