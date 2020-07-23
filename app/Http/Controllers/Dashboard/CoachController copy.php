<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Coach;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CoachController extends Controller
{
    public function index()
    {
        $coaches= Coach::all();
        return view('dashboard.coaches.index', compact('coaches'));
    }


    public function create()
    {
        return view('dashboard.coaches.create');
    }

    public function store(Request $request)
    {
        $coach = new coach;

            $image = $request->file('image');
            $input['image'] = time(). '.' .$image->getClientOriginalExtension();
            $dist = public_path('/images/coaches/');
            $image->move($dist, $input['image']);
            $coach->image=$input['image'];

            $coach->c_name=$request->c_name;
            $coach->c_link=$request->c_link;
            $coach->c_address=$request->c_address;
            $coach->c_phone=$request->c_phone;


        $coach->save();

        
        toast('Coach Added Successfully!','success');
        return redirect()->route('dashboard.coaches.index');
    }


    public function show(coach $coach)
    {
        //
    }


    public function edit(coach $coach)
    {
        return view('dashboard.coaches.edit', compact('coach'));
    }


    public function update(Request $request, coach $coach)
    {
        $coaches = coach::find($request->id);

        if ($request->image) {

            $image = $request->file('image');
            $input['image'] = time(). '.' .$image->getClientOriginalExtension();
            $dist = public_path('/images/coaches/');
            $image->move($dist, $input['image']);
            $coach->image=$input['image'];

        }//end of if

        $coach->c_name=$request->c_name;
        $coach->c_link=$request->c_link;
        $coach->c_address=$request->c_address;
        $coach->c_phone=$request->c_phone;


        $coach->save();

        toast('Coach Updated Successfully!','success');
        return redirect()->route('dashboard.coaches.index');
    }


    public function destroy(coach $coach)
    {
        $coach->delete();
        toast('Coach Deleted Successfully!','success');
        return redirect()->route('dashboard.coaches.index');
    }
}
