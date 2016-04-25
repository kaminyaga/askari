<?php

namespace Askari\Http\Controllers;

use Illuminate\Http\Request;
use Askari\Http\Requests;
use Askari\MissingPersons;
use Askari\Evidence;

class MissingPersonsController extends Controller
{
    /**
     * show list of all missing persons
     *
     * @return View
     */
    public function show()
    {
        $missing_persons = MissingPersons::latest()->get();
        return view('dashboard.offences.missing.list', compact('missing_persons'));
    }

    /**
     * Open the new traffic offence page
     *
     * @return View
     */
    public function create()
    {
        $evidences = Evidence::all()->each(function ($evidence) {
            $evidence['search_value'] = $evidence->id . ' '. $evidence->item;
        });

        $evidences = $evidences->lists('search_value', 'id');

        return view('dashboard.offences.missing.new', compact('evidences'));
    }

    /**
     * Add new traffic offence
     *
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'sex' => 'required',
            'dob' => 'required',
            'national_id' => 'required',
            'phone_number' => 'required',
            'guardians' => 'required',
            'reporting_date' => 'required',
            'evidence_id' => 'required',
            'date_last_seen' => 'required',
            'place_last_seen' => 'required',
         ]);

        if (MissingPersons::create($request->all())) {
            $request->session()->flash('status', 'success');
            $request->session()->flash('message', 'New Missing persons successfully addded.');
            return redirect()->route('missings');
        } else {
            $request->session()->flash('status', 'error');
            $request->session()->flash('message', 'Error adding new Missing persons record.');
            return redirect()->route('missing');
        }

    }
}
