<?php

namespace Askari\Http\Controllers;

use Illuminate\Http\Request;

use Askari\Http\Requests;

class EvidenceController extends Controller
{
    /**
     * List of all evidence
     *
     * @return View
     */
    public function show()
    {
        return view('dashboard.offences.evidence.list');
    }

    /**
     * Show the new evidence form
     *
     * @return View
     */
    public function create()
    {
        return view('dashboard.offences.evidence.new');
    }

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

        if (Evidence::create($request->all())) {
            $request->session()->flash('status', 'success');
            $request->session()->flash('message', 'New evidence successfully addded.');
            return redirect()->route('missings');
        } else {
            $request->session()->flash('status', 'error');
            $request->session()->flash('message', 'Error adding new evidence record.');
            return redirect()->route('missing');
        }

    }
}
