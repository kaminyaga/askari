<?php

namespace Askari\Http\Controllers;

use Illuminate\Http\Request;
use Askari\Http\Requests;
use Askari\User;
use Askari\Offender;
use Auth;

class OffenderController extends Controller
{
    /**
     * View for all offenders
     *
     * @return View
     */
    public function all()
    {
        $offenders = Offender::all();
        return view('dashboard.all_offenders', compact('offenders'));
    }

    /**
     * View an offenders profile
     *
     * @param  string $nationalId Offender's natinal ID
     * @return view             Offenders Profile
     */
    public function offenderProfile($nationalId)
    {
        return view('dashboard.offender_profile');
    }

    /**
     * View new offender's page
     *
     * @return View
     */
    public function create()
    {
        return view('dashboard.new_offender');
    }

    /**
     * Create new offender
     *
     * @return void
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'middle_name' => 'required|max:255',
            'dob' => 'required',
            'national_id' => 'required|unique:offenders',
            'phone_number' => '',
         ]);

         if(Auth::user()->offenders()->create($request->all())) {
                $request->session()->flash('status', 'success');
                $request->session()->flash('message', 'New offender successfully addded.');
                return redirect()->route('new_offender');
         } else {
                $request->session()->flash('status', 'error');
                $request->session()->flash('message', 'Error adding new offender.');
                return redirect()->route('new_offender');
         }
    }
}
