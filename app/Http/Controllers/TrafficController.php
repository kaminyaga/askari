<?php

namespace Askari\Http\Controllers;

use Illuminate\Http\Request;
use Askari\Http\Requests;
use Askari\Offender;
use Askari\User;
use Askari\Traffic;

class TrafficController extends Controller
{
    /**
     * show list of all traffic offences
     *
     * @return View
     */
    public function show()
    {
        $traffic_offences = Traffic::latest()->get();
        $traffic_offences->each(function ($offence) {
            $officer = User::find($offence->user_id);
            $offence['officer'] = $officer->first_name. ' '. $officer->last_name;

            $offender = Offender::find($offence->offender_id);
            $offence['offender'] = $offender->first_name. ' '. $offender->last_name;
        });

        return view('dashboard.offences.traffic.list', compact('traffic_offences'));
    }

    /**
     * Open the new traffic offence page
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

        $offenders = $offenders->lists('search_value', 'id')->toArray();
        $officers = $officers->lists('search_value', 'id');
        return view('dashboard.offences.traffic.new', compact('offenders', 'officers'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'citation_number' => 'required',
            'traffic_id' => 'required',
            'traffic_offence' => 'required',
            'offender_id' => 'required',
            'date_of_issue' => 'required',
            'court_date' => 'required',
            'user_id' => 'required',
         ]);

        if (Traffic::create($request->all())) {
            $request->session()->flash('status', 'success');
            $request->session()->flash('message', 'New Traffic offence successfully addded.');
            return redirect()->route('traffic_offences');
        } else {
            $request->session()->flash('status', 'error');
            $request->session()->flash('message', 'Error adding new Traffic offence.');
            return redirect()->route('new_traffic_offence');
        }

    }
}
