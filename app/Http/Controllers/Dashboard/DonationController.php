<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{

    public function index()
    {
        $donations= Donation::all();
        return view('dashboard.donations.index', compact('donations'));
    }

  
    public function destroy(donation $donation)
    {
        $donation->delete();
        toast('Data Deleted Successfully!','success');
        return redirect()->route('dashboard.donations.index');
    }
}
