<?php

namespace Askari\Http\Controllers;

use Illuminate\Http\Request;

use Askari\Http\Requests;

class OffenderController extends Controller
{
    public function offenderProfile($nationalId)
    {
        return view('dashboard.offender_profile');
    }
}
