<?php

namespace App\Http\Controllers;

use App\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{

    public function index()
    {
        return view('layouts.donations');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate([
            'donor',
            'd_phone', 
            'd_type',
        ]);

        $request_data = $request->all();

        $donation = Donation::create($request_data);

        toast('Donation Submitted Successfully!','success');
        return redirect()->back();

    }

 
    public function show(Donation $donation)
    {
        //
    }

 
    public function edit(Donation $donation)
    {
        //
    }

 
    public function update(Request $request, Donation $donation)
    {
        //
    }

    public function destroy(Donation $donation)
    {
        //
    }
}
