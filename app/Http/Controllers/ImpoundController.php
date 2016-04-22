<?php

namespace Askari\Http\Controllers;

use Illuminate\Http\Request;
use Askari\Http\Requests;
use Askari\Offender;
use Askari\Impound;

class ImpoundController extends Controller
{
    /**
     * List of all impounds
     *
     * @return View
     */
    public function show()
    {
        $impounds = Impound::latest()->get();
        $impounds->each(function ($offence) {
            $offender = Offender::find($offence->offender_id);
            $offence['offender'] = $offender->first_name. ' '. $offender->last_name;
        });

        return view('dashboard.offences.impound.list', compact('impounds'));
    }

    /**
     * Show the create new impound form
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


        $offenders = $offenders->lists('search_value', 'id')->toArray();


        return view('dashboard.offences.impound.new', compact('offenders'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'impound_id' => 'required|unique:impounds',
            'make' => 'required',
            'licence_plate' => 'required|unique:impounds',
            'offender_id' => 'required',
            'dln' => 'required|unique:impounds',
            'vehicle_type' => 'required',
            'citation_number' => 'required',
         ]);

        if (Impound::create($request->all())) {
            $request->session()->flash('status', 'success');
            $request->session()->flash('message', 'New Impound offence successfully addded.');
            return redirect()->route('impounds');
        } else {
            $request->session()->flash('status', 'error');
            $request->session()->flash('message', 'Error adding new Impound record.');
            return redirect()->route('new_impound');
        }
    }
}
