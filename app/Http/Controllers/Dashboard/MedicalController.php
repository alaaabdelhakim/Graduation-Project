<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Medical;
use Illuminate\Http\Request;

class MedicalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medical= Medical::all();
        return view('dashboard.medical.index', compact('medical'));
    }


    public function create()
    {
        return view('dashboard.medical.create');
    }


    public function store(Request $request)
    {
        $medical = new medical;

            $image = $request->file('image');
            $input['image'] = time(). '.' .$image->getClientOriginalExtension();
            $dist = public_path('/images/medical/');
            $image->move($dist, $input['image']);
            $medical->image=$input['image'];

            $medical->m_name=$request->m_name;
            $medical->m_link=$request->m_link;
            $medical->m_phone=$request->m_phone;
            $medical->m_address=$request->m_address;


        $medical->save();
        
        toast('Medical Center Added Successfully!','success');
        return redirect()->route('dashboard.medical.index');
    }


    public function show(Medical $medical)
    {
        //
    }

    public function edit(Medical $medical)
    {
        return view('dashboard.medical.edit', compact('medical'));
    }


    public function update(Request $request, Medical $medical)
    {
        $medicals = medical::find($request->id);

        if ($request->image) {

            $image = $request->file('image');
            $input['image'] = time(). '.' .$image->getClientOriginalExtension();
            $dist = public_path('/images/medical/');
            $image->move($dist, $input['image']);
            $medical->image=$input['image'];

        }
        
        $medical->m_name=$request->m_name;
        $medical->m_link=$request->m_link;
        $medical->m_phone=$request->m_phone;
        $medical->m_address=$request->m_address;


        $medical->save();
        toast('Medical Center Updated Successfully!','success');
        return redirect()->route('dashboard.medical.index');
    }

  
    public function destroy(Medical $medical)
    {
        $medical->delete();
        toast('Medical Center Deleted Successfully!','success');
        return redirect()->route('dashboard.medical.index');
    }
}
