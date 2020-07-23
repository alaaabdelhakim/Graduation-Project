<?php

use RealRashid\SweetAlert\Facades\Alert;


 Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function (){

    Route::get('/index', 'DashboardController@index')->name('index');

    // User Routes  ->middleware(['auth'])

    Route::resource('users', 'UserController')->except(['show']);
    Route::resource('medical', 'MedicalController')->except(['show']);
    Route::resource('schools', 'SchoolController')->except(['show']);
    Route::resource('coaches', 'CoachController')->except(['show']);
    Route::resource('activities', 'ActivityController')->except(['show']);
    Route::resource('donations', 'DonationController')->except(['show']);
    Route::resource('famouscases', 'FamousCaseController')->except(['show']);
    Route::resource('guests', 'GuestController')->except(['show']);
    Route::resource('companies', 'CompanyController')->except(['show']);





});


?>