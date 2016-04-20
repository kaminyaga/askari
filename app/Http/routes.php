<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'dashboard'], function () {

    /**
     * Show new offender form to the Askari Platform
     */
    Route::get('offenders', [
        'uses' => 'OffenderController@all',
        'as' => 'all_offenders'
    ]);

    /**
     * Show new offender form to the Askari Platform
     */
    Route::get('offenders/new', 'OffenderController@create');

    /**
     * View / Update offenders Profile
     */
    Route::get('offenders/{national_id}', [
            'uses' => 'OffenderController@offenderProfile',
            'as' => 'offender'
        ]);

    /**
     * Add new offender to the Askari Platform
     */
    Route::post('offenders/new', [
        'uses' => 'OffenderController@store',
        'as' => 'new_offender'
    ]);
});
