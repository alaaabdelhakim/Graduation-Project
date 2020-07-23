<?php

namespace App\Http\Controllers\Dashboard;

use App\Activity;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActivityController extends Controller
{

    public function index()
    {
        $activities= Activity::all();
        return view('dashboard.activities.index', compact('activities'));
    }


    public function create()
    {
        return view('dashboard.activities.create');
    }


    public function store(Request $request)
    {
        $activities = new activity;
        

        $audio = $request->file('audio');
        $input['audio'] = time(). '.' .$audio->getClientOriginalExtension();
        $dist = public_path('/audio/activities/');
        $audio->move($dist, $input['audio']);
        $activities->audio=$input['audio'];

        $video = $request->file('video');
        $input['video'] = time(). '.' .$video->getClientOriginalExtension();
        $dist = public_path('/video/activities/');
        $video->move($dist, $input['video']);
        $activities->video=$input['video'];

        $activities->a_type=$request->a_type;
        $activities->save();

        toast('Activity Added Successfully!','success');
        return redirect()->route('dashboard.activities.index');

    }

    public function show(Activity $activity)
    {
        //
    }


    public function edit(Activity $activity)
    {
        return view('dashboard.activities.edit', compact('activity'));
    }


    public function update(Request $request, Activity $activity)
    {
        $activities= activity::find($request->id);
        if($request->audio){
            $audio = $request->file('audio');
            $input['audio'] = time(). '.' .$audio->getClientOriginalExtension();
            $dist = public_path('/audio/activities/');
            $audio->move($dist, $input['audio']);
            $activities->audio=$input['audio'];
        }

        if($request->video){
            $video = $request->file('video');
            $input['video'] = time(). '.' .$video->getClientOriginalExtension();
            $dist = public_path('/video/activities/');
            $video->move($dist, $input['video']);
            $activities->audio=$input['video'];
        }

        $activities->a_type=$request->a_type;
        $activities->save();

        toast('Activity Edited Successfully!','success');
        return redirect()->route('dashboard.activities.index');
    }


    public function destroy(Activity $activity)
    {
        $activity->delete();
        toast('Activity Deleted Successfully!','success');
        return redirect()->route('dashboard.activities.index');
    }
}
