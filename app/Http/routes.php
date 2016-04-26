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

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {

    /**
     * Show new offender form to the Askari Platform
     */
    Route::get('offenders', [
        'uses' => 'OffenderController@all',
        'as' => 'all_offenders',
        'middleware' => 'auth'
    ]);

    /**
     * Show new offender form to the Askari Platform
     */
    Route::get('offenders/new', [
        'uses' => 'OffenderController@create'
    ]);

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

    /**
     * See a list of all traffic offences
     */
    Route::get('offence/traffic', [
        'uses' => 'TrafficController@show',
        'as' => 'traffic_offences'
    ]);

    /**
     * See the new traffic offence page
     */
    Route::get('offence/traffic/new', [
        'uses' => 'TrafficController@create',
        'as' => 'traffic_offence'
    ]);

    /**
     * Add a new traffic offence
     */
    Route::post('offence/traffic/new', [
        'uses' => 'TrafficController@store',
        'as' => 'new_traffic_offence'
    ]);

    /**
     * See a list of all roberies
     */
    Route::get('offence/robbery', [
        'uses' => 'RobberyController@show',
        'as' => 'robbery_offences'
    ]);

    /**
     * See the new robbery offence page
     */
    Route::get('offence/robbery/new', [
        'uses' => 'RobberyController@create',
        'as' => 'robbery_offence'
    ]);

    /**
     * Add a new robbery offence
     */
    Route::post('offence/robbery/new', [
        'uses' => 'RobberyController@store',
        'as' => 'new_robbery_offence'
    ]);

    /**
     * Show a list of all impounds
     */
    Route::get('offence/impounds', [
        'uses' => 'ImpoundController@show',
        'as' => 'impounds'
    ]);

    /**
     * Show the New impound form
     */
    Route::get('offence/impounds/new', [
        'uses' => 'ImpoundController@create',
        'as' => 'impound'
    ]);

    /**
     * Add new impound record
     */
    Route::post('offence/impounds/new', [
        'uses' => 'ImpoundController@store',
        'as' => 'new_impound'
    ]);

    /**
     * Show list of all missin persons
     */
    Route::get('offence/missing', [
        'uses' => 'MissingPersonsController@show',
        'as' => 'missings'
    ]);

    /**
     * Show the New Missing persons form
     */
    Route::get('offence/missing/new', [
        'uses' => 'MissingPersonsController@create',
        'as' => 'missing'
    ]);

    /**
     * Add new Missing persons record
     */
    Route::post('offence/missing/new', [
        'uses' => 'MissingPersonsController@store',
        'as' => 'new_missing'
    ]);

        /**
     * Show list of all missin persons
     */
    Route::get('offence/evidence', [
        'uses' => 'EvidenceController@show',
        'as' => 'evidences'
    ]);

    /**
     * Show the New evidence form
     */
    Route::get('offence/evidence/new', [
        'uses' => 'EvidenceController@create',
        'as' => 'evidence'
    ]);

    /**
     * Add new evidence persons record
     */
    Route::post('offence/evidence/new', [
        'uses' => 'EvidenceController@store',
        'as' => 'new_evidence'
    ]);

    Route::get('offence/evidence/{id}', [
        'uses' => 'EvidenceController@showEvidence',
        'as' => 'evidence_profile'
    ]);
});
