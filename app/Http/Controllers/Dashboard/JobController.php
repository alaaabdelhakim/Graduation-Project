<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Job;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class JobController extends Controller
{

    public function index()
    {
        $jobs= Job::all();
        return view('dashboard.jobs.index', compact('jobs'));
    }


    public function create()
    {
        return view('dashboard.jobs.create');
    }

    public function store(Request $request)
    {
        $job = new job;

        $image = $request->file('image');
        $input['image'] = time(). '.' .$image->getClientOriginalExtension();
        $dist = public_path('/images/jobs/');
        $image->move($dist, $input['image']);
        $job->image=$input['image'];

        $job->j_name=$request->j_name;
        $job->j_address=$request->j_address;
        $job->j_type=$request->j_type;
        $job->j_link=$request->j_link;


        $job->save();


        
        toast('Job Added Successfully!','success');
        return redirect()->route('dashboard.jobs.index');
    }


    public function show(job $job)
    {
        //
    }


    public function edit(job $job)
    {
        return view('dashboard.jobs.edit', compact('job'));
    }


    public function update(Request $request, job $job)
    {
        $jobs = job::find($request->id);

        if ($request->image) {

            $image = $request->file('image');
            $input['image'] = time(). '.' .$image->getClientOriginalExtension();
            $dist = public_path('/images/jobs/');
            $image->move($dist, $input['image']);
            $job->image=$input['image'];

        }//end of if

        $job->j_name=$request->j_name;
        $job->j_address=$request->j_address;
        $job->j_type=$request->j_type;
        $job->j_link=$request->j_link;


        $job->save();

        toast('Job Updated Successfully!','success');
        return redirect()->route('dashboard.jobs.index');
    }


    public function destroy(job $job)
    {
        $job->delete();
        toast('Job Deleted Successfully!','success');
        return redirect()->route('dashboard.jobs.index');
    }
}
