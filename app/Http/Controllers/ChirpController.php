<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ChirpController extends Controller
{
    function index(): View {
        return view('chirps', [
            //
        ]);
    }
}
