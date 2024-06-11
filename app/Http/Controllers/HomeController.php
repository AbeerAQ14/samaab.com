<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function Termwind\renderUsing;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function index(Request $request)
    {
        if ($request->lang){
            Session::put('lang',$request->lang);
            return redirect()->route('landing');
        }
        if (Session::get('lang') == 'ar'){
            return view('arabic');
        }
        return view('english');
    }
}
