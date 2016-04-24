<?php

namespace Askari\Http\Controllers;

use Illuminate\Http\Request;
use Askari\Http\Requests;
use Askari\Evidence;

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
            'item' => 'required',
            'quantity' => 'required',
            'serial_number' => 'required',
            'status' => 'required',
            'description' => 'required',
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
