<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $guests= Guest::all();
        return view('dashboard.guests.index', compact('guests'));
    }

    public function destroy(guest $guest)
    {
        $guest->delete();
        toast('Data Deleted Successfully!','success');
        return redirect()->route('dashboard.guests.index');
    }
}
