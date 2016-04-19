<?php

namespace Askari\Http\Controllers;

use Illuminate\Http\Request;

use Askari\Http\Requests;

class DashboardController extends Controller
{
    public function newOffender()
    {
        return view('dashboard.new_offender');
    }
}
