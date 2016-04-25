<?php

namespace Askari\Http\Controllers;

use Illuminate\Http\Request;
use Askari\Http\Requests;
use Askari\Offender;
use Askari\User;
use Askari\Robbery;
use Askari\Evidence;

class RobberyController extends Controller
{
    /**
     * Show a list of all roberry offences.
     *
     * @return View
     */
    public function show()
    {
        $robbery_offences = Robbery::latest()->get();
        $robbery_offences->each(function ($offence) {
            $officer = User::find($offence->user_id);
            $offence['officer'] = $officer->first_name. ' '. $officer->last_name;

            $offender = Offender::find($offence->offender_id);
            $offence['offender'] = $offender->first_name. ' '. $offender->last_name;

        });

        return view('dashboard.offences.robbery.list', compact('robbery_offences'));
    }

    /**
     * Show the new robbery offence form
     *
     * @return View
     */
    public function create()
    {
        $offenders = Offender::all()->each(function ($offender) {
            $offender['search_value'] = $offender->national_id
                                        . ' '.$offender->first_name
                                        . ' '.$offender->middle_name
                                        . ' '.$offender->last_name;
        });
        $officers = User::all()->each(function ($officer) {
            $officer['search_value'] = $officer->police_id
                                        . ' '.$officer->first_name
                                        . ' '.$officer->middle_name
                                        . ' '.$officer->last_name;
        });

        $evidences = Evidence::all()->each(function ($evidence) {
            $evidence['search_value'] = $evidence->id . ' '. $evidence->item;
        });

        $evidences = $evidences->lists('search_value', 'id');
        $offenders = $offenders->lists('search_value', 'id');
        $officers = $officers->lists('search_value', 'id');

        return view('dashboard.offences.robbery.new', compact('offenders', 'officers', 'evidences'));
    }

    /**
     * Add new Robbery offence
     *
     * @param  Request $request Request from robbery form
     * @return Redirect
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'robbery_id' => 'required',
            'crime_id' => 'required',
            'evidence_id' => 'required',
            'offender_id' => 'required',
            'user_id' => 'required',
            'victims_name' => 'required',
            'crime_location' => 'required',
            'comments' => 'required',
         ]);

        if (Robbery::create($request->all())) {
            $request->session()->flash('status', 'success');
            $request->session()->flash('message', 'New Robbery offence successfully addded.');
            return redirect()->route('robbery_offences');
        } else {
            $request->session()->flash('status', 'error');
            $request->session()->flash('message', 'Error adding new Robbery offence.');
            return redirect()->route('new_robbery_offence');
        }
    }
}
