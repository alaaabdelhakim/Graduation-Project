<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $users= User::all();
        return view('dashboard.users.index', compact('users'));
    }


    public function create()

    {
        return view('dashboard.users.create');
    }

    public function store(Request $request)

    {

        
        $request->validate([

            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',
            
        ]);

        $request_data = $request->except(['password']);

        $request_data['password'] = bcrypt($request->password);
        
        $user = User::create($request_data);

        
        toast('Admin Created Successfully!','success');
        return redirect()->route('dashboard.users.index');
    }

    public function show(User $user)

    {
        //
    }


    public function edit(User $user)

    {
        return view('dashboard.users.edit', compact('user'));
    }


    public function update(Request $request, User $user)

    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users,email,'.ignore($user->id),
        ]);

        $user->update($request->all());

        toast('Admin Updated Successfully!','success');
        return redirect()->route('dashboard.users.index');
    }

    public function destroy(User $user)

    {
        $user->delete();
        toast('Admin Deleted Successfully!','success');
        return redirect()->route('dashboard.users.index');

    }
}
