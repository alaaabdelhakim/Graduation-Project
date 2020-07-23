<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\FamousCase;
use Illuminate\Http\Request;

class FamousCaseController extends Controller
{
    public function index()
    {
        $famouscases= famouscase::all();
        return view('dashboard.famouscases.index', compact('famouscases'));
    }


    public function create()
    {
        return view('dashboard.famouscases.create');
    }

    public function store(Request $request)
    {
        $famouscase = new famouscase;

            $image = $request->file('image');
            $input['image'] = time(). '.' .$image->getClientOriginalExtension();
            $dist = public_path('/images/famouscases/');
            $image->move($dist, $input['image']);
            $famouscase->image=$input['image'];

            $famouscase->f_name=$request->f_name;
            $famouscase->f_desc=$request->f_desc;



        $famouscase->save();

        
        toast('Case Added Successfully!','success');
        return redirect()->route('dashboard.famouscases.index');
    }


    public function show(famouscase $famouscase)
    {
        //
    }


    public function edit(famouscase $famouscase)
    {
        return view('dashboard.famouscases.edit', compact('famouscase'));
    }


    public function update(Request $request, famouscase $famouscase)
    {
        $famouscases = famouscase::find($request->id);

        if ($request->image) {

            $image = $request->file('image');
            $input['image'] = time(). '.' .$image->getClientOriginalExtension();
            $dist = public_path('/images/famouscases/');
            $image->move($dist, $input['image']);
            $famouscase->image=$input['image'];

        }//end of if


        $famouscase->f_name=$request->f_name;
        $famouscase->f_desc=$request->f_desc;

        $famouscase->save();

        toast('Case Updated Successfully!','success');
        return redirect()->route('dashboard.famouscases.index');
    }


    public function destroy(famouscase $famouscase)
    {
        $famouscase->delete();
        toast('Case Deleted Successfully!','success');
        return redirect()->route('dashboard.famouscases.index');
    }}
