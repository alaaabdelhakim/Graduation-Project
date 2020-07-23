<?php

    use Illuminate\Support\Facades\Route;
    use Illuminate\Http\Request;
    use RealRashid\SweetAlert\Facades\Alert;




    Auth::routes();

    Route::get('/', function()
    {
        return view('layouts.home');
    });    

        Route::get('companies', function()
        {
            return view('layouts.companies');
        });

        Route::get('medical', function()
        {
            return view('layouts.medical');
        });

        Route::get('schools', function()
        {
            return view('layouts.schools');
        });

        Route::get('coaches', function()
        {
            return view('layouts.coaches');
        });

        Route::get('activity', function()
        {
            return view('layouts.activity');
        });

        Route::get('donations', function()
        {
            return view('layouts.donations');
        });

        Route::get('activity', function()
        {
            return view('layouts.activity');
        });

        Route::get('famouscases', function()
        {
            return view('layouts.famouscases');
        });


        Route::get('donations', 'DonationController@index')->name('donations');
        Route::post('donations', ['as'=>'donations.store','uses'=>'DonationController@store']);
        Route::get('register', 'GuestController@guest');
        Route::post('register', ['as'=>'guest.store','uses'=>'GuestController@guestSaveData']);

?>

