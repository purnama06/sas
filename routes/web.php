<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ListingController@home')->name('home');

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('dashboard', function(){
        if(Auth::user()->level == 2) {
            return redirect('/');
        }
        return view('admin.dashboard');
    })->name('dashboard');

    Route::middleware('sas_admin')->group(function(){
        Route::resource('qualification', 'QualificationController');
        Route::resource('university', 'UniversityController');
        Route::resource('user', 'UserController');
    });

    Route::middleware('univ_admin')->group(function(){
        Route::resource('programme', 'ProgrammeController');
    });
});

Route::get('university/{id}/programme', 'ListingController@universityProgramme')->name('university.programme');
Route::get('programme/{id}/detail', 'ListingController@detailProgramme')->name('programme.detail');