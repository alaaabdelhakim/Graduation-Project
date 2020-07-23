<?php

namespace App\Http\Controllers;

use App\Guest;
use Illuminate\Http\Request;



class GuestController extends Controller
{
    public function guest()
    {

        return view('layouts.register');

    }


    public function guestSaveData(Request $request)
    {
            $guest = new guest();
            $guest->u_name=$request->u_name;
            $guest->u_phone=$request->u_phone;
            $guest->u_email=$request->u_email;
            $guest->message=$request->message;
            $guest->save();

            return redirect()->back();
        
    }

    public function show(Guest $guest)
    {
        //
    }

    public function edit(Guest $guest)
    {
        $request->validate([

            'u_name' => 'required',
            'u_phone' => 'required',
            'u_email' => 'required',
            'message' => 'required',            
            
        ]);

        $guest->update($request->all());

    }

    public function update(Request $request, Guest $guest)
    {
        //
    }

    public function destroy(Guest $guest)
    {
    }
}
